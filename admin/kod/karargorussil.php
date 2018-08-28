

<?php

		$id = $_GET["id"];
		

$sql = $db->prepare('DELETE FROM karargorus WHERE  id= '.$id);
    $ekle = $sql->execute();
 if(file_exists("tcrt/karargorus/karar_".$id.".pdf")) 
				  {
					  unlink("tcrt/karargorus/karar_".$id.".pdf");
					  
					  
				  }
 header ("Location:index.php?islem=karargorusliste"); 

		
		
	
?>