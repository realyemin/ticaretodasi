
	
			<?php
@$baslik =	$_POST['rapor'];
@$aciklama =	$_POST['aciklama'];


if(isset($aciklama) )
					{
    $sql = $db->prepare('INSERT INTO spust (rapordonemi,baslik) VALUES (?,?)');
    $ekle = $sql->execute(array(
        $baslik,
		$aciklama,
 
        
        ));
     
    $hata = $sql->errorInfo();
    echo empty($hata[2]) ?  "Başarılı Bir Şekilde Çalıştı." : $hata[2];
						$id = $db->lastInsertId();							
			
					
				}
				else {
				echo "Kategori Eklenemedi";
				}
				
				
   header ("Location:index.php?islem=spa&id=".$id); 

			?>