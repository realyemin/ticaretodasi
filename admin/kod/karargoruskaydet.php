
	
			<?php
@$komisyonadi=	$_POST['komisyonadi'];

@$kid	= $_SESSION["kid"];
@$gorus =	$_POST['gorus'];
@$konu =	$_POST['konu'];

@$konudetay =	$_POST['konudetay'];

					
    $sql = $db->prepare('INSERT INTO karargorus (kid,komisyon,gorus,konu,konudetay) VALUES (?,?,?,?,?)');
    $ekle = $sql->execute(array(
 		$kid , 
        $komisyonadi,
        $gorus,
        $konu,
         $konudetay,
        
        ));
     
    $hata = $sql->errorInfo();
    echo empty($hata[2]) ?  "Başarılı Bir Şekilde Çalıştı." : $hata[2];
	$id1 = $db->lastInsertId();							
					
		$gecici_ad=$_FILES["dosya"]["tmp_name"];
		//$id1 = $_GET["id"];
		//$resimid = $_GET["resimid"];

$kalici_yol_ad="../tcrt/karargorus/karar_".$id1.".pdf"; // dosya kendi adıyla upload dizinine kaydedilecek

if (move_uploaded_file($gecici_ad,$kalici_yol_ad)) // eğer dosya kaydedilirse
//   echo "Dosya başarı ile yüklendi.";
 echo "Yükleme başaılı!";

else
 echo "Yükleme başarısız!";

header ("Location:index.php?islem=karargorusliste"); 

			?>