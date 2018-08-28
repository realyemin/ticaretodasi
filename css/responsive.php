<?php header("Content-type: text/css; charset: UTF-8"); ?>
<?php include("../config/config.php"); ?>
/* Extra Large Devices, Wide Screens */

@media only screen and (max-width: 1199px) {
    .header-top-area .header-top-left ul li{
    	margin-right: 20px;
    }
    .blog-page-area li p {
	    font-size: 12px;
	    line-height: 20px;
	    margin: 0;
	}
	.team-page-area .single-member-area .cl-single-member .overlay .short-desc{
		font-size: 12px;
		line-height: 18px;
	}
	.team-page-area .single-member-area .cl-single-member .overlay{
		padding-left: 12px;
		padding-right: 12px;
	}
	.carousel-news .next-prev-top .next-prev{
		text-align: left;
		padding: 0;
	}
	.single-blog-page-area .share-section ul.share-link li{
		margin-right: 4px;
	}
	.hot-news .related h4{
		padding:4px 0;
	}
	.blog-page-area li h3 a {
	    line-height: 20px;
	}
	.blog-page-area li h3 {
	    font-size: 14px;
	    margin: 0;
	}
	.gallery-page .margin-top {
    	margin-top: -130px;
	}
	.slider-right ul li .right-image img{
		min-height: auto;
	}
	.paddimg-left-none {
    	padding-left: 15px;
	}
	.tab-home .nav-tabs li a {
	    font-size: 13px;
	    padding: 0 14px;
	}
	.sidebar-latest .like-box ul li span{
		font-size: 11px;
	}
	.sidebar-latest .like-box ul li {
	    width: 32.3%;
	}
	.ticker-cont li{
		margin-left: 25px;
	}
	.ticker-cont li a span br{
		display: none;
	}
	.sidebar-latest .like-box ul li a{
		width: auto;
	}
	.slider-right ul li{
		margin-bottom: 13px;
	}
	.title-bg{
		font-size: 17px;
	}
	.sidebar-area .like-box-area ul li a{
		font-size: 12px;
	}
	.sidebar-area .recent-post-area .news-post li h4{
		line-height: 17px;
	}
	.sidebar-area ul li h4 {
    	padding-top: 8px !important;
	}
	.ticker-head{
		padding: 10px;
	}
	.sidebar-latest .popular-related h4 {
	    padding: 2px 0 0 !important;
	}
	.sidebar-latest .news-arrow-left, .sidebar-latest .news-arrow-right{
		width: 23px;
	}
	.header-bottom-area .main-menu ul li a{
		padding: 16px 5px;
		font-size: 11px;
	}
	#top-news-slider {
	    line-height: 29px;
	}
	.header-bottom-area .mega.sub-menu {
	    left: -49px;
	    width: 940px;
	}
}

/* Large devices (desktops, 991px and up) */

@media only screen and (min-width:991px) and (max-width: 1199px) {
    .header-bottom-area .main-menu ul li{
    	padding: 0;
    }
}

/* Medium devices (tablets, 768px and up) */

@media only screen and (min-width:768px) and (max-width: 991px) {
	.header-middle-area .logo-area{
		padding: 0 0 0;
	}
    .slider-area .slider-1 h1,
    .slider-area .slider-2 h1 {
        font-size: 48px;
        letter-spacing: 2px;
    }
    .slider-area .slider-1 div.title2,
    .slider-area .slider-2 div.title2 {
        padding: 0 12%;
    }
    .slider-area .slider-1 div.slider-botton ul li.acitve a,
    .slider-area .slider-1 div.slider-botton ul li a,
    .slider-area .slider-2 div.slider-botton ul li.acitve a,
    .slider-area .slider-2 div.slider-botton ul li a {
        padding: 10px 30px;
    }
    .sidebar-latest .newsletter-info form .btn-send{
    	width: 100%;
    	position: static;
    	margin-top: 10px;
    }
    .tab-home .tab-bottom-content .col-sm-3{
    	margin-bottom: 15px;
    }
    .title-bg{
		font-size: 15px !important;
	}
	.sidebar-latest .news-arrow-left, 
	.sidebar-latest .news-arrow-right{
		width: 22px;
		height: 22px;
		line-height: 22px;
	}

	.carousel-news .next-prev-top .next-prev .news-control{
		height: 20px;
		width: 20px;
		line-height: 17px;
	}
	.home .carousel-news .next-prev-top .next-prev{
		padding: 0px;
		text-align: left;
	}
	 .sidebar .categories-home ul li {
    	font-size: 12px;
    }
}

