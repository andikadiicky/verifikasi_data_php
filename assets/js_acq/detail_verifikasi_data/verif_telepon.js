let verifikasi_data_key = 0;
let tab_detail_aplikasi = verifikasi_data_key;
let tab_customer = verifikasi_data_key;
let subtab_identitas_per = verifikasi_data_key;
let subtab_pekerjaan_per = verifikasi_data_key;
let subtab_pendapatan_per = verifikasi_data_key;
let subtab_identitas_comp = verifikasi_data_key;
let subtab_pendapatan_comp = verifikasi_data_key;
let subtab_pic_comp = verifikasi_data_key;
let subtab_pemegang_saham_comp = verifikasi_data_key;
let tab_aplikasi = verifikasi_data_key;
let subtab_aplikasi = verifikasi_data_key;
let subtab_obj_jaminan = verifikasi_data_key;
let subtab_collateral = verifikasi_data_key;
let subtab_penjamin_per = verifikasi_data_key;
let subtab_penjamin_comp = verifikasi_data_key;
let tab_survey = verifikasi_data_key;
let tab_dokumen = verifikasi_data_key;
let tab_docrec = verifikasi_data_key;
let tab_vertel = verifikasi_data_key;
let subtab_verif_data_awal = verifikasi_data_key;
let subtab_verif_telepon = verifikasi_data_key;

$(document).ready(function () {
  app.verifikasiTelepon.init();
});

$(document).on("select2:open", () => {
  document.querySelector(".select2-search__field").focus();
  $(".select2-search__field").css("text-transform", "uppercase");
});

