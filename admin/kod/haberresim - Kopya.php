
<div align="center">
  <div class="box">
    <div class="box-header">
		    <h3 class="box-title">Haber Resimleri</h3>
    </div>
		  <!-- /.box-header -->
		  <div class="box-body">
          
          <table width="900" border="0" cellpadding="0" class="table table-bordered table-hover" cellspacing="0">
			<tbody>
				<tr>
		    <p><?php
									$id = $_GET["id"];

 for($k=1; $k<16; $k++)
			{

			$resim="../tcrt/haber/haber".$id."_". $k.".jpg";
			

			if (file_exists($resim))
			{
			?>
			<td>
            <?php if($k==1) echo "Bu Resim Manşet Resmidir"; ?><img src="<?php echo $resim; ?>" width="200">
            <p></p>
            <form action="index<?php if($dil!=1) echo "2"; ?>.php?islem=haberresimsil&id=<?php echo $id;?>&resimid=<?php echo $k;	?>" method="post">
                          <button type="submit"  class="btn btn-block btn-primary btn-xs">Sil</button>
                        </form>
            
            
             </td>
				
            <?php 
			}
			else
			{
			?>    
                
              <td><?php if($k==1) echo "Bu Resim Manşet Resmidir"; ?><form name="yukleme" method="post" action="index<?php if($dil!=1) echo "2"; ?>.php?islem=yukle&resimid=<?php echo $k; ?>&id=<?php echo $id;?>" enctype="multipart/form-data">
      <input type="file" name="dosya"><br>
      <input type="submit" name="yukle" value="Yükle">
   </form> </td>
                <?php
			}
				if($k%4==0)
				{
					?>
                    </tr>
                    <tr>
                    
                    <?php
					}
									
			}
			
			
			
			?></tr><tr>
            <td colspan="5"></td></tr></table>&nbsp;</p>
		    <p>&nbsp;</p>
		  </div>
		  <!-- /.box-body -->
  </div>
</div>
