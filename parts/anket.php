<?php
	/*
		-- =============================================
		-- Author		: EKOMURCU
		-- Create date	: 14.08.2018
		-- Description	: anket	
		-- ============================================= 
	*/
?>
<style type="text/css">
	.bootbox.modal
	{
	z-index:99999;
	}
	
	.switch {
	position: relative;
	display: inline-block;
	width: 60px;
	height: 34px;
	}
	
	.switch input {display:none;}
	
	.slider {
	position: absolute;
	cursor: pointer;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	background-color: #ccc;
	-webkit-transition: .4s;
	transition: .4s;
	}
	
	.slider:before {
	position: absolute;
	content: "";
	height: 26px;
	width: 26px;
	left: 4px;
	bottom: 4px;
	background-color: white;
	-webkit-transition: .4s;
	transition: .4s;
	}
	
	input:checked + .slider {
	background-color: #2196F3;
	}
	
	input:focus + .slider {
	box-shadow: 0 0 1px #2196F3;
	}
	
	input:checked + .slider:before {
	-webkit-transform: translateX(26px);
	-ms-transform: translateX(26px);
	transform: translateX(26px);
	}
	
	/* Rounded sliders */
	.slider.round {
	border-radius: 34px;
	}
	
	.slider.round:before {
	border-radius: 50%;
	}
</style>
<div class="single-blog-page-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 tab-home">				
				<?php
					if(isset($_GET["anket"]))
					{
						$id= base64_decode($_GET["anket"]);				
						$query = $db->query("SELECT * FROM anket_sorular where id=".$id)->fetch();
						if ( $query ){
							
						?>
						<div class="view-area">
							<h3 class="title-bg"><?php	echo $query['soru']; ?></h3>
						</div>																		
					<?php }	?>
					<div class="well">
						<form action="#" method="post" name="anket_frm" id="anket_frm">
							<?php if($query['kimlik']){ ?>
								<p><?php echo $diller['adSoyad']; ?> 
									<input required name="ad" id="ad" class="form-control" type="text" />
								</p>
								<?php }else{ ?>
								<input name="ad" id="ad" value="<?php echo GetIp(); ?>" type="hidden" />
							<?php } ?>
							<input type="hidden" name="anket_id" id="anket_id" value="<?php echo $id; ?>" />
							<?php				 			
								$query = $db->query("SELECT * FROM anket_sorular1 where anketid=".$id, PDO::FETCH_ASSOC);
								if($query->rowCount()){
									foreach( $query as $row ){
										
									?>
									<table class="table table-hover" >
										<tbody>
											<tr>
												<th width="257"><?php echo $row['soru']?></th>
											</tr>		        
											<tr>
												<td><p>&nbsp;</p>
													<table width="554" class="table table-hover">
														<?php
															
															$sayac=0; 
															$query = $db->query("SELECT * FROM anket_secenekler where anketid=".$id." and soruid=".$row['id'] , PDO::FETCH_ASSOC);
															if($query->rowCount()){
																foreach($query as $row1){		  
																?>
																<tr>
																	<td width="544">
																	<label class="switch">
																	<input type="radio" <?php if($sayac==0){ echo "checked"; $sayac++;}  ?> name="<?php echo $row['id']?>" value="<?php echo $row1['id']?>" id="<?php echo $row['id']?>" />
																	 <span class="slider round"></span>
																	</label> <span style="text-transform:uppercase"><?php echo $row1['soru']; ?></span>
																	</td>
																</tr>
																<?php		  		  
																}
															}
														?>                    
													</table>                
													<?php 
														if($row['diger']!="" )
														{
															echo $row['diger'];
														?>
														
														<input name="soru<?php echo $row['id']  ?>" type="text" />                              
														<?php	 									 				 
														}				 
													?>
												</td>
											</tr>		
										</tbody>
									</table>		
									<p>&nbsp;</p>
									<?php		  		 
									}
								}
							?> 
							<input type="hidden" name="ip"id="ip" value="<?php echo GetIp(); ?>" />
							<button type="button" class="btn btn-success form-control"  name="n" id="n" >Gönder</button>			
						</form>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 paddimg-left-none sidebar-latest">										
					<?php include("parts/anketList.php"); ?>										
				</div>
			</div>
		</div>
	</div>	
	
	<script src="js/bootbox.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function () {  
			$('.btn').on('click', function () {  
				var ad=document.getElementById('ad');
				if(ad.value=="" || ad.value.length <3)
				{
					bootbox.alert({title:"Alanları doldurun", message:"Anketi oylamak için bilgilerinizi giriniz"});
					ad.focus();
					ad.style.backgroundColor="maroon";
					ad.style.color="white";
					return false;
				}
				bootbox.confirm({
					title: "Görüşleriniz Bizim İçin Önemli",
					message: "Anket bilgilerinizi onaylıyor musunuz?",
					buttons: {
						cancel: {
							label: '<i class="fa fa-times"></i> Vazgeç'
						},
						confirm: {
							label: '<i class="fa fa-check"></i> Onayla'
						}
						},callback: function (res) {
						if(res)
						{
							
							//$("#anket_frm").submit();
							
							$.ajax({
								url:'parts/anketKaydet.php',
								type:'POST',					
								timeout: 30000,
								data:$("#anket_frm input").serialize(),
								dataType:'json',
								success:function(data){
									if(data.durum)
									{																														
										bootbox.alert({
											title:"Anket",
											message: "Anketimize Katıldığınız İçin Teşekkür Ederiz",
											callback: function () {
												
												
												window.location.href="index.php";
											}
										});		
										
									}
									else
									{
										bootbox.alert({
											title:"Üzgünüz!!",
											message: ""+data.mesaj																					
										});	
									}
								},
								
								error:function(ma,ydin)
								{
									if (ma.status === 0) {
										bootbox.alert('[jquery]Bağlantı yok, ağı doğrulayın.');
										} else if (ma.status == 404) {
										bootbox.alert('[jquery]Talep edilen sayfa bulunamadı. [404]');
										} else if (ma.status == 500) {
										bootbox.alert('[jquery]Dahili Sunucu Hatası [500].');
										} else if (ydin === 'parsererror') {
										bootbox.alert('[jquery]İstenen JSON ayrıştırması başarısız'+ma.responseText);
										} else if (ydin === 'timeout') {
										bootbox.alert('[jquery]Zaman aşımı hatası.');
										} else if (ydin === 'abort') {
										bootbox.alert('[jquery]Ajax isteği reddedildi.');
										} else {
										bootbox.alert('[jquery]Yakalanmamış Hata.\n' + ma.responseText);
									}
								}, 
							});
							
						}
					}
				});
			});  
			
		});  
	</script>      
	<?php
	}	
?>							