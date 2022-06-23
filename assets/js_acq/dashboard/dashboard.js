$(document).ready(function () {
	app.dashboard.init();
});

$(document).on('select2:open', () => {
	document.querySelector('.select2-search__field').focus();
	$('.select2-search__field').css("text-transform", "uppercase");
});

app.dashboard = {
	controller: 'c_dashboard/',
	// api: '',
	elm: {},
	message_hint_2: "Ketik untuk melakukan pencarian minimal 2 karakter",

	init: function () {
		var file = this;
		var tbl_contract_list = file.tableContractList;

		//Responsive DataTable
		$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
			$($.fn.dataTable.tables(true)).DataTable()
				.columns.adjust()
				.responsive.recalc();
		});

		$("#tbl-contract-list tbody").on('click', '#dtl-verifikasi-data', function () {
			// console.log('trigger button table personal');
			window.location.href = 'C_detail_verifikasi_data';
		});

	},

	tableContractList: $('#tbl-contract-list').DataTable({
		"destroy": true,
		"paging": true,
		"lengthChange": false,
		"searching": true,
		"ordering": true,
		"info": true,
		"autoWidth": false,
	}),

}

$('#slc-penerimaan-doc').select2({
	theme: 'material',
	placeholder: 'PILIH PENERIMAAN DOKUMEN DARI',
	language: 'id',
	allowClear: true,
	// data: dummy
});
