
	
			<?php
@$baslik =	$_POST['baslik1'];
@$link =	$_POST['baslik2'];


if(isset($baslik) )
					{
    $sql = $db->prepare('INSERT INTO spkat (baslik1,baslik2) VALUES (?,?)');
    $ekle = $sql->execute(array(
 
        $baslik,
		        $link,

        
        ));
     
    $hata = $sql->errorInfo();
    echo empty($hata[2]) ?  "Başarılı Bir Şekilde Çalıştı." : $hata[2];
								
					 header ("Location:index.php?islem=spkatliste"); 

				}
				else {
				echo "Kategori Eklenemedi";
				}
				

			?>