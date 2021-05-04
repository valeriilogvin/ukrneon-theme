<!-- Pushy Menu -->
<nav class="pushy pushy-right">
    <div class="pushy-content">
        <a class="menu-btn">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M24 2.82811L21.1719 0L12 9.17186L2.82811 0L0 2.82811L9.17186 12L0 21.1719L2.82811 24L12 14.8281L21.1718 24L23.9999 21.1719L14.8281 12L24 2.82811Z"
                      fill="white"/>
            </svg>
        </a>

        <a href="#" class="pushy__logo pushy-link">
            <img class="navbar__logo-img" src="<?php the_field('logo') ?>" alt="">
        </a>

        <ul class="pushy__menu">
            <li class="pushy__li">
                <a class="pushy__link " href="#about">О нас</a>
            </li>
            <li class="pushy__li">
                <a class="pushy__link " href="#comprehensive">Комплекс</a>

                <!--<ul class="navbar__submenu">
                    <li><a class="pushy__link navbar__subitem" href="#stena">Стеновые панели</a></li>
                    <li><a class="pushy__link navbar__subitem" href="#3d_panel">3D Панели, Рейки</a></li>
                    <li><a class="pushy__link navbar__subitem" href="#hpl">HPL Панели</a></li>
                    <li><a class="pushy__link navbar__subitem" href="#fbc">Фиброцементные панели</a></li>
                    <li><a class="pushy__link navbar__subitem" href="#tpkt">Термопакет</a></li>
                    <li><a class="pushy__link navbar__subitem" href="#evr">Еврососна</a></li>
                    <li><a class="pushy__link navbar__subitem" href="#injenier">Инженерная доска</a></li>
                    <li><a class="pushy__link navbar__subitem" href="#glass">Стеклянные перегородки</a></li>
                </ul>-->
            </li>
            <li class="pushy__li">
                <a class="pushy__link " href="#reviews">Фотостудия</a>
            </li>
            <li class="pushy__li">
                <a class="pushy__link " href="#footer">Партнерство</a>
            </li>
            <li class="pushy__li">
                <a class="pushy__link " href="#contacts">Контакты</a>
            </li>
        </ul>

        <ul class="pushy__menu">
            <li class="pushy__li"><a class="pushy__link" href="tel:<?php the_field('tel') ?>"><?php the_field('tel') ?></a></li>
            <li class="pushy__li"><a class="pushy__link" href="tel:<?php the_field('tel_2') ?>"><?php the_field('tel_2') ?></a></li>
            <li class="pushy__li"><a class="pushy__link" href="mailto:<?php the_field('email') ?>"><?php the_field('email') ?></a></li>
        </ul>
    </div>
</nav>

<!-- Site Overlay -->
<div class="site-overlay"></div>