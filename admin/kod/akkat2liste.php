<?php
	/*
		-- =============================================
		-- Author		: EKOMURCU
		-- Create date	: 10.07.2018
		-- Description	: Güncelleme
		-- ============================================= 
	*/
?>
<div align="center">
	<h2>
	<font color="#ff0000"><?php echo $diller['kategoriList']; ?></font></h2>
	
	<form method="post" action="index.php?islem=kat2liste1">
		<select class="form-control" name="kate1">  <?php
			$query = $db->query("SELECT * FROM akkat1", PDO::FETCH_ASSOC);
			if ( $query->rowCount() ){
				foreach( $query as $row ){
				?>
				<option value="<?php echo $row['id']?>"><?php echo $row['ad']?></option>
				<?php
					
				}
			}
		?></select>	
		<h2></h2>
        <input  type="submit" class="btn btn-primary form-control" value="<?php echo $diller['listele']; ?>">      		
	</form>
</div>