@media only screen and (max-width: 991px) {
	.menu-area .row > div[class*="col-"] {
		width: 100%;
	}
	.main-menu{
		padding: 0;
		height: 400px;
		background: #<?php echo $menuRenk; ?>; /*menu arkaplan */
	}
	.header-bottom-area{
		background: #<?php echo $menuRenk; ?>;
		border: 0;
	}
	.navbar-header{
		width: 100%;
	}
	.category-page .carousel .dsc{
		top:35%;
	}
	.category-page .blog-image{
		max-width: 100% !important;
	}
	.header-bottom-area .mega.sub-menu .col-md-3{
		float: none;
	    padding: 10px 38px 17px;
	    width: 100%;
	}
	.header-bottom-area .mega.sub-menu{
		left: 0;
		width: 100%;
	}
	.header-bottom-area .main-menu ul li ul{
		background: #<?=$altMenuRenk ?>;
	}
	.category-page .blog-image img{
		width: 100%;
	}
	.main-menu li{
		float: none;
		border-bottom: 1px solid #cccccc;
		display: block !important;
		padding: 0 !important;
	}
	.main-menu li:last-child{
		border-bottom: none;
	}
	.main-menu li a{
		padding: 8px 20px;
	}

	.header-bottom-area .main-menu ul li ul, 
	.header-bottom-area .main-menu ul li{
		width: 100%;
	}
	.header-bottom-area .main-menu ul li ul{
		border: none;
		box-shadow: none;
		position: relative;
	}
	.header-bottom-area .col-sm-12{
		padding: 0;
	}
	.header-bottom-area .main-menu ul li ul{
		opacity: 0 !important;
		display: none;
	}
	.header-bottom-area .main-menu ul li:hover ul{
		display: none;
	}
	.navbar-toggle {
	    display: block;
	}
	.navbar-collapse {
	    border-top: 1px solid transparent;
	    box-shadow: inset 0 1px 0 rgba(255,255,255,0.1);
	}
	.navbar-collapse.collapse {
		display: none !important;
	}
	.navbar-collapse.collapse.in {
		display: block !important;
	}

	.tab-home .tab-top-content img{
		width: 100%
	}
	 .home .hot-news .news-post2.related li > .item-post{
    	margin-bottom: 25px;
    }
	.trending-news .list-col img{
		width: 100%;
	}
	.trending-news .news-post{
		margin-top: 20px;
	}
	.trending-news .news-post li img{
		width: 100%;
	}
	.sidebar ul li .content{
		padding-right: 10px;
	}
	.sidebar ul li .category-btn{
		top:10px;
	}
	.sidebar-latest .newsletter-info form h4{
		font-size: 16px;
	}
	.tab-home .nav-tabs li a {
	    padding: 0 7px;
	}
	.sidebar-latest .like-box ul li {
    	width: 49%;
	}
	.like-box{
		text-align: center;
	}
	.sidebar-latest .like-box ul li:first-child{
		margin-bottom: 3px;
	}
	.sidebar-latest .like-box ul .last{
		margin-top: 3px;
	}
 	.mobile-menu-area {
    	display: block;
	}
	.tab-bottom-content .col-sm-3{
		text-align: center;
		width: 50%;
	}
	.tab-top-content .col-sm-6{
		width: 100%;
		text-align: center;
	}
	
	.tab-top-content .paddimg-right-none{
		padding-right: 15px;
	}
	.tab-top-content .col-sm-6{
		width: 100%;
	}
	.mean-container .mean-nav ul li a:hover {
        color: #d32f2f;
    }
    .header-bottom-area .main-menu ul li{
    	padding: 22px 4px;
    }
    .mean-container{
    	width: 100%;
    	padding: 0;
    }
    .hidden-mobile{
    	display: none;
    }
    .hidden-desktop{
    	display: block;
    }
    .navbar-toggle{
    	padding-left: 15px;
    }
    .header-bottom-area .search .search-icon i {
	  margin-top: 10px;
	}
	.header-bottom-area .search .search-box{
		top: 9px;
	}
    .navbar-toggle{
    	float: left !important;
    }
    .header-top-area .header-top-left ul li{
    	margin-right: 10px;
    	font-size: 12px;
    }
    .header-middle-area .logo-area{
		padding: 0 0 25px;
	}
	.footer-top-area .single-footer p{
		font-size: 13px;
	    line-height: 20px;
	    margin: 0 0 0 0px !important;
	}
	.blog-page-area li .col-sm-6{
		width: 100%;
	}
	.blog-page-area li{
		border: none;
	}
	.gallery-page .margin-top {
    	margin-top: -100px;
	}
	.gallery-page .margin-top2 {
    	margin-top: -58px;
	}
	.error-page-area .container .erroe-404 h2{
		font-size: 180px;
	}
	.error-page-area .container p{
		padding: 0 20px;
	}
	.slider-right ul li .right-content h3 {
	    font-size: 14px;
	    line-height: 22px;
	    margin:0;
	    padding: 0;
	}
	/*.all-news-area .col-sm-8{
		width: 100%;
		float: none;
	} */
	.tab-home .tab-content .tab-bottom-content{
		border: none;
	}
	.trending-news .list-col, .trending-news .news-post li, .hot-news .news-post li{
		border: none;
		/*.text-align: center; */
	}
	.hot-news .news-post li{
		padding: 15px 0;
	}
	.home .carousel-inner .item{
		text-align: center;
		padding-bottom: 2px;
	}
	.home .carousel-news .item a, .home .carousel-news .trending-news a{
		display: inline-block;
	}

	.hot-news .news-post2 .item-post .content{
		border: none;
	}
	.hot-news .related .item-post{
		border: none;
	}
	.carousel-news .item, .carousel-news .trending-news{
		border: none;
	}
	.related li{
		margin: 0;
	}
	.text-right{
		text-align: right;
	}
	.contact-page-area .col-md-4, .single-blog-page-area .col-md-4{
    	width: auto;
	}
	.category-page li .blog-image{
		max-width: 370px;
	}
	.category-page .sidebar-area{
		margin-top: 25px;
	}
	.hot-news .news-post li {
	    float: none;
	    width: 48%;
	    display: inline-block;
	    vertical-align: top;
	}
	.hot-news .news-post li{
		padding: 0;
	}
	.sidebar-area ul li h4 {
    	padding-top: 0 !important;
	}
	.contact-page-area .location-area ul {
	    padding: 30px 0 0;
	}
	.account-page-area .btn-register .share-link li a {
	    font-size: 14px;
	    padding-right: 7px;
	}
	.account-page-area .checkbox label{
		padding-left: 0;
		font-size: 12px;
	}
	.header-bottom-area{
		display: block;
	}
	.like-section .col-sm-4{
		width:33.33%;
		max-width: 100%;
	}
	.single-blog-page-area ul li {
    	margin-left: 0;
	}
	.single-blog-page-area ul li i{
		padding-right: 0;
	}
	.single-blog-page-area .share-section2 .row ul li a{
		font-size: 9px;
	}
	.home .hot-news .news-post li {
	    float: none;
	    width: 100% !important;
	    padding: 15px;
	}
    .home .hot-news .news-post2 li{
    	padding: 0px;
    }


	.home .sidebar-latest .like-box ul li{
		width: 100%;
	}

	.home .hot-news .news-post2 .item-post{
		padding: 0px !important;
	}

	.home .hot-news .news-post2.related li:first-child > .item-post{
		margin-bottom: 20px;
	}

	.home .popular-related li{
		display: inline-block;
	    float: none;
	    width: 49% !important;
	    padding: 20px 0 12px;
	}
	
	.home .hot-news .news-post .content h4{
		font-size: 17px;
	}
	.home .hot-news .related .item-post {
	    padding: 20px 0 15px;
	}
	.home .sidebar-latest .next-prev{
		padding: 0;
		left: 0;
	}
	.home .view-area .col-sm-8{
		float: left;
		width: 66%;
	}
	.has:before{
        font-family: FontAwesome;
        content: "\f067";
        top: 10px;
	    right: 27px;
	    position: absolute;
	}
	.has.active:before{
        font-family: FontAwesome;
        content: "\f068";
        top: 10px;
	    right: 27px;
	    position: absolute;
	}
	.has i{
		display: none;
	}

	.header-bottom-area ul li.active .sub-menu{
		opacity: 1 !important;
		display: block !important;
		transform: scaleY(1) !important;
		visibility: visible !important;
	}
	.header-bottom-area ul> li> ul.sub-menu{
		overflow: auto;
	}
	.header-bottom-area .main-menu ul li ul{
		background: #<?php echo $altMenuRenk; ?>;
	}
	.header-bottom-area .main-menu ul li ul li a:hover{
		padding-left: 20px;
	}
	.navbar-header{
		background: #000000;
	    position: absolute;
	    top: 0;
	    z-index: 99;
	}
	.main-menu{
		margin-top: 50px;
	}
	.navbar-toggle{
		margin-top: 8px;
	}
	#sticky .container{
		width: 100%;
	}
	.header-bottom-area .search .search-icon i{
		background: #d32f2f;
	    color: #ffffff;
	    margin-right: 15px;
	    margin-top: 9px;
	    padding: 8px 14px;
	    position: relative;
	    z-index: 9999;
	}
	.sticky-header .search .search-icon {
    	padding: 0;
	}
	.banner img{
		height: 250px;
	}
	.footer-two ul li .col-xs-8 span{
		font-size: 12px;
	}
	.single-team-page-area .single-experience .experience-2::after, .single-team-page-area .single-experience .experience-1 .inner::after{
		opacity: 0;
	}
	.header-bottom-area .main-menu ul li ul li ul{
		opacity: 1 !important;
		display: block !important;
		transform: scaleY(1) !important;
		visibility: visible !important;
	}
	.header-bottom-area .main-menu ul li ul li ul li{
		display: block !important;
	}
	.header-bottom-area .main-menu ul li ul li ul{
		position: relative !important;
		opacity: 1 !important;
		visibility: visible !important;
		left: 0;
		padding: 0;
		border: none;
	}
	.header-bottom-area .main-menu ul li ul li.has:before{
		opacity: 0;
	}
	.header-bottom-area .main-menu ul li ul li a i{
		display: none;
	}
	.header-bottom-area .main-menu ul li ul li ul{
		background: #ddd;
	}
	.header-bottom-area .main-menu ul li ul li ul li a {
	    padding: 8px 40px;
	}
	.padding-0{
		padding: 0;
	}
	.slider-area .slider-2 div.slider-botton ul li .comment, .slider-area .slider-1 div.slider-botton ul li .comment{
		display: inline-block;
	}
}

