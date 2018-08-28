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
	$sql = $db->prepare('DELETE FROM genel WHERE  id= '.$id);
    $ekle = $sql->execute();	
	header ("Location:index.php?islem=dilliste"); 			
?>