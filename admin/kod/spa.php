
<div align="center">
  <div class="box">
    <div class="box-header">
		    <h3 class="box-title">&nbsp;</h3>
    </div>
		  <!-- /.box-header -->
		  <div class="box-body">
		    <table width="981" border="0" align="left">
		      
    
		        <tr>
		          <td width="51" height="21">&nbsp;</td>
		          <td width="350" rowspan="2"><?php
$query = $db->query("SELECT * FROM spust where id=".$_GET["id"], PDO::FETCH_ASSOC);

if ( $query->rowCount() ){
     foreach( $query as $row ){
		 $id=$row['id']
		  ?> 
		            Başlık
	              &nbsp;:<?php echo $row['baslik']?><br />	              <br /></td>
		          <td width="23" rowspan="5">&nbsp;</td>
		          <td width="87">
                  <form action="index.php?islem=spustduzenle&id=<?php echo $row['id']?>" method="post">
		            <button type="submit"  class="btn btn-block btn-primary btn-xs"> Döküman Başlık Düzenle </button>
		            </form>
                  
              </tr>
		        <tr>
		          <td height="34">&nbsp;</td>
		          <td width="87">
                  <form action="index.php?islem=spaekle&id=<?php echo $row['id']?>" method="post">
		            <button type="submit"  class="btn btn-block btn-primary btn-xs"> Stratejik Uygulama Ekle </button>
		            </form></td>
	            </tr>
		        <tr>
		          <td height="24">&nbsp;</td>
		          <td>Rapor Dönemi : <?php echo $row['rapordonemi']?></td>
		          <td width="87"><form action="index.php?islem=spb&amp;risk=<?php echo $_GET['id']?>&amp;id=<?php echo $row['id']?>" method="post">
		            <button type="submit"  class="btn btn-block btn-primary btn-xs"> Gerçekleşen  Uygulamalar </button>
	              </form></td>
	            </tr>
		        <tr>
		          <td height="24">&nbsp;</td>
		          <td>&nbsp;</td>
		          <td width="87"><form action="index.php?islem=spplan&id=<?php echo $row['id']?>" method="post">
		            <button type="submit"  class="btn btn-block btn-primary btn-xs"> İş Planı</button>
	              </form></td>
	            </tr>
		        <tr>
		          <td height="24">&nbsp;</td>
		          <td>&nbsp;</td>
		          <td width="87"><button type="button" class="btn btn-block btn-primary btn-xs" onclick="javascript:pen=window.open('kod/rapor/spa.php?id=<?php echo $_GET['id']?>','noLov22us','status=1,width=800,height=1300,resizable=no,align=center,scrollbars=yes')">Yazdır</button></td>
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
            <p>
              
            </p>
            <table border="1" cellspacing="0" cellpadding="0">
              <col width="40" span="4" />
              <col width="340" />
              <col width="311" />
              <col width="291" />
              <col width="47" span="5" />
              <col width="251" />
          
              
            <?php
$query = $db->query("SELECT * FROM spkat", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $r ){
		  ?>
          
              <tr>
                <td colspan="4" width="160"><?php echo $r['baslik1']?></td>
                <td colspan="10" width="1428"><?php echo $r['baslik2']?></td>
              </tr>
              <tr>
                <td>Ana Tema No</td>
                <td align="right">Amaç No</td>
                <td align="right">Hedef No</td>
                <td align="right">Strateji    No</td>
                <td>Gerçekleştirilmesi    Planlanan (Uygulamalar)</td>
                <td width="311">Gerçekleşen    (Uygulamalar)</td>
                <td>Gösterge</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td width="251">Açıklama</td>
                <td width="251">&nbsp;</td>
              </tr>
              
            <?php
$query = $db->query("SELECT * FROM sp1a where spkat=". $r['id']."  and spustid=".$id, PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $row ){
		  ?>
          
              <tr>
                <td><?php echo $row['anatema']?></td>
                <td align="right"><?php echo $row['amac']?></td>
                <td align="right"><?php echo $row['hedef']?></td>
                <td align="right"><?php echo $row['strateji']?></td>
                <td><?php echo $row['planlanan']?></td>
                <td><?php echo $row['gerceklesen']?></td>
                <td><?php echo $row['gosterge']?></td>
                <td><?php if ($row['deger']==1)
				{echo "x";}?></td>
                <td><?php if ($row['deger']==2)
				{echo "x";}?></td>
                <td><?php if ($row['deger']==3)
				{echo "x";}?></td>
                <td><?php if ($row['deger']==4)
				{echo "x";}?></td>
                <td><?php if ($row['deger']==5)
				{echo "x";}?></td>
                <td><?php echo $row['gosterge']?></td>
                <td><form action="index.php?islem=spasil&sid=<?php echo $_GET["id"]?>&id=<?php echo $row['id']?>" method="post">
                  <button type="submit"  class="btn btn-block btn-primary btn-xs"> Sil</button>
                </form></td>

              </tr>

  <?php 
	 }}
	 }}
	 ?>
		  
          
            </table>
            <p>&nbsp;</p>
    </div>
		  <!-- /.box-body -->
  </div>
</div>
