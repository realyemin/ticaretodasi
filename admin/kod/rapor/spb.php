<?php
include "../../kaynak/db.php";
?>
			<?php


	
?>

<table width="1250"  border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="23">
          <table width="1100" border="0" align="left">
            <tr>
              <td width="224" rowspan="5"><img src="../../../img/Logo.png" width="94" height="87" /><img src="../../../img/tse_logo.png" width="116" height="86" /></td>
              <td width="563" height="21"><?php
				  $id=$_GET["id"];
				  
$query = $db->query("SELECT * FROM spust where id=".$_GET["id"], PDO::FETCH_ASSOC);

if ( $query->rowCount() ){
     foreach( $query as $row ){
		 $id=$row['id']
		  ?></td>
              </tr>
            <tr>
              <td height="106" rowspan="4"><p><font size="+3"><?php echo $row['baslik']?></font></p>
              <p><font size="+3"><?php echo $row['rapordonemi']?></font></p></td>
              </tr>
            <tr>              </tr>
            <tr>              </tr>
            <tr>              </tr>
          </table>
          <p>
            <?php
		  
     }
}

	?>
          </p>
          <p>&nbsp;</p>
          <table border="1" cellspacing="0" cellpadding="0">
            <tr>
              <td width="500">Gerçekleşen    (Uygulamalar)</td>
              <td width="150" >Gösterge</td>
              <td width="30">1</td>
              <td width="30">2</td>
              <td width="30">3</td>
              <td width="30">4</td>
              <td width="30">5</td>
            </tr>
            <?php
$query = $db->query("SELECT * FROM sp1b where spustid=".$id, PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $row ){
		  ?>
            <tr>
              <td><?php echo $row['gerceklesen']?></td>
              <td><?php echo $row['gosterge']?></td>
              <td width="22"><?php if ($row['deger']==1)
				{echo "x";}?></td>
              <td width="21"><?php if ($row['deger']==2)
				{echo "x";}?></td>
              <td  width="23"><?php if ($row['deger']==3)
				{echo "x";}?></td>
              <td width="22"><?php if ($row['deger']==4)
				{echo "x";}?></td>
              <td width="23"><?php if ($row['deger']==5)
				{echo "x";}?></td>
            </tr>
            <?php 
	 }}

	 ?>
          </table>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
       </td>
  </tr>
</table>
