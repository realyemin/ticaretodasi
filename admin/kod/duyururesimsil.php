<?php
	/*
		-- =============================================
		-- Author		: EKOMURCU
		-- Create date	: 11.07.2018
		-- Description	: Yeniden Yazıldı
		-- ============================================= 
	*/
?>
<?php
	
	$id = $_GET["id"];
	
	$resimid = $_GET["resimid"];
	$yol1="../tcrt/duyuru/duyuru".$id."_".$resimid.".jpg";
	$yol2="../tcrt/duyuru/orginal".$id."_".$resimid.".png";
	if(file_exists($yol1))
	{
		@unlink($yol1);
	}
	if(file_exists($yol2))
	{
		@unlink($yol2);
	}
		
	header ("Location:index.php?islem=duyururesim&id=".$id); 	
	
?>