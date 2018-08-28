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
	$sql = $db->prepare('DELETE FROM akkat2 WHERE  id= '.$id);
    $ekle = $sql->execute();		
	echo $diller['kayitSilindi'];;	
?>