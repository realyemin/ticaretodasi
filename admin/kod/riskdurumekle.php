<html>
<head>
<script src="ckeditor/ckeditor.js" type="text/javascript"></script>
</head>
<body>
<div class="box box-warning">
  <div class="box-header with-border">Risk Durumu  Ekleme</div>
  <!-- /.box-header -->
  <div class="box-body">
    <form action="index.php?islem=riskdurumkaydet" method="post">
      <table width="642" border="0" cellpadding="0" cellspacing="0" >
        <tbody>
          <tr>
            <td height="33">Sürec </td>
            <td>:</td>
            <td>
              <select name="surec" id="surec">
                <option value="Süreç Girdileri">Süreç Girdileri</option>
                <option value="Sürec Kaynağı">Sürec Kaynağı</option>
                <option value="Süreç Çıktıları">Süreç Çıktıları</option>
            </select></td>
          </tr>
          <tr>
            <td width="242">Tanım</td>
            <td width="10"> :</td>
            <td width="396"><input name="tanim" width="150" type="text" class="auto" /></td>
          </tr>
          <tr>
            <td><p>Riskler</p></td>
            <td>:</td>
            <td><input name="riskler" width="150" type="text" />
              <span class="form-group">
              <div class="form-group"></div>
            </span></td>
          </tr>
          <tr>
            <td>Risk Olasılık Gerçekleşme( 3 - 1 )</td>
            <td>:</td>
            <td><input name="olasilik1" width="50" type="text" /></td>
          </tr>
          <tr>
            <td>Risk Olasılık sıklık(5-4-3-2-1)</td>
            <td>:</td>
            <td><input name="olasilik2" width="50" type="text" /></td>
          </tr>
          <tr>
            <td>Risk Etkisi(5-3-1)</td>
            <td>:</td>
            <td><input name="etki" width="50" type="text" /></td>
          </tr>
          <tr>
            <td>Mevcut Önlem(3-2-1)</td>
            <td>:</td>
            <td><input name="mevcut" width="150" type="text" /></td>
          </tr>
          <tr>
            <td>Yapılacak Faliyet(Alınacak Önlem)</td>
            <td>:</td>
            <td>
            <textarea name="onlem" id="textarea" cols="45" rows="5"></textarea></td>
          </tr>
        </tbody>
      </table>
      <p>
        <input type="hidden" name="isoid" value="<?php echo $_GET["id"]; ?>" id="hiddenField">
      </p>
      <p>
        <input type="hidden" name="risk" value="<?php echo $_GET["risk"]; ?>" id="hiddenField2">
        <br/>
        <input height="30px" width="150px" name="ekle" type="submit" value="Ekle" /></p></form>
   
  </div>
  <!-- /.box-body -->
</div>
<table width="100%" border="1" cellspacing="5" cellpadding="5">
  <tbody>
    <tr>
      <td><p><strong><img src="../../img/help.png" width="51" height="46" alt=""/>DEĞERLENDİRME SİSTEMİ</strong><strong></strong></p>
        <p><strong>                                                        </strong>                                                                                                   <br>
         &nbsp;&nbsp; Risk daha önce gerçekleşmiş =3 puan , gerçekleşmemiş=  1 puan                                                  <br>
         &nbsp;&nbsp; Faaliyet Sıklığı : Günlük=5 puan,Haftalık=4  Puan,aylık=3 puan,altı aylık=2 , yılda bir=1 puan<br>
          <br>
          <strong>&nbsp;&nbsp; ETKİ                                               </strong>                                                                                                                         <br>
         &nbsp;&nbsp; Hedefe Doğru Etki=5 puan,Dolaylı Etki=3 Puan,Etkisi  yok=1 Puan                                                 <br>
          <br>
          <strong>&nbsp;&nbsp; RİSK SEVİYESİ                               </strong>                                                                                                                      <br>
         &nbsp;&nbsp; 1-25 Puan Düşük Risk , 26-50 Puan=Orta Risk ,51-75  Puan=Yüksek Risk                                      <br>
          <br>
          <strong>&nbsp;&nbsp; MEVCUT ÖNLEM                         </strong>                                                                                                                      <br>
         &nbsp;&nbsp; Mevcut Önlemin ,tehlikenin olsaılığının ve/veya  etkinin azaltılmasına yeterli = 3 puan         <br>
         &nbsp;&nbsp; Mevcut Önlemin ,tehlikenin olsaılığının ve/veya  etkinin azaltılmasına kısmen yeterli = 2 puan<br>
     &nbsp;&nbsp; Mevcut Önlemin ,tehlikenin olsaılığının ve/veya  etkinin azaltılmasına yeterli değilse = 1 puan</p></td>
    </tr>
  </tbody>
</table>
</body>
            	</html> 