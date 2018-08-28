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
	if(isset($_GET["id"]))
	{
		$id = $_GET["id"];
		
		for($resimid=1;$resimid<16;$resimid++)
		{
			//kayıtlı tum etkinlik resimlerini beraber sil
			$yol1="../tcrt/etkinlik/etkinlik".$id."_".$resimid.".jpg";
		
			if(file_exists($yol1))
			{
				@unlink($yol1);
			}
			
		}
		$sql = $db->prepare('DELETE FROM etkinlik WHERE  id= '.$id);
		$ekle = $sql->execute();
				
		header ("Location:index.php?islem=etkinlikliste");
		
	}
?>