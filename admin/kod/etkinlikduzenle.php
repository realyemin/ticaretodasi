<?php
	/*
		-- =============================================
		-- Author		: EKOMURCU
		-- Create date	: 11.07.2018
		-- Description	: Güncelleme
		-- ============================================= 
	*/
?>
<html>
	<head>
		<script src="ckeditor/ckeditor.js" type="text/javascript"></script>
	</head>
	<body>
		<div class="box box-warning">
			<div class="box-header with-border"><h2><?php echo $diller['etkinlikGuncelle']; ?></h2></div>
			<div class="box-body">
				<div align="center">
					<?php					
						
						$query = $db->query("SELECT * FROM etkinlik where id=". $_GET["id"], PDO::FETCH_ASSOC);
						if ( $query->rowCount() ){
							foreach( $query as $row1 ){
								$tarih=$row1['etkinlik_tarih'];
								$tarih=date("d-m-Y",strtotime($tarih));// d:gün, m:ay, Y:yıl
								
							?>
							<form action="index<?php if($dil!=1) echo "2"; ?>.php?islem=etkinlikduzenlekaydet" method="post">
								<table class="table table-hover table-bordered">
									<tbody>
										<tr>
											<th><?php echo $diller['tarih']; ?></th>
											<td>
												<div class="input-group">
													<div class="input-group-addon">
														<i class="fa fa-calendar"></i>
													</div>
													<input 
													value="<?php echo $tarih; ?>" name="tarih" id="tarih" type="text" class="form-control" data-inputmask="'alias': 'dd.mm.yyyy'" data-mask>
													<input type="hidden" name="id" value="<?php echo $_GET['id']?>" id="hiddenField" />
												</div>
											</td>
										</tr>
										<tr>
											<th><?php echo $diller['baslik']; ?></th>
											
											<td><input value="<?php echo $row1['etkinlik_adi']?>" class="form-control"  name="baslik" width="300" type="text" /></td>
										</tr>
										<tr>
											<th><?php echo $diller['aciklama']; ?></th>
											
											<td><textarea class="ckeditor" name="detay" cols="150" rows="20"><?php echo $row1['etkinlik_aciklama']?></textarea></td>
										</tr>
										<tr>
											<th><?php echo $diller['linkEkle']; ?></th>
											
											<td><input value="<?php echo $row1['etkinlik_link'];?>" class="form-control" name="link" width="300" type="text" /></td>
										</tr>
										<tr>
											<th><?php echo $diller['durum']; ?></th>					
											<td>
												<select class="form-control"  name="onay" id="durum">
													<option value="1" <?php if($row1['etkinlik_onay']==1){ echo "selected"; } ?>><?php echo $diller['aktif']; ?></option>
													<option value="0" <?php if($row1['etkinlik_onay']==0){ echo "selected"; } ?>><?php echo $diller['pasif']; ?></option>
												</select></td>
										</tr>				
										<tr>
											<td>&nbsp;</td>								
											<td><input class="btn btn-info form-control" type="submit" name="a" id="a" value="<?php echo $diller['guncelle']; ?>"></td>
										</tr>
									</tbody>
								</table> <br/>
							</form>
							<?php 
							}
						}
					?>
					
				</div>
			</div>
			<!-- /.box-body -->
		</div>
	</body>
</html> 											