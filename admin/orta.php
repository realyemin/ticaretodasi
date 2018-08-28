<?php
	/*
		-- =============================================
		-- Author		: EKOMURCU
		-- Create date	: 10.07.2018
		-- Description	: Yeniden Düzenlendi
		-- ============================================= 
	*/
?>
<div class="row">
	<!-- HABERLER -->
	<div class="col-lg-3 col-xs-6">
		<?php if($_SESSION["haber"]==1 or $_SESSION["kid"]==1){	?>						
			<div class="small-box bg-aqua">
				<div class="inner">
					<h3><?php 
						$sql = $db->prepare("SELECT COUNT(*) FROM haber WHERE dil=".$_SESSION["dil"]);
						$sql->execute();
						$say = $sql->fetchColumn();
						echo $say;
					?></h3>
					<div class="icon">
						<i class="fa fa-newspaper-o"></i>
					</div> 
					<p><?php echo $diller['haberler']; ?></p>
				</div>
				<a href="index.php?islem=haberekle" class="small-box-footer"><?php echo $diller['haberEkle']; ?></a> 
				<a href="index.php?islem=haberliste" class="small-box-footer"><?php echo $diller['listele']; ?></a>
			</div>			
		<?php }	?>		
	</div>
	<!-- HABERLER -->
	<!-- DUYURULAR -->	
	<div class="col-lg-3 col-xs-6">
		<?php if($_SESSION["duyuru"]==1 or $_SESSION["kid"]==1){ ?>			
			<div class="small-box bg-red">
				<div class="inner">
					<h3><?php 
						$sql = $db->prepare("SELECT COUNT(*) FROM duyuru WHERE dil=".$_SESSION["dil"]);
						$sql->execute();
						$say = $sql->fetchColumn();
						echo $say;
					?></h3>					
					<p><?php echo $diller['duyurular']; ?></p>
				</div>
				<div class="icon">
					<i class="fa fa-bullhorn"></i>
				</div> 
				<a href="index.php?islem=duyuruekle" class="small-box-footer"><?php echo $diller['duyuruEkle']; ?></a> 
				<a href="index.php?islem=duyuruliste" class="small-box-footer"><?php echo $diller['listele']; ?></a>
			</div>
		<?php }	?>			
	</div>
	<!-- DUYURULAR -->
	<!-- GENEL AYARLAR -->	
	<div class="col-lg-3 col-xs-6">
		<?php if($_SESSION["site"]==1 or $_SESSION["kid"]==1){ ?>			
			<div class="small-box bg-yellow">
				<div class="inner">
					<h3>&nbsp;</h3>
					<div class="icon">
						<i class="ion ion-aperture"></i>
					</div>
					<p><?php echo $diller['siteAyarlari']; ?></p>
				</div>
				<a href="index.php?islem=baskan" class="small-box-footer"><?php echo $diller['baskanResim']; ?></a> 		
				<a href="#" class="small-box-footer"><?php echo $diller['logo']; ?></a>
			</div>			
		<?php } ?>		
	</div>
	<!-- GENEL AYARLAR -->
	<!-- KULLANICILAR -->
	<div class="col-lg-3 col-xs-6">
		<?php if($_SESSION["kid"]==1){ ?>
			<div class="small-box bg-green">
				<div class="inner">
					<h3><?php 
						$sql = $db->prepare("SELECT COUNT(*) FROM kullanici ");
						$sql->execute();
						$say = $sql->fetchColumn();
						echo $say;
					?></h3>
					<div class="icon">
						<i class="fa fa-users"></i>
					</div>
					<p><?php echo $diller['kullanicilar']; ?></p>
				</div>				
				<a href="index.php?islem=kullaniciekle" class="small-box-footer"><?php echo $diller['kullaniciEkle']; ?></a> 
			<a href="index.php?islem=kullaniciliste" class="small-box-footer"><?php echo $diller['kullaniciList']; ?></a></div>			
		<?php } ?>		
	</div>
	<!-- KULLANICILAR -->
