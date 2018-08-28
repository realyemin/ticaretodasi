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
		    <h3 class="box-title"><?php echo $diller['akreDegerlendirmeList']; ?></h3>
		</div>
		<!-- /.box-header -->
		<div class="box-body">
		    <table id="tabloGenel" class="table table-bordered table-hover">
				<thead>
					<tr>		      
						<th><?php echo $diller['kategoriAdi']; ?></th>
						<th><?php echo $diller['soru']; ?></th>
						<th><?php echo $diller['cevap']; ?></th>
						<th><?php echo $diller['islem']; ?></th>
					</tr>
				</thead>
				<tbody>		        
					<?php
						$query = $db->query("SELECT * FROM akreditasyon order by id desc", PDO::FETCH_ASSOC);
						if ( $query->rowCount() ){
							foreach( $query as $row ){
							?>
							<tr>
								<td ><?php echo $row['kat1']?></td>
								<td ><?php echo substr($row['soru'],0,30)?></td>
								<td ><?php echo substr($row['cevap'],0,30)?></td>
								<td>
									
								<a href="index.php?islem=akrelinkekle&id=<?php echo $row['id']?>" 
								class="btn btn-success btn-xs"><?php echo $diller['linkEkle']; ?></a>
								
								<a href="index.php?islem=akreduzenle&id=<?php echo $row['id']?>"
								class="btn btn-warning btn-xs"><?php echo $diller['duzenle']; ?></a>
								
								<a href="index.php?islem=akrelinkler&id=<?php echo $row['id']?>" 
								class="btn btn-primary btn-xs"><?php echo $diller['linkler']; ?></a>
								<a href="index.php?islem=akresil&amp;id=<?php echo $row['id']?>" class="btn btn-danger btn-xs">
								<?php echo $diller['sil']; ?></a>
								</td>
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
																