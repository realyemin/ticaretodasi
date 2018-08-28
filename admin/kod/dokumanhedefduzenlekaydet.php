
	
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
@$risk =	$_POST['risk'];
if(isset($baslik) )
					{
    $sql = $db->prepare('update dokuman set baslik=? ,dokumanno=? ,yayintarihi=? ,revizyonno=? ,revizyontarihi=? ,sayfa=? ,surecadi=?, surecsahibi=? where id='.$id );
    $ekle = $sql->execute(array(
$baslik,
$dokumanno,
$yayintarihi,
$revizyonno,
$revizyontarihi,
$sayfa,
$surecadi,
$surecsahibi,


        
        ));
     
    $hata = $sql->errorInfo();
    echo empty($hata[2]) ?  "Başarılı Bir Şekilde Çalıştı." : $hata[2];
header ("Location:index.php?islem=hedef&id=".$risk);
					 
				}
				else {
				echo "Kategori Eklenemedi";
				}
				

			?>