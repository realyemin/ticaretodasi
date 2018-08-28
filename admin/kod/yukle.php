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
	if($_FILES)
	{		
		$gecici_ad=$_FILES["dosya"]["tmp_name"];
		$id = $_GET["id"];
		$resimid = $_GET["resimid"];
		
		$kalici_yol="../tcrt/haber";
		$kalici_yol_ad="../tcrt/haber/haber".$id."_".$resimid.".jpg"; // dosya kendi adıyla upload dizinine kaydedilecek
		if(!file_exists($kalici_yol))
		{
			mkdir($kalici_yol,700,true);
		}
		if (move_uploaded_file($gecici_ad,$kalici_yol_ad)) 
		{
			header ("Location:index.php?islem=haberresim&id=".$id); 
		}
		else{
			echo $diller['basarisiz'];
		}
	}
?>
