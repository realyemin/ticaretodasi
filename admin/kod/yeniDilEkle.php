<?php
	/*
		-- =============================================
		-- Author		: EKOMURCU
		-- Create date	: 11.07.2018 18:00
		-- Description	: Yeni Dil Eklemek ve Dilpaketi yüklemek için yazıldı
		-- ============================================= 
	*/
?>
<?php
	//ekle
	if(isset($_POST['dilAdi']) && isset($_POST['dilKodu']) && isset($_FILES['dilDosyasi']))
	{
		$dosya=$_FILES['dilDosyasi']['tmp_name'];
		$yol="dilPaketi/".$_POST['dilKodu'].".php";
		if(!file_exists($yol))
		{
			if(move_uploaded_file($dosya,$yol))
			{
				$sql = $db->prepare('INSERT INTO diller (dilAdi,dilKodu) VALUES (:dilAdi,:dilKodu)');
				$sql->bindParam(':dilAdi',$_POST['dilAdi']);
				$sql->bindParam(':dilKodu',$_POST['dilKodu']);
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
		}
		
	}
	//sil
	if(isset($_POST['btnDilSil']) && isset($_POST['dilID']))
	{
		$sql = $db->prepare('DELETE FROM diller WHERE (id=:dilID)');
		$sql->bindParam(':dilID',$_POST['dilID']);
		$sql->execute();
		$yol="dilPaketi/".$_POST['dilKodu'].".php";
		
		if(@unlink($yol))
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
		<div class="box-header with-border"><h2><?php echo $diller['yeniDilEkle']; ?></h2>
		</div>
		<form method="post" enctype="multipart/form-data">
			<table class="table table-bordered table-hover">
				<thead>
					<tr>
						<td><?php echo $diller['yeniDilAdi']; ?></td>
						<td><input required type="text" name="dilAdi" class="form-control" maxlength="50" placeholder="<?php echo $diller['yeniDilAdi']; ?>"/></td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><?php echo $diller['yeniDilKodu']; ?></td>
						<td><input required type="text" name="dilKodu" class="form-control" maxlength="5" placeholder="<?php echo $diller['yeniDilKodu']; ?> örn:tr,en,fr,ru vs.."/></td>
					</tr>
					<tr>
						<td><?php echo $diller['yeniDilDosyasi']; ?> (Örn: dilKodu.php)</td>
						<td><input required type="file" name="dilDosyasi" class="form-control" /></td>
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
					<th colspan="3"><?php echo $diller['dilListele']; ?></th>
				</tr>
				<tr>
				<th><?php echo $diller['yeniDilAdi']; ?></th>
				<th><?php echo $diller['yeniDilKodu']; ?></th>
				<th><?php echo $diller['islem']; ?></th>
				</tr>
			</thead>
			<?php $query = $db->query("SELECT * FROM diller", PDO::FETCH_ASSOC);
				if ( $query->rowCount() ){
					foreach( $query as $row ){
						
					?>
					<tr>
						<td><?php echo $row['dilAdi']; ?></td>
						<td><?php echo $row['dilKodu']; ?></td>
						<td>
							<form method="post">
								<input type="hidden" name="dilID" value="<?php echo  $row['id']; ?>">
								<input type="hidden" name="dilKodu" value="<?php echo  $row['dilKodu']; ?>">
								<button class="btn btn-danger" name="btnDilSil" type="submit" ><?php echo $diller['sil']; ?></button>							
							</form>
						</td>
					</tr>
				<?php }} ?>
		</table>
	</div>
</div>

