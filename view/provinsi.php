<div class="container-fluid p-3 content-fill">
    <h3 class="text-center mb-3">Data Provinsi</h3>
    <div class="card mb-3">
        <div class="card-header">
            <b>Input Data Provinsi</b>
        </div>
        <div class="card-body">
            <form class="row g-3" id="formInputProvinsi">
                <div class="col-auto">
                    <label for="staticEmail2" class="visually-hidden">Nama Provinsi</label>
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Nama Provinsi">
                </div>
                <div class="col-auto">
                    <label for="inputPassword2" class="visually-hidden">Nama Provinsi</label>
                    <input type="text" class="form-control" id="namaprovinsi" placeholder="Masukkan nama provinsi">
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-3" id="submitdataprovinsi">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <b>Kelola Data Provinsi</b>
        </div>
        <div class="card-body p-3">
            <table id="provinsitable" class="display nowrap" style="width:100%">
                <thead class='text-center'>
                    <tr>
                        <th>No.</th>
                        <th>Nama Provinsi</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody class='text-center'>
                    <?php
                    require_once('module/database.php');
                    $sql = "SELECT * FROM `table_provinsi`";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $nomor = 1;
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo "
                            <tr>
                                <td>" . $nomor . "</td>
                                <td>" . $row['nama_provinsi'] . "</td>
                                <td>
                                    <button class='btn btn-warning' onClick='editDataProvinsi($row[id_provinsi]);'><i class='fas fa-edit'></i> Edit</button>
                                    <button class='btn btn-danger' onClick='hapusDataProvinsi($row[id_provinsi]);'><i class='fas fa-trash-alt'></i> Hapus</button>
                                </td>
                            </tr>";
                            $nomor++;
                        }
                    } else {
                        $sqlReset = "ALTER TABLE `table_provinsi` AUTO_INCREMENT = 1";
                        $conn->query($sqlReset);
                    }
                    ?>
                </tbody>
                <tfoot class='text-center'>
                    <tr>
                        <th>No.</th>
                        <th>Nama Provinsi</th>
                        <th></th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>