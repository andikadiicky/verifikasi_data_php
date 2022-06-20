$(document).ready(function () {
	app.pekerjaan.init();
});

$(document).on('select2:open', () => {
	document.querySelector('.select2-search__field').focus();
	$('.select2-search__field').css("text-transform", "uppercase");
});

app.pekerjaan = {
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
                switchBekerja();
            } else {
                // console.log('coba wiraswasta');
                switchUsaha();
            }
        });

        $('#slc-pekerjaan-pasangan').on('change', function () {
            if ($(this).val() == '01'){
                console.log('coba karyawan');
                switchBekerjaPasangan();
            } else {
                console.log('coba wiraswasta');
                switchUsahaPasangan();
            }
        });

        function switchLabelUsaha(id) {
            let label = $(id).siblings('.form__label').html();
            label = label.replace('BEKERJA', 'USAHA');
            $(id).siblings('.form__label').html(label);
        }
        function switchLabelBekerja(id) {
            let label = $(id).siblings('.form__label').html();
            label = label.replace('USAHA', 'BEKERJA');
            $(id).siblings('.form__label').html(label);
        }

        function switchBekerja() {
            switchLabelBekerja('#inp-nama-tempat-kerja');
            switchLabelBekerja('#inp-total-thn-lama-kerja');
            switchLabelBekerja('#inp-total-bln-lama-kerja');
            switchLabelBekerja('#inp-alamat-pekerjaan');
            switchLabelBekerja('#inp-rt-pekerjaan');
            switchLabelBekerja('#slc-zipcode-pekerjaan');
            switchLabelBekerja('#inp-kelurahan-pekerjaan');
            switchLabelBekerja('#inp-kecamatan-pekerjaan');
            switchLabelBekerja('#inp-kabkot-pekerjaan');
            switchLabelBekerja('#inp-provinsi-pekerjaan');
            switchLabelBekerja('#inp-notelp-pekerjaan');

            $('#div-jenis-tempat-kerja-karyawan').prop('hidden', false);
            $('#div-posisi-pekerjaan-karyawan').prop('hidden', false);
            $('#div-atasan-langsung-karyawan').prop('hidden', false);
            $('#div-status-pegawai-karyawan').prop('hidden', false);
            $('#div-status-lokasi-wira').prop('hidden', true);
            $('#div-lokasi-usaha-wira').prop('hidden', true);
            $('#div-total-pegawai-usaha-wira').prop('hidden', true);
        }
        function switchUsaha() {
            switchLabelUsaha('#inp-nama-tempat-kerja');
            switchLabelUsaha('#inp-total-thn-lama-kerja');
            switchLabelUsaha('#inp-total-bln-lama-kerja');
            switchLabelUsaha('#inp-alamat-pekerjaan');
            switchLabelUsaha('#inp-rt-pekerjaan');
            switchLabelUsaha('#slc-zipcode-pekerjaan');
            switchLabelUsaha('#inp-kelurahan-pekerjaan');
            switchLabelUsaha('#inp-kecamatan-pekerjaan');
            switchLabelUsaha('#inp-kabkot-pekerjaan');
            switchLabelUsaha('#inp-provinsi-pekerjaan');
            switchLabelUsaha('#inp-notelp-pekerjaan');

            $('#div-jenis-tempat-kerja-karyawan').prop('hidden', true);
            $('#div-posisi-pekerjaan-karyawan').prop('hidden', true);
            $('#div-atasan-langsung-karyawan').prop('hidden', true);
            $('#div-status-pegawai-karyawan').prop('hidden', true);
            $('#div-status-lokasi-wira').prop('hidden', false);
            $('#div-lokasi-usaha-wira').prop('hidden', false);
            $('#div-total-pegawai-usaha-wira').prop('hidden', false);
        }

        function switchBekerjaPasangan() {
            switchLabelBekerja('#inp-nama-tempat-kerja-pasangan');
            switchLabelBekerja('#slc-jenis-tempat-kerja-pasangan');
            switchLabelBekerja('#inp-total-thn-lama-kerja-pasangan');
            switchLabelBekerja('#inp-total-bln-lama-kerja-pasangan');
            switchLabelBekerja('#inp-alamat-pekerjaan-pasangan');
            switchLabelBekerja('#inp-rt-pekerjaan-pasangan');
            switchLabelBekerja('#slc-zipcode-pekerjaan-pasangan');
            switchLabelBekerja('#inp-kelurahan-pekerjaan-pasangan');
            switchLabelBekerja('#inp-kecamatan-pekerjaan-pasangan');
            switchLabelBekerja('#inp-kabkot-pekerjaan-pasangan');
            switchLabelBekerja('#inp-provinsi-pekerjaan-pasangan');
            switchLabelBekerja('#inp-notelp-pekerjaan-pasangan');

            $('#div-jabatan-pasangan-karyawan').prop('hidden', false);
            $('#div-status-pegawai-pasangan-karyawan').prop('hidden', false);
            $('#div-bidang-usaha-pasangan-karyawan').prop('hidden', true);
        }
        function switchUsahaPasangan() {
            switchLabelUsaha('#inp-nama-tempat-kerja-pasangan');
            switchLabelUsaha('#slc-jenis-tempat-kerja-pasangan');
            switchLabelUsaha('#inp-total-thn-lama-kerja-pasangan');
            switchLabelUsaha('#inp-total-bln-lama-kerja-pasangan');
            switchLabelUsaha('#inp-alamat-pekerjaan-pasangan');
            switchLabelUsaha('#inp-rt-pekerjaan-pasangan');
            switchLabelUsaha('#slc-zipcode-pekerjaan-pasangan');
            switchLabelUsaha('#inp-kelurahan-pekerjaan-pasangan');
            switchLabelUsaha('#inp-kecamatan-pekerjaan-pasangan');
            switchLabelUsaha('#inp-kabkot-pekerjaan-pasangan');
            switchLabelUsaha('#inp-provinsi-pekerjaan-pasangan');
            switchLabelUsaha('#inp-notelp-pekerjaan-pasangan');

            $('#div-jabatan-pasangan-karyawan').prop('hidden', true);
            $('#div-status-pegawai-pasangan-karyawan').prop('hidden', true);
            $('#div-bidang-usaha-pasangan-karyawan').prop('hidden', false);
        }

	},

}

