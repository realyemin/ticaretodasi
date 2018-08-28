

<?php

		$id = $_GET["id"];
		
$sql = $db->prepare('DELETE FROM spkat WHERE  id= '.$id);
    $ekle = $sql->execute();
						 header ("Location:index.php?islem=spkatliste"); 

		
		echo 'Kayıt Silindi';
	
?>