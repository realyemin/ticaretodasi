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
		<div class="box-header with-border"><h2><?php echo $diller['etkinlikList']; ?></h2>
			<a href="index.php?islem=etkinlikekle" class="btn btn-success"><?php echo $diller['etkinlikEkle']; ?></a>
			</div> 
		<div class="box-body">
		    <table id="example2" class="table table-bordered table-hover">
				<thead>
					<tr>						
						<th><?php echo $diller['baslik']; ?></th>
						<th><?php echo $diller['detay']; ?></th>
						<th><?php echo $diller['tarih']; ?></th>
						<th><?php echo $diller['aktif']; ?></th>
						<th><?php echo $diller['islem']; ?></th>
						<th><?php echo $diller['islem']; ?></th>
						<th><?php echo $diller['islem']; ?></th>
					</tr>
				</thead>
				<tbody>
					
					<?php
						$query = $db->query("SELECT * FROM etkinlik where dil=". $_SESSION["dil"] ." order by id desc", PDO::FETCH_ASSOC);
						if ( $query->rowCount() ){
							foreach( $query as $row ){
							?>
							<tr>				
								<td>
								<?php echo $row['etkinlik_adi']?></td>
								<td>
								<?php echo $row['etkinlik_aciklama']?></td>
								<td><?php echo turkcetarih("d F Y, l",$row['etkinlik_tarih']);?></td>
								<td align="center"><?php if($row['etkinlik_onay']){ ?> <div class="alert-success"><?php echo $diller['aktif']; ?></div><?php }else{ ?><div class="alert-warning"><?php echo $diller['pasif']; ?></div><?php } ?></td>
								<td width="93">
									<a href="index.php?islem=etkinlikduzenle&id=<?php echo $row['id']?>" class="btn btn-block btn-primary btn-xs"><?php echo $diller['duzenle']; ?></a>
								</td>
								<td width="75" align="center">
									<a href="index.php?islem=etkinlikresim&id=<?php echo $row['id']?>" class="btn btn-block btn-warning btn-xs"><?php echo $diller['resimYukle']; ?></a> 					
								</td>
								<td width="70">									
									<a href="index.php?islem=etkinliksil&id=<?php echo $row['id']?>" class="btn btn-block btn-danger btn-xs"> <?php echo $diller['sil']; ?></a>
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
