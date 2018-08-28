<?php
	/*
		-- =============================================
		-- Author		: EKOMURCU
		-- Create date	: 24.07.2018
		-- Description	: anasayfa geniş(full) manset
		-- ============================================= 
	*/
?>
<?php $query = $db->query("SELECT * FROM haber WHERE dil=".$dil." AND onay=1 AND manset=1 Order BY id DESC LIMIT 5", PDO::FETCH_ASSOC); ?>
<!-- Slider Section Start Here -->
<div class="full-slider-area">
	<ul class="full-slider">		
		<?php	//dil :kullanıcının seçitiği dil id
			//onay 1:aktif haber
			//mnaset 0:maset yok,1 düz manşet, 2 ön manset(açılır mesaj kutusu)
			if ( $query->rowCount() ){		
				foreach( $query as $row ){
				?>
				<?php $kategori=$db->query("SELECT kategoriAd FROM kategori WHERE id='".$row['kategoriID']."'")->fetch(); ?>
				<li>
					<div class="image" >
						<?php $yol="tcrt/haber/haber".$row['id']."_1.jpg";
							if(file_exists($yol)){ ?> 													
								<img src="<?php echo $yol; ?>" alt="<?php echo $row['kisa']; ?>">
							<?php } ?>
							<div class="slider-content">
								<a href="<?php echo linkOlustur("haber",$row['id'],$row['kisa']); ?>" class="more-btn"> <?php echo $row['kisa'];?></a>
								<h1><a href="<?php echo linkOlustur("haber",$row['id'],$row['kisa']); ?>">
								<?php yaziBol($row['kisa'],60,5);	?><span> </span></a></h1>
								<a class="cat-link" href="<?php echo linkOlustur("kategori","",$kategori['kategoriAd']); ?>"><?php echo $kategori['kategoriAd']; ?></a> 
								<span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"> </i><?php echo turkcetarih("d F Y, l", $row['tarih']); ?> 
									<a href="#" title="<?php echo $diller['okunmaSayisi']; ?>"><i class="fa fa-eye" aria-hidden="true"></i> <?php echo hitGoster('haber',$row['id']); ?> </a>
									</span>								
								
							</div>
					</div>
				</li>
			<?php  }}?>
	</ul>
</div>
<!-- Slider Section end Here -->				