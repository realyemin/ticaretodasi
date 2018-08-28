
	
			<?php
@$baslik =	$_POST['baslik'];
@$baslik2 =	$_POST['baslik2'];

@$anketid =	$_POST['id'];


if(isset($baslik) )
					{
    $sql = $db->prepare('INSERT INTO anket_sorular1 (soru,anketid, diger) VALUES (?,?,?)');
    $ekle = $sql->execute(array(
 
        $baslik,
		        $anketid,
		$baslik2,
        
        ));
     
    $hata = $sql->errorInfo();
    echo empty($hata[2]) ?  "Başarılı Bir Şekilde Çalıştı." : $hata[2];
								
		 header ("Location:index.php?islem=anket&id=".$anketid); 

				}
				else {
				echo "Kategori Eklenemedi";
				}
				

			?>