app.verifikasiTelepon = {
  controller: "c_detail_verifikasi_data/",
  // api: '',
  elm: {},
  message_hint_2: "Ketik untuk melakukan pencarian minimal 2 karakter",

  init: function () {
    var file = this;
    var tbl_verif_telepon = file.tableVerifTelepon;

    //Responsive DataTable
    $('a[data-toggle="tab"]').on("shown.bs.tab", function (e) {
      $($.fn.dataTable.tables(true))
        .DataTable()
        .columns.adjust()
        .responsive.recalc();
    });

    //Set flagging = 1 to button confirm "Saya Sudah Membaca Tab Ini"
    $("#confirm-tab-identitas-per").on("click", function () {
      subtab_identitas_per = 1;
      $("#confirm-tab-identitas-per").prop("disabled", true);
      $("#tab-pekerjaan").trigger("click");
      $("html, body").animate(
        {
          scrollTop: 0,
        },
        "slow"
      );
    });
    $("#confirm-tab-identitas-comp").on("click", function () {
      subtab_identitas_comp = 1;
      $("#confirm-tab-identitas-comp").prop("disabled", true);
      $("#tab-pendapatan-comp").trigger("click");
      $("html, body").animate(
        {
          scrollTop: 0,
        },
        "slow"
      );
    });
    $("#confirm-tab-pekerjaan-per").on("click", function () {
      subtab_pekerjaan_per = 1;
      $("#confirm-tab-pekerjaan-per").prop("disabled", true);
      $("#tab-pendapatan").trigger("click");
      $("html, body").animate(
        {
          scrollTop: 0,
        },
        "slow"
      );
    });
    $("#confirm-tab-pendapatan-per").on("click", function () {
      tab_customer = 1;
      subtab_pendapatan_per = 1;
      $("#confirm-tab-pendapatan-per").prop("disabled", true);
      $("#tab-aplikasi").trigger("click");
      $("html, body").animate(
        {
          scrollTop: 0,
        },
        "slow"
      );
    });
    $("#confirm-tab-pendapatan-comp").on("click", function () {
      subtab_pendapatan_comp = 1;
      $("#confirm-tab-pendapatan-comp").prop("disabled", true);
      $("#tab-pic-comp").trigger("click");
      $("html, body").animate(
        {
          scrollTop: 0,
        },
        "slow"
      );
    });
    $("#confirm-tab-pic-comp").on("click", function () {
      subtab_pic_comp = 1;
      $("#confirm-tab-pic-comp").prop("disabled", true);
      $("#tab-pemegang-saham-comp").trigger("click");
      $("html, body").animate(
        {
          scrollTop: 0,
        },
        "slow"
      );
    });
    $("#confirm-tab-pemegang-saham-comp").on("click", function () {
      tab_customer = 1;
      subtab_pemegang_saham_comp = 1;
      $("#confirm-tab-pemegang-saham-comp").prop("disabled", true);
      $("#tab-aplikasi").trigger("click");
      $("html, body").animate(
        {
          scrollTop: 0,
        },
        "slow"
      );
    });
    $("#confirm-tab-aplikasi").on("click", function () {
      subtab_aplikasi = 1;
      $("#confirm-tab-aplikasi").prop("disabled", true);
      $("#sub-objek-jaminan").trigger("click");
      $("html, body").animate(
        {
          scrollTop: 0,
        },
        "slow"
      );
    });
    $("#confirm-tab-objek-jaminan").on("click", function () {
      subtab_obj_jaminan = 1;
      $("#confirm-tab-objek-jaminan").prop("disabled", true);
      $("#close-detail-obj-jaminan").trigger("click");
      $("#sub-collateral").trigger("click");
      $("html, body").animate(
        {
          scrollTop: 0,
        },
        "slow"
      );
    });
    $("#confirm-tab-collateral").on("click", function () {
      subtab_collateral = 1;
      $("#confirm-tab-collateral").prop("disabled", true);
      $("#sub-penjamin").trigger("click");
      $("html, body").animate(
        {
          scrollTop: 0,
        },
        "slow"
      );
    });
    $("#confirm-tab-penjamin-per").on("click", function () {
      tab_aplikasi = 1;
      subtab_penjamin_per = 1;
      $("#confirm-tab-penjamin-per").prop("disabled", true);
      $("#tab-survey").trigger("click");
      $("html, body").animate(
        {
          scrollTop: 0,
        },
        "slow"
      );
    });
    $("#confirm-tab-penjamin-comp").on("click", function () {
      tab_aplikasi = 1;
      subtab_penjamin_comp = 1;
      $("#confirm-tab-penjamin-comp").prop("disabled", true);
      $("#tab-survey").trigger("click");
      $("html, body").animate(
        {
          scrollTop: 0,
        },
        "slow"
      );
    });
    $("#confirm-tab-survey").on("click", function () {
      tab_survey = 1;
      $("#confirm-tab-survey").prop("disabled", true);
      $("#tab-dokumen").trigger("click");
      $("html, body").animate(
        {
          scrollTop: 0,
        },
        "slow"
      );
    });
    $("#confirm-tab-dokumen").on("click", function () {
      tab_detail_aplikasi = 1;
      tab_dokumen = 1;
      $("#confirm-tab-dokumen").prop("disabled", true);
      $("#tab-doc-received").trigger("click");
      $("html, body").animate(
        {
          scrollTop: 0,
        },
        "slow"
      );
    });
    $("#confirm-tab-docrec").on("click", function () {
      tab_docrec = 1;
      $("#confirm-tab-docrec").prop("disabled", true);
      $("#tab-vertel").trigger("click");
      $("html, body").animate(
        {
          scrollTop: 0,
        },
        "slow"
      );
    });
    $("#confirm-tab-verif-data-awal").on("click", function () {
      tab_vertel = 1;
      subtab_verif_data_awal = 1;
      $("#confirm-tab-verif-data-awal").prop("disabled", true);
      $("#tab-verif-telepon").trigger("click");
      $("html, body").animate(
        {
          scrollTop: 0,
        },
        "slow"
      );
    });
    $("#confirm-tab-verif-telepon").on("click", function () {
      subtab_verif_telepon = 1;
      $("#confirm-tab-verif-telepon").prop("disabled", true);
      $("html, body").animate(
        {
          scrollTop: 0,
        },
        "slow"
      );
    });

    //Validasi TAB
    $("#tab-aplikasi").on("click", function () {
      if (tab_customer == 0) {
        Swal.fire({
          title: "Error",
          text: "Cek Tab Customer Terlebih Dahulu",
          icon: "error",
          allowOutsideClick: false,
        });
        return false;
      } else if (tab_customer == 0) {
        Swal.fire({
          title: "Error",
          text: "Cek Tab Customer Terlebih Dahulu",
          icon: "error",
          allowOutsideClick: false,
        });
        return false;
      }
    });
    $("#tab-survey").on("click", function () {
      if (tab_customer == 0) {
        Swal.fire({
          title: "Error",
          text: "Cek Tab Customer Terlebih Dahulu",
          icon: "error",
          allowOutsideClick: false,
        });
        return false;
      } else if (tab_aplikasi == 0) {
        Swal.fire({
          title: "Error",
          text: "Cek Tab Aplikasi Terlebih Dahulu",
          icon: "error",
          allowOutsideClick: false,
        });
        return false;
      }
    });
    $("#tab-dokumen").on("click", function () {
      if (tab_customer == 0) {
        Swal.fire({
          title: "Error",
          text: "Cek Tab Customer Terlebih Dahulu",
          icon: "error",
          allowOutsideClick: false,
        });
        return false;
      } else if (tab_aplikasi == 0) {
        Swal.fire({
          title: "Error",
          text: "Cek Tab Aplikasi Terlebih Dahulu",
          icon: "error",
          allowOutsideClick: false,
        });
        return false;
      } else if (tab_survey == 0) {
        Swal.fire({
          title: "Error",
          text: "Cek Tab Survey Terlebih Dahulu",
          icon: "error",
          allowOutsideClick: false,
        });
        return false;
      }
    });
    $("#tab-pekerjaan").on("click", function () {
      if (subtab_identitas_per == 0) {
        Swal.fire({
          title: "Error",
          text: "Cek Sub Tab Identitas Terlebih Dahulu",
          icon: "error",
          allowOutsideClick: false,
        });
        return false;
      }
    });
    $("#tab-pendapatan").on("click", function () {
      if (subtab_identitas_per == 0) {
        Swal.fire({
          title: "Error",
          text: "Cek Sub Tab Identitas Terlebih Dahulu",
          icon: "error",
          allowOutsideClick: false,
        });
        return false;
      } else if (subtab_pekerjaan_per == 0) {
        Swal.fire({
          title: "Error",
          text: "Cek Sub Tab Pekerjaan Terlebih Dahulu",
          icon: "error",
          allowOutsideClick: false,
        });
        return false;
      }
    });
    $("#tab-pendapatan-comp").on("click", function () {
      if (subtab_identitas_comp == 0) {
        Swal.fire({
          title: "Error",
          text: "Cek Sub Tab Identitas Terlebih Dahulu",
          icon: "error",
          allowOutsideClick: false,
        });
        return false;
      }
    });
    $("#tab-pic-comp").on("click", function () {
      if (subtab_identitas_comp == 0) {
        Swal.fire({
          title: "Error",
          text: "Cek Sub Tab Identitas Terlebih Dahulu",
          icon: "error",
          allowOutsideClick: false,
        });
        return false;
      } else if (subtab_pendapatan_comp == 0) {
        Swal.fire({
          title: "Error",
          text: "Cek Sub Tab Pendapatan Terlebih Dahulu",
          icon: "error",
          allowOutsideClick: false,
        });
        return false;
      }
    });
    $("#tab-pemegang-saham-comp").on("click", function () {
      if (subtab_identitas_comp == 0) {
        Swal.fire({
          title: "Error",
          text: "Cek Sub Tab Identitas Terlebih Dahulu",
          icon: "error",
          allowOutsideClick: false,
        });
        return false;
      } else if (subtab_pendapatan_comp == 0) {
        Swal.fire({
          title: "Error",
          text: "Cek Sub Tab Pendapatan Terlebih Dahulu",
          icon: "error",
          allowOutsideClick: false,
        });
        return false;
      } else if (subtab_pic_comp == 0) {
        Swal.fire({
          title: "Error",
          text: "Cek Sub Tab PIC Management Terlebih Dahulu",
          icon: "error",
          allowOutsideClick: false,
        });
        return false;
      }
    });
    $("#sub-objek-jaminan").on("click", function () {
      if (subtab_aplikasi == 0) {
        Swal.fire({
          title: "Error",
          text: "Cek Sub Tab Aplikasi Terlebih Dahulu",
          icon: "error",
          allowOutsideClick: false,
        });
        return false;
      }
    });
    $("#sub-collateral").on("click", function () {
      if (subtab_aplikasi == 0) {
        Swal.fire({
          title: "Error",
          text: "Cek Sub Tab Aplikasi Terlebih Dahulu",
          icon: "error",
          allowOutsideClick: false,
        });
        return false;
      } else if (subtab_obj_jaminan == 0) {
        Swal.fire({
          title: "Error",
          text: "Cek Sub Tab Objek Jaminan Terlebih Dahulu",
          icon: "error",
          allowOutsideClick: false,
        });
        return false;
      }
    });
    $("#sub-penjamin").on("click", function () {
      if (subtab_aplikasi == 0) {
        Swal.fire({
          title: "Error",
          text: "Cek Sub Tab Aplikasi Terlebih Dahulu",
          icon: "error",
          allowOutsideClick: false,
        });
        return false;
      } else if (subtab_obj_jaminan == 0) {
        Swal.fire({
          title: "Error",
          text: "Cek Sub Tab Objek Jaminan Terlebih Dahulu",
          icon: "error",
          allowOutsideClick: false,
        });
        return false;
      } else if (subtab_collateral == 0) {
        Swal.fire({
          title: "Error",
          text: "Cek Sub Tab Collateral Terlebih Dahulu",
          icon: "error",
          allowOutsideClick: false,
        });
        return false;
      }
    });
    $("#tab-doc-received").on("click", function () {
      if (tab_detail_aplikasi == 0) {
        Swal.fire({
          title: "Error",
          text: "Cek Tab Detail Aplikasi Terlebih Dahulu",
          icon: "error",
          allowOutsideClick: false,
        });
        return false;
      }
    });
    $("#tab-vertel").on("click", function () {
      if (tab_detail_aplikasi == 0) {
        Swal.fire({
          title: "Error",
          text: "Cek Tab Detail Aplikasi Terlebih Dahulu",
          icon: "error",
          allowOutsideClick: false,
        });
        return false;
      } else if (tab_docrec == 0) {
        Swal.fire({
          title: "Error",
          text: "Cek Tab Doc Received Terlebih Dahulu",
          icon: "error",
          allowOutsideClick: false,
        });
        return false;
      }
    });
    $("#tab-verif-telepon").on("click", function () {
      if (subtab_verif_data_awal == 0) {
        Swal.fire({
          title: "Error",
          text: "Cek Sub Tab Verification Data Awal Terlebih Dahulu",
          icon: "error",
          allowOutsideClick: false,
        });
        return false;
      }
    });
  },

  tableVerifTelepon: $("#tbl-verifikasi-telepon").DataTable({
    destroy: true,
    paging: false,
    lengthChange: false,
    searching: false,
    ordering: true,
    info: false,
    autoWidth: false,
  }),
};

$("#slc-merk-model").select2({
  theme: "material",
  placeholder: "",
  language: "id",
  allowClear: true,
  // data: dummy
});
$("#slc-tenor").select2({
  theme: "material",
  placeholder: "",
  language: "id",
  allowClear: true,
  // data: dummy
});
$("#slc-angsuran").select2({
  theme: "material",
  placeholder: "",
  language: "id",
  allowClear: true,
  // data: dummy
});
