
	
			<?php
@$komisyonadi=	$_POST['komisyonadi'];
@$tarih	= $_POST['karartarihi'];
$gun=substr($tarih, 0, 2);
$ay=substr($tarih, 3, 2);
$yil=substr($tarih, 6, 4); 
$tarih="$yil-$ay-$gun" ;

@$kararsayisi =	$_POST['kararsayisi'];
@$yil =	$_POST['yil'];

					
    $sql = $db->prepare('INSERT INTO kararpdf (komisyon,karartarihi,kararsayisi,yil) VALUES (?,?,?,?)');
    $ekle = $sql->execute(array(
 
        $komisyonadi,
        $tarih,
        $kararsayisi,
         $yil ,
        
        ));
     
    $hata = $sql->errorInfo();
    echo empty($hata[2]) ?  "Başarılı Bir Şekilde Çalıştı." : $hata[2];
	$id1 = $db->lastInsertId();							
					
		$gecici_ad=$_FILES["dosya"]["tmp_name"];
		//$id1 = $_GET["id"];
		//$resimid = $_GET["resimid"];

$kalici_yol_ad="../tcrt/kararpdf/karar_".$id1.".pdf"; // dosya kendi adıyla upload dizinine kaydedilecek

if (move_uploaded_file($gecici_ad,$kalici_yol_ad)) // eğer dosya kaydedilirse
//   echo "Dosya başarı ile yüklendi.";
 header ("Location:index.php?islem=kararpdfliste"); 

else
   echo "Yükleme başarısız!";


			?>