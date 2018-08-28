<html>
<head>
<script src="ckeditor/ckeditor.js" type="text/javascript"></script>
</head>
<body>
<div class="box box-warning">Görüş Ekleme 
  <div class="box-header with-border"></div>
  <!-- /.box-header -->
  <div class="box-body">
    <div align="left">
      <form action="index.php?islem=karargoruskaydet" method="post"  enctype="multipart/form-data">
        <table width="1066" border="0" cellpadding="0" cellspacing="0" style="width: 500px;">
		  <tbody>
		    <tr>
		      <td><table width="1066" border="0" cellpadding="0" cellspacing="0" >
		        <tbody>
		          <tr>
		            <td height="58">Komisyon</td>
		            <td>&nbsp;</td>
		            <td><select  name="komisyonadi">
		              <?php
$query = $db->query("SELECT id, ad FROM komisyonlar", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $row ){
		 ?>
		              <option value="<?php echo $row['id']?>">
		                <?php
				 echo $row['ad']
					  ?>
		                </option>
		              <?php
	 }}
	 ?>
		              </select></td>
		            </tr>
		          <tr>
		            <td height="58">Kategori<br></td>
		            <td>&nbsp;</td>
		            <td><select name="gorus" id="gorus">
		              <option value=""></option>
		               <option value="Görüş">Görüş </option>
		                <option value="Öneri">Öneri</option>
		                <option value="Yeni Gündem Maddesi">Yeni Gündem Maddesi</option>
	                  </select></td>
	              </tr>
		          <tr>
		            <td width="66">Konu</td>
		            <td width="4"> :</td>
		            <td width="996"><textarea class="ckeditor" name="konu" cols="50" rows="5"></textarea></td>
	              </tr>
		          <tr>
		            <td>Konu Detay</td>
		            <td>&nbsp;</td>
		            <td><textarea class="ckeditor" name="konudetay" cols="50" rows="10"></textarea></td>
	              </tr>
		          <tr>
		            <td>Pdf</td>
		            <td>&nbsp;</td>
		            <td><input type="file" name="dosya" id="dosya" /></td>
		            </tr>
	            </tbody>
	          </table></td>
		    </tr>
		  </tbody>
	    </table>
	    <br/>

			<input height="30px" width="150px" name="ekle" type="submit" value="Ekle" /></p>
	  </form>
      
    </div>
  </div>
  <!-- /.box-body -->
</div>
</body>
            	</html> 