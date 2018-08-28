<?php
	/*
		-- =============================================
		-- Author		: EKOMURCU
		-- Create date	: 11.07.2018
		-- Description	: Güncelleme
		-- ============================================= 
	*/
?>
<div align="center">
	<div class="box">
		<div class="box-header">
		    <h2><?php echo $diller['dilListele']; ?>
				<a class="btn btn-success" href="?islem=dilEkle"><?php echo $diller['yeniDilEkle']; ?></a>
			</h2>
		</div>		
		<div class="box-body">
			<table id="tabloGenel" class="table table-bordered table-hover">
				<thead>					
					<tr>
						<th width="86"><?php echo $diller['siteAdi']; ?></th>						
						<th width="86"><?php echo $diller['dilKodu']; ?></th>						
						<th><?php echo $diller['islem']; ?></th>
						<th></th>
						<th></th>
					</tr>					
				</thead>
				<tbody>					
					<?php
						$query = $db->query("SELECT * FROM genel", PDO::FETCH_ASSOC);
						if ( $query->rowCount() ){
							foreach( $query as $row ){
							?>
							<tr>								
								
								<td width="93"><i class="fa fa-globe"></i> 
									<?php echo $row['siteadi']?>
								</td>	
								<td><i class="fa fa-flag"></i> 
								<?php echo $row['dil']?></td>
								<td width="93">
									<a href="index.php?islem=dilduzenle&id=<?php echo $row['id']?>" class="btn btn-block btn-primary btn-xs"><?php echo $diller['duzenle']; ?></a>
								</td>	
								<td width="93">
									<a href="index.php?islem=dilresimekle&id=<?php echo $row['id']?>" class="btn btn-block btn-warning btn-xs"><?php echo $diller['resimYukle']; ?></a>
								</td>
								<td width="75" align="center">
								<?php if($row['dil']!="tr"){ ?>
									<a href="index.php?islem=dilsil&id=<?php echo $row['id']?>" class="btn btn-block btn-danger btn-xs"> <?php echo $diller['sil']; ?></a>
								<?php } ?>
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
