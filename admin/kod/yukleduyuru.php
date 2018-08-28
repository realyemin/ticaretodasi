<?php
	/*
		-- =============================================
		-- Author		: EKOMURCU
		-- Create date	: 12.07.2018 01:15
		-- Description	: Yeniden yazıldı
		-- ============================================= 
	*/
?>
<?php
	$gecici_ad=$_FILES["dosya"]["tmp_name"];
	$id = $_GET["id"];
	$resimid = $_GET["resimid"];
	
	$kalici_yol="../tcrt/duyuru";
	$kalici_yol_ad="../tcrt/duyuru/duyuru".$id."_".$resimid.".jpg"; // dosya kendi adıyla upload dizinine kaydedilecek
	
	if(!file_exists($kalici_yol))
	{
		mkdir($kalici_yol,700,true);
	}
	if (move_uploaded_file($gecici_ad,$kalici_yol_ad))
	{
		
		echo $diller['basarili'];	
		header ("Location:index.php?islem=duyururesim&id=".$id); 				
	}
	else
	{
		echo $diller['basarisiz'];
	}
	
?>
