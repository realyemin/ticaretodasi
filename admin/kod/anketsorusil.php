

<?php

		$id = $_GET["id"];
		$id1 = $_GET["anket"];
		
$sql = $db->prepare('DELETE FROM anket_sorular1 WHERE  id= '.$id);
    $ekle = $sql->execute();
	
													 header ("Location:index.php?islem=anket&id=".$id1);

		echo 'Kayıt Silindi';
	
?>