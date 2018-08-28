
 Görüş Listesi
 <div align="center">
  <div class="box">
    <div class="box-header"></div>
		  <!-- /.box-header -->
          <form id="form2" name="form1" method="post"  onsubmit="popup(this)" action="index.php?islem=karargorusliste">
  <table width="700" border="0" cellspacing="0" cellpadding="1">
    <tr>
      <td>Komisyon-Kurul Adı
        <select  name="komisyonadi">
          <option value="">Seçiniz</option>
          <?php
$query = $db->query("SELECT id, ad FROM komisyonlar", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $row ){
		 ?>
          <option value="<?php echo $row['id']?>">
            <?php
				 echo $row['ad']
					  ?>
            </option>
          <?php
	 }}
	 ?>
        </select></td>
      <td>Kategori
        <label for="textfield"></label>
        <select name="gorus" id="gorus">
          <option value=""></option>
          <option value="Görüş">Görüş </option>
          <option value="Öneri">Öneri</option>
          <option value="Yeni Gündem Maddesi">Yeni Gündem Maddesi</option>
        </select></td>
      <td>Konu 
        <input type="text" name="konu" id="textfield2" /></td>
      <td align="center"> <button  type="submit"  class="btn btn-block btn-primary btn-xs">Ara</button>&nbsp;</td>
    </tr>
  </table>
</form>

    <div class="box-body">
		    <table width="1166" border="0" cellpadding="0" cellspacing="0" class="table table-bordered table-hover">
		      <tbody>
		        <tr>
		          <td width="36" height="32"> Kullanıcı Adı </td>
		          <td width="115">Komisyon</td>
		          <td width="204">Görüş</td>
		          <td width="204">Konu</td>
		          <td width="204">Konu Detay</td>
		          <td width="204"> Pdf</td>
		          <td colspan="3"> İşlemler</td>
	            </tr>
		        <?php
				
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

  
function komisyon($k)
{
	
include "kaynak/db.php";


	
	$query = $db->query("SELECT id,ad FROM komisyonlar where id =$k", PDO::FETCH_ASSOC);
			if ( $query->rowCount() ){
     foreach( $query as $row ){
		  $adi= $row['ad'];
		  
	 }}
	 echo $adi;
}



$komisyon="";
$gorus="";
$konu="";
 if(isset($_POST['komisyonadi']))
$komisyon=$_POST['komisyonadi'];
if(isset($_POST['gorus']))
$gorus=$_POST['gorus'];
if(isset($_POST['konu']))
$konu=$_POST['konu'];

$a=0;
$sql="";
if($komisyon!="")
{
	if($a>0)
	{ $sql=$sql." and ";
$a=$a-1; 
	}
	$sql=$sql." komisyon = '".$komisyon."'";
$a=$a+1; 
	}

if($gorus!="")
{
		if($a>0)
	{ $sql=$sql." and ";
$a=$a-1; 
	}
	$sql=$sql." gorus ='".$gorus."'";
$a=$a+1; 
	}

if($konu!="")
{
		if($a>0)
	{ $sql=$sql." and ";
$a=$a-1; 
	}
	$sql=$sql." konu like '%".$konu."%' or konudetay like '%".$konu."%'" ;
$a=$a+1; 
	}

if($sql!="")
	$sql1="select * from karargorus where". $sql;
else
	$sql1="select * from karargorus";





$query = $db->query($sql1." order by id desc", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $row ){
		  ?>
		        <tr>
		          <td><?php echo kullanici($row['kid'])?></td>
		          <td><?php echo komisyon($row['komisyon'])?></td>
		          <td><?php echo $row['gorus'] ?></td>
		          <td><?php echo $row['konu'] ?></td>
		          <td><?php echo $row['konudetay'] ?></td>
		          <td><?php if(file_exists("../tcrt/karargorus/karar_".$row['id'].".pdf")) 
				  {
					  ?>
		            <form action="../tcrt/karargorus/karar_<?php echo $row['id']?>.pdf" target="_blank">
		              <button  type="submit"  class="btn btn-block btn-primary btn-xs">Pdf Aç</button>
	                </form>
		            <?php 
				  }
				  else
				  echo "-"
				  ?></td>
		          <td width="64"><form action="index.php?islem=karargorussil&id=<?php echo $row['id']?>" method="post">
		            <button type="submit"  class="btn btn-block btn-primary btn-xs"> Sil </button>
		            </form></td>
		          <td width="68"  align="center"><?php if(file_exists("tcrt/karargorus/karar_".$row['id'].".pdf")) 
				  {
					  ?>
		            <form action="tcrt/karargorus/karar_<?php echo $row['id']?>.pdf" target="_blank">
		              <button  type="submit"  class="btn btn-block btn-primary btn-xs">Pdf Aç</button>
	                </form>
                  <?php 
				  }
				  else
				  echo "-"
				  ?></td>
		          <td width="67">&nbsp;</td>
	            </tr>
		        <?php
		  
		  
		  
     }
}

	?>
	          </tbody>
	        </table>
		  </div>
		  <!-- /.box-body -->
  </div>
</div>
