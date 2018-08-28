

<?php

		$id = $_GET["id"];
		
$sql = $db->prepare('DELETE FROM firma WHERE  id= '.$id);
    $ekle = $sql->execute();
	
				
	header ("Location:index.php?islem=firmaliste"); 	
		echo 'Kayıt Silindi';
	
?>