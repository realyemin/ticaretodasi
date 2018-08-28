<script type="text/javascript">

function popup(forum){
    window.open('', 'kod/rapor/egitimyil.php', 'width=800,height=1300,resizeable,scrollbars')
    forum.target='kod/rapor/egitimyil.php'
    }

</script>

<div align="center">
  <div class="box">
    <div class="box-header">
		    <h3 class="box-title">Raporlar</h3>
    </div>
		  <!-- /.box-header -->
    <div class="box-body">
		    
      <form id="form1" name="form1" method="post" action="index.php?islem=egitimrapor1">
		      Eiğitimine ait Personel Devamsızlık tablosu
              <button type="submit" class="btn btn-block btn-primary" >	Göster</button>
	        </form>
            
            
            
      <form id="form1" name="form1" method="post"  onsubmit="popup(this)" action="kod/rapor/egitimyil.php">
		      <p>&nbsp;</p>
		      <p>Yıla Göre Yapılan Eğitimlerin listesi </p>
		      <p>Yılı Giriniz 
		        <label for="yil"></label>
		        <input type="text" name="yil" id="yil" />
		      </p>
		      <button type="submit" class="btn btn-block btn-primary" >Göster</button>
	        </form>
            <p>&nbsp;</p>
            <form id="form2" name="form1" method="post"  onsubmit="popup(this)" action="kod/rapor/egitimgerceklestiren.php">
              <p>&nbsp;</p>
              <p>EğitimiGerçekleştiren Birim - Şahısa Göre Yapılan Eğitimlerin listesi </p>
              <p>Gerçekleştiren Birim Seçiniz 
                <label for="yil2"></label>
                <select  name="uyeid">
                  <?php
$query = $db->query("SELECT DISTINCT  gerceklestiren from egitim", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $row ){
		 ?>
                  <option value="<?php echo $row['gerceklestiren']?>">
                    <?php
				 echo $row['gerceklestiren'];
				 ?>
                  </option>
                  <?php
	 }}
	 ?>
                </select>
              </p>
              <button type="submit" class="btn btn-block btn-primary" >Göster</button>
            </form>
            
    </div>
    
    
		  <!-- /.box-body -->
  </div>
</div>
<p>&nbsp;</p>
