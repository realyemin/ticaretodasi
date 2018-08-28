

<?php

		$id = $_GET["id"];
		

$sql = $db->prepare('DELETE FROM iso WHERE  id= '.$id);
    $ekle = $sql->execute();

$sql = $db->prepare('DELETE FROM isoalt WHERE  id= '.$id);
    $ekle = $sql->execute();
	
			header ("Location:index.php?islem=isoliste"); 	

		
	
?>