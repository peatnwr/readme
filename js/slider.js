/*
=============
Glide Js Carousel 1
=============
 */

const slider1_glide_1 = document.getElementById("glide_1");
const slider2_glide_2 = document.getElementById("glide_2");
const slider3_glide_3 = document.getElementById("glide_3");
const slider4_glide_4 = document.getElementById("glide_4");
const slider5_glide_5 = document.getElementById("glide_5");

/*
=============
Hero
=============
 */
if (slider1_glide_1) {
  new Glide(slider1_glide_1, {
    type: "carousel",
    startAt: 0,
    autoplay: 3000,
    hoverpause: true,
    perView: 1,
    animationDuration: 800,
    animationTimingFunc: "linear",
  }).mount();
}

/*
=============
Latest Products
=============
 */

if (slider2_glide_2) {
  new Glide("#glide_2", {
    type: "carousel",
    startAt: 0,
    perView: 4,
    rewin: false,
    animationDuration: 800,
    animationTimingFunc: "cubic-bezier(0.165, 0.840, 0.440, 1.000)",
    breakpoints: {
      1200: {
        perView: 3,
      },
      768: {
        perView: 2,
      },
    },
  }).mount();
}

/*
=============
Related Products
=============
 */

if (slider3_glide_3) {
  new Glide("#glide_3", {
    type: "carousel",
    startAt: 0,
    perView: 4,
    rewin: false,
    animationDuration: 800,
    animationTimingFunc: "cubic-bezier(0.165, 0.840, 0.440, 1.000)",
    breakpoints: {
      1200: {
        perView: 3,
      },
      768: {
        perView: 2,
      },
    },
  }).mount();
}

// Testimonial

if (slider4_glide_4) {
  new Glide("#glide_4", {
    type: "carousel",
    startAt: 0,
    perView: 1,
    rewin: false,
    animationDuration: 800,
    animationTimingFunc: "cubic-bezier(0.165, 0.840, 0.440, 1.000)",
  }).mount();
}

// News
if (slider5_glide_5) {
  new Glide("#glide_5", {
    type: "carousel",
    startAt: 0,
    perView: 3,
    rewin: false,
    autoplay: 3000,
    animationDuration: 800,
    animationTimingFunc: "cubic-bezier(0.165, 0.840, 0.440, 1.000)",
    breakpoints: {
      998: {
        perView: 2,
      },
      768: {
        perView: 1,
      },
    },
  }).mount();
}

AOS.init();

/*
=============
Glide Js Carousel 2
=============
 */

const slider1_rlide_1 = document.getElementById("rlide_1");
const slider2_rlide_2 = document.getElementById("rlide_2");
const slider3_rlide_3 = document.getElementById("rlide_3");
const slider4_rlide_4 = document.getElementById("rlide_4");

/*
=============
Latest Products
=============
 */

if (slider1_rlide_1) {
  new Glide("#rlide_1", {
    type: "carousel",
    startAt: 0,
    perView: 4,
    rewin: false,
    animationDuration: 800,
    animationTimingFunc: "cubic-bezier(0.165, 0.840, 0.440, 1.000)",
    breakpoints: {
      1200: {
        perView: 3,
      },
      768: {
        perView: 2,
      },
    },
  }).mount();
}

/*
=============
Related Products
=============
 */

if (slider2_rlide_2) {
  new Glide("#rlide_2", {
    type: "carousel",
    startAt: 0,
    perView: 4,
    rewin: false,
    animationDuration: 800,
    animationTimingFunc: "cubic-bezier(0.165, 0.840, 0.440, 1.000)",
    breakpoints: {
      1200: {
        perView: 3,
      },
      768: {
        perView: 2,
      },
    },
  }).mount();
}

// Testimonial

if (slider3_rlide_3) {
  new Glide("#rlide_3", {
    type: "carousel",
    startAt: 0,
    perView: 1,
    rewin: false,
    animationDuration: 800,
    animationTimingFunc: "cubic-bezier(0.165, 0.840, 0.440, 1.000)",
  }).mount();
}

// News
if (slider4_rlide_4) {
  new Glide("#rlide_4", {
    type: "carousel",
    startAt: 0,
    perView: 3,
    rewin: false,
    autoplay: 3000,
    animationDuration: 800,
    animationTimingFunc: "cubic-bezier(0.165, 0.840, 0.440, 1.000)",
    breakpoints: {
      998: {
        perView: 2,
      },
      768: {
        perView: 1,
      },
    },
  }).mount();
}

