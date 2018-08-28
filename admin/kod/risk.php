
<div align="center">
  <div class="box">
    <div class="box-header">
		    <h3 class="box-title">&nbsp;</h3>
    </div>
		  <!-- /.box-header -->
		  <div class="box-body">
		    <table width="924" border="0" align="left">
		      
    
		        <tr>
		          <td width="51">&nbsp;</td>
		          <td width="350" height="21"><?php
$query = $db->query("SELECT * FROM dokuman where risk=".$_GET["id"], PDO::FETCH_ASSOC);

if ( $query->rowCount() ){
     foreach( $query as $row ){
		 $id=$row['id']
		  ?> 
		            Başlık
	              &nbsp;: </td>
		          <td width="91">Döküman No</td>
		          <td width="8">:</td>
		          <td width="67"><?php echo $row['dokumanno']?></td>
		          <td width="23" rowspan="5">&nbsp;</td>
		          <td width="95">Sürecin Adı </td>
		          <td width="10">:
		          <td width="100"><?php echo $row['surecadi']?>                                    
		          <td width="87">
                  <form action="index.php?islem=dokumanduzenle&risk=<?php echo $_GET['id']?>&id=<?php echo $row['id']?>" method="post">
		            <button type="submit"  class="btn btn-block btn-primary btn-xs"> Döküman Başlık Düzenle </button>
		            </form>
                  
              </tr>
		        <tr>
		          <td height="34">&nbsp;</td>
		          <td rowspan="4"><font size="+3"><?php echo $row['baslik']?></font></td>
		          <td>Yayın Tarihi</td>
		          <td>:</td>
		          <td><?php echo $row['yayintarihi']?></td>
		          <td width="95">Sürecin Sahibi</td>
		          <td width="10">:</td>
		          <td width="100"><?php echo $row['surecsahibi']?></td>
		          <td width="87">
                  <form action="index.php?islem=riskdurumekle&risk=<?php echo $_GET['id']?>&id=<?php echo $row['id']?>" method="post">
		            <button type="submit"  class="btn btn-block btn-primary btn-xs"> Risk Durumu Ekle </button>
		            </form></td>
	            </tr>
		        <tr>
		          <td height="24">&nbsp;</td>
		          <td>Revizyon Tarihi</td>
		          <td>:</td>
		          <td><?php echo $row['revizyontarihi']?></td>
		          <td width="95">Sürecin Hedefi</td>
		          <td width="10">:</td>
		          <td width="100"><?php echo $row['surechedefi']?></td>
		          <td width="87"> <button type="button" class="btn btn-block btn-primary btn-xs" onClick="javascript:pen=window.open('kod/rapor/risk.php?id=<?php echo $_GET["id"]?>','noLov22us','status=1,width=1300,height=800resizable=no,align=center,scrollbars=yes')">Yazdır</button></td>
	            </tr>
		        <tr>
		          <td height="24">&nbsp;</td>
		          <td>Revizyon No</td>
		          <td>:</td>
		          <td><?php echo $row['revizyonno']?></td>
		          <td width="95">&nbsp;</td>
		          <td width="10">&nbsp;</td>
		          <td width="100">&nbsp;</td>
		          <td width="87">&nbsp;</td>
	            </tr>
		        <tr>
		          <td height="24">&nbsp;</td>
		          <td>Sayfa No </td>
		          <td>:</td>
		          <td><?php echo $row['sayfa']?></td>
		          <td width="95">&nbsp;</td>
		          <td width="10">&nbsp;</td>
		          <td width="100">&nbsp;</td>
		          <td width="87">&nbsp;</td>
	            </tr>
            </table>
                 <p>
                   <?php
		  
     }
}
else
{
	$say = $query->fetchColumn();
if($say==0)  header ("Location:index.php?islem=dokumanekle&id=".$_GET["id"]);
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
                <td width="71" rowspan="4" align="center"><strong>RİSKLER</strong></td>
                <td colspan="5" align="center"><strong>RİSK</strong></td>
                <td colspan="3" rowspan="2" align="center"><strong>MEVCUT ÖNLEM</strong></td>
                <td width="49" rowspan="4" align="center"><strong>RİSK<br>
                PUANI</strong></td>
                <td width="71" rowspan="4" align="center"><strong>RİSK SEVİYESİ</strong></td>
                <td colspan="2" rowspan="4" align="center"><strong>YAPILCAK FAALİYET 
                (ALINACAK ÖNLEM)</strong></td>
              </tr>
              <tr>
                <td colspan="2" align="center"><strong>OLASILIK</strong></td>
                <td colspan="3" align="center"><strong>ETKİSİ</strong></td>
              </tr>
              <tr>
                <td width="89" align="center"><strong>Gerçekleşme</strong></td>
                <td width="39" align="center"><strong>Sıklık</strong></td>
                <td width="50" align="center"><strong>Doğru  </strong></td>
                <td width="48" align="center"><strong>Dolaylı</strong></td>
                <td width="32" align="center"><strong>Etki    Yok</strong></td>
                <td width="45" align="center"><strong>Yeterli</strong></td>
                <td width="55" align="center"><strong>Kısmen    Yeterli</strong></td>
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
                <td width="53" align="center" valign="middle"><em><?php echo $row['surec']?></em></td>
                <td width="33" align="center" valign="middle"><em><?php echo $row['tanim']?></em></td>
                <td align="center" valign="middle"><em><?php echo $row['risk']?></em></td>
                <td align="center" valign="middle"><em><?php echo $row['olasilik1']?></em></td>
                <td align="center" valign="middle"><em><?php echo $row['olasilik2']?></em></td>
                <td colspan="3" align="center" valign="middle"><em><?php echo $row['etki']?></em></td>
                <td colspan="3" align="center" valign="middle"><em><?php echo $row['mevcut']?></em></td>
                <td align="center" valign="middle"><em><?php echo $row['riskpuan']?></em></td>
                <td align="center" valign="middle"><em><?php echo $row['riskseviye']?></em></td>
                <td width="76" valign="middle"><em> &nbsp; &nbsp; <?php echo $row['onlem']?></em></td>
                <td width="15" valign="middle"><form action="index.php?islem=riskdurumsil&amp;risk=<?php echo $_GET['id']?>&amp;id=<?php echo $row['id']?>" method="post">
                  <button type="submit"  class="btn btn-block btn-primary btn-xs"> Sil </button>
                </form></td>
              </tr>

  <?php 
	 }}
	 ?>
		  
            </table>
			  <p></br></p>
            <table width="100%" border="1" cellspacing="5" cellpadding="5">
	          <tbody>
		          <tr>
		            <td><u><strong><em>NOT : Risk hedeflerimizden    sapmalara sebep olabilecek belirsizliğin etkisidir.Riskler,ilgili birim hedefimizle ilgili belirsizlik oluşturmaktadır.Bu risklere yönelik    yapacağımız faaliyetler (önlemler) hedeflerimiz üzerindeki belirsizliğin    etkisini azaltması veya ortadan kaldırmasını sağlamalıdır.</em></strong></u></td>
	              </tr>
              </tbody>
	        </table>
	        <p></br></p>
    </div>
  </div>
