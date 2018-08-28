

<?php

		$id = $_GET["id"];
		$isoid=$_POST["isoid"];
		$query = $db->query("SELECT * FROM isoalt WHERE  id= ".$id, PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $row ){
	 unlink($row['link']);
	 
	 }}
$sql = $db->prepare('DELETE FROM isoalt WHERE  id= '.$id);
    $ekle = $sql->execute();
	
		
		echo 'Kayıt Silindi';
	
	
	
	
	
	
	
	
		   header ("Location:index.php?islem=isolinkekle&id=".$isoid); 

	
?>