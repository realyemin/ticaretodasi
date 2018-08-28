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
		@$detay	= $_POST['detay'];
		@$ekleyen =	$_SESSION["kid"];
		$gun=date("d");
		$ay=date("m");
		$yil=date("Y");
		
		@$tarih	= $yil.".".$ay.".".$gun;
		@$durum =	$_POST['durum'];
		//@$manset =	$_POST['manset'];
		@$kategoriID =	$_POST['kategoriID'];
		
		if(isset($baslik) && !empty($detay) )
		{
			$sql = $db->prepare('INSERT INTO duyuru (kisa,uzun,tarih,kadi,onay,dil,kategoriID) VALUES (?,?,?,?,?,?,?)');
			$ekle = $sql->execute(array(			
			$baslik,
			$detay,
			$tarih,
			$ekleyen,
			$durum,
			$_SESSION["dil"],
			$kategoriID;
			));
			
			$hata = $sql->errorInfo();
			echo empty($hata[2]) ?  $diller['basarili'] : $hata[2];
			
			if(isset($_FILES["dosya"]["tmp_name"]) && $_FILES["dosya"]["tmp_name"]!="")
			{
				
				$gecici_ad=$_FILES["dosya"]["tmp_name"];
				$id = $db->lastInsertId();
				
				$kalici_yol_ad="../tcrt/duyuru/duyuru_".$id.".pdf"; // dosya kendi adıyla upload dizinine kaydedilecek
				
				if (move_uploaded_file($gecici_ad,$kalici_yol_ad)) // eğer dosya kaydedilirse			
				header ("Location:index.php?islem=duyuruliste"); 						
				else
				echo $diller['basarisiz'];
			}		
		}
		else {
			echo $diller['kayitEklenemedi'];
		}
	}	
?>		