</div>
<?php if($_SESSION["kategori"]==1 or $_SESSION["kid"]==1) {	?>      	
	<div class="row">	
		<!-- ANA MENU KATEGORI -->
		<div class="col-md-3 col-sm-6 col-xs-12">			
			<div class="info-box">
				<span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>				
				<div class="info-box-content">
					<span class="info-box-text"><?php echo $diller['anaMenu']; ?></span>
					<a href="index.php?islem=kat1ekle" class="btn btn-block btn-default btn-xs"><?php echo $diller['ekle']; ?></a>
					<a href="index.php?islem=kat1liste" class="btn btn-block btn-default btn-xs"><?php echo $diller['duzenle']; ?></a>
				</div>				
			</div>		
		</div>  
		<!-- ANA MENU KATEGORI -->
		<!-- ÜST MENU KATEGORI -->
        <div class="col-md-3 col-sm-6 col-xs-12">
			<div class="info-box">
				<span class="info-box-icon bg-red"><i class="ion ion-ios-gear-outline"></i></span>				
				<div class="info-box-content">
					<span class="info-box-text"><?php echo $diller['ustMenu']; ?></</span>
					<a href="index.php?islem=kat2ekle" class="btn btn-block btn-default btn-xs"><?php echo $diller['ekle']; ?></a>
					<a href="index.php?islem=kat2liste" class="btn btn-block btn-default btn-xs"><?php echo $diller['duzenle']; ?></a>
				</div>
			</div>
		</div>
		<!-- ÜST MENU KATEGORI -->
		<!-- ALT MENU KATEGORI -->
		<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="info-box">
				<span class="info-box-icon bg-yellow"><i class="ion ion-ios-gear-outline"></i></span>				
				<div class="info-box-content">
					<span class="info-box-text"><?php echo $diller['altMenu']; ?></</span>   
					<a href="index.php?islem=kat3ekle" class="btn btn-block btn-default btn-xs"><?php echo $diller['ekle']; ?></a>
					<a href="index.php?islem=kat3liste" class="btn btn-block btn-default btn-xs"><?php echo $diller['duzenle']; ?></a>
				</div>
			</div>
		</div>
		<!-- ALT MENU KATEGORI -->	
		<!-- SAYFA ALT MENU -->	
		<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="info-box">
				<span class="info-box-icon bg-green"><i class="ion ion-ios-gear-outline"></i></span>				
				<div class="info-box-content">
					<span class="info-box-text"><?php echo $diller['sayfaAltMenu']; ?></</span>   
					<a href="index.php?islem=kat1ekle&alt=1" class="btn btn-block btn-default btn-xs"><?php echo $diller['ekle']; ?></a>
					<a href="index.php?islem=kat1liste1" class="btn btn-block btn-default btn-xs"><?php echo $diller['duzenle']; ?></a>
				</div>
			</div>
		</div>	
		<!-- SAYFA ALT MENU -->
	</div>
<?php } ?> 
<div class="row">
	<!-- EĞİTİM -->
	<div class="col-md-3 col-sm-6 col-xs-12">
		<?php if($_SESSION["egitim"]==1 or $_SESSION["kid"]==1){ ?>           
			<div class="info-box bg-aqua">
				<span class="info-box-icon"><i class="fa fa-briefcase"></i></span>				
				<div class="info-box-content">
					<span class="info-box-text"><?php echo $diller['egitim']; ?></span>
					<div class="progress">
						<div class="progress-bar" style="width: 70%"></div>
					</div>
					<span class="progress-description">
						<a href="index.php?islem=egitimekle" class="btn btn-block btn-default btn-xs"><?php echo $diller['ekle']; ?></a>					
						<a href="index.php?islem=egitimliste" class="btn btn-block btn-default btn-xs"><?php echo $diller['duzenle']; ?></a>							
						<a href="index.php?islem=egitimrapor" class="btn btn-block btn-default btn-xs"><?php echo $diller['egitimRaporlar']; ?></a>
					</span>
				</div>						
			</div>
			<?php } 
		?>				
	</div>
	<!-- EĞİTİM -->
	<!-- KARARLAR -->
	<div class="col-md-3 col-sm-6 col-xs-12">
		<?php if($_SESSION["karar"]==1 or $_SESSION["kid"]==1){	?>
			<div class="info-box bg-red">
				<span class="info-box-icon"><i class="fa fa-check-square"></i></span>				
				<div class="info-box-content">
					<span class="info-box-text"><?php echo $diller['kararlar']; ?></span>
					<div class="progress">
						<div class="progress-bar" style="width: 70%"></div>
					</div>
					<span class="progress-description">
						<a href="index.php?islem=kararekle" class="btn btn-block btn-default btn-xs"><?php echo $diller['ekle']; ?></a>
						<a href="index.php?islem=kararliste" class="btn btn-block btn-default btn-xs"><?php echo $diller['duzenle']; ?></a>
						<a href="index.php?islem=kararrapor" class="btn btn-block btn-default btn-xs"><?php echo $diller['kararRaporlar']; ?></a>							
					</span>
				</div>						
			</div>	
		<?php } ?>		
	</div>
	<!-- KARARLAR -->
	<!-- ETKİNLİK -->
	<div class="col-md-3 col-sm-6 col-xs-12">
		<?php if($_SESSION["etkinlik"]==1 or $_SESSION["kid"]==1){	?>         
			<div class="info-box bg-yellow">
				<span class="info-box-icon"><i class="fa fa-calendar"></i></span>			
				<div class="info-box-content">
					<span class="info-box-text"><?php echo $diller['etkinlik']; ?></span>
					<div class="progress">
						<div class="progress-bar" style="width: 70%"></div>
					</div>
					<span class="progress-description">
						<p>
							<a href="index.php?islem=etkinlikekle" class="btn btn-block btn-default btn-xs"><?php echo $diller['ekle']; ?></a>					
							<a href="index.php?islem=etkinlikliste" class="btn btn-block btn-default btn-xs"><?php echo $diller['duzenle']; ?></a>						
						</p>
					</span>
				</div>							
			</div>
			<?php } 
		?>       
	</div>
	<!-- ETKİNLİK -->
	<!-- TKY -->
	<div class="col-md-3 col-sm-6 col-xs-12">
		<?php			
			if($_SESSION["toplam"]==1 or $_SESSION["kid"]==1){	?>       
			<div class="info-box bg-green">
				<span class="info-box-icon"><i class="fa fa-cubes"></i></span>			
				<div class="info-box-content">
					<span class="info-box-text"><?php echo $diller['kaliteYonetimSis']; ?></span>
					<div class="progress">
						<div class="progress-bar" style="width: 70%"></div>
					</div>
					<span class="progress-description">
						<p>
							<a href="index.php?islem=isoekle" class="btn btn-block btn-default btn-xs"><?php echo $diller['ekle']; ?></a>						
							<a href="index.php?islem=isoliste" class="btn btn-block btn-default btn-xs"><?php echo $diller['duzenle']; ?></a>							
						</p>
					</span>
				</div>				
			</div>			
			<?php 
			}
		?>		
	</div>
	<!-- TKY -->
