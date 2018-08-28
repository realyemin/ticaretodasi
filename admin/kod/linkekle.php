<div class="box box-warning">
	<div class="box-header with-border"><h2><?php echo $diller['linkEkle']; ?></h2>
		<a href="?islem=linkliste" class="btn btn-info"><?php echo $diller['linkList']; ?></a>
	</div>
	<!-- /.box-header -->
	<div class="box-body">
		<div align="left">
			
			<form action="index.php?islem=linkkaydet" method="post">
				<table class="table table-hover table-bordered">
					<tbody>
						<tr>
							<th><?php echo $diller['kategoriAdi']; ?></th>								
							<td>
								<select class="form-control"  name="kat" id="manset">										
									<option value="1">Kategori1(Ürünler)</option>
									<option value="2">Kategori2(İç Bağlantılar)</option>
									<option value="3">Kategori3(Hizmetler)</option>
									<option value="4">Kategori4(Dış Bağlantılar)</option>										
								</select>
							</td>
						</tr>
						<tr>
							<th><?php echo $diller['linkAdi']; ?></th>									
							<td><input required class="form-control"  name="baslik" width="300" type="text" /></td>
						</tr>
						<tr>
							<th><?php echo $diller['deger1']; ?></th>								
							<td><input class="form-control"  name="d1" width="300" type="text" /></td>
						</tr>								
						<tr>
							<th><?php echo $diller['deger2']; ?></th>									
							<td><input class="form-control"  name="d2" width="300" type="text" /></td>
						</tr>
						<tr>
							<th><?php echo $diller['yonlendirmeLinki']; ?></th>									
							<td><input class="form-control"  name="link" width="300" type="text" /></td>
						</tr>						
						<tr>
							<td></td>
							<td>
								<input class="btn btn-success btn-block" name="ekle" type="submit" value="<?php echo $diller['ekle']; ?>" />
							</td>
						</tr>
					</tbody>
				</table>
			</form>				
		</div>
	</div>
	<!-- /.box-body -->
</div>
