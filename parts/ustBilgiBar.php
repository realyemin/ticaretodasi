<?php
	/*
		-- =============================================
		-- Author		: EKOMURCU
		-- Create date	: 24.07.2018
		-- Description	: anasayfa ust bilgi alanı(tarih, iletisim, sosyal medya, dil ayarları vs)
		-- Relation		: 
		-- ============================================= 
	*/
?>
<div class="header-top-area">
	<div class="container">
		<div class="row">
			<!-- 3 Bilgi Start -->
			
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="header-top-left">
					<ul>
						<?php if($tarihGoster){?>
							<li><?php echo turkcetarih('j F Y , l'); ?></li>
							<?php }							
							if($iletisimGoster){?>							
							<li><a href="#iletisim"><?php echo $diller['iletisim'];?></a></li>
							<?php }
							if($havaDurumuGoster && !empty($genelAyarlarDB['sehirKodu'])){?>									
							<li>
								<!-- havadurumu start -->
								<img src="https://w.bookcdn.com/weather/picture/21_<?php echo $genelAyarlarDB['sehirKodu']; ?>_1_21_ecf0f1_250_bdc3c7_9da2a6_ffffff_1_2071c9_ffffff_0_6.png?scode=124&domid=765&anc_id=19188"  alt="Hava Durumu"/>								
								<!-- havadurumu end -->
							</li>
						<?php }?>
					</ul>
				</div>
			</div>
			<!-- 3 Bilgi End -->
			<!-- Sosyal Medya Start -->
			<?php if($sosyalMedyaUstLinkGoster) {?> 
				<?php $sosyalMedyaDB=$db->query("SELECT * FROM sosyalmedya",PDO::FETCH_ASSOC); ?>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					<div class="social-media-area">
						<nav>
							<ul>
								<?php	
									if ( $sosyalMedyaDB->rowCount() ){
										
										foreach( $sosyalMedyaDB as $row ){
										?>
										
										<li><a href="<?php echo $row['link'] ; ?>" target="_blank" class="active" title="<?php echo $row['ad'] ; ?>"><i class="<?php echo $row['icon'] ; ?>"></i></a></li>
										
										<?php 
										}
									}
								?>													
							</ul>
						</nav>
					</div>
				</div>
			<?php } ?>
			<!-- Sosyal Medya End -->
			<!-- Dil Seçimi Start -->
			<?php if($dilGoster){ ?> 
				<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
					<div class="navbar-custom-menu">
						<ul class="nav navbar-nav">
							<li class="dropdown tasks-menu" >
								<a style="display:inline" href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="fa fa-flag-o"></i>	<?php echo $diller['diller']; ?> 
									
									<?php echo $_SESSION["dilSec"]; ?>	
									<span class="label label-danger">
										<?php
											$dilSec = $db->query("SELECT count(*) as Toplam FROM diller", PDO::FETCH_ASSOC)->fetch();
											echo $dilSec['Toplam'];											
										?>
									</span>
									
								</a>
								<ul class="dropdown-menu" style="text-align:center">
									<?php
										$queryDil = $db->query("SELECT * FROM diller Order By dilAdi", PDO::FETCH_ASSOC);
										
									?>
									<li class="header"><?php echo $diller['diller']; ?>(<?php echo $dilSec['Toplam']; ?>)</li>
									<li>
										<!-- inner menu: contains the actual data -->
										<ul class="menu">
											<?php												
												if ( $queryDil->rowCount() ){
													foreach( $queryDil as $rowDil ){
														$dilDosyasi="admin/dilPaketi/".$rowDil['dilKodu'].".php";
														
														?>
														
														<form action="?<?php echo $_SERVER['QUERY_STRING'];?>" method="post">
															<li><button <?php if(!file_exists($dilDosyasi))
														{ echo "disabled"; } ?> class="btn btn-info btn-xs " name="dilSec" value="<?php echo $rowDil['dilKodu']?>"><?php echo $rowDil['dilAdi']; ?></button></li>
														</form>
														
														<?php
														
													}
												}														
											?>
										</ul>
									</li>
									<li class="footer">
										<a href="#"><?php echo $diller['kayitliDiller']; ?></a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			<?php } ?>
			<!-- Dil Seçimi End -->
		</div>
	</div>
</div>								