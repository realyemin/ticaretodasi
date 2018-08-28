<?php
	/*
		-- =============================================
		-- Author		: EKOMURCU
		-- Create date	: 16.07.2018 23:00
		-- Description	: Haber ve Duyurular için önceki ve sonraki haberi bulma
		-- linkOlustur fonksiyonunu kullanır. bkz:fonksiyonlar/php/urlBaslikYarat.php
		-- ============================================= 
	*/
?>
<?php
	function sonrakiHaber($kaynakTablo,$mevcutID,$dil)
	{
		Global $db;
		
		$siradaki=$db->query("SELECT id,kisa FROM $kaynakTablo WHERE onay=1 AND dil='$dil' AND id > '$mevcutID' Limit 1")->fetch();
		if($siradaki['id']>$mevcutID && $siradaki['id']!=""){ 
			//mevcut haber veya duyuru id'inden buyuk ve aktif bir haber varsa onu döndür
			return linkOlustur($kaynakTablo,$siradaki['id'],$siradaki['kisa']);
		}else
		{
			//yoksa mevcut olduğu yerde kal
			return linkOlustur($kaynakTablo,$mevcutID,"")."#";
		}		
	}
	function oncekiHaber($kaynakTablo,$mevcutID,$dil)
	{
		Global $db;
		
		$siradaki=$db->query("SELECT id,kisa FROM $kaynakTablo WHERE onay=1 AND dil='$dil' AND id < '$mevcutID' ORDER BY id DESC Limit 1")->fetch();
		if($siradaki['id'] < $mevcutID && $siradaki['id']!=""){ 
			//mevcut haber veya duyuru id'inden buyuk ve aktif bir haber varsa onu döndür
			return linkOlustur($kaynakTablo,$siradaki['id'],$siradaki['kisa']);
		}else
		{
			//yoksa mevcut olduğu yerde kal
			return linkOlustur($kaynakTablo,$mevcutID,"")."#";
		}		
	}
?>
