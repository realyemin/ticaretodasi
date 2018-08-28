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
	
	$sql = $db->prepare('DELETE FROM kullanici WHERE  id= '.$id);
    $ekle = $sql->execute();
		
	header ("Location:index.php?islem=kullaniciliste"); 	
	
?>