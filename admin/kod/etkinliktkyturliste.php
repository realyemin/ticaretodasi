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
			<div class="box-header with-border"><h2><?php echo $diller['etkinlikTurList']; ?></h2>
								<a class="btn btn-success" href="index.php?islem=etkinliktkyturekle" ><?php echo $diller['etkinlikTurEkle']; ?></a>
				</div>
			<div class="box-body">
				<table class="table table-bordered table-hover" style="width:750px;">
					<tbody>
						<tr>
							<td align="center"><strong><?php echo $diller['etkinlikTur']; ?></strong></td>
							<td><strong><?php echo $diller['islem']; ?></strong></td>
						</tr>
						<?php
							$s=0;														
							$query = $db->query("SELECT * FROM etkinliktkytur", PDO::FETCH_ASSOC);
							if ( $query->rowCount() ){
								foreach( $query as $row ){																
								?>
								<tr>
									<td align="center"><?php echo $row['ad']?></td>
									<td><form action="index.php?islem=etkinliktkytursil&id=<?php echo $row['id']?>" method="post">
										<button type="submit"  class="btn btn-block btn-danger btn-xs"> <?php echo $diller['sil']; ?> </button>
									</form>
									<p>                    
									</td>
									</tr>
									<?php																			
									}
								}
								$_SESSION["son"]=$s;								
							?>
						</tbody>
					</table>			
				</div>			
			</div>
		</div>
		