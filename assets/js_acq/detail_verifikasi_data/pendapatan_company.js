$(document).ready(function () {
	app.pendapatanCompany.init();
});

$(document).on('select2:open', () => {
	document.querySelector('.select2-search__field').focus();
	$('.select2-search__field').css("text-transform", "uppercase");
});

app.pendapatanCompany = {
	controller: 'c_detail_verifikasi_data/',
	// api: '/',
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

$('#slc-sumber-pendapatan-comp').select2({
	theme: 'material',
	placeholder: 'PILIH',
	language: 'id',
	allowClear: true,
	// data: dummy
});
