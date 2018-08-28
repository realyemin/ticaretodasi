<html>
<head>
<script src="ckeditor/ckeditor.js" type="text/javascript"></script>
</head>
<body>
<div class="box box-warning">
  <div class="box-header with-border">Risk Durumu  Ekleme</div>
  <!-- /.box-header -->
  <div class="box-body">
    <form action="index.php?islem=spakaydet" method="post">
      <table width="642" border="0" cellpadding="0" cellspacing="0" >
        <tbody>
          <tr>
            <td height="33">AnaTema No </td>
            <td>:</td>
            <td><input name="anatemano" width="150" type="text" class="auto" /></td>
          </tr>
          <tr>
            <td width="242">Amaç No </td>
            <td width="10"> :</td>
            <td width="396"><input name="amacno" width="150" type="text" class="auto" /></td>
          </tr>
          <tr>
            <td><p>Hedef No </p></td>
            <td>:</td>
            <td><input name="hedefno" width="150" type="text" />
              <span class="form-group">
              <div class="form-group"></div>
            </span></td>
          </tr>
          <tr>
            <td>Strateji no</td>
            <td>:</td>
            <td><input name="stratejino" width="50" type="text" /></td>
          </tr>
          <tr>
            <td>Gerçekleştirilmesi Planlanan (Uygulamalar)</td>
            <td>:</td>
            <td><textarea name="planlanan" id="aciklama2" cols="45" rows="5"></textarea></td>
          </tr>
          <tr>
            <td>Gerçekleşen (Uygulamalar)</td>
            <td>:</td>
            <td><textarea name="gerceklesen" id="aciklama" cols="45" rows="5"></textarea></td>
          </tr>
          <tr>
            <td>Gösterge</td>
            <td>:</td>
            <td><input name="gosterge" width="150" type="text" /></td>
          </tr>
          <tr>
            <td>Değerleme</td>
            <td>:</td>
            <td><label for="deger"></label>
              <select name="deger" id="deger">
                <option value="1">Beklenen Düzeyin Çok Altında</option>
                <option value="2">Beklenen Düzeyin Altında</option>
                <option value="3">Beklenen Düzeyde</option>
                <option value="4">Beklenen Düzeyin Üstünde</option>
                <option value="5">Beklenen Düzeyin Çok Üstünde</option>
            </select></td>
          </tr>
          <tr>
            <td>Açıklama</td>
            <td>&nbsp;</td>
            <td><textarea name="aciklama" id="textarea" cols="45" rows="5"></textarea></td>
          </tr>
        </tbody>
      </table>
      <p>
        <input type="hidden" name="id" value="<?php echo $_POST["id"]; ?>" id="hiddenField">
      </p>
      <p>
        <input type="hidden" name="spkat" value="<?php echo $_POST["kat1"]; ?>" id="hiddenField2">
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