<?php
	/*
		-- =============================================
		-- Author		: EKOMURCU
		-- Create date	: 13.08.2018
		-- Description	: anasayfa tobbRss haber akışı bölümü
		-- ============================================= 
	*/
?>
<script>
	function showRSS(str) {
		if(navigator.onLine)//internete bağlı ise
		{
			
			if (str.length==0) { 
				document.getElementById("rssOutput").innerHTML="";
				return;
			}
			if (window.XMLHttpRequest) {
				// code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp=new XMLHttpRequest();
				} else {  // code for IE6, IE5
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange=function() {
				if (this.readyState==4 && this.status==200) {
					document.getElementById("rssOutput").innerHTML=this.responseText;
				}
			}
			xmlhttp.open("GET","fonksiyonlar/php/rssOkuyucu.php?q="+str,true);
			xmlhttp.send();
		}
		showRSS("manset");
	}
</script>

<ul class="nav nav-tabs">
	<li class="title-bg">Tobb <?php echo $diller['haberler']; ?></li>
	<li class="active"><a data-toggle="tab" href="#tabRss" onclick="showRSS('manset')"><?php echo $diller['manset']; ?></a></li>
	<li><a data-toggle="tab" href="#tabRss" onclick="showRSS('duyuru')"><?php echo $diller['duyurular']; ?></a></li>		
	<li><a data-toggle="tab" href="#tabRss" onclick="showRSS('haber')"><?php echo $diller['haberler']; ?></a></li>
</ul>
<div id="tabRss" class="tab-pane fade in">
	<div id="rssOutput">RSS-haber akışı...</div>
</div>
