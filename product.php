<?php

// 1.) koneksi
$conn = new mysqli ("localhost", "root", "", "xrpl5");
/* $conn=koneksi 
$koneksi = new mysql("localhost", "root", "", "xrpl5)*/


/* 2. $sql => "CREATE READ UPDATE DELETE(CRUD)"
    => INSERT-SELECT-UPDATE-DELETE
    */
    $sql = "select * from product";

// 3.) eksekusi sql
    $result = $conn->query($sql);

// 4.) jabarkan hasil eksekusi
    while($barisanPramuka = $result->fetch_assoc()){
        echo $barisanPramuka["product_id"];
        echo $barisanPramuka["name"];
        echo $barisanPramuka["price"];
        echo $barisanPramuka["descroption"];
        echo "<br/>";
    }
    ?>