<?php
include "../../kaynak/db.php";
?>
			<?php
       //     @$id=	$_POST['ad'];
	   $sql2="select * from dokuman where hedef=0 and risk=0";
	   
$query = $db->query($sql2, PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $row ){
		  
$baslik=$row['baslik'];
$dokuman=$row['dokumanno'];
$yayin=$row['yayintarihi'];
$revizyontar=$row['revizyontarihi'];
$revizyonno=$row['revizyonno'];
$sayfa=$row['sayfa'];
	 }
	 }
	 
	 
function komisyon($k)
{
	
include "../../kaynak/db.php";


	
	$query = $db->query("SELECT id,ad FROM komisyonlar where id =$k", PDO::FETCH_ASSOC);
			if ( $query->rowCount() ){
     foreach( $query as $row ){
		  $adi= $row['ad'];
		  
	 }}
	 echo $adi;
}


	 
$komisyon=$_POST['komisyonadi'];
$nihai=$_POST['nihaidurum'];

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

if($nihai!="")
{
		if($a>0)
	{ $sql=$sql." and ";
$a=$a-1; 
	}
	$sql=$sql." nihaidurum ='".$nihai."'";
$a=$a+1; 
	}

if($sql!="")
	$sql1="select * from kararlar where". $sql;
else
	$sql1="select * from kararlar";

include "../../kaynak/db.php";


	
?>

<table width="720" height="127" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="23" rowspan="5"><div><img src="../../../img/Logo.png" width="94" height="87" /><img src="../../../img/tse_logo.png" width="116" height="86" /><font size="+3"><?PHP echo $baslik ?></font></div></td>
    <td>Dok. No</td>
    <td height="11"><?PHP echo $dokuman ?></td>
  </tr>
  <tr>
    <td>Yayın Tar.</td>
    <td height="12"><?PHP echo $yayin ?></td>
  </tr>
  <tr>
    <td>Revizyon Tarihi</td>
    <td height="23"><?PHP echo $revizyontar ?></td>
  </tr>
  <tr>
    <td>Revizyon no</td>
    <td height="23"><?PHP echo $revizyonno ?></td>
  </tr>
  <tr>
    <td>Sayfa</td>
    <td height="21"><?PHP echo $sayfa ?></td>
  </tr>
  <tr>
    <td height="23" colspan="3"><table height="175" class="table table-bordered table-hover" id="example2">
      <thead>
        <tr>
          <th>No</th>
          <th>Kurul-Komisyon Adı</th>
          <th>Karar Tarihi</th>
          <th>Karar Sayısı</th>
          <th>Etkin Karar</th>
          <th>Kararla İlgili Etkin Yazı-Tarih-Sayı</th>
          <th>Sonuç</th>
          <th>Nihai Durum</th>
          </tr>
        <?php
$query = $db->query($sql1, PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $row ){
		  ?>
        <tr>
          <td><?php echo $row['id']?></td>
          <td><?php echo komisyon($row['komisyon'])?></td>
          <td><?php echo $row['karartarihi']?></td>
          <td><?php echo $row['kararsayisi']?></td>
          <td><?php echo $row['etkinkarar']?></td>
          <td><?php echo $row['gidenyazi_tarih_sayi']?></td>
          <td><?php echo $row['sonuc']?></td>
          <td><?php echo $row['nihaidurum']?></td>
          </tr>
        <?php
		  
		  
		  
     }
}

	?>
      </thead>
      <tbody>
      </tbody>
    </table></td>
  </tr>
</table>
