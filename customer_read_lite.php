<?php

$ibu = new mysqli("localhost", "root", "", "xrpl5");

$bapak = "SELECT*FROM product";

$kawin = $ibu->query($bapak);

while($anak = $kawin->fetch_assoc()){
    echo $anak["product_id"];

    

}

$ibu->close();
?>