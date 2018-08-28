<?php /*
	-- =============================================
	-- Author:		EKOMURCU
	-- Create date: 26.07.2018 02:20
	-- Description:	Mail aboneliğini Ajax(parts/haberBulteni.php) ile kaydetmek için yazıldı
	-- ============================================= 
*/?>
<?php include($_SERVER['DOCUMENT_ROOT']."/Connections/baglantim.php");
	if(isset($_POST['eposta']) && $_POST['eposta']!="")
	{
		
		$sorgu=$db->prepare("SELECT * FROM mailList WHERE mail=:mail");
		$sorgu->bindParam(':mail',$_POST['eposta']);
		$sorgu->execute();
		if(!$sorgu->rowCount()>0)
		{
			$kayit=$db->prepare("INSERT INTO mailList (adSoyad,mail) VALUES (:adSoyad,:mail) ");
			$kayit->bindParam(':adSoyad',$_POST['adSoyad']);
			$kayit->bindParam(':mail',$_POST['eposta']);
			$kayit->execute();
			
			if($kayit->rowCount() > 0)
			{
				$durum=true;
				echo '{"durum":"'.$durum.'", "mesaj":"Abonelik kaydınız yapıldı. Artık yeniliklerimizden haberdar olacaksınız."}'; 
			}else
			{
				$durum=false;
				echo '{"durum":"'.$durum.'", "mesaj":"Üzgünüz. Birşeyler yolunda gitmedi ve kaydınızı gerçekleştiremedik."}'; 
			}
		}
		else
		{
			$durum=true;
			echo '{"durum":"'.$durum.'", "mesaj":"Sizi tekrar aramızda görmek çok güzel."}'; 
		}
	}
	else
	{
		$durum=false;
		echo '{"durum":"'.$durum.'", "mesaj":"Üzgünüz. Hatalı veya eksik bilgi!"}'; 
	}
?>