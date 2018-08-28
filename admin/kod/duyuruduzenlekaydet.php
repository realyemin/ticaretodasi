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
	if($_POST)
	{
		@$baslik =	$_POST['baslik'];
		@$detay =	$_POST['detay'];
		@$durum =	$_POST['durum'];
		@$manset =	$_POST['manset'];
		
		@$id =	$_POST['id'];
		@$kategoriID =	$_POST['kategoriID'];
		
		if(isset($baslik) )
		{
			$sql = $db->prepare('update duyuru set kisa=? ,uzun=?, onay=?, manset=?, kategoriID=? where id='.$id );
			$ekle = $sql->execute(array(
			$baslik,
			$detay,
			$durum,
			$manset,	
			$kategoriID
			));
			
			$hata = $sql->errorInfo();
			echo empty($hata[2]) ?  $diller['basarili'] : $hata[2];
			
			if(isset($_FILES["dosya"]["name"]))
			{
				$gecici_ad=$_FILES["dosya"]["tmp_name"];
					
				$kalici_yol_ad="../tcrt/duyuru/duyuru_".$id.".pdf"; // dosya kendi adıyla upload dizinine kaydedilecek
				
				if (move_uploaded_file($gecici_ad,$kalici_yol_ad)) // eğer dosya kaydedilirse			
				header ("Location:index.php?islem=duyuruliste"); 						
				else
				echo $diller['basarisiz'];
			}
			header ("Location:index.php?islem=duyuruliste");
			
		}
		else {
			echo $diller['basarisiz'];
		}
		
	}
?>