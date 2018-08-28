
<div align="center">
  <div class="box">
    <div class="box-header">
		    <h3 class="box-title"> Firma Tedarik Değerlendirme Bilgileri Ekleme</h3>
    </div>
		  <!-- /.box-header -->
		  <div class="box-body">
		   <?php
		   
function komisyon($k)
{
	
include "kaynak/db.php";


	
	$query = $db->query("SELECT id,ad FROM firma where id =$k", PDO::FETCH_ASSOC);
			if ( $query->rowCount() ){
     foreach( $query as $row ){
		  $adi= $row['ad'];
		  
	 }}
	 echo $adi;
}

$query = $db->query("SELECT * FROM tedarik where did=". $_GET["id"], PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $row1 ){
		  ?> <form method="post" action="index.php?islem=tedarikduzenlekaydet">
		      <table width="550" border="0">
		        <tr>
		          <td height="34" colspan="2">Firma Seçiniz</td>
		          <td width="266"><select name="firma">
		            <option value="<?php echo $row1['firma_unvan']?>"><?php echo komisyon($row1['firma_unvan'])?></option>
					<?php
$query = $db->query("SELECT * FROM firma", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $row ){
		  ?>
		            <option  value="<?php echo $row['id']?>"><?php echo $row['ad']?></option>
		            <?php
		  
     }
}

	?>
	              </select>
	              <input value="<?php echo $_GET["id"]?>" type="hidden" name="id" id="hiddenField" />
                  	              <input value="<?php echo $_GET["firma"]?>" type="hidden" name="fir" id="hiddenField" /></td>
	            </tr>
		        <tr>
		          <td height="31" colspan="2">Alınan Ürün </td>
		          <td>
	              <input value="<?php echo $row1['urun']?>" type="text" name="urun" id="baslik" /></td>
	            </tr>
		        <tr>
		          <td width="124" height="62">Değerlendirme notları</td>
		          <td width="146">Kabul Durumu (25,20,0)</td>
		          <td><input value="<?php echo $row1['kabul_durumu']?>"  width="50" type="text" name="kabul" id="baslik2" /></td>
	            </tr>
		        <tr>
		          <td height="62">&nbsp;</td>
		          <td>Teslimat(25,20,10,5)</td>
		          <td><input value="<?php echo $row1['teslimat']?>" width="50" type="text" name="teslimat" id="baslik3" /></td>
	            </tr>
		        <tr>
		          <td height="62">&nbsp;</td>
		          <td>Fiyat(20,10,5)</td>
		          <td><input value="<?php echo $row1['fiyat']?>" width="50" type="text" name="fiyat" id="baslik4" /></td>
	            </tr>
		        <tr>
		          <td height="62">&nbsp;</td>
		          <td>Ödeme(15,10,0)</td>
		          <td><input value="<?php echo $row1['odeme']?>" width="50" type="text" name="odeme" id="baslik5" /></td>
	            </tr>
		        <tr>
		          <td height="62">&nbsp;</td>
		          <td>Belge(10,10,10,0)</td>
		          <td><input value="<?php echo $row1['belge']?>" width="50" type="text" name="belge" id="baslik6" /></td>
	            </tr>
		        <tr>
		          <td height="62">&nbsp;</td>
		          <td>Diğer(5,0)</td>
		          <td><input value="<?php echo $row1['diger']?>" width="50" type="text" name="diger" id="baslik7" /></td>
	            </tr>
	          </table>
              <?php 
	 }}
	 ?>
     
		      <p>&nbsp;</p>
		      <p>
		        <input  type="submit" value="Kaydet">
	          </p>
	        </form>
		  </div>
		  <!-- /.box-body -->
  </div>
</div>
