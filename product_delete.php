<?php
// 1.  koneksi(server, username(root), pass-kosong, dbname)
//contoh $koneksi = new mysqli

$ibu = new mysqli("localhost", "root", "", "xrpl5");

/* 2. $sql => "CREATE READ UPDATE DELETE(CRUD)"
    => INSERT-SELECT-UPDATE-DALETE
*/

$bapak = "DELETE FROM product
        WHERE product_id=20";

// 3. eksekusi sql
$kawin = $ibu->query($bapak);

$ibu->close();
?>