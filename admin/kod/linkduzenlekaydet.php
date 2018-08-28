<?php
	/*
		-- =============================================
		-- Author		: EKOMURCU
		-- Create date	: 17.08.2018
		-- Description	: Güncellendi(link alanı eklendi)
		-- ============================================= 
	*/
?>
<?php
	@$ad =	$_POST['ad'];
	@$d1 =	$_POST['d1'];
	@$d2 =	$_POST['d2'];
	@$link =$_POST['link'];
	
	@$id =	$_POST['id'];
	
	if(isset($ad) )
	{
		$sql = $db->prepare('update link set ad=? , d1=?, d2=?, link=? where id='.$id );
		$ekle = $sql->execute(array(
		$ad,
		$d1,
		$d2,
		$link,
		
        ));
		
		$hata = $sql->errorInfo();
		echo empty($hata[2]) ?  $diller['basarili'] : $hata[2];
		
		header ("Location:index.php?islem=linkliste"); 	
		
	}
	else {
		echo $diller['basarisiz'];
	}
	
	
?>