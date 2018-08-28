<?php
	/*
		-- =============================================
		-- Author		: EKOMURCU
		-- Create date	: 24.07.2018
		-- Description	: anasayfa kategori listesi
		-- Relation		: linkOlustur() fonk. fonksiyonlar/php/linkOlustur.php
		-- ============================================= 
	*/
?>
<?php $kategori=$db->query("SELECT * FROM kategori",PDO::FETCH_ASSOC); ?>
<div class="categories-home separator-large3">
	<h3 class="title-bg"><?php echo $diller['kategoriList']; ?></h3>
	<ul>
		<?php if ( $kategori->rowCount() ){
			foreach( $kategori as $row ){
			?>
			<?php $haberKat=$db->query("SELECT count(kategoriID) as haberSayisi FROM haber WHERE dil=".$dil." AND onay=1 AND kategoriID = '".$row['id']."'")->fetch(); ?>
			<?php if($haberKat['haberSayisi']>0){?> 
				<li><a href="<?php echo linkOlustur("kategori","",$row['kategoriAd']); ?>"><i style="color:#fff" class="fa fa-angle-right" ></i> <?php echo $row['kategoriAd']; ?> <span><?php echo $haberKat['haberSayisi']; ?></span></a></li>
			<?php } }
		} ?>
	</ul>
</div>