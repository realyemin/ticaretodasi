
<div align="center">
  <div class="box">
    <div class="box-header">
		    <h3 class="box-title"> İSO9001 EKLEME</h3>
    </div>
		  <!-- /.box-header -->
		  <div class="box-body">
		    <form action="index.php?islem=hedefgorevtamamlakaydet" method="post" enctype="multipart/form-data">
		      <?php
$query = $db->query("SELECT * FROM hedef where id=".$_GET["gorevid"], PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $row ){
		  ?>
          <table width="550" border="0">
		        <tr>
		          <td height="34">		 Parametre
	              &nbsp;</td>
		          <td><?php echo $row['parametre']?></td>
	            </tr>
		        <tr>
		          <td height="34">Ölçme</td>
		          <td><?php echo $row['olcme']?></td>
                  
		        </tr>
                <tr>
		          <td height="34">İzleme</td>
		          <td><?php echo $row['izleme']?></td>
                  
		        </tr>
                <tr>
		          <td height="34">Kabul</td>
		          <td><?php echo $row['kabul']?></td>
                  
		        </tr>
		        <tr>
		          <td height="34">&nbsp;</td>
		          <td><input type="hidden" name="id" value="<?php echo $row["id"]; ?>" id="hiddenField" />
	              <input type="hidden" name="kid" value="<?php echo $_GET["kid"]; ?>" id="hiddenField2" /></td>
	            </tr>
		        <tr>
		          <td width="252" height="34"> 1.3 AYLIK GERÇEKLEŞEN</td>
		          <td width="288"><input type="text" name="aylik1" id="baslik" /></td>
	            </tr>
		        <tr>
		          <td height="28"> 2.3 AYLIK GERÇEKLEŞEN</td>
		          <td><label for="dosya">
		            <input type="text" name="aylik2" id="aylik2" />
		          </label></td>
	            </tr>
		        <tr>
		          <td height="25"> 3.3 AYLIK GERÇEKLEŞEN</td>
		          <td><input type="text" name="aylik3" id="baslik3" /></td>
	            </tr>
		        <tr>
		          <td height="21"> 4.3 AYLIK GERÇEKLEŞEN</td>
		          <td><input type="text" name="aylik4" id="baslik4" /></td>
            </tr>
		        <tr>
		          <td height="21">ORTALAMA / G.TOPLAM </td>
		          <td><input type="text" name="toplam" id="baslik6" /></td>
            </tr>
		        <tr>
		          <td height="38">KARAR VARSA DF NO</td>
		          <td><input type="text" name="kararno" id="baslik5" /></td>
            </tr>
		        <tr>
		          <td height="62">Karar</td>
		          <td><input type="file" name="dosya" id="dosya" /></td>
            </tr>
	          </table>
		      <p>
		        <input  type="submit" value="Kaydet">
	          </p>
	        </form>
                  <?php
		  
     }
}

	?>
	       
         
		  
</p>
		  </div>
		  <!-- /.box-body -->
  </div>
</div>
