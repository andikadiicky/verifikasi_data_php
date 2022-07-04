$(document).ready(function () {
	app.detailAplikasi.init();
});

$(document).on('select2:open', () => {
	document.querySelector('.select2-search__field').focus();
	$('.select2-search__field').css("text-transform", "uppercase");
});

app.detailAplikasi = {
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

		$("#btn-return-fde").on('click', function () {
			Swal.fire({
				title: 'Konfirmasi',
				text: 'Mohon untuk memberikan Alasan Return to FDE:',
				icon: 'question',
				input: 'textarea',
				inputAttributes: {
					autocapitalize: 'off'
				},
				showCancelButton: true,
				confirmButtonText: 'Ya',
				cancelButtonText: 'Tidak',
				allowOutsideClick: false
			}).then((result) => {
				if (result.isConfirmed) {
					Swal.fire({
						allowOutsideClick: false,
						title: 'Data berhasil di Return to FDE'
					})
				}
			})
		});

		$("#btn-return-ide").on('click', function () {
			Swal.fire({
				title: 'Konfirmasi',
				text: 'Mohon untuk memberikan Alasan Return to IDE:',
				icon: 'question',
				input: 'textarea',
				inputAttributes: {
					autocapitalize: 'off'
				},
				showCancelButton: true,
				confirmButtonText: 'Ya',
				cancelButtonText: 'Tidak',
				allowOutsideClick: false
			}).then((result) => {
				if (result.isConfirmed) {
					Swal.fire({
						allowOutsideClick: false,
						title: 'Data berhasil di Return IDE'
					})
				}
			})
		});

		$("#btn-konfirmasi-verifikasi").on('click', function () {
			Swal.fire({
				title: 'Konfirmasi',
				html: '<div>Apakah Anda Yakin Ingin melakukan Konfirmasi Atas Aplikasi "01042200000000"? <br><br> Data yang sudah di Konfirmasi tidak bisa di Return/Edit kembali</div>',
				icon: 'question',
				showCancelButton: true,
				confirmButtonText: 'Ya',
				cancelButtonText: 'Tidak',
				allowOutsideClick: false
			}).then((result) => {
				if (result.isConfirmed) {
					Swal.fire({
						allowOutsideClick: false,
						title: 'Data berhasil di Konfirmasi'
					})
				}
			})
		});
	},

}

$('#slc-cabang').select2({
	theme: 'material',
	placeholder: 'PILIH CABANG',
	language: 'id',
	allowClear: true,
	// data: dummy
});
