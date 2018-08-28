
	
			<?php
@$baslik =	$_POST['baslik'];


if(isset($baslik) )
					{
    $sql = $db->prepare('INSERT INTO firma (ad) VALUES (?)');
    $ekle = $sql->execute(array(
 
        $baslik,
		              
        ));
     
    $hata = $sql->errorInfo();
    echo empty($hata[2]) ?  "Başarılı Bir Şekilde Çalıştı." : $hata[2];
			header ("Location:index.php?islem=firmaliste"); 	
					
					
				}
				else {
				echo "Kategori Eklenemedi";
				}
				

			?>