
	
			<?php
@$ad=	$_POST['ad'];

					
    $sql = $db->prepare('INSERT INTO komisyonlar (ad) VALUES (?)');
    $ekle = $sql->execute(array(
 
        $ad,
         ));
     
    $hata = $sql->errorInfo();
    echo empty($hata[2]) ?  "Başarılı Bir Şekilde Çalıştı." : $hata[2];
	$komisyonid = $db->lastInsertId();							
					
			
@$sites=$_POST['liste'];
 
foreach ( $sites as $siteAdi){
	 $sql = $db->prepare('INSERT INTO komisyonuye (uyeid,komisyonid) VALUES (?,?)');
    $ekle = $sql->execute(array(
 
 
               $siteAdi,
        $komisyonid,
         
        ));
}
			?>