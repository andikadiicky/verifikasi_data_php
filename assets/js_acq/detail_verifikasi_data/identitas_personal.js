$(document).ready(function () {
	app.identitasPersonal.init();
});

$(document).on('select2:open', () => {
	document.querySelector('.select2-search__field').focus();
	$('.select2-search__field').css("text-transform", "uppercase");
});

app.identitasPersonal = {
	controller: 'c_detail_verifikasi_data/',
	// api: '',
	elm: {},
	message_hint_2: "Ketik untuk melakukan pencarian minimal 2 karakter",

	init: function () {
		var file = this;
		var tbl_info_alamat = file.tableInfoAlamat;
		var tbl_emergency_contact = file.tableEmergencyContact;
		var tbl_info_bank = file.tableInfoBank;
		var tbl_info_cc = file.tableInfoCC;

		//Responsive DataTable
		$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
			$($.fn.dataTable.tables(true)).DataTable()
				.columns.adjust()
				.responsive.recalc();
		});

	},

	tableInfoAlamat: $('#tbl-informasi-alamat-personal').DataTable({
		"destroy": true,
		"paging": false,
		"lengthChange": false,
		"searching": false,
		"ordering": true,
		"info": false,
		"autoWidth": false,
	}),
	tableEmergencyContact: $('#tbl-emergency-contact-personal').DataTable({
		"destroy": true,
		"paging": false,
		"lengthChange": false,
		"searching": false,
		"ordering": true,
		"info": false,
		"autoWidth": false,
	}),
	tableInfoBank: $('#tbl-informasi-bank-personal').DataTable({
		"destroy": true,
		"paging": false,
		"lengthChange": false,
		"searching": false,
		"ordering": true,
		"info": false,
		"autoWidth": false,
	}),
	tableInfoCC: $('#tbl-informasi-kartukredit-personal').DataTable({
		"destroy": true,
		"paging": false,
		"lengthChange": false,
		"searching": false,
		"ordering": true,
		"info": false,
		"autoWidth": false,
	}),

}

$('#slc-jenis-identitas-personal').select2({
	theme: 'material',
	placeholder: 'PILIH JENIS IDENTITAS',
	language: 'id',
	allowClear: true,
	// data: dummy
});
$('#slc-kewarganegaraan-personal').select2({
	theme: 'material',
	placeholder: 'PILIH KEWARGANEGARAAN',
	language: 'id',
	allowClear: true,
	// data: dummy
});
$('#slc-agama').select2({
	theme: 'material',
	placeholder: 'PILIH AGAMA',
	language: 'id',
	allowClear: true,
	// data: dummy
});
$('#slc-pendidikan-personal').select2({
	theme: 'material',
	placeholder: 'PILIH PENDIDIKAN',
	language: 'id',
	allowClear: true,
	// data: dummy
});
$('#slc-jenis-kelamin-personal').select2({
	theme: 'material',
	placeholder: 'PILIH JENIS KELAMIN',
	language: 'id',
	allowClear: true,
	// data: dummy
});
$('#slc-status-kawin-personal').select2({
	theme: 'material',
	placeholder: 'PILIH STATUS KAWIN',
	language: 'id',
	allowClear: true,
	// data: dummy
});
$('#slc-status-hub').select2({
	theme: 'material',
	placeholder: 'PILIH STATUS HUBUNGAN',
	language: 'id',
	allowClear: true,
	// data: dummy
});
$('#slc-jenis-identitas-pasangan').select2({
	theme: 'material',
	placeholder: 'PILIH JENIS IDENTITAS PASANGAN',
	language: 'id',
	allowClear: true,
	// data: dummy
});
$('#slc-kepemilikan-npwp').select2({
	theme: 'material',
	placeholder: 'PILIH STATUS KEPEMILIKAN NPWP',
	language: 'id',
	allowClear: true,
	// data: dummy
});
$('#slc-reason-watchlist').select2({
	theme: 'material',
	placeholder: 'PILIH REASON WATCHLIST',
	language: 'id',
	allowClear: true,
	// data: dummy
});