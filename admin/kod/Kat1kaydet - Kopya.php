
	
			<?php
@$baslik =	$_POST['baslik'];
@$link =	$_POST['link'];


if(isset($baslik) )
					{
    $sql = $db->prepare('INSERT INTO kat1 (ad,link) VALUES (?,?)');
    $ekle = $sql->execute(array(
 
        $baslik,
		        $link,

        
        ));
     
    $hata = $sql->errorInfo();
    echo empty($hata[2]) ?  "Başarılı Bir Şekilde Çalıştı." : $hata[2];
								
					
				}
				else {
				echo "Kategori Eklenemedi";
				}
				

			?>