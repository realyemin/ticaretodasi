<?php
	/*
		-- =============================================
		-- Author		: EKOMURCU
		-- Create date	: 24.07.2018
		-- Description	: anasayfa haber detayı
		-- ============================================= 
	*/
?>
<?php if(isset($_GET['hid'])){ $haberID=base64_decode($_GET['hid']);  ?>
	<?php hitEkle('haber',$haberID); ?>
	<?php $queryHaber = $db->query("SELECT * FROM haber WHERE dil=".$dil." AND onay=1 AND id='".$haberID."'")->fetch(); ?>
	<?php $kategori=$db->query("SELECT kategoriAd FROM kategori WHERE id='".$queryHaber['kategoriID']."'")->fetch(); ?>
	<?php $kulanici=$db->query("SELECT adsoyad FROM kullanici WHERE id='".$queryHaber['kadi']."'")->fetch(); ?>
	
	<!-- Blog Single Start Here -->
	<div class="single-blog-page-area">
		<div class="container">
			<div class="row">
				
				<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
					<div class="single-image">
						<?php	if ( $queryHaber ){	?>
							<?php $yol="tcrt/haber/haber".$queryHaber['id']."_1.jpg";
							if(file_exists($yol)){ ?> <img src="<?php echo $yol; ?>">
						<?php }	?>
						<?php }	?>
					</div>
					<h2><a href="#"><?php echo $queryHaber['kisa']; ?></a></h2>
					<div class="share-section">
						<div class="row">
							<div class="col-lg-8 col-md-8col-sm-8 col-xs-12 life-style">
								<span class="admin"> <a href="#"><i class="fa fa-user-o" aria-hidden="true"></i> <?php echo $kulanici['adsoyad']; ?> </a> 
								<a href="#" title="<?php echo $diller['okunmaSayisi']; ?>"><i class="fa fa-eye" aria-hidden="true"></i> <?php echo hitGoster('haber',$haberID); ?> </a></span>
								<span class="date">
								<i class="fa fa-calendar-check-o" aria-hidden="true"></i> <?php echo turkcetarih("d F Y, l", $queryHaber['tarih']); ?> 
											
					<button class="btn btn-success btn-xs buyutkucult" id="buyuk" type="button" >+ Büyüt</button>
					&nbsp;&nbsp;
					<button class="btn btn-danger btn-xs buyutkucult" id="kucuk" type="button" >- Küçült</button>
					</span>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
								<ul class="share-link">
									<li class="hvr-bounce-to-right"><a href="<?php echo linkOlustur("kategori","",$kategori['kategoriAd']); ?>"> <?php echo $kategori['kategoriAd'];?> </a></li>
									
								</ul>
							</div>
					
						</div>
					</div>
					<script type='text/javascript'>						
						$(function(){							
							$('.buyutkucult').click(function(){								
								var parag = $('p');								
								var yaziboyut = parag.css('fontSize');								
								var yaziboyutu = parseFloat(yaziboyut, 10);								
								var yazison = yaziboyut.slice(-2);								
								if(this.id == 'buyuk') {									
									yaziboyutu *= 1.2; //yazı boyutunu 1.2 ile çarparak büyütüyor.									
								}								
								else if (this.id == 'kucuk'){									
									yaziboyutu /=1.2; //yazı boyutunu 1.2'ye bölerek küçültüyor.									
								}								
								parag.animate({fontSize: yaziboyutu + yazison},600);								
							});						
						});						
					</script>
					<p id="icerik" >
						<?php echo ($queryHaber['uzun']); ?>
					</p>
					<!-- genel resim galerisi -->
					<?php include("parts/galeri.php"); ?>
					<!-- genel resim galerisi -->
					<h2></h2>
					<!-- sosyalMedayPaylasım Start-->
					<?php if($sosyalMedyaPaylasGoster){ ?>
					<div class="share-section share-section2">
						<div class="row">
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
								<span> <?php echo $diller['sosyalMedyaPaylas']; ?></span>
							</div>
							<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
								<ul class="share-link">
									<li class="hvr-bounce-to-right"><a target='_blank' href="http://www.facebook.com/sharer.php?u=<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>"> <i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></li>
									<li class="hvr-bounce-to-right"><a target='_blank' href="whatsapp://send?text=<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>" data-action="share/whatsapp/share"><i class="fa fa-phone" aria-hidden="true"></i> Whatsapp</a></li>
									<li class="hvr-bounce-to-right"><a target='_blank' href="https://twitter.com/share" data-url="<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>" data-lang="tr"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter </a></li>
									<li class="hvr-bounce-to-right"><a target='_blank' href="https://plus.google.com/share?url=<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>"><i class="fa fa-google" aria-hidden="true"></i> Google</a></li>
								</ul>
							</div>
						</div>
					</div>
					<?php } ?>
					<!-- sosyalMedayPaylasım End-->				
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<ul class="next-pre-section">
								<li class="left-arrow"><a href="<?php echo oncekiHaber("haber",$haberID,$dil); ?>"><i class="fa fa-angle-left" aria-hidden="true"></i><?php echo $diller['onceki']; ?></a></li>
								<li class="right-arrow"><a href="<?php echo sonrakiHaber("haber",$haberID,$dil); ?>"><?php echo $diller['sonraki']; ?> <i class="fa fa-angle-right" aria-hidden="true"></i> </a></li>
							</ul>
						</div>
					</div>    
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 paddimg-left-none">  
					<?php include("parts/haberDetayList.php"); ?>
					<div class="sidebar">
						<div class="categories-home ">
							<?php include("parts/kategoriList.php"); ?>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php } ?>
