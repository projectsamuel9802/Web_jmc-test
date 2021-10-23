$(document).ready(function () {
  var tableprovinsi = $("#provinsitable").DataTable({
    rowReorder: {
      selector: "td:nth-child(2)",
    },
    responsive: true,
  });

  $("#formInputProvinsi").on("submit", (e) => {
    e.preventDefault();

    let NamaProvinsi = $("#namaprovinsi").val();

    $.ajax({
      method: "POST",
      url: "src/php/provinsi.php",
      data: {
        fungsi: "insertdataprovinsi",
        namaprovinsi: NamaProvinsi,
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
});

function editProvinsi(id) {
  let NamaProvinsi = $("#namaprovinsi").val();

  $.ajax({
    method: "POST",
    url: "src/php/provinsi.php",
    data: {
      fungsi: "editdataprovinsi",
      idprovinsi: id,
      namaprovinsi: NamaProvinsi,
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

function editDataProvinsi(id) {
  $.ajax({
    method: "POST",
    url: "src/php/provinsi.php",
    data: {
      fungsi: "showspecificdataprovinsi",
      idprovinsi: id,
    },
    success: function (response) {
      let jsonParse = JSON.parse(response);
      $("#namaprovinsi").val(jsonParse[0].nama_provinsi);
      $("#submitdataprovinsi").html("Kirim Perubahan");
      $("#submitdataprovinsi").attr("type", "button");
      $("#submitdataprovinsi").attr(
        "onClick",
        "editProvinsi(" + jsonParse[0].id_provinsi + ");"
      );
      // console.log(jsonParse);
    },
  });
}

function hapusDataProvinsi(id) {
  $.ajax({
    method: "POST",
    url: "src/php/provinsi.php",
    data: {
      fungsi: "hapusdataprovinsi",
      idprovinsi: id,
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