</div>
 <table width="100%" border="1" cellspacing="5" cellpadding="5">
	          <tbody>
		          <tr>
		            <td><blockquote>		              
		              <h5><strong><img src="../../img/help.png" width="37" height="38" alt=""/></strong></h5>
		              <h5><strong>RİSK DEĞERLENDİRMESİ          R=OLASILIK  X H.ETKİ/MÖ                                  </strong>                                  <br>		              
	                    <strong>                                                                                                                                         </strong>                                     <br>		              
	                    <strong>OLASILIK                                      </strong>   <strong>GERÇEKLEŞME  X SIKLIK</strong>		              <strong>                                                        </strong>                                                                                                   <br>
	                  Risk daha önce gerçekleşmiş =3 puan , gerçekleşmemiş=  1 puan                                                  <br>
	                  Faaliyet Sıklığı : Günlük=5 puan,Haftalık=4  Puan,aylık=3 puan,altı aylık=2 , yılda bir=1 puan<br>
	                  <br>  
	                  <strong>ETKİ                                               </strong>                                                                                                                         <br>
	                  Hedefe Doğru Etki=5 puan,Dolaylı Etki=3 Puan,Etkisi  yok=1 Puan                                                 <br>
	                  <br>  
	                  <strong>RİSK SEVİYESİ                               </strong>                                                                                                                      <br>
	                  1-25 Puan Düşük Risk , 26-50 Puan=Orta Risk ,51-75  Puan=Yüksek Risk                                      <br>
	                  <br>  
	                  <strong>MEVCUT ÖNLEM                         </strong>                                                                                                                      <br>
	                  Mevcut Önlemin ,tehlikenin olsaılığının ve/veya  etkinin azaltılmasına yeterli = 3 puan         <br>
	                  Mevcut Önlemin ,tehlikenin olsaılığının ve/veya  etkinin azaltılmasına kısmen yeterli = 2 puan<br>
	                  Mevcut Önlemin ,tehlikenin olsaılığının ve/veya  etkinin azaltılmasına yeterli değilse = 1 puan		              </h5>
		            </blockquote>	                </td>
	              </tr>
              </tbody>
	        </table>
