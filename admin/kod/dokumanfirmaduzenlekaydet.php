
	
			<?php
@$baslik =	$_POST['baslik'];
@$dokumanno =	$_POST['dokumanno'];
@$yayintarihi =	$_POST['yayintarihi'];
@$revizyonno =	$_POST['revizyonno'];
@$revizyontarihi =	$_POST['revizyontarihi'];
@$sayfa =	$_POST['sayfa'];

$id =	$_POST['isoid'];

$firma =	$_POST['firma'];

if(isset($baslik) )
					{
    $sql = $db->prepare('update dokuman set baslik=? ,dokumanno=? ,yayintarihi=? ,revizyonno=? ,revizyontarihi=? ,sayfa=? where id='.$id );
    $ekle = $sql->execute(array(
$baslik,
$dokumanno,
$yayintarihi,
$revizyonno,
$revizyontarihi,
$sayfa,



        
        ));
     
    $hata = $sql->errorInfo();
    echo empty($hata[2]) ?  "Başarılı Bir Şekilde Çalıştı." : $hata[2];
header ("Location:index.php?islem=tedarikekle&id=".$firma);
								
					
				}
				else {
				echo "Kategori Eklenemedi";
				}
				

			?>