@media only screen and (min-width: 767px) {
	.right-images{
		float: right;
	}
}

/* Small devices (landscape phones, less than 768px) */

@media only screen and (max-width: 767px) {
	ul.news-feature-mb h4{
		padding-top: 0 !important;
	}
	.tab-area{
		padding: 0;
		text-align: left;
	}
	.header-bottom-area .search .search-icon i{
		margin-right: 0;
	}
	.news-post2.around-news .blog-image img{
		width: 100%;
	}
    .sidebar-area ul li h4{
    	padding-top: 15px !important;
    }
    .carousel-news .next-prev-top .next-prev {
    padding: 0 20px 0 0;
    text-align: right;
	}
	.footer-two ul li .col-xs-8{
		text-align: left;
	}
	.category-page .carousel .dsc h3 a{
		font-size: 16px;
	}
	.tab-bottom-content{
		padding-top: 0 !important;
		padding-bottom: 0 !important;
	}
	.category-page .carousel-top-category .next-prev{
		top: 80% !important;
	}
	.tab-bottom-content .img-tab img{
		margin-bottom: 0;
	}
	.tab-area .img-content{
		text-align: left;
		padding-left: 15px !important;
		padding-top: 15px;
	}
	.single-experience .row .experience{
		width: 100%;
		float: none;
	}
	.hot-news.popular-related h4 a br{
		display: none;
	}
	.ticker-head{
		position: relative;
	}
	.header-top-area .social-media-area ul {
    	text-align: center;
	}
	.header-top-area{
    	text-align: center;
    }
    .team-page-area .single-member-area .cl-single-member figure img{
    	width: 100%;
    }
    .header-top-area .social-media-area ul {
    	text-align: center;
	}
	.contact-page-area .col-md-4, .single-blog-page-area .col-md-4{
    	width: 100%;
	}
	.team-page-area .single-member-area .cl-single-member .overlay .social-icons a {
	    padding: 10px;
	}
	.team-page-area .single-member-area .cl-single-member .overlay .social-icons a.google-plus {
    	padding: 10px 7px;
	}
	.team-page-area .single-member-area .cl-single-member .overlay .social-icons a.facebook {
    	padding: 10px 12px;
	}
	.account-page-area .border{
		border: none;
		padding: 0 20px;
	}
	
	.header-middle-area .logo-area{
		padding: 0 0 25px;
		text-align: center;
	}
	.inner-page-header .header-page-title h1 {
	    font-size: 20px;
	    margin: 0;
	}
	.inner-page-header{
		text-align: center;
	}
	.gallery-page .margin-top {
    	margin-top:0px;
	}
	.gallery-page .margin-top2 {
    	margin-top: 0px;
	}
	.col-xs-offset-1{
		margin: 0;
	}
	.inner-page-header .header-page-subtitle p {
	    font-size: 12px;
	    line-height: 18px;
	    margin: 0;
	}
	.ab-count .wow{
		padding-bottom: 30px;
	}
	.ab-count .wow:last-child{
		padding-bottom: 0;
	}
	
	.sticky-header{
		padding: 0;
	}
	
	.inner-page-header{
		margin-top: -1px;
	}
	
	.project-activation-area {
	    padding: 50px 0 25px;
	}
	.footer-top-area .footer-two ul li .col-sm-5 img{
		max-width: 100%;
		width: auto;
		margin-bottom: 20px;
	}
	.footer-top-area .single-footer .footer-social-media-area ul{
		text-align: center;
	}
	.footer-top-area .single-footer h3{
		margin-bottom: 0;
	}
	.footer-top-area .col-sm-4{
		padding-bottom: 25px;
	}
	.footer-top-area{
		text-align: center;
	}
	.footer-top-area .single-footer h3, .footer-top-area .footer-two ul li{
		box-shadow: none;
	}
	.footer-top-area .footer-two ul li{
		display: inline-block;
	}
	.footer-top-area .single-footer .footer-social-media-area {
    	padding-top: 20px;
	}
	.footer-logo{
		padding-bottom: 20px;
	}
	.footer-top-area .single-footer p {
	    font-size: 15px;
	    line-height: 30px;
	    margin: 0 !important;
	}
	.footer-three h3, .footer-two h3{
		padding-bottom: 25px !important;
	}
	.footer-top-area .col-sm-4{
		border-bottom:1px solid;
		margin-bottom: 25px;
	}
	.footer-top-area .col-sm-4:last-child{
		border-bottom: none;
		margin-bottom: 0;
	}
	.footer-top-area .footer-two ul li:hover .col-sm-5::after{
		opacity: 0;
		position: relative;
	}
	.footer-top-area {
	    padding: 50px 0 20px;
	}
	.blog-page-area li{
		text-align: center;
	}
	.blog-page-area li .blog-image img{
		width: 100%;		
	}
	.blog-page-area li .blog-image{
		margin-bottom: 20px;
	}
	.pagination-area ul li a{
		width: 30px;
		height: 40px;
		line-height: 40px;
	}
	.pagination-area ul li:nth-child(4) a {
    	line-height: 30px;
	}
	.pagination-area {
	    max-width: 211px;
	}
    .slider-area .slider-1 h1,
    .slider-area .slider-2 h1 {
        font-size: 20px;
        letter-spacing: 0px;
        text-align: center;
    }
    .slider-area .slider-1 div.title2,
    .slider-area .slider-2 div.title2,
    .related-product-area .single-product-store::after {
        padding: 0 5%;
        display: none;
    }
    .slider-area .slider-1 div.slider-botton ul li.acitve a,
    .slider-area .slider-1 div.slider-botton ul li a,
    .slider-area .slider-2 div.slider-botton ul li.acitve a,
    .slider-area .slider-2 div.slider-botton ul li a {
        padding: 7px 20px;
        font-size: 14px
    }
    .nivo-caption a{
    	display: inline-block !important;
    }
    .slider-botton{
    	text-align: center !important;
    }
    .slider-botton li{
    	float: none;
    	display: inline-block !important;
    	margin: 0 !important;
    }
    .slider-botton li a{
    	display: block !important;
    	margin: 0 !important;
    }
    .slider-botton .date{
    	margin: 10px 0 0;
    	padding: 0;
    }
    .slider-botton .date i{
    	padding-left: 0 !important;
    }
    .slider-botton{
    	margin-top: 50px !important;
    }
    .team-page-area .row .col-sm-6{
    	max-width: 399px;
    	margin: 0 auto;
    }
    .team-page-area .single-member-area .cl-single-member .overlay .short-desc {
	    font-size: 12px;
	    line-height: 18px;
	}
	.team-page-area .single-member-area .cl-single-member .overlay h3{
		margin: 8px 0;
	}
	.team-page-area .single-member-area .cl-single-member .overlay .social-icons {
    	padding-top: 16px;
	}
	.team-page-area .single-member-area .cl-single-member .overlay{
		padding: 45px 10px 55px;
	}
	.testimonial-page-area .container li .author-name{
		top: -18px;
		left: 0;
	}
	.slider-right ul li {
	    margin-bottom: 0;
	    text-align: center;
	    max-width: 390px;
	    margin: 20px auto 0;
	}
	.single-blog-page-area .author-comment ul li:nth-child(2) {
    	margin-left: 0;
	}

	.sidebar-area .recent-post-area .news-post li {
	    padding: 15px 0;
	}
	.recent-post-area{
		text-align: center;
	}

	.sidebar-area .recent-post-area .news-post li h4{
		line-height: 22px;
		font-size: 15px;
		clear: both;
	}
	.category-page .trending-post-area{
		text-align: center;
	}
	.add{
		text-align: center;
	}
	.category-page .sidebar-area .like-box-area ul li a .like-page{
		text-align: left;
	}
	.category-page .sidebar-area .like-box-area ul li a{
		float: left;
	}
	.slider-right ul li .right-content {
    	bottom: 40px;
    	left: 0;
	}
	.trending-news .news-post li{
		margin-top: 25px;
		margin-bottom: 0;
		padding: 0px 0 0px;
	}
	.trending-news .news-post li h4 {
	    clear: both;
	    margin: 0;
	    padding: 10px 0 6px;
	}
	.home .hot-news .news-post li{
		width: 100%;
		float: none;
		padding: 20px;
	}

	.home .hot-news.popular-related .news-post li{
		padding: 0px;
	}
	.home .hot-news .news-post .content h4{
		clear: both;
	}
	.sidebar-latest .next-prev {
	    left: 0;
	    padding-right:15px !important;
	    text-align: right;
	}
	.home .hot-news .related .item-post{
		margin-bottom: 25px;
	}
	.home .hot-news .news-post2 li{
		margin: 0;
		padding:0;
	}
	.home .hot-news .related .item-post{
		margin: 25px 0 0;
	}
	.home #news-Carousel2{
		padding-top: 30px;
	}
	.home .related{
		padding-bottom: 30px;
	}
	.about .home-activities-area{
		padding-top: 30px;
	}
	.about .home-page-core-activities-area img{
		width: 100%;
	}
	.about .about-featured{
		padding-top: 0px;
	}

	.sidebar-area .recent-post-area .news-post li{
		margin-bottom: 0;
	}
}