let pekerjaan_nasabah = [{
	id: '01',
	text: 'KARYAWAN'
},{
	id: '02',
	text: 'WIRASWASTA'
}]

let pekerjaan_pasangan = [{
	id: '01',
	text: 'KARYAWAN'
},{
	id: '02',
	text: 'WIRASWASTA'
}]

$('#slc-pekerjaan-nasabah').select2({
	theme: 'material',
	placeholder: 'PILIH PEKERJAAN NASABAH',
	language: 'id',
	allowClear: true,
	data: pekerjaan_nasabah
});

$('#slc-pekerjaan-pasangan').select2({
	theme: 'material',
	placeholder: 'PILIH PEKERJAAN PASANGAN',
	language: 'id',
	allowClear: true,
	data: pekerjaan_nasabah
});

$('#slc-join-income').select2({
	theme: 'material',
	placeholder: 'PILIH',
	language: 'id',
	allowClear: true,
	// data: dummy
});
$('#slc-jenis-tempat-kerja').select2({
	theme: 'material',
	placeholder: 'PILIH',
	language: 'id',
	allowClear: true,
	// data: dummy
});
$('#slc-sektor-ekonomi').select2({
	theme: 'material',
	placeholder: 'PILIH',
	language: 'id',
	allowClear: true,
	// data: dummy
});
$('#slc-status-lokasi').select2({
	theme: 'material',
	placeholder: 'PILIH',
	language: 'id',
	allowClear: true,
	// data: dummy
});
$('#slc-lokasi-usaha').select2({
	theme: 'material',
	placeholder: 'PILIH',
	language: 'id',
	allowClear: true,
	// data: dummy
});
$('#slc-posisi-pekerjaan').select2({
	theme: 'material',
	placeholder: 'PILIH',
	language: 'id',
	allowClear: true,
	// data: dummy
});
$('#slc-status-pegawai').select2({
	theme: 'material',
	placeholder: 'PILIH',
	language: 'id',
	allowClear: true,
	// data: dummy
});
$('#slc-zipcode-pekerjaan').select2({
	theme: 'material',
	placeholder: 'PILIH',
	language: 'id',
	allowClear: true,
	// data: dummy
});

$('#slc-jenis-tempat-kerja-pasangan').select2({
	theme: 'material',
	placeholder: 'PILIH',
	language: 'id',
	allowClear: true,
	// data: dummy
});
$('#slc-jabatan-pasangan').select2({
	theme: 'material',
	placeholder: 'PILIH',
	language: 'id',
	allowClear: true,
	// data: dummy
});
$('#slc-status-pegawai-pasangan').select2({
	theme: 'material',
	placeholder: 'PILIH',
	language: 'id',
	allowClear: true,
	// data: dummy
});
$('#slc-bidang-usaha-pasangan').select2({
	theme: 'material',
	placeholder: 'PILIH',
	language: 'id',
	allowClear: true,
	// data: dummy
});
$('#slc-zipcode-pekerjaan-pasangan').select2({
	theme: 'material',
	placeholder: 'PILIH',
	language: 'id',
	allowClear: true,
	// data: dummy
});
