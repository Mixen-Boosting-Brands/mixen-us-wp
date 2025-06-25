// core version + navigation, pagination modules:
import Swiper from "swiper";
import {
  Navigation,
  Pagination,
  Scrollbar,
  Autoplay,
  FreeMode,
} from "swiper/modules";
// import Swiper and modules styles
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";
import "swiper/css/scrollbar";

// Swiper Success Stories
const swiperSuccesStories = new Swiper(".swiperSuccessStories", {
  // Initialize modules
  modules: [Navigation, Pagination, Scrollbar],

  // Optional parameters
  direction: "horizontal",
  loop: true,

  // Navigation arrows
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  // And if we need scrollbar
  scrollbar: {
    el: ".swiper-scrollbar",
    hide: false,
    draggable: true,
  },
});

// Swiper Why Choose Mixen
const swiperWhyChooseMixen = new Swiper(".swiperWhyChooseMixen", {
  // Initialize modules
  modules: [Navigation, Pagination, Scrollbar, Autoplay],

  slidesPerView: 1,
  spaceBetween: 30,
  freeMode: false,
  cssMode: false,
  simulateTouch: true,
  grabCursor: true,

  breakpoints: {
    576: {
      slidesPerView: 1,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
    992: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
  },

  autoplay: {
    delay: 3000, // 3 seconds between slides
    disableOnInteraction: false, // continue autoplay after user interaction
    pauseOnMouseEnter: true, // pause on hover
  },

  // Optional parameters
  direction: "horizontal",
  loop: true,

  // Pagination
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },

  // Navigation arrows
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  // And if we need scrollbar
  scrollbar: {
    el: ".swiper-scrollbar",
    hide: false,
    draggable: true,
  },
});

swiperWhyChooseMixen.on("slideChange", () => {
  const slides = swiperWhyChooseMixen.slides;
  slides.forEach((slide) => {
    slide.classList.remove("is-active", "is-center", "is-left", "is-right");
  });

  const activeIndex = swiperWhyChooseMixen.activeIndex;

  if (window.innerWidth < 768) {
    const activeSlide = slides[activeIndex];
    if (activeSlide) activeSlide.classList.add("is-active");
  } else {
    // Center slide
    const centerIndex = activeIndex + 1;
    const centerSlide = slides[centerIndex];
    if (centerSlide) centerSlide.classList.add("is-center");

    // Left and Right slides
    const leftSlide = slides[activeIndex];
    const rightSlide = slides[activeIndex + 2];
    if (leftSlide) leftSlide.classList.add("is-left");
    if (rightSlide) rightSlide.classList.add("is-right");
  }
});

// Trigger once on load
swiperWhyChooseMixen.emit("slideChange");

// Keep it responsive
window.addEventListener("resize", () => {
  swiperWhyChooseMixen.emit("slideChange");
});

// Swiper Success Stories Internal
const swiperSuccessStoriesInternal = new Swiper(
  ".swiperSuccessStoriesInternal",
  {
    // Initialize modules
    modules: [Navigation, Pagination, Scrollbar, Autoplay, FreeMode],

    slidesPerView: 1,
    spaceBetween: 30,
    freeMode: false,
    cssMode: false,
    simulateTouch: true,
    grabCursor: true,

    breakpoints: {
      576: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
      768: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
      992: {
        slidesPerView: 4,
        spaceBetween: 30,
      },
    },

    autoplay: {
      delay: 3000, // 3 seconds between slides
      disableOnInteraction: false, // continue autoplay after user interaction
      pauseOnMouseEnter: true, // pause on hover
    },

    // Optional parameters
    direction: "horizontal",
    loop: true,

    // Pagination
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },

    // Navigation arrows
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    // And if we need scrollbar
    scrollbar: {
      el: ".swiper-scrollbar",
      hide: false,
      draggable: true,
    },
  },
);
