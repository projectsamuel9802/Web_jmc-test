<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.2.8/css/rowReorder.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="src/css/style.css">
    <title>JMC Test || Laporan Jumlah Penduduk</title>
</head>

<body>
    <div class="container-fluid p-3">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="provinsi-tab" data-bs-toggle="tab" data-bs-target="#provinsi" type="button" role="tab" aria-controls="provinsi" aria-selected="true">Data Provinsi</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="kabupaten-tab" data-bs-toggle="tab" data-bs-target="#kabupaten" type="button" role="tab" aria-controls="kabupaten" aria-selected="false">Data Kabupaten</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="laporan-tab" data-bs-toggle="tab" data-bs-target="#laporan" type="button" role="tab" aria-controls="laporan" aria-selected="false">Data Laporan</button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="provinsi" role="tabpanel" aria-labelledby="provinsi-tab">
                <?php include_once('view/provinsi.php'); ?>
            </div>
            <div class="tab-pane fade" id="kabupaten" role="tabpanel" aria-labelledby="kabupaten-tab">
                <?php include_once('view/kabupaten.php'); ?>
            </div>
            <div class="tab-pane fade" id="laporan" role="tabpanel" aria-labelledby="laporan-tab">
                <?php include_once('view/laporan.php'); ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/rowreorder/1.2.8/js/dataTables.rowReorder.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="src/js/provinsi.js"></script>
    <script src="src/js/kabupaten.js"></script>
</body>

</html>