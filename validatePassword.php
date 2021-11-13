<?php
    // Mengambil parameter q dari URL
    $password = $_REQUEST["q"];
 
    // Pemeriksaan karakter password dengan regular expression
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number    = preg_match('@[0-9]@', $password);
    $specialChars = preg_match('@[^\w]@', $password);
 
    //Pemeriksaan kandungan karakter password
    if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8 || strlen($password)>16) {
        echo 'Password setidaknya 8 tidak lebih dari 16 karakter dan harus menyertakan setidaknya satu huruf kapital, kecil, angka dan spesial karakter.';
    }
?>
