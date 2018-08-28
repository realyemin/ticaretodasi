
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
				  $id=$_GET["id"];
				  
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
                  <form action="index.php?islem=spbekle&id=<?php echo $row['id']?>" method="post">
		            <button type="submit"  class="btn btn-block btn-primary btn-xs">  Uygulama Ekle </button>
		            </form></td>
	            </tr>
		        <tr>
		          <td height="24">&nbsp;</td>
		          <td>Rapor Dönemi : <?php echo $row['rapordonemi']?></td>
		          <td width="87">&nbsp;</td>
	            </tr>
		        <tr>
		          <td height="24">&nbsp;</td>
		          <td>&nbsp;</td>
		          <td width="87">&nbsp;</td>
	            </tr>
		        <tr>
		          <td height="24">&nbsp;</td>
		          <td>&nbsp;</td>
		          <td width="87"><button type="button" class="btn btn-block btn-primary btn-xs" onclick="javascript:pen=window.open('kod/rapor/spb.php?id=<?php echo $_GET['id']?>','noLov22us','status=1,width=800,height=1300,resizable=no,align=center,scrollbars=yes')">Yazdır</button></td>
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
          
              
    
              <tr>
                <td width="500">Gerçekleşen    (Uygulamalar)</td>
                <td width="150" >Gösterge</td>
                <td width="30">1</td>
                <td width="30">2</td>
                <td width="30">3</td>
                <td width="30">4</td>
                <td width="30">5</td>
                <td>İşlemler</td>
              </tr>
              
            <?php
$query = $db->query("SELECT * FROM sp1b where spustid=".$id, PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $row ){
		  ?>
          
              <tr>
                <td><?php echo $row['gerceklesen']?></td>
                <td><?php echo $row['gosterge']?></td>
                <td width="22"><?php if ($row['deger']==1)
				{echo "x";}?></td>
                <td width="21"><?php if ($row['deger']==2)
				{echo "x";}?></td>
                <td  width="23"><?php if ($row['deger']==3)
				{echo "x";}?></td>
                <td width="22"><?php if ($row['deger']==4)
				{echo "x";}?></td>
                <td width="23"><?php if ($row['deger']==5)
				{echo "x";}?></td>
                <td width="84"><form action="index.php?islem=spbsil&id=<?php echo $row['id']?>&risk=<?php echo $id?>" method="post">
		            <button type="submit"  class="btn btn-block btn-primary btn-xs"> Sil </button>
		            </form>
                    <p></p>
                    <form action="index.php?islem=spbduzenle&id=<?php echo $row['id']?>&risk=<?php echo $id?>" method="post">
		            <button type="submit"  class="btn btn-block btn-primary btn-xs">Düzenle</button>
		            </form></td>
              </tr>

  <?php 
	 }}

	 ?>
		  
          
            </table>
            <p>&nbsp;</p>
    </div>
		  <!-- /.box-body -->
  </div>
</div>