@media only screen and (max-width: 669px) {
	.single-videos .images img{
		width: 100%;
	}
	.single-videos .images .videos-icon img{
		width: auto;
	}
}

@media only screen and (max-width: 600px) {
	.text-right{
		text-align: center;
	}
	
	.slider-area .slider-2 .title-container, .slider-area .slider-1 .title-container{
		padding-left: 0;
	}
	.tab-bottom-content .col-sm-3 {
	    width: 100%;
	}
	.category-page .carousel .dsc h3 a {
    	font-size: 14px;
	}
	.category-page .carousel .dsc h3{
		margin-bottom: 0;
		padding-bottom: 0;
	}
	.trending-post-area{
		text-align: center;
	}
	.category-page .carousel .dsc {
    	top: 6%;
	}
	.error-page-area .container .erroe-404 h2 {
    	font-size: 90px;
	}
	.error-page-area .container .erroe-404 h2{
	    line-height: 80px;
	}

	.hot-news .news-post .content h4{
		font-size: 13px;
	}
	.like-section .col-sm-4{
		width:100%;
		margin-bottom: 18px;
	}
	.single-blog-page-area .author-comment h3 {
	    margin: 18px 0 10px;
	}
	.single-blog-page-area ul li {
    	margin-left: 0;
	}
	.single-blog-page-area .author-comment ul li {
	    margin:0;
	    padding: 20px 0px;
	}
	.hot-news .news-post li {
	    float: none;
	    width: 100%;
	}
	.single-blog-page-area .share-section ul.share-link li {
	    margin: 0 8px 0 0;
	}
	.home .popular-related li{
		width: 100% !important;
		float: none !important;
	}
	.home .tab-bottom-content .col-sm-3{
		margin-bottom: 25px;
	}
	.tab-home .nav-tabs li{
		float: none;
		margin: 0 0 10px;
	}
	.tab-home .nav-tabs li:first-child{
		float: none;
		margin-bottom: 25px;
	}
	.tab-top-content .paddimg-right-none {
    	padding-right: 15px;
	}
}

