<?php
	/*
		-- =============================================
		-- Author		: EKOMURCU
		-- Create date	: 10.07.2018
		-- Description	: Güncelleme
		-- ============================================= 
	*/
?>
<html>
	<head>
		<script src="ckeditor/ckeditor.js" type="text/javascript"></script>
	</head>
	<body>
		
		<div align="center">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title"><strong><?php echo $diller['akreStandart']; ?></strong></h3>
				</div>
				<div class="box-body"><form action="index.php?islem=akreduzenlekaydet&id=<?php echo $_GET["id"] ?>" method="post"> 
					<table class="table table-hover">
						<tbody>
							<tr>
								<td><?php echo $diller['degerlendirmeDuzeyi']; ?></td>					
								<td>
									<?php
										$query = $db->query("SELECT * FROM akreditasyon where id=". $_GET["id"], PDO::FETCH_ASSOC);
										if ( $query->rowCount() ){
											foreach( $query as $row ){
											?>
											<textarea required class="ckeditor" name="soru" cols="100" rows="20"><?php echo $row['soru']?></textarea>
										</td>
									</tr>
									<tr>
										<td><?php echo $diller['gorusVeDusunceler']; ?></td>
										
									<td><textarea class="ckeditor" name="cevap" cols="200" rows="20"><?php echo $row['cevap']?></textarea><?php }}?></td>
							</tr>
							<tr>
								<td>&nbsp;</td>
								<td><input class="btn btn-info form-control" name="ekle" type="submit" value="<?php echo $diller['guncelle']; ?>" /></td>
							</tr>
						</tbody>
					</table> </form>
				</div>
				<!-- /.box-body -->
			</div>
		</div>
		</body>
		</html>				