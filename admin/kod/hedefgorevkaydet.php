
	
			<?php
@$mesaj =	"HİZMET GERÇEKLEŞTİRME PROSESİ HEDEF İZLEME TABLOSU  kayıt girişi yapmanız beklenmektedir.";
@$kid =	$_POST['kat1'];
@$gorevno =	"1";
@$okundu =	"0";
@$gorevid =	$_POST['id'];
 @$risk=	$_POST['risk'];
 

    $sql = $db->prepare('INSERT INTO mesaj (mesaj,kid,gorevno,gorevid,okundu) VALUES (?,?,?,?,?)');
    $ekle = $sql->execute(array(
 
        $mesaj,
		$kid,
		$gorevno,
		$gorevid,
		$okundu,

        
        ));
     
    $hata = $sql->errorInfo();
    echo empty($hata[2]) ?  "Başarılı Bir Şekilde Çalıştı." : $hata[2];
   header ("Location:index.php?islem=hedef&id=".$risk); 

			?>