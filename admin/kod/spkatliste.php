
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
		          <td><strong>Başlık</strong>1</td>
		          <td><strong>Başlık 2</strong></td>
		          <td><strong> İşlem</strong></td>
	            </tr>
		        <?php
$query = $db->query("SELECT * FROM spkat", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $row ){
		  ?>
		        <tr>
		          <td><?php echo $row['id']?></td>
		          <td><?php echo $row['baslik1']?></td>
		          <td><?php echo $row['baslik2']?></td>
		          <td><a href="index.php?islem=spkatsil&id=<?php echo $row['id']?>">Sil</a></td>
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
