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
	@$katno =	$_GET['katno'];
	@$katid =	$_GET['katid'];
	@$id =	$_GET['id'];
	
	if ($katno==0) $sql = $db->prepare('update kat1 set cocuk=? where id='.$katid );
	if ($katno==1) $sql = $db->prepare('update kat1 set cocuk=? where id='. $katid );
	if ($katno==2) $sql = $db->prepare('update kat2 set cocuk=? where id='.$katid );
	if ($katno==3) $sql = $db->prepare('update kat3 set cocuk=? where id='.$katid );
	
	
    $ekle = $sql->execute(array(
	$id,
	));
	
    $hata = $sql->errorInfo();
    echo empty($hata[2]) ?  $diller['basarili'] : $hata[2];
	if(isset($_GET["kat2"]))
	{$d=3;
		$l="&kat1=".$_GET["kat1"]."&kat2=" .$_GET["kat2"];
	}
	elseif(isset($_GET["kat1"]))
	{$d=2;
		$l="&kat1=".$_GET["kat1"];
	}
	else
	{
		$d=1;
		$l="";
	}
	$b="Location:index";
	

$b=$b.".php?islem=";


if ($katno==0) $b=$b."kat1liste1";
if ($katno==1) $b=$b."kat1liste";
if ($katno==2) $b=$b."kat2liste1".$l;
if ($katno==3) $b=$b."kat3liste2".$l;

echo $b;

header ($b);

?>