
	
			<?php
       //     @$id=	$_POST['ad'];
$i=$_GET["id"];


function kullanici($k)
{
	
include "kaynak/db.php";


	
	$query = $db->query("SELECT id,adsoyad FROM kullanici where id =$k", PDO::FETCH_ASSOC);
			if ( $query->rowCount() ){
     foreach( $query as $row ){
		  $adi= $row['adsoyad'];
		  
	 }}
	 echo $adi;
}

			$query = $db->query("SELECT id,adi,suresi,sure_birim FROM egitim where id =$i", PDO::FETCH_ASSOC);
			if ( $query->rowCount() ){
     foreach( $query as $row ){
		  $adi= $row['adi'];
		 $sure= $row['suresi'];
		 $birim= $row['sure_birim'];
		  
	 }}
			
			?>
			
			Eğitim Adı:  
			<?php echo $adi?> <p>&nbsp;</p>

            Eğitim Süresi : 
			<?php echo $sure?> <p>&nbsp;</p>

			
            Personel Devam durumu  Bilgileri Girişi 
            <form role="form" action="index.php?islem=egitimperkaydet&id=<?php echo $i?> " method="post">
               <p>Personel Adı : 
                     
                 <select  name="uyeid">
                     <?php
$query = $db->query("SELECT id, uyeid,egitimid FROM egitimkatilan where egitimid = $i ", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $row ){
		 ?>
                   <option value="<?php echo $row['uyeid']?>"><?php
				 // echo $row['uyeid']
				 
				 kullanici($row['uyeid']);
				 ?></option>
           
            <?php
	 }}
	 ?>
                 </select>
               
               </p>
               <p>
                 <?php 
			   for($k = 0; $k < $sure; $k++)
			   {       
			     echo $k+1; 
				 echo "."; 
				 echo $birim; 
				      

			   ?> 
                 <select name="a<?php echo $k?>">
                   <option value="1">Katıldı</option>
                   <option value="0">Katılmadı</option>
                 </select>
               </p>

 <p>
   <?php
			   }
			   ?>
   </p>
 <p>
   <input height="30px" width="150px" name="ekle" type="submit" value="Ekle" />
 </p>
            </form>
              
			   
    
	