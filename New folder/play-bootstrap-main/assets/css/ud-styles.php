
/*===========================
  COMMON css 
===========================*/
@import url("https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700;800;900&display=swap");
:root {
  --font: "Inter", sans-serif;
  --body-color: #eb0e0e;
  --heading-color: #ffffff;
  --primary-color: #ffffff;
  --white: #070707;
}

body {
  font-family: var(--font);
  font-weight: normal;
  font-style: normal;
  color: var(--body-color);
  overflow-x: hidden;
  border:rgb(52, 194, 76); border-width:5px; border-style:solid;
}

* {
  margin: 0;
  padding: 0;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

img {
  max-width: 100%;
}

a,
button,
input,
textarea {
  -webkit-transition: all 0.3s ease-out 0s;
  transition: all 0.3s ease-out 0s;
}

a,
a:focus,
input:focus,
textarea:focus,
button:focus,
.navbar-toggler:focus {
  text-decoration: none;
  outline: none;
  -webkit-box-shadow: none;
          box-shadow: none;
}

a:focus,
a:hover {
  text-decoration: none;
}

i,
span,
a {
  display: inline-block;
}

audio,
canvas,
iframe,
img,
svg,
video {
  vertical-align: middle;
}

h1,
h2,
h3,
h4,
h5,
h6 {
  font-weight: 700;
  color: var(--heading-color);
  margin: 0px;
}

h1 {
  font-size: 48px;
}

h2 {
  font-size: 36px;
}

h3 {
  font-size: 28px;
}

h4 {
  font-size: 22px;
}

h5 {
  font-size: 18px;
}

h6 {
  font-size: 16px;
}

ul,
ol {
  margin: 0px;
  padding: 0px;
  list-style-type: none;
}

p {
  font-size: 16px;
  font-weight: 400;
  line-height: 26px;
  color: var(--body-color);
  margin: 0px;
}

.bg_cover {
  background-position: center center;
  background-size: cover;
  background-repeat: no-repeat;
  width: 100%;
  height: 100%;
}

/*===== All Button Style =====*/
.ud-main-btn {
  display: inline-block;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  font-weight: 500;
  font-size: 16px;
  border-radius: 5px;
  padding: 15px 25px;
  border: 1px solid transparent;
  color: var(--white);
  cursor: pointer;
  z-index: 5;
  -webkit-transition: all 0.4s ease-out 0s;
  transition: all 0.4s ease-out 0s;
  background: var(--primary-color);
}



@media (max-width: 767px) {
  .container {
    padding-left: 40px;
    padding-right: 40px;
  }
}

@media only screen and (min-width: 576px) and (max-width: 767px) {
  .container {
    padding-left: 20px;
    padding-right: 20px;
  }
}

.back-to-top {
  width: 40px;
  height: 40px;
  line-height: 40px;
  background: var(--primary-color);
  -webkit-box-shadow: 0px 0px 5px rgba(255, 255, 255, 0.2);
          box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
  text-align: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  border-radius: 5px;
  position: fixed;
  right: 30px;
  bottom: 30px;
  z-index: 99;
  color: var(--white);
}



/* ===== Header CSS ===== */
.ud-header {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  z-index: 99;
  -webkit-transition: all 0.3s ease-out 0s;
  transition: all 0.3s ease-out 0s;
}

.sticky {
  position: fixed;
  z-index: 99;
  background-color: rgba(10, 10, 10, 0.8);
  -webkit-backdrop-filter: blur(5px);
          backdrop-filter: blur(5px);
  -webkit-box-shadow: inset 0 -1px 0 0 rgba(0, 0, 0, 0.1);
  box-shadow: inset 0 -1px 0 0 rgba(0, 0, 0, 0.1);
  -webkit-transition: all 0.3s ease-out 0s;
  transition: all 0.3s ease-out 0s;
}

.sticky .navbar {
  padding: 0;
}

.navbar {
  padding: 0px 0;
  border-radius: 5px;
  position: relative;
  -webkit-transition: all 0.3s ease-out 0s;
  transition: all 0.3s ease-out 0s;
}

.navbar-brand {
  padding: 0;
}

@media only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .navbar-brand {
    padding: 5px 0px;
  }
}

.navbar-brand img {
  max-width: 160px;
}

.navbar-toggler {
  padding: 0;
}

.navbar-toggler .toggler-icon {
  width: 30px;
  height: 2px;
  background-color: var(--white);
  display: block;
  margin: 5px 0;
  position: relative;
  -webkit-transition: all 0.3s ease-out 0s;
  transition: all 0.3s ease-out 0s;
}

.navbar-toggler.active .toggler-icon:nth-of-type(1) {
  -webkit-transform: rotate(45deg);
  transform: rotate(45deg);
  top: 7px;
}

.navbar-toggler.active .toggler-icon:nth-of-type(2) {
  opacity: 0;
}

.navbar-toggler.active .toggler-icon:nth-of-type(3) {
  -webkit-transform: rotate(135deg);
  transform: rotate(135deg);
  top: -7px;
}

@media only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .navbar-collapse {
    position: absolute;
    top: 100%;
    right: 0;
    max-width: 300px;
    width: 100%;
    background-color: var(--white);
    z-index: 9;
    -webkit-box-shadow: 0px 15px 20px 0px rgba(0, 0, 0, 0.1);
    box-shadow: 0px 15px 20px 0px rgba(0, 0, 0, 0.1);
    padding: 0px;
    display: none;
    border-radius: 5px;
  }
  .navbar-collapse.show {
    display: block;
  }
}

@media only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .navbar-nav {
    padding: 20px 30px;
  }
}

.navbar-nav .nav-item {
  position: relative;
  padding: 0px 20px;
}

@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .navbar-nav .nav-item {
    padding: 0px 12px;
  }
}

@media only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .navbar-nav .nav-item {
    padding: 0px;
  }
}

.navbar-nav .nav-item > a {
  font-size: 16px;
  font-weight: 400;
  color: var(--white);
  -webkit-transition: all 0.3s ease-out 0s;
  transition: all 0.3s ease-out 0s;
  padding: 25px 8px;
  position: relative;
}

@media only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .navbar-nav .nav-item > a {
    display: block;
    padding: 8px 0;
    color: var(--heading-color);
  }
}

.navbar-nav .nav-item > a:hover, .navbar-nav .nav-item > a.active {
  color: var(--white);
  opacity: 0.5;
}

