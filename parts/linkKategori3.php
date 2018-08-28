<style type="text/css">
	.shortLinks {
    width: 100%;
    float: left;
    margin-top: 40px;
}

.shortLinks > .headLine {
    width: 100%;
    float: left;
    color: #9e141f;
    padding: 0 0 12px;
    margin-bottom: 10px;
}

.shortLinks .list {
    width: 100%;
    float: left;
}

.shortLinks .item {
    width: 16.6%;
    float: left;
    background: #f1f1f1;
    text-align: center;
    position: relative;;
}

.shortLinks .item:nth-child(2), .shortLinks .item:nth-child(4), .shortLinks .item:nth-child(6), .shortLinks .item:nth-child(7), .shortLinks .item:nth-child(9), .shortLinks .item:nth-child(11) {
    background: #fafafa;
}

.shortLinks .item a {
    width: 100%;
    height: 100%;
    position: absolute;
    left: 0;
    top: 0;
}

.shortLinks .item a:hover {
    background: #9f1722;
}

.shortLinks .ico {
    width: 50px;
    height: 50px;
    position: absolute;
    top: 25%;
    left: 50%;
    margin-left: -25px;
    background: transparent;
    -webkit-transition: all .3s ease-in-out;
    -moz-transition: all .3s ease-in-out;
    -ms-transition: all .3s ease-in-out;
    -o-transition: all .3s ease-in-out;
    transition: all .3s ease-in-out;
}

.shortLinks .item a:hover .ico {
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    background: #fff;
    top: 20%;
}

.shortLinks .item .ico img {
    height: 70%;
    margin-top: 15%;
}

.shortLinks .item .headLine {
    width: 100%;
    position: absolute;
    left: 0;
    bottom: 15px;
}

.shortLinks .item a:hover .headLine {
    color: #fff;
}
.rightSidebar .announcements .headLine, .rightSidebar .heading, .shortLinks > .headLine {
    font-weight: 700;
    font-size: 18px;
    border-bottom: 1px solid #ebebeb;
	text-indent:20px;
}
	</style>
	<?php $baglantilar3=$db->query("SELECT * FROM link WHERE kat=3 AND dil=".$dil."" , PDO::FETCH_ASSOC);
	//kat=3 Hizmetler ?>

<div class="shortLinks">
<div class="headLine" ><?php echo "Bağlantılar"; ?></div>
<ul class="list">
	<?php if ( $baglantilar3->rowCount() ){
			foreach( $baglantilar3 as $row ){	?>
 <div class="item col-xs-2" style="height: 137px;"> 
 <a href="<?php echo $row['link']; ?>" title="<?php echo $row['ad']; ?>"> 
 <div class="ico">
 	<?php 
				$kalici_yol_ad="tcrt/link/link".$row['id'].".jpg"; 
				if(file_exists($kalici_yol_ad)){
				?>
				<img class="img-responsive" src='tcrt/link/link<?php echo $row['id']; ?>.jpg' style="max-width:80px; max-height:60px" >
			<?php } ?>
 </div> 
			<div class="headLine"><?php echo $row['ad']; ?></div>
 </a> 
 </div> 
			<?php }
	} ?>

 </ul>
 </div>
