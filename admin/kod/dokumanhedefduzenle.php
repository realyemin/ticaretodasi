<html>
<head>
<script src="ckeditor/ckeditor.js" type="text/javascript"></script>
</head>
<body>
<div class="box box-warning">
  <div class="box-header with-border">Döküman Ekleme</div>
  <!-- /.box-header -->
  <div class="box-body">
  
  <?php
$query = $db->query("SELECT * FROM dokuman where id=".$_GET["id"], PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $row ){
		  ?>
    <form action="index.php?islem=dokumanhedefduzenlekaydet" method="post">
      <table border="0" cellpadding="0" cellspacing="0" style="width: 500px;">
        <tbody>
          <tr>
            <td>Başlık </td>
            <td>&nbsp;</td>
            <td><input name="baslik" value="<?php echo $row['baslik']?>" width="300" type="text" /></td>
          </tr>
          <tr>
            <td width="115">Döküman No </td>
            <td width="10"> :</td>
            <td width="381"><input name="dokumanno" width="50" type="text"  value="<?php echo $row['dokumanno']?>" /></td>
          </tr>
          <tr>
            <td>Yayın Tarihi</td>
            <td>&nbsp;</td>
            <td><input name="yayintarihi" width="100" type="text"  value="<?php echo $row['yayintarihi']?>"  /></td>
          </tr>
          <tr>
            <td>Revizyon No</td>
            <td>&nbsp;</td>
            <td><input name="revizyonno" width="90" type="text"  value="<?php echo $row['revizyonno']?>"  /></td>
          </tr>
          <tr>
            <td>Revizyon Tarihi</td>
            <td>&nbsp;</td>
            <td><input name="revizyontarihi" width="90" type="text"  value="<?php echo $row['revizyontarihi']?>"  /></td>
          </tr>
          <tr>
            <td>Sayfa</td>
            <td>&nbsp;</td>
            <td><input name="sayfa" width="50" type="text"  value="<?php echo $row['sayfa']?>"  /></td>
          </tr>
          <tr>
            <td>Birim  Adı</td>
            <td>&nbsp;</td>
            <td><input name="surecadi" width="250" type="text"  value="<?php echo $row['surecadi']?>"  /></td>
          </tr>
          <tr>
            <td>Yıl Sahibi</td>
            <td>&nbsp;</td>
            <td><input name="surecsahibi" width="150" type="text"  value="<?php echo $row['surecsahibi']?>"  /></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </tbody>
      </table>
      <input type="hidden" name="isoid" value="<?php echo $_GET["id"]; ?>" id="hiddenField">
      <input type="hidden" name="risk" value="<?php echo $_GET["risk"]; ?>" id="hiddenField2">
      <br/>
      <input height="30px" width="150px" name="ekle" type="submit" value="Ekle" />
      </p>
    </form>
   
   <?php 
	 }}
	 ?>
     
   </div>
  <!-- /.box-body -->
</div>
</body>
            	</html> 