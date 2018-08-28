
	
			<?php
@$ad =	$_POST['baslik'];
@$d1 =	$_POST['d1'];
@$d2 =	$_POST['d2'];
@$link =	$_POST['link'];
@$kat =	$_POST['kat'];

if(isset($kat) )
					{
    $sql = $db->prepare('INSERT INTO link (ad,d1,d2,link,kat,dil) VALUES (?,?,?,?,?,?)');
    $ekle = $sql->execute(array(
 
        $ad,
        $d1,
        $d2,
		$link,
         $kat,
        $dil,
        ));
     
    $hata = $sql->errorInfo();
 echo empty($hata[2]) ?  "Başarılı Bir Şekilde Çalıştı." : $hata[2];
			
if($dil==1)								
header ("Location:index.php?islem=linkliste"); 	
else
header ("Location:index2.php?islem=linkliste"); 	

				}
				else {
				echo "Hata gerçekleşti. İşlemi tekrar deneyin";
				}
				

			?>