<html>
<head>
<script src="ckeditor/ckeditor.js" type="text/javascript"></script>
</head>
<body>
<div class="box box-warning">
  <div class="box-header with-border"><!-- /.box-body -->
    <form action="index.php?islem=spdosyalinkkaydet" method="post" enctype="multipart/form-data">
      <table width="550" border="0">
        <tr>
          <td width="252" height="34">Başlık</td>
          <td width="288"><input type="text" name="baslik" id="baslik" /></td>
        </tr>
        <tr>
          <td height="31">Dosya</td>
          <td><label for="dosya"></label>
            <input type="file" name="dosya" id="dosya" /></td>
        </tr>
        <tr>
          <td height="62">Açıklama</td>
          <td><textarea name="aciklama" id="aciklama" cols="45" rows="5"></textarea></td>
        </tr>
      </table>
      <p>
        <input  type="submit" value="Kaydet">
      </p>
    </form>
  </div>
</div>
</body>
            	</html> 