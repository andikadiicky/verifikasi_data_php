$(document).ready(function () {
	app.customer.init();
});

$(document).on('select2:open', () => {
	document.querySelector('.select2-search__field').focus();
	$('.select2-search__field').css("text-transform", "uppercase");
});

app.customer = {
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

$("#slc-tipe-nasabah").on('change', function () {
	var x = $('#slc-tipe-nasabah').val();
	// console.log(x);
	if (x == 'PER') {
		$('#subtab-cust-personal').show();
		$('#subtab-cust-company').hide();
		$('#div-penjamin-pribadi').prop('hidden', false);
		$('#div-penjamin-company').prop('hidden', true);
	} else if (x == 'COM') {
		$('#subtab-cust-personal').hide();
		$('#subtab-cust-company').show();
		$('#div-penjamin-pribadi').prop('hidden', true);
		$('#div-penjamin-company').prop('hidden', false);
	} else if (x == '') {
		$('#subtab-cust-personal').hide();
		$('#subtab-cust-company').hide();
		$('#div-penjamin-pribadi').prop('hidden', true);
		$('#div-penjamin-company').prop('hidden', true);
	}
});

let tipe_nasabah = [{
	id: 'PER',
	text: 'PERSONAL'
},{
	id: 'COM',
	text: 'COMPANY'
}]

$('#slc-tipe-nasabah').select2({
	theme: 'material',
	placeholder: 'PILIH TIPE NASABAH',
	language: 'id',
	allowClear: true,
	data: tipe_nasabah
});
