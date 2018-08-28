<?php
	/*
		-- =============================================
		-- Author		: EKOMURCU
		-- Create date	: 24.07.2018
		-- Description	: anasayfa footer rastgele haber resim galerisi
		--	Maksimum 12 adet foto gosterecek sekilde ayarlanmıştır
		-- setCOnfig.php'den Footer Rastgele Galeri Goster ile açılıp kapatılabilir
		-- ============================================= 
	*/
?>


<div class="single-footer footer-three">
	<h3><?php echo $diller['galeri']; ?></h3>
	<ul>
		<?php 
			$yol="tcrt/haber/haber";
			$haberDB=$db->query('SELECT id,kisa FROM haber WHERE manset=1 ORDER BY RAND() limit 12',PDO::FETCH_ASSOC);
			if ( $haberDB->rowCount() ){
				foreach($haberDB as $row){
					$resim=$yol.$row['id']."_1.jpg";
					if(file_exists($resim))
					{
					?>
					<li><a href="<?php echo linkOlustur("haber",$row['id'],$row['kisa']); ?>"><img src="<?php echo $resim; ?>" alt="<?php echo $row['kisa']; ?>"></a></li> 
					<?php 
					}					
				}
			}
		?>	
	</ul>
</div>