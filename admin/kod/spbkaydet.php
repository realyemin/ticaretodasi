
	
			<?php
@$etki =	$_POST['gerceklesen'];
@$mevcut =	$_POST['gosterge'];
@$onlem =	$_POST['deger'];
@$id =	$_POST['id'];


    $sql = $db->prepare('INSERT INTO sp1b (gerceklesen,gosterge,deger,spustid) VALUES (?,?,?,?)');
    $ekle = $sql->execute(array(
$etki,
$mevcut,
$onlem,
$id,
        
        ));
     
    $hata = $sql->errorInfo();
    echo empty($hata[2]) ?  "Başarılı Bir Şekilde Çalıştı." : $hata[2];
header ("Location:index.php?islem=spb&id=".$id);
								
					

			?>