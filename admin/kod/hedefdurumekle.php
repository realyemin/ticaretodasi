<html>
<head>
<script src="ckeditor/ckeditor.js" type="text/javascript"></script>
</head>
<body>
<div class="box box-warning">
  <div class="box-header with-border">Risk Durumu  Ekleme</div>
  <!-- /.box-header -->
  <div class="box-body">
    <form action="index.php?islem=hedefdurumkaydet" method="post">
      <table width="642" border="0" cellpadding="0" cellspacing="0" >
        <tbody>
          <tr>
            <td height="33">HEDEF KONUSU</td>
            <td>:</td>
            <td><label for="textarea"></label>
            <textarea name="hedef" id="textarea" cols="45" rows="5"></textarea></td>
          </tr>
          <tr>
            <td width="242">PARAMETRE VE/VEYA KRİTERİN TANIMI </td>
            <td width="10"> :</td>
            <td width="396"><textarea name="parametre" id="textarea2" cols="45" rows="5"></textarea></td>
          </tr>
          <tr>
            <td><p> ÖLÇME/İZLEME YÖNTEMİ </p></td>
            <td>:</td>
            <td><input name="olcme" width="150" type="text" />
              <span class="form-group">
              <div class="form-group"></div>
            </span></td>
          </tr>
          <tr>
            <td>İZLEME  PERYODU</td>
            <td>:</td>
            <td><input name="izleme" width="50" type="text" /></td>
          </tr>
          <tr>
            <td> KABUL KRİTERİ</td>
            <td>:</td>
            <td><input name="kabul" width="50" type="text" /></td>
          </tr>
        </tbody>
      </table>
      <p>
        <input type="hidden" name="isoid" value="<?php echo $_GET["id"]; ?>" id="hiddenField">
      </p>
      <p>
        <input type="hidden" name="risk" value="<?php echo $_GET["risk"]; ?>" id="hiddenField2">
        <br/>
        <input height="30px" width="150px" name="ekle" type="submit" value="Ekle" />
      </p>
      </p>
    </form>
   
   </div>
  <!-- /.box-body -->
</div>
</body>
            	</html> 