

<?php

		$id = $_GET["id"];
		
$sql = $db->prepare('DELETE FROM isokat1 WHERE  id= '.$id);
    $ekle = $sql->execute();
	
							 header ("Location:index.php?islem=isokat1liste"); 

		echo 'Kayıt Silindi';
	
?>