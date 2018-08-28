<?php
	/*
		-- =============================================
		-- Author		: EKOMURCU
		-- Create date	: 24.07.2018
		-- Description	: anasayfa ust menu(seo uyumlu hale getirildi)
		-- Relation		: linkOlustur() fonk. fonksiyonlar/php/linkOlustur.php
		-- ============================================= 
	*/
?>
<div class="header-bottom-area" id="sticky">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
				<div class="navbar-header">
					<div class="col-sm-8 col-xs-8 padding-null">
						<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Menu</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<?php if($aramaGoster){?>
						<div class="col-sm-4 col-xs-4 hidden-desktop text-right search">
							<a href="#search-mobile" data-toggle="collapse" class="search-icon"><i class="fa fa-search" aria-hidden="true"></i></a>                                
							<div id="search-mobile" class="collapse search-box">								
								<input type="text" class="form-control" placeholder="<?php echo $diller['arama'];?>">								
							</div>
						</div>
					<?php }?>
				</div>
				<div class="main-menu navbar-collapse collapse">
					<nav>
						<ul>
							<li><a href="."><?php echo $diller['anasayfa']; ?></a></li>
							<?php 
								$query = $db->query("SELECT * FROM kat1 where sira>0 and dil=". $dil . " order by sira asc", PDO::FETCH_ASSOC);
								if ( $query->rowCount() ){
									foreach( $query as $row ){
										
										?> <li><a class="has" href="<?php if($row['cocuk']>0) { echo linkOlustur("icerik",$row['cocuk'],$row['ad']); } ?>"><?php echo $row['ad']?>
											<?php 
												$query = $db->query("SELECT * FROM kat2 where kat1=".$row['id']."  and dil=". $dil . "  order by sira asc", PDO::FETCH_ASSOC);
												if ( $query->rowCount() ){
												?>       <i class="fa fa-chevron-down" aria-hidden="true"></i> </a>                      
												<ul class="sub-menu">
													<?php 
														foreach( $query as $row1 ){
															
															
														?>
														
														<?php 
															
															$query = $db->query("SELECT * FROM kat3 where kat1=".$row['id']." and kat2= ".$row1['id']."  and dil=". $dil . "  order by sira asc", PDO::FETCH_ASSOC);
															
															?><li class="has"><a href="<?php if($row1['cocuk']>0){ echo linkOlustur("icerik",$row1['cocuk'],$row1['kat2']); } ?>">
																<?php if ( $query->rowCount() ){
																?> <i class="fa fa-angle-right" aria-hidden="true"></i><?php }?><?php echo $row1['kat2'];?> </a>
																<?php 														
																	$query = $db->query("SELECT * FROM kat3 where kat1=".$row['id']." and kat2= ".$row1['id']."  and dil=". $dil . "  order by sira asc", PDO::FETCH_ASSOC);
																	if ( $query->rowCount() ){
																	?>
																	<ul>
																		<?php 
																			foreach( $query as $row2 ){
																				
																			?>
																			<li><a href="<?php if($row2['cocuk']>0){ echo linkOlustur("icerik",$row2['cocuk'],$row2['kat3']); }
																				
																			?>"><?php echo $row2['kat3']?></a></li><?php 
																			}
																		?>                                                   
																	</ul>
																	<?php 
																	}
																?>
														</li> 
														<?php 
														}
													?>													
												</ul>												
												<?php 
												}
										}
									}								
								?>
							</li>
						</ul>
					</nav>
				</div>
				</div><?php if($aramaGoster){?>
				<div class="col-lg-2 col-md-2 col-sm-hidden col-xs-hidden text-right search hidden-mobile">
					<form action="arama/" method="post" name="formAra">
						
						<a href="#search" data-toggle="collapse"  class="search-icon"><i class="fa fa-search" aria-hidden="true"></i></a>
						<div id="search" class="collapse search-box">
							
							<input type="text" id="arak" name="ara" onChange="formAra.submit();" class="form-control" placeholder="<?php echo $diller['arama'];?>">
						</div>	
					</form>
					
				</div><?php }?>                 
		</div>
	</div>
</div>												