</div>

<div class="row">
	<!-- AKREDITASYON -->
	<div class="col-md-3 col-sm-6 col-xs-12">
		<?php if($_SESSION["akreditasyon"]==1 or $_SESSION["kid"]==1){	?>
			<div class="info-box bg-aqua">
				<span class="info-box-icon"><i class="fa fa-flag-checkered"></i></span>				
				<div class="info-box-content">
					<span class="info-box-text"><?php echo $diller['akreditasyon']; ?></span>
					<div class="progress">
						<div class="progress-bar" style="width: 70%"></div>
					</div>
					<span class="progress-description">
						<p>
							<a href="index.php?islem=akreekle" class="btn btn-block btn-default btn-xs"><?php echo $diller['ekle']; ?></a>							
							<a href="index.php?islem=akreliste" class="btn btn-block btn-default btn-xs"><?php echo $diller['duzenle']; ?></a>
						</p>
					</span>
				</div>					
			</div>		
		<?php } ?>
	</div>
	<!-- AKREDITASYON -->
	<!-- STRATEJIK PLAN -->	
	<div class="col-md-3 col-sm-6 col-xs-12">
		<?php if($_SESSION["sp"]==1 or $_SESSION["kid"]==1){ ?>
			<div class="info-box bg-red">
				<span class="info-box-icon"><i class="fa fa-dashboard"></i></span>
				
				<div class="info-box-content"><?php echo $diller['stratejikPlan']; ?>
					<div class="progress">
						<div class="progress-bar" style="width: 70%"></div>
					</div>
					<span class="progress-description">
						<p>
							<a href="index.php?islem=spekle" class="btn btn-block btn-default btn-xs"><?php echo $diller['ekle']; ?></a> 							
							<a href="index.php?islem=spliste" class="btn btn-block btn-default btn-xs"><?php echo $diller['duzenle']; ?></a>
						</p>						
					</span>
				</div>				
			</div>			
		<?php } ?>
	</div>
	<!-- STRATEJIK PLAN -->			
	<!-- ICERIK -->			
	<div class="col-md-3 col-sm-6 col-xs-12">
		<?php if($_SESSION["icerik"]==1 or $_SESSION["kid"]==1)	{ ?>			
			<div class="info-box bg-yellow">
				<span class="info-box-icon"><i class="fa fa-archive"></i></span>				
				<div class="info-box-content">
					<span class="info-box-text"><?php echo $diller['icerik']; ?></span>
					<div class="progress">
						<div class="progress-bar" style="width: 70%"></div>
					</div>
					<span class="progress-description">
						<p>
							<a href="index.php?islem=icerikekle" class="btn btn-block btn-default btn-xs"><?php echo $diller['ekle']; ?></a>							
							<a href="index.php?islem=icerikliste" class="btn btn-block btn-default btn-xs"><?php echo $diller['duzenle']; ?></a>
						</p>						
					</span>
				</div>			
			</div>
		<?php }	?>					
	</div>
	<!-- ICERIK -->		
	<!-- ANKET -->		
	<div class="col-md-3 col-sm-6 col-xs-12">		
		<?php if($_SESSION["anket"]==1 or $_SESSION["kid"]==1){	?>
			<div class="info-box bg-green">
				<span class="info-box-icon"><i class="fa fa-bar-chart"></i></span>				
				<div class="info-box-content">
					<span class="info-box-text"><?php echo $diller['anket']; ?></span>
					<div class="progress">
						<div class="progress-bar" style="width: 70%"></div>
					</div>
					<span class="progress-description">
						<p>
							<a href="index.php?islem=anketekle" class="btn btn-block btn-default btn-xs"><?php echo $diller['ekle']; ?></a>							
							<a href="index.php?islem=anketliste" class="btn btn-block btn-default btn-xs"><?php echo $diller['duzenle']; ?></a>
						</p>								
					</span>
				</div>					
			</div>
		<?php }	?>				
	</div>		
	<!-- ANKET -->	
</div>      