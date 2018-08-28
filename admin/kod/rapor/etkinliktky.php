<?php
include "../../kaynak/db.php";
?>
			<?php
       //     @$id=	$_POST['ad'];
$baslik=$_POST['baslik'];
$dokuman=$_POST['dokumanno'];
$yayin=$_POST['yayintarihi'];
$revizyontar=$_POST['revizyontarihi'];
$revizyonno=$_POST['revizyonno'];
$sayfa=$_POST['sayfa'];
@$tarih1 = $_POST['tarih1'];

@$tarih2= $_POST['tarih2'];

$katilimci=$_POST['katilimci'];
$gerceklestiren=$_POST['gerceklestiren'];
$tur=$_POST['tur'];

$a=0;
$sql="";
if($tarih1!="")
{
	$gun=substr($tarih1, 0, 2);
$ay=substr($tarih1, 3, 2);
$yil=substr($tarih1, 6, 4); 
$tarih1="$yil-$ay-$gun" ;

	if($a>0)
	{ $sql=$sql." and ";
$a=$a-1; 
	}
	$sql=$sql." egitim_tarihi>".$tarih1."";
$a=$a+1; 
	}

if($tarih2!="")
{
	$gun=substr($tarih2, 0, 2);
$ay=substr($tarih2, 3, 2);
$yil=substr($tarih2, 6, 4); 
$tarih2="$yil-$ay-$gun" ;

		if($a>0)
	{ $sql=$sql." and ";
$a=$a-1; 
	}
	$sql=$sql." egitim_tarihi<".$tarih2."";
$a=$a+1; 
	}

if($katilimci!="")
{
		if($a>0)
	{ $sql=$sql." and ";
$a=$a-1; 
	}
	$sql=$sql." katilanlar like '%".$katilimci."%'";
$a=$a+1; 
	}

if($gerceklestiren!="")
{
		if($a>0)
	{ $sql=$sql." and ";
$a=$a-1; 
	}
	$sql=$sql." gerceklestiren like '%".$gerceklestiren."%'";
$a=$a+1; 
	}

if($tur!="")
{
		if($a>0)
	{ $sql=$sql." and ";
$a=$a-1; 
	}
	$sql=$sql." tur like '%".$tur."%'";
$a=$a+1; 
	}
if($sql!="")
	$sql1="select * from etkinliktky where". $sql;
else
	$sql1="select * from etkinliktky";

include "../../kaynak/db.php";

//echo $sql1;
	
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
          <th>Etkinlik Adı</th>
          <th>Etkinlik Tarihi</th>
          <th>Etkinlik Yeri</th>
          <th>Etkinliği Gerçekleştiren</th>
          <th>Etkinlik Süresi</th>
          <th>Etkinlik Türü</th>
          <th>Etkinlik Katılımcıları</th>
          <th>Açıklama</th>
        </tr>
        <?php
$query = $db->query($sql1, PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $row ){
		  ?>
        <tr>
          <td><?php echo $row['id']?></td>
          <td><?php echo $row['adi']?></td>
          <td><?php echo $row['egitim_tarihi']?></td>
          <td><?php echo $row['yeri']?></td>
          <td><?php echo $row['gerceklestiren']?></td>
          <td><?php echo $row['suresi']?></td>
          <td><?php echo $row['tur']?></td>
          <td><?php echo $row['katilanlar']?></td>
          <td ><?php echo $row['aciklama']?></td>
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
