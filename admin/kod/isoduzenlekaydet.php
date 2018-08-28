
	
			<?php
@$kat1 =	$_POST['baslik'];
@$kat2 =	$_POST['aciklama'];
@$id =	$_POST['id'];

if(isset($kat1) )
					{
    $sql = $db->prepare('update iso set baslik=?, aciklama=? where id='.$id );
    $ekle = $sql->execute(array(
$kat1,
$kat2,
           
        ));
     
    $hata = $sql->errorInfo();
    echo empty($hata[2]) ?  "Başarılı Bir Şekilde Çalıştı." : $hata[2];
header ("Location:index.php?islem=isoliste");
					 
				}
				else {
				echo "Kategori Eklenemedi";
				}
				

			?>