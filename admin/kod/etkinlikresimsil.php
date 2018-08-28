<?php
	/*
		-- =============================================
		-- Author		: EKOMURCU
		-- Create date	: 12.07.2018
		-- Description	: Güncelleme
		-- ============================================= 
	*/
?>
<?php
	
	$id = $_GET["id"];	
	$resimid = $_GET["resimid"];
	$yol="../tcrt/etkinlik/etkinlik".$id."_".$resimid.".jpg"
	if(file_exists($yol))
	{		
		@unlink($yol);	
		header ("Location:index.php?islem=etkinlikresim&id=".$id); 	
	}
	
?>