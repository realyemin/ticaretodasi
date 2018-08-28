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
	@$id =	$_GET['id'];
	@$deger =	$_GET['deger'];
	@$alt =	$_GET['alt'];
	if($alt==1)
	{
		if($deger==1)		
		header ("Location:index.php?islem=kat1liste1"); 		
		else
		{
			$d=$deger-1;
			
			$sql = $db->prepare('update kat1 set sira1=? where dil='. $dil . ' and sira1='. $d );
			$ekle = $sql->execute(array($deger));
			
			$sql = $db->prepare('update kat1 set sira1=? where dil='. $dil . ' and id='.$id );
			$ekle = $sql->execute(array($deger-1));
			
			
			header ("Location:index.php?islem=kat1liste1"); 	
			
		}
	}
	else
	{
		
		if($deger==1)			
		header ("Location:index.php?islem=kat1liste"); 		
		else
		{
			$d=$deger-1;
			
			$sql = $db->prepare('update kat1 set sira=? where dil='.$dil.' and sira='. $d );
			
			$ekle = $sql->execute(array($deger));
			
			$sql = $db->prepare('update kat1 set sira=? where  dil='. $dil . ' and  id='.$id );
			$ekle = $sql->execute(array($deger-1));
			
			header ("Location:index.php?islem=kat1liste"); 							
		}
	}
?>		