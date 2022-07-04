$(document).ready(function () {
	app.survey.init();
});

$(document).on('select2:open', () => {
	document.querySelector('.select2-search__field').focus();
	$('.select2-search__field').css("text-transform", "uppercase");
});

app.survey = {
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

$('#slc-status-kepemilikan-rumah').select2({
	theme: 'material',
	placeholder: 'PILIH',
	language: 'id',
	allowClear: true,
	// data: dummy
});
$('#slc-hub-pemilik-rumah-dgn-nasabah').select2({
	theme: 'material',
	placeholder: 'PILIH',
	language: 'id',
	allowClear: true,
	// data: dummy
});
$('#slc-jenis-doc-kepemilikan-rumah').select2({
	theme: 'material',
	placeholder: 'PILIH',
	language: 'id',
	allowClear: true,
	// data: dummy
});
$('#slc-survey-location').select2({
	theme: 'material',
	placeholder: 'PILIH',
	language: 'id',
	allowClear: true,
	// data: dummy
});
$('#slc-survey-location-company').select2({
	theme: 'material',
	placeholder: 'PILIH',
	language: 'id',
	allowClear: true,
	// data: dummy
});
$('#slc-tempat-penyimpanan-kend').select2({
	theme: 'material',
	placeholder: 'PILIH',
	language: 'id',
	allowClear: true,
	// data: dummy
});