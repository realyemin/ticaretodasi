
<div align="center">
  <div class="box">
    <div class="box-header">
		    <h3 class="box-title">İso9001 Listesi</h3>
    </div>
		  <!-- /.box-header -->
		  <div class="box-body">
		    <table width="514" border="0" cellpadding="0" cellspacing="0" class="table table-bordered table-hover">
		      <tbody>
		        <tr>
		          <td width="27" height="32"> id</td>
		          <td width="80"> Başlık </td>
		          <td width="137">Açıklama </td>
		          <td colspan="3"> İşlemler</td>
	            </tr>
		        <?php
$query = $db->query("SELECT * FROM iso", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $row ){
		  ?>
		        <tr>
		          <td rowspan="2"><?php echo $row['id']?></td>
		          <td rowspan="2"><?php echo $row['baslik']?></td>
		          <td rowspan="2"><?php echo substr($row['aciklama'],0,50)?></td>
		          <td width="67" rowspan="2"><form action="index.php?islem=isosil&id=<?php echo $row['id']?>" method="post">
		            <button type="submit"  class="btn btn-block btn-primary btn-xs"> Sil </button>
		            </form>
                    <p></p>
                    <form action="index.php?islem=isoduzenle&id=<?php echo $row['id']?>" method="post">
		            <button type="submit"  class="btn btn-block btn-primary btn-xs">Düzenle</button>
		            </form>
                    <p></p>
                  <form action="index.php?islem=isolinkekle&id=<?php echo $row['id']?>" method="post">
		            <button type="submit"  class="btn btn-block btn-primary btn-xs">Linkler</button>
		            </form>  
                    </td>
		          <td width="11"  align="center"></td>
		          <td width="192" rowspan="2">
                  
                  
                    <table width="137" border="0">
                      <tr>
                        <td width="131"><?php if($row['kat1']==4)
				  {
					  ?>
                      
            <form action="index.php?islem=risk&id=<?php echo $row['id']?>" method="post"  >
           <button type="submit"  class="btn btn-block btn-primary btn-xs">Proses Risk Değerlendirmesi</button>
           </form>
                          <p></p>
            <form action="index.php?islem=hedef&id=<?php echo $row['id']?>" method="post"  >
         <button type="submit"  class="btn btn-block btn-primary btn-xs">Hedef İzleme Tablosu </button>
                          </form>
                          <p></p>
                         
              <form action="index.php?islem=sonuc&id=<?php echo $row['id']?>" method="post"  >
           <button type="submit"  class="btn btn-block btn-primary btn-xs">Hedef Sonuçları (İyileştirme Ve Çözümler)</button>
                          </form>
                          <?php
					  
					  }?></td>
                      </tr>
                  </table></td>
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