AOS.init();

/*
=============
Glide Js Carousel 3
=============
 */

const slider1_ylide_1 = document.getElementById("ylide_1");
const slider2_ylide_2 = document.getElementById("ylide_2");
const slider3_ylide_3 = document.getElementById("ylide_3");
const slider4_ylide_4 = document.getElementById("ylide_4");

/*
=============
Latest Products
=============
 */

if (slider1_ylide_1) {
  new Glide("#ylide_1", {
    type: "carousel",
    startAt: 0,
    perView: 4,
    rewin: false,
    animationDuration: 800,
    animationTimingFunc: "cubic-bezier(0.165, 0.840, 0.440, 1.000)",
    breakpoints: {
      1200: {
        perView: 3,
      },
      768: {
        perView: 2,
      },
    },
  }).mount();
}

/*
=============
Related Products
=============
 */

if (slider2_ylide_2) {
  new Glide("#ylide_2", {
    type: "carousel",
    startAt: 0,
    perView: 4,
    rewin: false,
    animationDuration: 800,
    animationTimingFunc: "cubic-bezier(0.165, 0.840, 0.440, 1.000)",
    breakpoints: {
      1200: {
        perView: 3,
      },
      768: {
        perView: 2,
      },
    },
  }).mount();
}

// Testimonial

if (slider3_ylide_3) {
  new Glide("#ylide_3", {
    type: "carousel",
    startAt: 0,
    perView: 1,
    rewin: false,
    animationDuration: 800,
    animationTimingFunc: "cubic-bezier(0.165, 0.840, 0.440, 1.000)",
  }).mount();
}

// News
if (slider4_ylide_4) {
  new Glide("#ylide_4", {
    type: "carousel",
    startAt: 0,
    perView: 3,
    rewin: false,
    autoplay: 3000,
    animationDuration: 800,
    animationTimingFunc: "cubic-bezier(0.165, 0.840, 0.440, 1.000)",
    breakpoints: {
      998: {
        perView: 2,
      },
      768: {
        perView: 1,
      },
    },
  }).mount();
}

AOS.init();

/*
=============
Glide Js Carousel 4
=============
 */

const slider1_dlide_1 = document.getElementById("dlide_1");
const slider2_dlide_2 = document.getElementById("dlide_2");
const slider3_dlide_3 = document.getElementById("dlide_3");
const slider4_dlide_4 = document.getElementById("dlide_4");

/*
=============
Latest Products
=============
 */

if (slider1_dlide_1) {
  new Glide("#dlide_1", {
    type: "carousel",
    startAt: 0,
    perView: 4,
    rewin: false,
    animationDuration: 800,
    animationTimingFunc: "cubic-bezier(0.165, 0.840, 0.440, 1.000)",
    breakpoints: {
      1200: {
        perView: 3,
      },
      768: {
        perView: 2,
      },
    },
  }).mount();
}

/*
=============
Related Products
=============
 */

if (slider2_dlide_2) {
  new Glide("#dlide_2", {
    type: "carousel",
    startAt: 0,
    perView: 4,
    rewin: false,
    animationDuration: 800,
    animationTimingFunc: "cubic-bezier(0.165, 0.840, 0.440, 1.000)",
    breakpoints: {
      1200: {
        perView: 3,
      },
      768: {
        perView: 2,
      },
    },
  }).mount();
}

// Testimonial

if (slider3_dlide_3) {
  new Glide("#dlide_3", {
    type: "carousel",
    startAt: 0,
    perView: 1,
    rewin: false,
    animationDuration: 800,
    animationTimingFunc: "cubic-bezier(0.165, 0.840, 0.440, 1.000)",
  }).mount();
}

// News
if (slider4_dlide_4) {
  new Glide("#dlide_4", {
    type: "carousel",
    startAt: 0,
    perView: 3,
    rewin: false,
    autoplay: 3000,
    animationDuration: 800,
    animationTimingFunc: "cubic-bezier(0.165, 0.840, 0.440, 1.000)",
    breakpoints: {
      998: {
        perView: 2,
      },
      768: {
        perView: 1,
      },
    },
  }).mount();
}

AOS.init();
