
<div align="center">
  <div class="box">
    <div class="box-header">
		    <h3 class="box-title">Mesaj-Görevler</h3>
    </div>
		  <!-- /.box-header -->
		  <div class="box-body">
	<table width="363" border="0" cellpadding="0" class="table table-bordered table-hover" cellspacing="0">
			<tbody>
				<tr>
					<td width="39">
						id</td>
					<td width="86">
						Mesaj</td>
					<td colspan="3">
					  İşlemler</td>
					</tr>
  
  
  
  <?php
  $id=$_GET["id"];
  $kid=$_GET["kid"];
  if($id> 0 and $kid== 0)
$query = $db->query("SELECT * FROM mesaj where id=".$id, PDO::FETCH_ASSOC);
elseif($id== 0 and $kid> 0)
$query = $db->query("SELECT * FROM mesaj where kid=".$kid, PDO::FETCH_ASSOC);

if ( $query->rowCount() ){
     foreach( $query as $row ){
		  ?>
          <tr>
					<td>
						<?php echo $row['id']?></td>
					<td>
						<?php echo $row['mesaj']?></td>
					<td width="93"><form action="
                    <?php
					if ($row['gorevno']==1)
					echo "index.php?islem=hedefgorevtamamla&kid=".$_SESSION["kid"]."&gorevid=". $row['gorevid']."&gorevno=". $row['gorevno']?>" method="post">
                      <button type="submit"  class="btn btn-block btn-primary btn-xs">İşlemi Yap</button>
                      </form></td>
                        <td width="75" align="center"><form action="index.php?islem=mesajsil&kid=<?php echo $kid?>&id=<?php echo $row['id']?>" method="post">
                          <button type="submit"  class="btn btn-block btn-primary btn-xs"> Sil</button>
                        </form></td>
                    <td width="70">&nbsp;</td>
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
