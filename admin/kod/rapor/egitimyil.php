<?php
include "../../kaynak/db.php";
?>
			<?php
       //     @$id=	$_POST['ad'];
$yil=$_POST['yil'];


function kullanici($k)
{
	
include "../../kaynak/db.php";


	
	$query = $db->query("SELECT id,adsoyad FROM kullanici where id =$k", PDO::FETCH_ASSOC);
			if ( $query->rowCount() ){
     foreach( $query as $row ){
		  $adi= $row['adsoyad'];
		  
	 }}
	 echo $adi;
}

			$query = $db->query("SELECT * FROM egitim", PDO::FETCH_ASSOC);
			if ( $query->rowCount() ){
     foreach( $query as $row ){
		  $adi= $row['adi'];
		 $sure= $row['suresi'];
		 $birim= $row['sure_birim'];
		  
	 }}
			
			?>

<table width="720" height="102" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="23" colspan="3"><div align="center"><?PHP echo $yil ?>Eğitime Katılan Personelin Devam Durumu Raporu</div></td>
  </tr>
  <tr>
    <td height="23" colspan="3"><table width="700" border="1">
        <tr>
          <td>Eğitim Adı :	<?php echo $adi?> </td>
          <td>Süresi:	<?php echo $sure?></td>
        </tr>
    </table></td>
  </tr>
  <tr>
  <td>
  <table border="1">
  <tr>
    <td width="124" height="25">Personel Adı</td>
    <?php 
	for($i=0; $i < $sure; $i++)
	{
		?>
    <td width="482"><?php 
	echo $i+1 . $birim;
	 
	?></td>
    <?php 
	}
	?>
    
    <td width="106">Katılım Yüzdesi</td>
  </tr>
  <?php
  		$query = $db->query("SELECT * FROM egitimkatilan where egitimid =$i", PDO::FETCH_ASSOC);
			if ( $query->rowCount() ){
     foreach( $query as $row ){
	?>
  <tr>
    <td height="21"><?php echo kullanici($row['uyeid']);?></td>
  
    <?php
	$sy=0;
	for($i=0; $i < $sure; $i++)
	{
		?>
    <td><?php
	$d=substr($row['devam'], $i, 1);
	if($d==0)
	echo "-";
	elseif($d==1)
	{
		echo "+";
	$sy=$sy+1;
	}
	?></td>
    <?php }?>
    <td><?php
	$sonuc= 100/$sure*$sy;
	echo round($sonuc);
	
	 ?>
    </td>
		  
          </tr>
          <?php
	 }}
	
  ?>
    </table>
</td></tr>
</table>
