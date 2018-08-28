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
	
	$sql = $db->prepare('DELETE FROM kat1 WHERE  id= '.$id);
    $ekle = $sql->execute();
	@$alt =	$_GET['alt'];
	
	if($alt==1)
		header ("Location:index.php?islem=kat1liste1"); 	
	else
		header ("Location:index.php?islem=kat1liste"); 
	
	echo $diller['kayitSilindi'];
	
?>