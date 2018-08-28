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
	$kat1 = $_GET["kat1"];
	
	$sql = $db->prepare('DELETE FROM kat2 WHERE  id= '.$id);
    $ekle = $sql->execute();
		
	header ("Location:index.php?islem=kat2liste1&kat1=".$kat1); 	
	
?>