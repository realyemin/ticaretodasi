
<div align="center">
  <div class="box">
    <div class="box-header">
		    <h3 class="box-title">&nbsp;</h3>
    </div>
		  <!-- /.box-header -->
		  <div class="box-body">
		    <table width="736" border="0" align="left">
		      
    
		        <tr>
		          <td width="146" height="21">&nbsp;</td>
		          <td width="376" rowspan="5"><?php
$query = $db->query("SELECT * FROM spust where id=1", PDO::FETCH_ASSOC);

if ( $query->rowCount() ){
     foreach( $query as $row ){
		 $id=$row['id']
		  ?> 
		            Başlık
	              &nbsp;:<?php echo $row['baslik']?><br />	              <br /></td>
		          <td width="200" rowspan="5"><table width="200" border="0">
		            <tr>
		              <td><form action="index.php?islem=spduzenle&amp;id=<?php echo $row['id']?>" method="post">
		                <button type="submit"  class="btn btn-block btn-primary btn-xs"> Döküman Başlık Düzenle </button>
		                </form></td>
	                </tr>
		            <tr>
		              <td><form action="index.php?islem=spdosyalink" method="post">
		                <button type="submit"  class="btn btn-block btn-primary btn-xs">Link Ekle </button>
		                </form></td>
	                </tr>
		            <tr>
		              <td>&nbsp;</td>
	                </tr>
		            <tr>
		              <td>&nbsp;</td>
	                </tr>
		            <tr>
		              <td><button type="button" class="btn btn-block btn-primary btn-xs" onclick="javascript:pen=window.open('kod/rapor/risk.php?id=<?php echo $row['id']?>','noLov22us','status=1,width=800,height=1300resizable=no,align=center,scrollbars=yes')">Yazdır</button></td>
	                </tr>
		            <tr>
		              <td>&nbsp;</td>
	                </tr>
	              </table></td>
	          </tr>
		        <tr>
		          <td height="34">&nbsp;</td>
	            </tr>
		        <tr>
		          <td height="24">&nbsp;</td>
	            </tr>
		        <tr>
		          <td height="24">&nbsp;</td>
	            </tr>
		        <tr>
		          <td height="24">&nbsp;</td>
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
            <table height="175" class="table table-bordered table-hover" border="0" cellpadding="0" cellspacing="0" style="width:750px;">
              <tbody>
                <tr>
                  <td width="41"><strong> No</strong></td>
                  <td width="196"><strong>Başlık </strong></td>
                  <td width="88">Link</td>
                  <td width="199">Açıklama</td>
                  <td width="226"><strong> İşlem</strong></td>
                </tr>
                <?php
$query = $db->query("SELECT * FROM spalt", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $row ){
		  ?>
                <tr>
                  <td><?php echo $row['id']?></td>
                  <td><?php echo $row['baslik']?></td>
                  <td><form action="../tcrt/<?php echo $row['link']?>" method="post"  target="_blank">
                    <button type="submit"  class="btn btn-block btn-primary btn-xs">Göster </button>
                  </form></td>
                  <td><?php echo $row['aciklama']?></td>
                  <td><form action="index.php?islem=isolinksil&amp;id=<?php echo $row['id']?>" method="post">
                  
                    <button type="submit"  class="btn btn-block btn-primary btn-xs">Sil </button>
                  </form></td>
                </tr>
                <?php
		  
		  
		  
     }
}

	?>
              </tbody>
            </table>
            <p>&nbsp;</p>
    </div>
		  <!-- /.box-body -->
  </div>
</div>
