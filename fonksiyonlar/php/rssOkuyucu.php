<?php
	/*
		-- =============================================
		-- Author		: EKOMURCU
		-- Create date	: 14.08.2018
		-- Description	: tobb.org.tr'dan rss akışlarını alan script
		-- üç ayrı kategori için veri çeker(haber,duyuru ve manset haberler(resimli))
		-- ============================================= 
	*/
?>
<div class="hot-news">
	
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<?php
				//get the q parameter from URL
				$q=$_GET["q"];
				
				//find out which feed was selected
				if($q=="haber") {								
					$xml=("https://www.tobb.org.tr/Sayfalar/RssFeeder.php?List=Haberler");
					$xmlDoc = new DOMDocument();
					$xmlDoc->load($xml);
					
					//get and output "<item>" elements
					$x=$xmlDoc->getElementsByTagName('item');
				?>
				<ul class="news-post news-post2 related">
					<?php 
						for ($i=0; $i<=5; $i++) {
							$item_title=$x->item($i)->getElementsByTagName('title')
							->item(0)->childNodes->item(0)->nodeValue;
							$item_link=$x->item($i)->getElementsByTagName('link')
							->item(0)->childNodes->item(0)->nodeValue;
							$item_desc=$x->item($i)->getElementsByTagName('description')
							->item(0)->childNodes->item(0)->nodeValue;
						?>					
						<li>																
							<div class="item-post">
								<div class="row">
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 paddimg-right-none">
										<h4><a href="<?php echo $item_link; ?>" target='_blank'><?php echo $item_title; ?></a></h4>
									</div>
									<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
										<span class="date">
											<i class="fa fa-calendar-check-o" aria-hidden="true"></i>
											<?php echo $item_desc; ?>
										</span>
									</div>
								</div>
							</div>																	
						</li>
					<?php } ?>
				</ul>				
				<?php							
				}
				else if($q=="duyuru") {
					$xml=("https://www.tobb.org.tr/Sayfalar/RssFeeder.php?List=DuyurularListesi");
					$xmlDoc = new DOMDocument();
					$xmlDoc->load($xml);
					
					//get and output "<item>" elements
					$x=$xmlDoc->getElementsByTagName('item');
				?>
				<ul class="news-post news-post2 related">
					<?php 
						for ($i=0; $i<=5; $i++) {
							$item_title=$x->item($i)->getElementsByTagName('title')
							->item(0)->childNodes->item(0)->nodeValue;
							$item_link=$x->item($i)->getElementsByTagName('link')
							->item(0)->childNodes->item(0)->nodeValue;
							$item_desc=$x->item($i)->getElementsByTagName('description')
							->item(0)->childNodes->item(0)->nodeValue;
						?>					
						<li>																
							<div class="item-post">
								<div class="row">
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 paddimg-right-none">
										<h4><a href="<?php echo $item_link; ?>" target='_blank'><?php echo $item_title; ?></a></h4>
									</div>
									<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
										<span class="date">
											<i class="fa fa-bullhorn" aria-hidden="true"></i>
											<?php echo $item_desc; ?>
										</span>
									</div>
								</div>
							</div>																	
						</li>
					<?php } ?>
				</ul>				
				<?php							
				}
				else if($q=="manset") {
				?>
				
				<ul class="news-post news-post2 around-news">					
					<?php
						$xml=("https://www.tobb.org.tr/Sayfalar/RssFeeder.php?List=MansetListesi");
						$xmlDoc = new DOMDocument();
						$xmlDoc->load($xml);		
						//get and output "<item>" elements
						$x=$xmlDoc->getElementsByTagName('item');						
						
						for ($i=0; $i<=5; $i++) {
							$item_title=$x->item($i)->getElementsByTagName('title')
							->item(0)->childNodes->item(0)->nodeValue;
							$item_img=$x->item($i)->getElementsByTagName('img')
							->item(0)->childNodes->item(0)->nodeValue;
							$item_link=$x->item($i)->getElementsByTagName('link')
							->item(0)->childNodes->item(0)->nodeValue;
							$item_desc=$x->item($i)->getElementsByTagName('description')
							->item(0)->childNodes->item(0)->nodeValue;																
							
							if($i%2==0) //çiftlerde satır atlaki tablo düzgün oluşsun
							{
							?> 
							<li>
								<div class="row">	
								<?php } ?>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 content">
									<div class="item-post">
										<div class="blog-image">
											<a href="<?php echo $item_link; ?>"><img src="<?php echo $item_img; ?>" alt="" title="<?php echo $item_title; ?>" /></a>
										</div>
										<div class="content">									
											<h4><a href="<?php echo $item_link; ?>"><?php echo $item_title; ?></a></h4>
											<p><?php echo $item_desc; ?></p>
										</div>
									</div>
								</div>																								
							<?php } ?>							
							<?php if($i%2==0) 
								{ ?> 
							</div>
						</li>
					<?php } ?>										
				</ul>					
			<?php } ?>			
		</div>		
	</div>
