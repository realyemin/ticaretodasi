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
		    <h3 class="box-title"><?php echo $diller['akreDegerlendirmeList']; ?></h3>
		    <form action="index.php?islem=akrelinkekle&amp;id=<?php
				@$id =	$_GET["id"];
				echo $id?>" method="post">
				<button type="submit"  class="btn btn-block btn-success btn-xs"><?php echo $diller['linkEkle']; ?></button>
			</form>
		</div>
		<!-- /.box-header -->
		<div class="box-body">
		    <table id="tabloGenel" class="table table-bordered table-hover">
				<thead>
					<tr>
						<td><?php echo $diller['baslik']; ?></td>
						<td><?php echo $diller['linkler']; ?></td>
						<td><?php echo $diller['pdfDosya']; ?></td>
						<td><?php echo $diller['aciklama']; ?></td>		
						<td><?php echo $diller['islem']; ?></td>
					</tr>
				</thead>
				<tbody>					
					<?php
						
						
						$query = $db->query("SELECT * FROM aklink where akid=".$id." order by id desc", PDO::FETCH_ASSOC);
						if ( $query->rowCount() ){
							foreach( $query as $row ){
							?>
							<tr>								
								<td><?php echo $row['baslik']?></td>
								<td><?php echo substr($row['link'],0,30)?></td>
								<td>
									<?php if(file_exists("../tcrt/akreditasyon/akreditasyon_".$row['id'].".pdf")) 
										{
											?><form action="../tcrt/akreditasyon/akreditasyon_<?php echo $row['id']?>.pdf" target="_blank">
											<button type="submit"  class="btn btn-block btn-primary btn-xs"><?php echo $diller['pdfAc']; ?></button>
										</form>
										<?php 
										}
										else
										echo "pdf eklenmedi"
									?>																	
								</td>
								<td><?php echo substr($row['aciklama'],0,30)?></td>
								<td><a href="index.php?islem=akrelinksil&akid=<?php echo $id?>&id=<?php echo $row['id']?>"
									  class="btn btn-block btn-danger btn-xs"> <?php echo $diller['sil']; ?> </a>
								</form>
								<a href="index.php?islem=akrelinkduzenle&amp;akid=<?php echo $id?>&amp;id=<?php echo $row['id']?>"
									class="btn btn-block btn-primary btn-xs"> <?php echo $diller['duzenle']; ?> </a>
								</form></td>
								
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
