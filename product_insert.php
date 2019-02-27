<?php
// 1.  koneksi(server, username(root), pass-kosong, dbname)
//contoh $koneksi = new mysqli

$ibu = new mysqli("localhost", "root", "", "xrpl5");

/* 2. $sql => "CREATE READ UPDATE DELETE(CRUD)"
    => INSERT-SELECT-UPDATE-DALETE
*/

$bapak ="INSERT INTO product (product_id, name, price, descroption) 
        values(20, 'ROG', 29,'apik banget')";

// 3. eksekusi sql
$kawin = $ibu->query($bapak);

if ($ibu->query($bapak) === TRUE) {
    echo "New record created succesfully";
}else{
    echo "Error: ". $bapak . "<br>" . $conn->error;
}

$conn->close();
?>