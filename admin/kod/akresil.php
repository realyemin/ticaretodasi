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
	$sql = $db->prepare('DELETE FROM akreditasyon WHERE  id= '.$id);
    $sil1 = $sql->execute();	
	$sql = $db->prepare('DELETE FROM aklink WHERE  id= '.$id);
    $sil2 = $sql->execute();
	
echo "<div class='alert alert-danger'>".$diller['kayitSilindi']."</div>";
	
?>