<?php $reklam2=$db->query("SELECT * FROM reklam WHERE kategori=2 ORDER BY id DESC LIMIT 1")->fetch(); 
	//kategori=1 Sol Üst Bar
	if(!empty($reklam2['resim'])){
?>
<div class="hot-news separator-large">
	<div class="add-section add-section2">
	<div class="view-area">
		<h3 class="title-bg"><?php echo $reklam2['ad']; ?></h3>
	</div>
	<a href="<?php echo $reklam2['link']; ?>" target="_blank">
		<img class="img-thumbnail img-responsive" src="<?php echo $reklam2['resim']; ?>" alt="<?php echo $reklam2['aciklama']; ?>" style="padding:20px;">
	</a>
</div>
</div>
<?php } ?>