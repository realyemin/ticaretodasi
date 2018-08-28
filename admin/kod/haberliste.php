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
		<div class="box-header with-border"><h2><?php echo $diller['haberList']; ?></h2>
			<a href="?islem=haberekle" class="btn btn-success"><?php echo $diller['haberEkle']; ?></a></div>
		<!-- /.box-header -->
		<div class="box-body">
			<table id="example2" class="table table-bordered table-hover">
				<thead>					
					<tr>
						<th width="86">
						<?php echo $diller['baslik']; ?></th>
						<th width="78">
						<?php echo $diller['ekleyen']; ?></th>
						<th width="72">
						<?php echo $diller['tarih']; ?></th>
						<th width="49" >
						<?php echo $diller['durum']; ?></th>
                        <th width="99" >
						<?php echo $diller['manset']; ?></th>
						<th><?php echo $diller['islem']; ?></th>
						<th></th><th></th>
					</tr>					
				</thead>
				<tbody class="text-center">					
					<?php
						$query = $db->query("SELECT * FROM haber where dil=".$_SESSION["dil"], PDO::FETCH_ASSOC);
						if ( $query->rowCount() ){
							foreach( $query as $row ){
								$ekleyen=$db->query("SELECT adsoyad FROM kullanici WHERE id='".$row['kadi']."'")->fetch();
							?>
							<tr>
								<td>
								<?php if($row['onay']){ ?>
								<a href="http://<?php echo $_SERVER['HTTP_HOST'];?>?hid=<?php echo base64_encode($row['id']); ?>" target="_blank" data-toggle="tooltip" title="Ön İzlemek için tıklayın"><?php echo $row['kisa']?></a>
								<?php }else{ ?>
								<span data-toggle="tooltip" title="Pasif haber"><?php echo $row['kisa']?></span>
								<?php } ?>
							</td>
								<td>
								<?php echo $ekleyen['adsoyad']; ?></td>
								<td>
								<?php echo $row['tarih']?></td>
								<td >
								<?php if($row['onay']){ ?> <div class="alert-success"><?php echo $diller['aktif']; ?></div><?php }else{ ?><div class="alert-warning"><?php echo $diller['pasif']; ?></div><?php } ?></td>
								<td>
								<?php if($row['manset']==0){ ?> <div class="alert-warning"><?php echo $diller['degil']; ?></div><?php }else if($row['manset']==1){ ?><div class="alert-success"><?php echo $diller['manset']; ?></div><?php }else{ ?><div class="alert-info"><?php echo $diller['onManset']; ?></div> <?php } ?></td>
							</td>
							<td width="93">
								<a href="index.php?islem=haberduzenle&id=<?php echo $row['id']?>" class="btn btn-block btn-primary btn-xs"><?php echo $diller['duzenle']; ?></a>
							</td>
							<td width="75" align="center">
								<a href="index.php?islem=habersil&id=<?php echo $row['id']?>" class="btn btn-block btn-danger btn-xs"> <?php echo $diller['sil']; ?></a>
							</td>
							<td width="70">
								<a href="index.php?islem=haberresim&id=<?php echo $row['id']?>" class="btn btn-block btn-success btn-xs"><?php echo $diller['resimYukle']; ?> </a>
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
