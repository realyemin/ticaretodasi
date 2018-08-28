
<div align="center">
  <div class="box">
    <div class="box-header">
		    <h3 class="box-title"> TKY EKLEME</h3>
    </div>
		  <!-- /.box-header -->
		  <div class="box-body">
		    <form method="post" action="index.php?islem=isoekle1">
		      <select name="kate1">
		        <?php
$query = $db->query("SELECT * FROM isokat1", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $row ){
		  ?>
		        <option value="<?php echo $row['id']?>"><?php echo $row['kat1']?></option>
		        <?php
		  
     }
}

	?>
	          </select>
		      <input  type="submit" value="Seç">
	        </form>
		  </div>
		  <!-- /.box-body -->
  </div>
</div>
