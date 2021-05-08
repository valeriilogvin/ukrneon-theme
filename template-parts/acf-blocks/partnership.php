<?php
    $partnership_form_title = get_sub_field('partnership_form_title');
    $partnership_form_subtitle = get_sub_field('partnership_form_subtitle');
    $partnership_title = get_sub_field('partnership_title');
    $partnership_subtitle = get_sub_field('partnership_subtitle');
    $partnership_icons = get_sub_field('partnership_icons');
    $partnership_bg = get_sub_field('partnership_bg');


?>

<section class="partnership" id="partnership" style="background: linear-gradient(0deg, rgba(16, 16, 16, 0.65), rgba(16, 16, 16, 0.65)), url(<?php echo $partnership_bg ?>) center center/cover no-repeat;">
    <div class="container">
        <div class="partnership__inner">
            <div class="form-block partnership__form-block alr _anim-items _anim-off">
                <p class="form-block__title"><?php echo $partnership_form_title ?></p>
                <p class="form-block__subtitle"><?php echo $partnership_form_subtitle ?></p>
    
                <?php echo do_shortcode( ' [contact-form-7 id="258" title="Форма партнерство" html_class="use-floating-validation-tip form"] ' ); ?>
    
                <!--<form action="" class="form">
                    <input type="text" class="form__input" placeholder="Александр">
                    <input name="phone" type="tel"  class="form__input" placeholder="+380 __ ___ __ __">
                    <submit class="form__submit btn">Получить консультацию</submit>
                </form>-->
            </div>

            <div class="partnership__icon-block">

                <p class="partnership__heading heading heading--l heading--500 aud _anim-items _anim-off"><?php echo $partnership_title ?></p>
                <p class="partnership__subtitle"><?php echo $partnership_subtitle ?></p>

                <?php
                if( $partnership_icons ) {
                    echo '<div class="partnership__icons">';
                    while( the_repeater_field('partnership_icons') ) {
                        $partnership_icon = get_sub_field('partnership_icon');
                        $partnership_text = get_sub_field('partnership_text');

                        echo '
                            <div class="partnership__item ascale _anim-items _anim-off">
                                <div class="partnership__icon">
                                    <img class="partnership__icon-svg" src="'. $partnership_icon .'" alt="">
                                </div>
                                <div class="partnership__icon-text">'. $partnership_text .'</div>
                            </div>
                        ';
                    }
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </div>
</section>