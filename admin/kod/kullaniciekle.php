<?php
	/*
		-- =============================================
		-- Author		: EKOMURCU
		-- Create date	: 11.07.2018
		-- Description	: Güncelleme
		-- ============================================= 
	*/
?>
<div class="box box-warning">
	<div class="box-header with-border">
		<div class="box-header with-border"><h2><?php echo $diller['kullaniciEkle']; ?></h2></div>
		<div class="box-body">
			<form role="form" action="index.php?islem=kullanicikaydet" method="post">
				<div class="form-group">
					<table class="table table-hover">
						<tbody>
							<tr>
								<td width="64"><?php echo $diller['adSoyad']; ?></td>
								<td width="25">:</td>
								<td width="437"><input required class="form-control"  name="adsoyad" width="300" type="text" /></td>
							</tr>
							<tr>
								<td> <?php echo $diller['mail']; ?> </td>
								<td>:</td>
								<td><input required class="form-control"  name="mail" width="300" type="email" /></td>
							</tr>
							<tr>
								<td><?php echo $diller['sifre']; ?></td>
								<td>:</td>
								<td><input required class="form-control"  name="sifre" width="300" type="text" /></td>
							</tr>
							<tr>
								<td><?php echo $diller['tc']; ?></td>
								<td>:</td>
								<td><input class="form-control"  name="tcno" width="300" type="text" /></td>
							</tr>
							<tr>
								<td><?php echo $diller['telefon']; ?></td>
								<td>:</td>
								<td><input class="form-control"  name="telefon" width="300" type="text" /></td>
							</tr>
							<tr>
								<td><?php echo $diller['adres']; ?></td>
								<td>:</td>
								<td><textarea class="form-control"  name="adres" cols="70" rows="5"></textarea></td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td>
									<input class="btn btn-success form-control" name="ekle" type="submit" value="<?php echo $diller['ekle']; ?>" />
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</form>
		</div>
	</div>		