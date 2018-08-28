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
	@$a=	$_POST['mesaj'];
	@$b =	$_POST['siteadi'];
	@$c =	$_POST['baslik'];
	@$d =	$_POST['altbaslik'];
	@$e =	$_POST['anahtar'];
	@$f =	$_POST['dil'];
	@$tel =	$_POST['tel'];
	@$mail = $_POST['mail'];
	@$fax =	$_POST['fax'];
	@$sehirKodu =$_POST['sehirKodu'];//havadurumu için
	@$adres =	$_POST['adres'];
	if($_POST)
	{
		$sql = $db->prepare('update genel set BaskanMesaj=?, Siteadi=?, baslik=?,altbaslik=?,anahtar=?,dil=?,tel=?,mail=?,fax=?,sehirKodu=?, adres=? where id=1');
		$ekle = $sql->execute(array(		
        $a,
        $b,
        $c,
        $d,
        $e,
        $f,
		$tel,
		$mail,
		$fax,
		$sehirKodu,
		$adres		
        ));
		
		$hata = $sql->errorInfo();
		echo empty($hata[2]) ?  $diller['basarili'] : $hata[2];
		
		header ("Location:index.php?islem=baskan"); 	
		
	}
	
	
?>