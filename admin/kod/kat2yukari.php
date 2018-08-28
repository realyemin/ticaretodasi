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
	
	if($dil==1)
	{
		
		if($deger==1)
		header ("Location:index.php?islem=kat2liste1&kat1=".$kat1); 
		else
		{
			$d=$deger-1;
			$sql = $db->prepare('update kat2 set sira=? where kat1='.$kat1.' and sira='. $d );
			$ekle = $sql->execute(array($deger));
			
			$sql = $db->prepare('update kat2 set sira=? where kat1='.$kat1.' and id='.$id );
			$ekle = $sql->execute(array($deger-1));
			header ("Location:index.php?islem=kat2liste1&kat1=".$kat1); 
		}}
		else
		{
			
			if($deger==1)
			header ("Location:index2.php?islem=kat2liste1&kat1=".$kat1); 
			else
			{
				$d=$deger-1;
				$sql = $db->prepare('update kat2 set sira=? where  dil='.$dil.' and  kat1='.$kat1.' and sira='. $d );
				$ekle = $sql->execute(array($deger));
				
				$sql = $db->prepare('update kat2 set sira=? where  dil='.$dil.' and  kat1='.$kat1.' and id='.$id );
				$ekle = $sql->execute(array($deger-1));
				header ("Location:index2.php?islem=kat2liste1&kat1=".$kat1); 
			}
		}				
?>