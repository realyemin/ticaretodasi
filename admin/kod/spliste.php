
<div align="center">
  <div class="box">
    <div class="box-header">
		    <h3 class="box-title">Stratejik plan Listesi    </h3>
    </div>
		  <!-- /.box-header -->
		  <div class="box-body">
		    <table width="514" border="0" cellpadding="0" cellspacing="0" class="table table-bordered table-hover">
		      <tbody>
		        <tr>
		          <td width="27" height="32"> id</td>
		          <td width="80"> Rapor Dönemi</td>
		          <td width="137">Açıklama </td>
		          <td colspan="3"> İşlemler</td>
	            </tr>
		        <?php
$query = $db->query("SELECT * FROM spust where id<>1", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $row ){
		  ?>
		        <tr>
		          <td rowspan="2"><?php echo $row['id']?></td>
		          <td rowspan="2"><?php echo $row['rapordonemi']?></td>
		          <td rowspan="2"><?php echo substr($row['baslik'],0,50)?></td>
		          <td width="67" rowspan="2"><form action="index.php?islem=spustsil&id=<?php echo $row['id']?>" method="post">
		            <button type="submit"  class="btn btn-block btn-primary btn-xs"> Sil </button>
		            </form>
                    <p></p>
                    <form action="index.php?islem=spa&id=<?php echo $row['id']?>" method="post">
		            <button type="submit"  class="btn btn-block btn-primary btn-xs">Düzenle</button>
		            </form>
                  </td>
		          <td width="11"  align="center"></td>
		          <td width="192" rowspan="2">&nbsp;</td>
	            </tr>
		        <tr>
		          <td  align="center"></td>
	            </tr>
		        <?php
		  
		  
		  
     }
}

	?>
	          </tbody>
	        </table>
		  </div>
		  <!-- /.box-body -->
  </div>
</div>
