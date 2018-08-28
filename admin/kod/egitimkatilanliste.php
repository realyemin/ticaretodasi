<div align="center">
  <div class="box">
    <div class="box-header">
		    <h3 class="box-title">Eğitime Katılan Kişiler</h3>
    </div>
		  <!-- /.box-header -->
		  <div class="box-body">
		    <p>&nbsp;</p>
		
		    <table height="175" class="table table-bordered table-hover" border="0" cellpadding="0" cellspacing="0" style="width:750px;">
		      <tbody>
		        <tr>
		          <td><strong> No</strong></td>
		          <td><strong> Kişi Adı</strong></td>
		          <td><strong> İşlem</strong></td>
	            </tr>
		        <?php

$id=$_GET['id'];


function kullanici($k)
{
	
include "kaynak/db.php";


	
	$query = $db->query("SELECT id,adsoyad FROM kullanici where id =$k", PDO::FETCH_ASSOC);
			if ( $query->rowCount() ){
     foreach( $query as $row ){
		  $adi= $row['adsoyad'];
		  
	 }}
	 echo $adi;
}

$query = $db->query("SELECT * FROM egitimkatilan where  egitimid= ".$id, PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $row ){
		  ?>
		        <tr>
		          <td><?php echo $row['id']?></td>
		          <td><?php echo kullanici($row['uyeid'])?></td>
		          <td><form action="index.php?islem=egitimkatilansil&id=<?php echo $row['id']?>&risk=<?php echo $id?>" method="post">
		            <button type="submit"  class="btn btn-block btn-primary btn-xs"> Sil </button>
		            </form></td>
	            </tr>
		        <?php
		  
		  
		  
     }
}

	?>
	          </tbody>
	        </table>
		    <p>&nbsp;</p>
		    <p>&nbsp;</p>
		  </div>
		  <!-- /.box-body -->
  </div>
</div>
