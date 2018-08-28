<?php /*
	-- =============================================
	-- Author:		EKOMURCU
	-- Create date: 26.07.2018 02:20
	-- Description:	Mail aboneliğini Ajax(fonksiyonlar/php/aboneOl.php) ile kaydetmek için yazıldı
	-- ============================================= 
*/?>
<div class="newsletter-info">
	<form>
		<fieldset>
			<div class="form-group">
				<h4><?php echo $diller['haberBulteni']; ?></h4>                                
				<div class="newsletter">
					<input id="adSoyad" class="form-control" placeholder="Adınız Soyadınız" type="text">
					<input id="eposta" class="form-control" placeholder="Eposta adresiniz" type="mail">
					<button class="btn-send" type="button" onClick="kaydet()"><?php echo $diller['aboneOl']; ?></button>
					<p id="mesajGenel">Haber Bültenimize Kaydolarak Her Zaman Bizden Haberdar Olabilirsiniz.</p>
					
				</div> 
			</div>                                       
		</fieldset>
	</form>
</div>
<script type="text/javascript">
	function kaydet()
	{
		if(document.getElementById('adSoyad').value=="")
		{
			document.getElementById('adSoyad').focus();
			return false;
		}
		if(valid_email(document.getElementById('eposta').value))
		{						
			var values = {
				'adSoyad': document.getElementById('adSoyad').value,			
				'eposta': document.getElementById('eposta').value,			
			};
			$.ajax({
				url:'fonksiyonlar/php/aboneOl.php',
				type:'POST',					
				timeout: 30000,
				data:values,
				dataType:'json',
				success:function(data){
					if(data.durum)
					{
						
						$("#mesajGenel").text(data.mesaj);//OK
						document.getElementById('adSoyad').value="";
						document.getElementById('eposta').value="";
					}
					else{
						$("#mesajGenel").text(data.mesaj);//HATA MESAJI
						document.getElementById('eposta').focus();
					}
				},
				
				error:function(ma,ydin)
				{
					if (ma.status === 0) {
						$("#mesajGenel").text('[jquery]Bağlantı yok, ağı doğrulayın.');
						} else if (ma.status == 404) {
						$("#mesajGenel").text('[jquery]Talep edilen sayfa bulunamadı. [404]');
						} else if (ma.status == 500) {
						$("#mesajGenel").text('[jquery]Dahili Sunucu Hatası [500].');
						} else if (ydin === 'parsererror') {
						$("#mesajGenel").text('[jquery]İstenen JSON ayrıştırması başarısız'+ma.responseText);
						} else if (ydin === 'timeout') {
						$("#mesajGenel").text('[jquery]Zaman aşımı hatası.');
						} else if (ydin === 'abort') {
						$("#mesajGenel").text('[jquery]Ajax isteği reddedildi.');
						} else {
						$("#mesajGenel").text('[jquery]Yakalanmamış Hata.\n' + ma.responseText);
					}
				}, 
			});
		}
		else{
			$("#mesajGenel").text('Geçerli bir mail adresi giriniz.');//HATA MESAJI
			document.getElementById('eposta').focus();
		}
	}
	function valid_email(email) {
		return email.match(/^([\w\!\#$\%\&\'\*\+\-\/\=\?\^\`{\|\}\~]+\.)*[\w\!\#$\%\&\'\*\+\-\/\=\?\^\`{\|\}\~]+@((((([a-z0-9]{1}[a-z0-9\-]{0,62}[a-z0-9]{1})|[a-z])\.)+[a-z]{2,6})|(\d{1,3}\.){3}\d{1,3}(\:\d{1,5})?)$/i);
	}
	
</script>