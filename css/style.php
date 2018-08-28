<?php header("Content-type: text/css; charset: UTF-8"); ?>
<?php include("../config/config.php"); ?>
@charset "utf-8";
@import url('https://fonts.googleapis.com/css?family=Open+Sans:400,600|Roboto:400,500,700');
/**
*
* -----------------------------------------------------------------------------
*
* Template : Responsive News Magazine HTML5 Template
* Author : rs-theme
* Author URI : http://www.rstheme.com/
*
* -----------------------------------------------------------------------------
*
**/
/* Table Of Content
---------------------------------------------------------
1.General CSS
2.Header area start here
3.Breaking News Slider Here 
4.Slide Menu Section Start Here
    4.1.Home Two Slider Area Start Here
    4.2.Home Slider Area Start Here
5 Latest News Area Start Here
6.Home carousel Slider Start Here
7.Trending news Start Here
8.Hot News Start Here
9.Fetuered Videos Start Here 
10.Sidebar Home Start Here 
11.sidebar Start Here
12.Gallery Page Start Here
13.Home Page Gellary Start Here
14.Testimonial Page Start Here 
15.Error 404 page Start Here 
16.Footer Area Section Start Here
17.Inner Page Header serction start Here
18.About Team Start Here 
19.Pagination Area Start Here 
20.Blog Page Start Here 
21.Blog Details Page start here 
22.Sidebar area Blog Single Start Here
23.Contact Page Start Here
24.Team Page Start Here
25.Single team Page Start Here
26.About page core services start here
27.About Page Counter up Section Start Here
28.Category Page Start Here
29.Account Page Start Here 
30.Scroll To Css Start Here 
31.Sticky Menu To Css Start Here
32.Preloader CSS 
....................................*/
html,
body {
  height: 100%;
  font-size: 15px;
  color: #434343;
  font-family: 'Roboto', sans-serif;
  vertical-align: baseline;
  line-height: 25px;
  font-weight: 400;
  background: #<?php echo $renk; ?>;
}
/* ....................................
1. General CSS
.......................................*/
.floatleft {
  float: left;
}
.floatright {
  float: right;
}
.alignleft {
  float: left;
  margin-right: 15px;
  margin-bottom: 26px;
}
.alignright {
  float: right;
  margin-left: 15px;
  margin-bottom: 26px;
}
.title1 {
  color: #d32f2f;
  font-size: 15px;
  line-height: 25px;
  margin-bottom: 10px;
  display: block;
}
.title2 {
  color: #101010;
  font-size: 20px;
  line-height: 30px;
  text-transform: capitalize;
  margin: 0;
}
.title2 span {
  color: #777777;
  font-size: 24px;
  float: right;
}
.spc-o {
  margin-bottom: 0 !important;
}
.hidden-desktop {
  display: none;
}
.more {
  font-size: 15px;
  font-weight: 500;
  text-transform: uppercase;
  line-height: 19px;
  color: #434343;
}
.fa-heart-o:hover {
  color: #d32f2f !important;
}
.fa-user-o {
  font-size: 11px;
}
.fa-comment-o {
  font-size: 12px;
}
.author {
  font-size: 12px;
}
.more i {
  color: #101010;
  margin-left: 3px;
}
.more i:hover {
  color: #d32f2f;
}
.category-btn {
  font-size: 12px;
  line-height: 18px;
  color: #101010;
  text-transform: uppercase;
  background: #ffffff;
  padding: 5px 16px;
  font-weight: 400;
}
.hvr-bounce-to-right::before {
  background: #d32f2f;
}
.category-page .fa-link {
  border: 2px solid #f52222;
  border-radius: 100%;
  font-size: 18px;
  height: 60px;
  line-height: 60px;
  text-align: center;
  width: 60px;
}
.author {
  font-size: 14px;
  text-transform: capitalize;
}
.author .fa-user-o {
  baseline-shift: 1px;
}
.clear {
  clear: both;
}
.title-panel {
  background: #ffffff none repeat scroll 0 0;
  border-color: #d32f2f;
  border-radius: 4px;
  border-style: solid;
  border-width: 1px 2px 1px 5px;
  margin: 0 0 32px;
  overflow: hidden;
  padding: 20px 15px;
  text-transform: uppercase;
}
.btn-small {
  background: #d32f2f;
  color: #ffffff;
  font-size: 12px;
  text-transform: uppercase;
  font-weight: 600;
  line-height: 15px;
  padding: 6px 14px;
}
.aligncenter {
  display: block;
  margin: 0 auto 26px;
}
.paddimg-left-none {
  padding-left: 0;
}
.paddimg-right-none {
  padding-right: 0;
}
.separator-large {
  margin: 50px 0;
}
.separator-large2 {
  margin-top: 50px;
}
.separator-large3 {
  margin-top: 45px;
}
span.category {
  display: block;
}
span.category a {
  color: #ffffff;
  display: inline-block;
  padding: 2px 5px;
  transition: all 0.5s ease 0s;
  font-weight: 400;
  font-size: 11px;
  line-height: 15px;
  background: #d32f2f;
  text-transform: uppercase;
  -webkit-border-radius: 0px;
  -moz-border-radius: 0px;
  border-radius: 0px;
  text-decoration: none;
}
span.category a:hover {
  background: #000000;
  color: #fff;
}
.title3 {
  color: #101010;
  font-size: 30px;
  font-weight: 600;
  margin-bottom: 0px;
  text-transform: uppercase;
  letter-spacing: 2px;
}
.padding-null {
  padding: 0;
}
.title3 span {
  font-weight: 600;
  text-transform: uppercase;
  font-size: 15px;
  display: block;
  color: #101010;
  margin-top: 14px;
}
.separator-mediam {
  margin-bottom: 25px;
}
a:focus {
  outline: 0px solid;
}
img {
  max-width: 100%;
  height: auto;
}
.fix {
  overflow: hidden;
}
p {
  margin: 0 0 20px;
}
h4 {
  text-transform: capitalize;
}
h1,
h2,
h3,
h4,
h5,
h6 {
  margin: 0 0 26px;
  font-weight: 600;
  font-family: 'Roboto', sans-serif;
  color: #101010;
}
a {
  transition: all 0.5s ease 0s;
  text-decoration: none;
}
a:hover {
  color: #d32f2f;
  text-decoration: none;
}
a:active,
a:hover {
  outline: 0 none;
  color: #d32f2f;
}
ul {
  list-style: outside none none;
  margin: 0;
  padding: 0;
}
.clear {
  clear: both;
}
::-moz-selection {
  background: #d32f2f;
  text-shadow: none;
}
::selection {
  background: #d32f2f;
  text-shadow: none;
  color: #ffffff;
}
.around-news li:first-child {
  margin-top: 0 !important;
}
.browserupgrade {
  margin: 26px 0;
  background: #d32f2f;
  color: #333333;
  padding: 26px 0;
}
.acurate {
  margin: 0;
  padding: 0;
}
.padding {
  padding: 30px;
}
.padding-top {
  padding-top: 30px;
}
.padding-bottom {
  padding-bottom: 30px;
}
.padding1 {
  padding: 60px;
}
.padding-top1 {
  padding-top: 60px;
}
.text-right {
  text-align: right;
}
.title-bg {
  position: relative;
  font-size: 20px;
  color: #101010;
  line-height: 30px;
  display: inline-block;
  text-transform: uppercase;
}
.title-bg:after {
  background: #d32f2f;
  content: "";
  height: 1px;
  left: 0;
  position: absolute;
  bottom: -11px;
  width: 100%;
}
.title-bg:before {
  background: #d32f2f;
  content: "";
  height: 1px;
  left: 0;
  position: absolute;
  bottom: -14px;
  width: 100%;
}
.view-area {
  overflow: hidden;
  padding-bottom: 13px;
}
.view-area a {
  font-size: 15px;
  color: #101010;
  font-weight: 400;
}
.view-area a:hover {
  color: #d32f2f;
}
.padding-bottom1 {
  padding-bottom: 60px;
}
.mobile-menu-area {
  display: none;
}
.mean-container .mean-nav {
  position: absolute;
  top: 100%;
}
.section-title {
  text-align: center;
}
.section-title h2 {
  font-size: 36px;
  text-transform: uppercase;
  margin-bottom: 25px;
  position: relative;
  padding-bottom: 25px;
}
.section-title h2:after {
  position: absolute;
  left: 0;
  right: 0;
  text-align: center;
  width: 60px;
  height: 2px;
  content: "";
  bottom: 0;
  margin: auto;
  background: #d32f2f;
}
.section-title h2:before {
  position: absolute;
  left: 0;
  right: 0;
  text-align: center;
  width: 40px;
  height: 2px;
  content: "";
  bottom: 5px;
  margin: auto;
  background: #d32f2f;
}
.section-title h2 span {
  color: #d32f2f;
  font-weight: 400;
}
.section-title img {
  margin-bottom: 50px;
  display: none;
}
.section-title p {
  padding: 0 150px;
  margin-bottom: 30px;
}
.view-more {
  display: block;
  width: 100%;
  text-align: center;
  margin: auto;
}
.view-more a {
  margin-top: 30px;
  display: inline-block;
  border: 1px solid #d32f2f;
  background: #d32f2f;
  color: #ffffff;
  font-size: 16px;
  transition: all 0.5s ease 0s;
  border-radius: 0px;
  padding: 10px 18px;
}
.view-more a:hover {
  border: 1px solid #d32f2f;
  background: #d32f2f;
  color: #ffffff;
}
/* ------------------------------------
2.Header area start here 
---------------------------------------*/
.header-top-area {
  padding: 5px 0;
  border-bottom: 1px solid #dddddd;
  font-size: 12px;
  line-height: 28px;
}
.header-top-area .header-top-left ul {
  margin: 0;
  padding: 0;
  list-style: none;
}
.header-top-area .header-top-left ul li {
  display: inline-block;
  margin-right: 45px;
  color: #101010;
}
.header-top-area .header-top-left ul li a {
  transition: all 0.5s ease 0s;
  color: #101010;
}
.header-top-area .header-top-left ul li a:hover {
  color: #d32f2f;
}
.header-top-area .header-top-left ul li.active a {
  color: #d32f2f;
}
.header-top-area .header-top-right ul {
  margin: 0;
  padding: 0;
  list-style: none;
  text-align: right;
}
.header-top-area .header-top-right ul li {
  display: inline-block;
}
.header-top-area .header-top-right ul li a {
  color: #101010;
  transition: all 0.5s ease 0s;
}
.header-top-area .header-top-right ul li a:hover {
  color: #d32f2f;
}
.header-top-area .header-top-right ul li i {
  font-weight: 600;
  font-size: 14px;
  margin-right: 10px;
  color: #101010;
}
.header-top-area .social-media-area ul {
  text-align: right;
}
.header-top-area .social-media-area ul li {
  display: inline-block;
  margin: 0 2px;
}
.header-top-area .social-media-area ul li a {
  display: block;
  width: 30px;
  height: 28px;
  line-height: 28px;
  color: #101010;
  border-radius: 2px;
  background: #f2f2f2;
  transition: all 0.5s ease 0s;
  text-decoration: none;
  text-align: center;
}
.header-top-area .social-media-area ul li a:hover {
  color: #d32f2f;
  transform: rotate(360deg);
  border-radius: 2px;
}
.header-top-area .social-media-area ul li a i {
  text-align: center;
  display: inline-block;
}
.ticker-top {
  background: #101010;
}
.ticker-top .ticker-head {
  padding: 11px 30px;
}
.ticker-top .tickers .owl-nav {
  right: -13px;
}
.home2 .header-middle-area .logo-area {
  padding-top: 0;
}
.header-middle-area {
  background: #<?php echo $renk; ?>;/* logo alan� arkaplan rengi */
  padding: 20px 0;
}
.header-middle-area .logo-area {
  padding-top: 16px;
}
.header-middle-area .right-banner p {
  font-size: 12px;
  text-transform: uppercase;
  line-height: 31px;
  margin: 0;
}
.header-middle-area .right-banner p span {
  font-size: 15px;
  display: block;
  font-weight: 600;
}
.header-middle-area .right-banner a {
  color: #ffffff;
  font-size: 15px;
  font-weight: 600;
  border: 1px solid #fff;
  border-radius: 2px;
  padding: 3px 25px;
  text-transform: uppercase;
  margin-top: 14px;
}
.header-middle-area .right-banner a:hover {
  border: 1px solid #d32f2f;
}
.header-middle-area .right-banner .hvr-bounce-to-right::before {
  background: #d32f2f;
}
.header-bottom-area {
	background: #<?php echo $menuRenk; ?>;
}
.header-bottom-area {
  border-top: 1px solid #ddd;
  border-bottom: 1px solid #ddd;
}
.header-bottom-area .logo-area {
  padding: 20px 0;
}
.header-bottom-area .logo-area a img {
  display: inline-block;
}
.header-bottom-area .main-menu {
  padding-left: 0;
}
.header-bottom-area .main-menu ul {
  margin: 0;
  padding: 0;
  text-align: left;
}
.header-bottom-area .main-menu ul li {
  display: inline-block;
  position: relative;
  /* Dropdown Menu area */
}
.header-bottom-area .main-menu ul li:first-child {
  padding-left: 0;
}
.header-bottom-area .main-menu ul li a {
  display: block;
  text-transform: uppercase;
  text-decoration: none;
  color: #<?php echo $menuYaziRenk; ?>;
  font-weight: 400;
  font-size: 13px;
  transition: all 0.5s ease 0s;
  letter-spacing: 1px;
  padding: 16px 9px;
}
.header-bottom-area .main-menu ul li a i {
  margin-left: 0px;
  color: #<?php echo $menuYaziRenk; ?>;
  font-size: 9px;
}
.header-bottom-area .main-menu ul li.active a {
  color: #<?php echo $menuHoverYaziRenk; ?>;
}
.header-bottom-area .main-menu ul li.active a i {
  color: #<?php echo $menuHoverYaziRenk; ?>;
}
.header-bottom-area .main-menu ul li.active a:hover a {
  color: #<?php echo $menuHoverYaziRenk; ?>;
}
.header-bottom-area .main-menu ul li.active a:hover a i {
  color: #<?php echo $menuHoverYaziRenk; ?>;
}
.header-bottom-area .main-menu ul li:hover:after {
  width: 48px;
}
.header-bottom-area .main-menu ul li:hover a {
  color: #<?php echo $menuHoverYaziRenk; ?>;
}
.header-bottom-area .main-menu ul li:hover a i {
  color: #<?php echo $menuHoverYaziRenk; ?>;
}
.header-bottom-area .main-menu ul li:after {
  position: absolute;
}
.header-bottom-area .main-menu ul li ul {
  background: #<?php echo $altMenuRenk; ?>;
  left: 0;
  opacity: 0;
  position: absolute;
  top: 101%;
  transform: scaleY(0);
  transform-origin: 0 0 0;
  transition: all 0.5s ease 0s;
  width: 250px;
  z-index: 99999 !important;
  text-align: left;
  visibility: hidden;
  border-top: 2px solid #d32f2f;
}
.header-bottom-area .main-menu ul li ul li {
  display: block;
  margin: 0;
  padding: 0;
  border-right: 0px solid transparent;
}
.header-bottom-area .main-menu ul li ul li a i {
  float: right;
  color: #<?php echo $altMenuYaziRenk; ?> !important;
  font-size: 18px;
  margin-top: 3px;
}
.header-bottom-area .main-menu ul li ul li:after {
  display: none;
}
.header-bottom-area .main-menu ul li ul li:last-child {
  border-bottom: 0;
}
.header-bottom-area .main-menu ul li ul li a {
  display: block;
  padding: 6px 20px;
  text-transform: none;
  transition: all 0.5s ease 0s;
  color: #<?php echo $altMenuYaziRenk; ?> !important;
  font-weight: 400;
  text-transform: capitalize;
  border-bottom: 1px solid #ddd;
}
.header-bottom-area .main-menu ul li ul li a:hover {
  padding-left: 30px;
  color: #<?php echo $menuHoverYaziRenk; ?> !important; /* alt menu hover rengi */
}
.header-bottom-area .main-menu ul li ul li ul {
  position: absolute;
  top: 0;
  left: 100%;
  transform: scaleY(0) !important;
  visibility: hidden !important;
  opacity: 0 !important;
  transition: all 0.5s ease 0s !important;
  border: none;
  border-left: 2px solid #d32f2f;
}
.header-bottom-area .main-menu ul li ul li ul li {
  display: inline-block;
}
.header-bottom-area .main-menu ul li ul li ul li a {
  width: 248px;
}
.header-bottom-area .main-menu ul li ul li:hover ul {
  opacity: 1 !important;
  transform: scaleY(1) !important;
  visibility: visible !important;
}
.header-bottom-area .main-menu ul li:hover ul {
  opacity: 1;
  transform: scaleY(1);
  visibility: visible;
}
.header-bottom-area .container {
  position: relative;
}
.header-bottom-area .search .search-icon {
  display: block;
  color: #101010;
  text-align: right;
}
.header-bottom-area .search .search-icon i {
  background: #d32f2f;
  color: #ffffff;
  padding: 8px;
  margin-top: 13px;
}
.header-bottom-area .search .search-box {
  top: 13px;
  position: absolute;
  right: 45px;
  width: 100%;
  max-width: 1141px;
  z-index: 100;
  background: #fff;
}
.header-bottom-area .search .search-box input {
  background: rgba(255, 255, 255, 0.8) none repeat scroll 0 0;
  border: medium none;
  border-radius: 0;
  height: 31px;
  border-top: 2px solid #d32f2f;
  border-left: 2px solid #d32f2f;
  border-bottom: 2px solid #d32f2f;
  transition: right 0.3s ease 0s;
}
.header-bottom-area .mega.sub-menu {	
  width: 100%;
  width: 1140px;
  padding-top: 15px;
  padding-bottom: 15px;
  left: -76px;
  box-shadow: none;
}
.header-bottom-area .mega.sub-menu a {	
  padding: 0;
}
.header-bottom-area .mega.sub-menu img {
  transition: all 0.5s ease 0s;
}
.header-bottom-area .mega.sub-menu h3 {
  margin: 15px 0 10px;
  line-height: 22px;
}
.header-bottom-area .mega.sub-menu h3 a {
  font-size: 15px;
  font-weight: 500;
  text-transform: capitalize;
  color: #<?php echo $altMenuYaziRenk; ?> !important;
  padding: 0;
}
.header-bottom-area .mega.sub-menu h3 a:hover {
  color: #d32f2f !important;
}
.header-bottom-area .mega.sub-menu p {
  margin: 0;
  line-height: 18px;
  font-size: 13px;
}
.header-bottom-area .mega.sub-menu .col-sm-3:hover h3 a {
  color: #d32f2f !important;
}
.header-bottom-area .mega.sub-menu .col-sm-3:hover img {
  opacity: .7;
}
.active2 a {
  color: red;
}
.header-bottom-area ul > li > ul > li.active > a {
  color: #d32f2f !important;
}
/* ------------------------------------
  3.Breaking News Slider Here 
---------------------------------------*/
#top-news-slider {
  padding: 7px 0;
  line-height: 30px;
}
#top-news-slider .item img {
  height: 30px;
}
#top-news-slider div a {
  color: #434343;
}
#top-news-slider div a:hover {
  color: #d32f2f;
}
#top-news-slider span {
  padding-left: 10px;
  position: absolute;
  font-size: 12px;
  font-weight: 500;
}
.ticker-head {
  background: #d32f2f none repeat scroll 0 0;
  color: #fff;
  font-size: 15px;
  margin-left: 0;
  margin-top: 0;
  padding: 10px 30px;
}
.ticker-head i {
  padding-left: 15px;
}
/* ------------------------------------
  4.Slide Menu Section Start Here 
---------------------------------------*/
.slide-menu-area {
  background: rgba(211, 47, 47, 0.9);
  width: 0px;
  height: 100vh;
  position: fixed;
  right: -360px;
  top: 0px;
  padding: 200px 30px;
  transition: all 0.5s ease 0s;
  opacity: 0;
  visibility: hidden;
}
.slide-menu-area .close {
  position: absolute;
  left: 0;
  top: 0;
  color: #ffffff;
  opacity: 1;
  padding: 10px;
}
.slide-menu-area .close i {
  color: #ffffff;
  font-size: 20px;
  cursor: pointer;
  transition: all 0.5s ease 0s;
}
.slide-menu-area .close i:hover {
  color: #222222;
}
.slide-menu-area.highlight {
  right: 0;
  opacity: 1;
  width: 300px;
  visibility: visible;
  z-index: 999;
}
.slide-menu-area h3 {
  color: #ffffff;
  font-weight: 600;
  position: relative;
}
.slide-menu-area h3:after {
  position: absolute;
  content: "";
  top: 30px;
  left: 0px;
  width: 60px;
  height: 2px;
  font-style: normal;
  background: #ffffff;
}
.slide-menu-area ul {
  text-align: left;
  transition: all 0.5s ease 0s;
  margin: 0;
  padding: 0;
}
.slide-menu-area ul li {
  display: block;
  position: relative;
  font-size: 14px;
  color: #ffffff;
  margin-right: 30px;
  padding: 10px 0;
}
.slide-menu-area ul li:last-child {
  margin-right: 0;
}
.slide-menu-area ul li span {
  font-weight: 600;
  color: #ffffff;
  padding: 0 1px;
}
.slide-menu-area ul li span i {
  margin-left: 50px;
}
.slide-menu-area ul li a {
  display: block;
  color: #ffffff;
  transition: all 0.5s ease 0s;
}
.slide-menu-area ul li a:hover {
  color: #dddddd;
}
.slide-menu-area ul li i {
  color: #ffffff;
  margin-right: 10px;
  font-size: 12px;
}
.slide-menu-area .footer-social-media-area ul {
  text-align: left;
}
.slide-menu-area .footer-social-media-area ul li {
  display: inline-block;
  margin: 2px;
}
.slide-menu-area .footer-social-media-area ul li a {
  display: block;
  width: 30px;
  height: 30px;
  line-height: 28px;
  color: #dddddd;
  background: #000000;
  border: 1px solid #d32f2f;
  transition: all 0.5s ease 0s;
  text-decoration: none;
  text-align: right;
}
.slide-menu-area .footer-social-media-area ul li a:hover {
  background: #d32f2f;
  border-radius: 50%;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border: 1px solid #d32f2f;
}
.slide-menu-area .footer-social-media-area ul li a i {
  text-align: center;
  display: inline-block;
}
/* ------------------------------------
4.1. Home Two Slider Area Start Here 
---------------------------------------*/
.slider-area span.comment {
  font-size: 12px;
  background: transparent !important;
}
.slider-area span.comment > a {
  font-size: 12px;
  color: #FFF;
  padding-left: 10px !important;
  background: transparent!important;
  font-weight: 400 !important;
}
.slider-area span.comment > a > i {
  margin-right: 0 !important;
}
.slider-area .slides {
  position: relative;
  overflow: hidden;
}
.slider-area .slides:after {
  background: rgba(0, 0, 0, 0.5);
  /* Old Browsers */
  background: -webkit-linear-gradient(top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.8));
  /*Safari 5.1-6*/
  background: -o-linear-gradient(top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.8));
  /*Opera 11.1-12*/
  background: -moz-linear-gradient(top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.8));
  /*Fx 3.6-15*/
  background: linear-gradient(to bottom, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.8));
  /*Standard*/
  position: absolute;
  content: "";
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 10;
}
.slider-area .slides .nivo-caption,
.slider-area .slides .nivo-directionNav a {
  z-index: 100;
}
.slider-area .slider-1 {
  text-align: left;
}
.slider-area .slider-1 h1 {
  font-size: 30px;
  line-height: 1.55;
  letter-spacing: 1px;
  margin: 10px 0 0;
  font-weight: 700;
  text-transform: uppercase;
  color: #ffffff;
}
.slider-area .slider-1 h1 a {
  color: #ffffff;
}
.slider-area .slider-1 h1 a:hover {
  color: #d32f2f;
}
.slider-area .slider-1 h1 span {
  color: #d32f2f;
}
.slider-area .slider-1 div.title2 {
  font-size: 16px;
  color: #ffffff;
  font-weight: normal;
  line-height: 1.6;
  text-align: left;
}
.slider-area .slider-1 .title-container {
  padding-left: 50px;
}
.slider-area .slider-1 div.slider-botton {
  display: block;
  margin-top: 290px;
}
.slider-area .slider-1 div.slider-botton ul li {
  display: inline-block;
  margin-right: 10px;
}
.slider-area .slider-1 div.slider-botton ul li .date {
  display: inline-block;
}
.slider-area .slider-1 div.slider-botton ul li .fa-comment-o {
  padding-left: 12px;
}
.slider-area .slider-1 div.slider-botton ul li.acitve a {
  display: block;
  padding: 17px 40px;
  color: #ffffff;
  transition: all 0.5s ease 0s;
  background: #d32f2f;
  border: 0px solid #d32f2f;
  font-weight: 400;
  text-transform: uppercase;
  -webkit-border-radius: 0px;
  -moz-border-radius: 0px;
  border-radius: 0px;
  -webkit-animation: fadeIn 2500ms ease-in-out;
  -moz-animation: fadeIn 2500ms ease-in-out;
  -ms-animation: fadeIn 2500ms ease-in-out;
  animation: fadeIn 2500ms ease-in-out;
}
.slider-area .slider-1 div.slider-botton ul li.acitve a i {
  margin-left: 10px;
}
.slider-area .slider-1 div.slider-botton ul li.acitve a:hover {
  border: 1px solid #d32f2f !important;
  background: #d32f2f !important;
}
.slider-area .slider-1 div.slider-botton ul li a.cat-link {
  color: #ffffff;
  display: inline-block;
  padding: 2px 5px;
  transition: all 0.5s ease 0s;
  font-weight: 400;
  font-size: 11px;
  line-height: 15px;
  background: #d32f2f;
  text-transform: uppercase;
  -webkit-border-radius: 0px;
  -moz-border-radius: 0px;
  border-radius: 0px;
  text-decoration: none;
  margin-right: 12px;
}
.slider-area .slider-1 div.slider-botton ul li a.cat-link:hover {
  background: #000000;
  color: #fff;
}
.slider-area .slider-2 {
  text-align: left;
}
.slider-area .slider-2 h1 {
  font-size: 30px;
  color: #ffffff;
  line-height: 1.55;
  letter-spacing: 1px;
  margin: 10px 0 0;
  font-weight: 700;
  text-transform: uppercase;
}
.slider-area .slider-2 h1 a {
  color: #ffffff;
}
.slider-area .slider-2 h1 a:hover {
  color: #d32f2f;
}
.slider-area .slider-2 h1 span {
  color: #d32f2f;
}
.slider-area .slider-2 div.title2 {
  font-size: 16px;
  color: #ffffff;
  font-weight: normal;
  line-height: 1.6;
  text-align: left;
}
.slider-area .slider-2 .title-container {
  padding-left: 50px;
}
.slider-area .slider-2 div.slider-botton {
  display: block;
  margin-top: 290px;
}
.slider-area .slider-2 div.slider-botton ul li {
  display: inline-block;
  margin-right: 10px;
}
.slider-area .slider-2 div.slider-botton ul li .date {
  display: inline-block;
}
.slider-area .slider-2 div.slider-botton ul li .fa-comment-o {
  padding-left: 12px;
}
.slider-area .slider-2 div.slider-botton ul li.acitve a {
  display: block;
  padding: 17px 40px;
  color: #ffffff;
  transition: all 0.5s ease 0s;
  background: #d32f2f;
  font-weight: 700;
  text-transform: uppercase;
  -webkit-border-radius: 0px;
  -moz-border-radius: 0px;
  border-radius: 0px;
  -webkit-animation: fadeIn 2500ms ease-in-out;
  -moz-animation: fadeIn 2500ms ease-in-out;
  -ms-animation: fadeIn 2500ms ease-in-out;
  animation: fadeIn 2500ms ease-in-out;
}
.slider-area .slider-2 div.slider-botton ul li.acitve a i {
  margin-left: 10px;
}
.slider-area .slider-2 div.slider-botton ul li.acitve a:hover {
  border: 1px solid #d32f2f !important;
  background: #d32f2f !important;
}
.slider-area .slider-2 div.slider-botton ul li a.cat-link {
  color: #ffffff;
  display: inline-block;
  padding: 2px 5px;
  transition: all 0.5s ease 0s;
  font-weight: 400;
  font-size: 11px;
  line-height: 15px;
  background: #d32f2f;
  text-transform: uppercase;
  -webkit-border-radius: 0px;
  -moz-border-radius: 0px;
  border-radius: 0px;
  text-decoration: none;
  margin-right: 12px;
}
.slider-area .slider-2 div.slider-botton ul li a.cat-link:hover {
  background: #000000;
  color: #fff;
}
a.cat-link {
  color: #ffffff;
  display: inline-block;
  padding: 2px 5px;
  transition: all 0.5s ease 0s;
  font-weight: 400;
  font-size: 11px;
  line-height: 15px;
  background: #d32f2f;
  text-transform: uppercase;
  -webkit-border-radius: 0px;
  -moz-border-radius: 0px;
  border-radius: 0px;
  text-decoration: none;
  margin: 0 12px 0 0;
}
a.cat-link:hover {
  background: #000000;
  color: #fff;
}
.preview-2 .nivo-directionNav a.nivo-prevNav:before,
.preview-2 .nivo-directionNav a.nivo-nextNav:before {
  background: rgba(211, 47, 47, 0.7) !important;
  color: #ffffff !important;
  background: transparent;
  font-size: 20px !important;
  font-weight: 300 !important;
  border-radius: 0;
}
.preview-2 .nivo-directionNav a.nivo-nextNav:hover:before,
.preview-2 .nivo-directionNav a.nivo-prevNav:hover:before {
  background: rgba(0, 0, 0, 0.7) !important;
}
.preview-2 .nivo-directionNav a.nivo-prevNav,
.preview-2 .nivo-directionNav a.nivo-nextNav {
  opacity: 0;
}
.slider-area:hover .nivo-directionNav a.nivo-nextNav,
.slider-area:hover .nivo-directionNav a.nivo-prevNav {
  opacity: 1;
}
.slider-right {
  padding: 0;
  margin: 0;
}
.slider-right ul {
  padding: 0;
  margin: 0;
}
.slider-right ul li {
  list-style: none;
  position: relative;
  margin-bottom: 2px;
  overflow: hidden;
}
.slider-right ul li .right-content {
  bottom: 14px;
  color: #ffffff;
  left: 22px;
  position: absolute;
  width: 100%;
  z-index: 10;
}
.slider-right ul li .right-content h3 {
  margin: 0 0 6px;
  padding: 0;
  font-size: 20px;
  font-weight: 500;
  line-height: 25px;
  text-transform: capitalize;
}
.slider-right ul li .right-content a {
  color: #ffffff;
}
.slider-right ul li .right-content a:hover {
  color: #d32f2f;
}
.slider-right ul li .right-content .date i {
  padding-left: 0;
}
.slider-right ul li .right-image img {
  min-height: 178px;
  transition: all 0.5s ease 0s;
}
.slider-right ul li:after {
  background: rgba(0, 0, 0, 0.5);
  /* Old Browsers */
  background: -webkit-linear-gradient(top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.8));
  /*Safari 5.1-6*/
  background: -o-linear-gradient(top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.8));
  /*Opera 11.1-12*/
  background: -moz-linear-gradient(top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.8));
  /*Fx 3.6-15*/
  background: linear-gradient(to bottom, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.8));
  /*Standard*/
  position: absolute;
  content: "";
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
.slider-right ul li:last-child {
  margin-bottom: 0;
}
.slider-right ul li:hover h3 a {
  color: #d32f2f;
}
.slider-right ul li:hover img {
  filter: grayscale(100%);
  transform: scale3d(1.1, 1.1, 1.1);
}
/* ------------------------------------
4.2 Home Slider Area Start Here 
---------------------------------------*/
.full-slider-area {
  overflow: hidden;
}
.full-slider-area ul li .image {
  position: relative;
  overflow: hidden;
}
.full-slider-area ul li .image img {
  width: 100%;
}
.full-slider-area ul li .image:after {
  background: rgba(0, 0, 0, 0.5);
  /* Old Browsers */
  background: -webkit-linear-gradient(top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.9));
  /*Safari 5.1-6*/
  background: -o-linear-gradient(top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.9));
  /*Opera 11.1-12*/
  background: -moz-linear-gradient(top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.9));
  /*Fx 3.6-15*/
  background: linear-gradient(to bottom, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.9));
  /*Standard*/
  content: "";
  height: 100%;
  left: 0;
  position: absolute;
  top: 0;
  width: 100%;
}
.full-slider-area ul li .slider-content {
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  /* IE 9 */
  -webkit-transform: translate(-50%, -50%);
  /* Safari */
  transform: translate(-50%, -50%);
  text-align: center;
  z-index: 999;
  width: 100%;
  max-width: 620px;
}
.full-slider-area ul li .slider-content h1 {
  color: #ffffff;
  font-size: 30px;
  letter-spacing: 1px;
  text-transform: uppercase;
  margin-bottom: 4px;
  line-height: 45px;
}
.full-slider-area ul li .slider-content h1 a {
  font-size: 30px;
}
.full-slider-area ul li .slider-content h1 span {
  color: #fbc02d;
}
.full-slider-area ul li .slider-content .more-btn {
  background: #fbc02d;
  padding: 3px 22px;
  color: #101010;
  font-size: 12px;
  text-transform: uppercase;
  border-radius: 2px;
  font-weight: 600;
  margin-bottom: 14px;
  display: inline-block;
}
.full-slider-area ul li .slider-content .date {
  margin-bottom: 10px !important;
  display: inline-block;
}
.full-slider-area ul li .slider-content a,
.full-slider-area ul li .slider-content .date {
  color: #ffffff;
  margin: 0;
  font-size: 12px;
}
.full-slider-area ul li .slider-content a i,
.full-slider-area ul li .slider-content .date i {
  margin-left: 8px;
}
.full-slider-area ul .slick-slide .slider-content {
  opacity: 0;
}
.full-slider-area ul li.slick-current .image:after {
  background: rgba(0, 0, 0, 0.5);
  /* Old Browsers */
  background: -webkit-linear-gradient(top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.8));
  /*Safari 5.1-6*/
  background: -o-linear-gradient(top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.8));
  /*Opera 11.1-12*/
  background: -moz-linear-gradient(top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.8));
  /*Fx 3.6-15*/
  background: linear-gradient(to bottom, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.8));
  /*Standard*/
  content: "";
  height: 100%;
  left: 0;
  position: absolute;
  top: 0;
  width: 100%;
}
.full-slider-area ul li.slick-current .slider-content {
  opacity: 1;
}
.full-slider-area .slick-prev {
  border: 1px solid #ffffff;
  border-radius: 100%;
  height: 40px;
  left: 25%;
  line-height: 40px;
  width: 40px;
  z-index: 99;
  transition: all 0.5s ease 0s;
}
.full-slider-area .slick-prev:before {
  content: "\f053";
  font-family: FontAwesome;
  left: 10px;
  position: absolute;
  opacity: 1;
  top: 10px;
  transition: all 0.5s ease 0s;
}
.full-slider-area .slick-prev:hover {
  border: 1px solid #fbc02d;
}
.full-slider-area .slick-prev:hover:before {
  color: #fbc02d;
}
.full-slider-area .slick-next {
  border: 1px solid #ffffff;
  border-radius: 100%;
  height: 40px;
  right: 25%;
  line-height: 40px;
  width: 40px;
  z-index: 99;
  transition: all 0.5s ease 0s;
}
.full-slider-area .slick-next:before {
  content: "\f054";
  font-family: FontAwesome;
  right: 10px;
  position: absolute;
  opacity: 1;
  top: 10px;
  transition: all 0.5s ease 0s;
}
.full-slider-area .slick-next:hover {
  border: 1px solid #fbc02d;
}
.full-slider-area .slick-next:hover:before {
  color: #fbc02d;
}
.slick-slider .slider-content {
  top: 70% !important;
}
/* ------------------------------------
5 Latest News Area Start Here 
---------------------------------------*/
.tab-home .nav-tabs {
  margin: 50px 0 44px;
}
.tab-home .nav-tabs li {
  float: right;
  background: #f2f2f2;
  margin: 0 5px;
}
.tab-home .nav-tabs li:first-child {
  float: left;
  font-size: 20px;
  font-weight: 700;
  text-transform: uppercase;
  line-height: 30px;
  color: #101010;
  background: none;
  margin: 0;
}
.tab-home .nav-tabs li:nth-child(2) {
  margin-right: 0;
}
.tab-home .nav-tabs li a {
  font-size: 15px;
  font-weight: 400px;
  text-transform: capitalize;
  color: #101010;
  padding: 0px 20px 0px;
}
.tab-home .nav-tabs li a:hover {
  color: #ffffff;
}
.tab-home .tab-content .tab-top-content {
  background: #252525;
  color: #ffffff;
}
.tab-home .tab-content .tab-bottom-content {
  background: #ffffff;
  padding: 14px;
  border: 1px solid #ccc;
  margin-top: 30px;
}
.tab-home .tab-content .tab-bottom-content h4 {
  font-size: 14px;
  font-weight: 500;
  color: #101010;
  text-transform: capitalize;
  margin: 0;
  line-height: 25px;
}
.tab-home .tab-content .tab-bottom-content a {
  color: #101010;
}
.tab-home .tab-content .tab-bottom-content img {
  margin-bottom: 12px;
}
.tab-home .tab-content .tab-bottom-content img:hover {
  opacity: 0.8;
}
.tab-home .tab-content .tab-bottom-content .tab-area .img-tab {
  padding: 0;
}
.tab-home .tab-content .tab-bottom-content .tab-area .img-content {
  padding: 0;
}
.tab-home .tab-content a {
  color: #ffffff;
}
.tab-home .tab-content a:hover {
  color: #d32f2f;
}
.tab-home .tab-content h3 {
  font-size: 18px;
  line-height: 28px;
  margin: 0;
  padding: 7px 0 15px;
  text-transform: capitalize;
  font-weight: 500;
}
.tab-home .tab-content p {
  font-size: 15px;
  font-weight: 400;
  line-height: 25px;
  margin-bottom: 30px;
  color: #cccccc;
}
.tab-home .tab-content .date,
.tab-home .tab-content span.comment {
  line-height: 15px;
  margin-right: 8px;
}
.tab-home .tab-content .date a,
.tab-home .tab-content span.comment a {
  color: #cccccc;
  font-size: 12px;
}
.tab-home .tab-content .date a i,
.tab-home .tab-content span.comment a i {
  margin-right: 5px;
  font-size: 11px;
}
.tab-home .tab-content .read-more {
  border: 1px solid #ffffff;
  padding: 2px 18px;
  text-transform: capitalize;
}
.tab-home .tab-content .read-more:hover {
  color: #ffffff;
  border: 1px solid #d32f2f;
}
.tab-home .tab-content .last-col {
  padding: 23px 55px 24px 28px;
}
.tab-home .tab-content img:hover {
  opacity: 0.8;
}
.nav-tabs li.active,
.nav-tabs li:hover {
  background: #d32f2f;
  border: none !important;
}
.nav-tabs li.active a,
.nav-tabs li:hover a {
  color: #ffffff;
}
.nav-tabs li.active a:focus,
.nav-tabs li:hover a:focus {
  color: #ffffff;
}
.read-more.hvr-bounce-to-right::before {
  background: #d32f2f;
  color: #ffffff;
}
.date,
span.comment,
span.author,
span.cat {
  font-size: 12px;
  text-transform: capitalize;
  font-weight: 400;
  line-height: 14px;
  margin-right: 8px;
}
.date i,
span.comment i,
span.author i,
span.cat i {
  font-size: 11px;
  margin-right: 5px;
}
.nav-tabs > li > a {
  background: rgba(0, 0, 0, 0) !important;
  border: medium none !important;
  border-radius: 0 !important;
  line-height: 30px !important;
  margin-right: 0 !important;
}
.nav-tabs {
  border: none !important;
}
.carousel-control.left,
.carousel-control.right {
  background: none;
}
/* ----------------------------------
  6.Home carousel Slider Start Here 
-------------------------------------*/
.carousel-news .next-prev-top {
  border: none;
  margin: 0;
  overflow: hidden;
}
.carousel-news .next-prev-top h3 {
  font-size: 20px;
  line-height: 30px;
  color: #101010;
  font-weight: 700;
  margin: 0 0 25px;
  text-transform: uppercase;
}
.carousel-news .next-prev-top .next-prev {
  text-align: right;
  top: 6px;
}
.carousel-news .next-prev-top .next-prev .news-control {
  width: 26px;
  height: 26px;
  border: 1px solid #ddd;
  line-height: 26px;
  display: inline-block;
  text-align: center;
}
.carousel-news .next-prev-top .next-prev .news-control i {
  font-size: 16px;
  color: #101010;
}
.carousel-news .next-prev-top .next-prev .news-control i:hover {
  color: #f52222;
}
.carousel-news .item,
.carousel-news .trending-news {
  background: #ffffff;
  border: 1px solid #ddd;
}
.carousel-news .item img,
.carousel-news .trending-news img {
  margin-bottom: 18px;
}
.carousel-news .item a,
.carousel-news .trending-news a {
  color: #101010;
}
.carousel-news .item a:hover,
.carousel-news .trending-news a:hover {
  color: #d32f2f;
}
.carousel-news .item h4,
.carousel-news .trending-news h4 {
  font-size: 18px;
  line-height: 25px;
  color: #101010;
  margin: 0;
  padding: 7px 0;
  font-weight: 600;
  text-transform: capitalize;
}
.carousel-news .item .dsc,
.carousel-news .trending-news .dsc {
  padding: 0 20px;
}
.carousel-news .item p,
.carousel-news .trending-news p {
  font-size: 15px;
}
.home2 .slider-right {
  margin-top: 50px;
}
.home2 .slider-right li {
  padding: 0px;
}
.home2 .slider-right li .cat-name {
  background: #d32f2f;
  display: inline;
  color: #fff;
  font-weight: normal;
  font-size: 12px;
  padding: 2px 7px;
}
.home2 .slider-right li .date {
  display: block;
  padding-top: 5px;
  padding-bottom: 15px;
}
/* ------------------------------------
7.Trending news Start Here 
---------------------------------------*/
.trending-news .list-col {
  background: #fff;
  border: 1px solid #ddd;
}
.trending-news .list-col h3 {
  font-weight: 500;
  margin: 5px 0 10px;
}
.trending-news .list-col h3 a {
  text-transform: capitalize;
  font-size: 18px;
  line-height: 25px;
  margin: 0;
  color: #101010;
}
.trending-news .list-col img {
  margin-bottom: 15px;
  transition: all 0.5s ease 0s;
}
.trending-news .list-col a {
  color: #101010;
}
.trending-news .list-col a:hover {
  color: #d32f2f;
}
.trending-news .list-col span.comment > a {
  color: #434343;
}
.trending-news .list-col .dsc {
  padding: 0 20px 20px;
}
.trending-news .list-col .dsc p {
  margin-bottom: 0;
}
.trending-news .list-col:hover img {
  filter: grayscale(100%);
  opacity: .8;
}
.trending-news .list-col:hover a {
  color: #d32f2f;
}
.trending-news .news-post li {
  border: 1px solid #ddd;
  margin-bottom: 20px;
  background: #ffffff;
}
.trending-news .news-post li:last-child {
  margin-bottom: 0px;
}
.trending-news .news-post li h4 {
  font-weight: 500;
  line-height: 20px;
  margin: 8px 0 4px;
}
.trending-news .news-post li h4 a {
  font-size: 15px;
  color: #101010;
}
.trending-news .news-post li img {
  transition: all 0.5s ease 0s;
}
.trending-news .news-post li:hover img {
  filter: grayscale(100%);
  opacity: .8;
}
.trending-news .news-post li:hover a {
  color: #d32f2f;
}
/* ------------------------------------
8. Hot News Start Here 
---------------------------------------*/
.hot-news .featured {
  position: relative;
  overflow: hidden;
}
.hot-news .featured img {
  transition: all 0.5s ease 0s;
}
.hot-news .featured:after {
  background: rgba(0, 0, 0, 0.5);
  /* Old Browsers */
  background: -webkit-linear-gradient(top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.8));
  /*Safari 5.1-6*/
  background: -o-linear-gradient(top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.8));
  /*Opera 11.1-12*/
  background: -moz-linear-gradient(top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.8));
  /*Fx 3.6-15*/
  background: linear-gradient(to bottom, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.8));
  /*Standard*/
  content: "";
  height: 100%;
  left: 0;
  position: absolute;
  top: 0;
  width: 100%;
}
.hot-news .featured .blog-content {
  position: absolute;
  bottom: 40px;
  left: 40px;
  width: 100%;
  color: #ffffff;
  z-index: 100;
}
.hot-news .featured .blog-content a {
  color: #ffffff;
}
.hot-news .featured .blog-content a:hover {
  color: #d32f2f;
}
.hot-news .featured .blog-content .btn-small {
  margin-right: 15px;
}
.hot-news .featured .blog-content .btn-small:hover {
  color: #101010;
}
.hot-news .featured .blog-content h4 {
  margin: 16px 0 8px;
  font-size: 18px;
  line-height: 28px;
  font-weight: 500;
}
.hot-news .featured .blog-content .date {
  margin-right: 15px;
}
.hot-news .featured:hover img {
  transform: scale3d(1.1, 1.1, 1.1);
  filter: grayscale(100%);
}
.hot-news ul {
  padding: 0;
  margin: 0;
}
.hot-news ul li {
  margin: 0;
  padding: 0;
  list-style: none;
}
.hot-news .news-post li {
  background: #ffffff;
  border: 1px solid #ddd;
  margin-top: 25px;
}
.hot-news .news-post li img {
  transition: all 0.5s ease 0s;
}
.hot-news .news-post li:hover img {
  filter: grayscale(100%);
  opacity: .8;
}
.hot-news .news-post li:hover h4 a {
  color: #d32f2f;
}
.hot-news .news-post .content h4 {
  font-weight: 500;
  font-size: 15px;
  margin: 0;
  padding: 18px 0 2px;
  line-height: 25px;
}
.hot-news .news-post .content h4 a {
  color: #101010;
}
.hot-news .news-post .content p {
  margin: 12px 0 0;
  color: #434343;
  padding-right: 20px;
}
.hot-news .news-post .content a {
  color: #434343;
}
.hot-news .news-post .content a:hover {
  color: #d32f2f;
}
.hot-news .news-post .content .author {
  color: #434343;
  margin-right: 8px;
}
.hot-news .news-post .content .date {
  color: #434343;
}
.hot-news .news-post2 li {
  background: transparent !important;
  border: 0;
  margin: 25px 0 0;
}
.hot-news .news-post2 li:hover img {
  filter: grayscale(0%);
  opacity: 1;
}
.hot-news .news-post2 li:hover .content a {
  color: #101010;
}
.hot-news .news-post2 li .item-post:hover .content a {
  color: #d32f2f;
}
.hot-news .news-post2 li .item-post:hover img {
  filter: grayscale(100%);
  opacity: .8;
}
.hot-news .news-post2 .item-post {
  background: #ffffff;
}
.hot-news .news-post2 .item-post .content {
  padding: 20px 20px;
  border: 1px solid #ccc;
}
.hot-news .news-post2 .item-post .content h4 {
  padding: 12px 0 0;
}
.hot-news .related h4 {
  font-size: 15px !important;
  font-weight: 500 !important;
  line-height: 20px !important;
  color: #101010;
  padding: 11px 0 6px !important;
}
.hot-news .related h4 a {
  color: #101010;
}
.hot-news .related h4 a:hover {
  color: #d32f2f !important;
}
.hot-news .related .item-post {
  border: 1px solid #ccc;
}
/* ------------------------------------
9. Fetuered Videos Start Here   
---------------------------------------*/
.fetuered-videos {
  padding: 45px 0 35px;
  overflow: hidden;
}
.fetuered-videos .home-ralated {
  padding: 0 !important;
}
.fetuered-videos .home-ralated .single-winners {
  position: relative;
  overflow: hidden;
}
.fetuered-videos .home-ralated .single-winners .images {
  position: relative;
  overflow: hidden;
}
.fetuered-videos .home-ralated .single-winners .images:hover h3 a {
  color: #d32f2f;
}
.fetuered-videos .home-ralated .single-winners .images:hover .overley {
  opacity: 1;
  transform: scaleY(1);
}
.fetuered-videos .home-ralated .single-winners .images a {
  display: block;
}
.fetuered-videos .home-ralated .single-winners .images a img {
  transition: all 0.5s ease 0s;
  width: 100%;
}
.fetuered-videos .home-ralated .single-winners .images .overley {
  position: absolute;
  left: 0;
  right: 0;
  text-align: center;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.7);
  top: 0;
  transform: scaleY(0);
  transform-origin: 0 1 0;
  opacity: 0;
  transition: all 0.5s ease 0s;
  padding: 30px;
}
.fetuered-videos .home-ralated .single-winners .images .overley .winners-details {
  padding: 20% 0;
}
.fetuered-videos .home-ralated .single-winners .images .overley .winners-details h4 {
  margin-bottom: 10px;
  padding-bottom: 10px;
  color: #ffffff;
  font-size: 18px;
  position: relative;
}
.fetuered-videos .home-ralated .single-winners .images .overley .winners-details h4:after {
  display: none;
}
.fetuered-videos .home-ralated .single-winners .images .overley .winners-details .product-info {
  margin: 0;
  padding: 0px;
  list-style: none;
  top: 50%;
  position: absolute;
  transform: translateY(-50%);
  transition: all .9s;
  text-align: center;
  left: 0;
  right: 0;
}
.fetuered-videos .home-ralated .single-winners .images .overley .winners-details .product-info li {
  display: inline-block;
}
.fetuered-videos .home-ralated .single-winners .images .overley .winners-details .product-info li a {
  color: #ffffff;
  text-transform: capitalize;
  text-decoration: none;
  width: 30px;
  height: 30px;
  line-height: 30px;
  border: 1px solid #ffffff;
  text-align: center;
  transition: all 0.5s ease 0s;
}
.fetuered-videos .home-ralated .single-winners .images .overley .winners-details .product-info li a:hover {
  background: #d32f2f;
  border: 1px solid #d32f2f;
  color: #ffffff;
}
.fetuered-videos .home-ralated .single-winners .images .overley .winners-details .product-info li a i {
  font-size: 16px;
  color: #ffffff;
  margin: 0;
}
.fetuered-videos .home-ralated .single-winners .images .overley .winners-details p {
  margin-bottom: 5px;
  color: #ffffff;
  font-size: 12px;
}
.fetuered-videos .home-ralated .single-winners .images .overley .winners-details p i {
  color: #ffffff;
  margin-right: 8px;
}
.fetuered-videos .home-ralated .single-winners h3 {
  margin-bottom: 10px !important;
  margin-left: 0;
}
.fetuered-videos .home-ralated .single-winners h3 a {
  color: #333333;
  transition: all 0.5s ease 0s;
  font-size: 18px;
  text-transform: uppercase;
  margin: 0;
}
.fetuered-videos .home-ralated .single-winners h3 a:hover {
  color: #d32f2f;
}
.fetuered-videos .home-ralated .single-winners .videos-icon ul {
  margin: 0;
  padding: 0;
  text-align: left;
}
.fetuered-videos .home-ralated .single-winners .videos-icon ul li {
  display: block;
}
.fetuered-videos .home-ralated .single-winners .videos-icon ul li:first-child {
  font-weight: 900;
  font-size: 20px;
}
.fetuered-videos .home-ralated .single-winners .videos-icon ul li:first-child del {
  font-weight: 300;
  margin-right: 5px;
  font-size: 12px;
}
.fetuered-videos #featured-videos-section .videos-text {
  position: absolute;
  bottom: 20px;
  left: 20px;
  z-index: 10;
}
.fetuered-videos #featured-videos-section .videos-text a {
  font-size: 12px;
  color: #ffffff;
}
.fetuered-videos #featured-videos-section .date {
  color: #ffffff;
  font-size: 12px;
}
.fetuered-videos #featured-videos-section .single-videos {
  position: relative;
  overflow: hidden;
}
.fetuered-videos #featured-videos-section .single-videos .images {
  position: relative;
  overflow: hidden;
}
.fetuered-videos #featured-videos-section .single-videos .images:after {
  background: rgba(0, 0, 0, 0.4) none repeat scroll 0 0;
  content: "";
  height: 100%;
  left: 0;
  position: absolute;
  top: 0;
  width: 100%;
}
.fetuered-videos #featured-videos-section .single-videos .images:hover h3 a {
  color: #d32f2f;
}
.fetuered-videos #featured-videos-section .single-videos .images:hover .overley {
  opacity: 1;
  transform: scaleY(1);
  z-index: 10;
}
.fetuered-videos #featured-videos-section .single-videos .images a {
  display: block;
}
.fetuered-videos #featured-videos-section .single-videos .images a img {
  transition: all 0.5s ease 0s;
}
.fetuered-videos #featured-videos-section .single-videos .images .overley {
  position: absolute;
  left: 0;
  right: 0;
  text-align: left;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.7);
  top: 0;
  transform: scaleY(0);
  transform-origin: 0 1 0;
  opacity: 0;
  transition: all 0.5s ease 0s;
  padding: 30px;
}
.fetuered-videos #featured-videos-section .single-videos .images .overley .videos-icon {
  padding: 20% 0;
  text-align: center;
}
.fetuered-videos #featured-videos-section .single-videos h3 {
  margin-bottom: 0px;
}
.fetuered-videos #featured-videos-section .single-videos h3 a {
  color: #ffffff;
  transition: all 0.5s ease 0s;
  font-size: 18px;
}
.fetuered-videos #featured-videos-section .single-videos h3 a:hover {
  color: #d32f2f;
}
.fetuered-videos #featured-videos-section .owl-nav .owl-next {
  background: transparent;
  width: 30px;
  height: 30px;
  border-radius: 0;
  opacity: 1;
  margin: 2px;
  right: 0;
  position: absolute;
  top: -64px;
  border: 1px solid #ddd;
  transition: all 0.5s ease 0s;
  text-align: center;
}
.fetuered-videos #featured-videos-section .owl-nav .owl-next i {
  color: #101010 !important;
}
.fetuered-videos #featured-videos-section .owl-nav .owl-next:hover {
  background: #d32f2f;
  border: 1px solid #d32f2f;
}
.fetuered-videos #featured-videos-section .owl-nav .owl-next:hover i {
  color: #ffffff !important;
}
.fetuered-videos #featured-videos-section .owl-nav .owl-next i {
  font-size: 20px;
  font-weight: 400;
  line-height: 28px;
  color: #d32f2f;
}
.fetuered-videos #featured-videos-section .owl-nav .owl-prev {
  background: transparent;
  width: 30px;
  text-align: center;
  height: 30px;
  border-radius: 0;
  opacity: 1;
  margin: 2px;
  right: 35px;
  position: absolute;
  top: -64px;
  border: 1px solid #ddd;
  transition: all 0.5s ease 0s;
}
.fetuered-videos #featured-videos-section .owl-nav .owl-prev i {
  color: #101010 !important;
}
.fetuered-videos #featured-videos-section .owl-nav .owl-prev:hover {
  background: #d32f2f;
  border: 1px solid #d32f2f;
}
.fetuered-videos #featured-videos-section .owl-nav .owl-prev:hover i {
  color: #ffffff !important;
}
.fetuered-videos #featured-videos-section .owl-nav .owl-prev i {
  font-size: 20px;
  font-weight: 400;
  line-height: 28px;
  color: #d32f2f;
}
.owl-carousel .owl-item img {
  display: inline;
  width: auto;
}
/* ------------------------------------
10.Sidebar Home Start Here 
---------------------------------------*/
.sidebar ul {
  margin: 0;
  padding: 0;
}
.sidebar ul li {
  list-style: none;
  position: relative;
  margin-bottom: 30px;
}
.sidebar ul li .category-btn {
  position: absolute;
  top: 30px;
  left: 0;
  transition: all 0.5s ease 0s;
  z-index: 1;
}
.sidebar ul li .category-btn:hover {
  color: #ffffff;
}
.sidebar ul li .post-image {
  overflow: hidden;
}
.sidebar ul li .content {
  position: absolute;
  left: 25px;
  bottom: 25px;
  color: #ffffff;
  padding-right: 30px;
  z-index: 10;
}
.sidebar ul li .content a {
  color: #ffffff;
}
.sidebar ul li .content h4 {
  line-height: 25px;
  margin-bottom: 10px;
  font-weight: 500;
}
.sidebar ul li img {
  width: 100%;
  transition: all 0.8s ease 0s;
}
.sidebar ul li:after {
  background: rgba(0, 0, 0, 0.5);
  content: "";
  height: 100%;
  left: 0;
  position: absolute;
  top: 0;
  width: 100%;
}
.sidebar ul li:hover img {
  transform: scale3d(1.1, 1.1, 1.1);
}
.sidebar ul li:hover:after {
  background: rgba(0, 0, 0, 0.8);
}
.sidebar ul li:hover a {
  color: #d32f2f;
}
.sidebar ul li:hover a.category-btn {
  color: #ffffff;
}
.sidebar ul li:hover .hvr-bounce-to-right:before {
  transform: scaleX(1);
}
.sidebar .categories-home ul {
  background: #000000;
  color: #ffffff;
  padding: 28px 30px;
}
.sidebar .categories-home ul li {
  font-size: 15px;
  font-weight: 400;
  margin-bottom: 12px;
}
.sidebar .categories-home ul li:last-child {
  margin-bottom: 0px;
}
.sidebar .categories-home ul li span {
  float: right;
  border: 1px solid #ccc;
  clear: both;
  padding: 0 5px;
  font-size: 12px;
}
.sidebar .categories-home ul li i {
  padding-right: 10px;
}
.sidebar .categories-home ul li:after {
  opacity: 0;
  position: relative;
}
.sidebar .categories-home ul li a {
  color: #ffffff;
  cursor: pointer;
}
.sidebar .categories-home ul li:hover a {
  color: #d32f2f;
}
.sidebar .categories-home .title-bg {
  margin-bottom: 38px;
}
/* ------------------------------------
11.sidebar Start Here 
---------------------------------------*/
.sidebar-latest .like-box {
  background: #ffffff;
  border: 1px solid #ddd;
  margin: 50px 0 44px;
  padding: 10px;
}
.sidebar-latest .like-box ul li {
  display: inline-block;
  text-align: center;
  width: 32.5%;
  background: #1da1f2;
  padding-bottom: 25px;
  cursor: pointer;
}
.sidebar-latest .like-box ul li a {
  color: #ffffff;
  display: block;
  font-size: 20px;
  height: 65px;
  line-height: 85px;
  width: 110px;
}
.sidebar-latest .like-box ul li span {
  color: #ffffff;
  display: block;
  font-size: 15px;
  line-height: 23px;
  text-transform: uppercase;
}
.sidebar-latest .like-box ul li:first-child {
  background: #3b589c;
}
.sidebar-latest .like-box ul li:hover {
  opacity: .8;
}
.sidebar-latest .like-box ul .last {
  background: #e15a00;
}
.sidebar-latest .add-section img {
  width: 100%;
}
.sidebar-latest .newsletter-info {
  margin: 50px 0 44px;
  padding: 20px;
  background: #000000;
}
.sidebar-latest .newsletter-info form {
  margin: 0;
}
.sidebar-latest .newsletter-info form .form-group {
  margin: 0;
}
.sidebar-latest .newsletter-info form h4 {
  color: #ffffff;
  font-size: 18px;
  font-weight: 500;
  margin-bottom: 20px;
}
.sidebar-latest .newsletter-info form .newsletter {
  position: relative;
}
.sidebar-latest .newsletter-info form .form-control {
  border-radius: 0;
  font-size: 12px;
  padding: 0 20px;
  height: 39px;
}
.sidebar-latest .newsletter-info form .btn-send {
  position: absolute;
  right: 0;
  top: 0;
  background: #d32f2f;
  border: none;
  border-radius: 0;
  text-transform: uppercase;
  font-size: 12px;
  color: #ffffff;
  padding: 7px 22px;
  transition: all 0.5s ease 0s;
}
.sidebar-latest .newsletter-info form .btn-send:hover {
  color: #101010;
}
.sidebar-latest .newsletter-info form p {
  font-size: 15px;
  color: #cccccc;
  margin: 16px 0 0;
}
.sidebar-latest .popular h3 {
  margin-bottom: 38px;
}
.sidebar-latest .popular-related h4 {
  font-size: 15px !important;
  padding: 13px 0 0 !important;
  line-height: 22px !important;
}
.sidebar-latest .recent-comments .dsc {
  background: #fff;
  padding: 20px;
  color: #434343;
  font-weight: 400;
}
.sidebar-latest .recent-comments .dsc span {
  text-align: right;
  font-size: 18px;
  color: #101010;
  font-weight: 500;
  display: block;
}
.sidebar-latest .next-prev {
  top: 7px;
  left: 4px;
}
.sidebar-latest .news-arrow-left,
.sidebar-latest .news-arrow-right {
  border: 1px solid #ddd;
  height: 30px;
  line-height: 30px;
  width: 32px;
  display: inline-block;
  text-align: center;
  transition: all 0.5s ease 0s;
}
.sidebar-latest .news-arrow-left i,
.sidebar-latest .news-arrow-right i {
  font-size: 18px;
  color: #101010;
}
.sidebar-latest .news-arrow-left:hover,
.sidebar-latest .news-arrow-right:hover {
  background: #d32f2f;
}
.sidebar-latest .news-arrow-left:hover i,
.sidebar-latest .news-arrow-right:hover i {
  color: #ffffff;
}
.sidebar-latest .add-section2 img {
  height: 381px;
}
.featured-title {
  margin-bottom: 38px;
}
/* ------------------------------------
12.Gallery Page Start Here 
---------------------------------------*/
.gallery-page li {
  border: none !important;
  padding: 0;
  position: relative;
  margin-bottom: 0 !important;
}
.gallery-page li .blog-image {
  margin-bottom: 15px;
}
.gallery-page .slide .next-prev {
  position: absolute;
  top: 35%;
  z-index: 100;
  width: 100%;
  -ms-transform: translate(-35%, -35%);
  /* IE 9 */
  -webkit-transform: translate(-35%, -35%);
  /* Safari */
  transform: translate(-35%, -35%);
  left: 35%;
  padding: 0 10px;
}
.gallery-page .slide .next-prev .left {
  float: left;
  color: #f52222;
  font-size: 25px;
  opacity: 0;
}
.gallery-page .slide .next-prev .right {
  float: right;
  color: #f52222;
  font-size: 25px;
  opacity: 0;
}
.gallery-page .slide:hover .right,
.gallery-page .slide:hover .left {
  opacity: 1;
}
.gallery-page .margin-top {
  margin-top: -160px;
}
.gallery-page .margin-top2 {
  margin-top: -80px;
}
/* ------------------------------------
13.Home Page Gellary Start Here 
---------------------------------------*/
.gellary-area {
  padding: 70px 0;
}
.gellary-area .single-gellary {
  background: #f5f5f5;
  padding: 5px;
  margin: 0;
  position: relative;
  overflow: hidden;
}
.gellary-area .single-gellary .image {
  position: relative;
  overflow: hidden;
  margin-bottom: 0px;
}
.gellary-area .single-gellary .image:hover .overley {
  opacity: 1;
  transform: scale(1);
}
.gellary-area .single-gellary .image a {
  display: block;
}
.gellary-area .single-gellary .image a img {
  width: 100%;
}
.gellary-area .single-gellary .image span {
  position: absolute;
  left: 0;
  bottom: 0;
  width: 60px;
  height: 60px;
  background: #d32f2f;
  color: #ffffff;
  padding: 2px;
  text-align: center;
  z-index: 99;
}
.gellary-area .single-gellary .image .overley {
  position: absolute;
  left: 0;
  right: 0;
  text-align: center;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.7);
  top: 0;
  transform: scale(0);
  transform-origin: 0 1 0;
  opacity: 0;
  transition: all 0.5s ease 0s;
}
.gellary-area .single-gellary .image .overley ul {
  margin: 0;
  padding: 0;
  list-style: none;
  position: relative;
  top: 45%;
  transform: rotate(0deg);
  transition: all .9s;
}
.gellary-area .single-gellary .image .overley ul li {
  display: inline-block;
  color: #ffffff;
  margin-right: 4px;
}
.gellary-area .single-gellary .image .overley ul li i {
  color: #d32f2f;
  font-size: 16px;
  width: 45px;
  height: 45px;
  line-height: 45px;
  border: 1px solid #ffffff;
  border-radius: 50%;
  transition: all 0.5s ease 0s;
}
.gellary-area .single-gellary .image .overley ul li i:hover {
  background: #d32f2f;
  border: 1px solid #d32f2f;
  color: #ffffff;
}
.gellary-area .single-gellary:hover img {
  opacity: .9;
}
.gellary-area .single-gellary img {
  width: 100%;
  transition: all 0.5s ease 0s;
  position: relative;
  overflow: hidden;
}
.gellary-area .single-gellary .gellary-informations {
  padding: 3px 0 0;
  transition: all 0.5s ease 0s;
}
.gellary-area .single-gellary .gellary-informations ul {
  margin: 0;
  padding: 0;
  list-style: none;
}
.gellary-area .single-gellary .gellary-informations ul li {
  display: inline-block;
  margin-right: 15px;
  padding-bottom: 0;
}
.gellary-area .single-gellary .gellary-informations ul li h3 {
  margin-bottom: 0;
}
.gellary-area .single-gellary .gellary-informations ul li h3 a {
  font-size: 18px;
  transition: all 0.5s ease 0s;
  color: #434343;
}
.gellary-area .single-gellary .gellary-informations ul li h3 a:hover {
  color: #d32f2f;
}
.gellary-area .single-gellary .gellary-informations ul li h3 a span {
  display: block;
  font-weight: 400;
  color: #333333;
  font-size: 12px;
  margin-top: 10px;
}
.gellary-area .single-gellary .gellary-informations ul li i {
  color: #434343;
}
.gellary-area .single-gellary .gellary-informations ul li a {
  color: #434343;
  font-size: 12px;
}
.gellary-area .single-gellary .gellary-informations ul li a:hover {
  color: #d32f2f;
}
.gellary-area .single-gellary .gellary-informations ul li a:hover i {
  color: #d32f2f;
}
.gellary-area .single-gellary .gellary-informations ul li .fa-comments {
  color: #434343;
}
.gellary-area .pagination-area {
  margin: 0;
}
.gellary-area-main .single-gellary {
  margin-bottom: 20px;
}
/* ------------------------------------
14.Testimonial Page Start Here 
---------------------------------------*/
.testimonial-page-area {
  padding: 50px 0 0;
}
.testimonial-page-area .container li {
  list-style: none;
}
.testimonial-page-area .container li .testimonial-content p {
  margin: 0;
  position: relative;
  padding: 0 0 0 30px;
  font-weight: 400;
  color: #434343;
  line-height: 25px;
  text-transform: capitalize;
}
.testimonial-page-area .container li .testimonial-content p:before {
  background: url(images/comma-icon.png);
  position: absolute;
  content: "";
  top: 7px;
  left: 0;
  width: 18px;
  height: 16px;
}
.testimonial-page-area .container li .author-image {
  margin-bottom: 25px;
}
.testimonial-page-area .container li .author-image img {
  width: 55px;
  border-radius: 100%;
}
.testimonial-page-area .container li .author-name {
  font-weight: 500;
  color: #101010;
  line-height: 25px;
  text-transform: capitalize;
  font-size: 15px;
  line-height: 20px;
  position: relative;
  left: -22px;
  top: 9px;
}
.testimonial-page-area .container li .author-name span {
  display: block;
  font-weight: 300;
  padding-left: 15px;
  font-size: 12px;
  color: #434343;
}
/* CSS talk bubble */
.border {
  border: 1px solid #ccc;
  position: relative;
  padding: 18px 20px 20px 25px;
}
.talk-bubble {
  background-color: #f2f2f2;
  margin-bottom: 40px;
}
/* Right triangle placed top left flush. */
.tri-right.border.left-top:before {
  content: ' ';
  position: absolute;
  width: 0;
  height: 0;
  left: -40px;
  right: auto;
  top: -8px;
  bottom: auto;
  border: 32px solid;
  border-color: #ccc transparent transparent transparent;
}
.tri-right.left-top:after {
  content: ' ';
  position: absolute;
  width: 0;
  height: 0;
  left: -20px;
  right: auto;
  top: 0px;
  bottom: auto;
  border: 22px solid;
  border-color: #f2f2f2 transparent transparent transparent;
}
/* Right triangle, left side slightly down */
.tri-right.border.left-in:before {
  content: ' ';
  position: absolute;
  width: 0;
  height: 0;
  left: -40px;
  right: auto;
  top: 30px;
  bottom: auto;
  border: 20px solid;
  border-color: #ccc #ccc transparent transparent;
}
.tri-right.left-in:after {
  content: ' ';
  position: absolute;
  width: 0;
  height: 0;
  left: -20px;
  right: auto;
  top: 38px;
  bottom: auto;
  border: 12px solid;
  border-color: #f2f2f2 lightyellow transparent transparent;
}
/*Right triangle, placed bottom left side slightly in*/
.tri-right.border.btm-left:before {
  content: ' ';
  position: absolute;
  width: 0;
  height: 0;
  left: -8px;
  right: auto;
  top: auto;
  bottom: -40px;
  border: 32px solid;
  border-color: transparent transparent transparent #ccc;
}
.tri-right.btm-left:after {
  content: ' ';
  position: absolute;
  width: 0;
  height: 0;
  left: 0px;
  right: auto;
  top: auto;
  bottom: -20px;
  border: 22px solid;
  border-color: transparent transparent transparent #f2f2f2;
}
/*Right triangle, placed bottom left side slightly in*/
.tri-right.border.btm-left-in:before {
  content: ' ';
  position: absolute;
  width: 0;
  height: 0;
  left: 37px;
  right: auto;
  top: auto;
  bottom: -23px;
  border: 11px solid;
  border-color: #ccc transparent transparent #ccc;
}
.tri-right.btm-left-in:after {
  content: ' ';
  position: absolute;
  width: 0;
  height: 0;
  left: 38px;
  right: auto;
  top: auto;
  bottom: -20px;
  border: 12px solid;
  border-color: #f2f2f2 transparent transparent #f2f2f2;
}
/*Right triangle, placed bottom right side slightly in*/
.tri-right.border.btm-right-in:before {
  content: ' ';
  position: absolute;
  width: 0;
  height: 0;
  left: auto;
  right: 30px;
  bottom: -40px;
  border: 35px solid;
  border-color: #ccc #ccc transparent transparent;
}
.tri-right.btm-right-in:after {
  content: ' ';
  position: absolute;
  width: 0;
  height: 0;
  left: auto;
  right: 38px;
  bottom: -20px;
  border: 12px solid;
  border-color: #f2f2f2 lightyellow transparent transparent;
}
/*Right triangle, placed bottom right side slightly in*/
.tri-right.border.btm-right:before {
  content: ' ';
  position: absolute;
  width: 0;
  height: 0;
  left: auto;
  right: -8px;
  bottom: -40px;
  border: 20px solid;
  border-color: #ccc #ccc transparent transparent;
}
.tri-right.btm-right:after {
  content: ' ';
  position: absolute;
  width: 0;
  height: 0;
  left: auto;
  right: 0px;
  bottom: -20px;
  border: 5px solid;
  border-color: #f2f2f2 lightyellow transparent transparent;
}
/* Right triangle, right side slightly down*/
.tri-right.border.right-in:before {
  content: ' ';
  position: absolute;
  width: 0;
  height: 0;
  left: auto;
  right: -40px;
  top: 30px;
  bottom: auto;
  border: 20px solid;
  border-color: #666 transparent transparent #666;
}
.tri-right.right-in:after {
  content: ' ';
  position: absolute;
  width: 0;
  height: 0;
  left: auto;
  right: -20px;
  top: 38px;
  bottom: auto;
  border: 12px solid;
  border-color: lightyellow transparent transparent lightyellow;
}
/* Right triangle placed top right flush. */
.tri-right.border.right-top:before {
  content: ' ';
  position: absolute;
  width: 0;
  height: 0;
  left: auto;
  right: -40px;
  top: -8px;
  bottom: auto;
  border: 32px solid;
  border-color: #666 transparent transparent transparent;
}
.tri-right.right-top:after {
  content: ' ';
  position: absolute;
  width: 0;
  height: 0;
  left: auto;
  right: -20px;
  top: 0px;
  bottom: auto;
  border: 20px solid;
  border-color: lightyellow transparent transparent transparent;
}
/* ------------------------------------
15. Error 404 page Start Here 
---------------------------------------*/
.error-page-area .container {
  padding: 50px 0 0;
}
.error-page-area .container .erroe-404 {
  background: #999999;
  text-align: center;
  padding: 30px 0;
}
.error-page-area .container .erroe-404 h2 {
  font-size: 250px;
  color: #ffffff;
  line-height: 210px;
  margin: 0;
  position: relative;
  z-index: 10;
}
.error-page-area .container .erroe-404 span {
  font-size: 20px;
  color: #101010;
  line-height: 35px;
  position: relative;
  z-index: 10;
  font-weight: 600;
}
.error-page-area .container p {
  color: #434343;
  display: block;
  font-size: 18px;
  line-height: 30px;
  margin: 30px auto 30px;
  max-width: 500px;
  text-align: center;
  position: relative;
  z-index: 10;
  font-weight: 500;
}
.error-page-area .container a {
  background: #d32f2f;
  color: #fff;
  display: block;
  font-size: 15px;
  margin: 0 auto;
  padding: 12px 20px;
  text-align: center;
  text-transform: uppercase;
  width: 230px;
  position: relative;
  z-index: 10;
  font-weight: normal;
  letter-spacing: 1px;
}
.error-page-area .container a:hover {
  color: #000;
}
/* ------------------------------------
16.Footer Area Section Start Here 
---------------------------------------*/
.footer-top-area {
  background: #<?php echo $footerArkaplan; ?>;;
  padding: 50px 0;
  margin-top: 50px;
}
.footer-top-area .single-footer h3 {
  font-size: 18px;
  color: #ffffff;
  font-weight: 600;
  line-height: 1.55;
  box-shadow: 0 2px 1px -2px #cccccc;
  text-transform: uppercase;
  padding-bottom: 8px;
}
.footer-top-area .single-footer p {
  color: #cccccc;
  font-size: 15px;
  margin: 26px 0 0;
}
.footer-top-area .single-footer .footer-social-media-area {
  padding-top: 11px;
}
.footer-top-area .single-footer .footer-social-media-area ul {
  text-align: left;
}
.footer-top-area .single-footer .footer-social-media-area ul li {
  display: inline-block;
  margin: 2px;
}
.footer-top-area .single-footer .footer-social-media-area ul li a {
  display: block;
  width: 32px;
  height: 32px;
  line-height: 32px;
  color: #dddddd;
  background: #2d2d2d;
  transition: all 0.5s ease 0s;
  text-decoration: none;
  text-align: center;
  border-radius: 100%;
}
.footer-top-area .single-footer .footer-social-media-area ul li a:hover {
  background: #d32f2f;
  transform: rotate(360deg);
}
.footer-top-area .footer-two ul li {
  color: #999999;
  clear: both;
  overflow: hidden;
  padding: 7px 0;
}
.footer-top-area .footer-two ul li .col-md-5 {
  padding: 0;
}
.footer-top-area .footer-two ul li .col-md-5 img {
  transition: all 0.8s ease 0s;
  overflow: hidden;
}
.footer-top-area .footer-two ul li .col-md-5 p {
  margin: 0 0 0 15px;
}
.footer-top-area .footer-two ul li .col-md-5 span {
  font-size: 12px;
  color: #777777;
  margin-top: 8px;
  margin-left: 15px;
  display: block;
}
.footer-top-area .footer-two ul li .col-md-5 span i {
  color: #777777;
}
.footer-top-area .footer-two ul li .col-xs-8 p {
  margin-top: 0;
}
.footer-top-area .footer-two ul li .col-xs-8 span {
  font-size: 12px;
}
.footer-top-area .footer-two ul li .col-sm-5 {
  overflow: hidden;
}
.footer-top-area .footer-two ul li .col-sm-5 img {
  width: 100%;
  position: relative;
}
.footer-top-area .footer-two ul li a {
  color: #cccccc;
  transition: all 0.5s ease 0s;
  overflow: hidden;
}
.footer-top-area .footer-two ul li a:hover {
  color: #d32f2f;
}
.footer-top-area .footer-two ul li i {
  margin-right: 5px;
  display: inline-block;
  font-size: 12px;
}
.footer-top-area .footer-two ul li:first-child {
  padding-top: 0;
}
.footer-top-area .footer-two ul li:last-child {
  box-shadow: none;
}
.footer-top-area .footer-two ul li:hover a {
  color: #d32f2f;
  transition: all 0.5s ease 0s;
}
.footer-top-area .footer-two ul li:hover a img {
  transform: scale3d(1.1, 1.1, 1.1);
  cursor: pointer;
}
.footer-top-area .footer-two ul li:hover .col-sm-5 {
  cursor: pointer;
}
.footer-top-area .footer-two ul li:hover .col-sm-5:after {
  content: "";
  background: rgba(0, 0, 0, 0.7);
  height: 100%;
  width: 100%;
  position: absolute;
  top: 0;
  left: 0;
}
.footer-top-area .footer-three ul {
  margin: 0;
  padding: 0;
  list-style: none;
}
.footer-top-area .footer-three ul li {
  display: inline-block;
  width: 22.55%;
  margin: 1px 3px;
  overflow: hidden;
}
.footer-top-area .footer-three ul li a {
  display: block;
  transition: all 0.5s ease 0s;
}
.footer-top-area .footer-three ul li a img {
  display: block;
  width: 100%;
  transition: all 0.8s ease 0s;
}
.footer-top-area .footer-three ul li a img:hover {
  opacity: .9;
}
.footer-top-area .footer-three ul li:hover a {
  position: relative;
}
.footer-top-area .footer-three ul li:hover a:after {
  content: "";
  background: rgba(0, 0, 0, 0.6);
  height: 100%;
  width: 100%;
  position: absolute;
  top: 0;
  left: 0;
}
.footer-top-area .footer-three ul li:hover img {
  transform: scale3d(1.1, 1.1, 1.1);
}
.footer-top-area .footer-four ul li {
  display: inline-block;
  color: #ffffff;
  margin: 0 0 15px 0;
  font-weight: 300;
}
.footer-top-area .footer-four ul li a {
  color: #ffffff;
  transition: all 0.5s ease 0s;
}
.footer-top-area .footer-four ul li a:hover {
  color: #d32f2f;
}
.footer-top-area .footer-four ul li i {
  margin: 5px;
  color: #d32f2f;
}
.footer-bottom-area {
  background: #000000;
  padding: 20px 0;
}
.footer-bottom-area .footer-bottom p {
  text-align: center;
  color: #ffffff;
  margin: 0;
  font-weight: 300;
}
#scrollUp {
  background: #000000;
  border-radius: 0px 0px 0 0;
  bottom: 100px;
  color: #ffffff !important;
  display: block;
  font-size: 25px;
  height: 40px;
  line-height: 0;
  position: fixed;
  right: 20px;
  text-align: center;
  text-decoration: none !important;
  transition: all 0.5s cubic-bezier(0, 0, 0, 1) 0s;
  width: 50px;
  z-index: 1000;
}
#scrollUp:hover {
  background: #d32f2f;
}
#scrollUp i {
  display: block;
  padding-top: 5px;
}
/* ------------------------------------
17.Inner Page Header serction start Here
--------------------------------------*/
.inner-page-header {
  padding: 0;
  position: relative;
}
.inner-page-header .header-page-title h1 {
  color: #ffffff;
  margin: 0;
  font-size: 30px;
  font-weight: 600;
  text-transform: uppercase;
  margin: 10px 0;
}
.inner-page-header .banner-text {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 100%;
  z-index: 10;
  -ms-transform: translate(-50%, -50%);
  /* IE 9 */
  -webkit-transform: translate(-50%, -50%);
  /* Safari */
  transform: translate(-50%, -50%);
}
.inner-page-header .header-page-subtitle p {
  color: #ffffff;
  font-size: 15px;
}
.inner-page-header .header-page-locator ul li {
  display: inline-block;
  color: #d32f2f;
  text-transform: uppercase;
  font-weight: 500;
  font-size: 12px;
}
.inner-page-header .header-page-locator ul li a {
  color: #ffffff;
  transition: all 0.5s ease 0s;
  text-transform: uppercase;
  font-size: 12px;
}
.inner-page-header .header-page-locator ul li a:hover {
  color: #d32f2f;
}
.inner-page-header:after {
  background: rgba(0, 0, 0, 0.8) none repeat scroll 0 0;
  content: "";
  height: 100%;
  left: 0;
  position: absolute;
  top: 0;
  width: 100%;
}
/* ------------------------------------
18.About Team Start Here 
---------------------------------------*/
.about-page-team {
  padding: 50px 0;
  background: #ffffff;
}
.about-page-team .title2 span {
  margin: 16px 0 30px;
}
.about-page-team .title1 {
  margin-bottom: 15px;
}
.about-page-team #total-team .single-team {
  position: relative;
  margin: 0 15px;
}
.about-page-team #total-team .single-team:hover:after {
  opacity: 1;
  visibility: visible;
}
.about-page-team #total-team .single-team:after {
  position: absolute;
  content: "";
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.5);
  top: 0;
  left: 0;
  right: 0;
  margin: auto;
  opacity: 0;
  visibility: hidden;
  transform-origin: 0 0 0;
  transition: all 0.5s ease 0s;
}
.about-page-team #total-team .single-team a {
  display: block;
}
.about-page-team #total-team .single-team a img {
  width: 100%;
}
.about-page-team #total-team .single-team .social-media-icons ul {
  text-align: left;
}
.about-page-team #total-team .single-team .social-media-icons ul li {
  display: inline-block;
}
.about-page-team #total-team .single-team .social-media-icons ul li a {
  width: 25px;
  height: 25px;
  line-height: 25px;
  display: block;
}
.about-page-team #total-team .single-team .social-media-icons ul li a i {
  font-size: 14px;
  color: #777777;
}
.about-page-team #total-team .single-team .social-media-icons ul li a:after {
  display: none;
}
.about-page-team #total-team .single-team:hover .team-details {
  background: #101010;
}
.about-page-team #total-team .single-team:hover .team-details h3 a {
  color: #ffffff;
}
.about-page-team #total-team .single-team:hover .team-details p {
  color: #d32f2f;
}
.about-page-team #total-team .team-details {
  margin: 0px;
  background: #ffffff;
  transition: all 0.5s ease 0s;
  padding: 7px 24px;
  text-align: left;
  position: relative;
  z-index: 1;
}
.about-page-team #total-team .team-details h3 {
  margin-bottom: 0px;
  margin-top: 16px;
  text-transform: uppercase;
}
.about-page-team #total-team .team-details h3 a {
  display: block;
  font-size: 15px;
  color: #101010;
  transition: all 0.5s ease 0s;
  text-decoration: none;
  line-height: 18px;
}
.about-page-team #total-team .team-details h3 a:hover {
  color: #d32f2f;
}
.about-page-team #total-team .team-details h3 a:after {
  display: none;
}
.about-page-team #total-team .team-details p {
  color: #434343;
  margin-bottom: 0px;
  text-transform: uppercase;
  font-weight: 400;
  font-size: 12px;
}
.about-page-team #total-team .owl-controls {
  margin-top: 30px;
  display: none !important;
}
.about-page-team #total-team .owl-controls .owl-pagination {
  display: none;
}
.about-page-team #total-team .owl-controls .owl-pagination .owl-page.active span {
  border: 1px solid #222222;
}
.about-page-team #total-team .owl-controls .owl-pagination .owl-page span {
  display: block;
  width: 15px;
  height: 8px;
  margin: 5px 7px;
  filter: alpha(opacity=50);
  opacity: 1;
  -webkit-border-radius: 0px;
  -moz-border-radius: 0px;
  border-radius: 0;
  background: #d32f2f;
}
.home-about-area {
  padding: 50px 0 24px;
}
.home-about-area .title2 {
  margin: 0 0 10px;
}
.home-about-area h2 {
  line-height: 20px;
}
.home-about-area .about-content h3 {
  color: #000000;
  font-weight: 700;
  font-size: 40px;
}
.home-about-area .about-content h3 span {
  color: #d32f2f;
}
.home-about-area .about-content .about-content-list {
  margin-top: 50px;
}
.home-about-area .about-content .about-content-list .single-list .media .pull-left {
  margin: 20px;
}
.home-about-area .about-content .about-content-list .single-list .media .pull-left a {
  display: block;
  transition: all 0.5s ease 0s;
  margin-bottom: 20px;
  font-size: 20px;
  color: #ffffff;
  width: 50px;
  height: 50px;
  background: #d32f2f;
  position: relative;
  text-align: center;
  line-height: 50px;
  -webkit-transform: rotate(0deg);
  -moz-transform: rotate(0deg);
  -o-transform: rotate(0deg);
  -ms-transform: rotate(0deg);
  transform: rotate(0deg);
}
.home-about-area .about-content .about-content-list .single-list .media .pull-left a:hover {
  transform: rotateY(360deg);
  -webkit-transform: rotateY(360deg);
}
.home-about-area .about-content .about-content-list .single-list .media .pull-left a i {
  -webkit-transform: rotate(0deg);
  -moz-transform: rotate(0deg);
  -o-transform: rotate(0deg);
  -ms-transform: rotate(0deg);
  transform: rotate(120deg);
}
.home-about-area .about-content .about-content-list .single-list .media .media-body h4.media-heading {
  margin-bottom: 10px;
}
.home-about-area .about-content .about-content-list .single-list .media .media-body h4.media-heading a {
  display: block;
  transition: all 0.5s ease 0s;
  font-size: 20px;
  color: #000000;
  font-weight: 500;
}
.home-about-area .about-content .about-content-list .single-list .media .media-body h4.media-heading a:hover {
  color: #d32f2f;
}
.home-about-area .about-featured-image {
  text-align: center;
}
.home-about-area .about-featured-image a {
  display: block;
}
.about .footer-top-area {
  margin: 0;
}
/* ------------------------------------
19. Pagination Area Start Here 
---------------------------------------*/
.pagination-area {
  margin: 0 auto;
  max-width: 350px;
  overflow: hidden;
}
.pagination-area ul {
  text-align: center;
}
.pagination-area ul li {
  border: none;
  float: left;
  margin-bottom: 0;
  padding-bottom: 0;
}
.pagination-area ul li.active a {
  color: #d32f2f;
}
.pagination-area ul li:first-child a {
  border-left: 1px solid #ddd;
}
.pagination-area ul li:nth-child(4) a {
  line-height: 40px;
}
.pagination-area ul li a {
  background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
  border-right: 1px solid #ddd;
  border-top: 1px solid #ddd;
  border-bottom: 1px solid #ddd;
  color: #000000;
  display: block;
  font-size: 18px;
  height: 50px;
  line-height: 50px;
  text-align: center;
  text-decoration: none;
  transition: all 0.5s ease 0s;
  width: 50px;
}
.pagination-area ul li a:hover {
  color: #d32f2f;
}
/* ------------------------------------
20.Blog Page Start Here 
---------------------------------------*/
.blog-page-area {
  padding: 50px 0 0px;
}
.blog-page-area li {
  border: 1px solid #ddd;
  list-style: outside none none;
  margin-bottom: 25px;
  overflow: hidden;
  padding: 12px 0;
}
.blog-page-area li .date {
  font-size: 12px;
  line-height: 22px;
  color: #434343;
  font-weight: 400;
}
.blog-page-area li h3 {
  font-size: 18px;
  margin: 0;
}
.blog-page-area li h3 a {
  color: #101010;
  line-height: 32px;
}
.blog-page-area li .admin {
  color: #434343;
  padding-right: 5px;
  font-size: 12px;
}
.blog-page-area li .admin a {
  color: #434343;
}
.blog-page-area li .admin a i {
  margin-right: 3px;
  color: #434343;
}
.blog-page-area li .like a {
  color: #434343;
  font-size: 12px;
}
.blog-page-area li .like a:hover {
  color: #101010;
}
.blog-page-area li p {
  margin: 10px 0;
}
.blog-page-area li .more {
  color: #434343;
  text-transform: lowercase;
  text-transform: capitalize;
}
.blog-page-area li .more:hover {
  color: #d32f2f;
}
.blog-page-area li img {
  transition: all 0.8s ease 0s;
}
.blog-page-area li .blog-image {
  overflow: hidden;
  position: relative;
}
.blog-page-area li .blog-image i {
  position: absolute;
  font-size: 30px;
  left: 50%;
  top: 50%;
  -ms-transform: translate(-50%, -50%);
  /* IE 9 */
  -webkit-transform: translate(-50%, -50%);
  /* Safari */
  transform: translate(-50%, -50%);
  color: #f52222;
  z-index: 1000;
  opacity: 0;
  transition: all 0.8s ease 0s;
}
.blog-page-area li:hover a {
  color: #d32f2f;
}
.blog-page-area li:hover .blog-image a {
  position: relative;
  overflow: hidden;
  display: block;
}
.blog-page-area li:hover .blog-image a img {
  transform: scale3d(1.1, 1.1, 1.1);
}
.blog-page-area li:hover .blog-image a:after {
  background: rgba(0, 0, 0, 0.6) none repeat scroll 0 0;
  content: "";
  height: 100%;
  left: 0;
  position: absolute;
  top: 0;
  width: 100%;
}
.blog-page-area li:hover .blog-image a i {
  opacity: 1;
}
/* ------------------------------------
21.Blog Details Page start here  
---------------------------------------*/
.single-blog-page-area {
  padding: 50px 0 0;
}
.single-blog-page-area .single-image {
  margin-bottom: 25px;
  overflow: hidden;
}
.single-blog-page-area .single-image img {
 
  transition: all 0.8s ease-in-out 0s;
}
.single-blog-page-area .single-image img:hover {

  transform: scale(1.1);
}
.single-blog-page-area h3 {
  font-size: 18px;
  color: #101010;
  margin: 10px 0;
  padding: 0;
  line-height: 25px;
}
.single-blog-page-area h3 a {
  color: #101010;
}
.single-blog-page-area .admin,
.single-blog-page-area .like {
  margin-right: 12px;
  margin-bottom: 15px;
  display: inline-block;
  font-size: 12px;
}
.single-blog-page-area .admin a,
.single-blog-page-area .like a {
  color: #d32f2f;
}
.single-blog-page-area .admin a:hover,
.single-blog-page-area .like a:hover {
  color: #101010;
}
.single-blog-page-area blockquote {
  background: #f9f9f9;
  border: medium none;
  margin: 0 0 25px;
  padding: 35px 40px;
}
.single-blog-page-area h2 {
  font-size: 20px;
  margin: 0 0 25px;
}
.single-blog-page-area ul {
  padding: 0 0 25px;
  margin: 0;
}
.single-blog-page-area ul li {
  margin-left: 30px;
}
.single-blog-page-area ul li i {
  color: #101010;
}
.single-blog-page-area .share-section {
  border-top: 1px solid #ddd;
}
.single-blog-page-area .share-section h3 {
  font-size: 20px;
  letter-spacing: 4px;
  text-transform: uppercase;
}
.single-blog-page-area .share-section a {
  color: #101010;
}
.single-blog-page-area .share-section a:hover {
  color: #d32f2f;
}
.single-blog-page-area .share-section .date,
.single-blog-page-area .share-section span.comment,
.single-blog-page-area .share-section span.author,
.single-blog-page-area .share-section span.cat {
  margin-right: 15px;
}
.single-blog-page-area .share-section .life-style {
  padding-top: 20px;
}
.single-blog-page-area .share-section .life-style a {
  font-size: 12px;
}
.single-blog-page-area .share-section ul.share-link {
  padding: 15px 0 25px;
  margin: 0;
  text-align: right;
}
.single-blog-page-area .share-section ul.share-link li {
  padding: 0;
  margin: 0 15px 0 0;
  border: 1px solid #ddd;
  display: inline-block;
  border-radius: 2px;
}
.single-blog-page-area .share-section ul.share-link li a {
  color: #101010;
  display: block;
  font-size: 12px;
  padding: 2px 10px 2px 10px;
}
.single-blog-page-area .share-section ul.share-link li a i {
  color: #101010;
  padding-right: 5px;
}
.single-blog-page-area .share-section ul.share-link li a:hover {
  color: #ffffff;
}
.single-blog-page-area .share-section ul.share-link li:first-child {
  background: #d32f2f;
  border: none;
}
.single-blog-page-area .share-section ul.share-link li:first-child a {
  color: #ffffff;
}
.single-blog-page-area .share-section ul.share-link li:last-child {
  margin-right: 0;
}
.single-blog-page-area .share-section2 {
  border: 1px solid #ddd;
  padding: 0 15px;
}
.single-blog-page-area .share-section2 .row ul {
  padding: 15px 0;
}
.single-blog-page-area .share-section2 .row ul li a {
  font-size: 12px;
  font-weight: 500;
  color: #101010;
}
.single-blog-page-area .share-section2 .row ul li:first-child {
  background: none;
  border: 1px solid #ddd;
}
.single-blog-page-area .share-section2 .row ul li:first-child a {
  color: #101010;
}
.single-blog-page-area .share-section2 .row ul li:first-child a:hover {
  color: #ffffff;
}
.single-blog-page-area .share-section2 span {
  display: block;
  font-size: 15px;
  font-weight: 500;
  margin: 17px 0 0;
}
.single-blog-page-area .next-pre-section {
  padding: 17px 0 29px;
  margin: 0;
  overflow: hidden;
}
.single-blog-page-area .next-pre-section li {
  margin: 0;
}
.single-blog-page-area .next-pre-section li a {
  font-size: 15px;
  color: #101010;
}
.single-blog-page-area .next-pre-section li a i {
  padding: 0;
  font-size: 15px;
  font-weight: 500;
  color: #101010;
}
.single-blog-page-area .next-pre-section li a:hover {
  color: #d32f2f;
}
.single-blog-page-area .next-pre-section li a:hover i {
  color: #d32f2f;
}
.single-blog-page-area .next-pre-section li.left-arrow {
  float: left;
  width: 50%;
}
.single-blog-page-area .next-pre-section li.left-arrow a i {
  padding-right: 5px;
}
.single-blog-page-area .next-pre-section li.right-arrow {
  float: right;
  width: 50%;
  text-align: right;
}
.single-blog-page-area .next-pre-section li.right-arrow a i {
  padding-left: 5px;
}
.single-blog-page-area .like-section h3 {
  font-size: 20px;
  text-transform: uppercase;
  margin-bottom: 40px;
}
.single-blog-page-area .like-section .row h3 {
  font-size: 18px;
  text-transform: capitalize;
  margin: 20px 0 8px;
}
.single-blog-page-area .like-section .row h3 a:hover {
  color: #d32f2f;
}
.single-blog-page-area .author-comment h3 {
  font-size: 20px;
  text-transform: uppercase;
  font-weight: 600;
  margin: 42px 0 23px;
}
.single-blog-page-area .author-comment ul {
  padding: 0;
  margin: 0;
}
.single-blog-page-area .author-comment ul li {
  margin: 0 0 2px;
  padding: 20px 22px;
  border-bottom: 1px solid #ddd;
}
.single-blog-page-area .author-comment ul li:nth-child(2) {
  margin-left: 100px;
}
.single-blog-page-area .author-comment ul li:nth-child(2) .col-sm-2 {
  padding: 0;
}
.single-blog-page-area .author-comment ul li:last-child {
  border-bottom: none;
}
.single-blog-page-area .author-comment ul li .image-comments {
  margin-top: 5px;
}
.single-blog-page-area .author-comment ul li .image-comments img {
  width: 90px;
  border-radius: 100%;
}
.single-blog-page-area .author-comment ul li .reply {
  display: block;
  position: absolute;
  text-align: right;
  width: 95%;
}
.single-blog-page-area .author-comment ul li .reply a {
  color: #101010;
}
.single-blog-page-area .author-comment ul li .reply a:hover {
  color: #d32f2f;
}
.single-blog-page-area .author-comment ul li .reply i {
  color: #101010;
}
.single-blog-page-area .author-comment ul li .dsc-comments h4 {
  margin: 0 0 12px;
}
.single-blog-page-area .author-comment ul li .dsc-comments a {
  color: #d32f2f;
}
.single-blog-page-area .author-comment ul li .dsc-comments p {
  margin: 6px 0 0;
}
.single-blog-page-area .leave-comments-area {
  padding-top: 20px;
}
.single-blog-page-area .leave-comments-area h4 {
  font-size: 20px;
  text-transform: uppercase;
}
.single-blog-page-area .leave-comments-area label {
  color: #434343;
  font-weight: normal;
  letter-spacing: 1px;
}
.single-blog-page-area .leave-comments-area input,
.single-blog-page-area .leave-comments-area textarea {
  background: #f2f2f2;
  border: 1px solid #ddd;
  border-radius: 0;
  height: 45px;
  width: 100%;
}
.single-blog-page-area .leave-comments-area textarea {
  height: 150px;
  width: 100%;
  max-width: 100%;
}
.single-blog-page-area .leave-comments-area .btn-send {
  background: #d32f2f;
  font-weight: 600;
  color: #ffffff;
  font-size: 14px;
  line-height: 24px;
  border: none;
  border-radius: 0px;
  padding: 14px 30px;
  text-transform: uppercase;
  letter-spacing: 1px;
  margin-top: 14px;
  transition: all 0.5s ease 0s;
}
.single-blog-page-area .leave-comments-area .btn-send:hover {
  background: #db5858;
}
.single-blog-page-area .col-sm-8 ul.cercle li i {
  color: #d32f2f;
}
/* ------------------------------------
22.Sidebar area Blog Single Start Here 
---------------------------------------*/
.sidebar-area ul {
  padding: 0;
  margin: 0;
}
.sidebar-area ul li {
  margin: 0;
  padding: 0;
}
.sidebar-area ul li h4 {
  padding-top: 12px !important;
}
.sidebar-area .like-box-area ul li {
  background: #fbc02d;
  margin-bottom: 15px !important;
  position: relative;
}
.sidebar-area .like-box-area ul li a {
  color: #ffffff;
  font-size: 15px;
  font-weight: 400;
}
.sidebar-area .like-box-area ul li a i {
  color: #ffffff;
  font-size: 16px;
  transition: all 0.5s ease 0s;
  padding: 0;
}
.sidebar-area .like-box-area ul li a .fa-facebook,
.sidebar-area .like-box-area ul li a .fa-twitter,
.sidebar-area .like-box-area ul li a .fa-rss {
  background: rgba(0, 0, 0, 0.2);
  padding: 25px 30px;
  width: 75px;
}
.sidebar-area .like-box-area ul li a i.fa-plus {
  border: 2px solid;
  border-radius: 100%;
  height: 30px;
  line-height: 26px;
  text-align: center;
  width: 31px;
  font-weight: normal;
  font-size: 12px;
}
.sidebar-area .like-box-area ul li a .like-page {
  line-height: 21px;
  margin: 11px 0 0 14px;
  padding: 0;
  position: absolute;
  width: 220px;
  text-transform: uppercase;
}
.sidebar-area .like-box-area ul li a .like {
  padding: 0;
  margin: 0;
  position: absolute;
  right: 15px;
  top: 20px;
}
.sidebar-area .like-box-area ul li:first-child {
  background: #3b589c;
}
.sidebar-area .like-box-area ul li:last-child {
  background: #01aaed;
}
.sidebar-area .recent-post-area h3 {
  font-size: 20px;
  text-transform: uppercase;
  font-weight: 500;
  margin: 29px 0 15px;
}
.sidebar-area .recent-post-area .news-post {
  margin: 0;
  padding: 0;
}
.sidebar-area .recent-post-area .news-post li {
  margin-bottom: 25px;
}
.sidebar-area .recent-post-area .news-post li h4 {
  padding-bottom: 0;
  line-height: 22px;
}
.sidebar-area .trending-post-area h3 {
  font-size: 20px;
  text-transform: uppercase;
  font-weight: 500;
  margin: 20px 0 40px;
}
.sidebar-area .trending-post-area ul {
  margin: 0;
  padding: 0;
}
.sidebar-area .trending-post-area ul li {
  background: #ffffff;
  margin: 0;
  list-style: none;
  margin-bottom: 25px !important;
}
.sidebar-area .trending-post-area ul li a.team-btn {
  background: #d32f2f;
  padding: 3px 20px;
  color: #ffffff;
  text-transform: uppercase;
  font-weight: 500;
  font-size: 12px;
  border-radius: 2px;
}
.sidebar-area .trending-post-area ul li .hvr-bounce-to-right::before {
  background: rgba(0, 0, 0, 0.8);
  border-radius: 2px;
}
.sidebar-area .trending-post-area ul li .date {
  margin-top: 16px;
  display: block;
}
.sidebar-area .trending-post-area ul li i {
  color: #101010;
}
.sidebar-area .trending-post-area ul li p {
  margin: 0;
}
.sidebar-area .trending-post-area ul li h4 {
  line-height: 20px;
  margin: 0 0 10px;
  padding: 6px 0 0 !important;
}
.sidebar-area .trending-post-area ul li h4 a {
  font-size: 15px;
  color: #101010;
  font-weight: 500;
}
.sidebar-area .trending-post-area ul li:hover h4 a {
  color: #d32f2f;
}
.sidebar-area .add {
  margin-top: 26px;
}
.sidebar-area .newsletter-info form {
  background: #ffffff;
  border: 1px solid #ccc;
  padding: 20px;
}
.sidebar-area .newsletter-info form fieldset .form-group {
  margin-bottom: 0;
}
.sidebar-area .newsletter-info form fieldset .form-group h4 {
  margin: 0;
  color: #101010;
}
.sidebar-area .newsletter-info form fieldset .form-group p {
  color: #434343;
  line-height: 24px;
  margin-top: 11px;
}
.sidebar-area .newsletter-info form fieldset .form-group input {
  box-shadow: none;
}
.sidebar-area .newsletter-info form fieldset .form-group .newsletter {
  position: relative;
}
.sidebar-area .newsletter-info form fieldset .form-group .btn-send {
  background: #d32f2f none repeat scroll 0 0;
  border: 0 none;
  border-radius: 2px;
  color: #ffffff;
  padding: 4px 17px;
  position: absolute;
  right: 0;
  text-transform: uppercase;
  top: 0;
}
/* ------------------------------------
23.Contact Page Start Here 
---------------------------------------*/
.contact-page-area .location-area h3 {
  color: #101010;
  font-size: 20px;
  margin: 22px 0;
  padding: 0 0 8px;
  position: relative;
  text-transform: uppercase;
  letter-spacing: 2px;
}
.contact-page-area .location-area h3:after {
  background: #d32f2f;
  content: "";
  height: 3px;
  left: 0;
  position: absolute;
  bottom: 0;
  width: 50px;
}
.contact-page-area .location-area p {
  margin-bottom: 0;
}
.contact-page-area .location-area ul {
  margin: 0;
  padding: 75px 0 0;
}
.contact-page-area .location-area ul li {
  list-style: none;
  margin: 0;
  padding: 0 0 6px;
  line-height: 20px;
}
.contact-page-area .location-area ul li i {
  font-size: 16px;
  width: 25px;
  line-height: 25px;
  padding: 0;
  height: 25px;
}
.contact-page-area .location-area ul li .fa-map-marker {
  font-size: 25px;
  position: relative;
  top: 8px;
}
.contact-page-area .location-area ul li .fa-mobile {
  font-size: 30px;
  position: relative;
  left: 2px;
  top: 5px;
}
.contact-page-area .location-area ul li a {
  color: #d32f2f;
}
.contact-page-area .location-area ul li a:hover {
  color: #333;
}
.contact-page-area .location-area ul li span {
  display: block;
  padding: 0 30px;
}
.contact-page-area .location-area ul li:nth-child(3) {
  margin-top: 7px;
}
.contact-page-area .leave-comments-area h3 {
  color: #101010;
  font-size: 20px;
  margin: 0 0 22px;
  padding: 0 0 8px;
  position: relative;
  text-transform: uppercase;
  letter-spacing: 2px;
}
.contact-page-area .leave-comments-area h3:after {
  background: #d32f2f;
  content: "";
  height: 3px;
  left: 0;
  position: absolute;
  bottom: 0;
  width: 50px;
}
/* ------------------------------------
24.Team Page Start Here 
---------------------------------------*/
.team-page-area {
  padding: 50px 0 0;
}
.team-page-area .single-member-area {
  position: relative;
  margin-bottom: 30px;
}
.team-page-area .single-member-area .article {
  opacity: 1;
  transition: all 1s;
}
.team-page-area .single-member-area:hover .article {
  opacity: 0;
}
.team-page-area .single-member-area:hover figure img {
  transform: scale(1.1);
}
.team-page-area .single-member-area:hover .overlay {
  opacity: 1 !important;
  -moz-transform: scale(1) !important;
  -webkit-transform: scale(1) !important;
  -o-transform: scale(1) !important;
  -ms-transform: scale(1) !important;
  transform: scale(1) !important;
}
.team-page-area .single-member-area .cl-single-member {
  overflow: hidden;
  position: relative;
}
.team-page-area .single-member-area .cl-single-member figure {
  overflow: hidden;
}
.team-page-area .single-member-area .cl-single-member figure img {
  transform: scale(1);
  transition: opacity 0.35s ease, transform 0.7s ease;
}
.team-page-area .single-member-area .cl-single-member:hover figure img {
  transform: scale(1.1);
}
.team-page-area .single-member-area .cl-single-member .overlay {
  background-color: rgba(255, 255, 255, 0.9);
  -webkit-transform: scaleX(0);
  transform: scaleX(0);
  transform-origin: 50% 50% 0;
  -webkit-transform-origin: 50% 50% 0;
  bottom: 5%;
  color: #ffffff;
  height: 90%;
  left: 5%;
  opacity: 0;
  position: absolute;
  transition: all 0.5s ease-out 0.15s;
  width: 90%;
  text-align: center;
  padding: 45px 38px 55px;
}
.team-page-area .single-member-area .cl-single-member .overlay h2.member-name {
  color: #101010;
  margin: 0;
  font-size: 18px;
  font-weight: 500;
}
.team-page-area .single-member-area .cl-single-member .overlay h2.member-name a {
  color: #101010;
}
.team-page-area .single-member-area .cl-single-member .overlay h2.member-name a:hover {
  color: #d32f2f;
}
.team-page-area .single-member-area .cl-single-member .overlay h3 {
  color: #d32f2f;
  font-size: 14px;
  font-weight: normal;
  text-transform: uppercase;
  margin-top: 9px;
}
.team-page-area .single-member-area .cl-single-member .overlay .short-desc {
  font-weight: normal;
  font-size: 15px;
  color: #434343;
}
.team-page-area .single-member-area .cl-single-member .overlay .social-icons {
  padding-top: 50px;
}
.team-page-area .single-member-area .cl-single-member .overlay .social-icons a {
  border: 2px solid #d32f2f;
  padding: 12px 16px;
  margin-right: 3px;
}
.team-page-area .single-member-area .cl-single-member .overlay .social-icons a.facebook {
  padding: 12px 18px;
}
.team-page-area .single-member-area .cl-single-member .overlay .social-icons a.google-plus {
  padding: 12px 14px;
}
.team-page-area .single-member-area .cl-single-member .overlay .social-icons a .fa {
  font-size: 16px;
  color: #101010;
}
.team-page-area .single-member-area .cl-single-member .overlay .social-icons a:hover {
  background: #d32f2f;
}
.team-page-area .single-member-area .cl-single-member .overlay .social-icons a:hover .fa {
  color: #fff;
}
.team-page-area .article {
  background: #ffffff;
  margin: -19px auto 0;
  padding: 18px 10px;
  position: relative;
  text-align: center;
  width: 90%;
  transition: all 0.5s ease 0s;
}
.team-page-area .article h3 {
  margin-bottom: 0;
}
.team-page-area .article h3 a {
  font-size: 18px;
  color: #101010;
  font-weight: 500;
}
.team-page-area .article .member-title {
  font-size: 12px;
  color: #434343;
  text-transform: uppercase;
}
/* ------------------------------------
25.Single team Page Start Here 
---------------------------------------*/
.single-team-page-area {
  padding: 50px 0 0px;
}
.single-team-page-area .single-bio {
  padding-left: 30px;
}
.single-team-page-area .single-bio h2.member-name {
  color: #101010;
  margin: 10px 0 0;
  font-size: 18px;
  font-weight: 500;
}
.single-team-page-area .single-bio h3 {
  color: #d32f2f;
  font-size: 14px;
  font-weight: normal;
  text-transform: uppercase;
  margin-top: 9px;
  margin-bottom: 15px;
}
.single-team-page-area .single-bio .member-desc {
  font-weight: normal;
  font-size: 15px;
  color: #434343;
}
.single-team-page-area .single-bio .contact-info {
  margin-top: 8px;
}
.single-team-page-area .single-bio .contact-info ul li {
  line-height: 25px;
}
.single-team-page-area .single-bio .contact-info ul li .fa {
  color: #d32f2f;
  font-weight: 600;
  padding-right: 20px;
}
.single-team-page-area .single-bio .contact-info ul li a {
  color: #434343;
  transition: all 0.5s ease 0s;
}
.single-team-page-area .single-bio .contact-info ul li a:hover {
  color: #d32f2f;
}
.single-team-page-area .single-bio .contact-info ul li .social_share {
  margin-left: 4px;
}
.single-team-page-area .single-experience {
  background: #f2f2f2;
  padding: 30px 15px;
  margin-top: 60px;
}
.single-team-page-area .single-experience .experience .inner {
  padding: 13px 0 13px 93px;
}
.single-team-page-area .single-experience .experience .inner h2.title {
  color: #101010;
  font-size: 18px;
  margin: 0 0 2px;
  letter-spacing: 2px;
  font-weight: 500;
  text-transform: uppercase;
}
.single-team-page-area .single-experience .experience .inner .time {
  color: #434343;
  font-size: 15px;
}
.single-team-page-area .single-experience .experience-1 .inner img {
  margin-bottom: 10px;
}
.single-team-page-area .single-experience .experience-1 .inner:after {
  background: #e4e4e4;
  content: "";
  height: 58px;
  position: absolute;
  right: 60px;
  top: 8px;
  width: 1px;
  opacity: 0;
}
.single-team-page-area .single-experience .experience-2 .inner img {
  margin-bottom: 10px;
}
.single-team-page-area .single-experience .experience-2:after {
  background: #e4e4e4;
  content: "";
  height: 58px;
  position: absolute;
  right: 60px;
  top: 8px;
  width: 1px;
  opacity: 0;
}
.single-team-page-area .single-experience .experience-3 .inner img {
  margin-bottom: 10px;
}
.single-team-page-area .owl-nav {
  position: absolute;
  top: 40%;
  left: 50%;
  width: 100%;
  -ms-transform: translate(-50%, -50%);
  /* IE 9 */
  -webkit-transform: translate(-50%, -50%);
  /* Safari */
  transform: translate(-50%, -50%);
}
.single-team-page-area .owl-nav .owl-prev {
  float: left;
  background: #d32f2f !important;
  width: 45px;
  height: 50px;
  line-height: 55px;
  position: relative;
  left: -70px;
  opacity: 1 !important;
  transition: all 0.5s ease 0s;
  text-align: center;
}
.single-team-page-area .owl-nav .owl-prev i {
  font-size: 22px !important;
  color: #ffffff;
}
.single-team-page-area .owl-nav .owl-prev:hover {
  background: #101010 !important;
}
.single-team-page-area .owl-nav .owl-next {
  float: right;
  background: #d32f2f !important;
  width: 45px;
  height: 50px;
  line-height: 55px;
  position: relative;
  right: -70px;
  opacity: 1 !important;
  transition: all 0.5s ease 0s;
  text-align: center;
}
.single-team-page-area .owl-nav .owl-next i {
  font-size: 22px !important;
  color: #ffffff;
}
.single-team-page-area .owl-nav .owl-next:hover {
  background: #101010 !important;
}
/* ------------------------------------
26.About page core services start here 
---------------------------------------*/
.about-featured {
  background: #ffffff;
  padding: 50px 0;
}
.about-featured .home-page-core-activities-area .border-img {
  position: relative;
  display: block;
}
.about-featured .home-page-core-activities-area .home-activities-area {
  position: relative;
  padding-left: 20px;
}
.about-featured .home-page-core-activities-area .home-activities-area h2 {
  color: #101010;
  font-size: 20px;
  letter-spacing: 0px;
  font-weight: 500;
  margin: 0;
}
.about-featured .home-page-core-activities-area .home-activities-area .title3 span {
  margin-bottom: 16px;
  letter-spacing: 2px;
}
.about-featured .home-page-core-activities-area .home-activities-area .single-activities {
  margin-bottom: 10px;
  position: relative;
  right: 10px;
}
.about-featured .home-page-core-activities-area .home-activities-area .single-activities .media .pull-left {
  margin-right: 0px;
}
.about-featured .home-page-core-activities-area .home-activities-area .single-activities .media .pull-left a {
  height: 70px;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  border-radius: 50%;
  display: block;
  text-align: center;
  font-size: 35px;
  line-height: 70px;
  transition: all 0.5s ease 0s;
}
.about-featured .home-page-core-activities-area .home-activities-area .single-activities .media .pull-left a i {
  color: #101010;
  font-size: 40px;
  margin-right: 20px;
  vertical-align: top;
  margin-top: 10px;
  margin-left: 10px;
}
.about-featured .home-page-core-activities-area .home-activities-area .single-activities .media .pull-left a:hover {
  color: #d32f2f;
}
.about-featured .home-page-core-activities-area .home-activities-area .single-activities .media .pull-left a:hover span {
  color: #d32f2f;
}
.about-featured .home-page-core-activities-area .home-activities-area .single-activities .media .pull-left a:hover i {
  color: #d32f2f;
}
.about-featured .home-page-core-activities-area .home-activities-area .single-activities .media .media-body h4.media-heading a {
  font-size: 18px;
  line-height: 1.5;
  color: #101010;
  display: block;
  transition: all 0.5s ease 0s;
  font-weight: 700;
}
.about-featured .home-page-core-activities-area .home-activities-area .single-activities .media .media-body h4.media-heading a:hover {
  color: #d32f2f;
}
.about-featured .home-page-core-activities-area .home-activities-area .single-activities .media .media-body p {
  margin-bottom: 0px;
}
/* ------------------------------------
27.About Page Counter up Section Start Here
  ---------------------------------------*/
