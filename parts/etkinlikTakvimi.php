<?php /*
	-- =============================================
	-- Author:		EKOMURCU
	-- Create date: 27.07.2018
	-- Description:	etkinlik takvimi
	-- Relation:	parts/etkinlikDetay.php sayfasına etkinlik/tarihi formatında sorgu gönderir
	-- ============================================= 
*/?>
<?php
	if(isset($db)){ 
		
		$tarihDizisi="";
		$etkinlikDizisi="";
		$tarihler = $db->query("SELECT etkinlik_adi,etkinlik_tarih FROM etkinlik WHERE etkinlik_onay=1 AND dil='".$dil."'", PDO::FETCH_ASSOC);
		if ( $tarihler->rowCount() ){
			
			foreach( $tarihler as $row ){
				
				$tarihDizisi.="\"".date("n/j/Y",strtotime($row['etkinlik_tarih']))."\",";////tarih formatı ay/gun/yıl şeklinde(5-15-2018 gibi,sıfırlar yok)
				$etkinlikDizisi.="\"".$row['etkinlik_adi']."\",";
				
			}
		}		
		$tarihDizisi=trim($tarihDizisi,",");	//virgulü buda	
	?>
	<!--datepicker -->
	
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/start/jquery-ui.css">
	
	<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			
			$( document ).tooltip({
				position: {
					my: "center bottom-20",
					at: "center top",
					using: function( position, feedback ) {
						$( this ).css( position );
						$( "<div>" )
						.addClass( "arrow" )
						.addClass( feedback.vertical )
						.addClass( feedback.horizontal )
						.appendTo( this );
					}
				}
			});
			
			var Event = function(text, className) {
				this.text = text;
				this.className = className;
			};
			var eventSpecificDays = [<?php echo $tarihDizisi; ?>]; //etkinlik olan tarihler 
			var eventSpecificDaysContent = [<?php echo $etkinlikDizisi; ?>]; //etkinlikler 
			var events = {};
			for (var i = 0; i < eventSpecificDays.length; i++) {
				events[new Date(eventSpecificDays[i])]= new Event(eventSpecificDaysContent[i],"etkinlikCss");
			}
			
			$(document).on("change", "#takvim", function () {
				if($(this).val())
				//etkinlik linki ->parts/etkinlikDetay.php
				location.href="etkinlik/"+($(this).val())
				
			});
			
			$("#takvim").datepicker({
				dayNamesMin: ["Paz","Pts", "Sal", "Çar", "Per", "Cum", "Cts"],
				dayNames: ["Pazar","Pazartesi", "Salı", "Çarşamba", "Perşembe", "Cuma", "Cumartesi"],
				monthNames: ["Ocak", "Subat", "Mart", "Nisan", "Mayıs", "Haziran", "Temmuz", "Ağustos", "Eylül", "Ekim", "Kasım", "Aralık"], 
				monthNamesShort: ["Ocak", "Subat", "Mart", "Nisan", "Mayıs", "Haziran", "Temmuz", "Ağustos", "Eylül", "Ekim", "Kasım", "Aralık"], 		
				prevText: "Önceki",
				nextText: "Sonraki",
				firstDay: 1,
				dateFormat: "dd-mm-yy",
				beforeShowDay: function(date) {
					var event = events[date];
					if (event) {
						return [true, event.className, event.text];
					}
					else {
						return [true, '', ''];
					}
				}
			});
		});
	</script>
	<style type="text/css">
		.ui-tooltip, .arrow:after {
		background: black;
		border: 2px solid white;
		}
		.ui-tooltip {
		padding: 10px 20px;
		color: white;
		border-radius: 20px;
		font: bold 14px "Helvetica Neue", Sans-Serif;
		text-transform: uppercase;
		box-shadow: 0 0 7px black;
		}
		.arrow {
		width: 70px;
		height: 16px;
		overflow: hidden;
		position: absolute;
		left: 50%;
		margin-left: -35px;
		bottom: -16px;
		}
		.arrow.top {
		top: -16px;
		bottom: auto;
		}
		.arrow.left {
		left: 20%;
		}
		.arrow:after {
		content: "";
		position: absolute;
		left: 20px;
		top: -20px;
		width: 25px;
		height: 25px;
		box-shadow: 6px 5px 9px -9px black;
		-webkit-transform: rotate(45deg);
		-ms-transform: rotate(45deg);
		transform: rotate(45deg);
		}
		.arrow.top:after {
		bottom: -20px;
		top: auto;
		}
		
		.etkinlikCss > a
		{
		border-radius: 10px;
		font-size:1.5rem;
		filter:drop-shadow(8px 8px 15px black);
		}
		
		
	</style>
	
	<!--datepicker -->
	
	<div class="sidebar popular">
		<h3 class="title-bg"><?php echo $diller['etkinlikTakvimi']; ?></h3>
		<div id="takvim"></div>
	</div>
<?php } ?>