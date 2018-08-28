<?php
	/*
		-- =============================================
		-- Author		: EKOMURCU
		-- Create date	: 15.07.2018 15:20
		-- Description	: Sosyal Medya Linkleri için Ekleme kodu yazıldı
		-- ============================================= 
	*/
?>
<?php
	//ekle
	if(isset($_POST['ad']) && isset($_POST['aciklama']))
	{
		
				$sql = $db->prepare('INSERT INTO kategori (kategoriAd,aciklama) VALUES (:ad,:aciklama)');
				$sql->bindParam(':ad',$_POST['ad']);
				$sql->bindParam(':aciklama',$_POST['aciklama']);
				$sql->execute();
				if($sql)
				{
					echo $diller['basarili'];
				}
				else
				{
					
					echo $diller['basarisiz'];
				}
			
		
		
	}
	//sil
	if(isset($_POST['btnKategoriSil']) && isset($_POST['kategoriID']))
	{
		$sql = $db->prepare('DELETE FROM kategori WHERE (id=:kategoriID)');
		$sql->bindParam(':kategoriID',$_POST['kategoriID']);
		$sql->execute();
	
		
		if($sql)
		{
			echo $diller['basarili'];
		}else
		{
			echo $diller['basarisiz'];
		}
	}
	
?>	
<div class="box-body">
	<div class="box box-warning">
		<div class="box-header with-border"><h2><?php echo $diller['kategoriEkleme']; ?></h2>
		</div>
		<form method="post" >
			<table class="table table-bordered table-hover">
				<thead>
					<tr>
						<td><?php echo $diller['kategoriAdi']; ?></td>
						<td><input required type="text" name="ad" class="form-control" maxlength="30" placeholder="<?php echo $diller['kategoriAdi']; ?>"/></td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><?php echo $diller['aciklama']; ?></td>
						<td><input type="text" name="aciklama" class="form-control" maxlength="50" placeholder="<?php echo $diller['aciklama']; ?>"/></td>
					</tr>
			
					<tr>
						<td colspan="2"><input type="submit" class="btn btn-success form-control" value="<?php echo $diller['ekle']; ?>"/></td>					
					</tr>
				</tbody>
			</table>
		</form>
		<hr>
		<table class="table table-hover table-bordered">
			<thead>
				<tr>
					<th colspan="4"><?php echo $diller['kategoriList']; ?></th>
				</tr>
				<tr>
				<th><?php echo $diller['kategoriAdi'];?></th>
				<th><?php echo $diller['aciklama'];?></th>
				<th><?php echo $diller['islem'];?></th>
				</tr>
			</thead>
			<?php $query = $db->query("SELECT * FROM kategori", PDO::FETCH_ASSOC);
				if ( $query->rowCount() ){
					foreach( $query as $row ){
						
					?>
					<tr>
						<td><?php echo $row['kategoriAd']; ?></td>
						<td><?php echo $row['aciklama']; ?></td>					
						<td>
							<form method="post">
								<input type="hidden" name="kategoriID" value="<?php echo  $row['id']; ?>">					
								<button class="btn btn-danger" name="btnKategoriSil" type="submit" ><?php echo $diller['sil']; ?></button>							
							</form>
						</td>
					</tr>
				<?php }} ?>
		</table>
	</div>
</div>