@media only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .navbar-nav .nav-item > a:hover, .navbar-nav .nav-item > a.active {
    color: var(--primary-color);
    opacity: 1;
  }
}

.navbar-nav .nav-item .ud-submenu {
  position: absolute;
  width: 250px;
  background: var(--white);
  top: 110%;
  padding: 20px 30px;
  -webkit-box-shadow: 0 15px 44px rgba(140, 140, 140, 0.18);
          box-shadow: 0 15px 44px rgba(140, 140, 140, 0.18);
  border-radius: 5px;
  opacity: 0;
  visibility: hidden;
  -webkit-transition: all 0.3s ease-out 0s;
  transition: all 0.3s ease-out 0s;
}

@media only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .navbar-nav .nav-item .ud-submenu {
    position: static;
    -webkit-box-shadow: none;
            box-shadow: none;
    width: 100%;
    padding: 0px;
    opacity: 1;
    visibility: visible;
    display: none;
  }
}

.navbar-nav .nav-item .ud-submenu.show {
  display: block;
}

.navbar-nav .nav-item .ud-submenu .ud-submenu-link {
  padding: 7px 0;
  color: var(--heading-color);
  font-size: 14px;
}

.navbar-nav .nav-item .ud-submenu .ud-submenu-link:hover {
  color: var(--primary-color);
}

.navbar-nav .nav-item:hover > a {
  color: var(--white);
  opacity: 0.5;
}

@media only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .navbar-nav .nav-item:hover > a {
    color: var(--primary-color);
    opacity: 1;
  }
}

.navbar-nav .nav-item:hover > .ud-submenu {
  opacity: 1;
  visibility: visible;
  top: 100%;
}

.navbar-nav .nav-item.nav-item-has-children > a {
  position: relative;
}

.navbar-nav .nav-item.nav-item-has-children > a::after {
  content: "";
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
  position: absolute;
  width: 10px;
  height: 10px;
  border-bottom: 2px solid;
  border-right: 2px solid;
  -webkit-transform: rotate(45deg) translateY(-50%);
          transform: rotate(45deg) translateY(-50%);
  right: -15px;
  top: 50%;
  margin-top: -2px;
}

@media only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .navbar-nav .nav-item.nav-item-has-children > a::after {
    right: 5px;
  }
}

@media only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .navbar-btn {
    position: absolute;
    top: 50%;
    right: 50px;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
  }
}

.navbar-btn .ud-main-btn {
  padding: 8px 16px;
  background: transparent;
}

.navbar-btn .ud-login-btn:hover {
  opacity: 0.5;
}

.navbar-btn .ud-white-btn {
  background: rgba(255, 255, 255, 0.2);
}

.navbar-btn .ud-white-btn:hover {
  background: white;
  color: var(--heading-color);
}

.sticky .navbar-toggler .toggler-icon {
  background-color: var(--heading-color);
}

.sticky .navbar-nav .nav-item:hover > a {
  color: var(--primary-color);
  opacity: 1;
}

.sticky .navbar-nav .nav-item a {
  color: var(--heading-color);
}

.sticky .navbar-nav .nav-item a.active, .sticky .navbar-nav .nav-item a:hover {
  color: var(--primary-color);
  opacity: 1;
}

.sticky .navbar-btn .ud-main-btn.ud-login-btn {
  color: var(--heading-color);
}

.sticky .navbar-btn .ud-main-btn.ud-login-btn:hover {
  color: var(--primary-color);
  opacity: 1;
}

.sticky .navbar-btn .ud-white-btn {
  background: var(--primary-color);
  color: var(--white);
}

.sticky .navbar-btn .ud-white-btn:hover {
  background: var(--heading-color);
}

/* ===== Hero CSS ===== */
.ud-hero {
  background: var(--primary-color);
  padding-top: 180px;
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
  .ud-hero {
    padding-top: 160px;
  }
}

@media (max-width: 767px) {
  .ud-hero {
    padding-top: 130px;
  }
}

.ud-hero-content {
  max-width: 780px;
  margin: auto;
  margin-bottom: 30px;
}

.ud-hero-content .ud-hero-title {
  color: var(--white);
  color:green;
  font-weight: 700;
  font-size: 45px;
  line-height: 60px;
  text-align: center;
  margin-bottom: 30px;
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
  .ud-hero-content .ud-hero-title {
    font-size: 38px;
    line-height: 50px;
  }
}

@media (max-width: 767px) {
  .ud-hero-content .ud-hero-title {
    font-size: 26px;
    line-height: 38px;
  }
}

.ud-hero-content .ud-hero-desc {
  font-weight: normal;
  font-size: 20px;
  line-height: 35px;
  text-align: center;
  color: var(--white);
  opacity: 0.8;
  max-width: 600px;
  margin: auto;
  margin-bottom: 30px;
}

@media (max-width: 767px) {
  .ud-hero-content .ud-hero-desc {
    font-size: 16px;
    line-height: 30px;
  }
}

.ud-hero-buttons {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
}

.ud-hero-buttons .ud-main-btn {
  margin: 8px;
}

@media (max-width: 767px) {
  .ud-hero-buttons .ud-main-btn {
    margin: 5px;
  }
}

@media (max-width: 767px) {
  .ud-hero-buttons .ud-main-btn {
    padding: 12px 16px;
  }
}

.ud-hero-buttons .ud-white-btn {
  background: var(--white);
  color: var(--heading-color);
}

.ud-hero-buttons .ud-white-btn:hover {
  -webkit-box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.2);
          box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.2);
  background: #f70707;
  color: var(--primary-color);
}

.ud-hero-buttons .ud-link-btn:hover {
  color: var(--white);
  background: transparent;
  opacity: 0.5;
}

.ud-hero-brands-wrapper {
  text-align: center;
  margin-bottom: 40px;
}

.ud-hero-brands-wrapper img {
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
  opacity: 0.5;
  max-width: 250px;
}

.ud-hero-brands-wrapper img:hover {
  opacity: 1;
}

.ud-hero-image {
  max-width: 845px;
  margin: auto;
  text-align: center;
  position: relative;
  z-index: 1;
}

.ud-hero-image img {
  max-width: 100%;
  text-align: center;
}

.ud-hero-image .shape {
  position: absolute;
  z-index: -1;
}

