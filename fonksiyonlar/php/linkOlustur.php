<?php
	/*
		-- =============================================
		-- Author		: EKOMURCU
		-- Create date	: 24.07.2018
		-- Description	: SEO uyumlu link oluşturmak için yazıldı
		-- ============================================= 
	*/
?>
<?php
	function linkOlustur($tip="", $id="", $baslik="")
	{ 
		//$tip: haber,duyuru,icerik vs tablo adı
		//$id: haber,duyuru,icerik vs id column
		//$baslik: haber,duyuru,icerik vs kisa column
		if($id!="")  //id parametresi varsa normal şekilde çalışsın(haber,icerik ve duyuru modu)
		{
			//değiştirelecek türkçe karakterler
			$TR=array('ç','Ç','ı','İ','ş','Ş','ğ','Ğ','ö','Ö','ü','Ü');
			$EN=array('c','c','i','i','s','s','g','g','o','o','u','u');
			//türkçe karakterleri değiştirir
			$baslik= str_replace($TR,$EN,$baslik);
			//tüm karakterleri küçüklür
			$baslik=mb_strtolower($baslik,'UTF-8');
			// a'dan z'ye olan harfler, 0'dan 9 a kadar sayılar, tire (-), 
			// boşluk ve altçizgi (_) dışındaki tüm karakteri siler
			$baslik=preg_replace('#[^-a-zA-Z0-9_ ]#','',$baslik);
			//cümle aralarındaki fazla boşluğü kaldırır
			$baslik=trim($baslik); //cümle aralarındaki
			//boşluğun yerine tire (-) koyar
			$baslik= preg_replace('#[-_ ]+#','-',$baslik); 
			if($baslik!="")
			{
				$link=$tip."/".base64_encode($id)."/".$baslik.=".html";
			}
			else{
				$link=$tip."/".base64_encode($id)."/";
			}
		}
		else
		{
			$link=$tip."/".$baslik;
		}
		
		return $link;
		}
		//kullanımı:örnek haberler için->  linkOlustur("haber",$row['id'],$row['kisa')
		?>		