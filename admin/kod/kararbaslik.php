<html>
<head>
<script src="ckeditor/ckeditor.js" type="text/javascript"></script>
</head>
<body>
<div class="box box-warning">
  <div class="box-header with-border">
    <h3 class="box-title">Karar Başlık Düzenleme<br>
    </h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <form role="form" action="index.php?islem=kararbaslikkaydet" method="post">
    
      <div class="form-group">
        <table border="0" cellpadding="0" cellspacing="0" style="width: 800px;">
          <tbody>
          <?php


$sorgu = $db->prepare("SELECT COUNT(*) FROM dokuman where  risk=0 and hedef=0");
$sorgu->execute();
$say = $sorgu->fetchColumn();

if($say<1)
{
	$baslik=0;

	 $sql = $db->prepare('INSERT INTO dokuman (risk,hedef) VALUES (0,0)');
    $ekle = $sql->execute(array(
 
        $baslik,
		      $baslik,
		                
        ));
}

$query = $db->query("SELECT * FROM dokuman where risk=0 and hedef=0", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $row ){
		  ?>
            <tr>
              <td>Başlık</td>
              <td>&nbsp;</td>
              <td><input class="form-control" type="text" value="<?php echo $row["baslik"]?>" name="baslik" id="sure4"></td>
            </tr>
            <tr>
              <td>Dokuman no </td>
              <td>&nbsp;</td>

              <td><label for="liste"></label>
              <input class="form-control" type="text" value="<?php echo $row["dokumanno"]?>" name="dokumanno" id="sure3"></td>
            </tr>
            <tr>
              <td>Yayın Tarihi</td>
              <td>&nbsp;</td>
              <td><div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" id="gerceklesen" name="yayintarihi" value="<?php echo $row["yayintarihi"]?>" data-mask>
                </div></td>
            </tr>
            <tr>
              <td>Revizyon Tarihi</td>
              <td>&nbsp;</td>
              <td><div class="input-group">
                <div class="input-group-addon"> <i class="fa fa-calendar"></i> </div>
                <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" id="gerceklesen2" value="<?php echo $row["revizyontarihi"]?>" name="revizyontarihi" data-mask>
              </div></td>
            </tr>
            <tr>
              <td>Revizyon no </td>
              <td>&nbsp;</td>
              <td><input class="form-control" type="text" name="revizyonno" value="<?php echo $row["revizyonno"]?>" id="sure2"></td>
            </tr>
            <tr>
              <td>Sayfa no</td>
              <td>&nbsp;</td>
              <td><input class="form-control" type="text" name="sayfano" value="<?php echo $row["sayfa"]?>" id="sure"></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
<?php 
	 }
	 }?>
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