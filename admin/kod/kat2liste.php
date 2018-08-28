<?php
	/*
		-- =============================================
		-- Author		: EKOMURCU
		-- Create date	: 12.07.2018
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
			
			<div class="box-header with-border"><h2><?php echo $diller['ustMenuList']; ?></h2>
			</div>	
			<form method="post" action="index.php?islem=kat2liste1">
				<table class="table table-hover table-bordered">
					<tr>
						<td>
							<select class="form-control btn-warning"  name="kate1">
								<?php
									$query = $db->query("SELECT * FROM kat1 where dil=".$_SESSION['dil'], PDO::FETCH_ASSOC);
									if ( $query->rowCount() ){
										foreach( $query as $row ){
										?>
										<option value="<?php echo $row['id']?>"><?php echo $row['ad']?></option>
										<?php
											
										}
									}
									
								?>
							</select>
						</td>
					</tr>
					<tr>
						<td>
							<input class="btn btn-primary form-control"  type="submit" value="<?php echo $diller['listele']; ?>" />
							
						</td>
					</tr>
				</table>
			</form>
			<!-- /.box-body -->
		</div>
		<p class="alert alert-info"><em>Web sitenizde yer alan ana menü altındaki ilk başlıklarınız (alt menülerinizi) bu alandan listelenir.</em></p>
		<p><em>Ana Menü Adı - İlk Alt Menü Listesi</em></p>
	</body>
	</html> 			