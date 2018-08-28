<!--yukle.php-->
<html>
<body>
<?php
$gecici_ad=$_FILES["dosya2"]["tmp_name"];

$kalici_yol_ad="../tcrt/logo.jpg"; // dosya kendi adıyla upload dizinine kaydedilecek

if (move_uploaded_file($gecici_ad,$kalici_yol_ad)) // eğer dosya kaydedilirse
 header ("Location:index.php?islem=baskan"); 
else
   echo "Yükleme başarısız!";
?>
</body>
</html>