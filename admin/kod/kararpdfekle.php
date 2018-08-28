<html>
<head>
<script src="ckeditor/ckeditor.js" type="text/javascript"></script>
</head>
<body>
<div class="box box-warning">
  <div class="box-header with-border">
    <h3 class="box-title">Karar ekleme</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <form role="form" action="index.php?islem=kararpdfkaydet" method="post" enctype="multipart/form-data">
    
      <div class="form-group">
        <table border="0" cellpadding="0" cellspacing="0" style="width: 800px;">
          <tbody>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>Kurul/Komisyon Adı </td>
              <td>&nbsp;</td>
              <td><label for="ad">
                <select  name="komisyonadi">
                  <?php
$query = $db->query("SELECT id, ad FROM komisyonlar", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $row ){
		 ?>
                  <option value="<?php echo $row['id']?>">
                    <?php
				 echo $row['ad']
					  ?>
                    </option>
                  <?php
	 }}
	 ?>
                </select>
              </label></td>
            </tr>
            <tr>
              <td>Karar  Tarihi</td>
              <td> :</td>
              <td><div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input name="karartarihi" id="tarih" type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                </div></td>
            </tr>
            <tr>
              <td>Karar Sayısı</td>
              <td>&nbsp;</td>
              <td><input class="form-control" type="text" name="kararsayisi" id="yer"></td>
            </tr>
            <tr>
              <td>Yıl</td>
              <td>&nbsp;</td>
              <td><input class="form-control" type="text" name="yil" id="yil"></td>
            </tr>
            <tr>
              <td>Pdf dosyası</td>
              <td>&nbsp;</td>
              <td><input type="file" name="dosya" id="dosya" /></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td><input height="30px" width="150px" name="ekle" type="submit" value="Ekle" /></td>
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