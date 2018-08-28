
<div align="center">
  <div class="box">
    <div class="box-header">
		    <h3 class="box-title"> İSO9001 EKLEME</h3>
    </div>
		  <!-- /.box-header -->
		  <div class="box-body">
		    <form action="index.php?islem=isolinkkaydet" method="post" enctype="multipart/form-data">
		      <table width="550" border="0">
		        <tr>
		          <td height="34">		<?php
$query = $db->query("SELECT * FROM iso where id=".$_GET["id"], PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $row ){
		  ?> Başlık
	              &nbsp;</td>
		          <td><?php echo $row['baslik']?></td>
	            </tr>
		        <tr>
		          <td height="34">Açıklama</td>
		          <td><?php echo $row['aciklama']?></td>
		          <?php
		  
     }
}

	?>
	            </tr>
		        <tr>
		          <td height="34">&nbsp;</td>
		          <td><input type="hidden" name="isoid" value="<?php echo $_GET["id"]; ?>" id="hiddenField" /></td>
	            </tr>
		        <tr>
		          <td width="252" height="34">Başlık</td>
		          <td width="288"><input type="text" name="baslik" id="baslik" /></td>
	            </tr>
		        <tr>
		          <td height="31">Dosya</td>
		          <td><label for="dosya"></label>
		            <input type="file" name="dosya" id="dosya" /></td>
	            </tr>
		        <tr>
		          <td height="62">Açıklama</td>
		          <td><textarea name="aciklama" id="aciklama" cols="45" rows="5"></textarea></td>
	            </tr>
	          </table>
		      <p>
		        <input  type="submit" value="Kaydet">
	          </p>
	        </form>
           
         
		    <table height="175" class="table table-bordered table-hover" border="0" cellpadding="0" cellspacing="0" style="width:750px;">
		      <tbody>
		        <tr>
		          <td width="41"><strong> No</strong></td>
		          <td width="196"><strong>Başlık </strong></td>
		          <td width="88">Link</td>
		          <td width="199">Açıklama</td>
		          <td width="226"><strong> İşlem</strong></td>
	            </tr>
		        <?php
$query = $db->query("SELECT * FROM isoalt where isoid=".$_GET["id"], PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $row ){
		  ?>
		        <tr>
		          <td><?php echo $row['id']?></td>
		          <td><?php echo $row['baslik']?></td>
		          <td><form action="../tcrt/<?php echo $row['link']?>" method="post"  target="_blank">
		            <button type="submit"  class="btn btn-block btn-primary btn-xs">Göster </button>
	              </form></td>
		          <td><?php echo $row['aciklama']?></td>
		          <td><form action="index.php?islem=isolinksil&id=<?php echo $row['id']?>" method="post">
                  <input name="isoid" type="hidden" value="<?php echo $_GET["id"]?>" />
		            <button type="submit"  class="btn btn-block btn-primary btn-xs">Sil </button>
	              </form></td>
	            </tr>
		        <?php
		  
		  
		  
     }
}

	?>
	          </tbody>
	        </table>
		    <p>   <table width="559" border="1">
  <tr>
    <td> <?php if($row['kat1']==4)
				  {
					  ?>
					  <form action="../tcrt/" method="post"  target="_blank">
		            <button type="submit"  class="btn btn-block btn-primary btn-xs">Proses Risk Değerlendirmesi</button>
	              </form>
                  <p></p>
                  
					  		          <form>  <button type="submit"  class="btn btn-block btn-primary btn-xs">Hedef İzleme Tablosu </button>
	              </form>
					  
					  
					  <p></p>
                      
	                  <form>
					                    <button type="submit"  class="btn btn-block btn-primary btn-xs">Hedef Sonuçları (İyileştirme Ve Çözümler)</button>
            </form>
	                  <?php
					  
					  }?></td>
  </tr>
</table>
</p>
		  </div>
		  <!-- /.box-body -->
  </div>
</div>
