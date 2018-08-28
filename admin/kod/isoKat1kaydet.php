
	
			<?php
@$baslik =	$_POST['baslik'];


if(isset($baslik) )
					{
    $sql = $db->prepare('INSERT INTO isokat1 (kat1) VALUES (?)');
    $ekle = $sql->execute(array(
 
        $baslik,
		                
        ));
     
    $hata = $sql->errorInfo();
    echo empty($hata[2]) ?  "Başarılı Bir Şekilde Çalıştı." : $hata[2];
								
			header ("Location:index.php?islem=isokat1liste"); 
		
				}
				else {
				echo "Kategori Eklenemedi";
				}
				

			?>