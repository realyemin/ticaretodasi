<?php
	/*
		-- =============================================
		-- Author		: EKOMURCU
		-- Create date	: 24.07.2018
		-- Description	: anasayfa ust menu(seo uyumlu hale getirildi)
		-- Relation		: 
		-- ============================================= 
	*/
?>
	 <div class="header-middle-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="logo-area" >
						 <?php if($logoGoster){?>
                            <a href="." ><img src="tcrt/logo.jpg" alt="logo" class="img-responsive" ></a>
						 <?php }?>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <div class="right-banner">
                          <!--  <img src="images/add/1.png" alt="add image"> -->
						  <?php if($baslikGoster){?>
						  <h1><?php echo $genelAyarlarDB['siteadi']; ?></h1>
						  <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>