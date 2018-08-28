
<div align="center">
  <div class="box">
    <div class="box-header">
		    <h3 class="box-title">Etkinlik listesi</h3>
    </div>
		  <!-- /.box-header -->
		  <div class="box-body">
		    <table height="175" class="table table-bordered table-hover" id="example2">
		      <thead>
		        <tr>
		          <th width="20">No</th>
		          <th width="151">Eğitimin Adı</th>
		          <th width="80">Eğitimin Tarihi</th>
		          <th width="59">İşlemler</th>


	            </tr>
                
  <?php
$query = $db->query("SELECT id, adi,egitim_tarihi,suresi,sure_birim,katilanlar,gerceklesen_tarih,aciklama FROM egitim", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $row ){
		  ?>
          <tr>
					<td><?php echo $row['id']?></td>
					<td><?php echo $row['adi']?></td>
					<td><?php echo $row['egitim_tarihi']?></td>
					<td >
				    <button type="button" class="btn btn-block btn-primary btn-xs" onClick="javascript:pen=window.open('kod/rapor/egitimdevam.php?id=<?php echo $row['id']?>','noLov22us','status=1,width=800,height=1300resizable=no,align=center,scrollbars=yes')">Göster</button>
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