.project-activation-area {
  background: #f2f2f2;
  transition: all 0.3s ease 0s;
  padding: 30px 0;
  cursor: pointer;
  line-height: 0;
}
.ab-count .wow {
  text-align: center;
}
.ab-count .col-lg-3.col-md-3:nth-child(1) h1 {
  color: #101010;
}
.ab-count .col-lg-3.col-md-3:nth-child(2) h1 {
  color: #101010;
}
.ab-count .col-lg-3.col-md-3:nth-child(3) h1 {
  color: #101010;
}
.ab-count .col-lg-3.col-md-3:nth-child(4) h1 {
  color: #101010;
}
.ab-count {
  padding: 0 0 25px 0;
}
.about-counter-list {
  padding: 20px 0;
  transition: all 0.5s ease 0s;
}
.about-counter-list .fa {
  color: #ffffff;
  display: inline-block;
  font-size: 40px;
  height: 60px;
  width: 60px;
  line-height: 60px;
  text-align: center;
  border-radius: 50%;
  background: #d32f2f;
}
.about-counter-list p {
  color: #101010;
  font-weight: 400;
  margin-bottom: 0;
  text-transform: uppercase;
  margin-left: 5px;
  line-height: 22px;
  font-weight: 500;
  font-size: 15px;
  float: none;
  text-align: center;
  margin-top: 10px;
}
.about-counter-list p .icons {
  margin-bottom: 15px;
  margin-top: 0;
}
.about-counter-list h1 {
  font-size: 30px;
  font-weight: 600;
  padding: 0;
  color: #101010;
  margin-top: 10px;
  margin-bottom: 0;
}
.about-counter-list:hover {
  background: #d32f2f;
}
.about-counter-list:hover h1 {
  color: #ffffff;
}
.about-counter-list:hover p {
  color: #ffffff;
}
/* ------------------------------------
28.Category Page Start Here 
---------------------------------------*/
.gallery-single .next-prev {
  top: 50% !important;
  z-index: 1000;
  width: 100%;
  -ms-transform: translate(-50%, -50%) !important;
  /* IE 9 */
  -webkit-transform: translate(-50%, -50%) !important;
  /* Safari */
  transform: translate(-50%, -50%) !important;
  left: 50% !important;
  position: absolute;
  padding: 0 20px;
}
.gallery-single .next-prev .news-arrow-right {
  float: right;
}
.gallery-single .blog-image img {
  filter: grayscale(0%);
}
.gallery-single .single-image .fa {
  font-size: 20px;
  color: #d32f2f;
  opacity: 0;
}
.gallery-single .single-image:hover .fa {
  opacity: 1;
  width: 40px;
  height: 40px;
  line-height: 40px;
  background: #ffffff;
  text-align: center;
}
.gallery-single .next-pre-section li a i {
  color: #101010;
}
.gallery-single .next-pre-section li a:hover {
  color: #d32f2f;
}
/* Fashion Page*/
.fashion .category-page .blog-image {
  margin-bottom: 0;
}
.fashion .category-page ul li {
  margin-bottom: 30px !important;
}
#news-Category .next-prev {
  height: 0;
}
.category-page li {
  padding: 0 0 15px;
}
.category-page li h3 {
  padding: 20px 0 8px;
}
.category-page li h3 a {
  font-size: 18px;
  line-height: 26px;
  font-weight: 500;
}
.category-page li:hover .videos-icon {
  opacity: 1;
}
.category-page .next-prev {
  top: 46% !important;
  z-index: 100;
  width: 100%;
  -ms-transform: translate(-50%, -50%) !important;
  /* IE 9 */
  -webkit-transform: translate(-50%, -50%) !important;
  /* Safari */
  transform: translate(-50%, -50%) !important;
  left: 50% !important;
}
.category-page .carousel-top-category .next-prev {
  top: 90% !important;
  z-index: 100;
  width: 86px;
  -ms-transform: translate(-50%, -50%) !important;
  /* IE 9 */
  -webkit-transform: translate(-50%, -50%) !important;
  /* Safari */
  transform: translate(-50%, -50%) !important;
  left: 50% !important;
}
.category-page .carousel-top-category .blog-image:after {
  background: rgba(0, 0, 0, 0.5);
  /* Old Browsers */
  background: -webkit-linear-gradient(top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.8));
  /*Safari 5.1-6*/
  background: -o-linear-gradient(top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.8));
  /*Opera 11.1-12*/
  background: -moz-linear-gradient(top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.8));
  /*Fx 3.6-15*/
  background: linear-gradient(to bottom, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.8));
  /*Standard*/
  position: absolute;
  content: "";
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
.category-page .carousel-top-category .news-control {
  opacity: 1 !important;
}
.category-page .carousel-top-category .news-control i {
  border: 1px solid #ffffff;
  width: 30px;
  height: 31px;
  line-height: 30px;
  text-align: center;
  color: #ffffff;
}
.category-page .carousel-top-category .news-control i:hover {
  color: #101010;
  background: #ffffff;
}
.category-page .carousel-top-category .date {
  color: #ffffff;
}
.category-page .carousel-top-category .like a {
  color: #ffffff;
}
.category-page .carousel .dsc {
  position: absolute;
  left: 0%;
  top: 282px;
  padding: 0 50px;
  width: 100%;
}
.category-page .carousel .dsc h3 {
  font-weight: normal;
  margin-bottom: 8px;
}
.category-page .carousel .dsc h3 a {
  font-size: 20px;
  color: #ffffff;
  line-height: 28px;
  font-weight: 500;
}
.category-page .pagination-area {
  margin: 0;
}
.category-page .videos-icon {
  position: absolute;
  left: 50%;
  top: 50%;
  -ms-transform: translate(-50%, -50%);
  /* IE 9 */
  -webkit-transform: translate(-50%, -50%);
  /* Safari */
  transform: translate(-50%, -50%);
  z-index: 1000;
  opacity: 0;
}
.category-page:hover .videos-icon a:after {
  opacity: 0;
}
.category-page:hover .videos-icon a img {
  transform: none !important;
}
.category-page .trending-post-area {
  margin-top: 20px;
}
/* ------------------------------------
29.Account Page Start Here 
---------------------------------------*/
.account-page-area {
  padding: 50px 0 0;
}
.account-page-area .border {
  border: 2px solid #ddd;
  padding: 22px 59px;
}
.account-page-area h3 {
  font-size: 20px;
  font-weight: bold;
  color: #101010;
  text-transform: uppercase;
  letter-spacing: 2px;
  margin-bottom: 15px;
}
.account-page-area label {
  font-size: 15px;
  color: #434343;
  font-weight: normal;
}
.account-page-area input {
  background: #f2f2f2 none repeat scroll 0 0;
  border: 1px solid #ccc;
  border-radius: 0;
  height: 45px;
  width: 100%;
}
.account-page-area .btn-register {
  position: relative;
}
.account-page-area .btn-register .checkbox {
  left: 141px;
  position: absolute;
  top: 41px;
}
.account-page-area .btn-register .cr {
  top: 3px;
  border-radius: 2px;
}
.account-page-area .btn-register .btn-send {
  background: #000000;
  border: none;
  box-shadow: none;
  color: #ffffff;
  font-size: 15px;
  font-weight: 400;
  padding: 11px 50px;
  transition: all 0.5s ease 0s;
}
.account-page-area .btn-register .btn-send:hover {
  background: #d32f2f;
}
.account-page-area .btn-register .login {
  display: block;
  font-size: 18px;
  font-weight: 500;
  margin: 22px 0 8px;
}
.account-page-area .btn-register .lost-pass {
  display: block;
  margin: 0 0 15px;
}
.account-page-area .btn-register .share-link {
  padding: 0;
  margin: 0;
}
.account-page-area .btn-register .share-link li {
  float: left;
}
.account-page-area .btn-register .share-link li.facebook a {
  color: #303f9f;
}
.account-page-area .btn-register .share-link li.twitter a {
  color: #2BA8E0;
}
.account-page-area .btn-register .share-link li.google a {
  color: #DC4A3D;
}
.account-page-area .btn-register .share-link li a {
  font-size: 15px;
  padding-right: 25px;
}
.account-page-area .btn-register .share-link li a i {
  margin-right: 8px;
}
.account-page-area .btn-register .share-link li a:hover {
  color: #d32f2f;
}
.account-page-area .register .btn-register {
  margin: 35px 0 0;
}
.account-page-area .register .form-group {
  margin-bottom: 21px;
}
.account-page-area .register .form-group:last-child {
  margin-bottom: 0;
}
.account-page-area .register .form-group .btn-send {
  background: #d32f2f;
}
.account-page-area .register .form-group .btn-send:hover {
  background: #101010;
}
.checkbox label {
  font-size: 12px;
}
.checkbox label:after,
.radio label:after {
  content: '';
  display: table;
  clear: both;
}
.checkbox .cr,
.radio .cr {
  position: relative;
  display: inline-block;
  border: 1px solid #a9a9a9;
  border-radius: .25em;
  width: 1.3em;
  height: 1.3em;
  float: left;
  margin-right: .5em;
}
.radio .cr {
  border-radius: 50%;
}
.checkbox .cr .cr-icon,
.radio .cr .cr-icon {
  position: absolute;
  font-size: .8em;
  line-height: 0;
  top: 50%;
  left: 20%;
}
.radio .cr .cr-icon {
  margin-left: 0.04em;
}
.checkbox label input[type="checkbox"],
.radio label input[type="radio"] {
  display: none;
}
.checkbox label input[type="checkbox"] + .cr > .cr-icon,
.radio label input[type="radio"] + .cr > .cr-icon {
  opacity: 0;
  transition: all 0.3s ease-in;
}
.checkbox label input[type="checkbox"]:checked + .cr > .cr-icon,
.radio label input[type="radio"]:checked + .cr > .cr-icon {
  transform: scale(1) rotateZ(0deg);
  opacity: 1;
}
.checkbox label input[type="checkbox"]:disabled + .cr,
.radio label input[type="radio"]:disabled + .cr {
  opacity: .5;
}
/* ------------------------------------
30.Scroll To Css Start Here 
---------------------------------------*/
#return-to-top {
  position: fixed;
  bottom: 30px;
  right: 20px;
  background: #d32f2f;
  width: 50px;
  height: 50px;
  display: block;
  text-decoration: none;
  display: none;
  -webkit-transition: all 0.3s linear;
  -moz-transition: all 0.3s ease;
  -ms-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease;
  cursor: pointer;
  text-align: center;
  overflow: hidden;
}
#return-to-top:before {
  transition: all 0.3s cubic-bezier(0.37, 0.31, 0.2, 0.85) 0s;
}
#return-to-top:hover::before {
  top: -60px;
}
#return-to-top::before {
  bottom: 0;
  content: "\f106";
  font-family: FontAwesome;
  font-size: 20px;
  left: 0;
  line-height: 60px;
  margin: auto;
  position: absolute;
  right: 0;
  text-align: center;
  top: -5px;
  color: #ffffff;
}
#return-to-top:hover {
  background: #ad1f1f;
}
#return-to-top:hover span {
  top: -6px;
}
#return-to-top span {
  bottom: 0;
  left: 0;
  line-height: 60px;
  margin: auto;
  position: absolute;
  right: 0;
  text-align: center;
  top: 60px;
  color: #ffffff;
  transition: all 0.3s cubic-bezier(0.37, 0.31, 0.2, 0.85) 0s;
}
.tickers {
  background: #101010;
}
.tickers span {
  color: #fff;
}
.tickers span:hover {
  color: #d32f2f;
}
.tickers .owl-nav {
  position: absolute;
  text-align: right;
  top: 10px;
  right: 0px;
  line-height: 22px;
  width: 53px;
}
.tickers .owl-nav .owl-prev {
  float: left;
  background: #d32f2f;
  color: #fff;
  padding: 2px 10px;
}
.tickers .owl-nav .owl-prev:hover {
  color: #101010;
}
.tickers .owl-nav .owl-next {
  float: right;
  background: #d32f2f;
  color: #fff;
  padding: 2px 10px;
}
.tickers .owl-nav .owl-next:hover {
  color: #101010;
}
/* ------------------------------------
31.Sticky Menu To Css Start Here 
---------------------------------------*/
.sticky-header {
  left: 0;
  padding: 0;
  position: fixed;
  right: 0;
  top: 0;
  transform: translateY(0px);
  transition: all 1s ease 0s;
  width: 100%;
  background: #<?php echo $menuRenk; ?>;
  z-index: 9999;
  border: none;
  box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.2);
}
.sticky-header .search .search-icon {
  padding: 13px 0;
}
.sticky-header .search .search-icon i {
  margin-top: 0;
}
.icon-bar {
  background: #ffffff;
  height: 2px;
}
/* ------------------------------------
32.Preloader CSS Css Start Here 
---------------------------------------*/
.preloader {
  background-color: #<?php echo $preloaderArkaplan; ?>;
  height: 100%;
  width: 100%;
  position: fixed;
  margin-top: 0px;
  top: 0px;
  z-index: 9999999;
}
.sk-cube-grid {	
  width: 60px;
  height: 60px;
  margin: 40px auto;
  top: 50%;
  position: absolute;
  left: 50%;
  transform: translate(-50%, -50%);
  -webkit-transform: translate(-50%, -50%);
  -mz-transform: translate(-50%, -50%);
  -o-transform: translate(-50%, -50%);
}
.sk-cube-grid .sk-cube {
	border-radius:50%;
  width: 33.33%;
  height: 33.33%;
  background-color: #<?php echo $ikonRenk; ?>;
  float: left;
  -webkit-animation: sk-cubeGridScaleDelay 1.3s infinite ease-in-out;
  animation: sk-cubeGridScaleDelay 1.3s infinite ease-in-out;
}
.sk-cube-grid .sk-cube1 {
  -webkit-animation-delay: 0.2s;
  animation-delay: 0.2s;
}
.sk-cube-grid .sk-cube2 {
  -webkit-animation-delay: 0.3s;
  animation-delay: 0.3s;
}
.sk-cube-grid .sk-cube3 {
  -webkit-animation-delay: 0.4s;
  animation-delay: 0.4s;
}
.sk-cube-grid .sk-cube4 {
  -webkit-animation-delay: 0.1s;
  animation-delay: 0.1s;
}
.sk-cube-grid .sk-cube5 {
  -webkit-animation-delay: 0.2s;
  animation-delay: 0.2s;
}
.sk-cube-grid .sk-cube6 {
  -webkit-animation-delay: 0.3s;
  animation-delay: 0.3s;
}
.sk-cube-grid .sk-cube7 {
  -webkit-animation-delay: 0.0s;
  animation-delay: 0.0s;
}
.sk-cube-grid .sk-cube8 {
  -webkit-animation-delay: 0.1s;
  animation-delay: 0.1s;
}
.sk-cube-grid .sk-cube9 {
  -webkit-animation-delay: 0.2s;
  animation-delay: 0.2s;
}
@-webkit-keyframes sk-cubeGridScaleDelay {
  0%,
  70%,
  100% {
    -webkit-transform: scale3D(1, 1, 1);
    transform: scale3D(1, 1, 1);
  }
  35% {
    -webkit-transform: scale3D(0, 0, 1);
    transform: scale3D(0, 0, 1);
  }
}
@keyframes sk-cubeGridScaleDelay {
  0%,
  70%,
  100% {
    -webkit-transform: scale3D(1, 1, 1);
    transform: scale3D(1, 1, 1);
  }
  35% {
    -webkit-transform: scale3D(0, 0, 1);
    transform: scale3D(0, 0, 1);
  }
}
