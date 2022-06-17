$(document).ready(function () {
	app.verifikasiTelepon.init();
});

$(document).on('select2:open', () => {
	document.querySelector('.select2-search__field').focus();
	$('.select2-search__field').css("text-transform", "uppercase");
});

app.verifikasiTelepon = {
	controller: 'c_detail_verifikasi_data/',
	// api: '',
	elm: {},
	message_hint_2: "Ketik untuk melakukan pencarian minimal 2 karakter",

	init: function () {
		var file = this;
		var tbl_verif_data_awal = file.tableVerifDataAwal;
		var tbl_vertel = file.tableVertel;

		//Responsive DataTable
		$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
			$($.fn.dataTable.tables(true)).DataTable()
				.columns.adjust()
				.responsive.recalc();
		});

	},

	tableVerifDataAwal: $('#tbl-verif-data-awal').DataTable({
		"destroy": true,
		"paging": false,
		"lengthChange": false,
		"searching": false,
		"ordering": true,
		"info": false,
		"autoWidth": false,
	}),

	tableVertel: $('#tbl-verifikasi-telepon').DataTable({
		"destroy": true,
		"paging": false,
		"lengthChange": false,
		"searching": false,
		"ordering": true,
		"info": false,
		"autoWidth": false,
	}),

}

$('#slc-sudah-terima-unit').select2({
	theme: 'material',
	placeholder: '',
	language: 'id',
	allowClear: true,
	// data: dummy
});
$('#slc-tempat-lahir').select2({
	theme: 'material',
	placeholder: '',
	language: 'id',
	allowClear: true,
	// data: dummy
});
$('#slc-full-name').select2({
	theme: 'material',
	placeholder: 'PILIH PENERIMAAN DOKUMEN DARI',
	language: 'id',
	allowClear: true,
	// data: dummy
});
$('#tempat-lahir').select2({
	theme: 'material',
	placeholder: 'PILIH PENERIMAAN DOKUMEN DARI',
	language: 'id',
	allowClear: true,
	// data: dummy
});
$('#slc-ibu-kandung').select2({
	theme: 'material',
	placeholder: 'PILIH PENERIMAAN DOKUMEN DARI',
	language: 'id',
	allowClear: true,
	// data: dummy
});
$('#slc-row-penerima-unit').select2({
	theme: 'material',
	placeholder: 'PILIH PENERIMAAN DOKUMEN DARI',
	language: 'id',
	allowClear: true,
	// data: dummy
});
