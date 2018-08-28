<?php
	/*
		-- =============================================
		-- Author		: EKOMURCU
		-- Create date	: 24.07.2018
		-- Description	: anasayfa haber manset orta bölümü(normal)
		-- ============================================= 
	*/
?>
<?php $hitHaber=$db->query("(SELECT max(hit) as hitHaberSayisi FROM hit WHERE hit= (SELECT max(hit) from hit))")->fetch(); ?>
<?php $query = $db->query("SELECT * FROM haber WHERE dil=".$dil." AND onay=1 AND manset=1 Order BY id DESC LIMIT 5", PDO::FETCH_ASSOC); ?>
<div class="slider-area">
	<div class="bend niceties preview-2">
		<div id="ensign-nivoslider" class="slides">
			<?php
				if ( $query->rowCount() ){
					foreach( $query as $row ){
					?>
					
					<img src="<?php echo "tcrt/haber/haber".$row['id']."_1.jpg" ?>" title="#slider-direction-<?php echo $row['id']; ?>">
					<?php }
				}
			?>
		</div>
		<!-- direction 2 -->
		<?php $query = $db->query("SELECT * FROM haber WHERE dil=".$dil." AND onay=1 AND manset=1 Order BY id DESC LIMIT 5", PDO::FETCH_ASSOC); ?>
		<?php
			//dil :kullanıcının seçitiği dil id
			//onay 1:aktif haber
			//mnaset 0:maset yok,1 düz manşet, 2 ön manset
			if ( $query->rowCount() ){
				foreach( $query as $row ){
				?>
				<?php $kategori=$db->query("SELECT kategoriAd FROM kategori WHERE id='".$row['kategoriID']."'")->fetch(); ?>
				<div id="slider-direction-<?php echo $row['id']; ?>" class="slider-direction">
					<div class="slider-content t-cn s-tb slider-1">
						<div class="title-container s-tb-c">
							<div class="slider-botton">
								<ul>
									<li>
										<a class="cat-link" href="<?php echo linkOlustur("kategori","",$kategori['kategoriAd']); ?>"><?php echo $kategori['kategoriAd']; ?></a> 
										<span class="date"> 
											<i class="fa fa-calendar-check-o" aria-hidden="true"></i><?php echo turkcetarih("d F Y, l", $row['tarih']); ?> 
										</span>
										<span class="comment">
											<a href="#" title="<?php echo $diller['okunmaSayisi']; ?>"><i class="fa fa-eye" aria-hidden="true"></i> <?php echo $hitHaber['hitHaberSayisi']; ?> </a>
										</span>
									</li>
								</ul>
							</div>
							<h1 class="title1"><a href="<?php echo linkOlustur("haber",$row['id'],$row['kisa']); ?>"> 
							<?php yaziBol($row['kisa'],60,5); ?><span></span></a></h1>
							<div class="title2"><?php echo $row['kisa']; ?></div>
						</div>
					</div>
				</div>
				<?php }
			}
		?>
	</div>
</div>