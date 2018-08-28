

<?php

		$id = $_GET["id"];
				$kid = $_GET["kid"];
		

		$sql = $db->prepare('DELETE FROM mesaj WHERE  id= '.$id);
    $ekle = $sql->execute();
	
		  header ("Location:index.php?islem=mesajoku&kid=".$kid."&id=0"); 

	
?>