
<div align="center">
  <div class="box">
    <div class="box-header">
		    <h3 class="box-title">Kararlar Listesi</h3>
    </div>
		  <!-- /.box-header -->
		  <div class="box-body">
		    <table height="175" class="table table-bordered table-hover" id="example2">
		      <thead>
		        <tr>
		          <th width="20">No</th>
		          <th width="59">Kurul-Komisyon Adı</th>
		          <th width="59">Karar Tarihi</th>
		          <th width="42">Karar Sayısı</th>
		          <th width="67">Karar</th>
		          <th width="89">Etkin Karar</th>
		          <th width="63">Kararla İlgili Etkin Yazı-Tarih-Sayı</th>
   		          <th>Giden Yazı Ek</th>
                  <th>Sonuç</th>
                  <th>Sonuca İlişkin cevap</th>
                   <th>Nihai Durum</th>
                   <th>İşlem</th>
                  


	            </tr>
                
  <?php
  
function komisyon($k)
{
	
include "kaynak/db.php";


	
	$query = $db->query("SELECT id,ad FROM komisyonlar where id =$k", PDO::FETCH_ASSOC);
			if ( $query->rowCount() ){
     foreach( $query as $row ){
		  $adi= $row['ad'];
		  
	 }}
	 echo $adi;
}

$query = $db->query("SELECT * FROM kararlar order by id desc", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $row ){
		  ?>
          <tr>
					<td><?php echo $row['id']?></td>
					<td><?php echo komisyon($row['komisyon'])?></td>
					<td><?php echo $row['karartarihi']?></td>
					<td><?php echo $row['kararsayisi']?></td>
					<td><?php if($row['karar']=="")
					{
					
					?>
                      <form action="index.php?islem=resimkarar&id=<?php echo $row['id']?>" method="post">
                        <button type="submit"  class="btn btn-block btn-primary btn-xs">Ekle</button>
                      </form>
                      <?php
					
						}
						else
						{
					?>
                      <form action="<?php echo $row['karar']?>" target="_blank" method="post">
                        <button type="submit"  class="btn btn-block btn-primary btn-xs">Göster</button>
                      </form>
                      <p>
                      
                       <form action="index.php?islem=resimkararsil&id=<?php echo $row['id']?>" method="post">
                        <button type="submit"  class="btn btn-block btn-primary btn-xs">Sil</button>
                      </form>
                      
                    <?php 
						}?></td>
					<td><?php echo $row['etkinkarar']?></td>
					<td><?php echo $row['gidenyazi_tarih_sayi']?></td>
                    <td>
                    <?php if($row['gidenek']=="")
					{
					
					?>
                    <form action="index.php?islem=resimgiden&id=<?php echo $row['id']?>" method="post">
			           <button type="submit"  class="btn btn-block btn-primary btn-xs">Ekle</button>
			         </form>
                    <?php
					
						}
						else
						{
					?>
                    
                    <form action="<?php echo $row['gidenek']?>" method="post" target="_blank">
			           <button type="submit"  class="btn btn-block btn-primary btn-xs">Göster</button>
			         </form>
                     <p>
                      
                       <form action="index.php?islem=resimgidensil&id=<?php echo $row['id']?>" method="post">
                        <button type="submit"  class="btn btn-block btn-primary btn-xs">Sil</button>
                      </form>
                      
                     <?php 
						}?>
            </td>
					<td><?php echo $row['sonuc']?></td>
					<td><?php if($row['sonuccevap']=="")
					{
					
					?>
                      <form action="index.php?islem=sonuccevap&id=<?php echo $row['id']?>" method="post">
                        <button type="submit"  class="btn btn-block btn-primary btn-xs">Ekle</button>
                      </form>
                      <?php
					
						}
						else
						{
					?>
                      <form action="<?php echo $row['sonuccevap']?>" method="post" target="_blank">
                        <button type="submit"  class="btn btn-block btn-primary btn-xs">Göster</button>
                      </form>
                      <p>&nbsp;</p>
                      <form action="index.php?islem=sonuccevapsil&id=<?php echo $row['id']?>" method="post">
                        <button type="submit"  class="btn btn-block btn-primary btn-xs">Sil</button>
                      </form>
                    <?php 
						}?></td>
					<td><?php echo $row['nihaidurum']?></td>
			<td><form action="index.php?islem=kararsil&id=<?php echo $row['id']?>" method="post">
	            <button type="submit"  class="btn btn-block btn-primary btn-xs">Sil</button>
	            </form></td>
                        

				</tr>
  
          
          
          
          <?php
		  
		  
		  
     }
}

	?>
	          </thead>
		      <tbody>
		       
	      
	        </table>
	      </div>
		  <!-- /.box-body -->
  </div>
</div>
