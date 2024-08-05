<?php
$nama = "Faiz";

echo "Halo, nama saya $nama";
echo "<br>";
function tampil_nama($nama){
    
    echo "Nama saya $nama";
}
tampil_nama($nama);
echo "<br> Berhitung dari 1-10 <br>";
for ($i=1; $i <= 10; $i++) { 
    echo $i;
    echo "<br>";
}
?>