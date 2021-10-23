<div class="container-fluid p-3 content-fill">
    <h3 class="text-center mb-3">Data Kabupaten</h3>
    <div class="card mb-3">
        <div class="card-header">
            <b>Input Data Kabupaten dan Jumlah Penduduk</b>
        </div>
        <div class="card-body">
            <form id="formInputKabupaten">
                <div class="form-control mb-2">
                    <label for="provinsiselect">Nama Provinsi</label>
                    <select class="form-select" id="provinsiselect">
                        <option value="">Pilih Provinsi...</option>
                        <?php
                        require_once('module/database.php');
                        $sql = "SELECT * FROM `table_provinsi`";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            $nomor = 1;
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {
                                echo "<option value='$row[id_provinsi]'>$row[nama_provinsi]</option>";
                            }
                        } else {
                            echo "<option disabled>Belum ada data</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-control mb-2">
                    <label for="namakabupaten">Nama Kabupaten</label>
                    <input type="text" class="form-control" id="namakabupaten" />
                </div>
                <div class="form-control mb-3">
                    <label for="jumlahpenduduk">Jumlah Penduduk</label>
                    <input type="text" class="form-control" id="jumlahpenduduk" />
                </div>
                <button type="submit" class="btn btn-primary" id="submitdatakabupaten">Submit</button>
            </form>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <b>Kelola Data Kabupaten dan Penduduk</b>
        </div>
        <div class="card-body p-3">
            <table id="kabupatentable" class="display nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Provinsi</th>
                        <th>Nama Kabupaten</th>
                        <th>Jumlah Penduduk</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require_once('module/database.php');
                    $sql = "SELECT * FROM `table_kabupaten`
                            JOIN `table_provinsi`;";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $nomor = 1;
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo "
                            <tr>
                                <td>" . $nomor . "</td>
                                <td>" . $row['nama_provinsi'] . "</td>
                                <td>" . $row['nama_kabupaten'] . "</td>
                                <td>" . $row['jumlah_penduduk'] . "</td>
                                <td>
                                    <button class='btn btn-warning' onClick='editDataKabupaten($row[id_kabupaten]);'><i class='fas fa-edit'></i> Edit</button>
                                    <button class='btn btn-danger' onClick='hapusDataKabupaten($row[id_kabupaten]);'><i class='fas fa-trash-alt'></i> Hapus</button>
                                </td>
                            </tr>";
                            $nomor++;
                        }
                    } else {
                        $sqlReset = "ALTER TABLE `table_kabupaten` AUTO_INCREMENT = 1";
                        $conn->query($sqlReset);
                    }
                    ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>No.</th>
                        <th>Nama Provinsi</th>
                        <th>Nama Kabupaten</th>
                        <th>Jumlah Penduduk</th>
                        <th></th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>