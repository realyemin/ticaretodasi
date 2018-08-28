<?php
	if(isset($_POST) && isset($_POST['kaydet']))
	{
		@($_POST['preloaderGoster']==true)?$_POST['preloaderGoster']='true':$_POST['preloaderGoster']='false';
		@($_POST['tarihGoster']==true)?$_POST['tarihGoster']='true':$_POST['tarihGoster']='false';
		@($_POST['iletisimGoster']==true)?$_POST['iletisimGoster']='true':$_POST['iletisimGoster']='false';
		@($_POST['havaDurumuGoster']==true)?$_POST['havaDurumuGoster']='true':$_POST['havaDurumuGoster']='false';
		@($_POST['sosyalMedyaUstLinkGoster']==true)?$_POST['sosyalMedyaUstLinkGoster']='true':$_POST['sosyalMedyaUstLinkGoster']='false';
		@($_POST['dilGoster']==true)?$_POST['dilGoster']='true':$_POST['dilGoster']='false';
		@($_POST['baslikGoster']==true)?$_POST['baslikGoster']='true':$_POST['baslikGoster']='false';
		@($_POST['logoGoster']==true)?$_POST['logoGoster']='true':$_POST['logoGoster']='false';
		@($_POST['aramaGoster']==true)?$_POST['aramaGoster']='true':$_POST['aramaGoster']='false';
		@($_POST['hakkimizdaGoster']==true)?$_POST['hakkimizdaGoster']='true':$_POST['hakkimizdaGoster']='false';
		@($_POST['logo_footerGoster']==true)?$_POST['logo_footerGoster']='true':$_POST['logo_footerGoster']='false';
		@($_POST['hakkimizda_icerikGoster']==true)?$_POST['hakkimizda_icerikGoster']='true':$_POST['hakkimizda_icerikGoster']='false';
		@($_POST['ustBilgiBarGoster']==true)?$_POST['ustBilgiBarGoster']='true':$_POST['ustBilgiBarGoster']='false';	
		@($_POST['ustLogoBarGoster']==true)?$_POST['ustLogoBarGoster']='true':$_POST['ustLogoBarGoster']='false';
		@($_POST['ustMenuBarGoster']==true)?$_POST['ustMenuBarGoster']='true':$_POST['ustMenuBarGoster']='false';
		@($_POST['baskanMesajGoster']==true)?$_POST['baskanMesajGoster']='true':$_POST['baskanMesajGoster']='false';			
		@($_POST['sosyalMedyaPaylasGoster']==true)?$_POST['sosyalMedyaPaylasGoster']='true':$_POST['sosyalMedyaPaylasGoster']='false';
		@($_POST['haberTicker']==true)?$_POST['haberTicker']='true':$_POST['haberTicker']='false';
		@($_POST['mansetGenisGoster']==true)?$_POST['mansetGenisGoster']='true':$_POST['mansetGenisGoster']='false';
		@($_POST['mansetDarOrtaGoster']==true)?$_POST['mansetDarOrtaGoster']='true':$_POST['mansetDarOrtaGoster']='false';
		@($_POST['mansetDarSagGoster']==true)?$_POST['mansetDarSagGoster']='true':$_POST['mansetDarSagGoster']='false';
		@($_POST['etkinlikTakvimiGoster']==true)?$_POST['etkinlikTakvimiGoster']='true':$_POST['etkinlikTakvimiGoster']='false';
		@($_POST['haberGoster']==true)?$_POST['haberGoster']='true':$_POST['haberGoster']='false';
		@($_POST['duyuruGoster']==true)?$_POST['duyuruGoster']='true':$_POST['duyuruGoster']='false';
		@($_POST['rssGoster']==true)?$_POST['rssGoster']='true':$_POST['rssGoster']='false';
		@($_POST['anketGoster']==true)?$_POST['anketGoster']='true':$_POST['anketGoster']='false';
		@($_POST['like_boxGoster']==true)?$_POST['like_boxGoster']='true':$_POST['like_boxGoster']='false';
		@($_POST['hot_newsGoster']==true)?$_POST['hot_newsGoster']='true':$_POST['hot_newsGoster']='false';
		@($_POST['linkKategori1']==true)?$_POST['linkKategori1']='true':$_POST['linkKategori1']='false';
		@($_POST['linkKategori2']==true)?$_POST['linkKategori2']='true':$_POST['linkKategori2']='false';
		@($_POST['linkKategori3']==true)?$_POST['linkKategori3']='true':$_POST['linkKategori3']='false';
		@($_POST['linkKategori4']==true)?$_POST['linkKategori4']='true':$_POST['linkKategori4']='false';
		@($_POST['menuButonList']==true)?$_POST['menuButonList']='true':$_POST['menuButonList']='false';
		@($_POST['menuButonKayanYazi']==true)?$_POST['menuButonKayanYazi']='true':$_POST['menuButonKayanYazi']='false';
		@($_POST['reklam1Goster']==true)?$_POST['reklam1Goster']='true':$_POST['reklam1Goster']='false';
		@($_POST['reklam2Goster']==true)?$_POST['reklam2Goster']='true':$_POST['reklam2Goster']='false';
		@($_POST['reklam3Goster']==true)?$_POST['reklam3Goster']='true':$_POST['reklam3Goster']='false';
		@($_POST['haberBulteniGoster']==true)?$_POST['haberBulteniGoster']='true':$_POST['haberBulteniGoster']='false';
		@($_POST['sidebar_popularGoster']==true)?$_POST['sidebar_popularGoster']='true':$_POST['sidebar_popularGoster']='false';
		@($_POST['hot_news_popular_relatedGoster']==true)?$_POST['hot_news_popular_relatedGoster']='true':$_POST['hot_news_popular_relatedGoster']='false';
		@($_POST['recent_commentsGoster']==true)?$_POST['recent_commentsGoster']='true':$_POST['recent_commentsGoster']='false';		
		@($_POST['carousel_1Goster']==true)?$_POST['carousel_1Goster']='true':$_POST['carousel_1Goster']='false';
		@($_POST['carousel_2Goster']==true)?$_POST['carousel_2Goster']='true':$_POST['carousel_2Goster']='false';
		@($_POST['featured_NewsGoster']==true)?$_POST['featured_NewsGoster']='true':$_POST['featured_NewsGoster']='false';
		@($_POST['kategoriListGoster']==true)?$_POST['kategoriListGoster']='true':$_POST['kategoriListGoster']='false';	
		@($_POST['footerHakkimizdaGoster']==true)?$_POST['footerHakkimizdaGoster']='true':$_POST['footerHakkimizdaGoster']='false';
		@($_POST['sosyalMedyaAltLinkGoster']==true)?$_POST['sosyalMedyaAltLinkGoster']='true':$_POST['sosyalMedyaAltLinkGoster']='false';
		@($_POST['footerHaritaGoster']==true)?$_POST['footerHaritaGoster']='true':$_POST['footerHaritaGoster']='false';
		@($_POST['rastgeleGaleriGoster']==true)?$_POST['rastgeleGaleriGoster']='true':$_POST['rastgeleGaleriGoster']='false';
		@($_POST['footerGenisGoster']==true)?$_POST['footerGenisGoster']='true':$_POST['footerGenisGoster']='false';
		@($_POST['footerTelifGoster']==true)?$_POST['footerTelifGoster']='true':$_POST['footerTelifGoster']='false';	
		
		@($_POST['renk']=="")?$_POST['renk']='#FFF':$_POST['renk'];	
		@($_POST['menuRenk']=="")?$_POST['menuRenk']='#FFFFFF':$_POST['menuRenk'];	
		@($_POST['menuYaziRenk']=="")?$_POST['menuYaziRenk']='#000000':$_POST['menuYaziRenk'];	
		@($_POST['altMenuRenk']=="")?$_POST['altMenuRenk']='#FFFFFF':$_POST['altMenuRenk'];	
		@($_POST['altMenuYaziRenk']=="")?$_POST['altMenuYaziRenk']='#000000':$_POST['altMenuYaziRenk'];	
		@($_POST['menuHoverYaziRenk']=="")?$_POST['menuHoverYaziRenk']='#000000':$_POST['menuHoverYaziRenk'];	
		@($_POST['preloaderArkaplan']=="")?$_POST['preloaderArkaplan']='#D0002F':$_POST['preloaderArkaplan'];	
		@($_POST['ikonRenk']=="")?$_POST['ikonRenk']='#ffff00':$_POST['ikonRenk'];	
		
		$string="<?php	
		#region RenkAyarlari
		$"."renk='".$_POST['renk']."'; 
		$"."menuRenk='".$_POST['menuRenk']."'; 
		$"."menuYaziRenk='".$_POST['menuYaziRenk']."'; 
		$"."altMenuRenk='".$_POST['altMenuRenk']."'; 
		$"."altMenuYaziRenk='".$_POST['altMenuYaziRenk']."'; 
		$"."menuHoverYaziRenk='".$_POST['menuHoverYaziRenk']."'; 
		$"."preloaderArkaplan='".$_POST['preloaderArkaplan']."'; 
		$"."ikonRenk='".$_POST['ikonRenk']."'; 
		$"."footerArkaplan='".$_POST['footerArkaplan']."'; 
		#endregion RenkAyarlari
		
		#region index ayarları
		$"."preloaderGoster=".$_POST['preloaderGoster'].";							//sayfa yükleme animasyonu
		
		$"."hakkimizdaGoster=".$_POST['hakkimizdaGoster'].";		
		
		#region panelleri göster/gizle
		
		
		$"."ustBilgiBarGoster=".$_POST['ustBilgiBarGoster'].";	 					//en üst header(tarih saat, iletisim vs)
		$"."tarihGoster=".$_POST['tarihGoster'].";									//tarih bilgisi
		$"."iletisimGoster=".$_POST['iletisimGoster'].";							//iletisim linki
		$"."havaDurumuGoster=".$_POST['havaDurumuGoster'].";						//havadurumu göstergesi
		$"."sosyalMedyaUstLinkGoster=".$_POST['sosyalMedyaUstLinkGoster']."; 		//sosyalMedyaAltLinkGoster ust 
		$"."dilGoster=".$_POST['dilGoster']."; 										//dilGoster ust 
		
		$"."ustLogoBarGoster=".$_POST['ustLogoBarGoster'].";	 					//logo ve baslık bölümü
		$"."baslikGoster=".$_POST['baslikGoster'].";								//baslık yazısı
		$"."logoGoster=".$_POST['logoGoster'].";									//ust-alt logo
		
		$"."ustMenuBarGoster=".$_POST['ustMenuBarGoster'].";	  					//menu ve arama bölümü
		$"."aramaGoster=".$_POST['aramaGoster']."; 									//arama paneli
		
		$"."baskanMesajGoster=".$_POST['baskanMesajGoster']."; 						//baskan ticker
		
		$"."sosyalMedyaPaylasGoster=".$_POST['sosyalMedyaPaylasGoster']."; 			//sosyalMedyaPaylasGoster haber ve duyuru detay
		
		$"."haberTicker=".$_POST['haberTicker']."; 			//haber ticker
		$"."mansetGenisGoster=".$_POST['mansetGenisGoster']."; 						//haber slider(genis)
		$"."mansetDarOrtaGoster=".$_POST['mansetDarOrtaGoster']."; 					//haber slider(dar-orta kısım)
		$"."mansetDarSagGoster=".$_POST['mansetDarSagGoster']."; 					//haber right(dar-sağ kısım)
		$"."etkinlikTakvimiGoster=".$_POST['etkinlikTakvimiGoster']."; 				//etkinlik takvimi
		$"."haberGoster=".$_POST['haberGoster']."; 
		$"."duyuruGoster=".$_POST['duyuruGoster']."; 
		$"."rssGoster=".$_POST['rssGoster']."; 
		$"."anketGoster=".$_POST['anketGoster']."; 
		$"."like_boxGoster=".$_POST['like_boxGoster']."; 
		$"."hot_newsGoster=".$_POST['hot_newsGoster']."; 
		$"."linkKategori1=".$_POST['linkKategori1']."; 					
		$"."linkKategori2=".$_POST['linkKategori2']."; 					
		$"."linkKategori3=".$_POST['linkKategori3']."; 					
		$"."linkKategori4=".$_POST['linkKategori4']."; 					
		$"."menuButonList=".$_POST['menuButonList']."; 					
		$"."menuButonKayanYazi=".$_POST['menuButonKayanYazi']."; 					
		$"."reklam1Goster=".$_POST['reklam1Goster']."; 					
		$"."reklam2Goster=".$_POST['reklam2Goster']."; 
		$"."reklam3Goster=".$_POST['reklam3Goster']."; 
		$"."haberBulteniGoster=".$_POST['haberBulteniGoster']."; 
		$"."sidebar_popularGoster=".$_POST['sidebar_popularGoster']."; 
		$"."hot_news_popular_relatedGoster=".$_POST['hot_news_popular_relatedGoster']."; 
		$"."recent_commentsGoster=".$_POST['recent_commentsGoster']."; 
		
		$"."carousel_1Goster=".$_POST['carousel_1Goster']."; 
		$"."carousel_2Goster=".$_POST['carousel_2Goster']."; 

		$"."featured_NewsGoster=".$_POST['featured_NewsGoster']."; 
		$"."kategoriListGoster=".$_POST['kategoriListGoster']."; 		
		
		$"."footerGenisGoster=".$_POST['footerGenisGoster']."; 					//hakkimizda,harita(iletisim),galeri
		$"."footerHakkimizdaGoster=".$_POST['footerHakkimizdaGoster'].";		//logo ve icerik(vizyon)
		$"."hakkimizdaGoster=".$_POST['hakkimizdaGoster'].";
		$"."sosyalMedyaAltLinkGoster=".$_POST['sosyalMedyaAltLinkGoster']."; 		//sosyalMedyaAltLinkGoster alt
		$"."logo_footerGoster=".$_POST['logo_footerGoster'].";					//logo
		$"."hakkimizda_icerikGoster=".$_POST['hakkimizda_icerikGoster'].";		//icerik(vizyon)
		$"."footerHaritaGoster=".$_POST['footerHaritaGoster']."; 				//tel,fax,mail,adres,maps(harita)
		$"."rastgeleGaleriGoster=".$_POST['rastgeleGaleriGoster']."; 			//galeri(rastgele haber galerisi)
		
		$"."footerTelifGoster=".$_POST['footerTelifGoster']."; 					//sayfa en altı(telif yazısı)
		
		#region parts/hot-news.php
		$"."hotNews='Flash Haberler';
		#endregion
		#region parts/newsletter_info.php
		$"."newsletter_info='Haber Bulteni'; //Subscribe to Newsletter
		#endregion
		#region parts/fetuered_videos.php
		$"."fetuered_videos='Video Haber';
		#endregion
		
		?>";
		$klasor="config";
		$dosya="config.php";
		$yol=$klasor."/".$dosya;
		if(!isset($klasor))
		{
			if(mkdir($klasor,700))
			{
				
				if(!isset($yol))
				{
					if(touch($yol))
					{
						$kaynak=fopen($yol,"w");
						$fwrite($kaynak,$string);
						fclose($kaynak);
					}
				}
			}
		}
		else
		{
			if(touch($yol))
			{
				$kaynak=fopen($yol,"w");
				fwrite($kaynak,$string);
				fclose($kaynak);
			}
		}
	}
