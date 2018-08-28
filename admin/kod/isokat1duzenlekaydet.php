
	
			<?php
@$kat1 =	$_POST['kat1'];
@$id =	$_POST['id'];

if(isset($kat1) )
					{
    $sql = $db->prepare('update isokat1 set kat1=? where id='.$id );
    $ekle = $sql->execute(array(
$kat1,

           
        ));
     
    $hata = $sql->errorInfo();
    echo empty($hata[2]) ?  "Başarılı Bir Şekilde Çalıştı." : $hata[2];
header ("Location:index.php?islem=isokat1liste");
					 
				}
				else {
				echo "Kategori Eklenemedi";
				}
				

			?>