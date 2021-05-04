<section class="navbar ascale _anim-items _anim-off">
    <div class="container">
        <div class="navbar__inner">
            <a class="navbar__logo" href="#header">
                <img class="navbar__logo-img" src="<?php the_field('logo') ?>" alt="">
            </a>

            <div class="navbar__center">
                <ul class="navbar__menu">
                    <li class="navbar__item">
                        <a class="burger__link " href="#about">О нас</a>
                    </li>
                    <li class="navbar__item">
                        <a class="burger__link " href="#comprehensive">Комплекс</a>

                        <ul class="navbar__submenu">
                            <li><a class="burger__link navbar__subitem" href="#stena">Стеновые панели</a></li>
                            <li><a class="burger__link navbar__subitem" href="#3d_panel">3D Панели, Рейки</a></li>
                            <li><a class="burger__link navbar__subitem" href="#hpl">HPL Панели</a></li>
                            <li><a class="burger__link navbar__subitem" href="#fbc">Фиброцементные панели</a></li>
                            <li><a class="burger__link navbar__subitem" href="#tpkt">Термопакет</a></li>
                            <li><a class="burger__link navbar__subitem" href="#evr">Еврососна</a></li>
                            <li><a class="burger__link navbar__subitem" href="#injenier">Инженерная доска</a></li>
                            <li><a class="burger__link navbar__subitem" href="#glass">Стеклянные перегородки</a></li>
                        </ul>
                    </li>
                    <li class="navbar__item">
                        <a class="burger__link " href="#reviews">Фотостудия</a>
                    </li>
                    <li class="navbar__item">
                        <a class="burger__link " href="#footer">Партнерство</a>
                    </li>
                    <li class="navbar__item">
                        <a class="burger__link " href="#contacts">Контакты</a>
                    </li>
                </ul>
            </div>

            <div class="navbar__contacts">
                <a href="tel:<?php the_field('tel') ?>"><?php the_field('tel') ?></a>
                <span class="navbar__city">г.Одесса</span>
            </div>

            <button id="header_btn" class="btn navbar__btn">Получить консультацию</button>

            <button class="navbar__burger-btn menu-btn">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </div>
</section>