?>
<?php include("config/config.php"); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Site Ayarları</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script> 
		<script src="js/jscolor.js"></script>
		<style type="text/css">
			.switch {
			position: relative;
			display: inline-block;
			width: 60px;
			height: 34px;
			}
			
			.switch input {display:none;}
			
			.slider {
			position: absolute;
			cursor: pointer;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			background-color: #ccc;
			-webkit-transition: .4s;
			transition: .4s;
			}
			
			.slider:before {
			position: absolute;
			content: "";
			height: 26px;
			width: 26px;
			left: 4px;
			bottom: 4px;
			background-color: white;
			-webkit-transition: .4s;
			transition: .4s;
			}
			
			input:checked + .slider {
			background-color: #2196F3;
			}
			
			input:focus + .slider {
			box-shadow: 0 0 1px #2196F3;
			}
			
			input:checked + .slider:before {
			-webkit-transform: translateX(26px);
			-ms-transform: translateX(26px);
			transform: translateX(26px);
			}
			
			/* Rounded sliders */
			.slider.round {
			border-radius: 34px;
			}
			
			.slider.round:before {
			border-radius: 50%;
			}
			
			#mySidenav div{
			position: fixed;
			left: -80px;
			transition: 0.3s;
			padding: 15px;
			width: 120px;
			text-decoration: none;
			font-size: 20px;
			color: white;
			border-radius: 0 5px 5px 0;
			}
			
			#mySidenav div:hover {
			left: 0;
			}
			
			#kaydet {
			top: 50%;
			background-color: #4CAF50;
			}
			
		</style>
	</style>
