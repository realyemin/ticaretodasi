
	
			<?php
@$firma =	$_POST['firma'];
@$urun =	$_POST['urun'];
@$kabul =	$_POST['kabul'];
@$teslimat =	$_POST['teslimat'];
@$fiyat =	$_POST['fiyat'];
@$odeme =	$_POST['odeme'];
@$belge =	$_POST['belge'];
@$diger =	$_POST['diger'];
@$id=$_POST['id'];
@$fir=$_POST['fir'];


@$toplam= $kabul + $teslimat + $fiyat +$odeme+$belge +$diger ; 



if(isset($firma) )
					{
					
    $sql = $db->prepare('update tedarik set firma_unvan=?, urun=?, kabul_durumu=?, teslimat=?, fiyat=? , odeme=?, belge=?, diger=?, toplam=? where id='.$fir);
    $ekle = $sql->execute(array(
       $firma,
	   $urun,
	   $kabul,
	   $teslimat,
	   $fiyat,
	   $odeme,
	   $belge,
	   $diger,
$toplam,
        
        ));
     
    $hata = $sql->errorInfo();
   

    echo empty($hata[2]) ?  "Başarılı Bir Şekilde Çalıştı." : $hata[2];
						
					
				}
				else {
				echo "Kategori Eklenemedi";
				}
				
				
 header ("Location:index.php?islem=tedarikekle&id=".$fir); 

			?>