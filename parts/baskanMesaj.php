<!-- $genelAyarlarDB indexte -->
<div class="recent-comments separator-large">
	<div id="comments-Carousel" class="carousel carousel-comments slide" data-ride="carousel">
		<!-- Wrapper for slides -->
		<!-- Left and right controls -->
		<div class="next-prev-top">
			<div class="row">
				<div class="col-sm-9 col-xs-9">
					<div class="view-area">
						<h3 class="title-bg"><?php echo $genelAyarlarDB['tabbaslik1']; ?></h3>
					</div>
				</div>
				<div class="col-sm-3 col-xs-3 next-prev">
					<a class="left news-control" href="#comments-Carousel" data-slide="prev">
						<span class="news-arrow-left"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
					</a>
					<a class="right news-control" href="#comments-Carousel" data-slide="next">
						<span class="news-arrow-right"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
					</a>
				</div>
			</div>    
		</div>
		<div class="carousel-inner">
			<div class="item active">
				<div class="dsc">
					<p><img src="tcrt/baskan.jpg" class="img-responsive" style=" border-radius:50%; border:dashed black 3px" >
						<?php echo $genelAyarlarDB['baskanmesaj']; ?>
					</div>
				</div>
				<div class="item"><?php echo $genelAyarlarDB['tabbaslik2']; ?>
					<div class="dsc">
						<p><?php echo $genelAyarlarDB['vizyon']; ?></p>
						
					</div>
				</div>
				<div class="item"><?php echo $genelAyarlarDB['tabbaslik3']; ?>
					<div class="dsc">
						<p><?php echo $genelAyarlarDB['misyon']; ?></p>
						
					</div>
				</div>
			</div>
		</div>
	</div> 	