<?php
	/*
		-- =============================================
		-- Author		: EKOMURCU
		-- Create date	: 20.07.2018
		-- Description	: Güncelleme
		-- ============================================= 
	*/
?>
<?php
	$gecici_ad=$_FILES["dosya"]["tmp_name"];
	$id = $_GET["id"];
	$resimid = $_GET["resimid"];
	$kalici_yol="../tcrt/etkinlik";
	$kalici_yol_ad="../tcrt/etkinlik/etkinlik".$id."_".$resimid.".jpg"; // dosya kendi adıyla upload dizinine kaydedilecek
	if(!file_exists($kalici_yol))
	{
		mkdir($kalici_yol,700,true);
	}
	if (move_uploaded_file($gecici_ad,$kalici_yol_ad)) // eğer dosya kaydedilirse
	{				
		header ("Location:index.php?islem=etkinlikresim&id=".$id); 
	}		
	else
	{
		echo $diller['basarisiz'];
	}
?>
