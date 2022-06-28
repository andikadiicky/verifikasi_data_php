$(document).ready(function () {
	app.pemegangSaham.init();
});

$(document).on('select2:open', () => {
	document.querySelector('.select2-search__field').focus();
	$('.select2-search__field').css("text-transform", "uppercase");
});

app.pemegangSaham = {
	controller: 'c_detail_verifikasi_data/',
	// api: '',
	elm: {},
	message_hint_2: "Ketik untuk melakukan pencarian minimal 2 karakter",

	init: function () {
		var file = this;
		var tbl_pemegang_saham_pribadi = file.tablePemegangSahamPribadi;
		var tbl_pemegang_saham_perusahaan = file.tablePemegangSahamPerusahaan;
		var tbl_pemegang_saham_masyarakat = file.tablePemegangSahamMasyarakat;

		//Responsive DataTable
		$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
			$($.fn.dataTable.tables(true)).DataTable()
				.columns.adjust()
				.responsive.recalc();
		});

	},

	tablePemegangSahamPribadi: $('#tbl-pemegang-saham-pribadi').DataTable({
		"destroy": true,
		"paging": false,
		"lengthChange": false,
		"searching": false,
		"ordering": true,
		"info": false,
		"autoWidth": false,
	}),
	tablePemegangSahamPerusahaan: $('#tbl-pemegang-saham-perusahaan').DataTable({
		"destroy": true,
		"paging": false,
		"lengthChange": false,
		"searching": false,
		"ordering": true,
		"info": false,
		"autoWidth": false,
	}),
	tablePemegangSahamMasyarakat: $('#tbl-pemegang-saham-masyarakat').DataTable({
		"destroy": true,
		"paging": false,
		"lengthChange": false,
		"searching": false,
		"ordering": true,
		"info": false,
		"autoWidth": false,
	}),

}
