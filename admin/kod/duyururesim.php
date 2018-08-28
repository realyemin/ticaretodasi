<?php
	/*
		-- =============================================
		-- Author		: EKOMURCU
		-- Create date	: 11.07.2018
		-- Description	: Yeniden Yazıldı
		-- ============================================= 
	*/
?>
<!-- Duruma göre ikisinden biri secilecek -->
<?php
	if(isset($_GET['islem']) && $_GET['islem']=="duyururesim")
	include("kaynak/plugins/resimKirp/index.php"); 
	else
	include("kaynak/plugins/mansetKirp/index.php");
?>	
<div align="center">
	<div class="box">
		<div class="box-header with-border"><h2><?php echo $diller['duyuruResim']; ?></h2>
		<a href="index.php?islem=duyuruliste" class="btn btn-success"><?php echo $diller['duyuruList']; ?></a></div>
		<div class="box-body table-responsive">				
			<table class="table table-bordered table-hover">
				<tbody>
					<tr>
						<?php
							$id = $_GET["id"];
							
							for($k=1; $k<16; $k++)
							{
								
								$resim="../tcrt/duyuru/duyuru".$id."_". $k.".jpg";
								
								
								if (file_exists($resim))
								{
								?>
								<td>
									<?php if($k==1) echo "Bu Resim Manşet Resmidir"; ?><img src="<?php echo $resim; ?>" class="img-thumbnail img-responsive" style="max-height:150px; max-width:200px;">
									<p></p>
									<a href="index.php?islem=duyururesimsil&id=<?php echo $id;?>&resimid=<?php echo $k;	?>" class="btn btn-danger btn-md"><?php echo $diller['sil']; ?></a>									
									<p>
										<?php
											list($width, $height, $type, $attr) = getimagesize($resim);
											echo "En:".$width."px<br>";
											echo "Boy:".$height."px";
										?>
									</p>
								</td>
								
								<?php 
								}
								else
								{
								?>    
								
								<td><?php if($k==1) echo "Bu Resim Manşet Resmidir"; ?>
									<form name="yukleme" method="post" action="index.php?islem=yukleduyuru&resimid=<?php echo $k; ?>&id=<?php echo $id;?>" enctype="multipart/form-data">
										<input required type="file" class="btn btn-warning" name="dosya" accept="image/*"><br>
										<input type="submit" class="btn btn-success" name="yukle" value="<?php echo $diller['resimYukle']; ?>">
									</form> </td>
									<?php
									}
									if($k%4==0)
									{
									?>
							</tr>
							<tr>								
								<?php
								}									
							}															
						?>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
