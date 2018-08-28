<script type="text/javascript">

function popup(forum){
    window.open('', 'kod/rapor/egitimyil.php', 'width=1300,height=800,resizeable,scrollbars')
    forum.target='kod/rapor/egitimyil.php'
    }

</script>

<div>
  <div class="box">
    <div class="box-header">
		    <h3 class="box-title">Raporlar</h3>
    </div>
		  <!-- /.box-header -->
    <div class="box-body">
    <form id="form2" name="form1" method="post"  onsubmit="popup(this)" action="kod/rapor/kararrapor.php">
      <p>Arama Kriterleri <br />
        <br />
        Komisyon-Kurul Adı</p>
		      <p>
		        <select  name="komisyonadi">
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
	            </select>
		      </p>
		      <p>Nihai Durum</p>
              <p>
                <select name="nihaidurum" id="nihaidurum">
                  <option value="">Seçiniz</option>
                  <option value="Tamamlandı">Tamamlandı</option>
                  <option value="Devam ediyor">Devam ediyor</option>
                </select>
              </p>
              <p>&nbsp;</p>
<button type="submit" class="btn btn-block btn-primary" >	Göster      </button>
      </form>
    </div>
  </div>
</div>
