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
            <col width="40" span="4" />
            <col width="340" />
            <col width="311" />
            <col width="291" />
            <col width="47" span="5" />
            <col width="251" />
            <?php
$query = $db->query("SELECT * FROM spkat", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $r ){
		  ?>
            <tr>
              <td colspan="4" width="160"><?php echo $r['baslik1']?></td>
              <td colspan="9" width="1428"><?php echo $r['baslik2']?></td>
            </tr>
            <tr>
              <td>Ana Tema No</td>
              <td align="right">Amaç No</td>
              <td align="right">Hedef No</td>
              <td align="right">Strateji    No</td>
              <td>Gerçekleştirilmesi    Planlanan (Uygulamalar)</td>
              <td width="311">Gerçekleşen    (Uygulamalar)</td>
              <td>Gösterge</td>
              <td>1</td>
              <td>2</td>
              <td>3</td>
              <td>4</td>
              <td>5</td>
              <td width="251">Açıklama</td>
            </tr>
            <?php
$query = $db->query("SELECT * FROM sp1a where spkat=". $r['id']."  and spustid=".$id, PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $row ){
		  ?>
            <tr>
              <td><?php echo $row['anatema']?></td>
              <td align="right"><?php echo $row['amac']?></td>
              <td align="right"><?php echo $row['hedef']?></td>
              <td align="right"><?php echo $row['strateji']?></td>
              <td><?php echo $row['planlanan']?></td>
              <td><?php echo $row['gerceklesen']?></td>
              <td><?php echo $row['gosterge']?></td>
              <td><?php if ($row['deger']==1)
				{echo "x";}?></td>
              <td><?php if ($row['deger']==2)
				{echo "x";}?></td>
              <td><?php if ($row['deger']==3)
				{echo "x";}?></td>
              <td><?php if ($row['deger']==4)
				{echo "x";}?></td>
              <td><?php if ($row['deger']==5)
				{echo "x";}?></td>
              <td><?php echo $row['gosterge']?></td>
            </tr>
            <?php 
	 }}
	 }}
	 ?>
      </table>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
       </td>
  </tr>
</table>
