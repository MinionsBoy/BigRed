<?php
include('config.blade.php');
$s1=$_REQUEST["n"];
$select_query="select * from product where name like '%".$s1."%'";
$sql=mysql_query($select_query) or die (mysql_error());
$s="";
while($row=mysql_fetch_array($sql))
{
	$s=$s."
	<a class='link-p-colr' href='view.php?product=".$row['id']."'>
		<div class='live-outer'>
            	<div class='live-im'>
                	<img src='imeg/".$row['pro_image']."'/>
                </div>
                <div class='live-product-det'>
                	<div class='live-product-name'>
                    	<p>".$row['name']."</p>
                    </div>
                    <div class='live-product-price'>
						<div class='live-product-price-text'><p>Rs.".number_format($row['price'])."</p></div>
                    </div>
                </div>
            </div>
	</a>
	"	;
}
echo $s;
?>
