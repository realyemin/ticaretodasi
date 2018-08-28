
<?php
	$id = $_GET["id"];

		
$sql = $db->prepare('DELETE FROM komisyonlar WHERE  id= '.$id);
    $ekle = $sql->execute();
	
	$sql = $db->prepare('DELETE FROM komisyonuye WHERE  komisyonid= '.$id);
    $ekle = $sql->execute();
	
		
		echo 'Kayıt Silindi';

?>