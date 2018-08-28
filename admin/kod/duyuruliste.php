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
		<div class="box-header with-border"><h2><?php echo $diller['duyuruList']; ?></h2>
			<a href="?islem=duyuruekle" class="btn btn-success"><?php echo $diller['duyuruEkle']; ?></a>
			</div>  
		<div class="box-body">
		    <table id="example2" class="table table-bordered table-hover">				
				<thead>
					<tr>
						<th><?php echo $diller['baslik']; ?></th>
						<th width="78"><?php echo $diller['ekleyen']; ?></th>						
						<th width="81"><?php echo $diller['tarih']; ?></th>		
						<th width="81"><?php echo $diller['durum']; ?></th>		
						<th width="81"><?php echo $diller['detay']; ?></th>
						<th width="50" ><?php echo $diller['islem']; ?></th>
						<th width="50"></th>
						<th width="50"></th>						
					</tr>
				</thead>
				<tbody class="text-center">
					
					<?php
						$query = $db->query("SELECT * FROM duyuru where dil=". $_SESSION["dil"] . " order by tarih desc ", PDO::FETCH_ASSOC);
						if ( $query->rowCount() ){
							foreach( $query as $row ){
								$ekleyen=$db->query("SELECT adsoyad FROM kullanici WHERE id='".$row['kadi']."'")->fetch();
							?>
							<tr>								
								<td width="174">
								<?php if($row['onay']){ ?>
								<a href="http://<?php echo $_SERVER['HTTP_HOST'];?>?did=<?php echo base64_encode($row['id']); ?>" target="_blank" data-toggle="tooltip" title="Ön İzlemek için tıklayın"><?php echo $row['kisa']?></a>
								<?php }else{ ?>
								<span data-toggle="tooltip" title="Pasif duyuru"><?php echo $row['kisa']?></span>
								<?php } ?></td>
								<td>
								<?php echo $ekleyen['adsoyad']; ?></td>
								<td>
								<?php echo $row['tarih']?></td>
								<td>
								<?php if($row['onay']){ ?> <div class="alert-success"><?php echo $diller['aktif']; ?></div><?php }else{ ?><div class="alert-warning"><?php echo $diller['pasif']; ?></div><?php } ?></td>
								<td>
								<?php echo substr($row['uzun'],0,250).".."; ?></td>
								
								<td width="50">
									<a href="index.php?islem=duyuruduzenle&id=<?php echo $row['id']?>" class="btn btn-block btn-primary btn-xs"><?php echo $diller['duzenle']; ?></a>
								</td>
								<td width="50" align="center">
									<a href="index.php?islem=duyurusil&id=<?php echo $row['id']?>" class="btn btn-block btn-danger btn-xs"> <?php echo $diller['sil']; ?></a>
								</td>
								<td width="50">
									<a href="index.php?islem=duyururesim&id=<?php echo $row['id']?>" class="btn btn-block btn-success btn-xs"> <?php echo $diller['resimYukle']; ?> </a>
								</td> 								
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
