

<?php

		$id = $_GET["id"];
		

	$sql = $db->prepare('DELETE FROM egitimkatilan WHERE  id= '.$id);
    $ekle = $sql->execute();
	
	header ("Location:index.php?islem=egitimkatilanliste&id=".$_GET["risk"]); 	

?>