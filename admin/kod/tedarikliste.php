
<div align="center">
  <div class="box">
    <div class="box-header">
		    <h3 class="box-title">Tedarik Firma  Listesi</h3>
    </div>
		  <!-- /.box-header -->
		  <div class="box-body">
		    <table height="126" class="table table-bordered table-hover" id="example2">
		      <thead>
		        <tr>
		          <th width="20">No</th>
		          <th width="59">Firma Adı </th>
		          <th width="59">Ürün</th>
		          <th width="42">Tarih</th>
		          <th width="78">İşlem</th>
                  


	            </tr>
                
  <?php
  
function komisyon($k)
{
	
include "kaynak/db.php";


	
	$query = $db->query("SELECT id,ad FROM firma where id =$k", PDO::FETCH_ASSOC);
			if ( $query->rowCount() ){
     foreach( $query as $row ){
		  $adi= $row['ad'];
		  
	 }}
	 echo $adi;
}

$query = $db->query("SELECT * FROM tedarik", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $row ){
		  ?>
          <tr>
					<td><?php echo $row['id']?></td>
					<td><?php echo komisyon($row['firma_unvan'])?></td>
					<td><?php echo $row['urun']?></td>
					<td><?php echo $row['tarih']?></td>
					<td><form action="index.php?islem=tedariksil&id=<?php echo $row['id']?>" method="post"  target="_blank">
					  <button type="submit"  class="btn btn-block btn-primary btn-xs">Sil</button>
				    </form><p></p>
					  <form action="index.php?islem=tedarikekle&id=<?php echo $row['did']?>" method="post"  target="_blank">
					    <button type="submit"  class="btn btn-block btn-primary btn-xs">Detay</button>
			        </form></td>
                        

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
