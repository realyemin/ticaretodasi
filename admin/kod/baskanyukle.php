<?php
	/*
		-- =============================================
		-- Author		: EKOMURCU
		-- Create date	: 11.07.2018
		-- Description	: Güncelleme
		-- ============================================= 
	*/
?>

<?php
	if(isset($_FILES["dosya"]))
	{
		$gecici_ad=$_FILES["dosya"]["tmp_name"];
		
		$kalici_yol_ad="../tcrt/baskan.jpg"; // dosya kendi adıyla upload dizinine kaydedilecek
		
		if (move_uploaded_file($gecici_ad,$kalici_yol_ad)) // eğer dosya kaydedilirse
		header ("Location:index.php?islem=baskan"); 
		else
		echo $diller['kayitEklenemedi'];
	}			
?>
