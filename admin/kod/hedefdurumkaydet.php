
	
			<?php
@$surec =	$_POST['hedef'];
@$tanim =	$_POST['parametre'];
@$risk =	$_POST['olcme'];
@$olasilik1 =	$_POST['izleme'];
@$olasilik2 =	$_POST['kabul'];
@$id =	$_POST['isoid'];
@$risk =	$_POST['risk'];



if(isset($surec) )
					{
    $sql = $db->prepare('INSERT INTO hedef (hedef,parametre,olcme,izleme,kabul,isoid) VALUES (?,?,?,?,?,?)');
    $ekle = $sql->execute(array(
$surec,
$tanim,
$risk,
$olasilik1,
$olasilik2,
$id,


        
        ));
     
    $hata = $sql->errorInfo();
    echo empty($hata[2]) ?  "Başarılı Bir Şekilde Çalıştı." : $hata[2];
header ("Location:index.php?islem=hedef&id=".$risk);
								
					
				}
				else {
				echo "Kategori Eklenemedi";
				}
				

			?>