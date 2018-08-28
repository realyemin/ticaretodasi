<?php
	/*
		-- =============================================
		-- Author		: EKOMURCU
		-- Create date	: 11.07.2018 18:25
		-- Description	: Yeniden yazıldı
		-- ============================================= 
	*/
?>
<?php
	if($_POST && $_FILES)
	{
		
		$gecici_ad=$_FILES["dosya"]["tmp_name"];
		$id = $_GET["id"];
		$resimid = $_GET["id"];
		
		$klasor="../tcrt/dil/"; // dosya kendi adıyla upload dizinine kaydedilecek
		if(!file_exists($klasor))
		{
			mkdir($klasor);
		}
		$kalici_yol_ad=$klasor."dil".$id.".png"; // dosya kendi adıyla upload dizinine kaydedilecek
		
		if (move_uploaded_file($gecici_ad,$kalici_yol_ad)) // eğer dosya kaydedilirse
		echo $diller['basarili'];
		else
		echo $diller['basarisiz'];
	}
?>
<html>
	<body>
		<form name="yukleme" method="post" enctype="multipart/form-data">
			<h2><?php echo $diller['yuklecekDosyaSec'];?></h2>
			<input type="file" class="form-control" name="dosya" accept="image/*"><br>
			<input class="btn btn-success" type="submit" name="yukle" value="<?php echo $diller['yukle']; ?>">
		</form>
	</body>
</html>	