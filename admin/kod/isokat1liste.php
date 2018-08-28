
<div align="center">
  <div class="box">
    <div class="box-header">
		    <h3 class="box-title">Ana Kategori Liste </h3>
    </div>
		  <!-- /.box-header -->
		  <div class="box-body">
		    <p>&nbsp;</p>
		
		    <table height="175" class="table table-bordered table-hover" border="0" cellpadding="0" cellspacing="0" style="width:750px;">
		      <tbody>
		        <tr>
		          <td><strong> No</strong></td>
		          <td><strong> Kategori Adı</strong></td>
		          <td><strong>İşlem</strong></td>
		          <td>&nbsp;</td>
	            </tr>
		        <?php
$query = $db->query("SELECT * FROM isokat1", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $row ){
		  ?>
		        <tr>
		          <td><?php echo $row['id']?></td>
		          <td><?php echo $row['kat1']?></td>
		          <td><form action="index.php?islem=isokat1duzenle&id=<?php echo $row['id']?>" method="post">
		            <button type="submit"  class="btn btn-block btn-primary btn-xs"> Düzenle </button>
	              </form></td>
		          <td><form action="index.php?islem=isokat1sil&id=<?php echo $row['id']?>" method="post">
		            <button type="submit"  class="btn btn-block btn-primary btn-xs"> Sil </button>
	              </form>		            <a href=""></a></td>
	            </tr>
		        <?php
		  
		  
		  
     }
}

	?>
	          </tbody>
	        </table>
		    <p>&nbsp;</p>
		    <p>&nbsp;</p>
		  </div>
		  <!-- /.box-body -->
  </div>
</div>
