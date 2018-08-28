<?php
	/*
		-- =============================================
		-- Author		: EKOMURCU
		-- Create date	: 12.07.2018
		-- Description	: Güncelleme
		-- ============================================= 
	*/
?>
<div align="center">
	<div class="box">
		<div class="box-header">
				<div class="box-header with-border"><h2><?php echo $diller['icerikList']; ?></h2>
			<a href="?islem=icerikekle" class="btn btn-success"><?php echo $diller['icerikEkle']; ?></a></div>
				<div class="box-body">
					<table class="table table-bordered table-hover">
						<thead>
							<tr>
								<th width="39">
								id</th>
								<th width="86">
								<?php echo $diller['icerik']; ?></th>
								<th colspan="3">
								<?php echo $diller['islem']; ?></th>
							</tr>
						</thead>
						<tbody>			      
							<?php
								$query = $db->query("SELECT * FROM icerik where dil=".$dil, PDO::FETCH_ASSOC);
								if ( $query->rowCount() ){
									foreach( $query as $row ){
									?>
									<tr>
										<td>
										#<?php echo $row['id']?></td>
										<td>
										<?php echo $row['aciklama']?></td>
										<td width="93">
											<a href="index<?php if($dil!=1) echo "2"; ?>.php?islem=icerikduzenle&id=<?php echo $row['id']?>" class="btn btn-block btn-primary btn-xs"><?php echo $diller['duzenle']; ?></a>
											
										</td>
										<td width="75" align="center">
											<a href="index<?php if($dil!=1) echo "2"; ?>.php?islem=iceriklink&id=<?php echo $row['id']?>" class="btn btn-block btn-success btn-xs"><?php echo $diller['linkEkle']; ?></a>	
										</td>
										<td width="70">
											
											<a href="index<?php if($dil!=1) echo "2"; ?>.php?islem=iceriksil&id=<?php echo $row['id']?>" class="btn btn-block btn-danger btn-xs"><?php echo $diller['sil']; ?></a>										
										</td>
									</tr>																		
									<?php
									}
								}								
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		