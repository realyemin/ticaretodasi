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
		@$mesaj =	$_POST['mesaj'];
		@$vizyon =	$_POST['vizyon'];
		@$misyon =	$_POST['misyon'];
		@$siteadi =	$_POST['siteadi'];
		@$baslik =	$_POST['baslik'];
		@$altbaslik =	$_POST['altbaslik'];
		@$anahtar =	$_POST['anahtar'];
		//@$dil =	$_POST['dil'];
		@$haber =	$_POST['haber'];
		@$duyuru =	$_POST['duyuru'];
		@$etkinlik =	$_POST['etkinlik'];
		@$link1 =	$_POST['kategori1'];
		@$link2 =	$_POST['kategori2'];
		@$link3 =	$_POST['kategori3'];
		@$link4 =	$_POST['kategori4'];
		@$link5 =	$_POST['kategori5'];
		@$tab1 =	$_POST['tab1'];
		@$tab2 =	$_POST['tab2'];
		@$tab3 =	$_POST['tab3'];
		@$tab4 =	$_POST['tab4'];
		@$id =	$_POST['id'];
		
		
		$sql = $db->prepare('update genel set baskanmesaj=? ,vizyon=?, misyon=?, siteadi=?, baslik=?, altbaslik=?, anahtar=?, haber=?,duyuru=?,etkinlik=?, link1=?,link2=?,link3=?,link4=?,link5=?,tabbaslik1=?,tabbaslik2=?,tabbaslik3=?,tabbaslik4=? where id='.$id );
		$ekle = $sql->execute(array(
		$mesaj,
		$vizyon,
		$misyon,
		$siteadi,
		$baslik,
		$altbaslik,
		$anahtar,		
		$haber,
		$duyuru,
		$etkinlik,
		$link1,
		$link2,
		$link3,
		$link4,
		$link5,
		$tab1,
		$tab2,
		$tab3,
		$tab4,		
		));
		
		$hata = $sql->errorInfo();
		echo empty($hata[2]) ? $diller['basarili'] : $hata[2];
		
		header ("Location:index.php?islem=dilliste"); 	
	}
?>
