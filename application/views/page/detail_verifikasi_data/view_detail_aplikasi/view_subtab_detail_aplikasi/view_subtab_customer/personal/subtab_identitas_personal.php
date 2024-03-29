<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12" id="card-form">
            <div class="use-bottom-border" style="margin-top: 10px;">
                <h4>
                    <span>CUSTOMER PERORANGAN - IDENTITAS</span>
                </h4>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form__group field">
                            <select class="form-control select2bs4" style="width: 100%;" id="slc-jenis-identitas-personal" disabled>
                                <option></option>
                            </select>
                            <label for="slc-jenis-identitas-personal" class="form__label">JENIS IDENTITAS <span class="mandatory"> *</span></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form__group field">
                            <input type="text" class="form__field inp-digit" id="inp-no-ktp-personal" placeholder="NO KTP NASABAH" disabled>
                            <label for="inp-no-ktp-personal" class="form__label">NO KTP NASABAH <span class="mandatory"> *</span></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form__group field">
                            <select class="form-control select2bs4" style="width: 100%;" id="slc-kewarganegaraan-personal" disabled>
                                <option></option>
                            </select>
                            <label for="slc-kewarganegaraan-personal" class="form__label">KEWARGANEGARAAN</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form__group field">
                            <input type="text" class="form__field inp-digit" id="inp-kode-negara" placeholder="KODE NEGARA" disabled>
                            <label for="inp-kode-negara" class="form__label">KODE NEGARA <span class="mandatory"> *</span></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form__group field">
                                    <div class="input-group flex-nowrap">
                                        <input id="inp-start-tgl-identitas" type="text" class="form__field datetimepicker-input tanggal inp-tanggal" data-toggle="datetimepicker" disabled>
                                        <span class="input-group-text" style="border: unset; border-radius: unset; border-bottom: 2px solid #9b9b9b;"><i class="far fa-calendar-alt"></i></span>
                                    </div>
                                    <label for="" class="form__label">TANGGAL IDENTITAS <span class="mandatory"> *</span></label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form__group field" style="font-weight:bold">
                                    <center>
                                        s/d
                                    </center>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form__group field">
                                    <div class="input-group flex-nowrap">
                                        <input id="inp-until-tgl-identitas" type="text" class="form__field datetimepicker-input tanggal inp-tanggal" data-toggle="datetimepicker" disabled>
                                        <span class="input-group-text" style="border: unset; border-radius: unset; border-bottom: 2px solid #9b9b9b;"><i class="far fa-calendar-alt"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form__group field">
                            <select class="form-control select2bs4" style="width: 100%;" id="slc-agama" disabled>
                                <option></option>
                            </select>
                            <label for="slc-agama" class="form__label">AGAMA</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form__group field">
                            <select class="form-control select2bs4" style="width: 100%;" id="slc-pendidikan-personal" disabled>
                                <option></option>
                            </select>
                            <label for="slc-pendidikan-personal" class="form__label">PENDIDIKAN <span class="mandatory"> *</span></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form__group field">
                            <input type="text" class="form__field inp-alphabetical" placeholder="NAMA KTP NASABAH" id="inp-nama-deb-personal" disabled>
                            <label for="inp-nama-deb-personal" class="form__label">NAMA SESUAI KTP <span class="mandatory"> *</span></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form__group field">
                            <input type="text" class="form__field inp-alphabetical" placeholder="NAMA LENGKAP TANPA SINGKATAN DAN TANPA GELAR" id="inp-nama-tanpa-gelar" disabled>
                            <label for="inp-nama-tanpa-gelar" class="form__label">NAMA LENGKAP TANPA SINGKATAN DAN TANPA GELAR <span class="mandatory"> *</span></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form__group field">
                            <input type="text" class="form__field inp-alphabetical" placeholder="TEMPAT" id="" disabled>
                            <input id="" type="text" class="form__field datetimepicker-input tanggal" placeholder="TANGGAL LAHIR" data-toggle="datetimepicker" disabled>
                            <label for="inp-nama-tanpa-gelar" class="form__label">TEMPAT/TANGGAL LAHIR <span class="mandatory"> *</span></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form__group field">
                            <select class="form-control select2bs4" style="width: 100%;" id="slc-jenis-kelamin-personal" disabled>
                                <option></option>
                            </select>
                            <label for="slc-jenis-kelamin-personal" class="form__label">JENIS KELAMIN <span class="mandatory"> *</span></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form__group field">
                            <input type="text" class="form__field inp-alphabetical" placeholder="NAMA GADIS IBU KANDUNG" id="inp-nama-ibu-personal" disabled>
                            <label for="inp-nama-ibu-personal" class="form__label">NAMA GADIS IBU KANDUNG <span class="mandatory"> *</span></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form__group field">
                            <div class="input-group flex-nowrap">
                                <input id="inp-email-personal" type="text" class="form__field" disabled>
                                <span class="input-group-text" style="border: unset; border-radius: unset; border-bottom: 2px solid #9b9b9b;"><i class="fas fa-envelope-open"></i></span>
                            </div>
                            <label for="inp-email-personal" class="form__label">EMAIL</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form__group field">
                            <div class="input-group flex-nowrap">
                                <input id="inp-no-hp-1" type="text" class="form__field inp-digit" disabled>
                                <span class="input-group-text" style="border: unset; border-radius: unset; border-bottom: 2px solid #9b9b9b;"><i class="fas fa-mobile-alt"></i></span>
                            </div>
                            <label for="inp-no-hp-1" class="form__label">NO HANDPHONE 1 <span class="mandatory"> *</span></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form__group field">
                            <div class="input-group flex-nowrap">
                                <input id="inp-no-hp-2" type="text" class="form__field inp-digit" disabled>
                                <span class="input-group-text" style="border: unset; border-radius: unset; border-bottom: 2px solid #9b9b9b;"><i class="fas fa-mobile-alt"></i></span>
                            </div>
                            <label for="inp-no-hp-2" class="form__label">NO HANDPHONE 2 <span class="mandatory"> *</span></label>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form__group field">
                            <select class="form-control select2bs4" style="width: 100%;" id="slc-status-kawin-personal" disabled>
                                <option></option>
                            </select>
                            <label for="slc-status-kawin-personal" class="form__label">STATUS PERKAWINAN <span class="mandatory"> *</span></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form__group field">
                            <label class="radio-inline">
                                <input type="radio" name="perjanjianPisahHarta" value="" id="radio-pisah-ya" disabled> Ya
                            </label>
                            <label class="radio-inline" style="margin-left: 10px;">
                                <input type="radio" name="perjanjianPisahHarta" value="" id="radio-pisah-tidak" disabled> Tidak
                            </label>
                            <label for="slc-tipe-pembiayaan" class="form__label">ADA/TIDAK PERJANJIAN PISAH HARTA <span class="mandatory"> *</span></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form__group field">
                            <input type="text" class="form__field inp-digit" placeholder="JUMLAH TANGGUNGAN" id="inp-jml-tanggungan-personal" disabled>
                            <label for="inp-jml-tanggungan-personal" class="form__label">JUMLAH TANGGUNGAN <span class="mandatory"> *</span></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form__group field">
                            <input type="text" class="form__field inp-alphabetical" placeholder="NAMA PASANGAN" id="inp-nama-pasangan" disabled>
                            <label for="inp-nama-pasangan" class="form__label">NAMA PASANGAN <span class="mandatory"> *</span></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form__group field">
                            <select class="form-control select2bs4" style="width: 100%;" id="slc-status-hub" disabled>
                                <option></option>
                            </select>
                            <label for="slc-status-hub" class="form__label">STATUS HUBUNGAN <span class="mandatory"> *</span></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form__group field">
                            <select class="form-control select2bs4" style="width: 100%;" id="slc-jenis-identitas-pasangan" disabled>
                                <option selected disabled=""></option>
                            </select>
                            <label for="slc-jenis-identitas-pasangan" class="form__label">JENIS IDENTITAS PASANGAN <span class="mandatory"> *</span></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form__group field">
                            <input type="text" class="form__field inp-digit" id="inp-no-id-pasangan" placeholder="NO IDENTITAS PASANGAN" disabled>
                            <label for="inp-no-id-pasangan" class="form__label">NO IDENTITAS PASANGAN <span class="mandatory"> *</span></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form__group field">
                            <input type="text" class="form__field inp-alphabetical" placeholder="TEMPAT" id="" disabled>
                            <input id="" type="text" class="form__field datetimepicker-input tanggal" placeholder="TANGGAL LAHIR" data-toggle="datetimepicker" disabled>
                            <label for="inp-nama-tanpa-gelar" class="form__label">TEMPAT/TANGGAL LAHIR PASANGAN <span class="mandatory"> *</span></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form__group field">
                            <input type="text" class="form__field inp-digit" id="inp-no-id-pasangan" placeholder="NO KARTU KELUARGA" disabled>
                            <label for="inp-no-id-pasangan" class="form__label">NO KARTU KELUARGA <span class="mandatory"> *</span></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form__group field">
                            <div class="input-group flex-nowrap">
                                <input id="inp-no-hp-pasangan" type="text" class="form__field inp-digit" disabled>
                                <span class="input-group-text" style="border: unset; border-radius: unset; border-bottom: 2px solid #9b9b9b;"><i class="fas fa-mobile-alt"></i></span>
                            </div>
                            <label for="inp-no-hp-pasangan" class="form__label">NO HANDPHONE PASANGAN <span class="mandatory"> *</span></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form__group field">
                            <select class="form-control select2bs4" style="width: 100%;" id="slc-kepemilikan-npwp" disabled>
                                <option></option>
                            </select>
                            <label for="slc-kepemilikan-npwp" class="form__label">KEPEMILIKAN NPWP <span class="mandatory"> *</span></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form__group field">
                            <input type="text" class="form__field inp-digit" placeholder="NO NPWP" id="inp-no-npwp" disabled>
                            <label for="inp-no-npwp" class="form__label">NO NPWP <span class="mandatory"> *</span></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form__group field">
                            <input type="text" class="form__field inp-alphabetical" placeholder="NAMA SESUAI NPWP" id="inp-nama-sesuai-npwp" disabled>
                            <label for="inp-nama-sesuai-npwp" class="form__label">NAMA SESUAI NPWP <span class="mandatory"> *</span></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form__group field">
                            <label class="radio-inline">
                                <input type="radio" name="pilihWatchlist" value="" id="radio-watchlist-ya" disabled> Ya
                            </label>
                            <label class="radio-inline" style="margin-left: 10px;">
                                <input type="radio" name="pilihWatchlist" value="" id="radio-watchlist-tidak" disabled> Tidak
                            </label>
                            <label class="form__label">WATCHLIST? <span class="mandatory"> *</span></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form__group field">
                            <select class="form-control select2bs4" style="width: 100%;" id="slc-reason-watchlist" disabled>
                                <option></option>
                            </select>
                            <label for="slc-reason-watchlist" class="form__label">REASON WATCHLIST <span class="mandatory"> *</span></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form__group field">
                            <textarea class="form__field" id="inp-catatan" disabled></textarea>
                            <label for="inp-catatan" class="form__label">CATATAN <span class="mandatory"> *</span></label>
                        </div>
                    </div>
                </div>
            </div>

            <div id="div-info-alamat">
                <div class="col-lg-12">
                    <div class="use-bottom-border">
                        <h5>
                            <span>Informasi Alamat</span>
                        </h5>
                    </div>
                </div>
                <div class="col-md-12">
                    <table id="tbl-info-alamat-personal" class="table table-bordered table-hover dt-responsive display center-td">
                        <thead>
                            <tr>
                                <th>Alamat Tagih</th>
                                <th>Jenis Alamat</th>
                                <th>Alamat</th>
                                <th>RT</th>
                                <th>RW</th>
                                <th>Kelurahan</th>
                                <th>Kecamatan</th>
                                <th>Kab/Kota</th>
                                <th>Provinsi</th>
                                <th>Kode Pos</th>
                                <th>Telepon</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <!-- dummy data table -->
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                        <!-- dummy data table -->
                    </table>
                </div>
            </div>

            <div id="div-emergency-contact">
                <div class="col-lg-12">
                    <div class="use-bottom-border">
                        <h5>
                            <span>Emergency Contact</span>
                        </h5>
                    </div>
                </div>
                <div class="col-md-12">
                    <table id="tbl-emergency-contact-personal" class="table table-bordered table-hover dt-responsive display center-td">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Hubungan Dengan Nasabah</th>
                                <th>No HP/No Telp 1</th>
                                <th>Aksi</th>

                            </tr>
                        </thead>
                        <!-- dummy data table -->
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                        <!-- dummy data table -->
                    </table>
                </div>
            </div>

            <div id="div-informasi-bank">
                <div class="col-lg-12">
                    <div class="use-bottom-border">
                        <h5>
                            <span>Informasi Bank</span>
                        </h5>
                    </div>
                </div>
                <div class="col-md-12">
                    <table id="tbl-info-bank-personal" class="table table-bordered table-hover dt-responsive display center-td">
                        <thead>
                            <tr>
                                <th>Nama Bank</th>
                                <th>Cabang Bank</th>
                                <th>Nomor Akun</th>
                                <th>Aksi</th>

                            </tr>
                        </thead>
                        <!-- dummy data table -->
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                        <!-- dummy data table -->
                    </table>
                </div>
            </div>

            <div id="div-informasi-kartukredit">
                <div class="col-lg-12">
                    <div class="use-bottom-border">
                        <h5>
                            <span>Informasi Kartu Kredit</span>
                        </h5>
                    </div>
                </div>
                <div class="col-md-12">
                    <table id="tbl-info-kartukredit-personal" class="table table-bordered table-hover dt-responsive display center-td">
                        <thead>
                            <tr>
                                <th>Tipe Kartu Kredit</th>
                                <th>Issuer</th>
                                <th>Nomor Kartu Kredit</th>
                                <th>Member Sejak</th>
                                <th>Aksi</th>

                            </tr>
                        </thead>
                        <!-- dummy data table -->
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                        <!-- dummy data table -->
                    </table>
                </div>
            </div>

        </div>
    </div>

    <div class="add-margin-top" style="display: block;">
        <button type="button" class="btn btn-primary" id="confirm-tab-identitas-per">Saya Sudah Membaca Tab Ini</button>
    </div>
    <button type="button" class="btn btn-danger btn-circle btn-lg btn-back-to-top">
        <i class="fas fa-arrow-up"></i>
    </button>
</div>