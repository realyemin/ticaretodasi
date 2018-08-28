
<div align="center">
  <div class="box">
    <div class="box-header">
		    <h3 class="box-title"> TKY EKLEME</h3>
    </div>
		  <!-- /.box-header -->
		  <div class="box-body">
		    <form method="post" action="index.php?islem=isokaydet">
		      <table width="550" border="0">
		        <tr>
		          <td width="252" height="34">Alt Kategori (Yoksa Seçim Yapmayınız)</td>
		          <td width="288"><select name="kat2">
		            <option value="0">Seçim Yapınız</option>
					<?php
$query = $db->query("SELECT * FROM isokat2 where kat1=".$_POST["kate1"], PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $row ){
		  ?>
		            <option value="<?php echo $row['id']?>"><?php echo $row['kat2']?></option>
		            <?php
		  
     }
}

	?>
	              </select></td>
	            </tr>
		        <tr>
		          <td height="31">Başlık</td>
		          <td>
	              <input type="text" name="baslik" id="baslik" /></td>
	            </tr>
		        <tr>
		          <td height="62">Açıklama</td>
		          <td>
	              <textarea name="aciklama" id="aciklama" cols="45" rows="5"></textarea></td>
	            </tr>
	          </table>
		      <p>
		        <input type="hidden" name="kat1" value="<?php echo $_POST["kate1"] ?>" id="hiddenField" />
		      </p>
		      <p>
		        <input  type="submit" value="Kaydet">
	          </p>
	        </form>
		  </div>
		  <!-- /.box-body -->
  </div>
</div>
