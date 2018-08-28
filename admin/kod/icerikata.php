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
		    <div class="box-title"><h2><?php echo $diller['kategoriList']; ?></h2></div>
		</div>
		<div class="box-body">
			<table class="table table-bordered table-hover">
				<thead>
					<tr>
						<th>id</th>
						<th>
						<?php echo $diller['baslik']; ?>
						</th>
						<th colspan="3">
						<?php echo $diller['islem']; ?>
						</th>
					</tr>
				</thead>
				<tbody>					
					<?php
						$katid=$_GET["id"];
						$katno=$_GET["katno"];
						$query = $db->query("SELECT * FROM icerik where dil=" . $dil, PDO::FETCH_ASSOC);
						if ( $query->rowCount() ){
							foreach( $query as $row ){
							?>
							<tr>
								<td>
								#<?php echo $row['id']?></td>
								<td>
								<?php echo $row['aciklama']?></td>
					
								<td align="center"><form action="index.php?islem=icerikata1&<?php
									if(isset($_GET["kat2"]))
									echo "kat1=". $_GET["kat1"]."&kat2=". $_GET["kat2"]."&";
									elseif(isset($_GET["kat1"]))
									echo "kat1=". $_GET["kat1"]."&";
									
									?>katno=<?php echo $katno?>&katid=<?php echo $katid?>&id=<?php echo $row['id']?>" method="post">
									<button type="submit"  class="btn btn-block btn-primary btn-xs"> <?php echo $diller['sec']; ?></button>
								</form></td>								
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