</head>
<body>
	<div class="container">
		<div class="jumbotron alert alert-success">
			<h2>Site Ayarları (BETA)</h2>      
			<p>Bu arayüz sayesinde web sitenizin görsel özelliklerini değiştirebilirsiniz.</p>
		</div>
		<form name="form1" method="post" action="" class="form-inline">
			<table class="table table-bordered table-hover">
				<tr>
					<th colspan="4">Arkaplan Ayarları</th>
				</tr>
				<tr>
					<td>Sayfa Arkaplan Rengi:</td>
					<td colspan="3">
						<input class="jscolor form-control" name="renk" type="text" value="<?php echo $renk; ?>">
					</td>
					
				</tr>
				<tr>
					<td>Menu Arkaplan Rengi:</td>
					<td>
						<input class="jscolor form-control" name="menuRenk" type="text" value="<?php echo $menuRenk; ?>">
					</td> 
					<td>Alt Menu Arkaplan Rengi:</td>
					<td>
						<input class="jscolor form-control" name="altMenuRenk" type="text" value="<?php echo $altMenuRenk; ?>">
					</td>     
				</tr>
				<tr>  
					<td>Menu Yazı Rengi: </td>
					<td>
						<input class="jscolor form-control" name="menuYaziRenk" type="text" value="<?php echo $menuYaziRenk; ?>">
					</td>    
					<td>Alt Menu Yazı Rengi:</td>
					<td>
						<input class="jscolor form-control" name="altMenuYaziRenk" type="text" value="<?php echo $altMenuYaziRenk; ?>">
					</td>      
				</tr>
				<tr>
					<td>Menu Hover Rengi:</td>
					<td>
						<input class="jscolor form-control" name="menuHoverYaziRenk" type="text" value="<?php echo $menuHoverYaziRenk; ?>">
					</td>      
				</tr>
				<tr>
					<td>Footer Arkaplan Rengi:</td>
					<td>
						<input class="jscolor form-control" name="footerArkaplan" type="text" value="<?php echo $footerArkaplan; ?>">
					</td>      
				</tr>
			</table>						
			<table class="table table-bordered table-hover">
				<tr>
					<th>Anasayfa(index)</th><th>Göster/Gizle</th>
				</tr>
				<tr>
					<td>Ön Yükleme Animasyonu(preloader)
						<label class="switch">
							<input name="preloaderGoster" type="checkbox" value="true"  <?php if($preloaderGoster){ ?>checked <?php } ?>>
						<span class="slider round"></span></label>
					</td>
					<td>
						<table class="table table-bordered table-hover">
							<tr>
								<td>Preloader arkaplan rengi:</td>
								<td>
									<input class="jscolor form-control" name="preloaderArkaplan" type="text" value="<?php echo $preloaderArkaplan; ?>">
								</td>
							</tr>
							<tr>
								<td>Animasyon İkon rengi:</td>
								<td>
									<input class="jscolor form-control" name="ikonRenk" type="text" value="<?php echo $ikonRenk; ?>">
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
			
			<table class="table table-bordered table-hover">
				<tr>
					<th>PANELLER</th><th>Göster/Gizle</th>
				</tr>
				<tr>
					<td colspan="2">
						<table class="table table-bordered table-hover">
							<tr>
								<td>Başlık Üst Bilgi Alanı(ustBilgiBarGoster):
									<label class="switch">
										<input name="ustBilgiBarGoster" type="checkbox" value="true" <?php if($ustBilgiBarGoster){ ?>checked <?php } ?>>
									<span class="slider round"></span></label>
								</td>
								<td>
									<table class="table table-bordered table-hover">
										<tr>
											<th>Başlık Üst Bilgi Alanı</th><th>Göster/Gizle</th>
										</tr>
										<tr>
											<td>Tarih:</td>
											<td><label class="switch">
												<input name="tarihGoster" type="checkbox" value="true" <?php if($tarihGoster){ ?>checked <?php } ?>>
											<span class="slider round"></span></label>
											</td>
										</tr>
										<tr>
											<td>İletisim:</td>
											<td><label class="switch">
												<input name="iletisimGoster" type="checkbox" value="true" <?php if($iletisimGoster){ ?>checked <?php } ?>>
											<span class="slider round"></span></label>
											</td>
										</tr>
										<tr>
											<td>Hava Durumu:</td>
											<td><label class="switch">
												<input name="havaDurumuGoster" type="checkbox" value="true" <?php if($havaDurumuGoster){ ?>checked <?php } ?>>
											<span class="slider round"></span></label>
											</td>
										</tr>					
										<tr>
											<td>sosyalMedyaUstLink:</td>
											<td><label class="switch">
												<input name="sosyalMedyaUstLinkGoster" type="checkbox" value="true" <?php if($sosyalMedyaUstLinkGoster){ ?>checked <?php } ?>>
											<span class="slider round"></span></label>
											</td>
										</tr>					
										<tr>
											<td>Diller:</td>
											<td><label class="switch">
												<input name="dilGoster" type="checkbox" value="true" <?php if($dilGoster){ ?>checked <?php } ?>>
											<span class="slider round"></span></label>
											</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td>Başlık Üst Logo Alanı(ustLogoBarGoster):<label class="switch">
									<input name="ustLogoBarGoster" type="checkbox" value="true" <?php if($ustLogoBarGoster){ ?>checked <?php } ?>>
								<span class="slider round"></span></label>
								</td>
								<td>
									<table class="table table-bordered table-hover">
										<tr>
											<th>Site Üst Logo Alanı</th><th>Göster/Gizle</th>
										</tr>
										<tr>
											<td>Baslik:</td>
											<td><label class="switch">
												<input name="baslikGoster" type="checkbox" value="true" <?php if($baslikGoster){ ?>checked <?php } ?>>        
												<span class="slider round"></span>
											</label>         
											</td>
										</tr>
										<tr>
											<td>Logo Resmi:</td>
											<td><label class="switch">
												<input name="logoGoster" type="checkbox" value="true" <?php if($logoGoster){ ?>checked <?php } ?>>
												<span class="slider round"></span>
											</label>
											</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td>Başlık Üst Menu Alanı(ustMenuBarGoster):<label class="switch">
									<input name="ustMenuBarGoster" type="checkbox" value="true" <?php if($ustMenuBarGoster){ ?>checked <?php } ?>>
								<span class="slider round"></span></label>
								</td>
								<td>
									<table class="table table-bordered table-hover">
										<tr>
											<th>Site Üst Menu Alanı</th><th>Göster/Gizle</th>
										</tr>
										<tr>
											<td>Arama Butonu:</td>
											<td><label class="switch">
												<input name="aramaGoster" type="checkbox" value="true" <?php if($aramaGoster){ ?>checked <?php } ?>>
												<span class="slider round"></span>
											</label>
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td>Baskan Mesaj Goster</td>
					<td><label class="switch">
						<input name="baskanMesajGoster" type="checkbox" value="true" <?php if($baskanMesajGoster){ ?>checked <?php } ?>>
					<span class="slider round"></span></label>
					</td>
				</tr>   
				
				<tr>
					<td colspan="2">
						<table class="table table-bordered">
							<tr>
								<td>Manset(genis-full bar)</td>
								<td><label class="switch">
									<input name="mansetGenisGoster" type="checkbox" value="true" <?php if($mansetGenisGoster){ ?>checked <?php } ?>>
								<span class="slider round"></span></label>
								</td>
							</tr>
							<tr>
								<td>Manset(dar-orta)</td>
								<td><label class="switch">
									<input name="mansetDarOrtaGoster" type="checkbox" value="true" <?php if($mansetDarOrtaGoster){ ?>checked <?php } ?>>
								<span class="slider round"></span></label>
								</td>
							</tr>
							<tr>
								<td>Manset(dar-sag)</td>
								<td><label class="switch">
									<input name="mansetDarSagGoster" type="checkbox" value="true" <?php if($mansetDarSagGoster){ ?>checked <?php } ?>>
								<span class="slider round"></span></label>
								</td>
							</tr>   
						</table>
					</tr>
					<tr>
						<td colspan="2">
							<table class="table table-bordered">
								<tr>
									<td>Haber Seçim Alanı</td>
									<td><label class="switch">
										<input name="haberGoster" type="checkbox" value="true" <?php if($haberGoster){ ?>checked <?php } ?>>
									<span class="slider round"></span></label>
									</td>
								</tr>
								<tr>
									<td>Duyuru Seçim Alanı</td>
									<td><label class="switch">
										<input name="duyuruGoster" type="checkbox" value="true" <?php if($duyuruGoster){ ?>checked <?php } ?>>
									<span class="slider round"></span></label>
									</td>
								</tr>
								<tr>
									<td>Tobb Haber Akışı(Rss)</td>
									<td><label class="switch">
										<input name="rssGoster" type="checkbox" value="true" <?php if($rssGoster){ ?>checked <?php } ?>>
									<span class="slider round"></span></label>
									</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<table class="table table-bordered">
								<tr>
									<td>Etkinlik Takvimi</td>
									<td><label class="switch">
										<input name="etkinlikTakvimiGoster" type="checkbox" value="true" <?php if($etkinlikTakvimiGoster){ ?>checked <?php } ?>>
									<span class="slider round"></span></label>
									</td>
								</tr>
								<tr>
									<td>Anket Modulu</td>
									<td><label class="switch">
										<input name="anketGoster" type="checkbox" value="true" <?php if($anketGoster){ ?>checked <?php } ?>>
									<span class="slider round"></span></label>
									</td>
								</tr>
								<tr>
									<td>Kategori Listesi</td>
									<td><label class="switch">
										<input name="kategoriListGoster" type="checkbox" value="true" <?php if($kategoriListGoster){ ?>checked <?php } ?>>
									<span class="slider round"></span></label>
									</td>
								</tr>
								<tr>
									<td>Haber Bulteni</td>
									<td><label class="switch">
										<input name="haberBulteniGoster" type="checkbox" value="true" <?php if($haberBulteniGoster){ ?>checked <?php } ?>>
									<span class="slider round"></span></label>
									</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<table class="table table-bordered">
								<tr>
									<td>Link Kategori1 (Ürünler)</td>
									<td><label class="switch">
										<input name="linkKategori1" type="checkbox" value="true" <?php if($linkKategori1){ ?>checked <?php } ?>>
									<span class="slider round"></span></label>
									</td>
								</tr>
								<tr>
									<td>Link Kategori2 (İç Bağlantılar)</td>
									<td><label class="switch">
										<input name="linkKategori2" type="checkbox" value="true" <?php if($linkKategori2){ ?>checked <?php } ?>>
									<span class="slider round"></span></label>
									</td>
								</tr>
								<tr>
									<td>Link Kategori3 (Hizmetler)</td>
									<td><label class="switch">
										<input name="linkKategori3" type="checkbox" value="true" <?php if($linkKategori3){ ?>checked <?php } ?>>
									<span class="slider round"></span></label>
									</td>
								</tr>										
								<tr>
									<td>Link Kategori4 (Dış Bağlantılar)
										<label class="switch">
											<input name="linkKategori4" type="checkbox" value="true" <?php if($linkKategori4){ ?>checked <?php } ?>>
										<span class="slider round"></span></label>
									</td>
									<td>
										<table class="table table-bordered table-hover">
											<tr>
												<th>Görünüm Seç</th><th colspan="2">Menu/Buton Listesi</th>
											</tr>
											<tr>
												<td>Buton Listesi:</td>
												<td>											
													<label class="switch">
														<input name="menuButonList" type="radio" value="true" <?php if($menuButonList){ ?>checked <?php } ?>>
														<span class="slider round"></span>
													</label>
												</td>
												<td>
												Kayan Yazı:	
												<label class="switch">
														<input name="menuButonKayanYazi" type="radio" value="true" <?php if($menuButonKayanYazi){ ?>checked <?php } ?>>
														<span class="slider round"></span>
													</label>
												</td>
											</tr>	
											<tr>
												<td>Menu Listesi:</td>
												<td colspan="2">
													<label class="switch">
														<input name="menuButonList" type="radio" value="" <?php if(!$menuButonList){ ?>checked <?php } ?>>
														<span class="slider round"></span>
													</label>
												</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</td>
					</tr>
					
					<tr>
						<td colspan="2">
							<table class="table table-bordered">
								<tr>
									<td>reklam1 (sag sutun üst)</td>
									<td><label class="switch">
										<input name="reklam1Goster" type="checkbox" value="true" <?php if($reklam1Goster){ ?>checked <?php } ?>>
									<span class="slider round"></span></label>
									</td>
								</tr>
								<tr>
									<td>reklam2 (sag sutun alt)</td>
									<td><label class="switch">
										<input name="reklam2Goster" type="checkbox" value="true" <?php if($reklam2Goster){ ?>checked <?php } ?>>
									<span class="slider round"></span></label>
									</td>
								</tr>
								<tr>
									<td>reklam3 (orta alt)</td>
									<td><label class="switch">
										<input name="reklam3Goster" type="checkbox" value="true" <?php if($reklam3Goster){ ?>checked <?php } ?>>
									<span class="slider round"></span></label>
									</td>
								</tr>								
								</table>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<table class="table table-bordered">
									<tr>
										<td>carousel 1</td>
										<td><label class="switch">
											<input name="carousel_1Goster" type="checkbox" value="true" <?php if($carousel_1Goster){ ?>checked <?php } ?>>
										<span class="slider round"></span></label>
										</td>
									</tr>
									<tr>
										<td>carousel 2</td>
										<td><label class="switch">
											<input name="carousel_2Goster" type="checkbox" value="true" <?php if($carousel_2Goster){ ?>checked <?php } ?>>
										<span class="slider round"></span></label>
										</td>
									</tr>	
								</table>
							</td>
						</tr>
						<tr>
							<td>Sosyal Medya Paylas Butonları(haber ve duyuru içeriklerinde)</td>
							<td><label class="switch">
								<input name="sosyalMedyaPaylasGoster" type="checkbox" value="true" <?php if($sosyalMedyaPaylasGoster){ ?>checked <?php } ?>>
							<span class="slider round"></span></label>
							</td>
						</tr>
						<tr>
							<td>haberTicker (Kayan Haber)</td>
							<td><label class="switch">
								<input name="haberTicker" type="checkbox" value="true" <?php if($haberTicker){ ?>checked <?php } ?>>
							<span class="slider round"></span></label>
							</td>
						</tr>
						<tr>
							<td>hot_newsGoster(sol orta panel)</td>
							<td><label class="switch">
								<input name="hot_newsGoster" type="checkbox" value="true" <?php if($hot_newsGoster){ ?>checked <?php } ?>>
							<span class="slider round"></span></label>
							</td>
						</tr>
						
						<tr>
							<td>like_boxGoster(sag panel)</td>
							<td><label class="switch">
								<input name="like_boxGoster" type="checkbox" value="true" <?php if($like_boxGoster){ ?>checked <?php } ?>>
							<span class="slider round"></span></label>
							</td>
						</tr>
						<tr>
							<td>sidebar_popularGoster(sag panel)</td>
							<td><label class="switch">
								<input name="sidebar_popularGoster" type="checkbox" value="true" <?php if($sidebar_popularGoster){ ?>checked <?php } ?>>
							<span class="slider round"></span></label>
							</td>
						</tr>
						<tr>
							<td>hot_news_popular_relatedGoster(sag panel)</td>
							<td><label class="switch">
								<input name="hot_news_popular_relatedGoster" type="checkbox" value="true" <?php if($hot_news_popular_relatedGoster){ ?>checked <?php } ?>>
							<span class="slider round"></span></label>
							</td>
						</tr>
						<tr>
							<td>recent_commentsGoster(sag panel)</td>
							<td><label class="switch">
								<input name="recent_commentsGoster" type="checkbox" value="true" <?php if($recent_commentsGoster){ ?>checked <?php } ?>>
							<span class="slider round"></span></label>
							</td>
						</tr>
						<tr>
							<td>featured_NewsGoster(sag panel)</td>
							<td><label class="switch">
								<input name="featured_NewsGoster" type="checkbox" value="true" <?php if($featured_NewsGoster){ ?>checked <?php } ?>>
							<span class="slider round"></span></label>
							</td>
						</tr>					
						
						<tr>
							<td colspan="2">		
								<table class="table table-bordered">
									<tr>
										<th colspan="2">Footer Alt Menu Paneli
											<label class="switch">
												<input name="footerGenisGoster" type="checkbox" value="true" <?php if($footerGenisGoster){ ?>checked <?php } ?>>
											<span class="slider round"></span></label></th>
									</tr>							
									<tr>
										<td>Hakkimizda Alanı:
											<label class="switch">
												<input name="footerHakkimizdaGoster" type="checkbox" value="true" <?php if($footerHakkimizdaGoster){ ?>checked <?php } ?>>
												<span class="slider round"></span>
											</label>
										</td>
										<td>
											<table class="table table-bordered table-hover">
												<tr>
													<td>Hakkımızda Etiketi:</td>
													<td><label class="switch">
														<input name="hakkimizdaGoster" type="checkbox" value="true" <?php if($hakkimizdaGoster){ ?>checked <?php } ?>>
														<span class="slider round"></span>
													</label>
													</td>
												</tr>
												<tr>
													<td>Logo:</td>
													<td><label class="switch">
														<input name="logo_footerGoster" type="checkbox" value="true" <?php if($logo_footerGoster){ ?>checked <?php } ?>>
														<span class="slider round"></span>
													</label>
													</td>
												</tr>
												<tr>
													<td>Hakkımızda icerik(Vizyon):</td>
													<td><label class="switch">
														<input name="hakkimizda_icerikGoster" type="checkbox" value="true" <?php if($hakkimizda_icerikGoster){ ?>checked <?php } ?>>
														<span class="slider round"></span>
													</label>
													</td>
												</tr>	
												<tr>
													<td>sosyalMedyaAltLink:</td>
													<td><label class="switch">
														<input name="sosyalMedyaAltLinkGoster" type="checkbox" value="true" <?php if($sosyalMedyaAltLinkGoster){ ?>checked <?php } ?>>
														<span class="slider round"></span>
													</label>
													</td>
												</tr>
											</table>
										</td>
									</tr>	
									<tr>
										<td>Tel,Fax,mail,adres,harita(iletişim)</td>
										<td><label class="switch">
											<input name="footerHaritaGoster" type="checkbox" value="true" <?php if($footerHaritaGoster){ ?>checked <?php } ?>>
										<span class="slider round"></span></label>
										</td>
									</tr>
									<tr>
										<td>Rastgele(haber) Galerisi</td>
										<td><label class="switch">
											<input name="rastgeleGaleriGoster" type="checkbox" value="true" <?php if($rastgeleGaleriGoster){ ?>checked <?php } ?>>
										<span class="slider round"></span></label>
										</td>
									</tr>
								</table>
							</td>
						</tr>
						
						
						<tr>
							<td>Footer Dar(Telif Hak.) Bilgi Alanı</td>
							<td><label class="switch">
								<input name="footerTelifGoster" type="checkbox" value="true" <?php if($footerTelifGoster){ ?>checked <?php } ?>>
							<span class="slider round"></span></label>
							</td>
						</tr>
					</table>
					<div id="mySidenav">
						<div id="kaydet">
							<input class="btn btn-success" type="submit" value="Kaydet" name="kaydet">
						</div>  
					</div>
				</form>
			</div>
		</body>
	</html>																																									