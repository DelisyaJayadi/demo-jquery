<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $text = $_POST['teks'];
    $number = $_POST['angka'];

    $my_array = array();
    for ($i = 0; $i < $number; $i++) {
        $my_array[$i] = $i."-".$text;
    };

}

?>