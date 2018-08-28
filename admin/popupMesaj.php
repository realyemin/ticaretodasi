<?php
	/*
		-- =============================================
		-- Author		: EKOMURCU
		-- Create date	: 24.07.2018
		-- Description	: genel hata ve uyarı mesajları için (bootstrap modal ile)yazıldı
		-- ============================================= 
	*/
?>
<?php 
$mesaj=array();
if(isset($_GET['ok']))
{
	//Başarılı işlem mesajları
	$mesaj[1]="Yeni Ayarlar Kaydedildi";
	$mesaj[2]="Kayıtlar Güncelleştirildi.";
	$mesaj[3]="Kayıtlar Silindi.";
}
if(isset($_GET['hata']))
{
	//Hatalı işlem mesajları
	$mesaj[1]="Üzgünüz.İşleminiz gerçekleştirilemedi.";	
	$mesaj[2]="Eklemeye çalıştığınız kayıt zaten mevcut.";
}
?>
<?php
	if(isset($_GET["ok"]))
	{
	?>
<script>
//otomatik modal tetikleyicisi
    $(document).ready(function(){
$('#my-modal').modal('show');
});
</script>
        <div id="my-modal" class="modal fade" role="dialog" >
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title alert alert-success"><?php echo $diller['basarili']; ?></h4>
        </div>
        <div class="modal-body">
          <p><strong><?php echo $mesaj[$_GET['ok']]; ?></strong></p>
        </div>
        <div class="modal-footer">
           <button type="button" class="btn btn-success" data-dismiss="modal"><?php echo $diller['kapat']; ?></button>
        </div>
      </div>
    </div>
</div>
<?php
	}
?>
<?php
	if(isset($_GET["hata"]))
	{
	?>
<script>
//otomatik modal tetikleyicisi
    $(document).ready(function(){
$('#my-modal').modal('show');
});
</script>
        <div id="my-modal" class="modal fade" role="dialog" >
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title alert alert-danger"><?php echo $diller['basarisiz']; ?></h4>
        </div>
        <div class="modal-body">
          <p><strong><?php echo $mesaj[$_GET['hata']]; ?></strong></p>
        </div>
        <div class="modal-footer">
           <button type="button" class="btn btn-danger" data-dismiss="modal"><?php echo $diller['kapat']; ?></button>
        </div>
      </div>
    </div>
</div>
<?php
	}
?>