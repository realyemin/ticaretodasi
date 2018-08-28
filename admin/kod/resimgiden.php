
<div align="center">
  <div class="box">
    <div class="box-header">
		    <h3 class="box-title">Dosya Yükleme</h3>
		    <table bgcolor="" width="600" border="0">
		      <tr>
		        <td><form action="index.php?islem=resimgidenkaydet" method="post" enctype="multipart/form-data">
		          <table width="550" border="0">
		            <tr>
		              <td width="252" height="34">&nbsp;</td>
		              <td width="288"><input type="hidden" name="isoid" value="<?php echo $_GET["id"]; ?>" id="hiddenField" /></td>
	                </tr>
		            <tr>
		              <td height="31">Dosya</td>
		              <td><label for="dosya"></label>
		                <input type="file" name="dosya" id="dosya" /></td>
	                </tr>
	              </table>
		          <p>
		            <input  type="submit" value="Kaydet" />
	              </p>
		          </form></td>
	          </tr>
      </table>
    </div>
		  <!-- /.box-header -->
		  <div class="box-body"></div>
		  <!-- /.box-body -->
  </div>
</div>
