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
	$id1 = $_GET["anket"];
	
	$sql = $db->prepare('DELETE FROM anket_secenekler WHERE  id= '.$id);
    $ekle = $sql->execute();
	
	header ("Location:index.php?islem=anket&id=".$id1);
	
	echo $diller['kayitSilindi'];
	
?>