<?php
	/*
		-- =============================================
		-- Author		: EKOMURCU
		-- Create date	: 15.07.2018 15:20
		-- Description	: Siteiçi reklam Ekleme kodu yazıldı
		-- ============================================= 
	*/
?>
<?php
	//ekle
	$kalici_yol="../tcrt/reklam/";
	if(isset($_POST['ad']) && isset($_POST['link']) && isset($_POST['aciklama']) && isset($_FILES['resim']['name']))
	{
		
		$yol="../tcrt/reklam/".time().$_FILES['resim']['name'];
		$sql = $db->prepare('INSERT INTO reklam (ad,link,aciklama,resim,kategori) VALUES (:ad,:link,:aciklama,:resim,:kategori)');
		$sql->bindParam(':ad',$_POST['ad']);
		$sql->bindParam(':link',$_POST['link']);
		$sql->bindParam(':aciklama',$_POST['aciklama']);
		$sql->bindParam(':resim',$yol);
		$sql->bindParam(':kategori',$_POST['kategori']);
		$sql->execute();
		if($sql)
		{
			if(!file_exists($kalici_yol))
			{
				mkdir($kalici_yol,700,true);
			}
			@move_uploaded_file($_FILES['resim']['tmp_name'],$yol);
			echo $diller['basarili'];
		}
		else
		{
			
			echo $diller['basarisiz'];
		}
		
		
		
	}
	//sil
	if(isset($_POST['btnReklamSil']) && isset($_POST['reklamID']) && isset($_POST['resim']))
	{
		$sql = $db->prepare('DELETE FROM reklam WHERE (id=:reklamID)');
		$sql->bindParam(':reklamID',$_POST['reklamID']);
		$sql->execute();
		
		
		if($sql)
		{	
			@unlink($_POST['resim']);
			echo $diller['basarili'];
		}
		else
		{
			echo $diller['basarisiz'];
		}
	}
	
?>	
<div class="box-body">
	<div class="box box-warning">
		<div class="box-header with-border"><h2><?php echo $diller['reklamEkle']; ?></h2>
		</div>
		<form method="post" enctype="multipart/form-data" >
			<table class="table table-bordered table-hover">
				<thead>
					<tr>
						<td><?php echo $diller['reklamYerlesim']; ?></td>
						<td>
						<select name="kategori" class="form-control">
						<option value="1">Sol Üst Bar</option>
						<option value="2">Sol Alt Bar</option>
						<option value="3">Orta Alt Bar(Geniş)</option>
						</select>
						</td>
					</tr>
					<tr>
						<td><?php echo $diller['reklamAdi']; ?></td>
						<td><input required type="text" name="ad" class="form-control" maxlength="50" placeholder="<?php echo $diller['reklamAdi']; ?>"/></td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><?php echo $diller['reklamLink']; ?></td>
						<td><input required type="text" name="link" class="form-control" maxlength="500" placeholder="<?php echo $diller['reklamLink']; ?>"/></td>
					</tr>
					<tr>
						<td><?php echo $diller['aciklama']; ?></td>
						<td><input required type="text" name="aciklama" class="form-control"  maxlength="150" /></td>
					</tr>
					<tr>
						<td><?php echo $diller['resimYukle']; ?></td>
						<td><input required type="file" name="resim" class="form-control" accept="image/*" /></td>
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
					<th colspan="6"><h3><?php echo $diller['reklamList']; ?></h3></th>
				</tr>
				<tr>
				<th><?php echo $diller['reklamYerlesim'];?></th>
				<th><?php echo $diller['reklamAdi'];?></th>
				<th><?php echo $diller['reklamLink'];?></th>
				<th><?php echo $diller['aciklama'];?></th>
				<th><?php echo $diller['reklamResim'];?></th>
				<th><?php echo $diller['islem'];?></th>
				</tr>
				</thead>
				<?php $query = $db->query("SELECT * FROM reklam", PDO::FETCH_ASSOC);
				if ( $query->rowCount() ){
				foreach( $query as $row ){
				
				?>
				<tr>
				<td><?php if($row['kategori']==1){ echo "Sol Üst Bar"; }elseif($row['kategori']==2){echo "Sol Alt Bar";}elseif($row['kategori']==3){ echo "Orta Alt Bar(Geniş)";} ?></td>
				<td><?php echo $row['ad']; ?></td>
				<td><a href="<?php echo $row['link']; ?>" target="_blank"><?php echo $row['link']; ?></a></td>
				<td><?php echo $row['aciklama']; ?></td>
				<td><img src="<?php echo $row['resim']; ?>" style="max-width:200px"></td>
				<td>
				<form method="post">
				<input type="hidden" name="reklamID" value="<?php echo  $row['id']; ?>">					
				<input type="hidden" name="resim" value="<?php echo  $row['resim']; ?>">					
				<button class="btn btn-danger" name="btnReklamSil" type="submit" ><?php echo $diller['sil']; ?></button>							
				</form>
				</td>
				</tr>
				<?php }} ?>
				</table>
				</div>
				</div>
				
								