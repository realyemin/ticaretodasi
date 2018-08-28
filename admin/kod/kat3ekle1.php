<?php
	/*
		-- =============================================
		-- Author		: EKOMURCU
		-- Create date	: 12.07.2018
		-- Description	: Güncelleme
		-- ============================================= 
	*/
?>
<div class="box box-warning">
	<div class="box-header with-border"><h2><?php echo $diller['altMenuEkle']; ?></h2>
			</div>
  <div class="box-header with-border">

    <p><form action="index.php?islem=kat3kaydet" method="post">
  <table class="table table-hover table-bordered" >
    <tbody>
      <tr>
        <td><?php echo $diller['ustMenu']; ?></td>
   
        <td>          
          <input name="kat1" type="hidden" value="<?php echo $_POST['kat1']?>">
          <select class="form-control alert-danger"  name="kat2" id="kat2">
            <?php
$query = $db->query("SELECT * FROM kat2 where kat1=".$_POST['kat1'] . " and dil=" . $dil, PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $row ){
		  ?>
            <option value="<?php echo $row['id']?>"><?php echo $row['kat2']?></option>
            <?php
	 }}
	 ?>
          </select></td>
      </tr>
      <tr>
        <td width="106"><?php echo $diller['altMenu']; ?></td>
        <td width="390"><input required class="form-control"  name="kat3" width="300" type="text" /></td>
      </tr>
      <tr>
        <td><?php echo $diller['yonlendirmeLinki']; ?></td>
         <td><input class="form-control"  name="link" width="300" type="text" /></td>
      </tr>
    </tbody>
  </table>
  <br/>
  <input class="form-control btn btn-success" name="ekle" type="submit" value="<?php echo $diller['ekle']; ?>" />
  </p>
</form>
</p>
  </div>
  <!-- /.box-header -->
  <div class="box-body"></div>
  <!-- /.box-body -->
</div>
<p class="alert alert-info"><em>Web sitenizde yer alan ana menü altında yeralan ilk başlıklarınız altında yer alan ikinci alt menülerinizi bu alandan oluşturunuz.</em></p>
<p><em>Ana Menü Adı - İlk Alt Menü Listesi - İkinci Alt Menü</em></p>
