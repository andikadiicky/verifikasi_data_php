$(document).ready(function () {
	app.objekJaminan.init();
});

$(document).on('select2:open', () => {
	document.querySelector('.select2-search__field').focus();
	$('.select2-search__field').css("text-transform", "uppercase");
});

app.objekJaminan = {
	controller: 'c_detail_verifikasi_data/',
	// api: '',
	elm: {},
	message_hint_2: "Ketik untuk melakukan pencarian minimal 2 karakter",

	init: function () {
		var file = this;
		var tbl_info_external = file.tableObjekJaminan;

		//Responsive DataTable
		$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
			$($.fn.dataTable.tables(true)).DataTable()
				.columns.adjust()
				.responsive.recalc();
		});

		//Kondisi title struktur kredit
		$('#slc-tipe-pembiayaan').on('change', function () {
			if ($(this).val() == '01') {
				let label = $('#title-struktur-kredit').html();
				label = label.replace('PEMBIAYAAN', 'KREDIT');
				$('#title-struktur-kredit').html(label);
			} else {
				let label = $('#title-struktur-kredit').html();
				label = label.replace('KREDIT', 'PEMBIAYAAN');
				$('#title-struktur-kredit').html(label);
			}
		});

		$('#close-detail-obj-jaminan').on('click', function () {
			$('#table-obj-jaminan-automotive').show();
			$('#hidden-content-objek-jaminan').hide();
		});

		//Detail table objek jaminan
		$("#tbl-obj-jaminan-automotive tbody").on('click', '#dtl-obj-jaminan', function () {
			$('#hidden-content-objek-jaminan').show();
			$('#table-obj-jaminan-automotive').hide();
		});

	},

	tableObjekJaminan: $('#tbl-obj-jaminan-automotive').DataTable({
		"destroy": true,
		"paging": true,
		"lengthChange": false,
		"searching": true,
		"ordering": true,
		"info": true,
		"autoWidth": false,
	})

}