<?php
	if(isset($_GET["kat1"]))
	$kat=$_GET["kat1"];
	elseif (isset($_POST["kat1"]))
	$kat=$_POST["kat1"];
?>
<div align="center">
	<div class="box">
		<div class="box-header with-border"><h2><?php echo $diller['linkList']; ?></h2>
			<a href="?islem=linkekle" class="btn btn-success"><?php echo $diller['linkEkle']; ?></a>
		</div>
		<!-- /.box-header -->
		<div class="box-body">
		    <table class="table table-bordered table-hover">
				<thead>
				<tr>
				<td colspan="5"><h3><?php switch($kat){ 
					case 1: echo "Kategori1(Ürünler)"; break;
					case 2: echo "Kategori2(İç Bağlantılar)"; break;
					case 3: echo "Kategori3(Hizmetler)"; break;
					case 4: echo "Kategori4(Dış Bağlantılar)"; break;
					} ?></h3></td>
				</tr>
					<tr>						
						<th><?php echo $diller['linkAdi']; ?></th>
						<th><?php echo $diller['deger1']; ?></th>
						<th><?php echo $diller['deger2']; ?></th>
						<th><?php echo $diller['linkler']; ?></th>
						<th colspan="3"><?php echo $diller['islem']; ?></th>											
					</tr>
				</thead>
				<?php
					$s=0;										
					
					$query = $db->query("SELECT * FROM link where kat =". $kat ." and dil=".$dil , PDO::FETCH_ASSOC);
					if ( $query->rowCount() ){
						foreach( $query as $row ){		  
							
						?>
						<tbody>
							<tr>
								
								<td><?php echo $row['ad']?></td>
								<td><?php echo $row['d1']?></td>
								<td><?php echo $row['d2']?></td>                       
								<td><a href="<?php echo $row['link']?>"><?php echo $row['link']?></a></td>                       
								<td>
									<a href="index.php?islem=linkduzenle&id=<?php echo $row['id']?>" class="btn btn-block btn-primary btn-xs"><?php echo $diller['duzenle']; ?></a>				
								</td>
								<td>
									<a href="index.php?islem=linksil&id=<?php echo $row['id']?>" class="btn btn-block btn-danger btn-xs"><?php echo $diller['sil']; ?></a>
								</form></td>
								<td>
									<a href="index.php?islem=linkresim&id=<?php echo $row['id']?>" class="btn btn-block btn-warning btn-xs"><?php echo $diller['resimYukle']; ?></a>
								</form>
						</td>
					</tr>
				</tbody>
				<?php
				}
			}
			$_SESSION["son"]=$s;					
		?>
		
	</table>
</div>
<!-- /.box-body -->
</div>
</div>
