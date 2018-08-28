
	
			<?php
@$baslik =	$_POST['baslik'];


    $sql = $db->prepare('update spust set baslik=? where id=1');
    $ekle = $sql->execute(array(
$baslik,

      
        ));
     
    $hata = $sql->errorInfo();
    echo empty($hata[2]) ?  "Başarılı Bir Şekilde Çalıştı." : $hata[2];
//header ("Location:index.php?islem=sp&id=1");
				

			?>