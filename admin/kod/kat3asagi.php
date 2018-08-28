<?php
	/*
		-- =============================================
		-- Author		: EKOMURCU
		-- Create date	: 12.07.2018
		-- Description	: Güncelleme
		-- ============================================= 
	*/
?>
<?php
	@$id =	$_GET['id'];
	@$deger =	$_GET['deger'];
	$kat1 = $_GET['kat1'];
	$kat2 = $_GET['kat2'];
	
	if($deger==$_SESSION["son"])
	header ("Location:index.php?islem=kat3liste2&kat1=".$kat1."&kat2=".$kat2); 
	else
	{
		$d=$deger+1;
		$sql = $db->prepare('update kat3 set sira=? where  dil='.$dil.' and  kat1='.$kat1.' and kat2='.$kat2.' and sira='. $d );
		$ekle = $sql->execute(array($deger));
		
		$sql = $db->prepare('update kat3 set sira=? where  dil='.$dil.' and  kat1='.$kat1.' and kat2='.$kat2.' and id='.$id );
		$ekle = $sql->execute(array($deger+1));
		header ("Location:index.php?islem=kat3liste2&kat1=".$kat1."&kat2=".$kat2); 
				
	}
	?>	