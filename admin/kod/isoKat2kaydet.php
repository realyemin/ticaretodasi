
	
			<?php
@$kat1 =	$_POST['kat1'];
@$kat2 =	$_POST['kat2'];

if(isset($kat1) )
					{
    $sql = $db->prepare('INSERT INTO isokat2 (kat1,kat2) VALUES (?,?)');
    $ekle = $sql->execute(array(
 
        $kat1,
		        $kat2,
		               
        ));
     
    $hata = $sql->errorInfo();
    echo empty($hata[2]) ?  "Başarılı Bir Şekilde Çalıştı." : $hata[2];
								
					
				}
				else {
				echo "Kategori Eklenemedi";
				}
				

			?>