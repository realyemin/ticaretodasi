

<?php

		$id = $_GET["id"];
		
$sql = $db->prepare('DELETE FROM sp1a WHERE spustid= '.$id);
    $ekle = $sql->execute();
	
		
$sql = $db->prepare('DELETE FROM spust WHERE  id= '.$id);
    $ekle = $sql->execute();
						 header ("Location:index.php?islem=spliste"); 

		
		echo 'Kayıt Silindi';
	
?>