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
		<div class="box box-warning"><h2><?php echo $diller['akreStandart']; ?></h2>
			<div class="box-header with-border"></div>
			<!-- /.box-header -->
			<div class="box-body">
				<div align="left">
					<form action="index.php?islem=akrekaydet" method="post">
						<table class="table table-hover">
							<tbody>
								<tr>
									<td><table class="table table-hover" >
										<tbody>
											<tr>
												<td height="58"><?php echo $diller['kategoriAdi']; ?><br></td>		            
												<td><select class="form-control" name="kat1">
													<?php
														$query = $db->query("SELECT * FROM akkat1", PDO::FETCH_ASSOC);
														if ( $query->rowCount() ){
															foreach( $query as $row ){
															?>
															<option value="<?php echo $row['id']?>"><?php echo $row['ad']?></option>
															<?php
																
															}
														}
														
													?>
												</select>
												<br></td>
											</tr>
											<tr>
												<td width="66"><?php echo $diller['degerlendirmeDuzeyi']; ?></td>		           
												<td width="996"><textarea class="ckeditor" name="soru" cols="350" rows="20"></textarea></td>
											</tr>
											<tr>
												<td><?php echo $diller['gorusVeDusunceler']; ?></td>		          
												<td><textarea class="ckeditor" name="cevap" cols="350" rows="20"></textarea></td>
											</tr>
										</tbody>
									</table></td>
								</tr>
							</tbody>
						</table>
						<br/>
						
					<input class="btn btn-success form-control" type="submit" value="<?php echo $diller['ekle']; ?>" /></p>
				</form>
				
			</div>
		</div>
		<!-- /.box-body -->
	</div>
</body>
</html> 