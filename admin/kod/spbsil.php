

<?php

		$id = $_GET["id"];
		$risk =	$_GET['risk'];

$sql = $db->prepare('DELETE FROM sp1b WHERE  id= '.$id);
    $ekle = $sql->execute();
	
							 header ("Location:index.php?islem=spb&id=".$risk); 

		echo 'Kayıt Silindi';
	
?>