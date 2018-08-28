<?php $anketListDB=$db->query("SELECT * FROM anket_sorular WHERE onay=1 Order By id DESC Limit 5", PDO::FETCH_ASSOC); ?>
<?php if ( $anketListDB->rowCount() ){ ?>
	<div id="anketCarousel" class="carousel carousel-news slide" data-ride="carousel">
		<!-- Wrapper for slides -->
		<!-- Left and right controls -->
		<div class="next-prev-top">
			<div class="row">
				<div class="col-sm-9 col-xs-9">
					<div class="view-area">
						<h3 class="title-bg"><?php echo $diller['anket']; ?></h3>
					</div>
				</div>
				
				<div class="col-sm-3 col-xs-3 ">
					<a class="left news-control" href="#anketCarousel" data-slide="prev">
						<span class="news-arrow-left"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
					</a>
					<a class="right news-control" href="#anketCarousel" data-slide="next">
						<span class="news-arrow-right"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
					</a>
				</div>
			</div>    
		</div>
		<div class="carousel-inner">
			<?php	$a=1;				
				foreach( $anketListDB as $anket ){ 
				?>
				<div class="item <?php if($a==1){ echo "active"; $a++;} ?>">
					<div class="sidebar popular">
						<ul>
							
							<li>
								<a href="?anket=<?php echo base64_encode($anket['id']); ?>" class="category-btn hvr-bounce-to-right"><?php echo $anket['soru']; ?></a>
								<div class="post-image text-center" style="height:200px"><i class="fa fa-pie-chart" style="padding:10px; color:red; font-size:140px"></i></div>
								<div class="content">
									<h4>
										<a href="?anket=<?php echo base64_encode($anket['id']); ?>"><?php echo $anket['soru']; ?></a>
									</h4>
									<span class="date"> 
										<i class="fa fa-calendar-check-o" aria-hidden="true"></i> <?php echo turkcetarih("d F Y, l",$anket['tarih']); ?>
									</span> 
									
								</div>
							</li>
							
						</ul> 
					</div>	
				</div>
				
			<?php } ?>
		</div>
	</div>
<?php } ?>