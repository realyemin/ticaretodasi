
<div align="center">
  <div class="box">
    <div class="box-header">
		    <h3 class="box-title">&nbsp;</h3>
    </div>
		  <!-- /.box-header -->
		  <div class="box-body">
		
		      <table width="858" border="0" align="left">
		        <tr>
		          <td width="54">&nbsp;</td>
		          <td width="367" height="21">
				    <?php
					$id=$_GET["id"];
					
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
$query = $db->query("SELECT * FROM tedarik where id=".$id, PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $row ){
		  ?> 
		  
		  
		  <?php
$query = $db->query("SELECT * FROM dokuman where id=".$row['did'], PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $row1 ){
		 
		  ?> 
		            Başlık
	              &nbsp;: </td>
		          <td width="94">Döküman No</td>
		          <td width="10">:</td>
		          <td width="101"><?php echo $row1['dokumanno']?></td>
		          <td width="101" rowspan="5">&nbsp;</td>
		          <td width="101" rowspan="5"><form action="index.php?islem=dokumanfirmaduzenle&firma=<?php echo $row['id']?>&id=<?php echo $row1['id']?>" method="post">
		            <button type="submit"  class="btn btn-block btn-primary btn-xs">Başlık Bilgilerini Düzenle </button>
	              </form>
                  <p></p>
                  <form action="index.php?islem=tedarikduzenle&firma=<?php echo $row['id']?>&id=<?php echo $row1['id']?>" method="post">
		            <button type="submit"  class="btn btn-block btn-primary btn-xs">Firma Bilgilerini Düzenle</button>
	              </form>&nbsp;
                                    <p></p>
                  <form action="../tcrt/" method="post"  target="_blank">
		            <button type="submit"  class="btn btn-block btn-primary btn-xs">Yazdır</button>
	              </form>&nbsp;</td></td>
	            </tr>
		        <tr>
		          <td height="34">&nbsp;</td>
		          <td rowspan="4"><font size="+3"><?php echo $row1['baslik']?></font></td>
		          <td>Yayın Tarihi</td>
		          <td>:</td>
		          <td><?php echo $row1['yayintarihi']?></td>
	            </tr>
		        <tr>
		          <td height="24">&nbsp;</td>
		          <td>Revizyon Tarihi</td>
		          <td>:</td>
		          <td><?php echo $row1['revizyontarihi']?></td>
	            </tr>
		        <tr>
		          <td height="24">&nbsp;</td>
		          <td>Revizyon No</td>
		          <td>:</td>
		          <td><?php echo $row1['revizyonno']?></td>
	            </tr>
		        <tr>
		          <td height="24">&nbsp;</td>
		          <td>Sayfa No </td>
		          <td>:</td>
		          <td><?php echo $row1['sayfa']?></td>
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
              <p>&nbsp; </p>
            <table width="600" border="1" cellspacing="0" cellpadding="0">
		        <col/>
		        <col />
		        <col />
		        <col />
		        <tr>
		          <td colspan="2">Firma    unvanı   :<?php echo f($row['firma_unvan'])?> </td>
		          <td colspan="2">Ürün :<?php echo $row['urun']?></td>
	            </tr>
		        <tr>
		          <td>KRİTER</td>
		          <td>DEĞERLENDİRMESİ</td>
		          <td>PUAN SKALASI</td>
		          <td>VERİLEN PUAN</td>
	            </tr>
		        <tr>
		          <td colspan="4">&nbsp;</td>
	            </tr>
		        <tr>
		          <td rowspan="3">Kabul    Durumu</td>
		          <td>Kabul</td>
		          <td>25</td>
		          <td rowspan="3"><?php echo $row['kabul_durumu']?></td>
	            </tr>
		        <tr>
		          <td>Kismen kabul</td>
		          <td>20</td>
	            </tr>
		        <tr>
		          <td>Red</td>
		          <td>0</td>
	            </tr>
		        <tr>
		          <td colspan="4">&nbsp;</td>
	            </tr>
		        <tr>
		          <td rowspan="4">Teslimat</td>
		          <td>Zamanında evele    teslim</td>
		          <td>25</td>
		          <td rowspan="4"><?php echo $row['teslimat']?></td>
	            </tr>
		        <tr>
		          <td>Zamanında teslim</td>
		          <td>20</td>
	            </tr>
		        <tr>
		          <td>1 - 5 gün geçikme</td>
		          <td>10</td>
	            </tr>
		        <tr>
		          <td>5 günden fazla geçikme</td>
		          <td>5</td>
	            </tr>
		        <tr>
		          <td colspan="4">&nbsp;</td>
	            </tr>
		        <tr>
		          <td rowspan="3">Fiyat</td>
		          <td>Ucuz</td>
		          <td>20</td>
		          <td rowspan="3"><?php echo $row['fiyat']?></td>
	            </tr>
		        <tr>
		          <td>Emsalleri ile aynı</td>
		          <td>10</td>
	            </tr>
		        <tr>
		          <td>Pahalı</td>
		          <td>5</td>
	            </tr>
		        <tr>
		          <td colspan="4">&nbsp;</td>
	            </tr>
		        <tr>
		          <td rowspan="3">Ödeme</td>
		          <td>15 - 30 Gün Vadeli</td>
		          <td>15</td>
		          <td rowspan="3"><?php echo $row['odeme']?></td>
	            </tr>
		        <tr>
		          <td>1- 15 Gün Vadeli</td>
		          <td>10</td>
	            </tr>
		        <tr>
		          <td>Ön Ödemeli</td>
		          <td>0</td>
	            </tr>
		        <tr>
		          <td colspan="4">&nbsp;</td>
	            </tr>
		        <tr>
		          <td rowspan="4">Belge</td>
		          <td>TSE Ürün Belgeli</td>
		          <td>10</td>
		          <td rowspan="4"><?php echo $row['belge']?></td>
	            </tr>
		        <tr>
		          <td>CE Belgeli</td>
		          <td>10</td>
	            </tr>
		        <tr>
		          <td>TS EN 9001 Belgesi</td>
		          <td>10</td>
	            </tr>
		        <tr>
		          <td>Belgesi yok</td>
		          <td>0</td>
	            </tr>
		        <tr>
		          <td colspan="4">&nbsp;</td>
	            </tr>
		        <tr>
		          <td rowspan="2">Diğer</td>
		          <td>Oda Üyesi</td>
		          <td>5</td>
		          <td rowspan="2"><?php echo $row['diger']?></td>
	            </tr>
		        <tr>
		          <td>Oda Üyesi değil</td>
		          <td>0</td>
	            </tr>
		        <tr>
		          <td colspan="4">&nbsp;</td>
	            </tr>
		        <tr>
		          <td>Toplam Puan</td>
		          <td colspan="2">&nbsp;</td>
		          <td><?php echo $row['toplam']?></td>
	            </tr>
		        <tr>
		          <td>&nbsp;</td>
		          <td></td>
		          <td></td>
		          <td>&nbsp;</td>
	            </tr>
		        <tr>
		          <td colspan="2">Talimat</td>
		          <td></td>
		          <td>&nbsp;</td>
	            </tr>
		        <tr>
		          <td>&nbsp;</td>
		          <td></td>
		          <td></td>
		          <td>&nbsp;</td>
	            </tr>
		        <tr>
		          <td>Puanlama (100 puan)</td>
		          <td colspan="3">Kabul    Durumu+Teslimat+Fiyat+Ödeme+Belge+Diğer</td>
	            </tr>
		        <tr>
		          <td colspan="4"> * Bin    (1.000 ₺) nin altında ve hizmet kalitemizi etkilemeyen ürün ve hizmet    alımlarda tedarikçi değerlendirmesi yapılmaz. (teklif usulu alımlar    yapılır)<br />
		            <br />
		            * Değerlendirme sonucunda 50 puanın altında olan firmalar Onaylı Tedarikçi    Listesinden çıkartılır.<br />
		            <br />
		            * İlk defa mal veya hizmet alınacak firmalar Tedarikçi Listesine dahi    edilir ve puanlaması yapıldıktan sonra yıl sonunda onaylşı tedarikçi    listesine alınır.<br />
		            * Yapılan alımlar muhasebe / satınalma tarafından değerlendirilerek    puanlaması yapılır ve tedarikçi listesine eklenir.                                                                                                                                                                                                                                                                                                                                             * Her yılın sonunda mal veya hizmet alınan firmalar  yukarıda belirtilen kriterler doğrultusunda    Genel Sekreter tarafından değerlendirilerek Onaylı Tedarikçi Listesinin    güncelliği sağlanır.<br /></td>
	            </tr>
	          </table>
              <?php 
	 }}
	 ?>
		      <p>

		      </p>
		      <p>&nbsp;</p>
		  </div>
		  <!-- /.box-body -->
  </div>
</div>
