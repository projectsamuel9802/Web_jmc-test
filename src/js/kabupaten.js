$(document).ready(function () {
  var tableprovinsi = $("#kabupatentable").DataTable({
    rowReorder: {
      selector: "td:nth-child(2)",
    },
    responsive: true,
  });
});

$("#formInputKabupaten").on("submit", (e) => {
  e.preventDefault();

  let provinsi = $("#provinsiselect").val();
  let kabupaten = $("#namakabupaten").val();
  let jumlahpenduduk = $("#jumlahpenduduk").val();

  $.ajax({
    method: "POST",
    url: "src/php/kabupaten.php",
    data: {
      fungsi: "insertdatakabupaten",
      provinsi: provinsi,
      kabupaten: kabupaten,
      jumlahpenduduk: jumlahpenduduk,
    },
    success: function (response) {
      if (response == "New record created successfully") {
        window.location.reload();
      } else {
        alert(response);
      }
    },
  });
});

function editKabupaten(id) {
  let provinsi = $("#provinsiselect").val();
  let kabupaten = $("#namakabupaten").val();
  let jumlahpenduduk = $("#jumlahpenduduk").val();

  $.ajax({
    method: "POST",
    url: "src/php/kabupaten.php",
    data: {
      fungsi: "editdatakabupaten",
      idkabupaten: id,
      namaprovinsi: provinsi,
      namakabupaten: kabupaten,
      jumlahpenduduk: jumlahpenduduk,
    },
    success: function (response) {
      if (response == "Record updated successfully") {
        window.location.reload();
      } else {
        alert(response);
      }
    },
  });
}

function editDataKabupaten(id) {
  $.ajax({
    method: "POST",
    url: "src/php/kabupaten.php",
    data: {
      fungsi: "showspecificdatakabupaten",
      idkabupaten: id,
    },
    success: function (response) {
      let jsonParse = JSON.parse(response);
      console.log();
      $("#provinsiselect").val(jsonParse[0].id_provinsi);
      $("#namakabupaten").val(jsonParse[0].nama_kabupaten);
      $("#jumlahpenduduk").val(jsonParse[0].jumlah_penduduk);

      $("#submitdatakabupaten").html("Kirim Perubahan");
      $("#submitdatakabupaten").attr("type", "button");
      $("#submitdatakabupaten").attr(
        "onClick",
        "editKabupaten(" + jsonParse[0].id_kabupaten + ");"
      );
      // console.log(jsonParse);
    },
  });
}

function hapusDataKabupaten(id) {
  $.ajax({
    method: "POST",
    url: "src/php/kabupaten.php",
    data: {
      fungsi: "hapusdatakabupaten",
      idkabupaten: id,
    },
    success: function (response) {
      if (response == "Record deleted successfully") {
        window.location.reload();
      } else {
        alert(response);
      }
    },
  });
}
