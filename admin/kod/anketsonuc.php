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
		    <h2><?php echo $diller['anketSonuc']; ?></h2>
		</div>
		<!-- /.box-header -->
		<div class="box-body">
		<h3><strong><?php echo $diller['anketSorusu']; ?></strong>
            <?php				  
				
				$id=$_GET["id"];				
				$query = $db->query("SELECT * FROM anket_sorular where id=".$_GET["id"], PDO::FETCH_ASSOC);
				if ( $query->rowCount() ){
					foreach( $query as $row ){
						echo $row['soru'];
					}
				}				
			?></h3>
            <p>&nbsp;</p>
			<?php			
				$query = $db->query("SELECT * FROM anket_sorular1 where anketid=".$id, PDO::FETCH_ASSOC);
				if ( $query->rowCount() ){
					foreach( $query as $row ){	?>
					<table height="96" class="table table-bordered table-hover" border="0" cellpadding="0" cellspacing="0" style="width:750px;">
						<tbody>
							<tr>
								<th colspan="3"><h4 class="alert-warning">	  
							<?php echo $row['soru'];
									$query = $db->query("SELECT count(*) as t FROM anketcevap where cevap!='null' and  anketid=".$id." and soruid=".$row['id'], PDO::FETCH_ASSOC);
									if ( $query->rowCount() ){
										foreach( $query as $row2 ){
											$toplam=$row2["t"];
											
										}}
										
								?> :</h4></th>
							</tr>
							
							<tr>
								<th height="32"><?php echo $diller['secenekler']; ?></th>
								<th><?php echo $diller['cevaplar']; ?></th>
								<td>%</td>
								</tr><?php
								
								$query = $db->query("SELECT cevap,count(*) as sayi FROM anketcevap where cevap!='null' and  anketid=".$id." and soruid=".$row['id']. " group by cevap", PDO::FETCH_ASSOC);
								if ( $query->rowCount() ){
									foreach( $query as $row1 ){										
									?>
									<tr>
										<td height="32"><li><?php 											
											$query = $db->query("SELECT * FROM anket_secenekler where anketid=".$id. " and soruid=".$row['id']." and id= " .$row1['cevap']  , PDO::FETCH_ASSOC);
											if ( $query->rowCount() ){
												foreach( $query as $row2 ){
													echo $row2['soru'];
												}}
												
										?></li></td>
										<td><?php echo $row1['sayi'];
										?></td>
										<td><?php echo  round(100/ $toplam * $row1['sayi']);
										?></td>
									</tr>
									<?php 
									}
								}
							?>
							
						</tbody>
					</table>
					<p>
						<?php 
						}
					}
				?>
			</div>
		</div>
	</div>
