

<?php

		$id = $_GET["id"];
		

	$sql = $db->prepare('DELETE FROM kararlar WHERE  id= '.$id);
    $ekle = $sql->execute();
	
	header ("Location:index.php?islem=kararliste"); 	

?>