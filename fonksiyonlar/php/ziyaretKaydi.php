<?php
	/*
		-- =============================================
		-- Author		: EKOMURCU
		-- Create date	: 25.07.2018 16:15
		-- Description	: sayfaya gelen ziyaretcileri kaydını tutmak için yazıldı
		-- (Hangi adresten gelmiş, hangi ip ile bağlanmış, hangi sayfayı görüntülemiş)
		-- ============================================= 
	*/
?>
<?php
	if(isset($_SERVER['HTTP_REFERER']))
	{
		
		// Regular expression ile sitenize link veren sunucunun domain adresini alıyoruz
		preg_match('@^(?:http://)?([^/]+)@i', $_SERVER['HTTP_REFERER'], $matches);
		$visitor_referer = $matches[1];
		// Ziyaretçinin ip adresini alıyoruz
		$visitor_ip = $_SERVER['REMOTE_ADDR'];
		// İstek yapılan sayfanın adresini alıyoruz
		$visitor_request_url =$_SERVER['REQUEST_URI'];		
		
		$bugun=date("Y-m-d H:i:s");
		// Daha önce ziyeretçinin aynı günde aynı ip adresle veya aynı sayfaya istek yapıp yapmadığını   
		// burada kontrol ediyoruz. Böylece aynı verileri tekrar girmekten kurtuluyoruz
		$sql="select * FROM ziyaret where (ip= '$visitor_ip') AND (tarih = '$bugun') AND (sayfa = '$visitor_referer')";
		$sorgu=$db->query($sql);
		
		// 0 değilse daha önce bu verinin girilmediğini anlıyoruz
		if (!$sorgu->fetchColumn())	
		{
			$sql="INSERT INTO ziyaret (domain,ip,sayfa) VALUES ('$visitor_referer','$visitor_ip','$visitor_request_url')";
			$sorgu=$db->query($sql);
		}			
	}	
	// Bu kısımda ziyaretçi sitenizi direk olarak ziyaret ettiğinde yapılacak işi yapıyoruz.
	// Tek farkı HTTP_REFERER bilgisine kendi domainimzi yazıyoruz. 	
	else 	
	{			
		
		$visitor_ip = $_SERVER['REMOTE_ADDR'];
		$visitor_request_url =$_SERVER['REQUEST_URI'];
		$kendi=$_SERVER['SERVER_NAME'];
		$bugun=date("Y-m-d H:i:s");
		$sql="select * FROM ziyaret where (ip= '$visitor_ip') AND (tarih = '$bugun') AND (sayfa = '$kendi')";
		$sorgu=$db->query($sql);
		
		if (!$sorgu->fetchColumn())	
		{
			$sql="INSERT INTO ziyaret (domain,ip,sayfa) VALUES ('$kendi','$visitor_ip','$visitor_request_url')";
			$sorgu=$db->query($sql);
		}
	}
?>
