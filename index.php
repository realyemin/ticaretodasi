<?php //error_reporting(0); ?>
<?php include('fonksiyonlar/php/turkceTarih.php'); ?>
<?php include("config/config.php"); ?>
<?php include("Connections/baglantim.php"); ?>
<?php include('fonksiyonlar/php/dilAyar.php'); ?>
<?php include('fonksiyonlar/php/yaziBol.php'); ?>
<?php include('fonksiyonlar/php/hitAyar.php'); ?>
<?php include('fonksiyonlar/php/oncekiSonrakiHaber.php'); ?>
<?php include('fonksiyonlar/php/GetIP.php'); ?>
<?php include('fonksiyonlar/php/linkOlustur.php'); ?>
<?php include('fonksiyonlar/php/ziyaretKaydi.php'); ?>
<?php $genelAyarlarDB=$db->query("SELECT * FROM genel WHERE dil='".$_SESSION['dilSec']."'")->fetch(); ?>
<?php ob_start(); ?>
<!DOCTYPE HTML>
<html class="no-js" lang="en-US">
	<head>
		<meta charset='utf-8'/>
		<!-- base for url rewrite -->
		<base href ='http://<?php echo $_SERVER['SERVER_NAME']; ?>/'>
		<!-- klasör içinde koyulacaksa $_SERVER['SERVER_NAME']./ticaretHane/ -->
		<!-- base for url rewrite -->
		
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title><?php echo $genelAyarlarDB['siteadi']; ?></title>
		<meta name="keywords" content="<?php echo $genelAyarlarDB['anahtar'];?>">
		<meta name="description" content="<?php echo $genelAyarlarDB['anahtar'];?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">   
		<link rel="shortcut icon" type="image/x-icon" href="images/fav.png">
		<!-- Place favicon.ico in the root directory -->
		<!-- all css here -->
		
		<!-- bootstrap v3.3.6 css -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- font-awesome css -->
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- animate css -->
		<link rel="stylesheet" href="css/animate.css">
		<!-- hover-min css -->
		<link rel="stylesheet" href="css/hover-min.css">
		<!-- magnific-popup css -->
		<link rel="stylesheet" href="css/magnific-popup.css">
		<!-- meanmenu css -->
		<link rel="stylesheet" href="css/meanmenu.min.css">
		<!-- owl.carousel css -->
		<link rel="stylesheet" href="css/owl.carousel.css">
		<!-- Slick css -->
		<link rel="stylesheet" href="css/slick.css">
		<!-- Slick Theme css -->
		<link rel="stylesheet" href="css/slick-theme.css">
		<!-- lightbox css for parts/galeri.php -->
		<link href="css/lightbox.min.css" rel="stylesheet">
		<!-- nivo slider CSS -->
		<link rel="stylesheet" href="inc/custom-slider/css/nivo-slider.css" type="text/css" />
		<link rel="stylesheet" href="inc/custom-slider/css/preview.css" type="text/css" media="screen" />
		<!-- style css -->
		<link rel="stylesheet" href="css/style.php">
		<!-- responsive css -->
		<link rel="stylesheet" href="css/responsive.php">
        <!-- jquery latest version -->
		<script src="js/jquery.min.js"></script>
		<!-- jquery-ui js -->
		<script src="js/jquery-ui.min.js"></script>
		<!-- bootstrap js -->
		<script src="js/bootstrap.min.js"></script>
		<!-- modernizr js -->
		<script src="js/modernizr-2.8.3.min.js"></script>   
		
		<script>
			var KAYNAK = new EventSource("config/config.php");
			
			KAYNAK.onmessage = function(event) {
				
				document.getElementById("sonuc").innerHTML += event.data + "<br>";
				
			};
		</script>
	</head>
	
	<body class="home">
				<div class="container-fluid"> 
		<?php include_once("parts/onManset.php"); ?>
		<div id="sonuc"></div>
		<!--Preloader area Start here-->
		<?php if($preloaderGoster){	include_once("parts/preloader.php"); }?>
		<!--Preloader area end here-->
		
		<!--Header area start here-->
		<header>
			<?php if($ustBilgiBarGoster){ include("parts/ustBilgiBar.php"); }?>
			<?php if($ustLogoBarGoster){ include("parts/ustLogoBar.php"); }?>			
			<?php if($ustMenuBarGoster){ include("parts/ustMenuBar.php"); }?>  
			
		</header>
		<!--Header area end here-->
		<!-- Slider Section Start Here -->

			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-0">
					<div class="wrapper">
						<!-- kayanHaber Slider -->
						<?php if($haberTicker){ include("parts/haberTicker.php"); }?>	
						<!-- kayanHaber Slider -->              
					</div>
				</div>            
				<div class="<?php if($mansetDarOrtaGoster && !$mansetDarSagGoster){ ?>col-lg-12 col-md-12 col-sm-12 col-xs-12<?php }else{?>col-lg-8 col-md-8 col-sm-8 col-xs-12 padding-0<?php }?>">
					<?php if($mansetDarOrtaGoster){ include("parts/mansetDarOrta.php"); }?>    
				</div>
				<!-- Slider Area End Here-->
				<div class="<?php if($mansetDarSagGoster && !$mansetDarOrtaGoster){ ?>col-lg-12 col-md-12 col-sm-12 col-xs-12<?php }else{ ?>col-lg-4 col-md-4 col-sm-4 col-xs-12 paddimg-left-none<?php }?>">
					<?php if($mansetDarSagGoster){ include("parts/mansetDarSag.php"); }?>   			 
				</div>
			</div>
			<!-- </div> -->
			<!-- Slider Section end Here -->
			<?php include("parts/fa-icon-list.php"); ?>
			<?php if(isset($_GET['hid'])){ include("parts/haberDetay.php"); }
				else if(isset($_GET['ara'])){ include("parts/ara.php"); }
				else if(isset($_GET['did'])){ include("parts/duyuruDetay.php"); }
				else if(isset($_GET['iid'])){ include("parts/icerikDetay.php"); }  
				else if(isset($_GET['anket'])){ include("parts/anket.php"); }  
				else if(isset($_GET['etkinlik'])){ include("parts/etkinlikDetay.php"); }  
				else if(isset($_GET['kategori'])){ include("parts/kategoriler.php"); }  
				else if(isset($_GET['haberler'])){ include("parts/tumHaberler.php"); }  
				else if(isset($_GET['duyurular'])){ include("parts/tumDuyurular.php"); }else{ ?>
				
				<?php if($mansetGenisGoster){ ?>
					<!--	<div class="container-fluid"> -->
					<!-- sadece container ile dar gösterilebilir -->
					<?php include("parts/mansetGenis.php");?>
					<!--	</div> -->
				<?php } ?> 
				
				<!-- All News Section Start Here -->
				<div class="all-news-area">
					<div class="container">
						<!-- latest news Start Here -->
						<div class="row">
							<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 tab-home">
								<?php if($haberGoster){ include("parts/haberler.php"); }?>  				 
								<!-- Trending news  here-->
								<?php if($duyuruGoster){ include("parts/duyurular.php"); }?> 
								
								<?php if($rssGoster){ include("parts/tobbRss.php"); }?> 
								<!--Start what’s hot now -->
								<?php if($hot_newsGoster){ include("parts/hot-news.php"); }?> 
								<!-- End what’s hot now -->
								<?php if($carousel_1Goster){ include("parts/carousel_1.php"); }?> 
								<?php if($carousel_2Goster){ include("parts/carousel_2.php"); }?>
								<?php if($hot_news_popular_relatedGoster){ include("parts/hot-news_popular-related.php"); }?> 
								<?php if($linkKategori3){ include("parts/linkKategori3.php");} ?>
							</div>
							<!--Sidebar Start Here -->
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 paddimg-left-none sidebar-latest">
								<!--Like Box Start Here -->
								
								<?php if($linkKategori4){ include("parts/linkKategori4.php");  } //dış bağlantı?> 
								<?php if($baskanMesajGoster){ include("parts/baskanMesaj.php"); }?> 
								<?php if($etkinlikTakvimiGoster){ include("parts/etkinlikTakvimi.php"); } ?>
								<?php if($like_boxGoster){ include("parts/like-box.php"); }?> 
								<!--Like Box End Here -->
								
								<!--Add Start Here -->
								<?php if($reklam1Goster){ include("parts/reklam1.php"); }?> 
								<!--Add Box End Here -->
								
								<!--haberBulteniGoster Start Here -->
								<?php if($haberBulteniGoster){ include("parts/haberBulteni.php"); }?>         				     
								<!--haberBulteniGoster End Here -->
								
								<!--popular Post Start Here -->
								<?php if($anketGoster){ include("parts/anketList.php"); }?>    
								<?php if($sidebar_popularGoster){ include("parts/sidebar-popular.php"); }?>    
								<?php if($hot_news_popular_relatedGoster){ include("parts/hot-news_popular-related.php"); }?>                                            
								<!--popular Post End Here --> 
								
								<!--Recent comments Start Here -->
								<?php if($recent_commentsGoster){ include("parts/recent-comments.php"); }?>   
								<!--Recent comments Start Here -->
								<!--Add Start Here -->
								<?php if($reklam2Goster){ include("parts/reklam2.php"); }?> 
								<!--Add Box End Here -->   
								<div class="sidebar">
									<?php if($featured_NewsGoster){ include("parts/Featured-News.php"); }?>                       
									<div class="categories-home separator-large3">
										<?php if($kategoriListGoster){ include("parts/kategoriList.php"); }?>
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
				
			<?php } //orta bitiş ?>
			<!-- All News Section end Here -->
			
			<!-- Footer Area Section Start Here -->
			<?php if($reklam3Goster){ include("parts/reklam3.php"); }?>
		</div>
		<footer>
			<?php if($footerGenisGoster){?> 
				<div class="footer-top-area">
					<div class="container">
						<div class="row">
							<!-- Footer footerHakkimizda Section Start Here -->
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
								<?php if($footerHakkimizdaGoster){ include("parts/footerHakkimizda.php"); }?>
							</div>
							<!-- Footer footerHakkimizda Section End Here -->
							
							<!-- Footer footerHarita Section Start Here -->
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
								<?php if($footerHaritaGoster){ include("parts/footerHarita.php"); }?>			
							</div>
							<!-- Footer footerHarita Section End Here -->
							
							<!-- Footer rastgeleGaleri Section Start Here -->
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
								<?php if($rastgeleGaleriGoster){ include("parts/rastgeleGaleri.php"); }?>
							</div>
							<!-- Footer rastgeleGaleri Section End Here -->
							</div>
						</div>
					</div>
				<?php } ?>
				<!-- Footer footerTelif Area Start Here -->
				<?php if($footerTelifGoster){ include("parts/footerTelif.php"); }?>
				<!-- Footer footerTelif Area End Here -->
			</footer>
			
			
			<!-- Start scrollUp  -->
			<div id="return-to-top">
				<span><?php echo $diller['yukariCik']; ?></span>
			</div>
			<!-- End scrollUp  -->
			
			<!-- Footer Area Section End Here -->		
			<!-- all js here -->
			<!-- jquery light box for parts/galeri.php-->
			<script src="js/lightbox.min.js"></script>
			<!-- meanmenu js -->
			<script src="js/jquery.meanmenu.js"></script>
			<!-- wow js -->
			<script src="js/wow.min.js"></script>
			<!-- Slick js -->
			<script src="js/slick.min.js"></script>
		<!-- owl.carousel js -->
		<script src="js/owl.carousel.min.js"></script>
		<!-- magnific-popup js -->
		<script src="js/jquery.magnific-popup.js"></script>		
		<!-- jquery.counterup js -->
		<script src="js/jquery.counterup.min.js"></script>
		<script src="js/waypoints.min.js"></script>		
		
		<!-- Nivo slider js -->
		<script src="inc/custom-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
		<script src="inc/custom-slider/home.js" type="text/javascript"></script>
		<!-- main js -->
		<script src="js/main.js"></script>
		<script type="text/javascript">
			<!--for ticker-->
			$(document).ready(function() {
				$("#top-news-slider").owlCarousel({ 
					loop:true,
					autoplay:true,
					autoplayTimeout:2000,
				autoplayHoverPause:true});
				
				
			});
		</script>
	</body>
</html>
<?php 
	ob_end_flush();
	ob_end_clean();
	ob_get_clean();
?>	