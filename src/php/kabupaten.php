<?php
require_once('../../module/database.php');
if ($_POST['fungsi'] == "insertdatakabupaten") {
    $Provinsi = $_POST['provinsi'];
    $Kabupaten = $_POST['kabupaten'];
    $JumlahPenduduk = $_POST['jumlahpenduduk'];

    $sql = "INSERT INTO table_kabupaten (id_kabupaten,id_provinsi,nama_kabupaten,jumlah_penduduk)
            VALUES (null, '$Provinsi','$Kabupaten','$JumlahPenduduk')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else if ($_POST['fungsi'] == "showspecificdatakabupaten") {
    $idKabupaten = $_POST['idkabupaten'];

    $sql = "SELECT * FROM table_kabupaten WHERE id_kabupaten='$idKabupaten'";
    $result = $conn->query($sql);
    $dataProvinsi = [];

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $dataProvinsi[] = $row;
        }
        echo json_encode($dataProvinsi);
    } else {
        echo "0 results";
    }
} else if ($_POST['fungsi'] == "editdatakabupaten") {
    $idKabupaten = $_POST['idkabupaten'];
    $ProvinsiBaru = $_POST['namaprovinsi'];
    $KabupatenBaru = $_POST['namakabupaten'];
    $JumlahPendudukBaru = $_POST['jumlahpenduduk'];

    $sql = "UPDATE table_kabupaten SET id_provinsi='$ProvinsiBaru',nama_kabupaten='$KabupatenBaru',jumlah_penduduk='$JumlahPendudukBaru' WHERE id_kabupaten='$idKabupaten'";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
} else if ($_POST['fungsi'] == "hapusdatakabupaten") {
    $idKabupaten = $_POST['idkabupaten'];

    $sql = "DELETE FROM table_kabupaten WHERE id_kabupaten='$idKabupaten'";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}
