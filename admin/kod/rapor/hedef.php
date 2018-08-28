<?php
include "../../kaynak/db.php";
?>
			<?php


	
?>

<table width="1250"  border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="23">
          <table width="1229" border="0" align="left">
            <tr>
              <td width="224" rowspan="5"><img src="../../../img/Logo.png" width="94" height="87" /><img src="../../../img/tse_logo.png" width="116" height="86" /></td>
              <td width="563" height="21"><?php
$query = $db->query("SELECT * FROM dokuman where hedef=".$_GET["id"], PDO::FETCH_ASSOC);

if ( $query->rowCount() ){
     foreach( $query as $row ){
		 $id=$row['id']
		  ?></td>
              <td width="105">Döküman No</td>
              <td width="9">:</td>
              <td width="104"><?php echo $row['dokumanno']?></td>
              <td width="13" rowspan="5">&nbsp;</td>
              <td width="60">Birim  Adı </td>
              <td width="8">: </td>
              <td width="105"><?php echo $row['surecadi']?></td>
              </tr>
            <tr>
              <td rowspan="4"><font size="+3"><?php echo $row['baslik']?></font></td>
              <td height="34">Yayın Tarihi</td>
              <td>:</td>
              <td><?php echo $row['yayintarihi']?></td>
              <td width="60">Yıl</td>
              <td width="8">:</td>
              <td width="105"><?php echo $row['surecsahibi']?></td>
              </tr>
            <tr>
              <td height="24">Revizyon Tarihi</td>
              <td>:</td>
              <td><?php echo $row['revizyontarihi']?></td>
              <td width="60">&nbsp;</td>
              <td width="8">&nbsp;</td>
              <td width="105">&nbsp;</td>
              </tr>
            <tr>
              <td height="24">Revizyon No</td>
              <td>:</td>
              <td><?php echo $row['revizyonno']?></td>
              <td width="60">&nbsp;</td>
              <td width="8">&nbsp;</td>
              <td width="105">&nbsp;</td>
              </tr>
            <tr>
              <td height="24">Sayfa No </td>
              <td>:</td>
              <td><?php echo $row['sayfa']?></td>
              <td width="60">&nbsp;</td>
              <td width="8">&nbsp;</td>
              <td width="105">&nbsp;</td>
              </tr>
          </table>
          <p>
            <?php
		  
     }
}

	?>
          </p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <table width="1234" border="1" cellpadding="0" cellspacing="0">
            <tr>
              <td>HEDEF KONUSU</td>
              <td>PARAMETRE VE/VEYA KRİTERİN TANIMI </td>
              <td>ÖLÇME/İZLEME    YÖNTEMİ</td>
              <td>İZLEME  PERYODU</td>
              <td>KABUL KRİTERİ</td>
              <td>1.3 AYLIK    GERÇ.</td>
              <td>2.3 AYLIK    GERÇ.</td>
              <td>3.3 AYLIK    GERÇ.</td>
              <td>4.3 AYLIK    GERÇ.</td>
              <td>ORTALAMA / G.TOPLAM </td>
              <td>KARAR VARSA DF    NO</td>
              </tr>
            <?PHP
			  $query = $db->query("SELECT * FROM HEDEF where isoid=".$id, PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $row ){
		  ?>
            <tr>
              <td><?php echo $row['hedef']?></td>
              <td><?php echo $row['parametre']?></td>
              <td><?php echo $row['olcme']?></td>
              <td><?php echo $row['izleme']?></td>
              <td><?php echo $row['kabul']?></td>
              <td><?php echo $row['aylik1']?></td>
              <td><?php echo $row['aylik2']?></td>
              <td><?php echo $row['aylik3']?></td>
              <td><?php echo $row['aylik4']?></td>
              <td><?php echo $row['ortalama']?></td>
              <td><?php echo $row['karar']?></td>
              </tr>
            <?php }}
			  ?>
        </table>
          <p>&nbsp;</p>
       </td>
  </tr>
</table>
