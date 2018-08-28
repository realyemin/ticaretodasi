

<?php

		$id = $_GET["id"];
		
$sql = $db->prepare('DELETE FROM komisyonuye WHERE  id= '.$id);
    $ekle = $sql->execute();
	
		
		echo 'Kayıt Silindi';
	
?>