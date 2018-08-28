<?php $reklam1=$db->query("SELECT * FROM reklam WHERE kategori=1 ORDER BY id DESC LIMIT 1")->fetch(); 
	//kategori=1 Sol Üst Bar
	if(!empty($reklam1['resim'])){
?>
<div class="hot-news separator-large">
	<div class="view-area">
		<h3 class="title-bg"><?php echo $reklam1['ad']; ?></h3>
	</div>
	<a href="<?php echo $reklam1['link']; ?>" target="_blank">
		<img class="img-thumbnail img-responsive" src="<?php echo $reklam1['resim']; ?>" alt="<?php echo $reklam1['aciklama']; ?>" style="padding:20px;">
	</a>
</div>
<?php } ?>