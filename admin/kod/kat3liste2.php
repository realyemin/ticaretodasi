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
		<div class="box-header with-border"><h2><?php echo $diller['altMenuList']; ?></h2>
		</div>
		<!-- /.box-header -->
		<div class="box-body">
		    <table width="350" border="0" cellpadding="0" cellspacing="0" class="table table-bordered table-hover">
				<thead>
					<tr>
						<th width="36" height="32"> id</th>
						<th width="145"><?php echo $diller['kategoriAdi']; ?></th>
						<th width="61"><?php echo $diller['sira']; ?></th>
						<th width="108"><?php echo $diller['islem']; ?></th>
					</tr>
				</thead>
				<tbody>
					
					<?php
						$s=0;	
						
						if(isset($_GET["kat1"]))
						{
							$kat1=$_GET["kat1"];
							$kat2=$_GET["kat2"];
						}
						if(isset($_POST["kat1"]))
						{
							$kat1=$_POST["kat1"];
							$kat2=$_POST["kat2"];
						}
						
						$query = $db->query("SELECT * FROM kat3 where kat1=".$kat1." and kat2= ".$kat2." and dil=".$dil." order by sira asc" , PDO::FETCH_ASSOC);
						if ( $query->rowCount() ){
							foreach( $query as $row ){
								$s=$s+1;
								
								$sql = $db->prepare('update kat3 set sira=? where id='.$row['id'] );
								$ekle = $sql->execute(array(
								$s,         
								));
								
								
							?>
							<tr>
								<td>#<?php echo $row['id']?></td>
								<td><?php echo $row['kat3']?></td>
								<td>
									<a href="index.php?islem=kat3yukari&id=<?php echo $row['id']?>&deger=<?php echo $row['sira']?>&kat1=<?php echo $kat1?>&kat2=<?php echo $kat2?>" class="btn btn-block btn-success btn-xs"><i class="fa fa-sort-asc"></i> <?php echo $diller['yukariTasi']; ?></a>
									<a href="index.php?islem=kat3asagi&amp;id=<?php echo $row['id']?>&amp;deger=<?php echo $row['sira']?>&amp;kat1=<?php echo $kat1?>&kat2=<?php echo $kat2?>" class="btn btn-block btn-warning btn-xs"><i class="fa fa-sort-desc"></i> <?php echo $diller['asagiTasi']; ?></a>
								</td>
								<td>
									<a href="index.php?islem=kat3sil&id=<?php echo $row['id']?>&kat1=<?php echo $kat1?>&kat2=<?php echo $kat2?>" class="btn btn-block btn-danger btn-xs"> <?php echo $diller['sil']; ?> </a>
									<a href="index.php?islem=icerikata&katno=3&id=<?php echo $row['id']?>&kat1=<?php echo $kat1?>&kat2=<?php echo $kat2?>" class="btn btn-block btn-primary btn-xs"> <?php echo $diller['icerikAtama']; ?> </a>								
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
