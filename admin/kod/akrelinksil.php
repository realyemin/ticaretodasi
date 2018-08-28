<?php
	/*
		-- =============================================
		-- Author		: EKOMURCU
		-- Create date	: 10.07.2018
		-- Description	: Güncelleme
		-- ============================================= 
	*/
?>
<?php	
	$id = $_GET["id"];
	$akid = $_GET["akid"];	
	$sql = $db->prepare('DELETE FROM aklink WHERE  id= '.$id);
    $ekle = $sql->execute();
	
	if(file_exists("../tcrt/akreditasyon/akreditasyon_".$id.".pdf")) 
	{
		unlink("../tcrt/akreditasyon/akreditasyon_".$id.".pdf");
	}
	header ("Location:index.php?islem=akrelinkler&id=".$akid); 	
?>