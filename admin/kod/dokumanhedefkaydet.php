
	
			<?php
@$baslik =	$_POST['baslik'];
@$dokumanno =	$_POST['dokumanno'];
@$yayintarihi =	$_POST['yayintarihi'];
@$revizyonno =	$_POST['revizyonno'];
@$revizyontarihi =	$_POST['revizyontarihi'];
@$sayfa =	$_POST['sayfa'];
@$surecadi =	$_POST['surecadi'];
@$surecsahibi =	$_POST['surecsahibi'];
@$id =	$_POST['isoid'];

if(isset($baslik) )
					{
    $sql = $db->prepare('INSERT INTO dokuman (baslik,dokumanno,yayintarihi,revizyonno,revizyontarihi,sayfa,surecadi,surecsahibi,hedef) VALUES (?,?,?,?,?,?,?,?,?)');
    $ekle = $sql->execute(array(
$baslik,
$dokumanno,
$yayintarihi,
$revizyonno,
$revizyontarihi,
$sayfa,
$surecadi,
$surecsahibi,
$id,


        
        ));
     
    $hata = $sql->errorInfo();
    echo empty($hata[2]) ?  "Başarılı Bir Şekilde Çalıştı." : $hata[2];
header ("Location:index.php?islem=hedef&id=".$id);
								
					
				}
				else {
				echo "Kategori Eklenemedi";
				}
				

			?>