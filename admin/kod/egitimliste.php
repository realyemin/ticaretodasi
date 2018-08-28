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
			<div class="box-header with-border"><h2><?php echo $diller['egitimList']; ?></h2></div>
			<div class="box-body">
				<table height="175" class="table table-bordered table-hover" id="example2">
					<thead>
						<tr>
							<th width="20"><?php echo $diller['no']; ?></th>
							<th width="59"><?php echo $diller['egitimAdi']; ?></th>
							<th width="59"><?php echo $diller['egitimTarihi']; ?></th>
							<th width="42"><?php echo $diller['suresi']; ?></th>
							<th width="67"><?php echo $diller['katilanlar']; ?></th>
							<th width="89"><?php echo $diller['gerceklesenTarih']; ?></th>
							<th width="63"><?php echo $diller['aciklama']; ?></th>
							<th ><?php echo $diller['islem']; ?></th>
						</tr>
					</thead>
					<tbody>
						<?php
							$query = $db->query("SELECT id, adi,egitim_tarihi,suresi,sure_birim,katilanlar,gerceklesen_tarih,aciklama FROM egitim", PDO::FETCH_ASSOC);
							if ( $query->rowCount() ){
								foreach( $query as $row ){
								?>
								<tr>
									<td>#<?php echo $row['id']?></td>
									<td><?php echo $row['adi']?></td>
									<td><?php echo $row['egitim_tarihi']?></td>
									<td><?php echo $row['suresi']?>-<?php echo $row['sure_birim']?></td>
									<td><?php echo $row['katilanlar']?></td>
									<td><?php echo $row['gerceklesen_tarih']?></td>
									<td><?php echo $row['aciklama'];?></td>
									<td><form action="index.php?islem=egitimsil&id=<?php echo $row['id']?>" method="post">
										<button type="submit"  class="btn btn-block btn-primary btn-xs"><?php echo $diller['sil']; ?></button>
									</form>
									<p>
										<form action="index.php?islem=egitimkatilanliste&id=<?php echo $row['id']?>" method="post">
											<button type="submit"  class="btn btn-block btn-primary btn-xs">Katılımcı Listesi</button>
										</form>
										<p>
											<form action="index.php?islem=egitimperdevam&id=<?php echo $row['id']?>" method="post">
												<button type="submit"  class="btn btn-block btn-primary btn-xs">Personel Devamsızlık Girişi</button>
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
				