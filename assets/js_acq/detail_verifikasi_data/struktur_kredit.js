$(document).ready(function () {
	app.strukturKredit.init();
});

$(document).on('select2:open', () => {
	document.querySelector('.select2-search__field').focus();
	$('.select2-search__field').css("text-transform", "uppercase");
});

app.strukturKredit = {
	controller: 'c_detail_verifikasi_data/',
	// api: '',
	elm: {},
	message_hint_2: "Ketik untuk melakukan pencarian minimal 2 karakter",

	init: function () {
		var file = this;
		var tbl_balloon_pay = file.tableBalloonPayment;
        var tbl_stepping = file.tableStepping;

		//Responsive DataTable
		$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
			$($.fn.dataTable.tables(true)).DataTable()
				.columns.adjust()
				.responsive.recalc();
		});

		//Kondisi Tipe Pembayaran Angsuran
		$('#slc-tipe-pembayaran-angs').on('change', function () {
			if ($(this).val() == '03') {
				$('#div-decline-n').prop('hidden', false);

                $('#div-balloon-payment').prop('hidden', true);
				$('#div-table-balloon-payment').prop('hidden', true);
                $('#div-grace-period').prop('hidden', true);
                $('#div-holiday-payment').prop('hidden', true);
                $('#div-table-stepping').prop('hidden', true);
			} else if ($(this).val() == '05') {
				$('#div-balloon-payment').prop('hidden', false);
				$('#div-table-balloon-payment').prop('hidden', false);

                $('#div-decline-n').prop('hidden', true);
                $('#div-grace-period').prop('hidden', true);
                $('#div-holiday-payment').prop('hidden', true);
                $('#div-table-stepping').prop('hidden', true);
			} else if ($(this).val() == '06') {
				$('#div-grace-period').prop('hidden', false);

                $('#div-decline-n').prop('hidden', true);
                $('#div-balloon-payment').prop('hidden', true);
				$('#div-table-balloon-payment').prop('hidden', true);
                $('#div-holiday-payment').prop('hidden', true);
                $('#div-table-stepping').prop('hidden', true);
			} else if ($(this).val() == '07') {
				$('#div-holiday-payment').prop('hidden', false);

                $('#div-decline-n').prop('hidden', true);
                $('#div-balloon-payment').prop('hidden', true);
				$('#div-table-balloon-payment').prop('hidden', true);
                $('#div-grace-period').prop('hidden', true);
                $('#div-table-stepping').prop('hidden', true);
			} else if ($(this).val() == '08') {
				$('#div-table-stepping').prop('hidden', false);

                $('#div-decline-n').prop('hidden', true);
                $('#div-balloon-payment').prop('hidden', true);
				$('#div-table-balloon-payment').prop('hidden', true);
                $('#div-grace-period').prop('hidden', true);
                $('#div-holiday-payment').prop('hidden', true);
			} else {
                $('#div-table-stepping').prop('hidden', true);
                $('#div-decline-n').prop('hidden', true);
                $('#div-balloon-payment').prop('hidden', true);
				$('#div-table-balloon-payment').prop('hidden', true);
                $('#div-grace-period').prop('hidden', true);
                $('#div-holiday-payment').prop('hidden', true);
            }
		});

	},

	tableBalloonPayment: $('#tbl-balloon-payment').DataTable({
		"destroy": true,
		"paging": false,
		"lengthChange": false,
		"searching": false,
		"ordering": true,
		"info": false,
		"autoWidth": false,
	}),
    tableStepping: $('#tbl-stepping').DataTable({
		"destroy": true,
		"paging": false,
		"lengthChange": false,
		"searching": false,
		"ordering": true,
		"info": false,
		"autoWidth": false,
	})

}

$('#slc-tipe-pembayaran-angs').select2({
	theme: 'material',
	placeholder: 'PILIH',
	language: 'id',
	allowClear: true,
	data: [{
		id: '01',
		text: 'ANNUITY'
	}, {
		id: '02',
		text: 'DECLINE-R'
	}, {
		id: '03',
		text: 'DECLINE-N'
	}, {
		id: '04',
		text: 'SEASONAL'
	}, {
		id: '05',
		text: 'BALLOON PAYMENT'
	}, {
		id: '06',
		text: 'GRACE PERIOD'
	}, {
		id: '07',
		text: 'HOLIDAY PAYMENT'
	}, {
		id: '08',
		text: 'STEPPING'
	}]
});