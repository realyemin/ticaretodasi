		<?php
        @$uyeid=	$_POST['uyeid'];
$i=$_GET["id"];
			$query = $db->query("SELECT id,adi,suresi,sure_birim FROM egitim where id =$i", PDO::FETCH_ASSOC);
			if ( $query->rowCount() ){
     foreach( $query as $row ){
		  $adi= $row['adi'];
		 $sure= $row['suresi'];
		 $birim= $row['sure_birim'];
		  
	 }}
		
	 for($m = 0; $m < $sure; $m++)
			   { 
	$x="a$m";
			   
			   
@$ad[$m] =	$_POST[$x];
@$d="$d$ad[$m]";

			   }
	
		   $sonuc = $db->exec("UPDATE egitimkatilan SET devam='$d' WHERE uyeid=$uyeid and egitimid=$i");
		   echo $sonuc;
						header("Location:index.php?islem=egitimperdevam&id=$i");
	if($sonuc==1)
			{			echo "basarılı";


				}
			?>