

<?php

		$id = $_GET["id"];
		

$sql = $db->prepare('DELETE FROM kararpdf WHERE  id= '.$id);
    $ekle = $sql->execute();
 if(file_exists("../tcrt/kararpdf/karar_".$id.".pdf")) 
				  {
					  unlink("../tcrt/kararpdf/karar_".$id.".pdf");
					  
					  
				  }
 header ("Location:index.php?islem=kararpdfliste"); 

		
		
	
?>