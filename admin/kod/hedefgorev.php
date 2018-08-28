<html>
<head>
<script src="ckeditor/ckeditor.js" type="text/javascript"></script>
</head>
<body>
<div class="box box-warning">
  <div class="box-header with-border">Kullanıcı Seçme </div>
  <!-- /.box-header -->
  <div class="box-body">
    <form action="index.php?islem=hedefgorevkaydet" method="post">
      <table width="642" border="0" cellpadding="0" cellspacing="0" >
        <tbody>
          <tr>
            <td width="242">Kullanıcı Seç </td>
            <td width="10">:</td>
            <td width="396"><select name="kat1" id="kat1">
              <?php
$query = $db->query("SELECT * FROM kullanici", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $row ){
		  ?>
              <option value="<?php echo $row['id']?>"><?php echo $row['adsoyad']?></option>
              <?php
	 }}
	 ?>
            </select></td>
          </tr>
        </tbody>
      </table>
      <p>
        <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>" id="hiddenField">
      </p>
      <p>
        <input type="hidden" name="risk" value="<?php echo $_GET["risk"]; ?>" id="hiddenField2">
        <br/>
        <input height="30px" width="150px" name="ekle" type="submit" value="Görevlendir" />
      </p>
      </p>
    </form>
   
   </div>
  <!-- /.box-body -->
</div>
</body>
            	</html> 