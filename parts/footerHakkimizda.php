<div class="single-footer footer-one">
	<?php if($hakkimizdaGoster){?>
		<h3><?php echo $diller['hakkimizda'];?></h3>
		<?php }
		if($logo_footerGoster){?>
		<div class="footer-logo"><a href="."><img src="tcrt/logo.jpg" alt="footer-logo"></a></div>
		<?php }
		if($hakkimizda_icerikGoster){ ?>
		<div><p><?php echo $genelAyarlarDB['vizyon']; ?></p></div>
	<?php } ?>	
	
	<!-- Sosyal Medya Start -->
	<?php if($sosyalMedyaAltLinkGoster) {?> 
	<?php $sosyalMedyaDB=$db->query("SELECT * FROM sosyalmedya",PDO::FETCH_ASSOC); ?>
	<div class="footer-social-media-area">
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
	<?php } ?>
	<!-- Sosyal Medya End -->
	
</div>