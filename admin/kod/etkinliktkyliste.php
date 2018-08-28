<?php
	/*
		-- =============================================
		-- Author		: EKOMURCU
		-- Create date	: 12.07.2018 01:15
		-- Description	: Güncelleme
		-- ============================================= 
	*/
?>
<div align="center">
	<div class="box">
		<div class="box-header">
<div class="box-header with-border"><h2><?php echo $diller['tkyEtkinlikList']; ?></h2></div>
		<div class="box-body">
		    <table height="175" class="table table-bordered table-hover" id="example2">
				<thead>
					<tr>
						<th>#No</th>
						<th><?php echo $diller['etkinlik']; ?></th>
						<th><?php echo $diller['tarih']; ?></th>
						<th><?php echo $diller['etkinlikYeri']; ?></th>
						<th><?php echo $diller['gerceklestiren']; ?></th>
						<th><?php echo $diller['suresi']; ?></th>
						<th><?php echo $diller['turu']; ?></th>
						<th><?php echo $diller['katilanlar']; ?></th>
						<th><?php echo $diller['islem']; ?></th>
												
					</tr>
					</thead>
					<tbody>
					<?php
						$query = $db->query("SELECT * FROM etkinliktky", PDO::FETCH_ASSOC);
						if ( $query->rowCount() ){
							foreach( $query as $row ){
							?>
							<tr>
								<td>#<?php echo $row['id']?></td>
								<td><?php echo $row['adi']?></td>
								<td><?php echo $row['egitim_tarihi']?></td>
								<td><?php echo $row['yeri']?></td>
								<td><?php echo $row['gerceklestiren']?></td>
								<td><?php echo $row['suresi']?></td>
								<td><?php echo $row['tur']?></td>
							<td><?php echo $row['katilanlar']?></td>
							<td>
							<form action="index.php?islem=etkinliktkysil&id=<?php echo $row['id']?>" method="post">
							<button type="submit"  class="btn btn-block btn-danger btn-xs"><?php echo $diller['sil']; ?></button>
							</form>
							<p>
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
														