

<?php

		$id = $_GET["id"];
		$risk=$_GET["risk"];
$sql = $db->prepare('DELETE FROM hedef WHERE  id= '.$id);
    $ekle = $sql->execute();
	
 header ("Location:index.php?islem=hedef&id=".$risk); 

		echo 'Kayıt Silindi';
	
?>