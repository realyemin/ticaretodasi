<?php
	/*
		-- =============================================
		-- Author		: EKOMURCU
		-- Create date	: 20.08.2018
		-- Description	: Güncelleme
		-- ============================================= 
	*/
?>
<?php
	if($_FILES)
	{		
		$gecici_ad=$_FILES["dosya"]["tmp_name"];
		$id = $_GET["id"];	
		
		$kalici_yol="../tcrt/link";
		$kalici_yol_ad="../tcrt/link/link".$id.".jpg"; 
		if(!file_exists($kalici_yol))
		{
			mkdir($kalici_yol,700,true);
		}
		if (move_uploaded_file($gecici_ad,$kalici_yol_ad)) 
		{
			 header ("Location:index.php?islem=linkresim&id=".$id); 
		}
		else{
			echo $diller['basarisiz'];
		}
	}
?>