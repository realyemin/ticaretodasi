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
	$id = $_GET["id"];
	if(isset($_GET["id"]) && isset($_GET["resimid"]))
	{
		$resimid = $_GET["resimid"];
		unlink("../tcrt/baskan.jpg");		
		header ("Location:index.php?islem=baskan"); 
	}	
?>