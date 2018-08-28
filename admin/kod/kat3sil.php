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
	$kat1 = $_GET["kat1"];
	$kat2 = $_GET["kat2"];
	
	$sql = $db->prepare('DELETE FROM kat3 WHERE  id= '.$id);
    $ekle = $sql->execute();

	header ("Location:index.php?islem=kat3liste2&kat1=".$kat1."&kat2=".$kat2); 

	
?>