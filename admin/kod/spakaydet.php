
	
			<?php
@$surec =	$_POST['anatemano'];
@$tanim =	$_POST['amacno'];
@$risk =	$_POST['hedefno'];
@$olasilik1 =	$_POST['stratejino'];
@$olasilik2 =	$_POST['planlanan'];
@$etki =	$_POST['gerceklesen'];
@$mevcut =	$_POST['gosterge'];
@$onlem =	$_POST['deger'];
@$aciklama =	$_POST['aciklama'];
@$kat =	$_POST['spkat'];
@$id =	$_POST['id'];


    $sql = $db->prepare('INSERT INTO sp1a (anatema,amac,hedef,strateji,planlanan,gerceklesen,gosterge,deger,aciklama,spkat,spustid) VALUES (?,?,?,?,?,?,?,?,?,?,?)');
    $ekle = $sql->execute(array(
$surec,
$tanim,
$risk,
$olasilik1,
$olasilik2,
$etki,
$mevcut,
$onlem,
$aciklama,
$kat,
$id,
        
        ));
     
    $hata = $sql->errorInfo();
    echo empty($hata[2]) ?  "Başarılı Bir Şekilde Çalıştı." : $hata[2];
header ("Location:index.php?islem=spa&id=".$id);
								
					

			?>