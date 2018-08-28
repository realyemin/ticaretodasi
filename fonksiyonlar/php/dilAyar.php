<?php
	//$dil=1;//varsayılan dil Türkçedir,haber,duyuru ve menu gibi tablolardan veri çekerken kullanılması gerekir
	if(isset($_POST['dilSec']))
	{ 				
		$_SESSION["dilSec"]=$_POST['dilSec']; 		
	}
	else
	{
		if(!isset($_SESSION['dilSec']))
		{
			//seçili dil yoksa varsayılan Türkçedir
			$_SESSION["dilSec"]="tr";
			include('admin/dilPaketi/tr.php');
		}
	}
	if(isset($_SESSION["dilSec"]))
	{
		
		$dilQuery = $db->query("SELECT id,siteadi,altbaslik FROM genel Where dil='".$_SESSION['dilSec']."'")->fetch();
		$_SESSION["dil"]=$dilQuery['id'];
		$dil=$_SESSION["dil"];  //genel tablosundaki id, seçilen dil içi id
		$_SESSION["siteadi"]=$dilQuery['siteadi'];
		$_SESSION["altbaslik"]=$dilQuery['altbaslik'];
		$dilDosyasi="admin/dilPaketi/".$_SESSION["dilSec"].".php";
		if(file_exists($dilDosyasi))
		{
			include($dilDosyasi);
			}else{
			echo "<div class='alert alert-danger'>Seçilen dil için dil paketi yüklenmemiştir. Lütfen dil paketini yüklediğinizden emin olunuz!</div>";
			include('admin/dilPaketi/tr.php');
		}		
	}
	?>