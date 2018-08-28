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
	if($_POST)
	{
		$id = $_POST["kid"];
		$sql = $db->prepare('delete from yetki where kid=?');
		$ekle = $sql->execute(array(
		$id,
		));
		
		@$sites=$_POST['liste'];
		foreach ( $_POST['liste'] as $siteAdi){
			$sql = $db->prepare('INSERT INTO yetki (kid,yetkino) VALUES (?,?)');
			$ekle = $sql->execute(array(	
			$id,
			$siteAdi,	
			));
		}
		header ("Location:index.php?islem=kullaniciliste");
	}
?>