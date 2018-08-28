<div class="box box-warning">
	<div class="box-header with-border"><h2><?php echo $diller['linkList']; ?></h2></div>
	<!-- /.box-header -->
	<form method="post" action="index.php?islem=linkliste1">
		<table class="table table-hover" >
			<tr>
				<td>						
					<select class="form-control" name="kat1" id="manset">								
						<option value="1">Kategori1(Ürünler)</option>
						<option value="2">Kategori2(İç Bağlantılar)</option>
						<option value="3">Kategori3(Hizmetler)</option>
						<option value="4">Kategori4(Dış Bağlantılar)</option>								
					</select>
				</td>
				<td>
					<input class="btn btn-info form-control" type="submit" value="<?php echo $diller['listele']; ?>" />						
				</td>
			</tr>
		</table>
	</form>
	<!-- /.box-body -->
</div>