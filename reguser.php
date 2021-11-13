<?php
$namaserver = "localhost";
$username = "konek";
$password = "konek";

$conn = new mysqli($namaserver, $username, $password, 'konek');

If($conn -> connect_error) {
    die("Koneksi Gagal : " . $conn->connect_error);
}

$datauser = json_decode($_REQUEST["q"]);
$sql = "Insert into tabelutama(username,gender,tempatlahir,tanggallahir,password)
values('". $datauser->username ."','". $datauser->gender ."','". $datauser->tempatlahir ."' 
, '". $datauser->tanggallahir ."', '". $datauser->password ."')";

$sqli = "Update tabelutama set username = '" . $datauser->username . "', gender = '" . $datauser->gender . 
"', tempatlahir = '" . $datauser->tempatlahir . "', tanggallahir = '" . $datauser->tanggallahir . "' where
password = '" . $datauser->password . "'";

if($conn -> query($sql) === true) {
    echo "Affected rows: " . $conn -> affected_rows;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn -> close();
?>