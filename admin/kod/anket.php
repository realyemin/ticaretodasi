<?php
	/*
		-- =============================================
		-- Author		: EKOMURCU
		-- Create date	: 10.07.2018
		-- Description	: Güncelleme
		-- ============================================= 
	*/
?>
<div>
	<div class="box">
		<div class="box-header">
		    <h2 class="text-center"><?php echo $diller['anketDetay']; ?></h2>
		</div>
		<!-- /.box-header -->
		<div class="box-body">
            <h3><strong><?php echo $diller['anketSorusu']; ?></strong>:<?php
				$id=$_GET["id"];				
				$query = $db->query("SELECT * FROM anket_sorular where id=".$id, PDO::FETCH_ASSOC);
				if ( $query->rowCount() ){
					foreach( $query as $row ){		
						echo $row['soru'];
					}
				}				
			?>
			</h3>
			<p style="float:right">
				<a href="index.php?islem=anketliste" class="btn btn-info btn-md"><?php echo $diller['anketList']; ?></a>			
				<a href="index.php?islem=anketsoruekle&id=<?php echo $row['id']?>" class="btn btn-success btn-md"><?php echo $diller['anketSorusuEkle']; ?></a>			
			</p>
			
		    <table class="table table-bordered" >
				<thead>
					<tr>
						<th><?php echo  $diller['secenekler']; ?></th>
						<th><?php echo  $diller['cevaplar']; ?></th>
					</tr>
				</thead>
				<tbody>
					<?php
						$query = $db->query("SELECT * FROM anket_sorular1 where anketid=".$id, PDO::FETCH_ASSOC);
						if ( $query->rowCount() ){
							foreach( $query as $row ){	?>
							<tr>
								<th><h4 ><?php echo $row['soru']?></h4>
									<a href="index.php?islem=anketsorusil&id=<?php echo $row['id']?>&anket=<?php echo $id?>" class="btn btn-danger btn-md"><?php echo  $diller['sil']; ?></a>																
								</th>
								<td>
									<table class="table table-hover" width="600">
										<?php
											
											$query = $db->query("SELECT * FROM anket_secenekler where anketid=".$id." and soruid=".$row['id'] , PDO::FETCH_ASSOC);
											if ( $query->rowCount() ){
												foreach( $query as $row1 ){
													
												?>
												<tr>
													<td width="544"><li><?php echo $row1['soru']?></li></td>
													<td>
														<p><a href="index.php?islem=anketcevapsil&amp;id=<?php echo $row1['id']?>&amp;anket=<?php echo $id?>"
															class="btn btn-block btn-danger btn-xs"> <?php echo  $diller['sil']; ?></a>
														</p>
													</td>
												</tr>
												<?php													
												}
											}											
											?>	<tr>
											<td width="200"><a href="index.php?islem=anketcevapekle&soruid=<?php echo $row['id']?>&anketid=<?php echo $id?>" class="btn btn-success btn-md"><?php echo  $diller['anketCevapEkle']; ?></a></td>
											<td></td>
										</tr>																			
									</table>
								<p>&nbsp;</p></td>
							</tr>
							<?php																					
							}
						}							
					?>
				</tbody>
			</table>	
		</div>
		<!-- /.box-body -->
	</div>
</div>
