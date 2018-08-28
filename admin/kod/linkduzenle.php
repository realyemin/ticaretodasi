<div class="box box-warning">
	<div class="box-header with-border"><h2><?php echo $diller['linkDuzenle']; ?></h2>
		
		</div>
	<!-- /.box-header -->
	<div class="box-body">
		<div align="center">	
			<?php
				
				$query = $db->query("SELECT * FROM link where id=". $_GET["id"], PDO::FETCH_ASSOC);
				if ( $query->rowCount() ){
					foreach( $query as $row1 ){
					?>
					<form action="index.php?islem=linkduzenlekaydet" method="post">
						<table class="table table-hover table-bordered">
							<tbody>
								<tr>
									<th><?php echo $diller['linkAdi']; ?></th>									
									<td>
										<input required class="form-control" value="<?php echo $row1['ad']?>"  name="ad" type="text" />
										<input type="hidden" name="id" value="<?php echo $_GET['id']?>" id="hiddenField" />
									</td>
								</tr>
								<tr>
									<th><?php echo $diller['deger1']; ?></th>									
									<td>
										<input class="form-control" value="<?php echo $row1['d1']?>"  name="d1" type="text" />
									</td>
								</tr>
								<tr>
									<th><?php echo $diller['deger2']; ?></th>							
									<td>
										<input class="form-control" value="<?php echo $row1['d2']?>"  name="d2" type="text" />
									</td>
								</tr>
								<tr>
									<th><?php echo $diller['yonlendirmeLinki']; ?></th>									
									<td><input class="form-control" value="<?php echo $row1['link']?>"  name="link" type="text" /></td>
								</tr>
								<tr>
									<td></td>
									<td>
										<input class="btn btn-info btn-block" name="ekle" type="submit" value="<?php echo $diller['guncelle'];?>" />
									</td>
								</tr>
							</tbody>
						</table>
					</form>
					<?php 
					}
				}
			?>		
		</div>
	</div>
	<!-- /.box-body -->
</div>