@media only screen and (min-width:580px) and (max-width: 767px) {
	.home #news-Carousel .item,
	.home #news-Carousel2 .item{
		overflow: hidden;
	}
	.home #news-Carousel .item > a,
	.home #news-Carousel2 .item > a{
		float: left;
		width: 48%;
	}
	.home #news-Carousel .item .dsc,
	.home #news-Carousel2 .item .dsc{
		float: right;
		width: 50%;
		padding-top: 15px;
		text-align: left;
	}

	.home #news-Carousel .item img, .home #news-Carousel .trending-news img,
	.home #news-Carousel2 .item img, .home #news-Carousel2 .trending-news img{
		margin-bottom: 0px;
	}
}


/* Extra Small Devices, Phones */

@media only screen and (max-width: 480px) {
   	.footer-top-area .footer-three ul li{
   		width: 46%;
   	}

   	ul.news-feature-mb .col-xs-8,
   	ul.news-feature-mb .col-xs-4{
   		width: 100%;
   		float: none;
   	}
   	ul.news-feature-mb .col-xs-4 img{
   		width: 100%;
   		margin-bottom: 20px;
   	}

    .slider-area .slider-1 h1,
    .slider-area .slider-2 h1 {
        font-size: 13px;
        letter-spacing: 0px;
    }
    .slider-area .slider-1 div.title2,
    .slider-area .slider-2 div.title2,
    .related-product-area .single-product-store::after {
        padding: 0 5%;
        display: none;
    }
    .slider-area .slider-1 div.slider-botton ul li.acitve a,
    .slider-area .slider-1 div.slider-botton ul li a,
    .slider-area .slider-2 div.slider-botton ul li.acitve a,
    .slider-area .slider-2 div.slider-botton ul li a {
        padding: 5px 5px;
        font-size: 12px
    }
    .slider-botton{
    	margin-top: 20px !important;
    }
    .hot-news .featured .blog-content h4{
    	font-size: 14px;
    }
    .hot-news .featured .blog-content{
    	left: 14px;
    	font-size: 14px;
    }
    .tab-home .tab-content h3{
    	font-size: 15px;
    }
    .trending-news .news-post li h4{
    	padding: 4px 0 0;
    }
    .footer-top-area .footer-two ul li .col-xs-4{
    	width: 100%;
    	text-align: center;
    }
    .footer-top-area .footer-two ul li .col-xs-8{
    	width: 100%;
    	text-align: center;
    }
}

/* Custom, iPhone Retina */

@media only screen and (max-width: 320px) {
   
    .slider-area .slider-1 h1,
    .slider-area .slider-2 h1 {
        font-size: 13px;
        letter-spacing: 0px;
    }
    .slider-area .slider-1 div.title2,
    .slider-area .slider-2 div.title2,
    .related-product-area .single-product-store::after {
        padding: 0 5%;
        display: none;
    }
    .slider-area .slider-1 div.slider-botton ul li.acitve a,
    .slider-area .slider-1 div.slider-botton ul li a,
    .slider-area .slider-2 div.slider-botton ul li.acitve a,
    .slider-area .slider-2 div.slider-botton ul li a {
        padding: 5px 8px;
        font-size: 12px
    }
}