.ud-hero-image .shape.shape-1 {
  bottom: 0;
  left: -30px;
}

.ud-hero-image .shape.shape-2 {
  top: -20px;
  right: -20px;
}

/* ===== Features CSS ===== */
.ud-features {
  padding-top: 120px;
  padding-bottom: 90px;
}

@media (max-width: 767px) {
  .ud-features {
    padding-top: 80px;
    padding-bottom: 40px;
  }
}

.ud-section-title {
  max-width: 620px;
  margin-bottom: 70px;
}

.ud-section-title span {
  font-weight: 600;
  font-size: 18px;
  color: var(--primary-color);
  margin-bottom: 10px;
}

.ud-section-title h2 {
  font-weight: 700;
  font-size: 42px;
  line-height: 55px;
  text-transform: capitalize;
  color: var(--heading-color);
  margin-bottom: 20px;
}

.ud-section-title p {
  font-size: 20px;
  line-height: 30px;
}

@media (max-width: 767px) {
  .ud-section-title p {
    font-size: 16px;
    line-height: 26px;
  }
}

.ud-single-feature {
  margin-bottom: 40px;
}

.ud-single-feature:hover .ud-feature-icon::before {
  -webkit-transform: rotate(45deg);
  transform: rotate(45deg);
}

.ud-single-feature .ud-feature-icon {
  width: 70px;
  height: 70px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  border-radius: 14px;
  background: var(--primary-color);
  font-size: 32px;
  color: var(--white);
  position: relative;
  z-index: 1;
  text-align: center;
  margin-bottom: 40px;
}

.ud-single-feature .ud-feature-icon::before {
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  border-radius: 14px;
  background: var(--primary-color);
  opacity: 0.2;
  z-index: -1;
  -webkit-transform: rotate(23deg);
  transform: rotate(23deg);
  -webkit-transition: all 0.3s ease-out 0s;
  transition: all 0.3s ease-out 0s;
}

.ud-single-feature .ud-feature-title {
  font-weight: 700;
  font-size: 20px;
  line-height: 28px;
  margin-bottom: 12px;
}

@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .ud-single-feature .ud-feature-title {
    font-size: 18px;
    line-height: 26px;
  }
}

.ud-single-feature .ud-feature-desc {
  font-size: 16px;
  line-height: 24px;
  margin-bottom: 40px;
}

.ud-single-feature .ud-feature-link {
  font-weight: 500;
  color: var(--body-color);
}

.ud-single-feature .ud-feature-link:hover {
  color: var(--primary-color);
}

/* ===== About CSS ===== */
.ud-about {
  background: #f3f4fe;
  padding: 120px 0;
}

@media (max-width: 767px) {
  .ud-about {
    padding: 80px 0;
  }
}

.ud-about-wrapper {
  background: var(--white);
  border: 1px solid rgba(0, 0, 0, 0.08);
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
}

@media only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .ud-about-wrapper {
    display: block;
  }
}

.ud-about-content-wrapper {
  padding: 70px;
}

@media (max-width: 767px) {
  .ud-about-content-wrapper {
    padding: 50px 30px;
  }
}

@media only screen and (min-width: 576px) and (max-width: 767px) {
  .ud-about-content-wrapper {
    padding: 50px;
  }
}

.ud-about-content {
  max-width: 500px;
}

.ud-about-content .tag {
  font-weight: 500;
  font-size: 14px;
  color: var(--white);
  background: var(--primary-color);
  padding: 5px 20px;
  display: inline-block;
  margin-bottom: 20px;
}

.ud-about-content h2 {
  font-weight: bold;
  font-size: 36px;
  line-height: 45px;
  margin-bottom: 30px;
}

@media (max-width: 767px) {
  .ud-about-content h2 {
    font-size: 26px;
    line-height: 38px;
  }
}

.ud-about-content p {
  font-size: 16px;
  line-height: 28px;
  margin-bottom: 40px;
}

.ud-about-content .ud-main-btn:hover {
  background: #2748b4;
  -webkit-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
          box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
}

@media only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .ud-about-image {
    text-align: center;
  }
}

/* ===== Pricing CSS ===== */
.ud-pricing {
  padding-top: 120px;
  padding-bottom: 90px;
}

@media (max-width: 767px) {
  .ud-pricing {
    padding-top: 80px;
    padding-bottom: 40px;
  }
}

.ud-single-pricing {
  margin-bottom: 40px;
  background: var(--white);
  border: 2px solid #d4deff;
  border-radius: 8px;
  text-align: center;
  padding: 45px 30px;
  position: relative;
}

