
	
			<?php
@$surec =	$_POST['surec'];
@$tanim =	$_POST['tanim'];
@$risk =	$_POST['riskler'];
@$olasilik1 =	$_POST['olasilik1'];
@$olasilik2 =	$_POST['olasilik2'];
@$etki =	$_POST['etki'];
@$mevcut =	$_POST['mevcut'];
@$onlem =	$_POST['onlem'];
@$id =	$_POST['isoid'];
@$risk =	$_POST['risk'];


@$riskpuan =($olasilik1*$olasilik2)*$etki/$mevcut;
if($riskpuan<26)
$riskseviye="Düşük Risk";
elseif($riskpuan<51)
$riskseviye ="Orta Risk";
else
$riskseviye ="Yüksek Risk";


if(isset($risk) )
					{
    $sql = $db->prepare('INSERT INTO risk (surec,tanim,risk,olasilik1,olasilik2,etki,mevcut,riskpuan,riskseviye,onlem,isoid) VALUES (?,?,?,?,?,?,?,?,?,?,?)');
    $ekle = $sql->execute(array(
$surec,
$tanim,
$risk,
$olasilik1,
$olasilik2,
$etki,
$mevcut,
$riskpuan,
$riskseviye,
$onlem,
$id,


        
        ));
     
    $hata = $sql->errorInfo();
    echo empty($hata[2]) ?  "Başarılı Bir Şekilde Çalıştı." : $hata[2];
header ("Location:index.php?islem=risk&id=".$risk);
								
					
				}
				else {
				echo "Kategori Eklenemedi";
				}
				

			?>