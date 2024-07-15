import Swiper from "swiper";
import {Pagination, Navigation} from 'swiper/modules';

document.addEventListener("DOMContentLoaded", () => {
    let sliderImage = document.querySelector('.slider-image__wrap_swiper')

    if (sliderImage) {
        const swiper = new Swiper(sliderImage, {
            modules: [Pagination, Navigation],
            slidesPerView: 1,
            spaceBetween: 16,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                1024: {
                    spaceBetween: 24,
                    slidesPerView: 2,
                },
                1280: {
                    spaceBetween: 32,
                    slidesPerView: 3,
                }
            },
        });
    }
});