.ud-single-pricing.active {
  background: -webkit-gradient(linear, left top, left bottom, from(#3056d3), to(#179bee));
  background: linear-gradient(180deg, #3056d3 0%, #179bee 100%);
  border: none;
  padding: 55px 30px;
}

.ud-single-pricing.active .ud-pricing-header h3,
.ud-single-pricing.active .ud-pricing-header h4 {
  color: var(--white);
}

.ud-single-pricing.active .ud-pricing-body li {
  color: var(--white);
}

.ud-single-pricing.first-item::after, .ud-single-pricing.last-item::after {
  content: "";
  position: absolute;
  width: 55px;
  height: 55px;
  z-index: 1;
}

.ud-single-pricing.first-item::after {
  background: var(--primary-color);
  left: -2px;
  bottom: -2px;
  border-radius: 0px 55px 0px 8px;
}

.ud-single-pricing.last-item::after {
  background: #13c296;
  top: -2px;
  right: -2px;
  border-radius: 0px 8px 0px 55px;
}

.ud-single-pricing .ud-popular-tag {
  display: inline-block;
  padding: 10px 25px;
  background: var(--white);
  border-radius: 30px;
  color: var(--primary-color);
  margin-bottom: 20px;
  font-weight: 600;
}

.ud-single-pricing .ud-pricing-header h3 {
  font-weight: 500;
  font-size: 15px;
  margin-bottom: 8px;
}

.ud-single-pricing .ud-pricing-header h4 {
  font-weight: 600;
  font-size: 26px;
  color: var(--primary-color);
  margin-bottom: 40px;
}

.ud-single-pricing .ud-pricing-body {
  margin-bottom: 40px;
}

.ud-single-pricing .ud-pricing-body li {
  font-weight: 500;
  font-size: 15px;
  margin-bottom: 18px;
}

.ud-single-pricing .ud-main-btn {
  border-radius: 30px;
  padding: 15px 40px;
}

.ud-single-pricing .ud-border-btn {
  border: 1px solid #d4deff;
  color: var(--primary-color);
  background: var(--white);
}

.ud-single-pricing .ud-border-btn:hover {
  color: var(--white);
  border-color: var(--primary-color);
  background: var(--primary-color);
}

.ud-single-pricing .ud-white-btn {
  background: var(--white);
  color: var(--heading-color);
}

.ud-single-pricing .ud-white-btn:hover {
  color: var(--white);
  background: var(--heading-color);
}

/* ===== FAQ CSS ===== */
.ud-faq {
  padding-top: 120px;
  padding-bottom: 90px;
  background: #f3f4fe;
  position: relative;
  z-index: 1;
}

@media (max-width: 767px) {
  .ud-faq {
    padding-top: 80px;
    padding-bottom: 50px;
  }
}

.ud-faq .shape {
  position: absolute;
  z-index: -1;
  left: 0;
  bottom: 0;
}

.ud-single-faq {
  background: var(--white);
  border: 1px solid #f3f4fe;
  -webkit-box-shadow: 0px 20px 95px rgba(201, 203, 204, 0.3);
          box-shadow: 0px 20px 95px rgba(201, 203, 204, 0.3);
  border-radius: 10px;
  margin-bottom: 30px;
}

.ud-single-faq .ud-faq-btn {
  text-align: left;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  width: 100%;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  border: none;
  background: transparent;
  font-weight: 600;
  font-size: 18px;
  color: var(--heading-color);
  opacity: 0.88;
  padding: 30px;
}

@media only screen and (min-width: 992px) and (max-width: 1199px), (max-width: 767px) {
  .ud-single-faq .ud-faq-btn {
    padding: 15px;
  }
}

.ud-single-faq .ud-faq-btn.collapsed span.icon i {
  -webkit-transform: rotate(0deg);
  transform: rotate(0deg);
}

.ud-single-faq .ud-faq-btn span.icon {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  width: 42px;
  height: 42px;
  background: rgba(48, 86, 211, 0.06);
  border-radius: 10px;
  color: var(--primary-color);
  margin-right: 24px;
}

.ud-single-faq .ud-faq-btn span.icon i {
  -webkit-transform: rotate(180deg);
  transform: rotate(180deg);
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
  font-size: 14px;
  font-weight: 700;
}

.ud-single-faq .ud-faq-body {
  padding: 0px 30px 40px 95px;
}

@media only screen and (min-width: 992px) and (max-width: 1199px), (max-width: 767px) {
  .ud-single-faq .ud-faq-body {
    padding: 0px 16px 20px 82px;
  }
}

/* ===== Testimonials CSS ===== */
.ud-testimonials {
  padding-top: 120px;
}

@media (max-width: 767px) {
  .ud-testimonials {
    padding-top: 80px;
  }
}

.ud-single-testimonial {
  padding: 30px;
  -webkit-box-shadow: 0px 60px 120px -20px #ebeffd;
          box-shadow: 0px 60px 120px -20px #ebeffd;
  background: var(--white);
  margin-bottom: 50px;
}

.ud-single-testimonial .ud-testimonial-ratings {
  margin-bottom: 10px;
}

.ud-single-testimonial .ud-testimonial-ratings i {
  color: #fbb040;
}

.ud-single-testimonial .ud-testimonial-content {
  margin-bottom: 25px;
}

.ud-single-testimonial .ud-testimonial-content p {
  font-size: 16px;
  line-height: 30px;
  color: #637381;
}

.ud-single-testimonial .ud-testimonial-info {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.ud-single-testimonial .ud-testimonial-info .ud-testimonial-image {
  width: 50px;
  height: 50px;
  border-radius: 50%;
  overflow: hidden;
  margin-right: 20px;
}

.ud-single-testimonial .ud-testimonial-info .ud-testimonial-meta h4 {
  font-weight: 600;
  font-size: 14px;
}

.ud-single-testimonial .ud-testimonial-info .ud-testimonial-meta p {
  font-size: 12px;
  color: #969696;
}

.ud-brands .ud-title {
  margin-bottom: 30px;
}

.ud-brands .ud-title h6 {
  font-weight: normal;
  font-size: 12px;
  color: var(--body-color);
  display: inline-block;
  position: relative;
}

.ud-brands .ud-title h6::after {
  content: "";
  position: absolute;
  width: 30px;
  height: 1px;
  background: #afb2b5;
  right: -40px;
  top: 50%;
}

.ud-brands .ud-brands-logo {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  margin-right: -40px;
}

.ud-brands .ud-brands-logo .ud-single-logo {
  margin-right: 40px;
  margin-bottom: 20px;
  max-width: 140px;
}

.ud-brands .ud-brands-logo .ud-single-logo:hover img {
  -webkit-filter: none;
          filter: none;
}

.ud-brands .ud-brands-logo .ud-single-logo img {
  -webkit-filter: grayscale(1);
          filter: grayscale(1);
  -webkit-transition: all 0.3s ease-out 0s;
  transition: all 0.3s ease-out 0s;
}

/* ===== Team CSS ===== */
.ud-team {
  padding-top: 120px;
  padding-bottom: 80px;
}

@media (max-width: 767px) {
  .ud-team {
    padding-top: 80px;
    padding-bottom: 40px;
  }
}

.ud-single-team {
  margin-bottom: 40px;
}

.ud-single-team .ud-team-image-wrapper {
  width: 170px;
  height: 170px;
  position: relative;
  margin: 0px auto 25px;
}

.ud-single-team .ud-team-image {
  border-radius: 50%;
}

.ud-single-team .ud-team-image img {
  width: 100%;
  border-radius: 50%;
}

.ud-single-team .shape {
  position: absolute;
  z-index: -1;
}

.ud-single-team .shape.shape-1 {
  top: 0;
  left: 0;
}

.ud-single-team .shape.shape-2 {
  bottom: 0;
  right: 0;
}

.ud-single-team .ud-team-info {
  text-align: center;
  margin-bottom: 20px;
}

.ud-single-team .ud-team-info h5 {
  font-weight: 500;
  font-size: 18px;
  text-transform: capitalize;
  margin-bottom: 10px;
}

.ud-single-team .ud-team-info h6 {
  font-weight: 500;
  font-size: 12px;
  color: var(--body-color);
}

.ud-single-team .ud-team-socials {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
}

.ud-single-team .ud-team-socials a {
  width: 32px;
  height: 32px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  margin: 0px 10px;
  color: #cdced6;
}

.ud-single-team .ud-team-socials a:hover {
  color: var(--primary-color);
}

/* ===== Contact CSS ===== */
.ud-contact {
  padding: 120px 0px;
  position: relative;
}

@media (max-width: 767px) {
  .ud-contact {
    padding: 80px 0;
  }
}

.ud-contact::after {
  content: "";
  position: absolute;
  z-index: -1;
  width: 100%;
  top: 0;
  left: 0;
  height: 50%;
  background: #f3f4fe;
}

@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .ud-contact::after {
    height: 45%;
  }
}

.ud-contact-title {
  margin-bottom: 150px;
}

@media only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .ud-contact-title {
    margin-bottom: 50px;
  }
}

.ud-contact-title span {
  color: var(--heading-color);
  font-weight: 600;
  font-size: 15px;
  margin-bottom: 20px;
}

.ud-contact-title h2 {
  font-weight: 600;
  font-size: 35px;
  line-height: 41px;
}

.ud-contact-info-wrapper {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
}

@media only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .ud-contact-info-wrapper {
    margin-bottom: 50px;
  }
}

.ud-contact-info-wrapper .ud-single-info {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  max-width: 100%;
  width: 330px;
  margin-bottom: 30px;
}

.ud-contact-info-wrapper .ud-info-icon {
  font-size: 32px;
  color: var(--primary-color);
  margin-right: 24px;
}

.ud-contact-info-wrapper .ud-info-meta h5 {
  font-weight: 600;
  font-size: 18px;
  margin-bottom: 15px;
}

.ud-contact-info-wrapper .ud-info-meta p {
  font-size: 15px;
  line-height: 24px;
}

.ud-contact-form-wrapper {
  -webkit-box-shadow: 0px 4px 28px rgba(0, 0, 0, 0.05);
          box-shadow: 0px 4px 28px rgba(0, 0, 0, 0.05);
  border-radius: 8px;
  background: var(--white);
  padding: 60px;
}

@media (max-width: 767px) {
  .ud-contact-form-wrapper {
    padding: 40px 30px;
  }
}

@media only screen and (min-width: 1200px) and (max-width: 1399px), only screen and (min-width: 992px) and (max-width: 1199px), only screen and (min-width: 576px) and (max-width: 767px) {
  .ud-contact-form-wrapper {
    padding: 50px 40px;
  }
}

.ud-contact-form-wrapper .ud-contact-form-title {
  font-style: normal;
  font-weight: 600;
  font-size: 28px;
  margin-bottom: 30px;
}

@media (max-width: 767px) {
  .ud-contact-form-wrapper .ud-contact-form-title {
    font-size: 24px;
  }
}

.ud-contact-form-wrapper .ud-form-group {
  margin-bottom: 25px;
}

.ud-contact-form-wrapper .ud-form-group label {
  display: block;
  font-weight: normal;
  font-size: 12px;
}

.ud-contact-form-wrapper .ud-form-group input,
.ud-contact-form-wrapper .ud-form-group textarea {
  display: block;
  width: 100%;
  padding: 15px 0;
  border: none;
  outline: none;
  border-bottom: 1px solid #f1f1f1;
  resize: none;
}

.ud-contact-form-wrapper .ud-form-group input:focus,
.ud-contact-form-wrapper .ud-form-group textarea:focus {
  border-color: var(--primary-color);
}

/* ===== Footer CSS ===== */
.ud-footer {
  background: var(--heading-color);
  padding-top: 100px;
  position: relative;
  z-index: 1;
  overflow: hidden;
}

.ud-footer .shape {
  position: absolute;
  z-index: -1;
}

.ud-footer .shape.shape-1 {
  top: 0;
  left: 0;
}

.ud-footer .shape.shape-2 {
  top: 0;
  right: 0;
}

.ud-footer .shape.shape-3 {
  bottom: 0;
  right: 0;
}

.ud-widget {
  margin-bottom: 50px;
}

.ud-widget .ud-footer-logo {
  max-width: 160px;
  display: block;
  margin-bottom: 10px;
}

.ud-widget .ud-footer-logo img {
  width: 100%;
}

.ud-widget .ud-widget-desc {
  font-size: 15px;
  line-height: 24px;
  color: #f3f4fe;
  margin-bottom: 30px;
  max-width: 260px;
}

.ud-widget .ud-widget-socials {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.ud-widget .ud-widget-socials a {
  font-size: 16px;
  color: #dddddd;
  margin-right: 20px;
}

.ud-widget .ud-widget-socials a:hover {
  color: var(--primary-color);
}

.ud-widget .ud-widget-title {
  font-weight: 600;
  font-size: 18px;
  margin-bottom: 35px;
  color: var(--white);
}

.ud-widget .ud-widget-links a {
  display: inline-block;
  margin-bottom: 12px;
  font-size: 15px;
  line-height: 30px;
  color: #f3f4fe;
}

.ud-widget .ud-widget-links a:hover {
  color: var(--primary-color);
  padding-left: 10px;
}

.ud-widget .ud-widget-brands {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
}

.ud-widget .ud-widget-brands a {
  display: block;
  max-width: 120px;
  margin-bottom: 20px;
  margin-right: 20px;
}

@media only screen and (min-width: 1200px) and (max-width: 1399px) {
  .ud-widget .ud-widget-brands a {
    max-width: 100px;
  }
}

.ud-footer-bottom {
  padding: 35px 0;
  border-top: 1px solid rgba(136, 144, 164, 0.43);
}

.ud-footer-bottom .ud-footer-bottom-left {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

@media (max-width: 767px) {
  .ud-footer-bottom .ud-footer-bottom-left {
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
  }
}

.ud-footer-bottom .ud-footer-bottom-left a {
  font-weight: normal;
  font-size: 15px;
  color: #f3f4fe;
  margin-right: 30px;
  display: inline-block;
}

@media (max-width: 767px) {
  .ud-footer-bottom .ud-footer-bottom-left a {
    margin: 0px 8px 8px;
  }
}

.ud-footer-bottom .ud-footer-bottom-left a:hover {
  color: var(--primary-color);
}

.ud-footer-bottom .ud-footer-bottom-right {
  text-align: right;
  font-weight: normal;
  font-size: 15px;
  color: #f3f4fe;
}

.ud-footer-bottom .ud-footer-bottom-right a {
  color: var(--primary-color);
}

.ud-footer-bottom .ud-footer-bottom-right a:hover {
  text-decoration: underline;
}

@media (max-width: 767px) {
  .ud-footer-bottom .ud-footer-bottom-right {
    text-align: center;
    margin-top: 10px;
  }
}

/* ====== Banner CSS ======= */
.ud-page-banner {
  padding-top: 130px;
  padding-bottom: 80px;
  background: var(--primary-color);
  background-image: url("../images/banner/banner-bg.svg");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

.ud-banner-content {
  text-align: center;
  max-width: 600px;
  margin: auto;
}

.ud-banner-content h1 {
  color: var(--white);
  font-size: 38px;
  font-weight: 600;
}

/* ====== Login CSS ====== */
.ud-login {
  padding-top: 80px;
  padding-bottom: 80px;
}

.ud-login-wrapper {
  max-width: 500px;
  margin: auto;
  background: var(--white);
  text-align: center;
  padding: 60px;
  -webkit-box-shadow: 0px 10px 35px rgba(0, 0, 0, 0.05);
          box-shadow: 0px 10px 35px rgba(0, 0, 0, 0.05);
}

.ud-login-wrapper .ud-login-logo {
  margin-bottom: 30px;
}

.ud-login-form .ud-form-group {
  margin-bottom: 25px;
}

.ud-login-form .ud-form-group input {
  width: 100%;
  border: 2px solid #dddddd;
  border-radius: 4px;
  padding: 12px 24px;
  background: #fcfdfe;
  color: var(--body-color);
}

.ud-login-form .ud-form-group input:focus {
  border-color: var(--primary-color);
}

.ud-socials-connect {
  padding-top: 10px;
  padding-bottom: 30px;
}

.ud-socials-connect p {
  font-size: 16px;
  color: var(--body-color);
  margin-bottom: 10px;
}

.ud-socials-connect ul {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  margin-left: -10px;
  margin-right: -10px;
}

.ud-socials-connect ul li {
  width: 100%;
}

.ud-socials-connect ul li a {
  height: 45px;
  background: var(--primary-color);
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  margin: 10px;
  border-radius: 6px;
  color: var(--white);
  font-size: 20px;
}

.ud-socials-connect ul li a.facebook {
  background: #4064ac;
}

.ud-socials-connect ul li a.facebook:hover {
  background: #315294;
}

.ud-socials-connect ul li a.twitter {
  background: #1c9cea;
}

.ud-socials-connect ul li a.twitter:hover {
  background: #0f8bd8;
}

.ud-socials-connect ul li a.google {
  background: #d64937;
}

.ud-socials-connect ul li a.google:hover {
  background: #c53b29;
}

.forget-pass {
  font-size: 16px;
  color: var(--body-color);
  margin-bottom: 8px;
}

.signup-option {
  color: var(--body-color);
  font-size: 16px;
}

.signup-option a {
  color: var(--primary-color);
}

/* ====== Blog CSS ====== */
.ud-blog-grids {
  padding-top: 120px;
  padding-bottom: 80px;
}

.ud-blog-grids.ud-related-articles {
  padding-top: 100px;
}

@media (max-width: 767px) {
  .ud-blog-grids {
    padding-top: 80px;
    padding-bottom: 40px;
  }
}

.ud-single-blog {
  margin-bottom: 40px;
}

.ud-single-blog:hover .ud-blog-image img {
  -webkit-transform: scale(1.1) rotate(3deg);
  transform: scale(1.1) rotate(3deg);
}

.ud-single-blog .ud-blog-image {
  border-radius: 4px;
  overflow: hidden;
  margin-bottom: 30px;
}

.ud-single-blog .ud-blog-image a {
  display: block;
}

.ud-single-blog .ud-blog-image img {
  width: 100%;
  -webkit-transition: all 0.3s ease-out 0s;
  transition: all 0.3s ease-out 0s;
}

.ud-single-blog .ud-blog-date {
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  font-size: 12px;
  font-weight: 600;
  padding: 8px 16px;
  background: var(--primary-color);
  color: var(--white);
  border-radius: 5px;
  margin-bottom: 20px;
}

.ud-single-blog .ud-blog-title {
  font-weight: 600;
  font-size: 24px;
  line-height: 32px;
  margin-bottom: 15px;
}

@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .ud-single-blog .ud-blog-title {
    font-size: 20px;
    line-height: 28px;
  }
}

.ud-single-blog .ud-blog-title a {
  color: inherit;
}

.ud-single-blog .ud-blog-title a:hover {
  color: var(--primary-color);
}

.ud-single-blog .ud-blog-desc {
  font-size: 16px;
  line-height: 28px;
}

.ud-related-articles-title {
  font-weight: 800;
  font-size: 28px;
  padding-bottom: 25px;
  position: relative;
  margin-bottom: 50px;
}

.ud-related-articles-title::after {
  content: "";
  position: absolute;
  width: 80px;
  height: 2px;
  background: var(--primary-color);
  left: 0;
  bottom: 0;
}

/* ====== Blog Details CSS ====== */
.ud-blog-details {
  padding-top: 120px;
}

@media (max-width: 767px) {
  .ud-blog-details {
    padding-top: 80px;
  }
}

.ud-blog-details-image {
  position: relative;
  border-radius: 5px;
  overflow: hidden;
  height: 500px;
}

@media (max-width: 767px) {
  .ud-blog-details-image {
    height: 300px;
  }
}

.ud-blog-details-image > img {
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  -o-object-fit: cover;
     object-fit: cover;
  -o-object-position: center center;
     object-position: center center;
}

.ud-blog-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: end;
      -ms-flex-align: end;
          align-items: flex-end;
  background: -webkit-gradient(linear, left top, left bottom, color-stop(46.88%, rgba(48, 86, 211, 0)), color-stop(93.23%, rgba(13, 21, 49, 0.72)));
  background: linear-gradient(180deg, rgba(48, 86, 211, 0) 46.88%, rgba(13, 21, 49, 0.72) 93.23%);
  border-radius: 5px;
  padding: 30px;
}

.ud-blog-overlay-content {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

@media (max-width: 767px) {
  .ud-blog-overlay-content {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
    -webkit-box-align: start;
        -ms-flex-align: start;
            align-items: flex-start;
  }
}

.ud-blog-overlay-content .ud-blog-author {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  margin-right: 40px;
}

@media (max-width: 767px) {
  .ud-blog-overlay-content .ud-blog-author {
    margin-right: 0px;
    margin-bottom: 20px;
  }
}

.ud-blog-overlay-content .ud-blog-author img {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  overflow: hidden;
  margin-right: 15px;
}

.ud-blog-overlay-content .ud-blog-author span {
  font-weight: 500;
  font-size: 14px;
  line-height: 28px;
  color: #ffffff;
}

.ud-blog-overlay-content .ud-blog-author a {
  color: inherit;
}

.ud-blog-overlay-content .ud-blog-author a:hover {
  color: var(--primary-color);
}

.ud-blog-overlay-content .ud-blog-meta {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.ud-blog-overlay-content .ud-blog-meta p {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  font-weight: 500;
  font-size: 14px;
  line-height: 28px;
  color: #ffffff;
  margin-right: 30px;
}

.ud-blog-overlay-content .ud-blog-meta p:last-child {
  margin-right: 0px;
}

.ud-blog-overlay-content .ud-blog-meta p i {
  font-size: 16px;
  margin-right: 10px;
}

.ud-blog-details-content {
  padding-top: 60px;
}

@media only screen and (min-width: 1400px) and (max-width: 1920px), only screen and (min-width: 1200px) and (max-width: 1399px) {
  .ud-blog-details-content {
    padding-right: 50px;
  }
}

.ud-blog-details-title {
  font-weight: 700;
  font-size: 35px;
  line-height: 50px;
  margin-bottom: 35px;
}

@media (max-width: 767px) {
  .ud-blog-details-title {
    font-size: 26px;
    line-height: 35px;
  }
}

@media only screen and (min-width: 576px) and (max-width: 767px) {
  .ud-blog-details-title {
    font-size: 30px;
    line-height: 40px;
  }
}

.ud-blog-details-para {
  font-size: 16px;
  line-height: 28px;
  margin-bottom: 30px;
}

.ud-blog-details-subtitle {
  font-weight: 700;
  font-size: 26px;
  margin-bottom: 30px;
}

@media (max-width: 767px) {
  .ud-blog-details-subtitle {
    font-size: 22px;
    margin-bottom: 25px;
  }
}

.ud-blog-quote {
  background-image: url("../images/blog/quote-bg.svg");
  background-repeat: no-repeat;
  background-size: cover;
  padding: 40px;
  text-align: center;
  margin-bottom: 40px;
}

@media (max-width: 767px) {
  .ud-blog-quote {
    padding: 30px;
  }
}

.ud-blog-quote i {
  font-size: 40px;
  font-weight: 700;
  color: var(--primary-color);
  line-height: 1;
  margin-bottom: 20px;
}

@media (max-width: 767px) {
  .ud-blog-quote i {
    margin-bottom: 15px;
  }
}

.ud-blog-quote p {
  font-style: italic;
  font-weight: 600;
  font-size: 16px;
  line-height: 27px;
  text-align: center;
  color: var(--heading-color);
  margin-bottom: 15px;
}

@media (max-width: 767px) {
  .ud-blog-quote p {
    font-size: 14px;
    line-height: 24px;
  }
}

.ud-blog-quote h6 {
  color: var(--body-color);
  font-style: italic;
  font-weight: 500;
  font-size: 12px;
  line-height: 20px;
  text-align: center;
}

.ud-blog-details-action {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
}

@media (max-width: 767px) {
  .ud-blog-details-action {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
    -webkit-box-align: start;
        -ms-flex-align: start;
            align-items: flex-start;
  }
}

.ud-blog-tags {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

@media (max-width: 767px) {
  .ud-blog-tags {
    margin-bottom: 20px;
  }
}

.ud-blog-tags li {
  margin-right: 14px;
}

.ud-blog-tags li:last-child {
  margin-right: 0px;
}

.ud-blog-tags a {
  padding: 8px 16px;
  font-size: 12px;
  font-weight: 500;
  color: var(--primary-color);
  background: rgba(48, 86, 211, 0.06);
  border-radius: 3px;
}

.ud-blog-tags a:hover {
  background: var(--primary-color);
  color: var(--white);
}

.ud-blog-share {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.ud-blog-share h6 {
  font-weight: 500;
  font-size: 12px;
  color: var(--body-color);
  margin-right: 20px;
}

.ud-blog-share-links {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.ud-blog-share-links li {
  margin-right: 14px;
}

.ud-blog-share-links li:last-child {
  margin-right: 0px;
}

.ud-blog-share-links a {
  font-size: 18px;
  width: 35px;
  height: 35px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  border-radius: 50%;
  color: var(--white);
}

.ud-blog-share-links a.facebook {
  background: #4064ac;
}

.ud-blog-share-links a.facebook:hover {
  background: #315294;
}

.ud-blog-share-links a.twitter {
  background: #1c9cea;
}

.ud-blog-share-links a.twitter:hover {
  background: #0f8bd8;
}

.ud-blog-share-links a.linkedin {
  background: #007ab9;
}

.ud-blog-share-links a.linkedin:hover {
  background: #03689b;
}

.ud-blog-sidebar {
  padding-top: 60px;
}

.ud-newsletter-box {
  background: var(--primary-color);
  padding: 60px 45px;
  position: relative;
  z-index: 1;
  text-align: center;
  border-radius: 5px;
  margin-bottom: 50px;
}

@media only screen and (min-width: 992px) and (max-width: 1199px), (max-width: 767px) {
  .ud-newsletter-box {
    padding: 50px 30px;
  }
}

@media only screen and (min-width: 576px) and (max-width: 767px) {
  .ud-newsletter-box {
    padding: 60px 45px;
  }
}

.ud-newsletter-box .shape {
  position: absolute;
  z-index: -1;
}

.ud-newsletter-box .shape.shape-1 {
  top: 0;
  right: 0;
}

.ud-newsletter-box .shape.shape-2 {
  left: 0;
  bottom: 0;
}

.ud-newsletter-box .ud-newsletter-title {
  font-weight: 600;
  font-size: 25px;
  color: var(--white);
  margin-bottom: 5px;
}

@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .ud-newsletter-box .ud-newsletter-title {
    font-size: 23px;
  }
}

.ud-newsletter-box p {
  font-size: 16px;
  line-height: 24px;
  color: var(--white);
}

.ud-newsletter-box .ud-newsletter-form {
  margin-top: 30px;
}

.ud-newsletter-box .ud-newsletter-form input {
  width: 100%;
  -webkit-box-shadow: 0px 4px 42px rgba(0, 0, 0, 0.01);
          box-shadow: 0px 4px 42px rgba(0, 0, 0, 0.01);
  border-radius: 5px;
  background: rgba(255, 255, 255, 0.2);
  color: var(--white);
  text-align: center;
  margin-bottom: 15px;
  border: 2px solid transparent;
  padding: 12px 20px;
}

.ud-newsletter-box .ud-newsletter-form input::-webkit-input-placeholder {
  color: var(--white);
  opacity: 1;
}

.ud-newsletter-box .ud-newsletter-form input:-ms-input-placeholder {
  color: var(--white);
  opacity: 1;
}

.ud-newsletter-box .ud-newsletter-form input::-ms-input-placeholder {
  color: var(--white);
  opacity: 1;
}

.ud-newsletter-box .ud-newsletter-form input::placeholder {
  color: var(--white);
  opacity: 1;
}

.ud-newsletter-box .ud-newsletter-form input:focus {
  border-color: var(--white);
}

.ud-newsletter-box .ud-newsletter-form .ud-main-btn {
  background: #13c296;
  -webkit-box-shadow: 0px 4px 42px rgba(0, 0, 0, 0.01);
          box-shadow: 0px 4px 42px rgba(0, 0, 0, 0.01);
  border-radius: 5px;
  width: 100%;
  margin-bottom: 24px;
}

.ud-newsletter-box .ud-newsletter-form .ud-main-btn:hover {
  background: var(--heading-color);
}

.ud-newsletter-box .ud-newsletter-form .ud-newsletter-note {
  font-weight: 500;
  font-size: 14px;
  line-height: 22px;
}

.ud-articles-box {
  margin-bottom: 50px;
}

.ud-articles-box .ud-articles-box-title {
  font-weight: 600;
  font-size: 28px;
  padding-bottom: 25px;
  position: relative;
  margin-bottom: 20px;
}

.ud-articles-box .ud-articles-box-title::after {
  content: "";
  position: absolute;
  width: 80px;
  height: 2px;
  background: var(--primary-color);
  left: 0;
  bottom: 0;
}

.ud-articles-box .ud-articles-list li {
  padding: 20px 0;
  border-bottom: 1px solid #f2f3f8;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.ud-articles-box .ud-articles-list li:last-child {
  padding-bottom: 0px;
  border-bottom: 0px;
}

.ud-articles-box .ud-articles-list .ud-article-image {
  max-width: 80px;
  width: 100%;
  height: 80px;
  border-radius: 50%;
  overflow: hidden;
  margin-right: 20px;
}

@media only screen and (min-width: 992px) and (max-width: 1199px), (max-width: 767px) {
  .ud-articles-box .ud-articles-list .ud-article-image {
    max-width: 65px;
    height: 65px;
  }
}

@media only screen and (min-width: 576px) and (max-width: 767px) {
  .ud-articles-box .ud-articles-list .ud-article-image {
    max-width: 80px;
    height: 80px;
  }
}

.ud-articles-box .ud-articles-list .ud-article-image img {
  width: 100%;
}

.ud-articles-box .ud-articles-list .ud-article-title {
  font-weight: 500;
  font-size: 18px;
  line-height: 22px;
  margin-bottom: 5px;
}

@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .ud-articles-box .ud-articles-list .ud-article-title {
    font-size: 16px;
  }
}

.ud-articles-box .ud-articles-list .ud-article-title a {
  color: inherit;
}

.ud-articles-box .ud-articles-list .ud-article-title a:hover {
  color: var(--primary-color);
}

.ud-articles-box .ud-articles-list .ud-article-author {
  font-size: 14px;
}

.ud-banner-ad {
  border-radius: 5px;
  overflow: hidden;
}

.ud-banner-ad a {
  display: block;
}

.ud-banner-ad img {
  width: 100%;
}

/* ====== Error 404 CSS ======= */
.ud-404 {
  padding-top: 120px;
  padding-bottom: 120px;
}

@media (max-width: 767px) {
  .ud-404 {
    padding-top: 80px;
    padding-bottom: 80px;
  }
}

.ud-404-wrapper {
  text-align: center;
  max-width: 850px;
  margin: 0px auto;
  background: var(--white);
  padding: 100px 60px;
  -webkit-box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
          box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
  border-radius: 10px;
  position: relative;
  overflow: hidden;
  z-index: 1;
}

@media (max-width: 767px) {
  .ud-404-wrapper {
    padding: 50px 30px;
  }
}

.ud-404-wrapper .shape {
  position: absolute;
  z-index: -1;
}

.ud-404-wrapper .shape.shape-1 {
  top: 0;
  left: 0;
}

.ud-404-wrapper .shape.shape-2 {
  right: 0;
  bottom: 0;
}

.ud-404-title {
  font-size: 42px;
  font-weight: 700;
  margin-bottom: 30px;
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
  .ud-404-title {
    font-size: 35px;
  }
}

@media (max-width: 767px) {
  .ud-404-title {
    font-size: 30px;
  }
}

.ud-404-subtitle {
  font-size: 24px;
  font-weight: 400;
  margin-bottom: 30px;
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
  .ud-404-subtitle {
    font-size: 22px;
  }
}

@media (max-width: 767px) {
  .ud-404-subtitle {
    font-size: 18px;
  }
}

.ud-404-links {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
}

.ud-404-links a {
  font-size: 16px;
  font-weight: 500;
  padding: 12px 24px;
  color: var(--heading-color);
  background: rgba(48, 86, 211, 0.06);
  border-radius: 5px;
  margin: 5px 10px;
}

.ud-404-links a:hover {
  background: var(--heading-color);
  color: var(--white);
}

@media (max-width: 767px) {
  .ud-404-links a {
    margin: 5px 10px;
    font-size: 14px;
    padding: 10px 20px;
  }
}
/*# sourceMappingURL=ud-styles.css.map */