$(document).ready(function () {
	app.identitasCompany.init();
});

$(document).on('select2:open', () => {
	document.querySelector('.select2-search__field').focus();
	$('.select2-search__field').css("text-transform", "uppercase");
});

app.identitasCompany = {
	controller: 'c_detail_verifikasi_data/',
	// api: '',
	elm: {},
	message_hint_2: "Ketik untuk melakukan pencarian minimal 2 karakter",

	init: function () {
		var file = this;

		//Responsive DataTable
		$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
			$($.fn.dataTable.tables(true)).DataTable()
				.columns.adjust()
				.responsive.recalc();
		});

	},


}

$('#slc-jenis-perusahaan').select2({
	theme: 'material',
	placeholder: 'PILIH',
	language: 'id',
	allowClear: true,
	// data: dummy
});
$('#slc-status-penanaman-modal').select2({
	theme: 'material',
	placeholder: 'PILIH',
	language: 'id',
	allowClear: true,
	// data: dummy
});
$('#slc-status-kepemilikan-company').select2({
	theme: 'material',
	placeholder: 'PILIH',
	language: 'id',
	allowClear: true,
	// data: dummy
});
$('#slc-kepemilikan-npwp-company').select2({
	theme: 'material',
	placeholder: 'PILIH',
	language: 'id',
	allowClear: true,
	// data: dummy
});
$('#slc-sektor-ekonomi-company').select2({
	theme: 'material',
	placeholder: 'PILIH',
	language: 'id',
	allowClear: true,
	// data: dummy
});
$('#slc-status-lokasi-company').select2({
	theme: 'material',
	placeholder: 'PILIH',
	language: 'id',
	allowClear: true,
	// data: dummy
});
$('#slc-lokasi-usaha-company').select2({
	theme: 'material',
	placeholder: 'PILIH',
	language: 'id',
	allowClear: true,
	// data: dummy
});
$('#slc-kepemilikan-rek-company').select2({
	theme: 'material',
	placeholder: 'PILIH',
	language: 'id',
	allowClear: true,
	// data: dummy
});
$('#slc-reason-watchlist-company').select2({
	theme: 'material',
	placeholder: 'PILIH',
	language: 'id',
	allowClear: true,
	// data: dummy
});
