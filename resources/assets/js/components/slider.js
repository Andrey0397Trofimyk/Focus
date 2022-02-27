import Swiper, { Thumbs, Autoplay, Navigation } from 'swiper';

let thumbsName = 'js--thumbs-basic-slider',
    basicName = 'js--basic-slider',
    newsSlider = 'js--news-slider',
    rating = 'js--rating-slider',
    nowPopular = 'js--now-popular-slider',
    thumbsSlider;
    
if(!!document.getElementsByClassName(thumbsName)[0]) {

    thumbsSlider = new Swiper(`.${thumbsName}`, {
        loop: false,
        spaceBetween: 10,
        slidesPerView: 1.2,
        freeMode: true,
        watchSlidesProgress: true,
        breakpoints: {
            576: {
              slidesPerView: 2.2,
              spaceBetween: 20
            },
            768: {
                slidesPerView: 3.2,
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
        modules: [Thumbs, Autoplay],
        loop: false,
        spaceBetween: 10,
        // autoplay: {
        //     delay: 5000,
        // },
        thumbs: {
            swiper: thumbsSlider,
        },
    });
}

if(!!document.getElementsByClassName(newsSlider)[0]) {
    
    new Swiper(`.${newsSlider}`, {
        modules: [Navigation],
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
        modules: [Navigation],
        loop: true,
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
        modules: [Navigation],
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