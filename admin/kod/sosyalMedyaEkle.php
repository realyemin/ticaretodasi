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
	if(isset($_POST['ad']) && isset($_POST['link']) && isset($_POST['icon']))
	{
		
				$sql = $db->prepare('INSERT INTO sosyalmedya (ad,link,icon) VALUES (:ad,:link,:icon)');
				$sql->bindParam(':ad',$_POST['ad']);
				$sql->bindParam(':link',$_POST['link']);
				$sql->bindParam(':icon',$_POST['icon']);
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
	if(isset($_POST['btnSosyalSil']) && isset($_POST['sosyalID']))
	{
		$sql = $db->prepare('DELETE FROM sosyalmedya WHERE (id=:sosyalID)');
		$sql->bindParam(':sosyalID',$_POST['sosyalID']);
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
		<div class="box-header with-border"><h2><?php echo $diller['sosyalMedyaEkle']; ?></h2>
		</div>
		<form method="post" >
			<table class="table table-bordered table-hover">
				<thead>
					<tr>
						<td><?php echo $diller['sosyalMedyaAdi']; ?></td>
						<td><input required type="text" name="ad" class="form-control" maxlength="50" placeholder="<?php echo $diller['sosyalMedyaAdi']; ?>"/></td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><?php echo $diller['sosyalMedyaLink']; ?></td>
						<td><input required type="text" name="link" class="form-control" maxlength="500" placeholder="<?php echo $diller['sosyalMedyaLink']; ?>"/></td>
					</tr>
					<tr>
						<td><?php echo $diller['sosyalMedyaIkon']; ?></td>
						<td><input required type="text" name="icon" class="form-control"  maxlength="20" placeholder="(Örn: fa fa-facebook, fa icon veya glypicon)" /></td>
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
					<th colspan="4"><?php echo $diller['sosyalMedyaList']; ?></th>
				</tr>
				<tr>
				<th><?php echo $diller['sosyalMedyaAdi'];?></th>
				<th><?php echo $diller['sosyalMedyaLink'];?></th>
				<th><?php echo $diller['sosyalMedyaIkon'];?></th>
				<th><?php echo $diller['islem'];?></th>
				</tr>
			</thead>
			<?php $query = $db->query("SELECT * FROM sosyalMedya", PDO::FETCH_ASSOC);
				if ( $query->rowCount() ){
					foreach( $query as $row ){
						
					?>
					<tr>
						<td><?php echo $row['ad']; ?></td>
						<td><?php echo $row['link']; ?></td>
						<td><i class="<?php echo $row['icon']; ?>"></i></td>
						<td>
							<form method="post">
								<input type="hidden" name="sosyalID" value="<?php echo  $row['id']; ?>">					
								<button class="btn btn-danger" name="btnSosyalSil" type="submit" ><?php echo $diller['sil']; ?></button>							
							</form>
						</td>
					</tr>
				<?php }} ?>
		</table>
	</div>
</div>

