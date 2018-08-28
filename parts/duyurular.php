<?php
	/*
		-- =============================================
		-- Author		: EKOMURCU
		-- Create date	: 24.07.2018
		-- Description	: anasayfa duyuru listesi
		-- ============================================= 
	*/
?>
<?php $query = $db->query("SELECT * FROM duyuru WHERE dil=".$dil." AND onay=1 Order BY id DESC LIMIT 1", PDO::FETCH_ASSOC); ?>
<div class="trending-news separator-large">
	<div class="row">
		<div class="view-area">
			<div class="col-sm-8"> 
				<h3 class="title-bg"><?php echo $diller['duyurular']; ?></h3>
			</div>
			<div class="col-sm-4 text-right">
				<a href="duyurular/"><?php echo $diller['tumu']; ?> <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
			</div>
		</div>    
		
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
			<div class="list-col">
				<?php
					if ( $query->rowCount() ){
						foreach( $query as $row1 ){
						?>
						<?php $yol="tcrt/duyuru/duyuru".$row1['id']."_1.jpg";
							if(file_exists($yol)){ ?> 
							<a href="<?php echo linkOlustur("duyuru",$row1['id'],$row1['kisa']); ?>" >							
								<img style="padding:10px; border-radius:20px;" src="<?php echo $yol; ?>" alt="<?php echo $row1['kisa']; ?>">
							</a><?php }else{?>
							
							<span style="margin:10px; font-size:26pt; text-align:center"><i class="fa fa-bullhorn" aria-hidden="true"></i></span>
						<?php } ?>
						<div class="dsc">
							<span class="date"> <i class="fa fa-calendar-check-o" aria-hidden="true"></i> <?php echo turkcetarih("d F Y, l", $row1['tarih']); ?> </span>
							<h3><a href="<?php echo linkOlustur("duyuru",$row1['id'],$row1['kisa']); ?>" ><?php echo $row1['kisa']; ?> </a></h3>
							<p><?php echo substr(strip_tags($row1['uzun']),0,150).".."; ?></p>
						</div>
						<?php }
					} ?>
			</div>
		</div>
		<?php $query = $db->query("SELECT * FROM duyuru WHERE dil=".$dil." AND onay=1 AND id <> (SELECT MAX(id) FROM duyuru WHERE onay=1) Order BY id DESC LIMIT 5", PDO::FETCH_ASSOC); ?>
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
			<ul class="news-post"> 
				<?php
					if ( $query->rowCount() ){
						foreach( $query as $row2 ){
						?>
						<li>
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content">
									<div class="item-post">
										<div class="row">
											<div class="col-lg-4 col-md-4 col-sm-3 col-xs-3 paddimg-right-none">
												<?php $yol="tcrt/duyuru/duyuru".$row2['id']."_1.jpg";
													if(file_exists($yol)){ ?> 
													<a href="<?php echo linkOlustur("duyuru",$row2['id'],$row2['kisa']); ?>" >							
														<img style="padding:10px; border-radius:20px;" src="<?php echo $yol; ?>" alt="<?php echo $row2['kisa']; ?>">
													</a><?php }else{?>
													
													<span style="margin:10px; font-size:26pt; float:right"><i class="fa fa-bullhorn" aria-hidden="true"></i></span>
												<?php } ?>
											</div>
											<div class="col-lg-8 col-md-8 col-sm-9 col-xs-9">
												<h4><a href="<?php echo linkOlustur("duyuru",$row2['id'],$row2['kisa']); ?>" ><?php echo $row2['kisa']; ?> </a></h4>
												<span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> <?php echo turkcetarih("d F Y, l", $row2['tarih']); ?></span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</li>
						<?php }
					} ?>
			</ul>
		</div>
	</div>
</div>											