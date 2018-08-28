<html>
<head>
<script src="ckeditor/ckeditor.js" type="text/javascript"></script>
</head>
<body>
<div class="box box-warning">
  <div class="box-header with-border"></div>
  <!-- /.box-header -->
  <div class="box-body">
    <div align="center"><?php
$query = $db->query("SELECT * FROM spust where id=1", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $row ){
		  ?>
      <h2>&nbsp;</h2>
      <form action="index.php?islem=spduzenlekaydet" method="post">
        <table border="0" cellpadding="0" cellspacing="0" style="width: 900px;">
          <tbody>
            <tr>
              <td>Açıklama</td>
              <td>&nbsp;</td>
              <td><textarea class="ckeditor" name="baslik" cols="150" rows="20"><?php echo $row['baslik']?></textarea></td>
            </tr>
          </tbody>
        </table>
        <br/>
        <input height="30px" width="150px" name="ekle" type="submit" value="Ekle" />
        </p>
      </form>
      <?php 
	 }}
	 ?>
    </div>
  </div>
  <!-- /.box-body -->
</div>
</body>
            	</html> 