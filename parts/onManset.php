<?php
	/*
		-- =============================================
		-- Author		: EKOMURCU
		-- Create date	: 14.08.2018
		-- Description	: onManset popup haber	
		-- ============================================= 
	*/
?>
<?php $onManset=$db->query("SELECT * FROM haber WHERE onay=1 AND manset=2 AND dil=".$dil." ORDER BY id DESC Limit 1", PDO::FETCH_ASSOC); ?>
<?php if ($onManset->rowCount() && empty($_SESSION['onManset'])){
	
	
	foreach($onManset as $row ){ 
	?>
	<script src="js/bootbox.min.js"></script>
	<script type="text/javascript">
	var onMansetPopUp="";
		$(document).ready(function () { 
			onMansetPopUp= bootbox.dialog({
				message:$("#onMansetMesaj").html(),
				title:'<?php echo trim($row['kisa']); ?>',
				onEscape:true, //açıksa(true) Esc tuşu ile modal kapanı
				//backdrop:true, //açıksa(true) sayfa dışı tıklama ile modal kapanır
			});
			onMansetPopUp.modal();		
		});
		function onMansetKapat(){
			onMansetPopUp.modal('hide');
			<?php $_SESSION['onManset']=true; ?>
			//popup kapandığında bir daha gostermez(tarayıcı yeniden açılıncaya kadar) 
			}
	</script>

<!-- onManset bootbox icin html div alanı Start here -->
<div id="onMansetMesaj" style="display:none">
	<?php echo trim($row['uzun']); ?>
	<br>
	<a class="btn btn-info" href="<?php echo linkOlustur("haber",$row['id'],$row['kisa']); ?>" ><?php echo $diller['haberiOku']; ?></a>
	<button class="btn btn-danger" onClick="onMansetKapat()"><?php echo $diller['kapat']; ?></button>
</div>
<!-- onManset bootbox icin html div alanı End here-->
<?php } } ?>