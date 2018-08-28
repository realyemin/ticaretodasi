
<div align="center">
  <div class="box">
    <div class="box-header">
		    <h3 class="box-title"> TKY EKLEME</h3>
    </div>
		  <!-- /.box-header -->
		  <div class="box-body">
		    <form method="post" action="index.php?islem=isoduzenlekaydet">
		      <table width="550" border="0">
		        <tr>
		          <td width="252" height="31">Başlık</td>
		          <td width="288">
            <?php       
$query = $db->query("SELECT * FROM iso where id=". $_GET["id"], PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $row1 ){
		  ?>
	              <input value="<?php echo $row1['baslik']?>" type="text" name="baslik" id="baslik" /></td>
	            </tr>
		        <tr>
		          <td height="62">Açıklama</td>
		          <td>
	              <textarea name="aciklama" id="aciklama" cols="45" rows="5"><?php echo $row1['aciklama']?></textarea></td><?php } }?>
	            </tr>
	          </table>
		      <p>
		        <input type="hidden" value="<?php echo $row1['id']?>" name="id" id="hiddenField" />
		      </p>
		      <p>
		        <input  type="submit" value="Kaydet">
	          </p>
	        </form>
		  </div>
		  <!-- /.box-body -->
  </div>
</div>
