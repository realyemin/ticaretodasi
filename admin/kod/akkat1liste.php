<?php
	/*
		-- =============================================
		-- Author		: EKOMURCU
		-- Create date	: 10.07.2018
		-- Description	: Güncelleme
		-- ============================================= 
	*/
?>
<div align="center">
	<div class="box">
		<div class="box-header">
		    <h3 class="box-title"><?php echo $diller['akreKategoriList']; ?></h3>
		</div>
		<!-- /.box-header -->
		<div class="box-body">
			<table id="tabloGenel" class="table table-bordered table-hover">
				<thead>
					<tr>						
						<td width="86">
						<?php echo $diller['baslik']; ?></td>
						<td width="119">
						<?php echo $diller['detay'];?></td>
					</tr>
				</thead>
				<tbody>												
					<?php
						$query = $db->query("SELECT * FROM akkat1", PDO::FETCH_ASSOC);
						if ( $query->rowCount() ){
							foreach( $query as $row ){
							?>
							<tr>								
								<td>
								<?php echo $row['ad']?></td>
								<td>
								<a href="index.php?islem=akkat1sil&id=<?php echo $row['id']?>" class="btn btn-danger"><?php echo $diller['sil'];?></a></td>															
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
