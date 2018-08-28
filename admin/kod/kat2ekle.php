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
	<div class="box-header with-border"><h2><?php echo $diller['ustMenuEkle']; ?></h2>
	</div>
	<!-- /.box-header -->
	<div class="box-body"><form action="index.php?islem=kat2kaydet" method="post">
		<table class="table table-bordered table-hover">
			<tbody>
				<tr>
					<td><?php echo $diller['anaMenu']; ?></td>							
					<td>  
						
						<select class="form-control btn-success" name="kat1" id="kat1">
							<?php
								$query = $db->query("SELECT * FROM kat1 where dil=" . $dil, PDO::FETCH_ASSOC);
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
					<td width="115"><?php echo $diller['kategoriAdi']; ?></td>					
					<td width="381">
					<input required class="form-control" name="kat2" width="300" type="text" /></td>
				</tr>
				<tr>
					<td><?php echo $diller['yonlendirmeLinki']; ?> </td>					
					<td><input class="form-control"  name="link" width="300" type="text" /></td>
				</tr>
			</tbody>
		</table>
		<br/>
		
	<input class="form-control btn btn-success"  name="ekle" type="submit" value="<?php echo $diller['ekle']; ?>" /></p>
	</form>
</div>				
</div>
<p class="alert alert-info"><em> Web sitenizde yer alan ana menü altındaki ilk başlıklarınızı bu alandan ekleyiniz.</em></p>
<p><em>Ana Menü Adı - İlk Alt menü</em></p>
