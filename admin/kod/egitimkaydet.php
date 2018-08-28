
	
			<?php
@$ad=	$_POST['ad'];
@$tarih	= $_POST['tarih'];
$gun=substr($tarih, 0, 2);
$ay=substr($tarih, 3, 2);
$yil=substr($tarih, 6, 4); 
$tarih="$yil-$ay-$gun" ;

@$yeri =	$_POST['yer'];
@$gerceklestiren=	$_POST['gerceklestiren'];
@$sure =	$_POST['sure'];
@$katilanlar =	$_POST['katilanlar'];
@$gerceklesen =	$_POST['gerceklesen'];
$gun=substr($gerceklesen, 0, 2);
$ay=substr($gerceklesen, 3, 2);
$yil=substr($gerceklesen, 6, 4); 
$gerceklesen="$yil-$ay-$gun" ;
@$aciklama =	$_POST['detay'];

					
    $sql = $db->prepare('INSERT INTO egitim (adi,egitim_tarihi,yeri,gerceklestiren,suresi,katilanlar,gerceklesen_tarih,aciklama) VALUES (?,?,?,?,?,?,?,?)');
    $ekle = $sql->execute(array(
 
        $ad,
        $tarih,
        $yeri,
         $gerceklestiren,
        $sure,
 $katilanlar,
 $gerceklesen,
 $aciklama,

        ));
     
    $hata = $sql->errorInfo();
    echo empty($hata[2]) ?  "Başarılı Bir Şekilde Çalıştı." : $hata[2];
	$egitimid = $db->lastInsertId();							
					
			
@$sites=$_POST['liste'];
 
foreach ( $sites as $siteAdi){
	 $sql = $db->prepare('INSERT INTO egitimkatilan (uyeid,egitimid) VALUES (?,?)');
    $ekle = $sql->execute(array(
 
               $siteAdi,
        $egitimid,
         
        ));
}
header ("Location:index.php?islem=egitimliste"); 	
			?>