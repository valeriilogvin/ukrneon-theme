<div class="md-modal md-effect-1" id="modal-form">
    <div class="md-content">
        <button class="md-close"><i class="fas fa-times"></i></button>
        <div class="form-block">
            <p class="form-block__title">
                У вас есть идея или фотография
                объекта который хотите реализовать?
            </p>
            <p class="form-block__subtitle">
                Заполните форму ниже и получите профессиональную консультацию специалиста  прямо сейчас
            </p>

            <?php echo do_shortcode( ' [contact-form-7 id="180" title="Контактная форма" html_class="use-floating-validation-tip form"] ' ); ?>

            <!--                    <form action="" class="form">
                                    <input type="text" class="form__input" placeholder="Александр">
                                    <input name="phone" type="tel"  class="form__input" placeholder="+380 __ ___ __ __">
                                    <submit class="form__submit btn">Получить консультацию</submit>
                                </form>-->
        </div>
    </div>
</div>

<div class="md-overlay"></div><!-- the overlay element -->