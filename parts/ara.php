<?php
	/*
		-- =============================================
		-- Author		: EKOMURCU
		-- Create date	: 28.07.2018
		-- Description	: Site ici Arama modulu
		-- haber,duyuru,icerik ve etkinlik takviminde eş zamanlı arama yapar
		-- ============================================= 
	*/
?>
<?php 
	if(isset($_POST["ara"]))
	{
		$_SESSION["ara"]  = $_POST["ara"];
		
	} 
?>
<div class="container">
	<div class="row">
		<div class="col-md-3">
			<table class="table table-hover">
				<thead>
					<tr>
						<th><h3 class="title-bg"><?php echo $diller['siteiciArama']; ?></h3></th>       
					</tr>
				</thead>
				<tbody>
					<?php
						$ara=$_SESSION["ara"];
						$habersql="SELECT COUNT(*) FROM haber WHERE dil='".$dil."' AND onay=1 AND (kisa like '%" . $ara. "%' or uzun like '%"  . $ara. "%')" ;
						$haber = $db->query($habersql, PDO::FETCH_ASSOC);
						$habert = $haber->fetchColumn();
						if($habert>0){?>
						
							<tr>
								<td>
									<span class="fa fa-angle-right"></span>
								<a href="?ara&h=1" class="<?php if(isset($_GET['h']) and  $_GET['h']==1){ echo "category-btn hvr-bounce-to-right"; }?>"><?php echo $diller['haberler']; ?> (<?php echo $habert; ?>)</a>
							</td>  
						</tr>
						<?php 
						}?>
						<?php
							$duyurusql="SELECT COUNT(*) FROM duyuru where dil='".$dil."' AND onay=1 AND (kisa like '%" . $ara. "%' or uzun like '%"  . $ara. "%' )" ;
							$duyuru = $db->query($duyurusql, PDO::FETCH_ASSOC);
							$duyurut = $duyuru->fetchColumn();
							if($duyurut>0){?>
							<tr>
								<td>
									<span class="fa fa-angle-right"></span>
									<a href="?ara&d=1" class="<?php if(isset($_GET['d']) and  $_GET['d']==1){ echo "category-btn hvr-bounce-to-right"; }?>" ><?php echo $diller['duyurular']; ?> (<?php echo $duyurut?>)</a>
									</td>  
								</tr>
								<?php 
								}?>
								<?php
									$etkinliksql="SELECT COUNT(*) FROM etkinlik WHERE dil='".$dil."' AND etkinlik_onay=1 AND (etkinlik_adi like '%" .$ara."%' or etkinlik_aciklama like '%".$ara."%' )" ;
									$etkinlik = $db->query($etkinliksql, PDO::FETCH_ASSOC);
									$etkinlikt = $etkinlik->fetchColumn();
									if($etkinlikt>0){?>
									<tr>
										<td>
											<span class="fa fa-angle-right"></span>
											<a href="?ara&e=1" class="<?php if(isset($_GET['e']) and  $_GET['e']==1){ echo "category-btn hvr-bounce-to-right"; }?>"><?php echo $diller['etkinlik']; ?> (<?php echo $etkinlikt?>)</a>
										</td>  
									</tr>
									<?php 
									}
								?>																				
								<?php
									$iceriksql="SELECT COUNT(*) FROM icerik where dil='".$dil."' AND (aciklama like '%".$ara."%' or detay like '%".$ara."%' )" ;
									$icerik = $db->query($iceriksql, PDO::FETCH_ASSOC);
									$icerikt = $icerik->fetchColumn();
									if($icerikt>0){?>
									<tr>
										<td>
											<span class="fa fa-angle-right"></span>
											<a href="?ara&i=1" class="<?php if(isset($_GET['i']) and  $_GET['i']==1){ echo "category-btn hvr-bounce-to-right"; }?>"><?php echo $diller['icerik']; ?> (<?php echo $icerikt?>)</a>
										</td>  
									</tr>
									<?php 
									}?>
								</tbody>
						</table>
				</div>
				<div class="col-md-9" > 					
					<?php 
						if (isset($_GET["h"])) 
						$h= $_GET["h"];
						else
						$h=0;
						
						if (isset($_GET["d"])) 
						$d= $_GET["d"];
						else
						$d=0;
						
						if (isset($_GET["e"])) 
						$e= $_GET["e"];
						else
						$e=0;
						if (isset($_GET["i"])) 
						$i= $_GET["i"];
						else
						$i=0;
						
						if($habert>0)
						{
							if($h==1 or isset($_POST["ara"]))
							{
							?>
							<h3 class="title-bg"><?php echo $diller['haberler']; ?></h3>
							<table class="tabloGenel table table-hover">
								<thead>
									<tr>
										<th><?php echo $diller['haberler']; ?></th>       
									</tr>
								</thead>
								<tbody>
									<?php
										if($h==0)
										$habersql="SELECT * FROM haber where dil='".$dil."' AND onay=1 AND (kisa like '%" . $ara. "%' or uzun like '%"  . $ara. "%') LIMIT 50 " ;
										else
										$habersql="SELECT * FROM haber where dil='".$dil."' AND onay=1 AND (kisa like '%" . $ara. "%' or uzun like '%"  . $ara. "%') " ;
										
										$query = $db->query($habersql, PDO::FETCH_ASSOC);
										if ( $query->rowCount() ){
											foreach( $query as $row ){
											?>
											<tr>
												<td>
													<span class="fa fa-angle-right"></span>
													<a href="<?php echo linkOlustur("haber",$row['id'],$row['kisa']); ?>" ><?php echo $row['kisa']?>..</a>
												</td>  
											</tr>
											<?php		  		 
											}
										}
									?>  
								</tbody>
							</table>							
							<?php		  		 
							}
						}
						if($duyurut>0)
						{
							if($d==1 or isset($_POST["ara"]))
							{	?> 
							<h3 class="title-bg"><?php echo $diller['duyurular']; ?></h3>
							<table class="tabloGenel table table-hover">
								<thead>
									<tr>
										<th><?php echo $diller['duyurular']; ?></th>       
									</tr>
								</thead>
								<tbody>
									<?php
										if($d==0)
										$habersql="SELECT * FROM duyuru where dil='".$dil."' AND onay=1 AND (kisa like '%" . $ara. "%' or uzun like '%"  . $ara. "%') LIMIT 50 " ;
										else
										$habersql="SELECT * FROM duyuru where dil='".$dil."' AND onay=1 AND (kisa like '%" . $ara. "%' or uzun like '%"  . $ara. "%' )" ;
										
										$query = $db->query($habersql, PDO::FETCH_ASSOC);
										if ( $query->rowCount() ){
											foreach( $query as $row ){
											?>
											<tr>
												<td>
													<span class="fa fa-angle-right"></span>
													<a href="<?php echo linkOlustur("duyuru",$row['id'],$row['kisa']); ?>" ><?php echo $row['kisa']?>...</a>
												</td>  
											</tr>
											<?php		  		 
											}
										}
									?>  
								</tbody>
							</table>
							<?php		  		 
							}
						}
						if($etkinlikt>0)
						{
							if($e==1 or isset($_POST["ara"]))
							{	?> 
							<h3 class="title-bg"><?php echo $diller['etkinlik']; ?></h3>
							<table class="tabloGenel table table-hover">
								<thead>
									<tr>
										<th><?php echo $diller['baslik']; ?></th>       
										<th><?php echo $diller['detay']; ?></th>       
										<th><?php echo $diller['tarih']; ?></th>       
									</tr>
								</thead>
								<tbody>
									<?php
										if($e==0)
										$habersql="SELECT * FROM etkinlik where  dil='".$dil."' AND etkinlik_onay=1 AND (etkinlik_adi like '%" . $ara. "%' or etkinlik_aciklama like '%"  . $ara. "%') LIMIT 50 " ;
										else
										$habersql="SELECT * FROM etkinlik where dil='".$dil."' AND etkinlik_onay=1 AND (etkinlik_adi like '%" . $ara. "%' or etkinlik_aciklama like '%"  . $ara. "%' )" ;
										
										$query = $db->query($habersql, PDO::FETCH_ASSOC);
										if ( $query->rowCount() ){
											foreach( $query as $row ){
											?>
											<tr>
												<td>
													<span class="fa fa-angle-right"></span>
													<a href="<?php echo linkOlustur("etkinlik","",$row['etkinlik_tarih']); ?>" ><?php echo $row['etkinlik_adi']?>...</a>	<?php echo $row['etkinlik_adi']?>
												</td>
												<td><?php echo $row['etkinlik_aciklama']?></td>  
												<td><?php echo $row['etkinlik_tarih']?></td>
											</tr>
											<?php		  		 
											}
										}
									?>  
								</tbody>
							</table>
							<?php		  		 
							}
						}
						if($icerikt>0)
						{
							if($i==1 or isset($_POST["ara"]))
							{	?> 
							<h3 class="title-bg"><?php echo $diller['icerik']; ?></h3>
							<table class="tabloGenel table table-hover">
								<thead>
									<tr>
										<th><?php echo $diller['icerik']; ?></th>       
									</tr>
								</thead>
								<tbody>
									<?php
										if($i==0)
										$habersql="SELECT * FROM icerik where dil='".$dil."' AND (aciklama like '%" . $ara. "%' or detay like '%"  . $ara. "%' ) LIMIT 50 " ;
										else
										$habersql="SELECT * FROM icerik where dil='".$dil."' AND (aciklama like '%" . $ara. "%' or detay like '%"  . $ara. "%' )" ;
										
										$query = $db->query($habersql, PDO::FETCH_ASSOC);
										if ( $query->rowCount() ){
											foreach( $query as $row ){
											?>
											<tr>
												<td>
													<span class="fa fa-angle-right"></span>
													<a href="<?php echo linkOlustur("icerik",$row['id'],$row['aciklama']); ?>" ><?php echo $row['aciklama']?>...</a>
												</td>  
											</tr>
											<?php		  		 
											}
										}
									?>  
								</tbody>
							</table>
							<?php		  		 
							}
						}
					?>
				</div>			
			</div>	
		</div>	
		<link href="admin/kaynak/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet">
		<script src="admin/kaynak/plugins/datatables/jquery.dataTables.min.js"></script>
		<script src="admin/kaynak/plugins/datatables/dataTables.bootstrap.min.js"></script>
		<script type="text/javascript">			
			$(function () {				
				$(".tabloGenel").DataTable({
					"language":{ "url":"admin/kaynak/plugins/datatables/Turkish.json", }
					
				});
			});
		</script>																		