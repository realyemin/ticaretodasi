<?php
	/*
		-- =============================================
		-- Author		: EKOMURCU
		-- Create date	: 20.08.2018
		-- Description	: Güncelleme
		-- ============================================= 
	*/
?>
<?php

$id = $_GET["id"];
		
	
unlink("../tcrt/link/link".$id.".jpg");

header ("Location:index.php?islem=linkresim&id=".$id); 	
	

?>