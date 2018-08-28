
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
$query = $db->query("SELECT * FROM dokuman where hedef=".$_GET["id"], PDO::FETCH_ASSOC);

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
		          <td width="95">Birim  Adı </td>
		          <td width="10">:
		          <td width="100"><?php echo $row['surecadi']?>                                    
		          <td width="87">
                  <form action="index.php?islem=dokumanhedefduzenle&risk=<?php echo $_GET['id']?>&id=<?php echo $row['id']?>" method="post">
		            <button type="submit"  class="btn btn-block btn-primary btn-xs"> Döküman Başlık Düzenle </button>
		            </form>
                  
              </tr>
		        <tr>
		          <td height="34">&nbsp;</td>
		          <td rowspan="4"><font size="+3"><?php echo $row['baslik']?></font></td>
		          <td>Yayın Tarihi</td>
		          <td>:</td>
		          <td><?php echo $row['yayintarihi']?></td>
		          <td width="95">Yıl</td>
		          <td width="10">:</td>
		          <td width="100"><?php echo $row['surecsahibi']?></td>
		          <td width="87">
                  <form action="index.php?islem=hedefdurumekle&risk=<?php echo $_GET['id']?>&id=<?php echo $row['id']?>" method="post">
		            <button type="submit"  class="btn btn-block btn-primary btn-xs"> Hedef Ekle </button>
		            </form></td>
	            </tr>
		        <tr>
		          <td height="24">&nbsp;</td>
		          <td>Revizyon Tarihi</td>
		          <td>:</td>
		          <td><?php echo $row['revizyontarihi']?></td>
		          <td width="95">&nbsp;</td>
		          <td width="10">&nbsp;</td>
		          <td width="100">&nbsp;</td>
		          <td width="87"> <button type="button" class="btn btn-block btn-primary btn-xs" onClick="javascript:pen=window.open('kod/rapor/hedef.php?id=<?php echo $_GET["id"]?>','noLov22us','status=1,width=800,height=1300resizable=no,align=center,scrollbars=yes')">Yazdır</button></td>
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
if($say==0)  header ("Location:index.php?islem=dokumanhedefekle&id=".$_GET["id"]);
}
	?>
                 </p>
                 <p>&nbsp;</p>
                 <p>&nbsp;</p>
                 <p>&nbsp;</p>
                 <p>&nbsp;</p>
            <p>&nbsp;</p>
            <table width="1000" border="1" cellpadding="0" cellspacing="0" class="table table-bordered table-hover">
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
                <td>İşlem</td>
              </tr>
              <?PHP
             $query = $db->query("SELECT * FROM hedef where isoid=".$id, PDO::FETCH_ASSOC);
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
                <td><form action="index.php?islem=hedefdurumsil&risk=<?php echo $_GET['id']?>&id=<?php echo $row['id']?>" method="post">
                  <button type="submit"  class="btn btn-block btn-primary btn-xs"> Hedef Sil </button>
                </form>
                <p></p>
                <form action="index.php?islem=hedefgorev&risk=<?php echo $_GET['id']?>&id=<?php echo $row['id']?>" method="post">
                  <button type="submit"  class="btn btn-block btn-primary btn-xs"> Görevlendir </button>
                </form>
                </td>
              </tr>
              <?php }}
			  ?>
              
            </table>
            <p>&nbsp;</p>
    </div>
		  <!-- /.box-body -->
  </div>
</div>
