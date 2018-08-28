
	
			<?php
@$firma =	$_POST['firma'];
@$urun =	$_POST['urun'];
@$kabul =	$_POST['kabul'];
@$teslimat =	$_POST['teslimat'];
@$fiyat =	$_POST['fiyat'];
@$odeme =	$_POST['odeme'];
@$belge =	$_POST['belge'];
@$diger =	$_POST['diger'];
@$tarih	= $_POST['tarih'];
$gun=substr($tarih, 0, 2);
$ay=substr($tarih, 3, 2);
$yil=substr($tarih, 6, 4); 
$tarih="$yil-$ay-$gun" ;



@$toplam= $kabul + $teslimat + $fiyat +$odeme+$belge +$diger ; 



if(isset($firma) )
					{
						
						
   $sql = $db->prepare('INSERT INTO dokuman (baslik) VALUES (?)');
    $ekle = $sql->execute(array(
       "Tedarikçi Değerlendirme Formu",     
        ));						
			
									$id = $db->lastInsertId();							
			
   /////////////
    $sql = $db->prepare('INSERT INTO tedarik (firma_unvan,urun,kabul_durumu,teslimat,fiyat,odeme,belge,diger,toplam,did,tarih) VALUES (?,?,?,?,?,?,?,?,?,?,?)');
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
$id,
$tarih,

        
        ));
     $id = $db->lastInsertId();	
    $hata = $sql->errorInfo();
   

    echo empty($hata[2]) ?  "Başarılı Bir Şekilde Çalıştı." : $hata[2];
						
					
				}
				else {
				echo "Kategori Eklenemedi";
				}
				
				
   header ("Location:index.php?islem=tedarikekle&id=".$id); 

			?>