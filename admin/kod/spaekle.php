<html>
<head>
<script src="ckeditor/ckeditor.js" type="text/javascript"></script>
</head>
<body>
<div class="box box-warning">
  <div class="box-header with-border">Stratejik Plan Uyguılama Ekleme Kategori Seçimi</div>
  <!-- /.box-header -->
  <div class="box-body">
    <form action="index.php?islem=spaekle1" method="post">
      <p>
        <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>" id="hiddenField">
      </p>
      <p>
        <label for="a"></label>
        <select name="kat1" id="kat1">
          <?php
$query = $db->query("SELECT * FROM spkat", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $row ){
		  ?>
          <option value="<?php echo $row['id']?>"><?php echo $row['baslik1']."  -   ". $row['baslik2']?></option>
          <?php
	 }}
	 ?>
        </select>
      </p>
      <p>
        <input height="30px" width="150px" name="ekle" type="submit" value="Devam Et" />
      </p>
      </p>
    </form>
   
   </div>
  <!-- /.box-body -->
</div>
</body>
            	</html> 