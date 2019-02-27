<?php
// 1.  koneksi(server, username(root), pass-kosong, dbname)
//contoh $koneksi = new mysqli

$ibu = new mysqli("localhost", "root", "", "xrpl5");

/* 2. $sql => "CREATE READ UPDATE DELETE(CRUD)"
    => INSERT-SELECT-UPDATE-DALETE
*/

$bapak = "UPDATE product
            SET
            name = 'paijo'
        WHERE product_id=2023";

// 3. eksekusi sql
$kawin = $ibu->query($bapak);

// boleh ada/tidak tp sebaiknya ada biar tidak lemot
$ibu->close();
?>