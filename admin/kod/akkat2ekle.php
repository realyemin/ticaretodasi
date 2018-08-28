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
			<h2><strong><span style="color: #ff0000"><?php echo $diller['anaKategoriAdi']; ?></span></strong></h2>
			<form action="index.php?islem=kat2kaydet" method="post">
				<table class="table table-hover">
					<tbody>
						<tr>
							<th><?php echo $diller['anaKategori']; ?></th>							
							<td>  								
								<select class="form-control" name="kat1" id="kat1"><?php
									$query = $db->query("SELECT * FROM akkat1", PDO::FETCH_ASSOC);
									if ( $query->rowCount() ){
										foreach( $query as $row ){
										?>
										<option value="<?php echo $row['id']?>"><?php echo $row['ad']?></option>
										<?php
										}}
								?>
								
								</select>
								
							</td>
						</tr>
						<tr>
							<th width="115"><?php echo $diller['kategoriAdi']; ?></th>							
							<td width="381">
							<input name="kat2" class="form-control"  type="text" /></td>
						</tr>
						<tr>
							<th><?php echo $diller['yonlendirmeLinki'];?></th>							
							<td><input name="link"class="form-control" type="text" /></td>
						</tr>
					</tbody>
				</table>
			<br/>
			
			<input class="btn btn-success form-control"  name="ekle" type="submit" value="<?php echo $diller['ekle'];?>" />
			</form>
			</div>	
			
			
			</body>
			</html> 									