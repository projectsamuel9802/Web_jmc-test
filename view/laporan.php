<div class="container-fluid p-3 content-fill">
    <h3 class="text-center mb-4">Data Laporan</h3>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <b>Provinsi</b>
                </div>
                <div class="card-body">
                    <p>Cetak Laporan Jumlah Penduduk berdasarkan provinsi</p>
                    <a class="btn btn-primary" href="module/laporan/provinsi.php">Klik Disini</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <b>Kabupaten</b>
                </div>
                <div class="card-body p-3">
                    <div class="mb-3">
                        <p>Cetak laporan jumlah penduduk berdasarkan kabupaten</p>
                        <button class="btn btn-primary">Klik Disini</button>
                    </div>
                    <hr>
                    <form action="" method="post">
                        <div class="form-control">
                            <label for="namaprovinsi">Cetak laporan jumlah penduduk berdasarkan filter</label>
                            <select class="form-select mt-2 mb-3" name="namaprovinsi">
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
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button class="btn btn-primary" type="submit">Cetak</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>