
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
		          <th width="151">Kurul/Komisyon Üyeleri </th>
		          <th width="59"><p>&nbsp;</p>
	              <p>İşlemler</p></th>


	            </tr>
                
  <?php
  
function kullanici($k)
{
	
include "kaynak/db.php";


	
	$query = $db->query("SELECT id,adsoyad FROM kullanici where id =$k", PDO::FETCH_ASSOC);
			if ( $query->rowCount() ){
     foreach( $query as $row ){
		  $adi= $row['adsoyad'];
		  
	 }}
	 echo $adi;
}
$query = $db->query("SELECT * FROM komisyonuye", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $row ){
		  ?>
          <tr>
					<td><?php echo $row['id']?></td>
					<td><?php echo kullanici($row['uyeid'])?></td>
					<td >
				  <form action="index.php?islem=komisyonuyesil&id=<?php echo $row['id']?>" method="post"> <button type="submit" class="btn btn-block btn-primary btn-xs">Sil</button></form>
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
