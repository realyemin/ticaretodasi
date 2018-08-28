<?php
	/*
		-- =============================================
		-- Author		: EKOMURCU
		-- Create date	: 12.07.2018 01:15
		-- Description	: Güncelleme
		-- ============================================= 
	*/
?>
<script type="text/javascript">
	
	function popup(forum){
		window.open('', 'kod/rapor/egitimyil.php', 'width=1300,height=800,resizeable,scrollbars')
		forum.target='kod/rapor/egitimyil.php'
	}
	
</script>
<div>
	<div class="box">
		<div class="box-header">
			<div class="box-header with-border"><h2><?php echo $diller['tkyEtkinlikRapor']; ?></h2>
			</div>
			<div class="box-body">
				<form id="form2" name="form1" method="post"  onsubmit="popup(this)" action="kod/rapor/etkinliktky.php">
					<table class="table">
						<tr>
							<th><?php echo $diller['baslik']; ?></th>
							<td colspan="3"><input required class="form-control" type="text" name="baslik" id="yil3" /></td>
						</tr>
						<tr>
							<th><?php echo $diller['dokumanNo']; ?></th>
							<td colspan="3"><input type="text" class="form-control" name="dokumanno" id="yil4" /></td>
						</tr>
						<tr>
							<th><?php echo $diller['yayinTarihi']; ?></th>
							<td colspan="3"><input type="text" class="form-control" name="yayintarihi" id="yil5" /></td>
						</tr>
						<tr>
							<th><?php echo $diller['revizyonTarihi']; ?></th>
							<td colspan="3"><input type="text" class="form-control" name="revizyontarihi" id="yil6" /></td>
						</tr>
						<tr>
							<th><?php echo $diller['revizyonNo']; ?></th>
							<td colspan="3"><input type="text" class="form-control" name="revizyonno" id="yil7" /></td>
						</tr>
						<tr>
							<th><?php echo $diller['sayfa']; ?></th>
							<td colspan="3"><input type="text" class="form-control" name="sayfa" id="yil8" /></td>
						</tr>
						<tr>
							<th colspan="4"><?php echo $diller['aramaKriteri']; ?></th>
						</tr>
						<tr>
							<th><?php echo $diller['tarihAralik']; ?></th>
							<td>
								<input name="tarih1" class="form-control" id="tarih1" type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="data-mask">
							</td>
							<td>-</td>
							<td>
								<input name="tarih2" class="form-control" id="tarih2" type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="data-mask" />
							</td>
						</tr>
						<tr>
							<th><?php echo $diller['katilanlar']; ?></th>
							<td colspan="3">
								<input type="text" class="form-control" name="katilimci" id="yil2" />
							</td>
						</tr>
						<tr>
							<th><?php echo $diller['gerceklestiren']; ?></th>
							<td colspan="3">
								<input type="text" class="form-control" name="gerceklestiren" id="yil" />
							</td>
						</tr>
						<tr>
							<th><?php echo $diller['turu']; ?></th>
							<td colspan="3">
								<select class="form-control" name="tur" id="tur">
									<?php
										$query = $db->query("SELECT * FROM etkinliktkytur", PDO::FETCH_ASSOC);
										if ( $query->rowCount() ){
											foreach( $query as $row ){
											?>
											<option value="<?php echo $row['ad']?>"><?php echo $row['ad']?></option>
											<?php
											}}
									?>
								</select>
							</td>
						</tr>
						<tr>
							<td></td>
							<td colspan="3">
								<button type="submit" class="btn btn-block btn-primary" ><?php echo $diller['goster']; ?> </button>
							</td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</div>
