<?php
	/*
		-- =============================================
		-- Author		: EKOMURCU
		-- Create date	: 12.07.2018
		-- Description	: Güncelleme
		-- ============================================= 
	*/
?>
<div class="box box-warning">
	<div class="box-header with-border"><h2><?php echo $diller['ustMenu']; ?></h2>
	</div>
	<div class="box-body">
		<form action="index.php?islem=kat3liste2" method="post">
			<table class="table table-hover table-bordered">
				<tbody>
					<tr>
						<td width="115">
						<?php echo $diller['ustMenu']; ?></td>
						<td width="381">							
							<input name="kat1" type="hidden" value="<?php echo $_POST['kat1']?>">
							<select class="form-control" name="kat2" id="kat2">
								<?php
									$query = $db->query("SELECT * FROM kat2 where dil=".$dil. " and kat1=".$_POST['kat1'], PDO::FETCH_ASSOC);
									if ( $query->rowCount() ){
										foreach( $query as $row ){
										?>
										<option value="<?php echo $row['id']?>"><?php echo $row['kat2']?></option>
										<?php
										}}
								?>
							</select>
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input class="btn btn-success" name="ekle" type="submit" value="<?php echo $diller['listele']; ?>" />
						</td>
					</tr>
				</tbody>
			</table>
		</form>
	</div>
</div>
