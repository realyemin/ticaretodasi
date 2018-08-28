
	
			<?php
@$baslik =	$_POST['baslik'];
@$dokumanno =	$_POST['rapordonemi'];
@$id =	$_POST['id'];

if(isset($baslik) )
					{
    $sql = $db->prepare('update spust set baslik=? ,rapordonemi=? where id='.$id );
    $ekle = $sql->execute(array(
$baslik,
$dokumanno,
      
        ));
     
    $hata = $sql->errorInfo();
    echo empty($hata[2]) ?  "Başarılı Bir Şekilde Çalıştı." : $hata[2];
header ("Location:index.php?islem=spa&id=".$id);
					 
				}
				else {
				echo "Kategori Eklenemedi";
				}
				

			?>