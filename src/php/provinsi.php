<?php
require_once('../../module/database.php');
if ($_POST['fungsi'] == "insertdataprovinsi") {
    $Provinsi = $_POST['namaprovinsi'];

    $sql = "INSERT INTO table_provinsi (id_provinsi, nama_provinsi)
VALUES (null, '$Provinsi')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else if ($_POST['fungsi'] == "showspecificdataprovinsi") {
    $idProvinsi = $_POST['idprovinsi'];

    $sql = "SELECT * FROM table_provinsi WHERE id_provinsi='$idProvinsi'";
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
} else if ($_POST['fungsi'] == "hapusdataprovinsi") {
    $idProvinsi = $_POST['idprovinsi'];

    $sql = "DELETE FROM table_provinsi WHERE id_provinsi='$idProvinsi'";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
} else if ($_POST['fungsi'] == "editdataprovinsi") {
    $idProvinsi = $_POST['idprovinsi'];
    $ProvinsiBaru = $_POST['namaprovinsi'];

    $sql = "UPDATE table_provinsi SET nama_provinsi='$ProvinsiBaru' WHERE id_provinsi='$idProvinsi'";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
