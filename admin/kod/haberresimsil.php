<?php
	/*
		-- =============================================
		-- Author		: EKOMURCU
		-- Create date	: 11.07.2018
		-- Description	: Güncelleme
		-- ============================================= 
	*/
?>
<?php
	if(isset($_GET["id"]))
	{
		$id = $_GET["id"];
		
		$resimid = $_GET["resimid"];
		$yol="../tcrt/haber/haber".$id."_".$resimid.".jpg";
		if(file_exists($yol))
		{
			unlink($yol);
		}
				
		header ("Location:index.php?islem=haberresim&id=".$id); 	
	}		
?>