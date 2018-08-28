<a name="iletisim" ></a>
<div class="single-footer footer-two">
	<h3><?php echo $diller['iletisim']; ?></h3>
	<nav>
		<ul>
			<li>
				<div class="col-lg-5 col-md-5 col-sm-5 col-xs-4">
					<i class="fa fa-phone"></i><?php echo $diller['tel']; ?> :
					<br>
					<i class="fa fa-fax"></i><?php echo $diller['fax']; ?> :
					<br>
					<i class="fa fa-envelope"></i><?php echo $diller['mail']; ?> :
				</div>
				<div class="col-lg-7 col-md-7 col-sm-7 col-xs-8">
					<p><?php echo $genelAyarlarDB['tel']; ?></p>
					<p><?php echo $genelAyarlarDB['fax']; ?></p>					
					<p><a href="mailto:<?php echo $genelAyarlarDB['mail']; ?>"><?php echo $genelAyarlarDB['mail']; ?></a></p>					
				</div>
			</li>
			<li>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<i class="fa fa-map-marker"></i><?php echo $genelAyarlarDB['adres']; ?>
				</div>
			</li>
			
		</ul>
	</nav>
</div>