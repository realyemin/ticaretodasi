<html>
<head>
<script src="ckeditor/ckeditor.js" type="text/javascript"></script>
</head>
<body>
<div class="box box-warning">
  <div class="box-header with-border">
    <p>Stratejik Plan Başlık Düzenleme  </p>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
  
  <?php
$query = $db->query("SELECT * FROM spust where id=".$_GET["id"], PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $row ){
		  ?>
    <form action="index.php?islem=spustduzenlekaydet" method="post">
      <table border="0" cellpadding="0" cellspacing="0" style="width: 500px;">
        <tbody>
          <tr>
            <td>Başlık </td>
            <td>&nbsp;</td>
            <td><label for="aaaa"></label>
            <textarea name="baslik" id="aaaa" cols="45" rows="5"><?php echo $row['baslik']?></textarea></td>
          </tr>
          <tr>
            <td width="115">Rapor Dönemi </td>
            <td width="10"> :</td>
            <td width="381"><input name="rapordonemi" width="50" type="text"  value="<?php echo $row['rapordonemi']?>" /></td>
          </tr>
        </tbody>
      </table>
      <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>" id="hiddenField">
   
      <br/>
      <input height="30px" width="150px" name="ekle" type="submit" value="KAYDET" />
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