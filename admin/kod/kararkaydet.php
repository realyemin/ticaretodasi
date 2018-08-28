
	
			<?php
@$komisyonadi=	$_POST['komisyonadi'];
@$tarih	= $_POST['karartarihi'];
$gun=substr($tarih, 0, 2);
$ay=substr($tarih, 3, 2);
$yil=substr($tarih, 6, 4); 
$tarih="$yil-$ay-$gun" ;

@$kararsayisi =	$_POST['kararsayisi'];
@$etkinkarar=	$_POST['etkinkarar'];
@$gidenyts =	$_POST['gidenyts'];
@$nihaidurum =	$_POST['nihaidurum'];
@$sonuc =	$_POST['sonuc'];
					
    $sql = $db->prepare('INSERT INTO kararlar (komisyon,karartarihi,kararsayisi,etkinkarar,gidenyazi_tarih_sayi,nihaidurum,sonuc) VALUES (?,?,?,?,?,?,?)');
    $ekle = $sql->execute(array(
 
        $komisyonadi,
        $tarih,
        $kararsayisi,
         $etkinkarar ,
        $gidenyts,
 $nihaidurum,
 $sonuc,
 
         ));
     
    $hata = $sql->errorInfo();
    echo empty($hata[2]) ?  "Başarılı Bir Şekilde Çalıştı." : $hata[2];
	$egitimid = $db->lastInsertId();							
					
			header ("Location:index.php?islem=kararliste"); 	
//@$sites=$_POST['liste'];
 
//foreach ( $sites as $siteAdi){
	// $sql = $db->prepare('INSERT INTO egitimkatilan (uyeid,egitimid) VALUES (?,?)');
    //$ekle = $sql->execute(array(
 
      //         $siteAdi,
       /// $egitimid,
         
        //));
//}
			?>