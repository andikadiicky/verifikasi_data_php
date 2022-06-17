$(document).ready(function () {
	app.docReceive.init();
});

$(document).on('select2:open', () => {
	document.querySelector('.select2-search__field').focus();
	$('.select2-search__field').css("text-transform", "uppercase");
});

app.docReceive = {
	controller: 'c_detail_verifikasi_data/',
	// api: '',
	elm: {},
	message_hint_2: "Ketik untuk melakukan pencarian minimal 2 karakter",

	init: function () {
		var file = this;
		var tbl_document_list = file.tableDocumentList;

		//Responsive DataTable
		$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
			$($.fn.dataTable.tables(true)).DataTable()
				.columns.adjust()
				.responsive.recalc();
		});

	},

	tableDocumentList: $('#tbl-document-list').DataTable({
		"destroy": true,
		"paging": false,
		"lengthChange": false,
		"searching": true,
		"ordering": true,
		"info": true,
		"autoWidth": false,
	}),

}

$('#slc-tipe-nasabah-docrec').select2({
	theme: 'material',
	placeholder: 'PILIH PENERIMAAN DOKUMEN DARI',
	language: 'id',
	allowClear: true,
	// data: dummy
});

$('#slc-penerimaan-doc-docrec').select2({
	theme: 'material',
	placeholder: 'PILIH PENERIMAAN DOKUMEN DARI',
	language: 'id',
	allowClear: true,
	// data: dummy
});

$('#slc-doc-list-action').select2({
	theme: 'material',
	placeholder: 'PILIH PENERIMAAN DOKUMEN DARI',
	language: 'id',
	allowClear: true,
	// data: dummy
});
