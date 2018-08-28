<?php
	/*
		-- =============================================
		-- Author		: EKOMURCU
		-- Create date	: 17.08.2018
		-- Description	: Link Kategori4 (site dışı bağlantılar)
		-- ============================================= 
	*/
?>
<!-- Kategori4 MenuListesi Start -->
<?php if(!$menuButonList){
?>
<style type="text/css">
	.btn-round {
    color: #e74c3c;
    background-color: #fff;
    border: 2px solid #e74c3c;
    padding: 10px 20px;
    -webkit-border-radius: 30px !important;
    -moz-border-radius: 30px !important;
    border-radius: 30px !important;
    font-weight: 700;
    font-size: 15px;
	}
</style>
<div class="trending-news separator-large">
	<div class="btn-group">
		<button type="button" class="btn btn-round dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
			Size nasıl yardımcı olabiliriz? <i class="caret"></i>
		</button>
		<?php $baglantilar4=$db->query("SELECT * FROM link WHERE kat=4 AND dil=".$dil."" , PDO::FETCH_ASSOC);
		//kat=4 dış bağlantılar ?>
		<ul class="dropdown-menu pull-right scrollable-menu" role="menu">
			<?php 
				if ( $baglantilar4->rowCount() ){
					foreach( $baglantilar4 as $row ){		  
					?>
					<li><a href="<?php echo $row['link']; ?>" target="_blank"><?php echo $row['ad']; ?></a></li>
					<?php } 
				} ?>			
		</ul>
	</div>	
</div>		
<!-- Kategori4 MenuListesi END -->
<?php }else{ ?> 
<!-- Kategori4 ButonListesi Start -->
<div class="like-box" style="text-align:center;">
	<?php $baglantilar4=$db->query("SELECT * FROM link WHERE kat=4 AND dil=".$dil."" , PDO::FETCH_ASSOC);
	//kat=4 dış bağlantılar ?>
	<?php 
		$renk=array("btn-danger", "btn-info", "btn-warning", "btn-success");
		$sayac=0;
		if ( $baglantilar4->rowCount() ){
			foreach( $baglantilar4 as $row ){		  
			?>
			<?php 
				$kalici_yol_ad="tcrt/link/link".$row['id'].".jpg"; 
				if(file_exists($kalici_yol_ad)){
				?>
				<img class="img-responsive" src='tcrt/link/link<?php echo $row['id']; ?>.jpg' style="max-width:80px; max-height:60px" >
			<?php } ?>
			<a class="btn form-control btn-lg <?php echo $renk[$sayac++]; ?>" href="<?php echo $row['link']; ?>" target="_blank">
				
				<?php if($menuButonKayanYazi){ ?> 
					<marquee ><?php echo $row['ad']; ?></marquee>
				<?php }else{ echo $row['ad']; } ?>
			</a>
			<div class="label">&nbsp;</div>			
			<?php if($sayac>4){ $sayac=0;} } 
		} ?>			
		
</div>
<?php } ?>
<!-- Kategori4 ButonListesi END -->