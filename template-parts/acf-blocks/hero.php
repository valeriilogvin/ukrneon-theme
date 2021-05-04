<?php
$hero_h1 = get_sub_field('hero_h1');
$hero_h2 = get_sub_field('hero_h2');
$hero_h3 = get_sub_field('hero_h3');
$hero_h4 = get_sub_field('hero_h4');
$hero_form_title = get_sub_field('hero_form_title');
$hero_form_subtitle = get_sub_field('hero_form_subtitle');
?>

<section class="hero" id="hero"
         style="background: linear-gradient(90deg, rgba(0, 0, 0, 0.5) 0, rgba(0, 0, 0, .5) 100%), url('<?php echo get_stylesheet_directory_uri() ?>/img/ukrneon/hero_bg.png') center center/cover no-repeat">
    <div class="container">
        <div class="hero__inner">
            <div class="hero__left">
                <h1 class="hero__h1 alr _anim-items _anim-off"><?php echo $hero_h1 ?></h1>
                <h2 class="hero__h2 alr _anim-items _anim-off"><?php echo $hero_h2 ?></h2>
                <h3 class="hero__h3 alr _anim-items _anim-off"><?php echo $hero_h3 ?></h3>
                <h4 class="hero__h4 alr _anim-items _anim-off"><?php echo $hero_h4 ?></h4>
                <div class="hero__icons">
                    <div class="hero__item ascale _anim-items _anim-off">
                        <div class="hero__icon">
                            <img class="hero__icon-svg"
                                 src="<?php echo get_stylesheet_directory_uri() ?>/img/ukrneon/hero-icon-1.svg" alt="">
                        </div>
                        <div class="hero__icon-text">
                            Оформление
                            фасадов
                        </div>
                    </div>
                    <div class="hero__item ascale _anim-items _anim-off">
                        <div class="hero__icon">
                            <img class="hero__icon-svg"
                                 src="<?php echo get_stylesheet_directory_uri() ?>/img/ukrneon/hero-icon-2.svg" alt="">
                        </div>
                        <div class="hero__icon-text">
                            Оформление и
                            декорирование
                            интерьеров
                        </div>
                    </div>
                    <div class="hero__item ascale _anim-items _anim-off">
                        <div class="hero__icon">
                            <img class="hero__icon-svg"
                                 src="<?php echo get_stylesheet_directory_uri() ?>/img/ukrneon/hero-icon-3.svg" alt="">
                        </div>
                        <div class="hero__icon-text">
                            Наружная
                            реклама
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__right arl _anim-items _anim-off">
                <div class="form-block">
                    <p class="form-block__title">
                        У вас есть идея или фотография
                        объекта который хотите реализовать?
                    </p>
                    <p class="form-block__subtitle">
                        Заполните форму ниже и получите профессиональную консультацию специалиста  прямо сейчас
                    </p>

                    <form action="" class="form">
                        <input type="text" class="form__input" placeholder="Александр">
                        <input name="phone" type="tel"  class="form__input" placeholder="+380 __ ___ __ __">
                        <submit class="form__submit btn">Получить консультацию</submit>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>