<?php
	include("../Connections/baglantim.php"); 
	include("../fonksiyonlar/php/turkceTarih.php");
	
	$dil=1; //genel tablosundaki id, seçilen dil içi id
	if ($_SESSION["kullanici"]=="") header ("Location:giris.php");  
	
	if(isset($_POST['dilSec']))
	{ 				
		$_SESSION["dilSec"]=$_POST['dilSec']; 		
	}
	else
	{
		if(!isset($_SESSION['dilSec']))
		{
			//seçili dik yoksa varsayılan Türkçedir
			$_SESSION["dilSec"]="tr";
			include('dilPaketi/tr.php');
		}
	}
	if(isset($_SESSION["dilSec"]))
	{
		Global $db;
		$dilQuery = $db->query("SELECT id,siteadi,altbaslik FROM genel Where dil='".$_SESSION['dilSec']."' limit 1")->fetch();
		$_SESSION["dil"]=$dilQuery['id'];
		$dil=$_SESSION["dil"];  //genel tablosundaki id, seçilen dil içi id
		$_SESSION["siteadi"]=$dilQuery['siteadi'];
		$_SESSION["altbaslik"]=$dilQuery['altbaslik'];
		$dilDosyasi="dilPaketi/".$_SESSION["dilSec"].".php";
		if(file_exists($dilDosyasi))
		{
			include($dilDosyasi);
			}else{
			echo "<div class='alert alert-danger'>Seçilen dil için dil paketi yüklenmemiştir. Lütfen dil paketini yüklediğinizden emin olunuz!</div>";
			include('dilPaketi/tr.php');
		}		
	}
	
	$_SESSION["sp"]=0;
	$_SESSION["kategori"]=0;
	$_SESSION["haber"]=0;
	$_SESSION["duyuru"]=0;
	$_SESSION["site"]=0;
	$_SESSION["etkinlik"]=0;
	$_SESSION["egitim"]=0;
	$_SESSION["karar"]=0;
	$_SESSION["toplam"]=0;
	$_SESSION["akreditasyon"]=0;
	$_SESSION["icerik"]=0;
	$_SESSION["anket"]=0;
	$query = $db->query("SELECT * FROM yetki where kid=". $_SESSION["kid"], PDO::FETCH_ASSOC);
	if ( $query->rowCount() ){
		foreach( $query as $r){
			$s=$r['yetkino'];
			switch ($s){
				case 1: $_SESSION["haber"]=1 ; break;
				case 2: $_SESSION["duyuru"]=1 ; break;
				case 3: $_SESSION["site"]=1 ; break;
				case 4: $_SESSION["etkinlik"]=1 ; break;
				case 5: $_SESSION["egitim"]=1 ; break;
				case 6: $_SESSION["karar"]=1 ; break;
				case 7: $_SESSION["toplam"]=1 ; break;
				case 8: $_SESSION["akreditasyon"]=1 ; break;
				case 9: $_SESSION["kategori"]=1 ; break;
				case 10: $_SESSION["sp"]=1 ; break;
				case 11: $_SESSION["icerik"]=1 ; break;
				case 12: $_SESSION["anket"]=1 ; break;
				
				// default: echo "Sayı 0,1 ve 2 değildir.";
			}					
		}}	
		ob_start();
		
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title><?php echo $_SESSION["siteadi"]; ?></title>
		<!-- Tell the browser to be responsive to screen width -->
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<!-- jQuery 2.2.3 -->
		<script src="kaynak/plugins/jQuery/jquery-2.2.3.min.js"></script>
		<!-- Bootstrap 3.3.6 -->
		<link rel="stylesheet" href="kaynak/bootstrap/css/bootstrap.min.css">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- Ionicons -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
		<!-- daterange picker -->
		<link rel="stylesheet" href="kaynak/plugins/daterangepicker/daterangepicker.css">
		<!-- bootstrap datepicker -->
		<link rel="stylesheet" href="kaynak/plugins/datepicker/datepicker3.css">
		<!-- iCheck for checkboxes and radio inputs -->
		<link rel="stylesheet" href="kaynak/plugins/iCheck/all.css">
		<!-- Bootstrap Color Picker -->
		<link rel="stylesheet" href="kaynak/plugins/colorpicker/bootstrap-colorpicker.min.css">
		<!-- Bootstrap time Picker -->
		<link rel="stylesheet" href="kaynak/plugins/timepicker/bootstrap-timepicker.min.css">
		<!-- Select2 -->
		<link rel="stylesheet" href="kaynak/plugins/select2/select2.min.css">
		<!-- Theme style -->
		<link rel="stylesheet" href="kaynak/dist/css/AdminLTE.min.css">
		<!-- AdminLTE Skins. Choose a skin from the css/skins
		folder instead of downloading all of them to reduce the load. -->
		<link rel="stylesheet" href="kaynak/dist/css/skins/_all-skins.min.css">
		
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body class="hold-transition skin-blue sidebar-mini">
		<div class="wrapper">			
			<header class="main-header">
				<!-- Logo -->
				<a href="index.php" class="logo">
					<!-- mini logo for sidebar mini 50x50 pixels -->
					<span class="logo-lg"><img src="../tcrt/logo.jpg" alt="User Image" style="max-width:120px; max-height:50px;"></span>
				</a>
				<!-- Header Navbar: style can be found in header.less -->
				<nav class="navbar navbar-static-top">
					<!-- Sidebar toggle button-->
					<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
					<span style="text-center; font-size:24pt"><?php echo $_SESSION["siteadi"]; ?></span>
					<div class="navbar-custom-menu">
						<ul class="nav navbar-nav">
							<!-- Messages: style can be found in dropdown.less-->
							<li class="dropdown messages-menu">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="fa fa-envelope-o"></i>
									<span class="label label-success"><?php
										$query = $db->query("SELECT * FROM mesaj where okundu=0  and kid=". $_SESSION["kid"], PDO::FETCH_ASSOC);
										$sonuc = $query-> RowCount();
										echo $sonuc; 
									?></span>
								</a>
								<ul class="dropdown-menu">
									<li class="header"><?php echo  $sonuc;
									?> <?php echo $diller['yeniMesaj']; ?></li>
									<li>
										<!-- inner menu: contains the actual data -->
										<ul class="menu">
											<?php
												
												if ( $query->rowCount() ){
													foreach( $query as $row ){
													?>
													<li>
														<!-- start message -->
														<a href="index.php?islem=mesajoku&kid=0&id=<?php echo $row['id']?>"><div><?php echo substr($row['mesaj'],0,40) ."...."?></div></a>
													</li>
													<?php
													}}
													
											?>
											<!-- end message -->
										</ul>
									</li>
									<li class="footer"><a href="index.php?islem=mesajoku&id=0&kid=<?php echo $_SESSION["kid"]?>"><?php echo $diller['tumMesajlar']; ?></a></li>
								</ul>
							</li>
							<!-- Notifications: style can be found in dropdown.less -->
							<li class="dropdown notifications-menu">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="fa fa-bell-o"></i>
									<span class="label label-warning">0</span>
								</a>
								<ul class="dropdown-menu">
									<li class="header">Yaklaşan Olay Yok</li>
									<li>
										<!-- inner menu: contains the actual data -->
										<ul class="menu">
										</ul>
									</li>
									<li class="footer"><a href="#">View all</a></li>
								</ul>
							</li>
							<!-- Tasks: style can be found in dropdown.less -->
							<li class="dropdown tasks-menu">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="fa fa-flag-o"></i>	<?php echo $diller['diller']; ?> 
									
									<span class="label label-danger">
										<?php
											$dilSec = $db->query("SELECT count(*) as Toplam FROM diller", PDO::FETCH_ASSOC)->fetch();
											echo $dilSec['Toplam'];											
										?>
									</span>
									<?php echo $_SESSION["dilSec"]; ?>
								</a>
								<ul class="dropdown-menu">
									<?php
										$queryDil = $db->query("SELECT * FROM diller Order By dilAdi", PDO::FETCH_ASSOC);
										
									?>
									<li class="header"><?php echo $diller['diller']; ?>(<?php echo $dilSec['Toplam']; ?>)</li>
									<li>
										<!-- inner menu: contains the actual data -->
										<ul class="menu">
											<?php												
												if ( $queryDil->rowCount() ){
													foreach( $queryDil as $rowDil ){
													?>
													
													<form action="?<?php echo $_SERVER['QUERY_STRING'];?>" method="post">
														<button class="btn btn-info btn-block" name="dilSec" value="<?php echo $rowDil['dilKodu']?>"><?php echo $rowDil['dilAdi']; ?></button>
													</form>
													<br>
													<?php
													}
												}														
											?>
										</ul>
									</li>
									<li class="footer">
										<a href="#"><?php echo $diller['kayitliDiller']; ?></a>
									</li>
								</ul>
							</li>
							<!-- User Account: style can be found in dropdown.less -->
							<li class="dropdown user user-menu">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<span class="hidden-xs"><i class="fa fa-user"></i>  <?php 
										echo $_SESSION["kullanici"];
									?></span>
								</a>
								<!-- Menu Footer-->
							</li>
							<!-- Control Sidebar Toggle Button -->
							<li style="background:#dd4b39;">
								<a href="cikis.php" title="<?php echo $diller['guvenliCikis']; ?>" onClick="return confirm('Güvenli Çıkış işlemini onaylıyor musunuz?');"><i class="fa fa-power-off" style="font-size:20px;color:yellow"></i></a>
							</li>
						</ul>
					</div>
				</nav>
			</header>
			<!-- Left side column. contains the logo and sidebar -->
			<aside class="main-sidebar">
				<!-- sidebar: style can be found in sidebar.less -->
				<section class="sidebar">
					<!-- Sidebar user panel -->
					<div class="user-panel">
						<div class="pull-left image"> </div>
						<div class="pull-left info">
							
						</div>
					</div>
					<!-- search form -->
					<form action="#" method="get" class="sidebar-form">
						<div class="input-group">
							<input type="text" name="q" class="form-control" placeholder="<?php echo $diller['arama']; ?>">
							<span class="input-group-btn">
								<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
								</button>
							</span></div>
					</form>
					
					<!-- /.search form -->
					<!-- sidebar menu: : style can be found in sidebar.less -->
					<ul class="sidebar-menu">
						<li class="header text-center" style="color:#fff;font-size:14pt"><strong>MENU</strong></li>																					
						<?php
							if($_SESSION["kid"]==1) {
								
							?>   
							
							<li class="treeview"> <a href="#"> <i class="fa fa-globe"></i> <span><?php echo $diller['diller']; ?></span> <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i> </span> </a>   
								
								
								<ul class="treeview-menu">
									<li><a href="index.php?islem=baskan"><i class="fa fa-gear"></i><?php echo $diller['genelAyarlar']; ?></a></li>
									<?php $query = $db->query("SELECT * FROM genel", PDO::FETCH_ASSOC);
										if ( $query->rowCount() ){
											foreach( $query as $row ){
											?>
											
											<li>
												<a href="index.php?islem=dilduzenle&id=<?php echo $row["id"];?> "> 												
												<i class="fa fa-flag"></i><?php echo $row["dil"]?></a>
											</li>
											<?php
											}
										}												
									?>
									<li><a href="index.php?islem=dilekle"><i class="fa fa-plus"></i><?php echo $diller['yeniDilEkle']; ?></a></li>
									<li><a href="index.php?islem=dilliste"><i class="fa fa-bars"></i> <?php echo $diller['dilListele']; ?></a></li>
									
								</ul>
							</li>
							
							<?php
							}
							
							if($_SESSION["kategori"]==1 or $_SESSION["kid"]==1) {
								
							?>   
							
							<li class="treeview"> <a href="#"> <i class="fa fa-map-signs"></i><span><?php echo $diller['menuler']; ?></span> <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i> </span> </a>   
								
								
								<ul class="treeview-menu">
									<li><a href="index.php?islem=kat1ekle"><i class="fa fa-plus"></i><?php echo $diller['anaMenuEkle']; ?></a></li>
									<li><a href="index.php?islem=kat1liste"><i class="fa fa-bars"></i><?php echo $diller['anaMenuList']; ?></a></li>
									<li><a href="index.php?islem=kat2ekle"><i class="fa fa-plus"></i><?php echo $diller['ustMenuEkle']; ?></a></li>
									<li><a href="index.php?islem=kat2liste"><i class="fa fa-bars"></i><?php echo $diller['ustMenuList']; ?></a></li>										
									<li><a href="index.php?islem=kat3ekle"><i class="fa fa-plus"></i><?php echo $diller['altMenuEkle']; ?></a></li>										
									<li><a href="index.php?islem=kat3liste"><i class="fa fa-minus"></i><?php echo $diller['altMenuList']; ?></a></li>
									<li><a href="index.php?islem=kat1ekle&alt=1"><i class="fa fa-plus"></i><?php echo $diller['sayfaAltMenuEkle']; ?></a></li>
									<li><a href="index.php?islem=kat1liste1"><i class="fa fa-bars"></i><?php echo $diller['sayfaAltMenuList']; ?></a></li>										
								</ul>
							</li>
							
							<?php
							}
							
							if($_SESSION["haber"]==1 or $_SESSION["kid"]==1)
							{
								
								?> <li class="treeview"> <a href="#"> <i class="fa fa-newspaper-o"></i> <span><?php echo $diller['haberler']; ?></span> <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i> </span> </a>
								<ul class="treeview-menu">
									<li><a href="index.php?islem=haberekle"><i class="fa fa-plus"></i><?php echo $diller['haberEkle']; ?></a></li>
									<li><a href="index.php?islem=haberliste"><i class="fa fa-bars"></i><?php echo $diller['haberList']; ?></a></li>
								</ul>
							</li>
							<?php
							}			 
							
							if($_SESSION["duyuru"]==1 or $_SESSION["kid"]==1)
							{
								
								
							?>
							
							<li class="treeview"> <a href="#"> <i class="fa fa-bullhorn"></i> <span><?php echo $diller['duyurular']; ?></span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i>  </span> </a>
								<ul class="treeview-menu">
									<li><a href="index.php?islem=duyuruekle"><i class="fa fa-plus"></i><?php echo $diller['duyuruEkle']; ?> </a></li>
									<li><a href="index.php?islem=duyuruliste"><i class="fa fa-bars"></i><?php echo $diller['duyuruList']; ?></a></li>
								</ul>
							</li>
							<?php
							}			 
							
							if($_SESSION["icerik"]==1 or $_SESSION["kid"]==1)
							{
								
							?>
							
							<li class="treeview"> <a href="#"> <i class="fa fa-archive"></i> <span><?php echo $diller['icerik']; ?></span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
								<ul class="treeview-menu">
									<li><a href="index.php?islem=icerikekle"><i class="fa fa-plus"></i><?php echo $diller['icerikEkle']; ?></a></li>
									<li><a href="index.php?islem=icerikliste"><i class="fa fa-bars"></i><?php echo $diller['icerikList']; ?></a></li>
									<li><a href="index.php?islem=linkekle"><i class="fa fa-plus"></i><?php echo $diller['linkEkle']; ?></a></li>
									<li><a href="index.php?islem=linkliste"><i class="fa fa-bars"></i><?php echo $diller['linkList']; ?></a></li>
									
								</ul>
							</li>
							<?php
								
							}			 
							
							if($_SESSION["anket"]==1 or $_SESSION["kid"]==1)
							{
								
							?>
							
							<li class="treeview"> <a href="#"> <i class="fa fa-bar-chart"></i> <span><?php echo $diller['anket']; ?></span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
								<ul class="treeview-menu">
									<li><a href="index.php?islem=anketekle"><i class="fa fa-plus"></i><?php echo $diller['anketEkle']; ?></a></li>
									<li><a href="index.php?islem=anketliste"><i class="fa fa-bars"></i><?php echo $diller['anketList']; ?></a></li>
								</ul>
							</li>
							<?php
								
							}			 
							
							if($_SESSION["etkinlik"]==1 or $_SESSION["kid"]==1)
							{
								
							?>
							
							<li class="treeview"> <a href="#"> <i class="fa fa-calendar"></i> <span><?php echo $diller['etkinlik']; ?></span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
								<ul class="treeview-menu">
									<li><a href="index.php?islem=etkinlikekle"><i class="fa fa-plus"></i><?php echo $diller['etkinlikEkle']; ?></a></li>
									<li><a href="index.php?islem=etkinlikliste"><i class="fa fa-bars"></i><?php echo $diller['etkinlikList']; ?></a></li>
									<li><a href="index.php?islem=etkinliktkyekle"><i class="fa fa-plus"></i><?php echo $diller['tkyEtkinlikEkle']; ?></a></li>
									<li><a href="index.php?islem=etkinliktkyliste"><i class="fa fa-bars"></i><?php echo $diller['tkyEtkinlikList']; ?></a></li>
									<li><a href="index.php?islem=etkinliktkyturekle"><i class="fa fa-plus"></i><?php echo $diller['etkinlikTurEkle']; ?></a></li>
									<li><a href="index.php?islem=etkinliktkyturliste"><i class="fa fa-bars"></i><?php echo $diller['etkinlikTurList']; ?></a></li>
									<li><a href="index.php?islem=etkinliktkyrapor"><i class="fa fa-registered"></i><?php echo $diller['tkyEtkinlikRapor']; ?></a></li>
									
								</ul>
							</li>
							<?php
							}			 
							
							if($_SESSION["egitim"]==1 or $_SESSION["kid"]==1)
							{
								
							?>  
							<li class="treeview"> <a href="#"> <i class="fa fa-briefcase"></i> <span><?php echo $diller['egitim']; ?></span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
								<ul class="treeview-menu">
									<li><a href="index.php?islem=egitimekle"><i class="fa fa-plus-square"></i><?php echo $diller['egitimEkle']; ?></a></li>
									<li><a href="index.php?islem=egitimliste"><i class="fa fa-bars"></i><?php echo $diller['egitimList']; ?></a></li>
									<li><a href="index.php?islem=egitimrapor"><i class="fa fa-registered"></i><?php echo $diller['egitimRaporlar']; ?></a></li>
								</ul>
							</li>
							
							<?php
							}			 
							
							if($_SESSION["karar"]==1 or $_SESSION["kid"]==1)
							{
								
							?>
							<li class="treeview"> <a href="#"> <i class="fa fa-check-square"></i> <span><?php echo $diller['kararlar']; ?></span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
								<ul class="treeview-menu">
									<li><a href="index.php?islem=kararekle"><i class="fa fa-plus-square"></i><?php echo $diller['kararEkle']; ?></a></li>
									<li><a href="index.php?islem=kararliste"><i class="fa fa-bars"></i><?php echo $diller['kararList']; ?></a></li>
									<li><a href="index.php?islem=kararrapor"><i class="fa fa-registered"></i><?php echo $diller['kararRaporlar']; ?> </a></li>
									
									<li><a href="index.php?islem=komisyonekle"><i class="fa fa-plus-square"></i><?php echo $diller['komisyonEkle']; ?></a></li>
									<li><a href="index.php?islem=komisyonliste"><i class="fa fa-bars"></i><?php echo $diller['komisyonList']; ?></a></li>
									
									<li><a href="index.php?islem=kararpdfekle"><i class="fa fa-plus-square"></i><?php echo $diller['kararRaporEkle']; ?></a></li>											
									<li><a href="index.php?islem=kararpdfliste"><i class="fa fa-bars"></i><?php echo $diller['kararRaporList']; ?></a></li>
									
									<li><a href="index.php?islem=karargorusekle"><i class="fa fa-plus-square"></i><?php echo $diller['gorusEkle']; ?></a></li>
									<li><a href="index.php?islem=karargorusliste"><i class="fa fa-bars"></i><?php echo $diller['gorusList']; ?></a></li>
									
									
								</ul>
							</li>
							<?php
							}			 
							
							if($_SESSION["toplam"]==1 or $_SESSION["kid"]==1)
							{
								
							?>
							<li class="treeview"> <a href="#"> <i class="fa fa-cubes"></i> <span><?php echo $diller['kaliteYonetimSis']; ?></span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
								<ul class="treeview-menu">
									<li><a href="index.php?islem=isokat1ekle"><i class="fa fa-plus-square"></i><?php echo $diller['anaKategoriKYSEkle']; ?></a></li>
									<li><a href="index.php?islem=isokat1liste"><i class="fa fa-bars"></i><?php echo $diller['anaKategoriKYSList']; ?></a></li>
									
									<li><a href="index.php?islem=isokat2ekle"><i class="fa fa-plus-circle"></i><?php echo $diller['altKategoriKYSEkle']; ?></a></li>
									<li><a href="index.php?islem=isokat2liste"><i class="fa fa-bars"></i><?php echo $diller['altKategoriKYSList']; ?></a></li>
									
									<li><a href="index.php?islem=isoekle"><i class="fa fa-plus"></i><?php echo $diller['tkyEkle']; ?></a></li>
									<li><a href="index.php?islem=isoliste"><i class="fa fa-bars"></i><?php echo $diller['tkyList']; ?></a></li>
									
									<li><a href="index.php?islem=firmaekle"><i class="fa fa-plus-square-o"></i><?php echo $diller['firmaEkle']; ?></a></li>
									<li><a href="index.php?islem=firmaliste"><i class="fa fa-bars"></i><?php echo $diller['firmaList']; ?></a></li>
									
									<li><a href="index.php?islem=tedarikekle1"><i class="fa fa-plus"></i><?php echo $diller['tedarikciFirmaEkle']; ?></a></li>
									<li><a href="index.php?islem=tedarikliste"><i class="fa fa-bars"></i><?php echo $diller['tedarikciFirmaList']; ?></a></li>
								</ul>
							</li>
							<?php
							}			 
							
							if($_SESSION["akreditasyon"]==1 or $_SESSION["kid"]==1)
							{
								
							?>
							<li> <a href="#"> <i class="fa fa-flag-checkered"></i> <span><?php echo $diller['akreditasyon']; ?></span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
								<ul class="treeview-menu">
									<li><a href="index.php?islem=akreekle"><i class="fa fa-plus"></i><?php echo $diller['akreditasyonEkle']; ?></a></li>
									<li><a href="index.php?islem=akreliste"><i class="fa fa-bars"></i><?php echo $diller['akreditasyonList']; ?></a></li>
									
									<li><a href="index.php?islem=akkat1ekle"><i class="fa fa-plus"></i><?php echo $diller['ustKategoriAkreEkle']; ?></a></li>
									<li><a href="index.php?islem=akkat1liste"><i class="fa fa-bars"></i><?php echo $diller['ustKategoriAkreList']; ?></a></li>
									
									<li><a href="index.php?islem=akkat2ekle"><i class="fa fa-plus"></i><?php echo $diller['altKategoriAkreEkle']; ?></a></li>
									<li><a href="index.php?islem=akkat2liste"><i class="fa fa-bars"></i><?php echo $diller['altKategoriAkreList']; ?></a></li>
								</ul>
							</li>
							<?php
							}			 
							
							if($_SESSION["sp"]==1 or $_SESSION["kid"]==1)
							{
								
							?>
							<li> <a href="#"> <i class="fa fa-dashboard"></i> <span><?php echo $diller['stratejikPlan']; ?></span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
								<ul class="treeview-menu">
									<li><a href="index.php?islem=spkatekle"><i class="fa fa-plus"></i><?php echo $diller['spKategoriEkle']; ?></a></li>
									<li><a href="index.php?islem=spkatliste"><i class="fa fa-bars"></i><?php echo $diller['spKategoriList']; ?></a></li>
									
									<li><a href="index.php?islem=spekle"><i class="fa fa-plus"></i><?php echo $diller['stratejikPlanEkle']; ?></a></li>
									<li><a href="index.php?islem=spliste"><i class="fa fa-bars"></i><?php echo $diller['stratejikPlanList']; ?></a></li>
									<li><a href="index.php?islem=sp"><i class="fa fa-folder"></i><?php echo $diller['stratejikPlanDosyasi']; ?></a></li>
									
								</ul>
							</li>
							<?php
							}			 
							
							if($_SESSION["kid"]==1)
							{
								
							?>
							<li> <a href="#"> <i class="fa fa-users"></i> <span><?php echo $diller['kullanicilar']; ?></span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
								<ul class="treeview-menu">
									<li><a href="index.php?islem=kullaniciekle"><i class="fa fa-user-plus"></i><?php echo $diller['kullaniciEkle']; ?></a></li>
									<li><a href="index.php?islem=kullaniciliste"><i class="fa fa-user-times"></i><?php echo $diller['kullaniciList']; ?></a></li>
								</ul>
							</li>
							<?php
							}						
							if($_SESSION["kid"]==1)
							{
								
							?>
							<li> 
								<a href="#"> <i class="fa fa-link"></i> <span><?php echo $diller['sosyalMedya']; ?></span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
								<ul class="treeview-menu">
									<li><a href="index.php?islem=sosyalMedyaEkle"><i class="fa fa-plus"></i><?php echo $diller['sosyalMedyaEkle']; ?></a></li>
									
								</ul>
							</li>
							<?php
							}						
							if($_SESSION["kid"]==1)
							{
								
							?>
							<li> 
								<a href="#"> <i class="fa fa-money"></i> <span><?php echo $diller['reklam']; ?></span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
								<ul class="treeview-menu">
									<li><a href="index.php?islem=reklamEkle"><i class="fa fa-plus"></i><?php echo $diller['reklamEkle']; ?></a></li>
									
								</ul>
							</li>
							<?php
							}						
						?>
					</section>
					<!-- /.sidebar -->
				</aside>
				
				<!-- Content Wrapper. Contains page content -->
				<div class="content-wrapper">
					<!-- Content Header (Page header) -->
					
					<!-- Main content -->
					
					
					<section class="content">
						<div class="row">
							<div class="col-md-12">
								<button class="btn btn-warning" onClick="window.history.back();" style="float:right;margin:5px;"><i class="fa fa-mail-reply-all"></i> <?php echo $diller['geriDonLink']; ?></button>
							</div>
						</div>
						<?php 
							if(isset($_GET["islem"])) 
							include "kod/".$_GET["islem"].".php";
							else
							include "orta.php";											
						?>																				
						</section>
						<button class="btn btn-warning" onClick="window.history.back();" style="margin:5px;"><i class="fa fa-mail-reply-all"></i> <?php echo $diller['geriDonLink']; ?></button>
						<!-- /.content -->
					</div>
					<!-- /.content-wrapper -->
					<?php
						//YONETİMPANELİ DURUM MESAJLARI 
						include("popupMesaj.php");
						//YONETİMPANELİ DURUM MESAJLARI
					?>
					<footer class="main-footer">
						<div class="pull-right hidden-xs">
						<b>Version</b> 2.0.0</div>
						
						
						<strong><?php echo $_SESSION['altbaslik']; ?></footer>
						
						<div class="control-sidebar-bg"></div>
					</div>
					<!-- ./wrapper -->
					
					
					<script src="kaynak/bootstrap/js/bootstrap.min.js"></script>
					<script src="kaynak/plugins/select2/select2.full.min.js"></script>
					<script src="kaynak/plugins/input-mask/jquery.inputmask.js"></script>
					<script src="kaynak/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
					<script src="kaynak/plugins/input-mask/jquery.inputmask.extensions.js"></script>
					<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
					<script src="kaynak/plugins/daterangepicker/daterangepicker.js"></script>
					<script src="kaynak/plugins/datepicker/bootstrap-datepicker.js"></script>
					<script src="kaynak/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
					<script src="kaynak/plugins/timepicker/bootstrap-timepicker.min.js"></script>
					<script src="kaynak/plugins/slimScroll/jquery.slimscroll.min.js"></script>
					<script src="kaynak/plugins/iCheck/icheck.min.js"></script>
					<script src="kaynak/plugins/fastclick/fastclick.js"></script>
					<script src="kaynak/dist/js/app.min.js"></script>
					<script src="kaynak/dist/js/demo.js"></script>
					
					<link href="kaynak/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet">
					<script src="kaynak/plugins/datatables/jquery.dataTables.min.js"></script>
					<script src="kaynak/plugins/datatables/dataTables.bootstrap.min.js"></script>
					<script>
						$(document).ready(function(){
							$('[data-toggle="tooltip"]').tooltip(); 
						});
					</script>
					<script>
						
						$(function () {									
							/*
								-- =============================================
								-- Author		: EKOMURCU
								-- Create date	: 10.07.2018 03:04
								-- Description	: genel olarak silme butonları için uyarı mesajı vermek için yazıldı
								-- ============================================= 
							*/									
							$(".btn-danger").click(function(){
								return confirm("Silmek İstediğinizden emin misiniz?");
							});									
						});
						
						$(function () {
							$("#example1").DataTable();
							$("#tabloGenel").DataTable({
								"language":{ "url":"kaynak/plugins/datatables/Turkish.json", }
								
							});
							$('#example2').DataTable({			
								"paging": true,
								"lengthChange": true,
								"searching": true,
								"ordering": true,
								"info": true,
								"autoWidth": true,
								"responsive": true,
								"processing":true,
								"order": [[ 2, 'desc' ]],
								"language":{ "url":"kaynak/plugins/datatables/Turkish.json", 
									buttons: {
										copyTitle: "Panoya kopyalandı.",
										copySuccess:"Panoya %d satır kopyalandı",
										copy: "Kopyala",
										print: "Yazdır",
										colvis:"Sütun Seç",
										excel:"Exel'e aktar",
										pdf:"Pdf'e aktar",
										
									}
								},
								dom: 'Bfrtip',   buttons: [
								'copy', 'csv', 'excel', 'pdf', 'print', 'colvis'
								] ,       
							});
						});
					</script>
					
					<script type="text/javascript" src="kaynak/plugins/datepicker/locales/bootstrap-datepicker.tr.js" charset="UTF-8"></script>
					<script>
						$(function () {
							//Initialize Select2 Elements
							$(".select2").select2();
							
							//Datemask dd/mm/yyyy
							$("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
							//Datemask2 mm/dd/yyyy
							$("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
							$(".telefon").inputmask("(999)999-9999", {"placeholder": "(999)999-9999"});
							//Money Euro
							$("[data-mask]").inputmask();
							
							//Date range picker
							$('#reservation').daterangepicker();
							//Date range picker with time picker
							$('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
							//Date range as a button
							$('#daterange-btn').daterangepicker(
							{
								ranges: {
									'Today': [moment(), moment()],
									'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
									'Last 7 Days': [moment().subtract(6, 'days'), moment()],
									'Last 30 Days': [moment().subtract(29, 'days'), moment()],
									'This Month': [moment().startOf('month'), moment().endOf('month')],
									'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
								},
								startDate: moment().subtract(29, 'days'),
								endDate: moment()
							},
							function (start, end) {
								$('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
							}
							);
							
							//Date picker
							$('#datepicker').datepicker({
								day: 1,
								language: 'tr'
							});
							$('#tarih').datepicker({
								/*
									-- =============================================
									-- Author		: EKOMURCU
									-- Create date	: 22.07.2018
									-- Description	: etkinlik takvimi(admin) ayarları
									-- ============================================= 
								*/	
								language: 'tr',								 
								todayHighlight:true,
								weekStart:1
								
							});
							//iCheck for checkbox and radio inputs
							$('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
								checkboxClass: 'icheckbox_minimal-blue',
								radioClass: 'iradio_minimal-blue'
							});
							//Red color scheme for iCheck
							$('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
								checkboxClass: 'icheckbox_minimal-red',
								radioClass: 'iradio_minimal-red'
							});
							//Flat red color scheme for iCheck
							$('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
								checkboxClass: 'icheckbox_flat-green',
								radioClass: 'iradio_flat-green'
							});
							
							//Colorpicker
							$(".my-colorpicker1").colorpicker();
							//color picker with addon
							$(".my-colorpicker2").colorpicker();
							
							//Timepicker
							$(".timepicker").timepicker({
								showInputs: false
							});
						});
					</script>
				</body>
			</html>
			<?php 
				ob_end_flush();
				ob_clean();
			?>																																																																												