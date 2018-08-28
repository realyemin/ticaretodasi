<?php
	/*
		-- =============================================
		-- Author		: EKOMURCU
		-- Create date	: 24.07.2018
		-- Description	: anasayfa katagori icerik listesi
		-- ============================================= 
	*/
?>

<?php $haberListDB=$db->query("SELECT * FROM haber WHERE dil=".$dil." AND onay=1 ", PDO::FETCH_ASSOC); ?>
<?php if ( $haberListDB->rowCount() ){ ?>
	<div class="container">
		<div class="trending-news separator-large">
			<div class="row">
				<div class="view-area">
					<div class="col-sm-8"> 
						<h3 class="title-bg"><?php echo $diller['haberler']; ?></h3>
					</div>
					<div class="col-sm-4 text-right">
						<!-- arama buraya gelecek -->
					</div>
				</div>    				
				<?php					
					foreach( $haberListDB as $row2 ){
					?>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<ul class="news-post"> 							
							<li>
								<div class="row">
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content">
										<div class="item-post">
											<div class="row">
												<div class="col-lg-4 col-md-4 col-sm-3 col-xs-3 paddimg-right-none">
													<?php $yol="tcrt/haber/haber".$row2['id']."_1.jpg";
														if(file_exists($yol)){ ?> 
														<a href="<?php echo linkOlustur("haber",$row2['id'],$row2['kisa']); ?>" >							
															<img style="padding:10px; border-radius:20px;" src="<?php echo $yol; ?>" alt="<?php echo $row2['kisa']; ?>">
														</a><?php }else{ ?>
														
														<span style="margin:10px; font-size:26pt; float:right"><i class="fa fa-bullhorn" aria-hidden="true"></i></span>
													<?php } ?>
												</div>
												<div class="col-lg-8 col-md-8 col-sm-9 col-xs-9">
													<h4><a href="<?php echo linkOlustur("haber",$row2['id'],$row2['kisa']); ?>" ><?php echo $row2['kisa']; ?> </a></h4>
													<span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> <?php echo turkcetarih("d F Y, l", $row2['tarih']); ?></span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
							
						</ul>
					</div>	
				<?php } ?>
			</div>
		</div>											
	</div>	
<?php }else{ ?>
<div class="alert alert-danger"><h3><?php echo $diller['icerikBulunamadi']; ?></h3></div>
<?php } ?>																															