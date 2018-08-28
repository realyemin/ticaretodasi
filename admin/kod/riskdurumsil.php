

<?php

		$id = $_GET["id"];
				$risk = $_GET["risk"];
		
$sql = $db->prepare('DELETE FROM risk WHERE  id= '.$id);
$ekle = $sql->execute();
header ("Location:index.php?islem=risk&id=".$risk); 

		
		echo 'Kayıt Silindi';
	
?>