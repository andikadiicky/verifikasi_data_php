$(document).ready(function () {
	app.pendapatan.init();
});

$(document).on('select2:open', () => {
	document.querySelector('.select2-search__field').focus();
	$('.select2-search__field').css("text-transform", "uppercase");
});

app.pendapatan = {
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

        $('#slc-pekerjaan-nasabah').on('change', function () {
            if ($(this).val() == '01'){
                // console.log('coba karyawan');
                $('#pendapatan-karyawan').prop('hidden', false);
                $('#pendapatan-wiraswasta').prop('hidden', true);
            } else {
                // console.log('coba wiraswasta');
                $('#pendapatan-karyawan').prop('hidden', true);
                $('#pendapatan-wiraswasta').prop('hidden', false);
            }
        });

	},

}

// $('#').select2({
// 	theme: 'material',
// 	placeholder: 'PILIH PEKERJAAN NASABAH',
// 	language: 'id',
// 	allowClear: true,
// 	// data: dummy
// });
