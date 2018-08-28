<?php if(isset($_GET['iid'])){ $icerikID=base64_decode($_GET['iid']);  ?>
	<?php $hitIcerik=$db->query("SELECT hit FROM hit WHERE kaynakAd='icerik' AND  kaynakID = '".$icerikID."'")->fetch(); ?>
	<?php if($hitIcerik['hit']>0){ $hitArttir=$db->query("UPDATE hit SET hit=(hit+1) WHERE kaynakAd='icerik' AND kaynakID='".$icerikID."'"); }else{ $db->query("INSERT INTO hit (kaynakAd,hit,kaynakID) VALUES('icerik',1,$icerikID)"); } ?>
	<?php $queryIcerik = $db->query("SELECT * FROM icerik WHERE dil=".$dil." AND id='".$icerikID."'")->fetch(); ?>


	<!-- Blog Single Start Here -->
	<div class="single-blog-page-area">
		<div class="container">
			<div class="row">
				
				<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
					<div class="single-image">
						<?php	if ( $queryIcerik ){	?>
							<?php $yol="tcrt/icerik/icerik".$queryIcerik['id']."_1.jpg";
							if(file_exists($yol)){ ?> <img src="<?php echo $yol; ?>">
						<?php }	?>
						<?php }	?>
					</div>
					<h2><a href="#"><?php echo $queryIcerik['aciklama']; ?></a></h2>
					<div class="share-section">
						<div class="row">
							<div class="col-lg-8 col-md-8col-sm-8 col-xs-12 life-style">
								<span class="admin"> <a href="#"><i class="fa fa-user-o" aria-hidden="true"></i> </a> 
								<a href="#" title="<?php echo $diller['okunmaSayisi']; ?>"><i class="fa fa-eye" aria-hidden="true"></i>  </a></span>
								<span class="date">
								<i class="fa fa-calendar-check-o" aria-hidden="true"></i>  
											
					<button class="btn btn-success btn-xs buyutkucult" id="buyuk" type="button" >+ Büyüt</button>
					&nbsp;&nbsp;
					<button class="btn btn-danger btn-xs buyutkucult" id="kucuk" type="button" >- Küçült</button>
					</span>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
								<ul class="share-link">

									
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
						<?php echo ($queryIcerik['detay']); ?>
					</p>
				
					<div class="share-section share-section2">
						<div class="row">
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
								<span> <?php echo $diller['sosyalMedyaPaylas']; ?></span>
							</div>
							<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
								<ul class="share-link">
									<li class="hvr-bounce-to-right"><a target='_blank' href="http://www.facebook.com/sharer.php?u=<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>"> <i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></li>
									<li class="hvr-bounce-to-right"><a target='_blank' href="whatsapp://send?text=<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>" data-action="share/whatsapp/share"><i class="fa fa-phone" aria-hidden="true"></i> Whatsup</a></li>
									<li class="hvr-bounce-to-right"><a target='_blank' href="https://twitter.com/share" data-url="<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>" data-lang="tr"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter </a></li>
									<li class="hvr-bounce-to-right"><a target='_blank' href="https://plus.google.com/share?url=<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>"><i class="fa fa-google" aria-hidden="true"></i> Google</a></li>
								</ul>
							</div>
						</div>
					</div>
					
   
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 paddimg-left-none">  
					
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