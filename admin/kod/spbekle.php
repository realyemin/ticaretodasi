<html>
<head>
<script src="ckeditor/ckeditor.js" type="text/javascript"></script>
</head>
<body>
<div class="box box-warning">
  <div class="box-header with-border">Risk Durumu  Ekleme</div>
  <!-- /.box-header -->
  <div class="box-body">
    <form action="index.php?islem=spbkaydet" method="post">
      <table width="642" border="0" cellpadding="0" cellspacing="0" >
        <tbody>
          <tr>
            <td width="242">Gerçekleşen (Uygulamalar)</td>
            <td width="10">:</td>
            <td width="396"><textarea name="gerceklesen" id="aciklama" cols="45" rows="5"></textarea></td>
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
        </tbody>
      </table>
      <p>
        <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>" id="hiddenField">
      </p>
      <p><br/>
        <input height="30px" width="150px" name="ekle" type="submit" value="Ekle" />
      </p>
      </p>
    </form>
   
   </div>
  <!-- /.box-body -->
</div>
</body>
            	</html> 