<?php
/**
 * The template for displaying the footer
 *
 * @package termo-wood
 */

?>

    <section class="footer" id="footer">
        <div class="container">
            <div class="footer__left">
                <div class="footer__wrapper alr _anim-items _anim-off">
                    <div class="footer__place">
                        <div class="footer__place_icon">
                            <svg width="70" height="70" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M47.4194 0H22.5806C10.1097 0 0 10.1097 0 22.5806V47.4194C0 59.8903 10.1097 70 22.5806 70H47.4194C59.8903 70 70 59.8903 70 47.4194V22.5806C70 10.1097 59.8903 0 47.4194 0Z" fill="#CFCFCF"/>
                                <path d="M35.0013 11.668C25.9713 11.668 18.668 18.9713 18.668 28.0013C18.668 40.2513 35.0013 58.3346 35.0013 58.3346C35.0013 58.3346 51.3346 40.2513 51.3346 28.0013C51.3346 18.9713 44.0313 11.668 35.0013 11.668ZM35.0013 33.8346C31.7813 33.8346 29.168 31.2213 29.168 28.0013C29.168 24.7813 31.7813 22.168 35.0013 22.168C38.2213 22.168 40.8346 24.7813 40.8346 28.0013C40.8346 31.2213 38.2213 33.8346 35.0013 33.8346Z" fill="#E31E24"/>
                            </svg>
                        </div>
                        <div class="footer__place_title">Место нахождения</div>
                    </div>
                    <div class="footer__address"><?php the_field('address') ?></div>
                    <div class="footer__contacts">
                        <div class="footer__contacts_icon">
                            <svg width="70" height="70" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M47.4194 0H22.5806C10.1097 0 0 10.1097 0 22.5806V47.4194C0 59.8903 10.1097 70 22.5806 70H47.4194C59.8903 70 70 59.8903 70 47.4194V22.5806C70 10.1097 59.8903 0 47.4194 0Z" fill="#CFCFCF"/>
                                <path d="M21.05 33.3111C24.65 39.6 30.45 44.7333 37.525 47.9556L43.025 43.0667C43.7 42.4667 44.7 42.2667 45.575 42.5333C48.375 43.3556 51.4 43.8 54.5 43.8C55.875 43.8 57 44.8 57 46.0222V53.7778C57 55 55.875 56 54.5 56C31.025 56 12 39.0889 12 18.2222C12 17 13.125 16 14.5 16H23.25C24.625 16 25.75 17 25.75 18.2222C25.75 21 26.25 23.6667 27.175 26.1556C27.45 26.9333 27.25 27.8 26.55 28.4222L21.05 33.3111Z" fill="#E31E24"/>
                            </svg>
                        </div>
                        <div class="footer__contacts_title">Контакты</div>
                    </div>
                    <div class="footer__links">
                        <a class="footer__link" href="tel:<?php the_field('tel') ?>"><?php the_field('tel') ?></a><br>
                        <a class="footer__link" href="tel:<?php the_field('tel_2') ?>"><?php the_field('tel_2') ?></a><br>
                        <a class="footer__link" href="mailto:<?php the_field('email') ?>"><?php the_field('email') ?></a>
                    </div>

                    <div class="footer__soc">
                        <a class="footer__soc_item" href="<?php the_field('instagram') ?>">
                            <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M26.3658 0.667969H11.5708C8.67992 0.671366 5.90843 1.8214 3.86444 3.86573C1.82044 5.91007 0.67088 8.68175 0.667969 11.5726L0.667969 26.3676C0.671366 29.2585 1.8214 32.03 3.86573 34.074C5.91007 36.118 8.68175 37.2676 11.5726 37.2705H26.3676C29.2585 37.2671 32.03 36.117 34.074 34.0727C36.118 32.0284 37.2676 29.2567 37.2705 26.3658V11.5708C37.2671 8.67992 36.117 5.90843 34.0727 3.86444C32.0284 1.82044 29.2567 0.67088 26.3658 0.667969V0.667969ZM33.5891 26.3658C33.5891 27.3144 33.4023 28.2537 33.0393 29.13C32.6763 30.0064 32.1442 30.8027 31.4735 31.4735C30.8027 32.1442 30.0064 32.6763 29.13 33.0393C28.2537 33.4023 27.3144 33.5891 26.3658 33.5891H11.5708C9.65537 33.5886 7.81856 32.8274 6.46432 31.4728C5.11008 30.1182 4.3493 28.2812 4.3493 26.3658V11.5708C4.34979 9.65537 5.11103 7.81856 6.46561 6.46432C7.8202 5.11008 9.6572 4.3493 11.5726 4.3493H26.3676C28.2831 4.34979 30.1199 5.11103 31.4741 6.46561C32.8284 7.8202 33.5891 9.6572 33.5891 11.5726V26.3676V26.3658Z" fill="white"/>
                                <path d="M18.9676 9.50391C16.4585 9.50779 14.0534 10.5063 12.2794 12.2807C10.5054 14.055 9.5073 16.4604 9.50391 18.9694C9.50682 21.4791 10.5049 23.8852 12.2794 25.66C14.0538 27.4347 16.4597 28.4333 18.9694 28.4367C21.4794 28.4338 23.8858 27.4354 25.6606 25.6606C27.4354 23.8858 28.4338 21.4794 28.4367 18.9694C28.4329 16.4597 27.4338 14.054 25.6587 12.2799C23.8835 10.5058 21.4773 9.50816 18.9676 9.50574V9.50391ZM18.9676 24.7554C17.4335 24.7554 15.9623 24.146 14.8775 23.0613C13.7928 21.9765 13.1834 20.5053 13.1834 18.9712C13.1834 17.4372 13.7928 15.966 14.8775 14.8812C15.9623 13.7965 17.4335 13.1871 18.9676 13.1871C20.5016 13.1871 21.9729 13.7965 23.0576 14.8812C24.1423 15.966 24.7517 17.4372 24.7517 18.9712C24.7517 20.5053 24.1423 21.9765 23.0576 23.0613C21.9729 24.146 20.5016 24.7554 18.9676 24.7554Z" fill="white"/>
                                <path d="M28.4553 11.8404C29.7078 11.8404 30.7232 10.825 30.7232 9.57252C30.7232 8.32003 29.7078 7.30469 28.4553 7.30469C27.2028 7.30469 26.1875 8.32003 26.1875 9.57252C26.1875 10.825 27.2028 11.8404 28.4553 11.8404Z" fill="white"/>
                            </svg>
                        </a>
                        <a class="footer__soc_item" href="<?php the_field('facebook') ?>">
                            <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M33.8125 0.8125H2.1875C1.42695 0.8125 0.8125 1.42695 0.8125 2.1875V33.8125C0.8125 34.573 1.42695 35.1875 2.1875 35.1875H33.8125C34.573 35.1875 35.1875 34.573 35.1875 33.8125V2.1875C35.1875 1.42695 34.573 0.8125 33.8125 0.8125ZM32.4375 32.4375H24.527V21.8758H28.9957L29.666 16.6895H24.527V13.3766C24.527 11.8727 24.9438 10.85 27.0965 10.85H29.8422V6.20938C29.3652 6.14492 27.7367 6.00313 25.8375 6.00313C21.8758 6.00313 19.1645 8.42227 19.1645 12.8609V16.6852H14.6871V21.8715H19.1688V32.4375H3.5625V3.5625H32.4375V32.4375Z" fill="white"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="footer__map ascale _anim-items _anim-off">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d43967.39864697802!2d30.69461776930614!3d46.46925244159031!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c63324a0d44acb%3A0x879aac60c97c278a!2z0KjQvtGDLdCg0YPQvCDQo9Ca0KDQndCV0J7QnS3QotCV0KDQnNCe0JTQldCg0JXQktCeIC0g0LTQtdC60L7RgCDQuNC90YLQtdGA0YzQtdGA0LAg0Lgg0Y3QutGB0YLQtdGA0YzQtdGA0LA!5e0!3m2!1sru!2sua!4v1617197336662!5m2!1sru!2sua" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
            <div class="footer__right arl _anim-items _anim-off">
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
                        <submit class="form__submit">Получить консультацию</submit>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <div class="overlay">
        <div class="modal" id="consultation">
            <div class="header__form">
                <div class="modal__logo"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/modallogo.svg" alt="modallogo"></div>
                <div class="header__form_title">У вас есть идея или фотография
                    объекта который хотите реализовать?</div>
                <div class="header__form_subtitle">Заполните форму ниже<br>
                    и получите бесплатную консультацию специалиста</div>

                <script>!function(a,m,o,c,r,m){a[o+c]=a[o+c]||{setMeta:function(p){this.params=(this.params||[]).concat([p])}},a[o+r]=a[o+r]||function(f){a[o+r].f=(a[o+r].f||[]).concat([f])},a[o+r]({id:"763048",hash:"731fdd6a2afd2d5db3b63ca912a23e06",locale:"ru"})}(window,0,"amo_forms_","params","load");</script><script id="amoforms_script_763048" async="async" charset="utf-8" src="https://forms.amocrm.ru/forms/assets/js/amoforms.js?1617736173"></script>
<!--                <form class="form">-->
<!--                    <input class="formname" name="name" type="text" placeholder="Ваше имя" id="name">-->
<!--                    <input class="formphone" name="phone" type="tel" placeholder="Ваш телефон" id="phone">-->
<!--                    <button class="btn form__btn">-->
<!--                        Получить консультацию-->
<!--                    </button>-->
<!--                </form>-->
            </div>
            <div class="modal__close">&times;</div>
        </div>
        <div class="modal modal_mini" id="thanks">
            <div class="modal__close">&times;</div>
            <div class="modal__subtitle">Спасибо за Вашу заявку!</div>
            <div class="modal__descr">Наш менеджер свяжется с вами в ближайшее время!</div>
        </div>
    </div>

</div> <!-- <div class="page"> -->
<?php wp_footer(); ?>
</body>
</html>