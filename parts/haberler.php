<?php
	/*
		-- =============================================
		-- Author		: EKOMURCU
		-- Create date	: 24.07.2018
		-- Description	: anasayfa haber bölümü
		-- ============================================= 
	*/
?>
<ul class="nav nav-tabs">
	<li class="title-bg"><?php echo $diller['haberler']; ?></li>
	<li class="active"><a data-toggle="tab" href="#tab1"><?php echo $diller['enCokOkunan']; ?></a></li>	
	<li><a data-toggle="tab" href="#tab2"><?php echo $diller['sonHaberler']; ?></a></li>
	<li><a href="haberler/"><?php echo $diller['tumu']; ?></a></li>
</ul>
<div class="tab-content">
	<!-- Hit(en cok okunan haberler) Start -->
	<div id="tab1" class="tab-pane fade in active">
		<div class="tab-top-content">
			<div class="row">
				<?php $hitHaber=$db->query("SELECT max(hit) as hitHaberSayisi,kaynakID FROM hit WHERE hit= (SELECT max(hit) from hit)")->fetch(); ?>				
				<?php $query = $db->query("SELECT * FROM haber WHERE dil=".$dil." AND onay=1  AND id =".$hitHaber['kaynakID']."", PDO::FETCH_ASSOC);
					//dil :kullanıcının seçtiği dil id
					//onay 1:aktif haber
					//manset 0:manset yok,1 düz manset, 2 ön manset(popup)
					if ( $query->rowCount() ){						
						foreach( $query as $row ){
						?>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 padding-right-none" >
							<?php $yol="tcrt/haber/haber".$row['id']."_1.jpg";
								if(file_exists($yol)){ ?> 
								<a href="<?php echo linkOlustur("haber",$row['id'],$row['kisa']); ?>" >							
									<img style="padding:1px;" src="<?php echo $yol; ?>" alt="<?php echo $row['kisa']; ?>">
								</a><?php } ?>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 last-col">
							<span class="date"><a href="<?php echo linkOlustur("haber",$row['id'],$row['kisa']); ?>"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> <?php echo turkcetarih("d F Y, l", $row['tarih']); ?> </a></span> 
							<span class="comment"><a href="<?php echo linkOlustur("haber",$row['id'],$row['kisa']); ?>" title="<?php echo $diller['okunmaSayisi']; ?>"><i class="fa fa-eye" aria-hidden="true"></i><?php echo $hitHaber['hitHaberSayisi']; ?></a></span>
							<h3><a href="<?php echo linkOlustur("haber",$row['id'],$row['kisa']); ?>"><?php echo yaziBol($row['uzun'],60,4); ?></a></h3>
							<p><?php echo $row['kisa']; ?></p>
							<a href="<?php echo linkOlustur("haber",$row['id'],$row['kisa']); ?>" class="read-more hvr-bounce-to-right"><?php echo $diller['haberiOku']; ?></a>
						</div>
					<?php }} ?>
			</div>
		</div>
		<div class="tab-bottom-content">
			<div class="row">
				<?php $hitler=$db->query("SELECT hit,kaynakID FROM hit WHERE kaynakAd ='haber' ORDER BY hit DESC LIMIT 4", PDO::FETCH_ASSOC); ?>
				<?php if ( $hitler->rowCount() ){ foreach($hitler as $hit){ $hitHaberIDleri[]=$hit['kaynakID']; } }?>
				<?php $hitIDler=implode(",",$hitHaberIDleri);
					//en çok hit alan haber idleri ile sorgu için
					?>
				<?php $query = $db->query("SELECT * FROM haber WHERE dil=".$dil." AND onay=1 AND id IN ($hitIDler) ORDER BY FIELD (id,$hitIDler)", PDO::FETCH_ASSOC);
					//dil :kullanıcının seçitiği dil id
					//onay 1:aktif haber
					//mnaset 0:maset yok,1 düz manşet, 2 ön manset(popup)
					if ( $query->rowCount() ){						
						foreach( $query as $row ){
						?>
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 tab-area">
							<div class="col-sm-12 col-xs-3 img-tab">
								<?php $yol="tcrt/haber/haber".$row['id']."_1.jpg";
									if(file_exists($yol)){ ?> 
									<a href="<?php echo linkOlustur("haber",$row['id'],$row['kisa']); ?>" >							
										<img style="padding:10px; border-radius:20px;" src="<?php echo $yol; ?>" alt="<?php echo $row['kisa']; ?>">
									</a><?php } ?>
							</div>
							<div class="col-sm-12 col-xs-9 img-content">
								<span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"> </i><?php echo turkcetarih("d F Y, l", $row['tarih']); ?></span>
								<span class="comment"><i class="fa fa-eye" aria-hidden="true"></i><?php echo hitGoster('haber',$row['id']); ?></span>								
								<h4><a href="<?php echo linkOlustur("haber",$row['id'],$row['kisa']); ?>" class="more-btn" data-toggle="tooltip" title="<?php echo $row['kisa']; ?>" > <?php echo yaziBol($row['kisa'],60,4); ?></a></h4>
							</div>
						</div>												
					<?php } } ?>	
					
			</div>
		</div>
	</div>
	<!-- Hit(en cok okunan haberler) End -->
	
	<!-- Son Haberler Start -->
	<div id="tab2" class="tab-pane fade">
		<div class="tab-top-content">
			<div class="row">
				
				<?php $query = $db->query("SELECT * FROM haber WHERE dil=".$dil." AND onay=1 ORDER BY id DESC LIMIT 1", PDO::FETCH_ASSOC);
					//dil :kullanıcının seçtiği dil id
					//onay 1:aktif haber
					//manset 0:manset yok,1 düz manset, 2 ön manset(popup)
					if ( $query->rowCount() ){						
						foreach( $query as $row ){
						?>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 padding-right-none" >
							<?php $yol="tcrt/haber/haber".$row['id']."_1.jpg";
								if(file_exists($yol)){ ?> 
								<a href="<?php echo linkOlustur("haber",$row['id'],$row['kisa']); ?>" >							
									<img style="padding:1px;" src="<?php echo $yol; ?>" alt="<?php echo $row['kisa']; ?>">
								</a><?php } ?>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 last-col">
							<span class="date"><a href="<?php echo linkOlustur("haber",$row['id'],$row['kisa']); ?>"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> <?php echo turkcetarih("d F Y, l", $row['tarih']); ?> </a></span> 
							
							<span class="comment"><a href="<?php echo linkOlustur("haber",$row['id'],$row['kisa']); ?>" title="<?php echo $diller['okunmaSayisi']; ?>"><i class="fa fa-eye" aria-hidden="true"></i><?php echo hitGoster('haber',$row['id']); ?> </a></span>
							<h3><a href="<?php echo linkOlustur("haber",$row['id'],$row['kisa']); ?>"><?php echo yaziBol($row['uzun'],60,4); ?></a></h3>
							<p><?php echo $row['kisa']; ?></p>
							<a href="<?php echo linkOlustur("haber",$row['id'],$row['kisa']); ?>" class="read-more hvr-bounce-to-right"><?php echo $diller['haberiOku']; ?></a>
						</div>
					<?php }}?>
			</div>
		</div>
		<div class="tab-bottom-content fadeInUp">
			<div class="row">
				<?php $query = $db->query("SELECT * FROM haber WHERE dil=".$dil." AND onay=1 AND id <>(SELECT max(id) FROM haber) Order BY id DESC LIMIT 4", PDO::FETCH_ASSOC);
					//dil :kullanıcının seçitiği dil id
					//onay 1:aktif haber
					//mnaset 0:maset yok,1 düz manşet, 2 ön manset(popup)
					if ( $query->rowCount() ){						
						foreach( $query as $row ){
						?>
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 tab-area">
							<div class="col-sm-12 col-xs-3 img-tab">
								<?php $yol="tcrt/haber/haber".$row['id']."_1.jpg";
									if(file_exists($yol)){ ?> 
									<a href="<?php echo linkOlustur("haber",$row['id'],$row['kisa']); ?>" >							
										<img style="padding:10px; border-radius:20px;" src="<?php echo $yol; ?>" alt="<?php echo $row['kisa']; ?>">
									</a><?php } ?>
							</div>
							<div class="col-sm-12 col-xs-9 img-content">
								<span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"> </i><?php echo turkcetarih("d F Y, l", $row['tarih']); ?></span>
								<span class="comment"><i class="fa fa-eye" aria-hidden="true"></i><?php echo hitGoster('haber',$row['id']); ?></span>
								<h4><a href="<?php echo linkOlustur("haber",$row['id'],$row['kisa']); ?>" class="more-btn" data-toggle="tooltip" title="<?php echo $row['kisa']; ?>" > <?php echo yaziBol($row['kisa'],60,4); ?>	</a></h4>
							</div>
						</div>												
					<?php  }}
				?>						
			</div>
		</div>
	</div>
	<!-- Son Haberler End -->
</div>				