<?php
//error_reporting(0);
include "kaynak/db.php";
ob_start();
session_start();

if  ($_SESSION["kullanici"]=="")
{header ("Location:giris.php");  
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

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ticaret Odası Yönetim Paneli</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  
  <link rel="stylesheet" href="kaynak/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
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
      <span class="logo-lg"><b>Yönetim</span>
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
			  ?> Yeni Mesajınız Var </li>
              <li>
			  <!-- inner menu: contains the actual data -->
               <ul class="menu">
                  <?php

if ( $query->rowCount() ){
     foreach( $query as $row ){
		  ?>
                  <li>
                    <!-- start message -->
                    <a href="index.php?islem=mesajoku&kid=0&id=<?php echo $row['id']?>"><div><?php echo substr($row['mesaj'],0,40) ."...."?></div></li><?php
	 }}
	 
					?>
                   <!-- end message -->
                </ul>
              </li>
              <li class="footer"><a href="index.php?islem=mesajoku&id=0&kid=<?php echo $_SESSION["kid"]?>">Tüm Mesajları Görüntüle</a></li>
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
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">0</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Görev Bildirimi Yok</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="hidden-xs"> <?php 
		echo $_SESSION["kullanici"];
		?></span>
            </a>
              <!-- Menu Footer-->
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="cikis.php"><img src="../img/cikis.png" width="25" height="25"></a>
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
      <div class="pull-left image"> <img src="../tcrt/logo.jpg" class="img-circle" alt="User Image"></div>
      <div class="pull-left info">
        <p>
          <?php 
		echo $_SESSION["kullanici"];
		?>
        </p>
        </div>
   </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Arama">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span></div>
      </form>
     
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
<li class="header">MEN&Uuml;</li>



  <?php
	   
	  if($_SESSION["site"]==1 or $_SESSION["kid"]==1) {

?>   
	  
<li class="treeview"> <a href="#"> <i class="fa fa-files-o"></i> <span>Web Sitesi Menüleri</span> <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i> </span> </a>   


		  <ul class="treeview-menu">
            <li><a href="index.php?islem=kat1ekle"><i class="fa fa-circle-o"></i> Ana Menü Ekle</a></li>
            <li><a href="index.php?islem=kat1liste"><i class="fa fa-circle-o"></i> Ana Menü Liste-Sil</a></li>
            <li><a href="index.php?islem=kat2ekle"><i class="fa fa-circle-o"></i> Ust Menü Ekle</a></li>
               <li><a href="index.php?islem=kat2liste"><i class="fa fa-circle-o"></i> Ust Menü Liste-Sil</a></li>
        
          <li><a href="index.php?islem=kat3ekle"><i class="fa fa-circle-o"></i> Alt Menü Ekle</a></li>
         
          <li><a href="index.php?islem=kat3liste"><i class="fa fa-circle-o"></i> Alt Menü Sil</a></li>
		  </ul>
</li>
       <?php
	   }
	   
	   if($_SESSION["haber"]==1 or $_SESSION["kid"]==1)
	   {
		   
	   		   ?> <li class="treeview"> <a href="#"> <i class="fa fa-files-o"></i> <span>Haberler</span> <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="index.php?islem=haberekle"><i class="fa fa-circle-o"></i> Haber Ekle </a></li>
            <li><a href="index.php?islem=haberliste"><i class="fa fa-circle-o"></i> Haber Liste-Sil</a></li>
          </ul>
        </li>
              <?php
	   }			 

	   if($_SESSION["duyuru"]==1 or $_SESSION["kid"]==1)
	   {


			 ?>

	   <li class="treeview"> <a href="#"> <i class="fa fa-files-o"></i> <span>Duyurular</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i>  </span> </a>
          <ul class="treeview-menu">
            <li><a href="index.php?islem=duyuruekle"><i class="fa fa-circle-o"></i> Duyuru Ekle </a></li>
            <li><a href="index.php?islem=duyuruliste"><i class="fa fa-circle-o"></i> Duyuru  Liste-Sil</a></li>
          </ul>
</li>
              <?php
	   }			 

	   if($_SESSION["icerik"]==1 or $_SESSION["kid"]==1)
	   {

?>

        <li class="treeview"> <a href="#"> <i class="fa fa-files-o"></i> <span>İçerik</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="index.php?islem=icerikekle"><i class="fa fa-circle-o"></i> İçerik Ekle </a></li>
            <li><a href="index.php?islem=icerikliste"><i class="fa fa-circle-o"></i> İçerik Liste-Sil</a></li>
          </ul>
        </li>
            <?php
			
	   }			 
	   
	   if($_SESSION["anket"]==1 or $_SESSION["kid"]==1)
	   {

?>

        <li class="treeview"> <a href="#"> <i class="fa fa-files-o"></i> <span>Anket</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="index.php?islem=anketekle"><i class="fa fa-circle-o"></i> Anket Ekle </a></li>
            <li><a href="index.php?islem=anketliste"><i class="fa fa-circle-o"></i> Anket Liste-Sil</a></li>
          </ul>
        </li>
            <?php
	   
	   }			 
	   
	   if($_SESSION["etkinlik"]==1 or $_SESSION["kid"]==1)
	   {

?>

        <li class="treeview"> <a href="#"> <i class="fa fa-files-o"></i> <span>Etkinlik</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="index.php?islem=etkinlikekle"><i class="fa fa-circle-o"></i> Etkinlik Ekle </a></li>
            <li><a href="index.php?islem=etkinlikliste"><i class="fa fa-circle-o"></i> Etkinlik Liste-Sil</a></li>
          </ul>
        </li>
            <?php
	   }			 

	   if($_SESSION["egitim"]==1 or $_SESSION["kid"]==1)
	   {

?>  
  <li class="treeview"> <a href="#"> <i class="fa fa-dashboard"></i> <span>Eğitim</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="index.php?islem=egitimekle"><i class="fa fa-circle-o"></i> Eğitim Ekle</a></li>
            <li><a href="index.php?islem=egitimliste"><i class="fa fa-circle-o"></i>  Liste-Sil</a></li>
            <li><a href="index.php?islem=egitimrapor"><i class="fa fa-circle-o"></i> Raporlar </a></li>
          </ul>
</li>
		
		            <?php
	   }			 

	   if($_SESSION["karar"]==1 or $_SESSION["kid"]==1)
	   {

?>
        <li class="treeview"> <a href="#"> <i class="fa fa-dashboard"></i> <span>Kararlar</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="index.php?islem=kararekle"><i class="fa fa-circle-o"></i> Karar Ekle</a></li>
            <li><a href="index.php?islem=kararliste"><i class="fa fa-circle-o"></i>  Liste-Sil</a></li>
            <li><a href="index.php?islem=kararrapor"><i class="fa fa-circle-o"></i> Raporlar </a></li>
          <li><a href="index.php?islem=komisyonekle"><i class="fa fa-circle-o"></i> Komisyon Ekle </a></li>
          <li><a href="index.php?islem=komisyonliste"><i class="fa fa-circle-o"></i> Komisyon liste - Sil </a></li>
          
          </ul>
        </li>
                    <?php
	   }			 

	   if($_SESSION["toplam"]==1 or $_SESSION["kid"]==1)
	   {

?>
            <li class="treeview"> <a href="#"> <i class="fa fa-dashboard"></i> <span>Kalite Yönetim Sistemi</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="index.php?islem=isokat1ekle"><i class="fa fa-circle-o"></i> Ana Kategori Ekle</a></li>
            <li><a href="index.php?islem=isokat1liste"><i class="fa fa-circle-o"></i>  Liste-Sil</a></li>
            <li><a href="index.php?islem=isokat2ekle"><i class="fa fa-circle-o"></i> Alt Kategori Ekle  </a></li>
          <li><a href="index.php?islem=isokat2liste"><i class="fa fa-circle-o"></i> Liste - Sil </a></li>
          <li><a href="index.php?islem=isoekle"><i class="fa fa-circle-o"></i> TKY ekle </a></li>
          <li><a href="index.php?islem=isoliste"><i class="fa fa-circle-o"></i> TKY Liste </a></li>
             <li><a href="index.php?islem=firmaekle"><i class="fa fa-circle-o"></i> Firma Ekle </a></li>
                <li><a href="index.php?islem=firmaliste"><i class="fa fa-circle-o"></i> Firma Liste </a></li>
                <li><a href="index.php?islem=tedarikekle1"><i class="fa fa-circle-o"></i> Tedarikçi Firma Ekleme </a></li>
               <li><a href="index.php?islem=tedarikliste"><i class="fa fa-circle-o"></i> Tedarikçi Firma Liste</a></li>
          </ul>
        </li>
		            <?php
	   }			 

	   if($_SESSION["akreditasyon"]==1 or $_SESSION["kid"]==1)
	   {

?>
         <li> <a href="#"> <i class="fa fa-dashboard"></i> <span>Akreditasyon</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="index.php?islem=akreekle"><i class="fa fa-circle-o"></i> Akredidasyon Ekle</a></li>
                        <li><a href="index.php?islem=akreliste"><i class="fa fa-circle-o"></i> Akredidasyon Liste</a></li>
            
            <li><a href="index.php?islem=akkat1ekle"><i class="fa fa-circle-o"></i> &Uuml;st Kategori Ekle</a></li>
            <li><a href="index.php?islem=akkat1liste"><i class="fa fa-circle-o"></i> &Uuml;st Kategori Liste-Sil</a></li>
            <li><a href="index.php?islem=akkat2ekle"><i class="fa fa-circle-o"></i> Alt Kategori Ekle</a></li>
            <li><a href="index.php?islem=akkat2liste"><i class="fa fa-circle-o"></i> Alt Kategori Liste-Sil</a></li>
          </ul>
        </li>
		            <?php
	   }			 

 if($_SESSION["sp"]==1 or $_SESSION["kid"]==1)
	   {

?>
         <li> <a href="#"> <i class="fa fa-dashboard"></i> <span>Stratejik Plan</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="index.php?islem=spkatekle"><i class="fa fa-circle-o"></i> Kategori Ekle</a></li>
                        <li><a href="index.php?islem=spkatliste"><i class="fa fa-circle-o"></i> Kategori Listesi</a></li>
            
            <li><a href="index.php?islem=spekle"><i class="fa fa-circle-o"></i> Stratejik Plan Ekle</a></li>
            <li><a href="index.php?islem=spliste"><i class="fa fa-circle-o"></i> Stratejik Plan Liste-Sil</a></li>
            <li><a href="index.php?islem=sp"><i class="fa fa-circle-o"></i> Stratejik Plan Dosyası</a></li>
           
          </ul>
        </li>
                    <?php
	   }			 

 if($_SESSION["kid"]==1)
	   {

?>
		<li class="treeview"> <a href="#"> <i class="fa fa-dashboard"></i> <span>Kullanici</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="index.php?islem=kullaniciekle"><i class="fa fa-circle-o"></i> Kullanici Ekle</a></li>
            <li><a href="index.php?islem=kullaniciliste"><i class="fa fa-circle-o"></i> Kullanici Liste-Sil</a></li>
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
  <?php 
	$i=$_GET["islem"];
	if($i=="")
	{
		include "orta.php";
		
		}
		else
		{
			include "kod/".$i.".php";
		}
		
	?>
    
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.0</div>
    <strong>Copyright &copy; 2017 <a href="http://www.bafratso.org.tr">Bafra TSO</a></strong> Bilgi İşlem Memurluğu</footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="kaynak/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="kaynak/bootstrap/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="kaynak/plugins/select2/select2.full.min.js"></script>
<!-- InputMask -->
<script src="kaynak/plugins/input-mask/jquery.inputmask.js"></script>
<script src="kaynak/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="kaynak/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="kaynak/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="kaynak/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap color picker -->
<script src="kaynak/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="kaynak/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="kaynak/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="kaynak/plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="kaynak/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="kaynak/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="kaynak/dist/js/demo.js"></script>
<!-- Page script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();

    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
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
      autoclose: true
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
