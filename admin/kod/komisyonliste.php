
<div align="center">
  <div class="box">
    <div class="box-header">
		    <h3 class="box-title">Kurul/Komisyon Listesi</h3>
    </div>
		  <!-- /.box-header -->
		  <div class="box-body">
		    <table height="175" class="table table-bordered table-hover" id="example2">
		      <thead>
		        <tr>
		          <th width="20">No</th>
		          <th width="151">Kurul/Komisyon  Adı</th>
		          <th width="80">Kurul/Komisyon Üyeleri </th>
		          <th width="59"><p>&nbsp;</p>
	              <p>İşlemler</p></th>


	            </tr>
                
  <?php
  
$query = $db->query("SELECT * FROM komisyonlar", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $row ){
		  ?>
          <tr>
					<td><?php echo $row['id']?></td>
					<td><?php echo $row['ad']?></td>
					<td><form action="index.php?islem=komisyonuyeliste&id=<?php echo $row['id']?>" method="post"> <button type="submit"  class="btn btn-block btn-primary btn-xs">Üye Listesi </button></form></td>
					<td >
				  <form action="index.php?islem=komisyonsil&id=<?php echo $row['id']?>" method="post"> <button type="submit" class="btn btn-block btn-primary btn-xs">Sil</button></form>
				    </td>
                </tr>
  
          
          
          
          <?php
		  
		  
		  
     }
}

	?>
	          </thead>
		      <tbody>
		       
	      
	        </table>
	      </div>
		  <!-- /.box-body -->
  </div>
</div>
