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
			<div class="box-header with-border"><h2><?php echo $diller['kullaniciList']; ?></h2></div>
			<div class="box-body">
				<table  class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>#id</th>
							<th><?php echo $diller['adSoyad']; ?></th>
							<th><?php echo $diller['mail']; ?></th>
							<th><?php echo $diller['sifre']; ?></th>
							<th><?php echo $diller['telefon']; ?></th>
							<th><?php echo $diller['islem']; ?></th>	
						</tr>
					</thead>
					<tbody>
						
						<?php
							$query = $db->query("SELECT * FROM kullanici", PDO::FETCH_ASSOC);
							if ( $query->rowCount() ){
								foreach( $query as $row ){
								?>
								<tr>
									<td>
									#<?php echo $row['id']?></td>
									<td>
									<?php echo $row['adsoyad']?></td>
									<td>
									<?php echo $row['email']?></td>
									<td><?php echo $row['sifre']?></td>
									<td><?php echo $row['telefon']?></td>									
									<td>
										<form action="index.php?islem=kullanicisil&amp;id=<?php echo $row['id']?>" method="post">
											<button type="submit"  class="btn btn-block btn-danger btn-xs"><?php echo $diller['sil']; ?></button>
										</form>
										<br>
										<form action="index.php?islem=kullaniciyetki&id=<?php echo $row['id']?>" method="post" >
											<button type="submit"  class="btn btn-block btn-info btn-xs"><?php echo $diller['yetkilendirme']; ?></button>
										</form>
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
