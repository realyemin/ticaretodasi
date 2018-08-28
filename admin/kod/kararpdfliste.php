
<p>Karar Listesi </p>

<p>&nbsp;</p>
<div align="center">
  <div class="box">
    <div class="box-header"></div>
		  <!-- /.box-header -->
<form id="form2" name="form1" method="post"  onsubmit="popup(this)" action="index.php?islem=kararpdfliste">
  <table width="700" border="0" cellspacing="0" cellpadding="1">
    <tr>
      <td>Komisyon-Kurul Adı
        <select  name="komisyonadi">
          <option value="">Seçiniz</option>
          <?php
$query = $db->query("SELECT id, ad FROM komisyonlar", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $row ){
		 ?>
          <option value="<?php echo $row['id']?>">
            <?php
				 echo $row['ad']
					  ?>
            </option>
          <?php
	 }}
	 ?>
        </select></td>
      <td>Yıl
        <label for="textfield"></label>
        <input type="text" name="yil" id="textfield" /></td>
      <td align="center"> <button  type="submit"  class="btn btn-block btn-primary btn-xs">Ara</button>&nbsp;</td>
    </tr>
  </table>
</form>
		  <div class="box-body">
		    <table width="962" border="0" cellpadding="0" cellspacing="0" class="table table-bordered table-hover">
		      <tbody>
		        <tr>
		          <td width="36" height="32"> id</td>
		          <td width="115">Komisyon</td>
		          <td width="204">Karar Tarihi-Sayısı</td>
		          <td width="204">Yıl</td>
		          <td width="204">
                  
                  Pdf</td>
		          <td colspan="3"> İşlemler</td>
	            </tr>
		        <?php
				

  
function komisyon($k)
{
	
include "kaynak/db.php";


	
	$query = $db->query("SELECT id,ad FROM komisyonlar where id =$k", PDO::FETCH_ASSOC);
			if ( $query->rowCount() ){
     foreach( $query as $row ){
		  $adi= $row['ad'];
		  
	 }}
	 echo $adi;
}
$komisyon="";
$yil="";
 if(isset($_POST['komisyonadi']))
$komisyon=$_POST['komisyonadi'];
if(isset($_POST['yil']))
$yil=$_POST['yil'];

$a=0;
$sql="";
if($komisyon!="")
{
	if($a>0)
	{ $sql=$sql." and ";
$a=$a-1; 
	}
	$sql=$sql." komisyon = ".$komisyon;
$a=$a+1; 
	}

if($yil!="")
{
		if($a>0)
	{ $sql=$sql." and ";
$a=$a-1; 
	}
	$sql=$sql." yil =".$yil;
$a=$a+1; 
	}

if($sql!="")
	$sql1="select * from kararpdf where". $sql;
else
	$sql1="select * from kararpdf";



$query = $db->query($sql1, PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $row ){
		  ?>
		        <tr>
		          <td><?php echo $row['id']?></td>
		          <td><?php echo komisyon($row['komisyon'])?></td>
		          <td><?php
				  $tarih= $row['karartarihi'];
				  $gun=substr($tarih, 8, 2);
$ay=substr($tarih, 5, 2);
$yil=substr($tarih, 0, 4); 
$tarih="$gun.$ay.$yil" ;
				  
				   echo $tarih . "-" . $row['kararsayisi']?></td>
		          <td><?php echo $row['yil']?></td>
		          <td>
                  <?php if(file_exists("../tcrt/kararpdf/karar_".$row['id'].".pdf")) 
				  {
					  ?><form action="../tcrt/kararpdf/karar_<?php echo $row['id']?>.pdf" target="_blank">
		            <button  type="submit"  class="btn btn-block btn-primary btn-xs">Pdf Aç</button>
		            </form>
                  <?php 
				  }
				  else
				  echo "-"
				  ?>
                  
                  
                  </td>
		          <td width="64"><form action="index.php?islem=kararpdfsil&id=<?php echo $row['id']?>" method="post">
		            <button type="submit"  class="btn btn-block btn-primary btn-xs"> Sil </button>
		            </form></td>
		          <td width="68"  align="center">&nbsp;</td>
		          <td width="67">&nbsp;</td>
	            </tr>
		        <?php
		  
		  
		  
     }
}

	?>
	          </tbody>
	        </table>
		  </div>
		  <!-- /.box-body -->
  </div>
</div>
