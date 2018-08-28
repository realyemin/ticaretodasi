 <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Hover Data Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                 <thead>
		        <tr>
		          <th width="22">id</th>
		          <th>Başlık</th>
		          <th width="81">Detay</th>
		          <th width="81">tarih</th>

		          <th>İşlemler</th>


	            </tr>
                	          </thead>
                <tbody>
				 <?php
$query = $db->query("SELECT * FROM duyuru order by tarih desc ", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $row ){
		  ?>
				 <tr>
                  <td><?php echo $row['id']?></td>
                  <td><?php echo substr($row['kisa'],0,50);?></td>
                  <td><?php echo $row['uzun']?></td>
                  <td> <?php echo $row['tarih']?></td>
                                  <td> <?php echo $row['tarih']?></td>

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
          <!-- /.box -->

         
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->