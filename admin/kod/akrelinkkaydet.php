<?php
	/*
		-- =============================================
		-- Author		: EKOMURCU
		-- Create date	: 10.07.2018
		-- Description	: Güncelleme
		-- ============================================= 
	*/
?>
<?php
	@$baslik =$_POST['baslik'];
	@$link=	$_POST['link'];
	@$aciklama =$_POST['aciklama'];
	@$id =$_GET["id"];
	
    $sql = $db->prepare('INSERT INTO aklink (baslik,link,aciklama,akid) VALUES (?,?,?,?)');
    $ekle = $sql->execute(array(	
	$baslik,
	$link,
	$aciklama,
	$id,		
	));
	
    $hata = $sql->errorInfo();
    echo empty($hata[2]) ?  $diller['basarili'] : $hata[2];
	
	$gecici_ad=$_FILES["dosya"]["tmp_name"];
	$id1 = $db->lastInsertId();
	$kalici_yol_ad="../tcrt/akreditasyon/akreditasyon_".$id1.".pdf"; // dosya kendi adıyla upload dizinine kaydedilecek
	if(file_exists($kalici_yol_ad)) unlink($kalici_yol_ad);
	if (move_uploaded_file($gecici_ad,$kalici_yol_ad)) // eğer dosya kaydedilirse
	header ("Location:index.php?islem=akrelinkler&id=".$id); 	
	else
	echo $diller['kayitEklenemedi'];;
?>