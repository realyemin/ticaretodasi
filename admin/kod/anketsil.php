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
	$sql = $db->prepare('DELETE FROM anket_sorular WHERE  id= '.$id);
    $sil1 = $sql->execute();	
	$sql = $db->prepare('DELETE FROM anket_sorular1 WHERE  anketid= '.$id);
    $sil2 = $sql->execute();
	$sql = $db->prepare('DELETE FROM anketcevap WHERE  anketid= '.$id);
    $sil3 = $sql->execute();
	$sql = $db->prepare('DELETE FROM anket_secenekler WHERE  anketid= '.$id);
    $sil3 = $sql->execute();
	
echo "<div class='alert alert-success'>".$diller['kayitSilindi']."</div>";
	
?>