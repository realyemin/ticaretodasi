<?php $reklam3=$db->query("SELECT * FROM reklam WHERE kategori=3 ORDER BY id DESC LIMIT 1")->fetch(); 
	//kategori=3 Orta Alt Bar(Geniş)
	if(!empty($reklam3['resim'])){
	?>
	<div class="add-section separator-large2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="view-area">
						<h3 class="title-bg"><?php echo $reklam3['ad']; ?></h3>
					</div>
					<a href="<?php echo $reklam3['link']; ?>" target="_blank">
						<img class="img-thumbnail img-responsive" src="<?php echo $reklam3['resim']; ?>" alt="<?php echo $reklam3['aciklama']; ?>" style="padding:20px;">
					</a>
				</div>
			</div>
		</div>
	</div>
<?php } ?>