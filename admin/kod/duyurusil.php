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
			//kayıtlı tum duyuru resimlerini beraber sil
			$yol1="../tcrt/duyuru/duyuru".$id."_".$resimid.".jpg";
			$yol2="../tcrt/duyuru/orginal".$id."_".$resimid.".jpg";
			if(file_exists($yol1))
			{
				@unlink($yol1);
			}
			if(file_exists($yol2))
			{
				@unlink($yol2);
			}	
		}
		
		$pdfYol="../tcrt/duyuru/duyuru_".$id.".pdf";
		if(isset($pdfYol))
		{
			unlink($pdfYol);
		}
		
		
		$sql1 = $db->prepare("DELETE FROM duyuru WHERE  id= ".$id);
		$sql2 = $db->prepare("DELETE FROM hit WHERE  kaynakAd='duyuru' AND kaynakID = ".$id);
		$sil1 = $sql1->execute();
		$sil2 = $sql2->execute();
		
		header ("Location:index.php?islem=duyuruliste"); 	
	}
?>