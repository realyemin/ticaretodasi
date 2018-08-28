<html>
<head>
<script src="ckeditor/ckeditor.js" type="text/javascript"></script>
</head>
<body>
<div class="box box-warning">
  <div class="box-header with-border">
    <p>Kategori Düzenle</p>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
  
  <?php
$query = $db->query("SELECT * FROM isokat1 where id=".$_GET["id"], PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $row ){
		  ?>
    <form action="index.php?islem=isokat1duzenlekaydet" method="post">
      <table width="642" border="0" cellpadding="0" cellspacing="0" >
        <tbody>
          <tr>
            <td width="242">Kategori Adı</td>
            <td width="10">:</td>
            <td width="396"><input name="kat1" value="<?php echo $row['kat1']?>" width="150" type="text" /></td>
          </tr>
        </tbody>
      </table>
      <p>
        <input height="30px" width="150px" name="ekle" type="submit" value="KAYDET" />
      </p>
    </p>
    <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>" id="hiddenField">
    </form>
   
   <?php 
	 }}
	 ?>
     
   </div>
  <!-- /.box-body -->
</div>
</body>
            	</html> 