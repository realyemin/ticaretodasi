
	
			<?php


@$dokumanno =	$_POST['dokumanno'];
@$baslik =	$_POST['baslik'];

@$yayintarihi=$_POST['yayintarihi'] ;
@$revizyontarihi =	$_POST['revizyontarihi'];
@$revizyonno =	$_POST['revizyonno'];
@$sayfa =	$_POST['revizyonno'];

					
    $sql = $db->prepare("update dokuman set baslik=?, dokumanno=? ,yayintarihi=? ,revizyontarihi=? ,revizyonno=?, sayfa=? where hedef=0 and risk=0");
    $ekle = $sql->execute(array(
 		$baslik,
        $dokumanno,
        $yayintarihi,
        $revizyontarihi,
         $revizyonno ,
        $sayfa,
        ));
     
    $hata = $sql->errorInfo();
    echo empty($hata[2]) ?  "Başarılı Bir Şekilde Çalıştı." : $hata[2];
	$egitimid = $db->lastInsertId();							
					
			header ("Location:index.php?islem=kararekle"); 	
//@$sites=$_POST['liste'];
 
//foreach ( $sites as $siteAdi){
	// $sql = $db->prepare('INSERT INTO egitimkatilan (uyeid,egitimid) VALUES (?,?)');
    //$ekle = $sql->execute(array(
 
      //         $siteAdi,
       /// $egitimid,
         
        //));
//}
			?>