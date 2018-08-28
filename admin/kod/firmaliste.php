
<div align="center">
  <div class="box">
    <div class="box-header">
		    <h3 class="box-title">Firma Listesi</h3>
    </div>
		  <!-- /.box-header -->
		  <div class="box-body">
	<table width="363" border="0" cellpadding="0" class="table table-bordered table-hover" cellspacing="0">
			<tbody>
				<tr>
					<td width="39">
						id</td>
					<td width="86">
						Firma Adı </td>
					<td colspan="3">
					  İşlemler</td>
					</tr>
  
  
  
  <?php
$query = $db->query("SELECT * FROM firma", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $row ){
		  ?>
          <tr>
					<td>
						<?php echo $row['id']?></td>
					<td>
						<?php echo $row['ad']?></td>
					<td width="75" align="center"><form action="index.php?islem=firmasil&id=<?php echo $row['id']?>" method="post">
                          <button type="submit"  class="btn btn-block btn-primary btn-xs"> Sil</button>
                        </form></td>
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
