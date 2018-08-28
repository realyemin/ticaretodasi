<?php
	/*
		-- =============================================
		-- Author		: EKOMURCU
		-- Create date	: 22.07.2018
		-- Description	: haber-duyur-icerik detayları için galeri(lightbox ile) eklentisi
		-- ============================================= 
	*/
?>
<?php if(isset($_GET['hid'])){ $id=base64_decode($_GET['hid']); $klasor="tcrt/haber/haber"; $title=$queryHaber['kisa']; }?>
<?php if(isset($_GET['did'])){ $id=base64_decode($_GET['did']); $klasor="tcrt/duyuru/duyuru"; $title=$queryDuyuru['kisa']; }?>
<?php if(isset($rowEtkinlik['id'])){ $id=$rowEtkinlik['id']; $klasor="tcrt/etkinlik/etkinlik"; $title=$rowEtkinlik['etkinlik_adi']; }?>
<section>
	<div>
		<?php for($i=1; $i<16; $i++){ 
			$yol=$klasor.$id."_".$i.".jpg";
			if(file_exists($yol)){ ?> 
			
			<a class="example-image-link" href="<?php echo $yol; ?>" data-lightbox="example-set" data-title="<?php echo $title; ?>">
				<img class="example-image img-thumbnail img-responsive" style="max-height:200px" src="<?php echo $yol; ?>" alt="<?php echo $title; ?>"/>
			</a>		
			
		<?php } ?>
		<?php } ?>
	</div>
</section>
<script>	
	$(document).ready(function(){		
		lightbox.option({
			'resizeDuration': 200,
			'wrapAround': true,
			'albumLabel': "%1.resim/(%2) "
		})
		//https://lokeshdhakar.com/projects/lightbox2/#options referans sayfası
	});
</script>