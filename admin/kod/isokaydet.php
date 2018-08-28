
	
			<?php
@$baslik =	$_POST['baslik'];
@$aciklama =	$_POST['aciklama'];
@$kat1 =	$_POST['kat1'];
@$kat2 =	$_POST['lat2'];


if(isset($baslik) )
					{
    $sql = $db->prepare('INSERT INTO iso (kat1,kat2,baslik,aciklama) VALUES (?,?,?,?)');
    $ekle = $sql->execute(array(
        $kat1,
        $kat2,
 
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
				
				
   header ("Location:index.php?islem=isolinkekle&id=".$id); 

			?>