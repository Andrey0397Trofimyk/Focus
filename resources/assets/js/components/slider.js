import Swiper, { Thumbs, Autoplay, Navigation, Lazy, EffectFade } from 'swiper';

let thumbsName = 'js--thumbs-basic-slider',
    basicName = 'js--basic-slider',
    newsSlider = 'js--news-slider',
    rating = 'js--rating-slider',
    nowPopular = 'js--now-popular-slider',
    thumbsSlider;
    
if(!!document.getElementsByClassName(thumbsName)[0]) {

    thumbsSlider = new Swiper(`.${thumbsName}`, {
        modules: [Lazy],
        lazy: {
            loadOnTransitionStart: true,
        },
        loop: false,
        spaceBetween: 10,
        slidesPerView: 1.2,
        freeMode: true,
        watchSlidesProgress: true,
        slideToClickedSlide: true,
        breakpoints: {
            576: {
              slidesPerView: 2.2,
              spaceBetween: 20
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 20
            },
            992: {
              slidesPerView: 4,
              spaceBetween: 25
            },
        }
    });
}

if(!!document.getElementsByClassName(basicName)[0] && !!thumbsSlider) {

    new Swiper(`.${basicName}`, {
        modules: [Thumbs, Autoplay, Lazy, EffectFade ],
        loop: false,
        effect: 'fade',
        spaceBetween: 10,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false
        },
        lazy: {
            loadOnTransitionStart: true,
        },
        thumbs: {
            swiper: thumbsSlider,
        },
    });
}

if(!!document.getElementsByClassName(newsSlider)[0]) {
    
    new Swiper(`.${newsSlider}`, {
        modules: [Navigation, Lazy],
        lazy: {
            loadOnTransitionStart: true,
        },
        loop: true,
        slidesPerView: 1,
        spaceBetween: 0,
        navigation: {
            nextEl: '.js--new-slider-next',
            prevEl: '.js--new-slider-prev',
          },
    });
}

if(!!document.getElementsByClassName(rating)[0]) {

    new Swiper(`.${rating}`, {
        modules: [Navigation, Lazy],
        loop: true,
        lazy: {
            loadOnTransitionStart: true,
        },
        spaceBetween: 10,
        slidesPerView: 1,
        freeMode: true,
        navigation: {
            nextEl: '.js--rating-next',
            prevEl: '.js--rating-prev',
        },
        breakpoints: {
            360: {
                slidesPerView: 1.4,
              },
            480: {
              slidesPerView: 2,
              spaceBetween: 20
            },
            700: {
                slidesPerView: 3,
                spaceBetween: 25,
            }
        }
    });
}

if(!!document.getElementsByClassName(nowPopular)[0]) {
    new Swiper(`.${nowPopular}`, {
        modules: [Navigation, Lazy],
        lazy: {
            loadOnTransitionStart: true,
        },
        loop: true,
        spaceBetween: 10,
        slidesPerView: 1,
        freeMode: true,
        navigation: {
            nextEl: `.js--now-popular-next`,
            prevEl: `.js--now-popular-prev`,
        },
        breakpoints: {
            360: {
                slidesPerView: 1.4,
                },
            480: {
                slidesPerView: 2,
                spaceBetween: 20
            },
            700: {
                slidesPerView: 3,
                spaceBetween: 25,
            },
            1200: {
                slidesPerView: 4,
                spaceBetween: 25,
            }
        }
    });
}