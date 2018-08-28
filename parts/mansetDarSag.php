<?php
	/*
		-- =============================================
		-- Author		: EKOMURCU
		-- Create date	: 24.07.2018
		-- Description	: anasayfa haber manset sağ bölümü(normal)
		-- ============================================= 
	*/
?>
<?php $query = $db->query("SELECT * FROM haber WHERE dil=".$dil." AND onay=1 AND manset=1 Order BY id DESC LIMIT 2", PDO::FETCH_ASSOC); ?>
<div class="slider-right">
	<ul>
		<?php
			if ( $query->rowCount() ){
				$slideItem=1;
				foreach( $query as $row ){
				?>				
				<?php $kategori=$db->query("SELECT kategoriAd FROM kategori WHERE id='".$row['kategoriID']."'")->fetch(); ?>
				
				<li>
					<div class="right-content">
						<span class="category"><a class="cat-link" href="<?php echo linkOlustur("kategori","",$kategori['kategoriAd']); ?>"><?php echo $kategori['kategoriAd']; ?></a></span> 
						<span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"> </i> <?php echo turkcetarih("d F Y, l", $row['tarih']); ?></span>
						<h3>
							<a href="<?php echo linkOlustur("haber",$row['id'],$row['kisa']); ?>"> 
							<?php yaziBol($row['kisa'],60,5); ?><span></span></a>
						</h3>
					</div>
					<div class="right-image">
						<?php $yol="tcrt/haber/haber".$row['id']."_1.jpg";
							if(file_exists($yol)){ ?> 
							<a href="<?php echo linkOlustur("haber",$row['id'],$row['kisa']); ?>" >							
								<img src="<?php echo $yol; ?>" alt="<?php echo $row['kisa']; ?>">
							</a><?php } ?>
					</div>
				</li>
				
				<?php }
			} ?>
	</ul>
</div>