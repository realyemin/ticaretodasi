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
		@$tarih =$_POST['tarih'];
		$tarih=date("Y-m-d",strtotime($tarih)); // d:gün, m:ay, Y:yıl
		
		@$etki =	$_POST['baslik'];
		@$mevcut =	$_POST['detay'];
		@$onlem =	$_POST['link'];
		@$risk =	$_POST['onay'];
		@$id =	$_POST['id'];
		
		
		if(isset($etki) )
		{
			$sql = $db->prepare('update etkinlik set etkinlik_adi =? ,etkinlik_aciklama=?, etkinlik_link =?, etkinlik_tarih =?, etkinlik_onay =? where id='.$id );
			$ekle = $sql->execute(array(
			$etki,
			$mevcut,
			$onlem,
			$tarih,
			$risk,					
			));
			
			$hata = $sql->errorInfo();
			echo empty($hata[2]) ?  $diller['basarili'] : $hata[2];
			
			header ("Location:index.php?islem=etkinlikliste");			
			
		}
		else {
			echo $diller['basarisiz'];
		}
	}	
?>	