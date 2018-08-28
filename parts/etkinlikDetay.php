<?php
	if(isset($db)){ 

		$seciliTarih=date("Y/n/j",strtotime($_GET['etkinlik']));
		$queryEtkinlik = $db->query("SELECT * FROM etkinlik WHERE etkinlik_onay=1 AND etkinlik_tarih='".$seciliTarih."'", PDO::FETCH_ASSOC);
	?>
	<div class="single-blog-page-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 tab-home">
					<div class="view-area">
						<h3 class="title-bg"><?php	echo $diller['etkinlik']; ?></h3>
					</div>
		
					<span class="date">
						<i class="fa fa-calendar-check-o" aria-hidden="true"></i> <?php echo turkcetarih("d F Y, l", $seciliTarih); ?> 
					</span>
					<p>
						<?php if ( $queryEtkinlik->rowCount() ){
							
							foreach( $queryEtkinlik as $rowEtkinlik ){
							?>
							<h2><?php echo $rowEtkinlik['etkinlik_adi']; ?></h2>
							
							<p><?php echo $rowEtkinlik['etkinlik_aciklama']; ?></p>
							
							<?php if($rowEtkinlik['etkinlik_link']!=""){ ?>						
								<a href="<?php echo $rowEtkinlik['etkinlik_link']; ?>" target="_blank" class="btn btn-warning" ><?php echo $diller['linkler']; ?></a>
							<?php } ?>
							<!-- genel resim galerisi -->
							<?php include("parts/galeri.php"); ?>
							<!-- genel resim galerisi -->
							<?php
							}
						}else
						{
						?>
						<div class="alert alert-danger"><?php echo $diller['icerikBulunamadi']; ?></div>
						<?php }
						}	
					?>
				</p>
			</div>
			
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 paddimg-left-none sidebar-latest">
				
				
				<?php include("parts/etkinlikTakvimi.php"); ?>
				
				
			</div>
		</div>
	</div>
</div>	
