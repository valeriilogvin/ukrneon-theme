<section class="navbar ascale _anim-items _anim-off">
    <div class="container">
        <div class="navbar__inner">
            <a class="navbar__logo" href="#header">
                <img class="navbar__logo-img" src="<?php the_field('logo', 5) ?>" alt="">
            </a>

            <div class="navbar__center">
                <ul class="navbar__menu">
                    <li class="navbar__item">
                        <a class="burger__link " href="#about">О нас</a>
                    </li>
                    <li class="navbar__item">
                        <a class="burger__link " href="#comprehensive">Комплекс</a>

                        <ul class="navbar__submenu">
                            <li><a class="burger__link navbar__subitem" href="#complex_btn">Интерьерный комплекс</a></li>
                            <li><a class="burger__link navbar__subitem" href="#led_btn">Led Экраны</a></li>
                            <li><a class="burger__link navbar__subitem" href="#ext_btn">Экстерьер и Интерьер</a></li>
                            <li><a class="burger__link navbar__subitem" href="#fas_btn">Оформление фасадов</a></li>
                            <li><a class="burger__link navbar__subitem" href="#spec_btn">Спец. конструкции</a></li>
                        </ul>
                    </li>
         <!--           <li class="navbar__item">
                        <a class="burger__link " href="#reviews">Фотостудия</a>
                    </li>-->
                    <li class="navbar__item">
                        <a class="burger__link " href="#partnership">Партнерство</a>
                    </li>
                    <li class="navbar__item">
                        <a class="burger__link " href="#footer">Контакты</a>
                    </li>
                </ul>
            </div>

            <div class="navbar__contacts">
                <a href="tel:<?php the_field('tel') ?>"><?php the_field('tel', 5) ?></a>
                <span class="navbar__city">г.Одесса</span>
            </div>

            <button id="header_btn" data-modal="modal-form" class="md-trigger btn navbar__btn">Получить консультацию</button>

            <button class="navbar__burger-btn menu-btn">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </div>
</section>