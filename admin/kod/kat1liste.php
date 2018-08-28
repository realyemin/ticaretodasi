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
		<div class="box-header with-border"><h2><?php echo $diller['anaMenuList']; ?></h2>
		</div>		
		<div class="box-body">			
		    <table class="table table-bordered table-hover">
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
						$query = $db->query("SELECT * FROM kat1 where sira > 0 and dil=".$dil." order by sira asc", PDO::FETCH_ASSOC);
						if ( $query->rowCount() ){
							foreach( $query as $row ){
								
								$s=$s+1;
								
								$sql = $db->prepare('update kat1 set sira=? where id='.$row['id'] );
								$ekle = $sql->execute(array(
								$s,         
								));								
							?>
							<tr>
								<td>#<?php echo $row['id']?></td>
								<td><?php echo $row['ad']?></td>
								<td>
									<a href="index.php?islem=kat1yukari&id=<?php echo $row['id']?>&deger=<?php echo $row['sira']?>" class="btn btn-success btn-md"><i class="fa fa-sort-asc"></i> <?php echo $diller['yukariTasi']; ?></a>									
									<a href="index.php?islem=kat1asagi&id=<?php echo $row['id']?>&deger=<?php echo $row['sira']?>" class="btn btn-warning btn-md"><i class="fa fa-sort-desc"></i> <?php echo $diller['asagiTasi']; ?></a>							
								</td>
								<td>
									<a href="index.php?islem=kat1sil&id=<?php echo $row['id']?>" class="btn btn-block btn-danger btn-xs"> <?php echo $diller['sil']; ?> </a>																
									<a href="index.php?islem=icerikata&katno=1&id=<?php echo $row['id']?>" class="btn btn-block btn-primary btn-xs"> <?php echo $diller['icerikAtama']; ?> </a>
									
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
		