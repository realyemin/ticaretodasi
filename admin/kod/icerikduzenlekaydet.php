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
		@$baslik =	$_POST['baslik'];
		@$detay	= $_POST['detay'];
		@$id =	$_POST['id'];
		
		if(isset($id) )
		{
			$sql = $db->prepare('update icerik set aciklama=? ,detay=? where id='.$id );
			$ekle = $sql->execute(array(
			$baslik,
			$detay,					
			));
			
			$hata = $sql->errorInfo();
			echo empty($hata[2]) ?  $diller['basarili'] : $hata[2];
						
			header ("Location:index.php?islem=icerikliste"); 																		
			
		}
		else {
			echo $diller['basarisiz'];
		}
	}	
?>