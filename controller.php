<?php
// Cek apakah method POST sudah dipanggil
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Ambil data yang dikirimkan dari form

    $text = $_POST['teks'];
    $number = $_POST['angka'];

    // Buat variabel array dengan jumlah indeks sebanyak $number
    $my_array = array();
    for ($i = 0; $i < $number; $i++) {
        $my_array[$i] = $i."-".$text;
    };

    // Mengubah array menjadi format JSON
    $output = json_encode($my_array);


    // Set header Content-Type sebagai application/json
    header('Content-Type: application/json');

    // Kembalikan output dalam format JSON
    echo $output;

}

?>
