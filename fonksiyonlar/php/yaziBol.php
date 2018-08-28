<?php
	/*
		-- =============================================
		-- Author		: EKOMURCU
		-- Create date	: 10.07.2018
		-- Description	: Haber veya Duyuru gibi uzun içerikli yazıları istenilen bir miktarda bölmeye yarar
		-- ============================================= 
	*/
?>
<?php
	function yaziBol($kelime,$harfSayisi,$kelimeSayisi)
	{
		
		// önce yazıyı kelimelere bölelim..
		$kelime = explode(" ",substr($kelime,0,$harfSayisi));
		// kaç kelime oldu bakalım..
		$say = count($kelime);
		// sınır belirleyelim..
		$sinir = $kelimeSayisi;
		// eğer metindeki kelime sayısı sınırımızdan az ya da eşit hiç kesme..
		if($say <= $sinir) { $kes = $say; }
		// sınırdan çok ise, sınır belirlediğimiz kelime sayısı olsun..
		else { $kes = $sinir; }
		// yazıyı ekrana basalım..
		for($i = 0; $i < $kes; $i++)
		{ 
			echo $kelime[$i].' ' ; 
			if($i>2){ echo "<span>"; }
			
		}
		echo "..";
	}
?>