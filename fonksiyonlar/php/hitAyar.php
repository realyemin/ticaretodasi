<?php
	/*
		-- =============================================
		-- Author		: EKOMURCU
		-- Create date	: 16.07.2018 23:00
		-- Description	: Haber,Duyuru,İcerik,Anket gibi
		-- herhangi bir veri için hit kaydı tutması için yazıldı
		-- ============================================= 
	*/
?>
<?php
	function hitEkle($kaynakAd,$kaynakID)
	{
		Global $db;
		$hit=$db->query("SELECT hit FROM hit WHERE kaynakAd='".$kaynakAd."' AND  kaynakID = '".$kaynakID."'")->fetch();
		if($hit['hit']>0){ 
			$hitArttir=$db->query("UPDATE hit SET hit=(hit+1) WHERE kaynakAd='".$kaynakAd."' AND kaynakID='".$kaynakID."'"); 
		}
		else
		{ 
			$db->query("INSERT INTO hit (kaynakAd,hit,kaynakID) VALUES('".$kaynakAd."',1,'".$kaynakID."')");
		}				
	}
	function hitGoster($kaynakAd,$kaynakID)
	{
		
		Global $db;
		$hit=$db->query("SELECT hit FROM hit WHERE kaynakAd='".$kaynakAd."' AND  kaynakID = '".$kaynakID."'")->fetch();
		return $hit['hit'];
		
	}
?>