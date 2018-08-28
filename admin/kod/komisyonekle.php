<html>
<head>
<script src="ckeditor/ckeditor.js" type="text/javascript"></script>
</head>
<body>
<div class="box box-warning">
  <div class="box-header with-border">
    <h3 class="box-title">Kurul/Komisyon Ekleme</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <form role="form" action="index.php?islem=komisyonkaydet" method="post">
    
      <div class="form-group">
        <table border="0" cellpadding="0" cellspacing="0" style="width: 800px;">
          <tbody>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>Kurul/Komisyon  Adı</td>
              <td>&nbsp;</td>
              <td><label for="ad"></label>
              <input class="form-control" type="text" name="ad" id="ad"></td>
            </tr>
            <tr>
              <td>Kurul/Komisyon Üyeleri  (Ctrl Tuşu ile çoklu seçim Yapabilirsiniz)</td>
              <td>&nbsp;</td>
              <td><label for="liste"></label>
                <select name="liste[]" size="7" multiple="MULTIPLE" class="form-control" id="liste">
                 <?php
$query = $db->query("SELECT id, adsoyad FROM kullanici ", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $row ){
		 ?>
     
                  <option value="<?php echo $row['id']?>"><?php echo $row['adsoyad']?></option>
         <?php
	 }}
	 ?>
              </select></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td><input height="30px" width="150px" name="ekle" type="submit" value="Ekle" /></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
          </tbody>
        </table>
      </div>
</form>
  </div>
  <!-- /.box-body -->
</div>
</body>
            	</html> 