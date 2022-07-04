<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12" id="card-form">
            <div class="use-bottom-border" style="margin-top: 10px;">
                <h4>
                    <span>CUSTOMER PERUSAHAAN - PIC PERUSAHAAN 1</span>
                </h4>
            </div>
            <div id="div-pic-comp-satu">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form__group field">
                                <select class="form-control select2bs4" style="width: 100%;" id="slc-jenis-identitas-picsatu" disabled>
                                    <option></option>
                                </select>
                                <label for="slc-jenis-identitas-picsatu" class="form__label">JENIS IDENTITAS <span class="mandatory"> *</span></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form__group field">
                                <input type="text" class="form__field inp-digit" id="inp-no-identitas-picsatu" placeholder="NO IDENTITAS" disabled>
                                <label for="inp-no-identitas-picsatu" class="form__label">NO IDENTITAS</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form__group field">
                                <input type="text" class="form__field inp-alphabetical" id="inp-nama-lengkap-pic-satu" placeholder="NAMA LENGKAP SESUAI IDENTITAS" disabled>
                                <label for="inp-nama-lengkap-pic-satu" class="form__label">NAMA LENGKAP SESUAI IDENTITAS</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form__group field">
                                <input id="inp-tgl-lahir-picsatu" type="text" class="form__field datetimepicker-input tanggal" data-toggle="datetimepicker" disabled>
                                <label for="inp-tgl-lahir-picsatu" class="form__label"><i class="fa fa-calendar"></i> TANGGAL LAHIR SESUAI IDENTITAS</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form__group field">
                                <input type="text" class="form__field inp-alphabetical" id="inp-tempat-lahir-picsatu" placeholder="TEMPAT LAHIR SESUAI IDENTITAS" disabled>
                                <label for="inp-tempat-lahir-picsatu" class="form__label">TEMPAT LAHIR SESUAI IDENTITAS</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form__group field">
                                <select class="form-control select2bs4" style="width: 100%;" id="slc-jenis-kel-picsatu" disabled>
                                    <option></option>
                                </select>
                                <label for="slc-jenis-kel-picsatu" class="form__label">JENIS KELAMIN</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form__group field">
                                <select class="form-control select2bs4" style="width: 100%;" id="slc-nationality-picsatu" disabled>
                                    <option></option>
                                </select>
                                <label for="slc-nationality-picsatu" class="form__label">KEWARGANEGARAAN <span class="mandatory"> *</span></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form__group field">
                                <select class="form-control select2bs4" style="width: 100%;" id="slc-pemilik-saham-picsatu" disabled>
                                    <option></option>
                                </select>
                                <label for="slc-pemilik-saham-picsatu" class="form__label">PEMILIK SAHAM? <span class="mandatory"> *</span></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form__group field">
                                <select class="form-control select2bs4" style="width: 100%;" id="slc-jabatan-picsatu" disabled>
                                    <option></option>
                                </select>
                                <label for="slc-jabatan-picsatu" class="form__label">JABATAN PIC PERUSAHAAN <span class="mandatory"> *</span></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form__group field">
                                <input type="text" class="form__field inp-digit" id="inp-no-hp-picsatu" placeholder="NO HANDPHONE" disabled>
                                <label for="inp-no-hp-picsatu" class="form__label">NO HANDPHONE</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form__group field">
                                <input type="text" class="form__field inp-alphabetical" id="inp-email-picsatu" placeholder="EMAIL" disabled>
                                <label for="inp-email-picsatu" class="form__label">EMAIL</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form__group field">
                                <input type="text" class="form__field inp-digit" id="inp-kepemilikan-saham-picsatu" placeholder="KEPEMILIKAN SAHAM" disabled>
                                <label for="inp-kepemilikan-saham-picsatu" class="form__label">KEPEMILIKAN SAHAM</label>
                            </div>
                        </div>
                        <div class="form-group" style="margin-bottom: unset;">
                            <input class="form-check-input" type="radio" name="radioTTDPicSatu" id="radio-ttd-picsatu" value="YA" disabled style="margin-left:unset">
                            <label class="form-check-label" for="radioTTDPicSatu" style="margin-left: 1.25rem;">Yang Bertanda Tangan Di Perjanjian Kontrak</label>
                        </div>
                        <div style="display: flex; justify-content:flex-end; right:0; bottom:0;">
                            <button class="btn btn-primary" id="btn-" disabled>Tambah</button>
                        </div>
                    </div>
                </div>
                <div id="alamat-pic-satu">
                    <div class="col-lg-12">
                        <div class="use-bottom-border">
                            <h5>
                                <span>Informasi Alamat</span>
                            </h5>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <table id="tbl-info-alamat-picsatu" class="table table-bordered table-hover dt-responsive display center-td">
                            <thead>
                                <tr>
                                    <th>Alamat KTP</th>
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
                                    <td style="text-align: center"><a type='button' class='fas fa-pen fa-red' id=""></a></td>
                                </tr>
                            </tbody>
                            <!-- dummy data table -->
                        </table>
                    </div>
                </div>
            </div>
            <br>

            <div class="use-bottom-border">
                <h4>
                    <span>CUSTOMER PERUSAHAAN - PIC PERUSAHAAN 2</span>
                </h4>
            </div>
            <div id="div-pic-comp-dua">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form__group field">
                                <select class="form-control select2bs4" style="width: 100%;" id="slc-jenis-identitas-picdua" disabled>
                                    <option></option>
                                </select>
                                <label for="slc-jenis-identitas-picdua" class="form__label">JENIS IDENTITAS <span class="mandatory"> *</span></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form__group field">
                                <input type="text" class="form__field inp-digit" id="inp-no-identitas-picdua" placeholder="NO IDENTITAS" disabled>
                                <label for="inp-no-identitas-picdua" class="form__label">NO IDENTITAS</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form__group field">
                                <input type="text" class="form__field inp-alphabetical" id="inp-nama-lengkap-pic-satu" placeholder="NAMA LENGKAP SESUAI IDENTITAS" disabled>
                                <label for="inp-nama-lengkap-pic-satu" class="form__label">NAMA LENGKAP SESUAI IDENTITAS</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form__group field">
                                <input id="inp-tgl-lahir-picdua" type="text" class="form__field datetimepicker-input tanggal" data-toggle="datetimepicker" disabled>
                                <label for="inp-tgl-lahir-picdua" class="form__label"><i class="fa fa-calendar"></i> TANGGAL LAHIR SESUAI IDENTITAS</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form__group field">
                                <input type="text" class="form__field inp-alphabetical" id="inp-tempat-lahir-picdua" placeholder="TEMPAT LAHIR SESUAI IDENTITAS" disabled>
                                <label for="inp-tempat-lahir-picdua" class="form__label">TEMPAT LAHIR SESUAI IDENTITAS</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form__group field">
                                <select class="form-control select2bs4" style="width: 100%;" id="slc-jenis-kel-picdua" disabled>
                                    <option></option>
                                </select>
                                <label for="slc-jenis-kel-picdua" class="form__label">JENIS KELAMIN</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form__group field">
                                <select class="form-control select2bs4" style="width: 100%;" id="slc-nationality-picdua" disabled>
                                    <option></option>
                                </select>
                                <label for="slc-nationality-picdua" class="form__label">KEWARGANEGARAAN <span class="mandatory"> *</span></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form__group field">
                                <select class="form-control select2bs4" style="width: 100%;" id="slc-pemilik-saham-picdua" disabled>
                                    <option></option>
                                </select>
                                <label for="slc-pemilik-saham-picdua" class="form__label">PEMILIK SAHAM? <span class="mandatory"> *</span></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form__group field">
                                <select class="form-control select2bs4" style="width: 100%;" id="slc-jabatan-picdua" disabled>
                                    <option></option>
                                </select>
                                <label for="slc-jabatan-picdua" class="form__label">JABATAN PIC PERUSAHAAN <span class="mandatory"> *</span></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form__group field">
                                <input type="text" class="form__field inp-digit" id="inp-no-hp-picdua" placeholder="NO HANDPHONE" disabled>
                                <label for="inp-no-hp-picdua" class="form__label">NO HANDPHONE</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form__group field">
                                <input type="text" class="form__field inp-alphabetical" id="inp-email-picdua" placeholder="EMAIL" disabled>
                                <label for="inp-email-picdua" class="form__label">EMAIL</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form__group field">
                                <input type="text" class="form__field inp-digit" id="inp-kepemilikan-saham-picdua" placeholder="KEPEMILIKAN SAHAM" disabled>
                                <label for="inp-kepemilikan-saham-picdua" class="form__label">KEPEMILIKAN SAHAM</label>
                            </div>
                        </div>
                        <div class="form-group" style="margin-bottom: unset;">
                            <input class="form-check-input" type="radio" name="radioTTDPicDua" id="radio-ttd-picdua" value="YA" disabled style="margin-left:unset">
                            <label class="form-check-label" for="radioTTDPicDua" style="margin-left: 1.25rem;">Yang Bertanda Tangan Di Perjanjian Kontrak</label>
                        </div>
                        <div style="display: flex; justify-content:flex-end; right:0; bottom:0;">
                            <button class="btn btn-primary" id="btn-" disabled>Tambah</button>
                        </div>
                    </div>
                </div>
                <div id="alamat-pic-dua">
                    <div class="col-lg-12">
                        <div class="use-bottom-border">
                            <h5>
                                <span>Informasi Alamat</span>
                            </h5>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <table id="tbl-info-alamat-picdua" class="table table-bordered table-hover dt-responsive display center-td">
                            <thead>
                                <tr>
                                    <th>Alamat KTP</th>
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
                                    <td style="text-align: center"><a type='button' class='fas fa-pen fa-red' id=""></a></td>
                                </tr>
                            </tbody>
                            <!-- dummy data table -->
                        </table>
                    </div>
                </div>
            </div>
            <br>

            <div class="use-bottom-border">
                <h4>
                    <span>CUSTOMER PERUSAHAAN - PIC PERUSAHAAN 3</span>
                </h4>
            </div>
            <div id="div-pic-comp-tiga">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form__group field">
                                <select class="form-control select2bs4" style="width: 100%;" id="slc-jenis-identitas-pictiga" disabled>
                                    <option></option>
                                </select>
                                <label for="slc-jenis-identitas-pictiga" class="form__label">JENIS IDENTITAS <span class="mandatory"> *</span></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form__group field">
                                <input type="text" class="form__field inp-digit" id="inp-no-identitas-pictiga" placeholder="NO IDENTITAS" disabled>
                                <label for="inp-no-identitas-pictiga" class="form__label">NO IDENTITAS</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form__group field">
                                <input type="text" class="form__field inp-alphabetical" id="inp-nama-lengkap-pic-satu" placeholder="NAMA LENGKAP SESUAI IDENTITAS" disabled>
                                <label for="inp-nama-lengkap-pic-satu" class="form__label">NAMA LENGKAP SESUAI IDENTITAS</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form__group field">
                                <input id="inp-tgl-lahir-pictiga" type="text" class="form__field datetimepicker-input tanggal" data-toggle="datetimepicker" disabled>
                                <label for="inp-tgl-lahir-pictiga" class="form__label"><i class="fa fa-calendar"></i> TANGGAL LAHIR SESUAI IDENTITAS</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form__group field">
                                <input type="text" class="form__field inp-alphabetical" id="inp-tempat-lahir-pictiga" placeholder="TEMPAT LAHIR SESUAI IDENTITAS" disabled>
                                <label for="inp-tempat-lahir-pictiga" class="form__label">TEMPAT LAHIR SESUAI IDENTITAS</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form__group field">
                                <select class="form-control select2bs4" style="width: 100%;" id="slc-jenis-kel-pictiga" disabled>
                                    <option></option>
                                </select>
                                <label for="slc-jenis-kel-pictiga" class="form__label">JENIS KELAMIN</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form__group field">
                                <select class="form-control select2bs4" style="width: 100%;" id="slc-nationality-pictiga" disabled>
                                    <option></option>
                                </select>
                                <label for="slc-nationality-pictiga" class="form__label">KEWARGANEGARAAN <span class="mandatory"> *</span></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form__group field">
                                <select class="form-control select2bs4" style="width: 100%;" id="slc-pemilik-saham-pictiga" disabled>
                                    <option></option>
                                </select>
                                <label for="slc-pemilik-saham-pictiga" class="form__label">PEMILIK SAHAM? <span class="mandatory"> *</span></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form__group field">
                                <select class="form-control select2bs4" style="width: 100%;" id="slc-jabatan-pictiga" disabled>
                                    <option></option>
                                </select>
                                <label for="slc-jabatan-pictiga" class="form__label">JABATAN PIC PERUSAHAAN <span class="mandatory"> *</span></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form__group field">
                                <input type="text" class="form__field inp-digit" id="inp-no-hp-pictiga" placeholder="NO HANDPHONE" disabled>
                                <label for="inp-no-hp-pictiga" class="form__label">NO HANDPHONE</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form__group field">
                                <input type="text" class="form__field inp-alphabetical" id="inp-email-pictiga" placeholder="EMAIL" disabled>
                                <label for="inp-email-pictiga" class="form__label">EMAIL</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form__group field">
                                <input type="text" class="form__field inp-digit" id="inp-kepemilikan-saham-pictiga" placeholder="KEPEMILIKAN SAHAM" disabled>
                                <label for="inp-kepemilikan-saham-pictiga" class="form__label">KEPEMILIKAN SAHAM</label>
                            </div>
                        </div>
                        <div class="form-group" style="margin-bottom: unset;">
                            <input class="form-check-input" type="radio" name="radioTTDPicTiga" id="radio-ttd-pictiga" value="YA" disabled style="margin-left:unset">
                            <label class="form-check-label" for="radioTTDPicTiga" style="margin-left: 1.25rem;">Yang Bertanda Tangan Di Perjanjian Kontrak</label>
                        </div>
                        <div style="display: flex; justify-content:flex-end; right:0; bottom:0;">
                            <button class="btn btn-primary" id="btn-" disabled>Tambah</button>
                        </div>
                    </div>
                </div>
                <div id="alamat-pic-tiga">
                    <div class="col-lg-12">
                        <div class="use-bottom-border">
                            <h5>
                                <span>Informasi Alamat</span>
                            </h5>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <table id="tbl-info-alamat-pictiga" class="table table-bordered table-hover dt-responsive display center-td">
                            <thead>
                                <tr>
                                    <th>Alamat KTP</th>
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
                                    <td style="text-align: center"><a type='button' class='fas fa-pen fa-red' id=""></a></td>
                                </tr>
                            </tbody>
                            <!-- dummy data table -->
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="add-margin-top" style="display: block;">
        <button type="button" class="btn btn-primary" id="btn-confirm-tab-">Saya Sudah Membaca Tab Ini</button>
    </div>
    <button type="button" class="btn btn-danger btn-circle btn-lg btn-back-to-top">
        <i class="fas fa-arrow-up"></i>
    </button>
</div>