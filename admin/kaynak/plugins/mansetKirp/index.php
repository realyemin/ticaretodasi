<?php
	/*
		-- =============================================
		-- Author		: EKOMURCU
		-- Create date	: 10.07.2018
		-- Description	: Yeniden Yazıldı
		-- ============================================= 
	*/
?>
<script src="kaynak/plugins/mansetKirp/scripts/croppie.js"></script>	
<link rel="stylesheet" href="kaynak/plugins/mansetKirp/css/croppie.css" />
<style>
	.modal-dialog {
	width: 100%;
	height: 100%;
	margin: 0;
	padding: 0;
	}
	
	.modal-content {
	height: auto;
	min-height: 100%;
	border-radius: 0;
	}
</style>
			<br />
			<br />
<div>
	<div class="box">
		<div class="box-header with-border" align="center"><h2>
						<?php 
					switch($_GET['islem'])
					{
						case 'haberresim':
						$dosya="/tcrt/haber/haber".$_GET['id']."_1.jpg";
						$yol="http://".$_SERVER['HTTP_HOST'].$dosya;
						echo "Haber";
						break;
						case 'duyururesim':
						$dosya="/tcrt/duyuru/duyuru".$_GET['id']."_1.jpg";
						$yol="http://".$_SERVER['HTTP_HOST'].$dosya;
						echo "Duyuru";
						break;
					}?> için manşet resmi ekleyin
			</h2></div>

			<div class="panel panel-default">
				<div class="panel-heading">Yüklenecek resmi seçin</div>
				<div class="panel-body" >
					<input type="file" name="upload_image" id="upload_image" accept="image/*"/>
					
					<br />
					<?php 
						$kontrol="../".$dosya;
						if(file_exists($kontrol)){
						?>
						<div id="uploaded_image" style="border:dashed red 1px">
							<img id="uploaded_image" src="<?php echo $yol; ?>">
							<button id="delete_image" class="btn btn-danger"><?php echo $diller['sil']; ?></button>
						</div>							
						<?php }else{ ?>
						<div id="uploaded_image" style="border:dashed red 1px"></div>
						
					<?php } ?>																			 					
				</div>
			</div>
		</div>
		
		<div id="uploadimageModal" class="modal" role="dialog" >
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title"><?php echo $diller['resimYukle']; ?> </h4>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-md-8" style="padding:5px">
								<div id="image_demo"></div>
							</div>
							<div class="col-md-4">
								<ul>
									<li>Resminizi en uygun şekilde çerçeve içine hızalayın</li>
									<li>Sonra kırp ve yükle diyerek sonlandırın</li>
								</ul>
								
								<button class="btn btn-success crop_image"><?php echo $diller['resimYukle']; ?></button>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<div class="col-md-4">
							<br />
							<br />
							<br/>
							
						</div><button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $diller['kapat']; ?></button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>  
		$(document).ready(function(){
			
			$image_crop = $('#image_demo').croppie({
			 enableOrientation: true,
				viewport: {
					width:800,
					height:400,
					type:'square' //circle
				},
				boundary:{
					width:850,
					height:450 //verilebilir
				}
				});
				
				$('#upload_image').on('change', function(){					
					var fileName = document.getElementById("upload_image").value;
					var idxDot = fileName.lastIndexOf(".") + 1;
					var extFile = fileName.substr(idxDot, fileName.length).toLowerCase();
					if (extFile=="jpg" || extFile=="jpeg" || extFile=="png"){     				
						var reader = new FileReader();
						reader.onload = function (event) {
							$image_crop.croppie('bind', {
								url: event.target.result
								}).then(function(){
								console.log('jQuery bind complete');
							});
							document.getElementById("upload_image").value="";
						}
						reader.readAsDataURL(this.files[0]);
						$('#uploadimageModal').modal('show');
						
					}
					else{
						alert("Desyeklenmeyen türde dosya yüklemeye çalıştınız.");
						document.getElementById("upload_image").value="";
						return false;
					}
				});
				
				$('.crop_image').click(function(event){
					$image_crop.croppie('result', {
						type: 'canvas',
						size: 'viewport'
						}).then(function(response){
						var values = {
							'id':  <?php echo $_GET['id']; //haber,duyuru vs id ?>,				
							'resimAdi':'<?php if($_GET['islem']=="haberresim"){ echo "haber";}
							else if($_GET['islem']=="duyururesim"){ echo "duyuru";} ?>',
							'image': response,
						};
						$.ajax({
							url:"kaynak/plugins/mansetKirp/upload.php",
							type: "POST",
							data:values,
							success:function(data)
							{
								window.location.reload();
								$('#uploadimageModal').modal('hide');
								$('#uploaded_image').html(data);					
								window.location.href="<?php echo $_SERVER["PHP_SELF"]."?".$_SERVER["QUERY_STRING"];?>";
							}
						});
					})
				});
				$('#delete_image').click(function(event){
					
					var values = {
						'id':  <?php echo $_GET['id']; //haber,duyuru vs id ?>,				
						'resimAdi':'<?php if($_GET['islem']=="haberresim"){ echo "haber";}
						else if($_GET['islem']=="duyururesim"){ echo "duyuru";} ?>',
						'sil': true,
					};
					$.ajax({
						url:"kaynak/plugins/mansetKirp/upload.php",
						type: "POST",
						data:values,
						success:function(data)
						{					
							$('#uploaded_image').html("<div>"+data+"</div>");
							$('#uploaded_image').focus();
							window.location.href="<?php echo $_SERVER["PHP_SELF"]."?".$_SERVER["QUERY_STRING"];?>";
						},				
					});
					
				});
			});  
		</script>					