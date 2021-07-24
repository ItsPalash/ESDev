

<!DOCTYPE html>
<html lang="en" >

<head>

  <meta charset="UTF-8">
  
<link rel="apple-touch-icon" type="image/png" href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png" />
<meta name="apple-mobile-web-app-title" content="CodePen">

<link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico" />

<link rel="mask-icon" type="" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111" />


  <title>CodePen - SlideShow  Animated</title>
  
  
  
  
<style>
.pagination {
  position: absolute !important;
  width: 100%;
  text-align: center;
  right: 0;
  padding: 0 !important;
  bottom: 30px;
  z-index: 999;
}

.pagination__item {
  cursor: pointer;
  display: inline-block;
  white-space: nowrap;
  font-size: 0;
  width: 10px;
  height: 10px;
  border: 1px solid #fff;
  margin: 0 5px;
  transition: 0.2s ease-in-out;
}
.pagination__item.is-current, .pagination__item:hover {
  background-color: #fff;
}

.container {
  position: relative;
  margin: 0 auto;
}

@media (max-width: 699px) {
  .container {
    padding-right: 40px;
    padding-left: 40px;
  }
}
@media (min-width: 700px) and (max-width: 1599px) {
  .container {
    padding-right: 7.5rem;
    padding-left: 7.5rem;
    max-width: 140rem;
  }
}
@media (min-width: 1600px) {
  .container {
    padding-right: 9.5625rem;
    padding-left: 9.5625rem;
    max-width: 144.125rem;
  }
}
.background-absolute {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background-position: center;
  background-size: cover;
}

.slideshow {
  position: relative;
  color: #fff;
  overflow: hidden;
  min-height: 600px;
  height: 100vh;
}
.slideshow h3,
.slideshow h1,
.slideshow h2 {
  /*font-family: 'Montserrat', sans-serif;*/
  font-family: "Lato", sans-serif;
  text-transform: uppercase;
  letter-spacing: 0.5em;
  line-height: 2em;
}
.slideshow h1 {
  font-size: 44px;
  font-weight: 800;
}

.slideshow__slide {
  visibility: hidden;
  transition: visibility 0s 1.7s;
}
.slideshow__slide.is-current {
  visibility: visible;
  transition-delay: 0s;
}

@media (max-width: 699px) {
  .slideshow .slideshow__slide {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
  }
}
@media (min-width: 700px) {
  .slideshow .slideshow__slide {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
  }
}
.slideshow__slide-background-load-wrap {
  transition: transform 0.9s cubic-bezier(0.4, 0, 0.2, 1);
  transform: translate3d(0, 100%, 0);
  overflow: hidden;
}

.is-animated .slideshow__slide-background-load-wrap {
  transform: translate3d(0, 0, 0);
  transition-delay: 0s;
}

.slideshow__slide.is-prev .slideshow__slide-background-parallax, .slideshow__slide.is-next .slideshow__slide-background-parallax, .slideshow__slide.is-prev-section .slideshow__slide-background-parallax, .slideshow__slide.is-next-section .slideshow__slide-background-parallax {
  transform: none !important;
}

.slideshow__slide-background-load {
  transition: transform 0.9s cubic-bezier(0.4, 0, 0.2, 1);
  transform: translate3d(0, -50%, 0);
}

.is-animated .slideshow__slide-background-load {
  transform: translate3d(0, 0, 0);
}

.slideshow__slide-background-wrap {
  transition: transform 1.2s cubic-bezier(0.4, 0, 0.2, 1) 0.5s;
  transform: translate3d(0, 0, 0);
}

.slideshow__slide.is-prev .slideshow__slide-background-wrap {
  transform: translate3d(0, -100%, 0);
}
.slideshow__slide.is-next .slideshow__slide-background-wrap {
  transform: translate3d(0, 100%, 0);
}
.slideshow__slide.is-prev-section .slideshow__slide-background-wrap {
  transform: translate3d(0, -100%, 0);
  transition: none;
}
.slideshow__slide.is-next-section .slideshow__slide-background-wrap {
  transform: translate3d(0, 100%, 0);
  transition: none;
}

.slideshow__slide-background {
  transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1) 1.5s;
  transform: scale(1);
  overflow: hidden;
}

.slideshow__slide.is-prev .slideshow__slide-background, .slideshow__slide.is-next .slideshow__slide-background {
  transform: scale(0.5);
  transition-delay: 0s;
}
.slideshow__slide.is-prev-section .slideshow__slide-background, .slideshow__slide.is-next-section .slideshow__slide-background {
  transform: scale(0.5);
  transition-delay: 0s;
  transition: none;
}

.slideshow__slide-image-wrap {
  transition: transform 1.2s cubic-bezier(0.4, 0, 0.2, 1) 0.6s;
  transform: translate3d(0, 0, 0);
}

.slideshow__slide.is-prev .slideshow__slide-image-wrap {
  transform: translate3d(0, 50%, 0);
}

.slideshow__slide-image {
  transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1) 1.5s;
  transform: scale(1);
}

.slideshow__slide.is-prev .slideshow__slide-image, .slideshow__slide.is-next .slideshow__slide-image {
  transform: scale(1.25);
  transition-delay: 0s;
}
.slideshow__slide.is-prev-section .slideshow__slide-image, .slideshow__slide.is-next-section .slideshow__slide-image {
  transform: scale(1.25);
  transition-delay: 0s;
  transition: none;
}

