
	
			<?php
@$etki =	$_POST['gerceklesen'];
@$mevcut =	$_POST['gosterge'];
@$onlem =	$_POST['deger'];
@$id =	$_POST['id'];
@$risk =	$_POST['risk'];

if(isset($etki) )
					{
    $sql = $db->prepare('update sp1b set gerceklesen=? ,gosterge=?, deger=? where id='.$id );
    $ekle = $sql->execute(array(
$etki,
$mevcut,
$onlem,

           
        ));
     
    $hata = $sql->errorInfo();
    echo empty($hata[2]) ?  "Başarılı Bir Şekilde Çalıştı." : $hata[2];
header ("Location:index.php?islem=spb&id=".$risk);
					 
				}
				else {
				echo "Kategori Eklenemedi";
				}
				

			?>