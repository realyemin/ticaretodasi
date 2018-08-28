<?php 
	include("../Connections/baglantim.php");
	if(isset($_POST["anket_id"]))
	{
		$anketid=$_POST["anket_id"];		
		$metin="";	
		$kullanici=$_POST["ad"];
		$ip=$_POST["ip"]; //anket kullananın ip adresi
		$durum="";
		
		//daha önce bu anket için oy vermiş mi?
		$sorgu = $db->query("SELECT count(*) as oy FROM anket_kullananlar where ip='".$ip."' AND soru='".$anketid."'")->fetch();
		if($sorgu['oy'] >0 )
		{
			echo '{"durum":"'.(false).'", "mesaj":"'.'Anketi yalnızca bir kez oylayabilirsiniz'.'"}'; 
			exit;
		}
		else{
			
			
			$sql2 = $db->prepare('INSERT INTO anket_kullananlar (ip,soru) VALUES (?,?)');
			$sql2->execute(array($ip,$anketid));
			
		}	
		
		$query = $db->query("SELECT * FROM anket_sorular1 where anketid=".$anketid, PDO::FETCH_ASSOC);
		if ( $query->rowCount() ){
			foreach( $query as $row ){		
				
				$soruid=$row['id'];
				@$cevap=$_POST[$row['id']];
				
				if($row['diger']!="" )
				{					
					@$metin=$_POST["soru".$row['id']];				 	 						 
				}				 				
				$sql = $db->prepare('INSERT INTO anketcevap (kullanici,anketid,soruid,cevap,metin) VALUES (?,?,?,?,?)');
				$ekle = $sql->execute(array($kullanici,$anketid,$soruid,$cevap,$metin));  
				
			}
			
			
		}
		
		$durum=true;
		$mesaj="";
		echo '{"durum":"'.$durum.'", "mesaj":"'.$mesaj.'"}'; 
		
	}else
	{ $durum=false;
		$mesaj="Üzgünüz bir sorun oluştu!";
		echo '{"durum":"'.$durum.'", "mesaj":"'.$mesaj.'"}';
	}
?> 
