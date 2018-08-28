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
		<div class="box-header with-border"><h2><?php echo $diller['sayfaAltMenuList']; ?></h2>
		</div>		
		<!-- /.box-header -->
		<div class="box-body">
		    <p>&nbsp;</p>
			
		    <table height="175" class="table table-bordered table-hover" border="0" cellpadding="0" cellspacing="0" style="width:750px;">
				<thead>
					<tr>
						<th><?php echo $diller['no']; ?></th>
						<th><?php echo $diller['anaMenu']; ?></th>
						<th><?php echo $diller['sira']; ?></th>
						<th><?php echo $diller['islem']; ?></th>
					</tr>
				</thead>
				<tbody>
					<?php
						$s=0;											
						$query = $db->query("SELECT * FROM kat1 where  dil=".$dil." and sira1 > 0 order by sira1 asc", PDO::FETCH_ASSOC);
						if ( $query->rowCount() ){
							foreach( $query as $row ){
								
								$s=$s+1;
								
								$sql = $db->prepare('update kat1 set sira1=? where  dil='.$dil.' and  id='.$row['id'] );
								$ekle = $sql->execute(array(
								$s,         
								));
								
							?>
							<tr>
								<td>#<?php echo $row['id']?></td>
								<td><?php echo $row['ad']?></td>
								<td>
									<a href="index.php?islem=kat1yukari&id=<?php echo $row['id']?>&deger=<?php echo $row['sira1']?>&alt=1" class="btn btn-block btn-success btn-xs"><i class="fa fa-sort-asc"></i> <?php echo $diller['yukariTasi']; ?></a>														
									<a href="index.php?islem=kat1asagi&id=<?php echo $row['id']?>&deger=<?php echo $row['sira1']?>&alt=1" class="btn btn-block btn-warning btn-xs"><i class="fa fa-sort-desc"></i> <?php echo $diller['yukariTasi']; ?></a>
								</td>
								<td>
									<a href="index.php?islem=kat1sil&alt=1&id=<?php echo $row['id']?>" class="btn btn-block btn-danger btn-xs"><?php echo $diller['sil']; ?></a>								
									<a href="index.php?islem=icerikata&katno=0&id=<?php echo $row['id']?>" class="btn btn-block btn-primary btn-xs"><?php echo $diller['icerikAtama']; ?></a>
							</td>
						</tr>
						<?php
							
							
						}
					}
					$_SESSION["son1"]=$s;
					
				?>
			</tbody>
		</table>				
	</div>
	<!-- /.box-body -->
</div>
</div>
