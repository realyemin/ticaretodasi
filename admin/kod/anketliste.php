<?php
	/*
		-- =============================================
		-- Author		: EKOMURCU
		-- Create date	: 10.07.2018
		-- Description	: Güncelleme
		-- ============================================= 
	*/
?>
<div align="center">
	<div class="box">
		<div class="box-header">
		    <h3><?php echo $diller['anketList']; ?></h3>
			<p style="float:right">
				<a href="index.php?islem=anketekle" class="btn btn-success btn-md"><?php echo $diller['anketEkle']; ?></a>								
			</p>
		</div>
		<!-- /.box-header -->
		<div class="box-body">
		    <p>&nbsp;</p>
			
		    <table class="table table-bordered table-hover">
				<thead>
					<tr>
						<th><strong><?php echo $diller['anketSorusu']; ?></strong></th>
						<th><strong><?php echo $diller['islem']; ?></strong></th>
					</tr>
				</thead>
				<tbody>
					<?php
						$s=0;
						$query = $db->query("SELECT * FROM anket_sorular", PDO::FETCH_ASSOC);
						if ( $query->rowCount() ){
							foreach( $query as $row ){											
							?>
							<tr>		         
								<th><h4><?php echo $row['soru']?></h4></th>
								<td>		                   
									<a href="index.php?islem=anketsonuc&id=<?php echo $row['id']?>" class="btn btn-warning btn-md"><?php echo $diller['anketSonuc']; ?></a>								
									<?php if($row['onay']){ ?>										
									<a href="index.php?islem=anketyayindanal&id=<?php echo $row['id']?>"  class="btn btn-default btn-md"><?php echo $diller['anketYayindanAl']; ?></a>
									<?php }else{ ?> 
									<a href="index.php?islem=anketyayinla&id=<?php echo $row['id']?>"  class="btn btn-success btn-md"><?php echo $diller['anketYayin']; ?></a>
									<?php } ?>
									<a href="index.php?islem=anket&id=<?php echo $row['id']?>" class="btn btn-primary btn-md"><?php echo $diller['duzenle']; ?></a>
									<a href="index.php?islem=anketsil&id=<?php echo $row['id']?>"  class="btn btn-danger btn-md"><?php echo $diller['sil']; ?> </a>
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
																		