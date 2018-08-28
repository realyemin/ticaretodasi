
	
			<?php
@$id =	$_GET['id'];




/////////////////////////////////////////


// İzin Verilen Dosya Türleri

$query = $db->query("select * from  kararlar where id =".$id, PDO::FETCH_ASSOC);
			if ( $query->rowCount() ){
     foreach( $query as $row ){
		  $karar= $row['gidenek'];
		  
	 }}
	 
	unlink($karar);
	

    $sql = $db->prepare('update kararlar set gidenek = "" where id = ?');
    $ekle = $sql->execute(array(
       
$id,
        
        ));
     
    $hata = $sql->errorInfo();
    echo empty($hata[2]) ?  "Başarılı Bir Şekilde Çalıştı." : $hata[2];
		//				$id = $db->lastInsertId();							

				
				
header ("Location:index.php?islem=kararliste"); 

			?>