<html>
<head>
<script src="ckeditor/ckeditor.js" type="text/javascript"></script>
</head>
<body>
<div class="box box-warning">
  <div class="box-header with-border">Döküman Ekleme</div>
  <!-- /.box-header -->
  <div class="box-body">
    <form action="index.php?islem=dokumanhedefkaydet" method="post">
      <table border="0" cellpadding="0" cellspacing="0" style="width: 500px;">
        <tbody>
          <tr>
            <td>Başlık </td>
            <td>&nbsp;</td>
            <td><input name="baslik" width="300" type="text" /></td>
          </tr>
          <tr>
            <td width="115">Döküman No </td>
            <td width="10"> :</td>
            <td width="381"><input name="dokumanno" width="50" type="text" /></td>
          </tr>
          <tr>
            <td>Yayın Tarihi</td>
            <td>&nbsp;</td>
            <td><input name="yayintarihi" width="100" type="text" /></td>
          </tr>
          <tr>
            <td>Revizyon No</td>
            <td>&nbsp;</td>
            <td><input name="revizyonno" width="90" type="text" /></td>
          </tr>
          <tr>
            <td>Revizyon Tarihi</td>
            <td>&nbsp;</td>
            <td><input name="revizyontarihi" width="90" type="text" /></td>
          </tr>
          <tr>
            <td>Sayfa</td>
            <td>&nbsp;</td>
            <td><input name="sayfa" width="50" type="text" /></td>
          </tr>
          <tr>
            <td>Birim Adı</td>
            <td>&nbsp;</td>
            <td><input name="surecadi" width="250" type="text" /></td>
          </tr>
          <tr>
            <td>Yıl</td>
            <td>&nbsp;</td>
            <td><input name="surecsahibi" width="150" type="text" /></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </tbody>
      </table>
      <input type="hidden" name="isoid" value="<?php echo $_GET["id"]; ?>" id="hiddenField">
      <br/>
      <input height="30px" width="150px" name="ekle" type="submit" value="Ekle" />
      </p>
    </form>
   
   </div>
  <!-- /.box-body -->
</div>
</body>
            	</html> 