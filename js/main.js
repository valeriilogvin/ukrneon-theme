/* Jquery */
$(document).ready(function () {

    // navmenu on scroll
    $(window).scroll(function () {
        if (this.scrollY > 40) {
            $('.navbar').addClass('sticky');
        } else {
            $('.navbar').removeClass('sticky');
        }
    });


    // slick-sliders
    $('.infoblock__slider').slick({
        slidesToShow: 1,
        infinite: true,
        dots: false,
        arrows: true,
        speed: 800,
        swipe: true,
        autoplay: true,
        pauseOnHover: false,
        autoplaySpeed: 2000,
        fade: true,
        prevArrow: '<button type="button" class="my-slick-prev"></button>',
        nextArrow: '<button type="button" class="my-slick-next"></button>'
    });

    $('.js_docs_slider').slick({
        slidesToShow: 7,
        slidesToScroll: 1,
        infinite: true,
        dots: false,
        speed: 800,
        arrows: true,
        autoplay: true,
        autoplaySpeed: 2000,
        prevArrow: '<button type="button" class="my-slick-prev"></button>',
        nextArrow: '<button type="button" class="my-slick-next"></button>',
        responsive: [
            {
                breakpoint: 1366,
                settings: {
                    slidesToShow: 5
                }
            },
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2
                }
            }
        ]
    });

    $('.companies__slider').slick({
        slidesToShow: 4,
        infinite: true,
        dots: false,
        arrows: true,
        speed: 500,
        swipe: true,
        pauseOnHover: false,
        autoplay: true,
        autoplaySpeed: 2000,
        prevArrow: '<button type="button" class="my-slick-prev"></button>',
        nextArrow: '<button type="button" class="my-slick-next"></button>',
        responsive: [
            {
                breakpoint: 1280,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });

    $('.warranty__slider').slick({
        infinite: true,
        dots: false,
        arrows: true,
        speed: 800,
        swipe: true,
        autoplay: true,
        autoplaySpeed: 2000,
        pauseOnHover: false,
        slidesToShow: 4,
        prevArrow: '<button type="button" class="my-slick-prev"></button>',
        nextArrow: '<button type="button" class="my-slick-next"></button>',
        responsive: [
            {
                breakpoint: 1600,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 1280,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    fade: true
                }
            }
        ]
    });

    $('.reviews__slider').slick({
        infinite: true,
        dots: false,
        arrows: true,
        speed: 800,
        swipe: true,
        adaptiveHeight: true,
        pauseOnHover: false,
        autoplay: false,
        autoplaySpeed: 2000,
        slidesToShow: 1,
        fade: true,
        prevArrow: '<button type="button" class="my-slick-prev"></button>',
        nextArrow: '<button type="button" class="my-slick-next"></button>',
    });

    // lightgallery
    lightGallery(document.querySelector('.lifestyle__photos'));

    let $docGallery = document.querySelector('.js_docs_slider'),
        docSlider = $docGallery.querySelector('.slick-track');

    lightGallery(docSlider);

    // tabs
    $('.infoblock__tab').on('click', function () {
        let thisTabIndex = $(this).attr('data-tab'),
            tabContainer = $(this).parent().siblings('.infoblock__text'),
            thisTabContainer = tabContainer.find(`.infoblock__descr[data-tab='${thisTabIndex}']`);

        $(this)
            .addClass('active')
            .siblings()
            .removeClass('active');

        thisTabContainer
            .addClass('active')
            .siblings()
            .removeClass('active');
    });


    // маска телефон
    let inputs = document.querySelectorAll('input[type="tel"]');
    let im = new Inputmask('+38(999) 999-99-99');
    im.mask(inputs);

    // плавная прокрутка
    $("a[href]").click(function () {
        const _href = $(this).attr("href");
        $("html, body").animate({scrollTop: $(_href).offset().top + "px"});
        return false;
    });

    // Animations
    const animItems = document.querySelectorAll('._anim-items');
    if (animItems.length > 0) {
        window.addEventListener('scroll', animOnScroll);

        function animOnScroll() {
            for (let index = 0; index < animItems.length; index++) {
                const animItem = animItems[index];
                const animItemHeight = animItem.offsetHeight;
                const animItemOffset = offset(animItem).top;
                const animStart = 3;

                let animItemPoint = window.innerHeight - animItemHeight / animStart;

                if (animItemHeight > window.innerHeight) {
                    animItemPoint = window.innerHeight - window.innerHeight / animStart;
                }
                if ((pageYOffset > animItemOffset - animItemPoint) && pageYOffset < (animItemOffset + animItemHeight)) {
                    animItem.classList.add('_active');
                } else {
                    if (!animItem.classList.contains('_anim-off')) {
                        animItem.classList.remove('_active');
                    }
                }
            }
        }

        function offset(el) {
            const rect = el.getBoundingClientRect(),
                scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,
                scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            return {
                top: rect.top + scrollTop,
                left: rect.left + scrollLeft
            }
        }

        setTimeout(() => {
            animOnScroll();
        }, 300);
    }
});