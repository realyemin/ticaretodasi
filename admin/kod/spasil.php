

<?php

		$id = $_GET["id"];
				$sid = $_GET["sid"];
		
$sql = $db->prepare('DELETE FROM sp1a WHERE  id= '.$id);
$ekle = $sql->execute();
header ("Location:index.php?islem=spa&id=".$sid); 

		
		echo 'Kayıt Silindi';
	
?>