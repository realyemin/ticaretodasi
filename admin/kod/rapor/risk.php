<?php
include "../../kaynak/db.php";
?>
			<?php
            @$id=	$_GET['id'];


	
?>

<table width="1250" height="800" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="23"><div align="center">
      <div class="box"><!-- /.box-header -->
        <div class="box-body">
          <table width="1182" border="0" align="left">
            <tr>
              <td width="217" rowspan="5"><img src="../../../img/Logo.png" width="94" height="87" /><img src="../../../img/tse_logo.png" width="116" height="86" /></td>
              <td width="429" height="21"><?php
$query = $db->query("SELECT * FROM dokuman where risk=".$_GET["id"], PDO::FETCH_ASSOC);

if ( $query->rowCount() ){
     foreach( $query as $row ){
		 $id=$row['id']
		  ?></td>
              <td width="92">Döküman No</td>
              <td width="10">:</td>
              <td width="85"><?php echo $row['dokumanno']?></td>
              <td width="69" rowspan="5">&nbsp;</td>
              <td width="121">Sürecin Adı </td>
              <td width="9">: </td>
              <td width="112"><?php echo $row['surecadi']?></td>
              </tr>
            <tr>
              <td rowspan="4"><font size="+3"><?php echo $row['baslik']?></font></td>
              <td height="34">Yayın Tarihi</td>
              <td>:</td>
              <td><?php echo $row['yayintarihi']?></td>
              <td width="121">Sürecin Sahibi</td>
              <td width="9">:</td>
              <td width="112"><?php echo $row['surecsahibi']?></td>
              </tr>
            <tr>
              <td height="24">Revizyon Tarihi</td>
              <td>:</td>
              <td><?php echo $row['revizyontarihi']?></td>
              <td width="121">Sürecin Hedefi</td>
              <td width="9">:</td>
              <td width="112"><?php echo $row['surechedefi']?></td>
              </tr>
            <tr>
              <td height="24">Revizyon No</td>
              <td>:</td>
              <td><?php echo $row['revizyonno']?></td>
              <td width="121">&nbsp;</td>
              <td width="9">&nbsp;</td>
              <td width="112">&nbsp;</td>
              </tr>
            <tr>
              <td height="24">Sayfa No </td>
              <td>:</td>
              <td><?php echo $row['sayfa']?></td>
              <td width="121">&nbsp;</td>
              <td width="9">&nbsp;</td>
              <td width="112">&nbsp;</td>
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
          <p>&nbsp; </p>
          <table width="100%" border="1" cellspacing="0" cellpadding="0">
            <col width="66" />
            <col width="108" />
            <col width="130" />
            <col width="67" />
            <col width="60" />
            <col width="35" />
            <col width="38" />
            <col width="31" />
            <col width="41" span="2" />
            <col width="45" />
            <col width="41" />
            <col width="50" />
            <col width="50" />
            <col width="78" />
            <tr>
              <td colspan="2" rowspan="4" align="center"><strong>TANIMLAR</strong></td>
              <td width="95" rowspan="4" align="center"><strong>RİSKLER</strong></td>
              <td colspan="5" align="center"><strong>RİSK</strong></td>
              <td colspan="3" rowspan="2" align="center"><strong>MEVCUT ÖNLEM</strong></td>
              <td width="58" rowspan="4" align="center"><strong>RİSK<br />
                PUANI</strong></td>
              <td width="81" rowspan="4" align="center"><strong>RİSK SEVİYESİ</strong></td>
              <td width="572" rowspan="4" align="center"><strong>YAPILCAK FAALİYET 
                (ALINACAK ÖNLEM)</strong></td>
            </tr>
            <tr>
              <td colspan="2" align="center"><strong>OLASILIK</strong></td>
              <td colspan="3" align="center"><strong>ETKİSİ</strong></td>
            </tr>
            <tr>
              <td width="91" align="center"><strong>Gerçekleşme</strong></td>
              <td width="87" align="center"><strong>Sıklık</strong></td>
              <td width="50" align="center"><strong>Doğru  </strong></td>
              <td width="49" align="center"><strong>Dolaylı</strong></td>
              <td width="32" align="center"><strong>Etki    Yok</strong></td>
              <td width="45" align="center"><strong>Yeterli</strong></td>
              <td width="68" align="center"><strong>Kısmen    Yeterli</strong></td>
              <td width="54" align="center"><strong>Yetersiz</strong></td>
            </tr>
            <tr>
              <td align="center"><strong>( 3 - 1 )</strong></td>
              <td align="center"><strong>(5-4-3-2-1)</strong></td>
              <td align="center"><strong>(5)</strong></td>
              <td align="center"><strong>(3)</strong></td>
              <td align="center"><strong>(1)</strong></td>
              <td align="center"><strong>(3)</strong></td>
              <td align="center"><strong>(2)</strong></td>
              <td align="center"><strong>(1)</strong></td>
            </tr>
            <?php
			function f($k)
{
	
include "kaynak/db.php";


	
	$query = $db->query("SELECT id,ad FROM firma where id =$k", PDO::FETCH_ASSOC);
			if ( $query->rowCount() ){
     foreach( $query as $row ){
		  $adi= $row['ad'];
		  
	 }}
	 echo $adi;
}
$query = $db->query("SELECT * FROM risk where isoid=".$id, PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $row ){
		  ?>
            <tr>
              <td width="103" align="center" valign="middle"><em><?php echo $row['surec']?></em></td>
              <td width="66" align="center" valign="middle"><em><?php echo $row['tanim']?></em></td>
              <td align="center" valign="middle"><em><?php echo $row['risk']?></em></td>
              <td align="center" valign="middle"><em><?php echo $row['olasilik1']?></em></td>
              <td align="center" valign="middle"><em><?php echo $row['olasilik2']?></em></td>
              <td colspan="3" align="center" valign="middle"><em><?php echo $row['etki']?></em></td>
              <td colspan="3" align="center" valign="middle"><em><?php echo $row['mevcut']?></em></td>
              <td align="center" valign="middle"><em><?php echo $row['riskpuan']?></em></td>
              <td align="center" valign="middle"><em><?php echo $row['riskseviye']?></em></td>
              <td valign="middle"><em> &nbsp; &nbsp; <?php echo $row['onlem']?></em></td>
            </tr>
            <?php 
	 }}
	 ?>
          </table>
          <p></br>
          </p>
          <table width="100%" border="1" cellspacing="5" cellpadding="5">
            <tbody>
              <tr>
                <td><u><strong><em>NOT : Risk hedeflerimizden    sapmalara sebep olabilecek belirsizliğin etkisidir.Riskler,ilgili birim hedefimizle ilgili belirsizlik oluşturmaktadır.Bu risklere yönelik    yapacağımız faaliyetler (önlemler) hedeflerimiz üzerindeki belirsizliğin    etkisini azaltması veya ortadan kaldırmasını sağlamalıdır.</em></strong></u></td>
              </tr>
            </tbody>
          </table>
          <p></br>
          </p>
        </div>
      </div>
    </div></td>
  </tr>
</table>
