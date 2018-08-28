<?php
	/*
		-- =============================================
		-- Author		: EKOMURCU
		-- Create date	: 14.08.2018
		-- Description	: anasayfa menu altı kayan haber eklentisi
		-- ============================================= 
	*/
?>
<?php $kayanHaber = $db->query("SELECT * FROM haber WHERE dil=".$dil." AND onay=1 ORDER BY id DESC LIMIT 10", PDO::FETCH_ASSOC); ?>              
<div class="ticker marg-botm">
	<div class="ticker-wrap">	
		<div class="ticker-head up-case backg-colr col-md-2"><?php echo $diller['sonHaberler']; ?><i class="fa fa-angle-double-right" aria-hidden="true"></i></div>
		<div class="tickers col-md-10">
			<div id="top-news-slider" class="owl-carousel">
				<?php if ( $kayanHaber->rowCount() ){						
						foreach( $kayanHaber as $row ){ ?>
				<div class="item">
					<a href="<?php echo linkOlustur("haber",$row['id'],$row['kisa']); ?>"><img src="<?php $yol="tcrt/haber/haber".$row['id']."_1.jpg"; if(file_exists($yol)){ echo $yol; }else{ echo "tcrt/logoMini.png"; } ?>" ><span><?php echo $row['kisa']; ?></span></a>
				</div>
				<?php } } ?>
			</div>
		</div>
	</div>
</div> 