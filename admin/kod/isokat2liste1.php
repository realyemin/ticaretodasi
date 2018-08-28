
<div align="center">
  <div class="box">
    <div class="box-header">
		    <h3 class="box-title">Kategori Listesi</h3>
    </div>
		  <!-- /.box-header -->
		  <div class="box-body">
		    <table class="table table-bordered table-hover" border="0" cellpadding="0" cellspacing="0" style="width:750px;">
		      <tbody>
		        <tr>
		          <td> id</td>
		          <td> kategori adı</td>
		          <td> işlem</td>
	            </tr>
		        <?php
  
$query = $db->query("SELECT * FROM isokat2 where kat1=".$_POST["kate1"], PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $row ){
		  ?>
		        <tr>
		          <td><?php echo $row['id']?></td>
		          <td><?php echo $row['kat2']?></td>
		          <td><a href="index.php?islem=isokat2sil&id=<?php echo $row['id']?>">Sil</a></td>
	            </tr>
		        <?php
		  
		  
		  
     }
}

	?>
	          </tbody>
	        </table>
		  </div>
		  <!-- /.box-body -->
  </div>
</div>
