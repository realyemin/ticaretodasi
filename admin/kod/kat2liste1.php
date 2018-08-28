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
		<div class="box-header with-border"><h2><?php echo $diller['kategoriList']; ?></h2>
		</div>
		<!-- /.box-header -->
		<div class="box-body">
		    <table class="table table-bordered table-hover">
				<thead>
					<tr>					
						<th><?php echo $diller['kategoriAdi']; ?></th>
						<th><?php echo $diller['sira']; ?></th>
						<th><?php echo $diller['islem']; ?></th>
					</tr>
				</thead>
				<tbody>		        
					<?php
						$s=0;	
						
						if(isset($_GET["kat1"]))
						
						$kat1=$_GET["kat1"];
						elseif(isset($_POST["kate1"]))
						$kat1=$_POST["kate1"];
						
						$query = $db->query("SELECT * FROM kat2 where kat1=".$kat1." and dil=".$_SESSION['dil']." order by sira asc" , PDO::FETCH_ASSOC);
						if ( $query->rowCount() ){
							foreach( $query as $row ){
								$s=$s+1;
								
								$sql = $db->prepare('update kat2 set sira=? where id='.$row['id'] );
								$ekle = $sql->execute(array(
								$s,         
								));
							?>
							<tr>							
								<td><?php echo $row['kat2'];?></td>
								<td>
									<a href="index.php?islem=kat2yukari&id=<?php echo $row['id'];?>&deger=<?php echo $row['sira'];?>&kat1=<?php echo $kat1;?>" class="btn btn-block btn-success btn-xs"><i class="fa fa-sort-asc"></i> <?php echo $diller['yukariTasi']; ?></a>
									
									<a href="index.php?islem=kat2asagi&amp;id=<?php echo $row['id'];?>&amp;deger=<?php echo $row['sira'];?>&kat1=<?php echo $kat1;?>" class="btn btn-block btn-warning btn-xs"><i class="fa fa-sort-desc"></i> <?php echo $diller['asagiTasi']; ?></a>
								</td>
								<td>
									<a href="index.php?islem=kat2sil&kat1=<?php echo $kat1;?>&id=<?php echo $row['id'];?>" class="btn btn-block btn-danger btn-xs"><?php echo $diller['sil']; ?></a>									
									<a href="index.php?islem=icerikata&katno=2&kat1=<?php echo $kat1;?>&id=<?php echo $row['id'];?>" class="btn btn-block btn-primary btn-xs"><?php echo $diller['icerikAtama']; ?></a>									
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
		<!-- /.box-body -->
	</div>
</div>																				