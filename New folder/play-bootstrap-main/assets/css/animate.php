@charset "UTF-8";

/*!
 * animate.css -https://daneden.github.io/animate.css/
 * Version - 3.7.2
 * Licensed under the MIT license - http://opensource.org/licenses/MIT
 *
 * Copyright (c) 2019 Daniel Eden
 */

@-webkit-keyframes fadeIn {
  from {
    opacity: 0;
  }

  to {
    opacity: 1;
  }
}

@keyframes fadeIn {
  from {
    opacity: 0;
  }

  to {
    opacity: 1;
  }
}

.fadeIn {
  -webkit-animation-name: fadeIn;
  animation-name: fadeIn;
}

@-webkit-keyframes fadeInDown {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, -20px, 0);
    transform: translate3d(0, -20px, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}

@keyframes fadeInDown {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, -20px, 0);
    transform: translate3d(0, -20px, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}

.fadeInDown {
  -webkit-animation-name: fadeInDown;
  animation-name: fadeInDown;
}

@-webkit-keyframes fadeInLeft {
  from {
    opacity: 0;
    -webkit-transform: translate3d(-20px, 0, 0);
    transform: translate3d(-20px, 0, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}

@keyframes fadeInLeft {
  from {
    opacity: 0;
    -webkit-transform: translate3d(-20px, 0, 0);
    transform: translate3d(-20px, 0, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}

.fadeInLeft {
  -webkit-animation-name: fadeInLeft;
  animation-name: fadeInLeft;
}

@-webkit-keyframes fadeInRight {
  from {
    opacity: 0;
    -webkit-transform: translate3d(20px, 0, 0);
    transform: translate3d(20px, 0, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}

@keyframes fadeInRight {
  from {
    opacity: 0;
    -webkit-transform: translate3d(20px, 0, 0);
    transform: translate3d(20px, 0, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}

.fadeInRight {
  -webkit-animation-name: fadeInRight;
  animation-name: fadeInRight;
}

@-webkit-keyframes fadeInUp {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, 20px, 0);
    transform: translate3d(0, 20px, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}

@keyframes fadeInUp {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, 20px, 0);
    transform: translate3d(0, 20px, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}

.fadeInUp {
  -webkit-animation-name: fadeInUp;
  animation-name: fadeInUp;
}

.animated {
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}

.animated.infinite {
  -webkit-animation-iteration-count: infinite;
  animation-iteration-count: infinite;
}

.animated.delay-1s {
  -webkit-animation-delay: 1s;
  animation-delay: 1s;
}

.animated.delay-2s {
  -webkit-animation-delay: 2s;
  animation-delay: 2s;
}

.animated.delay-3s {
  -webkit-animation-delay: 3s;
  animation-delay: 3s;
}

.animated.delay-4s {
  -webkit-animation-delay: 4s;
  animation-delay: 4s;
}

.animated.delay-5s {
  -webkit-animation-delay: 5s;
  animation-delay: 5s;
}

.animated.fast {
  -webkit-animation-duration: 800ms;
  animation-duration: 800ms;
}

.animated.faster {
  -webkit-animation-duration: 500ms;
  animation-duration: 500ms;
}

.animated.slow {
  -webkit-animation-duration: 2s;
  animation-duration: 2s;
}

.animated.slower {
  -webkit-animation-duration: 3s;
  animation-duration: 3s;
}

@media (print), (prefers-reduced-motion: reduce) {
  .animated {
    -webkit-animation-duration: 1ms !important;
    animation-duration: 1ms !important;
    -webkit-transition-duration: 1ms !important;
    transition-duration: 1ms !important;
    -webkit-animation-iteration-count: 1 !important;
    animation-iteration-count: 1 !important;
  }
}
