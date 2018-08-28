

<?php

		$id = $_GET["id"];
		

	$sql = $db->prepare('DELETE FROM egitim WHERE  id= '.$id);
    $ekle = $sql->execute();
	
	header ("Location:index.php?islem=egitimliste"); 	

?>