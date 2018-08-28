

<?php

		$id = $_GET["id"];
		

	$sql = $db->prepare('DELETE FROM link WHERE  id= '.$id);
    $ekle = $sql->execute();
	if($dil==1)								
header ("Location:index.php?islem=linkliste"); 	
else
header ("Location:index2.php?islem=linkliste"); 	


?>