.slideshow__slide-image::before, .slideshow__slide-image::after {
  content: "";
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  opacity: 0.35;
}
.slideshow__slide-image::before {
  background-color: rgba(255, 255, 255, 0.26);
}
.slideshow__slide-image::after {
  background: linear-gradient(to top, transparent 0%, #fff 20%);
}

.slideshow__slide.is-prev .slideshow_container, .slideshow__slide.is-next .slideshow_container, .slideshow__slide.is-prev-section .slideshow_container, .slideshow__slide.is-next-section .slideshow_container {
  transform: none !important;
}

.slideshow__slide-caption-text {
  position: relative;
  height: 100%;
  padding-top: 10%;
  transition: transform 1.2s cubic-bezier(0.4, 0, 0.2, 1) 0.4s;
  transform: translate3d(0, 0, 0);
}

.slideshow__slide.is-prev .slideshow__slide-caption-text {
  transform: translate3d(-100%, -50%, 0);
}
.slideshow__slide.is-next .slideshow__slide-caption-text {
  transform: translate3d(-100%, 10%, 0);
}
.slideshow__slide.is-prev-section .slideshow__slide-caption-text {
  transform: translate3d(-100%, -50%, 0);
  transition: none;
}
.slideshow__slide.is-next-section .slideshow__slide-caption-text {
  transform: translate3d(-100%, 10%, 0);
  transition: none;
}

.slideshow__slide-caption {
  position: relative;
  height: 100%;
  transform: translate3d(-100%, 10%, 0);
  transition: transform 1s cubic-bezier(0.4, 0, 0.2, 1) 0.1s;
}

.is-animated .slideshow__slide-caption {
  transform: translate3d(0, 0, 0);
}

.slideshow__slide-caption-title {
  line-height: 1;
}
.slideshow__slide-caption-title.-full {
  width: 100%;
}

@media (max-height: 500px) {
  .slideshow__slide-caption-title {
    margin-bottom: 0 !important;
  }
}
@media (max-width: 699px) {
  .slideshow__slide-caption-title {
    font-size: 40px;
    margin-bottom: 150px;
  }

  .slideshow.-full .slideshow__slide-caption-title {
    margin-bottom: 30px;
  }
}
@media (min-width: 700px) {
  .slideshow__slide-caption-title {
    font-size: 5.625rem;
    margin-bottom: 1.25rem;
  }
}
@media (min-width: 700px) and (max-width: 749px) {
  .slideshow__slide-caption-title {
    font-size: 4.375rem;
  }
}
@media (min-width: 1600px) {
  .slideshow__slide-caption-title {
    font-size: 6.25rem;
  }
}
.slideshow__slide-caption-subtitle {
  display: inline-block;
  padding: 1.875rem 0;
}
.slideshow__slide-caption-subtitle.-load {
  transition: transform 0.9s cubic-bezier(0.4, 0, 0.2, 1) 0.4s;
  transform: translate3d(0, 3.75rem, 0);
}

.is-animated .slideshow__slide-caption-subtitle.-load {
  transform: translate3d(0, 0, 0);
}

body[data-route-option=prev-section] .slideshow__slide-caption-subtitle.-load, body[data-route-option=next-section] .slideshow__slide-caption-subtitle.-load {
  transform: translate3d(0, 0, 0);
}

.slideshow__slide-caption-subtitle-label {
  transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
  transform: translateZ(0);
  display: inline-block;
}

.o-hsub.-link:hover .slideshow__slide-caption-subtitle-label,
.o-hsub-wrap:hover .slideshow__slide-caption-subtitle-label {
  transform: translateX(20px);
}

/* OLD */
.c-header-home_heading {
  line-height: 1;
}
.c-header-home_heading.-full {
  width: 100%;
}

@media (max-height: 500px) {
  .c-header-home_heading {
    margin-bottom: 0 !important;
  }
}
@media (max-width: 699px) {
  .c-header-home_heading {
    font-size: 40px;
    margin-bottom: 150px;
  }

  .c-header-home.-full .c-header-home_heading {
    margin-bottom: 30px;
  }
}
@media (min-width: 700px) {
  .c-header-home_heading {
    font-size: 5.625rem;
    margin-bottom: 1.25rem;
  }
}
@media (min-width: 700px) and (max-width: 749px) {
  .c-header-home_heading {
    font-size: 4.375rem;
  }
}
@media (min-width: 1600px) {
  .c-header-home_heading {
    font-size: 6.25rem;
  }
}
.c-header-home_subheading {
  display: inline-block;
  padding: 1.875rem 0;
}
.c-header-home_subheading.-load {
  transition: transform 0.9s cubic-bezier(0.4, 0, 0.2, 1) 0.4s;
  transform: translate3d(0, 3.75rem, 0);
}

.is-loaded .c-header-home_subheading.-load {
  transform: translate3d(0, 0, 0);
}

body[data-route-option=prev-section] .c-header-home_subheading.-load, body[data-route-option=next-section] .c-header-home_subheading.-load {
  transform: translate3d(0, 0, 0);
}

.c-header-home_footer {
  z-index: 3;
  position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
}

.c-header-home_controls,
.c-header-home_buttons {
  margin-left: 0;
  letter-spacing: normal;
  font-size: 0;
  transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
  transform: translate3d(0, 100%, 0);
}

@media (max-width: 699px) {
  .c-header-home_controls,
.c-header-home_buttons {
    padding-bottom: 40px;
  }
}
@media (min-width: 700px) {
  .c-header-home_controls,
.c-header-home_buttons {
    padding-bottom: 5.625rem;
  }
}
@media (min-width: 700px) and (max-width: 749px) {
  .c-header-home_controls,
.c-header-home_buttons {
    padding-bottom: 3.75rem;
  }
}
.is-loaded .c-header-home_controls,
.is-loaded .c-header-home_buttons {
  transform: translate3d(0, 0, 0);
}

body[data-route-option=prev-section] .c-header-home_controls,
body[data-route-option=prev-section] .c-header-home_buttons {
  transform: translate3d(0, 0, 0);
}
body[data-route-option=next-section] .c-header-home_controls,
body[data-route-option=next-section] .c-header-home_buttons {
  transform: translate3d(0, 0, 0);
}

.c-header-home_controls {
  transition-delay: 0.65s;
}

@media (min-width: 700px) {
  .c-header-home_controls {
    float: left;
  }
}
.c-header-home_buttons {
  transition-delay: 0.75s;
}

@media (max-width: 699px) {
  .c-header-home_buttons {
    margin-left: -20px;
    margin-right: -20px;
  }
}
@media (min-width: 1000px) {
  .c-header-home_buttons {
    float: right;
  }
}
@media (max-width: 699px) {
  .c-header-home_button {
    width: 50% !important;
  }
}
@media (min-width: 700px) {
  .c-header-home_button {
    width: 15.625rem;
  }
}
button,
.c-header-filters_button,
.o-button {
  display: inline-block;
  overflow: visible;
  margin: 0;
  padding: 0;
  outline: 0;
  border: 0;
  background: none;
  color: inherit;
  vertical-align: middle;
  text-align: center;
  text-decoration: none;
  text-transform: none;
  font: inherit;
  line-height: normal;
  cursor: pointer;
  user-select: none;
}

button:hover,
.c-header-filters_button:hover,
.o-button:hover {
  text-decoration: none;
}

@media (min-width: 1200px) {
  body {
    height: 100%;
  }
}
@media (min-width: 1200px) {
  .o-scroll {
    height: 100%;
  }
}
::-moz-selection {
  background: #0084c0;
  color: #fff;
}

img,
svg {
  max-width: 100%;
}

a,
.o-link {
  color: #1a0dab;
  transition: color 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

a:hover,
.o-link:hover {
  color: #13097c;
}

a.-normal,
.o-link.-normal {
  color: currentColor;
  text-decoration: none;
}

a.-normal:hover,
.o-link.-normal:hover {
  text-decoration: underline;
}

a.-blue:hover,
.o-link.-blue:hover {
  text-decoration: none;
  color: #0084c0;
}

a.-hover,
.o-link.-hover {
  position: relative;
  text-decoration: none;
  color: #fff;
}

a.-hover::after,
.o-link.-hover::after {
  content: "";
  position: absolute;
  bottom: -1px;
  right: 0;
  left: 0;
  border-bottom: 1px solid;
  transform: scaleX(0);
  transition: transform 0.45s cubic-bezier(0.4, 0, 0.2, 1);
  transform-origin: center left;
}

a.-hover:hover::after,
.o-link.-hover:hover::after {
  transform: scaleX(1);
}

p {
  margin: 0;
}

.o-wrap {
  overflow: hidden;
}

.o-page.-anim {
  transform: translate3d(0, 9.375rem, 0);
  transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
}

.is-loaded .o-page.-anim {
  transform: translate3d(0, 0, 0);
}

.o-barba,
.o-barba_container {
  height: 100%;
}

strong {
  font-weight: 700;
}

.js-parallax {
  transform: translateZ(0);
  will-change: transform;
}

.scroll-content {
  overflow: hidden;
}

.o-blockquote.-nomargin {
  margin: 0;
}

.o-action-link {
  display: block;
  padding-top: 12.8125rem;
  padding-bottom: 7.5rem;
  text-align: center;
  text-decoration: none;
  font-weight: 700;
}
.o-action-link:hover {
  color: #fff;
}

@media (max-width: 699px) {
  .o-action-link {
    font-size: 40px;
    padding-top: 120px;
  }
}
@media (max-width: 1199px) {
  .o-action-link {
    color: #1e1e22;
  }
}
@media (min-width: 700px) {
  .o-action-link {
    font-size: 5.625rem;
  }
}
@media (min-width: 1200px) {
  .o-action-link {
    color: #fff;
  }
}
.o-action-link_label {
  display: inline-block;
  position: relative;
}
.o-action-link_label::after {
  content: "";
  position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  border-bottom: 0.1875rem solid;
  transform: scaleX(0);
  transform-origin: center left;
  transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
}

.o-action-link:hover .o-action-link_label::after {
  transform: scaleX(1);
}

.o-h,
h1,
.o-h1,
h2,
.o-h2,
h3,
.o-h3,
h4,
.o-h4,
h5,
.o-h5,
h6,
.o-h6 {
  font-weight: 700;
  margin-top: 0;
  line-height: 1.1;
}

@media (max-width: 699px) {
  h1,
.o-h1 {
    font-size: 26px;
  }
}
@media (min-width: 700px) {
  h1,
.o-h1 {
    font-size: 60px;
  }
}
@media (min-width: 1600px) {
  h1,
.o-h1 {
    font-size: 4.375rem;
  }
}
@media (max-width: 1599px) {
  h2,
.o-h2 {
    font-size: 1.5625rem;
  }
}
@media (min-width: 1600px) {
  h2,
.o-h2 {
    font-size: 2.25rem;
  }
}
h3,
.o-h3 {
  font-size: 1.5625rem;
}

h4,
.o-h4 {
  font-size: 1rem;
}

h5,
.o-h5 {
  font-size: 0.8125rem;
}

h6,
.o-h6 {
  font-size: 0.6875rem;
}

.o-hsub {
  font-size: 0.75rem;
  padding: 1.25rem 0;
  display: inline-block;
  text-transform: uppercase;
  letter-spacing: 0.12em;
  font-weight: 500;
}
.o-hsub::before {
  content: "";
  display: inline-block;
  vertical-align: middle;
  border-bottom: 1px solid;
  width: 1.5rem;
  background-color: #1e1e22;
  margin-right: 1.125rem;
  transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
  transform-origin: center left;
}
.o-hsub.-link {
  color: #fff;
  text-decoration: none;
}
.o-hsub.-link:hover::before {
  transform: scaleX(1.5);
}

.o-hsub-wrap:hover .o-hsub.-link::before {
  transform: scaleX(1.5);
}

.o-hsub.-link.-dark {
  color: #1e1e22;
}
.o-hsub.-link.-dark:hover {
  color: #1e1e22;
}
.o-hsub.-h {
  vertical-align: middle;
}

@media (max-width: 699px) {
  .o-hsub.-h {
    display: block;
    margin-top: 20px;
  }
}
@media (min-width: 700px) {
  .o-hsub.-h {
    margin-left: 2.5rem;
  }
}
.o-hsub_label {
  transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
  transform: translateZ(0);
  display: inline-block;
}

.o-hsub.-link:hover .o-hsub_label,
.o-hsub-wrap:hover .o-hsub_label {
  transform: translateX(20px);
}

.is-loaded .o-loader {
  visibility: hidden;
  transition-delay: 0.6s;
}

.o-container {
  position: relative;
  margin: 0 auto;
}

@media (max-width: 699px) {
  .o-container {
    padding-right: 40px;
    padding-left: 40px;
  }
  .o-container.-small {
    padding-right: 20px;
    padding-left: 20px;
  }
}
@media (min-width: 700px) and (max-width: 1599px) {
  .o-container {
    padding-right: 7.5rem;
    padding-left: 7.5rem;
    max-width: 140rem;
  }
}
@media (min-width: 1600px) {
  .o-container {
    padding-right: 9.5625rem;
    padding-left: 9.5625rem;
    max-width: 144.125rem;
  }
}
.o-section {
  position: relative;
}
.o-section.-offset {
  margin-top: -9.375rem;
  background-color: #f6f6f6;
}
.o-section.-padding {
  padding-top: 7.5rem;
  padding-bottom: 7.5rem;
}
.o-section.-padding-top {
  padding-top: 7.5rem;
}
.o-section.-left {
  margin-right: 15rem;
}
.o-section.-right {
  margin-left: 15rem;
}
.o-section.-left-large {
  margin-right: 22.5rem;
}
.o-section.-right.-padding {
  padding-left: 9.5625rem;
}

@media (max-width: 699px) {
  .o-section.-bottom {
    padding-bottom: 60px;
  }
}
@media (min-width: 700px) {
  .o-section.-bottom {
    padding-bottom: 7.5rem;
  }
}
.o-section_image {
  position: relative;
  overflow: hidden;
}
.o-section_image.-small {
  padding-bottom: 57.144%;
}
.o-section_image.-large {
  padding-bottom: 55%;
}
.o-section_image.-padding-left {
  margin-left: 7.5rem;
}
.o-section_image.-left {
  margin-right: 15rem;
}
.o-section_image.-right {
  margin-left: 15rem;
}
.o-section_image img {
  width: 100%;
}

@media (max-width: 1599px) {
  .o-section_image.-left {
    margin-left: -7.5rem;
  }
}
@media (min-width: 1600px) {
  .o-section_image.-left {
    margin-left: -9.5625rem;
  }
}
@media (max-width: 1599px) {
  .o-section_image.-right {
    margin-right: -7.5rem;
  }
}
@media (min-width: 1600px) {
  .o-section_image.-right {
    margin-right: -9.5625rem;
  }
}
.o-grid {
  margin-left: 0;
  letter-spacing: normal;
  font-size: 0;
}
.o-grid.-margin {
  margin-left: -3.75rem;
}

.o-grid_item {
  display: inline-block;
  padding-left: 0;
  width: 100%;
  vertical-align: top;
  font-size: 1rem;
}

@media (max-width: 699px) {
  .o-grid_item.-button {
    width: 100%;
  }
}
@media (min-width: 700px) and (max-width: 999px) {
  .o-grid_item.-button {
    margin-bottom: 60px;
  }
}
@media (min-width: 1000px) {
  .o-grid_item.-button {
    width: 18.75rem;
  }
}
@media (max-width: 699px) {
  .o-grid_item.-button-content {
    margin-bottom: 30px;
  }
}
@media (min-width: 700px) and (max-width: 999px) {
  .o-grid_item.-button-content {
    margin-bottom: 60px;
  }
}
@media (min-width: 1000px) {
  .o-grid_item.-button-content {
    width: calc(100% - 18.75rem);
  }
}
.o-grid.-margin .o-grid_item {
  padding-left: 3.75rem;
}

@media (min-width: 700px) {
  .o-grid_item.-half {
    width: 50%;
  }
}
@media (min-width: 700px) and (max-width: 1199px) {
  .o-grid_item.-half.-large {
    width: 100%;
  }
}
@media (min-width: 700px) and (max-width: 999px) {
  .o-grid_item.-half.-medium {
    width: 100%;
  }
}
@media (min-width: 700px) and (max-width: 1199px) {
  .o-grid_item.-third {
    width: 50%;
  }
}
@media (min-width: 1200px) {
  .o-grid_item.-third {
    width: 33.3333333333%;
  }
}
.o-form {
  padding-bottom: 11.25rem;
}

@media (max-width: 699px) {
  .o-form_item {
    margin-bottom: 35px;
  }
}
@media (min-width: 700px) {
  .o-form_item {
    margin-bottom: 2.9375rem;
  }
}
.o-form_fieldset {
  padding: 0;
  margin: 0;
  border: 0;
}

@media (max-width: 699px) {
  .o-form_fieldset {
    margin-bottom: 20px;
  }
}
@media (min-width: 700px) {
  .o-form_fieldset {
    margin-bottom: 3.75rem;
  }
}
.o-form_button {
  text-align: right;
}

.o-label {
  display: block;
  height: 100%;
  color: #b3b3b3;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  padding: 0.875rem;
  transition: color 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

@media (max-width: 699px) {
  .o-label {
    font-size: 9px;
  }
}
@media (min-width: 700px) {
  .o-label {
    font-size: 0.5625rem;
  }
}
.o-input-wrap .o-label {
  position: absolute;
  bottom: 0;
  left: 0;
  transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1), color 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

.o-input:focus ~ .o-label,
.o-select:focus ~ .o-label,
.o-textarea:focus ~ .o-label,
.o-label.is-active {
  transform: translateY(-1.875rem);
}

.o-input.has-error ~ .o-label {
  color: #cc3d3d;
}

.has-error.o-select ~ .o-label, .has-error.o-textarea ~ .o-label {
  color: #cc3d3d;
}

.o-input-wrap {
  position: relative;
}

.o-input,
.o-select,
.o-textarea {
  padding: 0.875rem;
  background-color: transparent;
  border-bottom: 1px solid #b3b3b3;
  transition: border-color 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

@media (max-width: 699px) {
  .o-input,
.o-select,
.o-textarea {
    font-size: 14px;
  }
}
@media (min-width: 700px) {
  .o-input,
.o-select,
.o-textarea {
    font-size: 0.875rem;
  }
}
.o-input::-webkit-input-placeholder,
.o-select::-webkit-input-placeholder,
.o-textarea::-webkit-input-placeholder,
.o-input:-ms-input-placeholder,
.o-select:-ms-input-placeholder,
.o-textarea:-ms-input-placeholder,
.o-input::-ms-input-placeholder,
.o-select::-ms-input-placeholder,
.o-textarea::-ms-input-placeholder,
.o-input::placeholder,
.o-select::placeholder,
.o-textarea::placeholder {
  color: #b3b3b3;
}

.o-input.-search {
  background-color: transparent;
  color: #fff;
  font-weight: 700;
  border-bottom: none;
}

.-search.o-select, .-search.o-textarea {
  background-color: transparent;
  color: #fff;
  font-weight: 700;
  border-bottom: none;
}

@media (max-width: 699px) {
  .o-input.-search {
    font-size: 26px;
  }

  .-search.o-select, .-search.o-textarea {
    font-size: 26px;
  }
}
@media (min-width: 700px) {
  .o-input.-search {
    font-size: 3.75rem;
  }

  .-search.o-select, .-search.o-textarea {
    font-size: 3.75rem;
  }
}
.o-input.-search::-webkit-input-placeholder {
  color: #000;
}

.-search.o-select::-webkit-input-placeholder, .-search.o-textarea::-webkit-input-placeholder {
  color: #000;
}

.o-input.-search:-ms-input-placeholder {
  color: #000;
}

.-search.o-select:-ms-input-placeholder, .-search.o-textarea:-ms-input-placeholder {
  color: #000;
}

.o-input.-search::-ms-input-placeholder {
  color: #000;
}

.-search.o-select::-ms-input-placeholder, .-search.o-textarea::-ms-input-placeholder {
  color: #000;
}

.o-input.-search::placeholder {
  color: #000;
}

.-search.o-select::placeholder, .-search.o-textarea::placeholder {
  color: #000;
}

.-mobile .o-input.-search {
  font-size: 26px;
  padding: 0;
}
.-mobile .-search.o-select, .-mobile .-search.o-textarea {
  font-size: 26px;
  padding: 0;
}

.o-input.-search.-light {
  color: #1e1e22;
}

.-search.-light.o-select, .-search.-light.o-textarea {
  color: #1e1e22;
}

.o-input.-search.-light::-webkit-input-placeholder {
  color: #b3b3b3;
}

.-search.-light.o-select::-webkit-input-placeholder, .-search.-light.o-textarea::-webkit-input-placeholder {
  color: #b3b3b3;
}

.o-input.-search.-light:-ms-input-placeholder {
  color: #b3b3b3;
}

.-search.-light.o-select:-ms-input-placeholder, .-search.-light.o-textarea:-ms-input-placeholder {
  color: #b3b3b3;
}

.o-input.-search.-light::-ms-input-placeholder {
  color: #b3b3b3;
}

.-search.-light.o-select::-ms-input-placeholder, .-search.-light.o-textarea::-ms-input-placeholder {
  color: #b3b3b3;
}

.o-input.-search.-light::placeholder {
  color: #b3b3b3;
}

.-search.-light.o-select::placeholder, .-search.-light.o-textarea::placeholder {
  color: #b3b3b3;
}

.o-input.has-error {
  border-color: #cc3d3d;
}

.has-error.o-select, .has-error.o-textarea {
  border-color: #cc3d3d;
}

.o-input:focus,
.o-select:focus,
.o-textarea:focus {
  outline: none;
}

.o-input-line {
  display: block;
  position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  border-bottom: 1px solid #1e1e22;
  transform: scaleX(0);
  transition: transform 0.45s cubic-bezier(0.4, 0, 0.2, 1);
  transform-origin: center left;
}

.o-input:focus ~ .o-input-line,
.o-select:focus ~ .o-input-line,
.o-textarea:focus ~ .o-input-line {
  transform: scaleX(1);
}

.o-input-lines::before, .o-input-lines::after {
  content: "";
  position: absolute;
  bottom: 0;
  border-right: 1px solid #b3b3b3;
  height: 0.375rem;
  transition: border-color 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

.o-input.has-error ~ .o-input-lines::before {
  border-color: #cc3d3d;
}

.has-error.o-select ~ .o-input-lines::before, .has-error.o-textarea ~ .o-input-lines::before {
  border-color: #cc3d3d;
}

.o-input.has-error ~ .o-input-lines::after {
  border-color: #cc3d3d;
}

.has-error.o-select ~ .o-input-lines::after, .has-error.o-textarea ~ .o-input-lines::after {
  border-color: #cc3d3d;
}

.o-input-lines::before {
  left: 0;
  transition-delay: 0.3s;
}
.o-input-lines::after {
  right: 0;
}

.o-input:focus ~ .o-input-lines::before,
.o-select:focus ~ .o-input-lines::before,
.o-textarea:focus ~ .o-input-lines::before,
.o-input:focus ~ .o-input-lines::after,
.o-select:focus ~ .o-input-lines::after,
.o-textarea:focus ~ .o-input-lines::after {
  border-color: #1e1e22;
}

.o-input:focus ~ .o-input-lines::before,
.o-select:focus ~ .o-input-lines::before,
.o-textarea:focus ~ .o-input-lines::before {
  transition-delay: 0s;
}

.o-input:focus ~ .o-input-lines::after,
.o-select:focus ~ .o-input-lines::after,
.o-textarea:focus ~ .o-input-lines::after {
  transition-delay: 0.3s;
}

.o-checkbox,
.o-radio {
  position: absolute;
  width: 0;
  opacity: 0;
}

.o-checkbox:checked + .o-checkbox-label::after,
.o-radio:checked + .o-checkbox-label::after,
.o-checkbox:checked + .o-radio-label::after,
.o-radio:checked + .o-radio-label::after {
  transform: scale(1);
}

.o-checkbox-label,
.o-radio-label {
  position: relative;
  display: inline-block;
  margin-right: 0.5em;
  line-height: 1.4;
  margin-right: 4.0625rem;
  cursor: pointer;
  padding-top: 0.125rem;
}

@media (max-width: 699px) {
  .o-checkbox-label,
.o-radio-label {
    font-size: 12px;
    padding-left: 27px;
  }
}
@media (min-width: 700px) {
  .o-checkbox-label,
.o-radio-label {
    font-size: 0.875rem;
    padding-left: 1.1875rem;
  }
}
.o-checkbox-label.-uppsercase,
.-uppsercase.o-radio-label {
  text-transform: uppercase;
}

.o-checkbox-label::before,
.o-radio-label::before,
.o-checkbox-label::after,
.o-radio-label::after {
  position: absolute;
  top: 50%;
  left: 0;
  display: inline-block;
  padding: 0;
  content: "";
  border: 1px solid;
  transition: border-color 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

@media (max-width: 699px) {
  .o-checkbox-label::before,
.o-radio-label::before,
.o-checkbox-label::after,
.o-radio-label::after {
    width: 12px;
    height: 12px;
    margin-top: -6px;
  }
}
@media (min-width: 700px) {
  .o-checkbox-label::before,
.o-radio-label::before,
.o-checkbox-label::after,
.o-radio-label::after {
    margin-top: -0.28125rem;
    width: 0.5625rem;
    height: 0.5625rem;
  }
}
.o-checkbox-label::after,
.o-radio-label::after {
  width: 0;
  height: 0;
  border-style: solid;
  border-color: #1e1e22 transparent transparent transparent;
  transform: scale(0);
  transform-origin: top left;
  transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

@media (max-width: 699px) {
  .o-checkbox-label::after,
.o-radio-label::after {
    border-width: 12px 12px 0 0;
  }
}
@media (min-width: 700px) {
  .o-checkbox-label::after,
.o-radio-label::after {
    border-width: 0.5625rem 0.5625rem 0 0;
  }
}
.o-checkbox-label.has-error::before,
.has-error.o-radio-label::before {
  border-color: #cc3d3d;
}

.o-checkbox-label_text {
  display: inline-block;
  transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
  transform: translateZ(0);
}

.o-checkbox-label:hover .o-checkbox-label_text {
  transform: translateX(0.3125rem);
}

.o-radio-label:hover .o-checkbox-label_text {
  transform: translateX(0.3125rem);
}
.o-radio-label::before {
  border-radius: 50%;
  width: 12px;
  height: 12px;
}
.o-radio-label::after {
  border-radius: 50%;
  width: 12px;
  height: 12px;
  background-image: url("data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20version%3D%221.1%22%20x%3D%220%22%20y%3D%220%22%20width%3D%2213%22%20height%3D%2213%22%20viewBox%3D%220%200%2013%2013%22%20enable-background%3D%22new%200%200%2013%2013%22%20xml%3Aspace%3D%22preserve%22%3E%3Ccircle%20fill%3D%22%23424242%22%20cx%3D%226.5%22%20cy%3D%226.5%22%20r%3D%226.5%22%2F%3E%3C%2Fsvg%3E");
  background-size: 6px;
  background-position: center;
  background-repeat: no-repeat;
  transform: scale(0);
  transform-origin: center;
  transition: transform 0.45s cubic-bezier(0.4, 0, 0.2, 1);
  border: none;
}

.o-radio:checked + .o-radio-label::after {
  transform: scale(1);
}

.o-select {
  position: relative;
  z-index: 1;
  padding-right: 2.5rem;
}
.o-select:focus {
  border-bottom-color: #1e1e22;
}

.o-select-wrap {
  position: relative;
}
.o-select-wrap::after {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  z-index: 2;
  width: 2.5rem;
  background-image: url("data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20version%3D%221.1%22%20x%3D%220%22%20y%3D%220%22%20width%3D%2213%22%20height%3D%2211.3%22%20viewBox%3D%220%200%2013%2011.3%22%20enable-background%3D%22new%200%200%2013%2011.3%22%20xml%3Aspace%3D%22preserve%22%3E%3Cpolygon%20fill%3D%22%23b3b3b3%22%20points%3D%226.5%2011.3%203.3%205.6%200%200%206.5%200%2013%200%209.8%205.6%20%22%2F%3E%3C%2Fsvg%3E");
  background-position: center;
  background-size: 10px;
  background-repeat: no-repeat;
  content: "";
  pointer-events: none;
}

.o-textarea-wrap {
  position: relative;
}

.o-textarea {
  min-height: 9.375rem;
}

.o-button {
  position: relative;
  display: inline-block;
  text-align: center;
  border: 1px solid #1e1e22;
  white-space: nowrap;
  font-size: 0;
  transition: background-color 0.3s cubic-bezier(0.4, 0, 0.2, 1), color 0.45s cubic-bezier(0.4, 0, 0.2, 1) 0.075s;
}
.o-button:before {
  display: inline-block;
  height: 100%;
  content: "";
  vertical-align: middle;
}
.o-button > * {
  display: inline-block;
  vertical-align: middle;
  white-space: normal;
  font-size: 1rem;
}
.o-button::after {
  content: "";
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background-color: #1e1e22;
  transform: scaleX(0);
  transform-origin: center left;
  transition: transform 0.45s cubic-bezier(0.4, 0, 0.2, 1) 0.075s;
}
.o-button:hover {
  color: #fff;
  transition-delay: 0s;
}
.o-button:hover::after {
  transform: scaleX(1);
  transition-delay: 0s;
}
.o-button.-left::after {
  transform-origin: center right;
}
.o-button.-white {
  border-color: #fff;
}
.o-button.-white::after {
  background-color: #fff;
}
.o-button.-white:hover {
  color: #000;
}
.o-button.-form {
  width: 11.25rem;
}
.o-button.-form:focus {
  color: #fff;
  transition-delay: 0s;
}
.o-button.-form:focus::after {
  transform: scaleX(1);
  transition-delay: 0s;
}
.o-button.-square {
  padding: 0;
}

@media (max-width: 699px) {
  .o-button {
    height: 60px;
    padding: 0 20px;
  }
}
@media (min-width: 700px) {
  .o-button {
    height: 3.75rem;
    padding: 0 1.875rem;
  }
}
@media (min-width: 1200px) {
  .o-button.-anim {
    border-color: transparent;
  }
}
@media (max-width: 699px) {
  .o-button.-width {
    width: 100%;
  }
}
@media (min-width: 700px) {
  .o-button.-width {
    width: 15rem;
  }
}
@media (max-width: 699px) {
  .o-button.-square {
    width: 60px;
  }
}
@media (min-width: 700px) {
  .o-button.-square {
    width: 3.75rem;
  }
}
.o-button-group .o-button + .o-button {
  border-left: none;
}

@media (max-width: 699px) {
  .o-button.-padding {
    padding: 1.25rem;
  }
}
@media (min-width: 700px) {
  .o-button.-padding {
    padding: 1.25rem 2.5rem;
  }
}
.o-button_label {
  display: inline-block;
  position: relative;
  transition: transform 0.45s cubic-bezier(0.4, 0, 0.2, 1);
  transform: translateX(0);
  line-height: 1.4;
  z-index: 2;
  text-transform: uppercase;
  letter-spacing: 0.12em;
  font-weight: 500;
  font-size: 0.75rem;
}

.o-button:hover .o-button_label {
  transform: translateX(0.5rem);
  transition-delay: 0.075s;
}
.o-button.-left:hover .o-button_label {
  transform: translateX(-0.5rem);
}
.o-button.-square:hover .o-button_label {
  transform: translateX(0.375rem);
}
.o-button.-left.-square:hover .o-button_label {
  transform: translateX(-0.375rem);
}

.o-button-group {
  margin-left: 0;
  letter-spacing: normal;
  font-size: 0;
}

.o-button_icon {
  position: relative;
  width: 1rem;
  height: 1rem;
  fill: #000;
  transition: fill 0.45s cubic-bezier(0.4, 0, 0.2, 1) 0.075s;
}

.o-button.-white .o-button_icon {
  fill: #fff;
}
.o-button:hover .o-button_icon {
  fill: #f6f6f6;
  transition-delay: 0s;
}
.o-button.-white:hover .o-button_icon {
  fill: #1e1e22;
}

.o-button_line::before, .o-button_line::after {
  content: "";
  position: absolute;
  background-color: #1e1e22;
}

.is-mobile .o-button_line::before, .is-mobile .o-button_line::after {
  display: none;
}

.o-button_line::before {
  width: 1px;
  top: 0;
  bottom: 0;
  transform: scaleY(0);
  transition: transform 0.15s cubic-bezier(0.4, 0, 0.2, 1);
}
.o-button_line::after {
  height: 1px;
  right: 0;
  left: 0;
  transform: scaleX(0);
  transition: transform 0.45s cubic-bezier(0.4, 0, 0.2, 1);
}
.o-button_line:first-of-type::before {
  left: 0;
  transform-origin: center bottom;
}
.o-button_line:first-of-type::after {
  top: 0;
  transform-origin: center left;
}
.o-button_line:last-of-type::before {
  right: 0;
  transform-origin: center top;
}
.o-button_line:last-of-type::after {
  bottom: 0;
  transform-origin: center right;
}

.o-button.is-inview .o-button_line::before {
  transform: scaleY(1);
}
.o-button.is-inview .o-button_line::after {
  transform: scaleX(1);
}
.o-button.is-inview .o-button_line:first-of-type::before {
  transition-delay: 1.15s;
}
.o-button.is-inview .o-button_line:first-of-type::after {
  transition-delay: 0.1s;
}
.o-button.is-inview .o-button_line:last-of-type::before {
  transition-delay: 0.55s;
}
.o-button.is-inview .o-button_line:last-of-type::after {
  transition-delay: 0.7s;
}

.c-header-home_footer {
  z-index: 3;
  position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
}

.c-header-home_controls,
.c-header-home_buttons {
  margin-left: 0;
  letter-spacing: normal;
  font-size: 0;
  transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
  transform: translate3d(0, 100%, 0);
}

@media (max-width: 699px) {
  .c-header-home_controls,
.c-header-home_buttons {
    padding-bottom: 40px;
  }
}
@media (min-width: 700px) {
  .c-header-home_controls,
.c-header-home_buttons {
    padding-bottom: 5.625rem;
  }
}
@media (min-width: 700px) and (max-width: 749px) {
  .c-header-home_controls,
.c-header-home_buttons {
    padding-bottom: 3.75rem;
  }
}
.is-loaded .c-header-home_controls,
.is-loaded .c-header-home_buttons {
  transform: translate3d(0, 0, 0);
}

body[data-route-option=prev-section] .c-header-home_controls,
body[data-route-option=prev-section] .c-header-home_buttons {
  transform: translate3d(0, 0, 0);
}
body[data-route-option=next-section] .c-header-home_controls,
body[data-route-option=next-section] .c-header-home_buttons {
  transform: translate3d(0, 0, 0);
}

.c-header-home_controls {
  transition-delay: 0.65s;
}

@media (min-width: 700px) {
  .c-header-home_controls {
    float: left;
  }
}
.c-header-home_buttons {
  transition-delay: 0.75s;
}

@media (max-width: 699px) {
  .c-header-home_buttons {
    margin-left: -20px;
    margin-right: -20px;
  }
}
@media (min-width: 1000px) {
  .c-header-home_buttons {
    float: right;
  }
}
@media (max-width: 699px) {
  .c-header-home_button {
    width: 50% !important;
  }
}
@media (min-width: 700px) {
  .c-header-home_button {
    width: 15.625rem;
  }
}
.slideshow__slide-image.background-absolute {
  width: 60%;
  left: 40%;
}

h1.slideshow__slide-caption-title {
  padding-left: 98px;
  padding-right: 98px;
  color: black;
}

.o-hsub.-link {
  padding-left: 98px;
  padding-right: 98px;
  color: #000;
  text-decoration: none;
}

button.slider-more-button {
  width: 16rem;
  height: 7rem;
  position: absolute;
  bottom: 0;
  right: 0;
  background-color: #fcc865;
  color: #000;
  text-transform: uppercase;
  transition: opacity 700ms cubic-bezier(0.8, 0, 0.55, 0.94) 470ms, transform 700ms cubic-bezier(0.8, 0, 0.55, 0.94) 470ms;
  transform: rotateZ(-20deg) translate3d(-20vh, 20vh, 0);
}

.is-animated .slider-more-button {
  transform: rotateZ(0deg) translate3d(0, 0, 0);
}

p.slideshow__slide-caption-content {
  padding-left: 98px;
  padding-right: 98px;
  box-sizing: border-box;
  color: rgba(0, 0, 0, 0.7);
  cursor: pointer;
  display: block;
  font-family: Plain, sans-serif;
  font-size: 14px;
  font-weight: 200;
  max-height: 218px;
  letter-spacing: 0.28px;
  line-height: 28px;
  margin-top: 20px;
  opacity: 0;
  text-size-adjust: 100%;
  transition: opacity 700ms cubic-bezier(0.8, 0, 0.55, 0.94), transform 700ms cubic-bezier(0.8, 0, 0.55, 0.94);
  transform: translate3d(-100px, 0, 0);
  max-width: 40%;
  width: 40%;
}

.slideshow__slide.is-current p.slideshow__slide-caption-content {
  opacity: 1;
  transition: opacity 700ms cubic-bezier(0.8, 0, 0.55, 0.94) 1470ms, transform 700ms cubic-bezier(0.8, 0, 0.55, 0.94) 1470ms;
  transform: translate3d(0, 0, 0);
}

span.slideshow__slide-caption-subtitle-label {
  font-weight: 800;
  font-family: "Montserrat", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
}

.side-nav {
  display: none;
}

@media (min-width: 1024px) {
  .side-nav {
    display: block;
    left: 0;
    z-index: 2;
    width: 100vh;
    height: 5vw;
    transform-origin: top;
    display: flex;
    align-items: center;
    justify-content: center;
    transform: translate3d(-100%, 10%, 0);
    transition: transform 1s cubic-bezier(0.4, 0, 0.2, 1) 0.1s;
  }

  .is-animated .side-nav {
    transition: opacity 700ms cubic-bezier(0.8, 0, 0.55, 0.94) 470ms, transform 700ms cubic-bezier(0.8, 0, 0.55, 0.94) 470ms;
    transform: rotateZ(-90deg) translate3d(-390px, -50vh, 0);
  }
  .side-nav {
    opacity: 1;
    transition: opacity 700ms cubic-bezier(0.8, 0, 0.55, 0.94) 1470ms, transform 700ms cubic-bezier(0.8, 0, 0.55, 0.94) 1470ms;
  }
  .side-nav ul {
    list-style: none;
    margin: 0 0;
    padding-top: 0.3vw;
  }
  .side-nav li {
    display: inline-block;
    line-height: 0.9em;
    margin: 0 15px;
    padding-bottom: 8px;
    border-bottom: 1px solid transparent;
    cursor: pointer;
    transition: opacity 400ms cubic-bezier(0.8, 0, 0.55, 0.94), border-color 400ms cubic-bezier(0.8, 0, 0.55, 0.94);
  }
  .side-nav .label {
    font-size: 11px;
    letter-spacing: 0.18em;
    text-transform: uppercase;
    opacity: 0.3;
    margin: 0 0;
    color: #0a0c0d;
    font-weight: 800;
    font-family: "Montserrat", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
  }
  .side-nav[data-view=cover] li[data-view=cover] {
    opacity: 1;
    border-bottom: 1px solid #000;
  }

  .slideshow__slide.is-prev .side-nav {
    transform: translate3d(-100%, -50%, 0);
  }
  .slideshow__slide.is-next .side-nav {
    transform: translate3d(-100%, 10%, 0);
  }
  .slideshow__slide.is-prev-section .side-nav {
    transform: translate3d(-100%, -50%, 0);
    transition: none;
  }
  .slideshow__slide.is-next-section .side-nav {
    transform: translate3d(-100%, 10%, 0);
    transition: none;
  }
}
/*end slider show*/
/*Floating button*/
.floating-btn {
  font-family: "Roboto Thin", sans-serif;
  border: none;
  border-width: 0px;
  margin: 0;
  overflow: hidden;
  border: none;
  outline: none;
  color: white;
  font-size: 20px;
  background: #F6EFE3;
  position: relative;
  padding: 14px;
  width: 60px;
  height: 60px;
  border-radius: 50%;
  box-shadow: 0 12px 42px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.24);
  transition: 0.3s;
  margin: 0.5em;
}
.floating-btn:hover {
  background: #d2cbbf;
  cursor: pointer;
  box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
}

.js-parallax.is-inview {
  width: 100px;
}

button .floating-btn:focus {
  outline: 0px;
  outline: 0px;
}

.c-header-home_controls.-nomobile.o-button-group {
  margin-left: 30%;
}

.divide {
  margin-top: 50px;
  margin-bottom: 50px;
}

.ripple {
  overflow: hidden;
}

.ripple-effect {
  position: absolute;
  border-radius: 50%;
  width: 50px;
  height: 50px;
  background: white;
  animation: ripple-animation 2s;
}

.ripple > .o-button_icon {
  top: 1px;
}

@keyframes ripple-animation {
  from {
    transform: scale(1);
    opacity: 0.4;
  }
  to {
    transform: scale(100);
    opacity: 0;
  }
}
/* End Floating Button */
/* nav bar*/
.navbar-container {
  z-index: 1000;
  background-color: #fff;
}

@media (max-width: 699px) {
  .container {
    padding-right: 0px;
    padding-left: 0px;
  }
}
@media (min-width: 700px) and (max-width: 1599px) {
  .container {
    padding-right: 0rem;
    padding-left: 0rem;
    max-width: 140rem;
  }
}
</style>

  <script>
  window.console = window.console || function(t) {};
</script>

  
  
  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>


</head>

<body translate="no" >
  <body>
  	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <section class="slideshow" id="js-header">
    <div class="slideshow__slide js-slider-home-slide is-current" data-slide="1">
      <div class="slideshow__slide-background-parallax background-absolute js-parallax" data-speed="-1" data-position="top" data-target="#js-header">
        <div class="slideshow__slide-background-load-wrap background-absolute">
          <div class="slideshow__slide-background-load background-absolute">
            <div class="slideshow__slide-background-wrap background-absolute">
              <div class="slideshow__slide-background background-absolute">
                <div class="slideshow__slide-image-wrap background-absolute">
                  <div class="slideshow__slide-image background-absolute" style="background-image:url(&quot;https://images.pexels.com/photos/227675/pexels-photo-227675.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260&quot;)"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="side-nav vh-for-mobile" data-view="cover">
        <ul>
          <li class="label" data-view="cover">Works</li>
        </ul>
      </div>
      <div class="slideshow__slide-caption">
        <div class="slideshow__slide-caption-text">
          <div class="container js-parallax" data-speed="2" data-position="top" data-target="#js-header">
            <h1 class="slideshow__slide-caption-title">Omnes enim iucundum</h1>
            <p class="slideshow__slide-caption-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In faucibus odio sed leo fermentum, sed faucibus massa eleifend. Pellentesque ut auctor tellus. Vivamus eget vestibulum urna, sit amet aliquet augue.</p><a class="slideshow__slide-caption-subtitle -load o-hsub -link" href="#"><span class="slideshow__slide-caption-subtitle-label">See how</span></a>
          </div>
        </div>
      </div>
    </div>
    <div class="slideshow__slide js-slider-home-slide is-next" data-slide="2">
      <div class="slideshow__slide-background-parallax background-absolute js-parallax" data-speed="-1" data-position="top" data-target="#js-header">
        <div class="slideshow__slide-background-load-wrap background-absolute">
          <div class="slideshow__slide-background-load background-absolute">
            <div class="slideshow__slide-background-wrap background-absolute">
              <div class="slideshow__slide-background background-absolute">
                <div class="slideshow__slide-image-wrap background-absolute">
                  <div class="slideshow__slide-image background-absolute" style="background-image: url('https://images.pexels.com/photos/415574/pexels-photo-415574.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260');"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="side-nav vh-for-mobile" data-view="cover">
        <ul>
          <li class="label" data-view="cover">Works</li>
        </ul>
      </div>
      <div class="slideshow__slide-caption">
        <div class="slideshow__slide-caption-text">
          <div class="container js-parallax" data-speed="2" data-position="top" data-target="#js-header">
            <h1 class="slideshow__slide-caption-title">Fortasse id optimum</h1>
            <p class="slideshow__slide-caption-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In faucibus odio sed leo fermentum, sed faucibus massa eleifend. Pellentesque ut auctor tellus. Vivamus eget vestibulum urna, sit amet aliquet augue.</p><a class="slideshow__slide-caption-subtitle -load o-hsub -link" href="#"><span class="slideshow__slide-caption-subtitle-label">Learn more about</span></a>
          </div>
        </div>
      </div>
    </div>
    <div class="slideshow__slide js-slider-home-slide is-prev" data-slide="3">
      <div class="slideshow__slide-background-parallax background-absolute js-parallax" data-speed="-1" data-position="top" data-target="#js-header">
        <div class="slideshow__slide-background-load-wrap background-absolute">
          <div class="slideshow__slide-background-load background-absolute">
            <div class="slideshow__slide-background-wrap background-absolute">
              <div class="slideshow__slide-background background-absolute">
                <div class="slideshow__slide-image-wrap background-absolute">
                  <div class="slideshow__slide-image background-absolute" style="background-image: url('https://images.pexels.com/photos/256150/pexels-photo-256150.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260');"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="side-nav vh-for-mobile" data-view="cover">
        <ul>
          <li class="label" data-view="cover">Works</li>
        </ul>
      </div>
      <div class="slideshow__slide-caption">
        <div class="slideshow__slide-caption-text">
          <div class="container js-parallax" data-speed="2" data-position="top" data-target="#js-header">
            <h1 class="slideshow__slide-caption-title">Solum praeterea formosum</h1>
            <p class="slideshow__slide-caption-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In faucibus odio sed leo fermentum, sed faucibus massa eleifend. Pellentesque ut auctor tellus. Vivamus eget vestibulum urna, sit amet aliquet augue.</p><a class="slideshow__slide-caption-subtitle -load o-hsub -link" href="#"><span class="slideshow__slide-caption-subtitle-label">View More</span></a>
          </div>
        </div>
      </div>
    </div>
    <div class="c-header-home_footer">
      <div class="o-container">
        <div class="c-header-home_controls -nomobile o-button-group">
          <div class="js-parallax is-inview" data-speed="1" data-position="top" data-target="#js-header">
            <button class="js-slider-home-next floating-btn ripple" type="button">
              <svg class="o-button_icon" role="img">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#arrow-next"></use>
              </svg>
            </button>
            <button class="js-slider-home-prev floating-btn ripple" type="button">
              <svg class="o-button_icon" role="img">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#arrow-prev"></use>
              </svg>
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
<div>
  <svg xmlns="http://www.w3.org/2000/svg">
    <symbol id="arrow-prev" viewbox="0 0 492 492" xmlns="http://www.w3.org/2000/svg">
      <path d="M198.608 246.104L382.664 62.04c5.068-5.056 7.856-11.816 7.856-19.024 0-7.212-2.788-13.968-7.856-19.032l-16.128-16.12C361.476 2.792 354.712 0 347.504 0s-13.964 2.792-19.028 7.864L109.328 227.008c-5.084 5.08-7.868 11.868-7.848 19.084-.02 7.248 2.76 14.028 7.848 19.112l218.944 218.932c5.064 5.072 11.82 7.864 19.032 7.864 7.208 0 13.964-2.792 19.032-7.864l16.124-16.12c10.492-10.492 10.492-27.572 0-38.06L198.608 246.104z"></path>
    </symbol>
    <symbol id="arrow-next" viewbox="0 0 492.004 492.004" xmlns="http://www.w3.org/2000/svg">
      <path d="M382.678 226.804L163.73 7.86C158.666 2.792 151.906 0 144.698 0s-13.968 2.792-19.032 7.86l-16.124 16.12c-10.492 10.504-10.492 27.576 0 38.064L293.398 245.9l-184.06 184.06c-5.064 5.068-7.86 11.824-7.86 19.028 0 7.212 2.796 13.968 7.86 19.04l16.124 16.116c5.068 5.068 11.824 7.86 19.032 7.86s13.968-2.792 19.032-7.86L382.678 265c5.076-5.084 7.864-11.872 7.848-19.088.016-7.244-2.772-14.028-7.848-19.108z"></path>
    </symbol>
  </svg>
</div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-8216c69d01441f36c0ea791ae2d4469f0f8ff5326f00ae2d00e4bb7d20e24edb.js"></script>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
      <script id="rendered-js" >
var _createClass = function () {function defineProperties(target, props) {for (var i = 0; i < props.length; i++) {var descriptor = props[i];descriptor.enumerable = descriptor.enumerable || false;descriptor.configurable = true;if ("value" in descriptor) descriptor.writable = true;Object.defineProperty(target, descriptor.key, descriptor);}}return function (Constructor, protoProps, staticProps) {if (protoProps) defineProperties(Constructor.prototype, protoProps);if (staticProps) defineProperties(Constructor, staticProps);return Constructor;};}();

function _classCallCheck(instance, Constructor) {if (!(instance instanceof Constructor)) {throw new TypeError("Cannot call a class as a function");}}

var $window = $(window);
var $body = $('body');

var Slideshow = function () {
  function Slideshow() {
    var _this = this;

    var userOptions = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {};

    _classCallCheck(this, Slideshow);

    var defaultOptions = {
      $el: $('.slideshow'),
      showArrows: false,
      showPagination: true,
      duration: 10000,
      autoplay: true };


    var options = Object.assign({}, defaultOptions, userOptions);

    this.$el = options.$el;
    this.maxSlide = this.$el.find($('.js-slider-home-slide')).length;
    this.showArrows = this.maxSlide > 1 ? options.showArrows : false;
    this.showPagination = options.showPagination;
    this.currentSlide = 1;
    this.isAnimating = false;
    this.animationDuration = 1200;
    this.autoplaySpeed = options.duration;
    this.interval;
    this.$controls = this.$el.find('.js-slider-home-button');
    this.autoplay = this.maxSlide > 1 ? options.autoplay : false;

    this.$el.on('click', '.js-slider-home-next', function (event) {
      return _this.nextSlide();
    });
    this.$el.on('click', '.js-slider-home-prev', function (event) {
      return _this.prevSlide();
    });
    this.$el.on('click', '.js-pagination-item', function (event) {
      if (!_this.isAnimating) {
        _this.preventClick();
        _this.goToSlide(event.target.dataset.slide);
      }
    });

    this.init();
  }

  _createClass(Slideshow, [{
    key: 'init',
    value: function init() {
      this.goToSlide(1);

      /* if (this.showArrows) {
         this.$el.append(`<div class="c-header-home_footer">
      <div class="o-container">
      <div class="c-header-home_controls -nomobile o-button-group">
            <div class="js-parallax is-inview" data-speed="1" data-position="top" data-target="#js-header">
                <button class="o-button -white -square -left js-slider-home-button js-slider-home-prev" type="button">
                    <span class="o-button_label">
                        <svg class="o-button_icon" role="img"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#arrow-prev"></use></svg>
                    </span>
                </button>
                <button class="o-button -white -square js-slider-home-button js-slider-home-next" type="button">
                    <span class="o-button_label">
                        <svg class="o-button_icon" role="img"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#arrow-next"></use></svg>
                    </span>
                </button>
            </div>
      </div>
      </div>
      </div>`);
       }
       */
      if (this.autoplay) {
        this.startAutoplay();
      }

      if (this.showPagination) {
        var paginationNumber = this.maxSlide;
        var pagination = '<div class="pagination"><div class="container">';

        for (var i = 0; i < this.maxSlide; i++) {
          var item = '<span class="pagination__item js-pagination-item ' + (i === 0 ? 'is-current' : '') + '" data-slide=' + (i + 1) + '>' + (i + 1) + '</span>';
          pagination = pagination + item;
        }

        pagination = pagination + '</div></div>';

        this.$el.append(pagination);
      }
    } },
  {
    key: 'preventClick',
    value: function preventClick() {
      var _this2 = this;

      this.isAnimating = true;
      this.$controls.prop('disabled', true);
      clearInterval(this.interval);

      setTimeout(function () {
        _this2.isAnimating = false;
        _this2.$controls.prop('disabled', false);
        if (_this2.autoplay) {
          _this2.startAutoplay();
        }
      }, this.animationDuration);
    } },
  {
    key: 'goToSlide',
    value: function goToSlide(index) {
      this.currentSlide = parseInt(index);

      if (this.currentSlide > this.maxSlide) {
        this.currentSlide = 1;
      }

      if (this.currentSlide === 0) {
        this.currentSlide = this.maxSlide;
      }

      var newCurrent = this.$el.find('.js-slider-home-slide[data-slide="' + this.currentSlide + '"]');
      var newPrev = this.currentSlide === 1 ? this.$el.find('.js-slider-home-slide').last() : newCurrent.prev('.js-slider-home-slide');
      var newNext = this.currentSlide === this.maxSlide ? this.$el.find('.js-slider-home-slide').first() : newCurrent.next('.js-slider-home-slide');

      this.$el.find('.js-slider-home-slide').removeClass('is-prev is-next is-current');
      this.$el.find('.js-pagination-item').removeClass('is-current');

      if (this.maxSlide > 1) {
        newPrev.addClass('is-prev');
        newNext.addClass('is-next');
      }

      newCurrent.addClass('is-current');
      this.$el.find('.js-pagination-item[data-slide="' + this.currentSlide + '"]').addClass('is-current');
    } },
  {
    key: 'nextSlide',
    value: function nextSlide() {
      this.preventClick();
      this.goToSlide(this.currentSlide + 1);
    } },
  {
    key: 'prevSlide',
    value: function prevSlide() {
      this.preventClick();
      this.goToSlide(this.currentSlide - 1);
    } },
  {
    key: 'startAutoplay',
    value: function startAutoplay() {
      var _this3 = this;

      this.interval = setInterval(function () {
        if (!_this3.isAnimating) {
          _this3.nextSlide();
        }
      }, this.autoplaySpeed);
    } },
  {
    key: 'destroy',
    value: function destroy() {
      this.$el.off();
    } }]);


  return Slideshow;
}();

(function () {
  var loaded = false;
  var maxLoad = 3000;

  function load() {
    var options = {
      showPagination: true };


    var slideShow = new Slideshow(options);
  }

  function addLoadClass() {
    $body.addClass('is-loaded');

    setTimeout(function () {
      $body.addClass('is-animated');
    }, 600);
  }

  $window.on('load', function () {
    if (!loaded) {
      loaded = true;
      load();
    }
  });

  setTimeout(function () {
    if (!loaded) {
      loaded = true;
      load();
    }
  }, maxLoad);

  addLoadClass();
})();
//# sourceURL=pen.js
    </script>

  

</body>

</html>
 
