<html>
<head>
<script src="ckeditor/ckeditor.js" type="text/javascript"></script>
</head>
<body>
<div class="box box-warning">
  <div class="box-header with-border">Üst Kategori Ekleme
    <h3 class="box-title">&nbsp;</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body"><form action="index.php?islem=isokat2kaydet" method="post">
		<table border="0" cellpadding="0" cellspacing="0" style="width: 500px;">
			<tbody>
				<tr>
				  <td>Ana Kategori</td>
				  <td>&nbsp;</td>
				  <td>  
          &nbsp;
          <label for="select">:</label>
          <select name="kat1" id="kat1"><?php
$query = $db->query("SELECT * FROM isokat1", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $row ){
		  ?>
            <option value="<?php echo $row['id']?>"><?php echo $row['kat1']?></option>
            <?php
	 }}
	 ?>
     
          </select>
          
          </td>
			  </tr>
				<tr>
					<td width="115">Kategori Adı</td>
					<td width="10">
						:</td>
					<td width="381">
						<input name="kat2" width="300" type="text" /></td>
				</tr>
				<tr>
				  <td>&nbsp;</td>
				  <td>&nbsp;</td>
				  <td>&nbsp;</td>
			  </tr>
			</tbody>
		</table>
<br/>

			<input height="30px" width="150px" name="ekle" type="submit" value="Ekle" /></p>
  </form></div>
  <!-- /.box-body -->
</div>
</body>
            	</html> 