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
	
	$id = $_GET["id"];	
	for($resimid=1;$resimid<16;$resimid++)
	{
		//kayıtlı tum haber resimlerini beraber sil
		$yol1="../tcrt/haber/haber".$id."_".$resimid.".jpg";
		if(file_exists($yol1))
		{
			@unlink($yol1);
		}
		
	}
	$sql = $db->prepare('DELETE FROM haber WHERE  id= '.$id);
	$sql2 = $db->prepare("DELETE FROM hit WHERE  kaynakAd='haber' AND kaynakID = ".$id);
    $sil1 = $sql1->execute();
    $sil2 = $sql2->execute();
	header ("Location:index.php?islem=haberliste"); 			
?>