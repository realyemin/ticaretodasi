<?php
	/*
		-- =============================================
		-- Author		: EKOMURCU
		-- Create date	: 12.07.2018
		-- Description	: Güncelleme
		-- ============================================= 
	*/
?>
<div align="center">
  <div class="box">
<div class="box-header with-border"><h2><?php echo $diller['yetkilendirme']; ?></h2></div>
		  <div class="box-body">
		    <form action="index.php?islem=kullaniciyetkikaydet" method="post">
		      <table class="table table-hover" style="width: 700px;">
		        <tbody>
		          <tr>
		            <td>Yetki vermek İstediğiniz Modülleri Seçiniz</td>
		            <td>:</td>
		            <td>&nbsp;
		              <label for="a"></label>
		              <select class="form-control"  name="liste[]" size="15" multiple="multiple" id="a">
		                <option value="9">Sayfa Üst Menü</option>
		                <option value="1">Haberler</option>
		                <option value="2">Duyurular</option>
		                <option value="3">Site Genel Ayarları</option>
		                <option value="11">İçerik</option>
		                <option value="12">Anket</option>		                
                        <option value="4">Etkinlik</option>
		                <option value="5">Eğitim</option>
		                <option value="6">Kararlar</option>
		                <option value="7">Toplam Kalite Yönetimi</option>
		                <option value="8">Akreditasyon</option>
		                <option value="10">Stratejik Plan</option>
                    </select></td>
	              </tr>
		          <tr>
		            <td width="233">&nbsp;</td>
		            <td width="10">&nbsp;</td>
		            <td width="357"><input type="hidden" name="kid" id="hiddenField" value="<?php echo $_GET["id"]  ?>" /></td>
	              </tr>
		          <tr>
		            <td>&nbsp;</td>
		            <td>&nbsp;</td>
		            <td><input class="btn btn-info" name="ekle" type="submit" value="<?php echo $diller['devamEt']; ?>" /></td>
	              </tr>
	            </tbody>
	          </table>
		      <br/>
		      </p>
	        </form>
		  </div>
		  <!-- /.box-body -->
  </div>
</div>
