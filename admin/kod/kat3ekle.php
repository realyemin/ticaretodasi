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
	<div class="box-header with-border"><h2><?php echo $diller['altMenuEkle']; ?></h2>
			</div>
	<div class="box-body"><form action="index.php?islem=kat3ekle1" method="post">
		<table class="table table-hover table-bordered">
			<tbody>
				<tr>
					<th><?php echo $diller['ustMenu']; ?></th>					
					<td>
					<select class="form-control btn-primary" name="kat1" id="kat1">
							<?php
								$query = $db->query("SELECT * FROM kat1 where dil=". $dil, PDO::FETCH_ASSOC);
								if ( $query->rowCount() ){
									foreach( $query as $row ){
									?>
									<option value="<?php echo $row['id']?>"><?php echo $row['ad']?></option>
									<?php
									}}
							?>
						</select></td>
				</tr>			
				<tr>				
					<td>&nbsp;</td>
					<td><input class="btn btn-info" name="ekle" type="submit" value="<?php echo $diller['devamEt']; ?>" /></td>
				</tr>
			</tbody>
		</table>
		<br/>
	</p>
	</form>
</div>

</div>
<p class="alert alert-info"><em>Web sitenizde yer alan ana menü altında yeralan ilk başlıklarınız altında yer alan ikinci alt menülerinizi bu alandan listelenir.</em></p>
<p><em>Ana Menü Adı - İlk Alt Menü Listesi - İkinci Alt Menü</em></p>