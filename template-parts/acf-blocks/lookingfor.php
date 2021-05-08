<?php
    $lookingfor_title = get_sub_field('lookingfor_title');
    $lookingfor_subtitle = get_sub_field('lookingfor_subtitle');
    $lookingfor_items = get_row_layout('lookingfor_items');
    $lookingfor_bg = get_sub_field('lookingfor_bg');

?>

<section class="lookingfor" style="background: linear-gradient(0deg, rgba(16, 16, 16, 0.65), rgba(16, 16, 16, 0.65)), url(<?php echo $lookingfor_bg ?>) center center/ cover no-repeat;">
    <div class="container">
        <div class="lookingfor__inner">
            <div class="lookingfor__left">
                <div class="lookingfor__heading heading heading--l heading--500 heading--white aud _anim-items _anim-off">
                    <?php echo $lookingfor_title ?>
                </div>
                <div class="lookingfor__subtitle subheading aud _anim-items _anim-off">
                    <?php echo $lookingfor_subtitle ?>
                </div>

                <?php
                if( $lookingfor_items ) {
                    echo '<div class="lookingfor__icons">';
                    while( the_repeater_field('lookingfor_items') ) {
                        $lookingfor_item_icon = get_sub_field('lookingfor_item_icon');
                        $lookingfor_item_text = get_sub_field('lookingfor_item_text');

                        echo '
                            <div class="lookingfor__item ascale _anim-items _anim-off">
                                <div class="lookingfor__icon icon">
                                    <img class="icon__img" src="'. $lookingfor_item_icon .'" alt="">
                                </div>
                                <div class="lookingfor__icon-text">'. $lookingfor_item_text .'</div>
                            </div>
                        ';
                    }
                    echo '</div>';
                }
                ?>
            </div>

            <div class="lookingfor__right arl _anim-items _anim-off">
                <div class="form-block">
                    <p class="form-block__title">
                        У вас есть идея или фотография
                        объекта который хотите реализовать?
                    </p>
                    <p class="form-block__subtitle">
                        Заполните форму ниже и получите профессиональную консультацию специалиста  прямо сейчас
                    </p>
    
                    <?php echo do_shortcode( ' [contact-form-7 id="180" title="Контактная форма" html_class="use-floating-validation-tip form"] ' ); ?>
    
                    <!--<form action="" class="form">
                        <input type="text" class="form__input" placeholder="Александр">
                        <input name="phone" type="tel"  class="form__input" placeholder="+380 __ ___ __ __">
                        <submit class="form__submit btn">Получить консультацию</submit>
                    </form>-->
                </div>
            </div>
        </div>
    </div>
</section>