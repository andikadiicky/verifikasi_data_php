<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <div class="form__group field">
                <input type="text" class="form__field" id="inp-harga-kend" placeholder="HARGA KENDARAAN" disabled>
                <label for="inp-" class="form__label">HARGA KENDARAAN</label>
            </div>
        </div>
        <div class="form-group">
            <div class="form__group field">
                <input type="text" class="form__field" id="inp-tot-harga-karoseri" placeholder="TOTAL HARGA KAROSERI" disabled>
                <label for="inp-" class="form__label">TOTAL HARGA KAROSERI</label>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-6">
                    <div class="form__group field">
                        <input type="text" class="form__field" id="inp-tenor" placeholder="TENOR" disabled>
                        <label for="inp-" class="form__label">TENOR</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form__group field">
                        <select class="form-control select2bs4" style="width: 100%;" id="slc-addb-addm" disabled>
                            <option></option>
                        </select>
                        <label for="slc-" class="form__label">ADDB/ADDM</label>
                    </div>
                </div>
            </div>
        </div>

        <!-- DECLINE-N -->
        <div id="div-decline-n" hidden>
            <div class="form-group">
                <div class="form__group field">
                    <select class="form-control select2bs4" style="width: 100%;" id="slc-periode-proporsional" disabled>
                        <option></option>
                    </select>
                    <label for="slc-" class="form__label">PERIODE PROPORSIONAL</label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="form__group field">
                <input type="text" class="form__field" id="inp-resiko-jaminan-gross" placeholder="RESIKO JAMINAN GROSS" disabled>
                <label for="inp-" class="form__label">RESIKO JAMINAN GROSS</label>
            </div>
        </div>
        <div class="form-group">
            <div class="form__group field">
                <input type="text" class="form__field" id="inp-resiko-jaminan-net" placeholder="RESIKO JAMINAN NET" disabled>
                <label for="inp-" class="form__label">RESIKO JAMINAN NET</label>
            </div>
        </div>
        <div class="form-group">
            <div class="form__group field">
                <input type="text" class="form__field" id="inp-resiko-jaminan-cabang" placeholder="RESIKO JAMINAN (CABANG)" disabled>
                <label for="inp-" class="form__label">RESIKO JAMINAN (CABANG)</label>
            </div>
        </div>
        <div class="form-group">
            <div class="form__group field">
                <input type="text" class="form__field" id="inp-tot-ph" placeholder="TOTAL POKOK HUTANG" disabled>
                <label for="inp-" class="form__label">TOTAL POKOK HUTANG</label>
            </div>
        </div>
        <div class="form-group">
            <div class="form__group field">
                <label class="radio-inline">
                    <input type="radio" name="radioCalculateBy" value="" id="radio-rate" disabled> Rate
                </label>
                <label class="radio-inline" style="margin-left: 10px;">
                    <input type="radio" name="radioCalculateBy" value="" id="radio-angsuran" disabled> Angsuran
                </label>
                <label class="form__label">CALCULATE BY</label>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form__group field">
                        <input type="text" class="form__field" id="inp-suku-bunga-eff" placeholder="SUKU BUNGA EFEKTIF" disabled>
                        <label for="inp-" class="form__label">SUKU BUNGA EFEKTIF</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form__group field">
                        <input type="text" class="form__field" id="inp-flat-rate" placeholder="FLAT RATE" disabled>
                        <label for="inp-" class="form__label">FLAT RATE</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="form__group field">
                <input type="text" class="form__field" id="inp-angs-per-bln" placeholder="ANGSURAN PER BULAN (Rp)" disabled>
                <label for="inp-" class="form__label">ANGSURAN PER BULAN (Rp)</label>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <div class="form__group field">
                <select class="form-control select2bs4" style="width: 100%;" id="slc-marketing-prog" disabled>
                    <option></option>
                </select>
                <label for="slc-" class="form__label">MARKETING PROGRAM</label>
            </div>
        </div>
        <div class="form-group">
            <div class="form__group field">
                <select class="form-control select2bs4" style="width: 100%;" id="slc-marketing-sch" disabled>
                    <option></option>
                </select>
                <label for="slc-" class="form__label">MARKETING SCHEME</label>
            </div>
        </div>
        <div class="form-group">
            <div class="form__group field">
                <select class="form-control select2bs4" style="width: 100%;" id="slc-tipe-pembayaran-angs">
                    <option></option>
                </select>
                <label for="slc-" class="form__label">TIPE PEMBAYARAN ANGSURAN</label>
            </div>
        </div>

        <!-- HOLIDAY PAYMENT / GRACE PERIODE -->
        <div id="div-holiday-payment" hidden>
            <div class="form-group">
                <div class="form__group field">
                    <select class="form-control select2bs4" style="width: 100%;" id="slc-periode-holiday" disabled>
                        <option></option>
                    </select>
                    <label for="slc-" class="form__label">PERIODE</label>
                </div>
            </div>
        </div>
        <div id="div-grace-period" hidden>
            <div class="form-group">
                <div class="form__group field">
                    <select class="form-control select2bs4" style="width: 100%;" id="slc-periode-gp" disabled>
                        <option></option>
                    </select>
                    <label for="slc-" class="form__label">PERIODE</label>
                </div>
            </div>
        </div>

        <!-- BALLOON PAYMENT -->
        <div id="div-balloon-payment" hidden>
            <div class="form-group">
                <div class="form__group field">
                    <select class="form-control select2bs4" style="width: 100%;" id="slc-periode-balloon" disabled>
                        <option></option>
                    </select>
                    <label for="slc-" class="form__label">PERIODE</label>
                </div>
            </div>
            <div class="form-group">
                <div class="form__group field">
                    <select class="form-control select2bs4" style="width: 100%;" id="slc-res-type" disabled>
                        <option></option>
                    </select>
                    <label for="slc-" class="form__label">RESIDUAL TYPE</label>
                </div>
            </div>
            <div class="form-group">
                <div class="form__group field">
                    <input type="text" class="form__field" id="inp-res-value" placeholder="RESIDUAL VALUE" disabled>
                    <label for="inp-" class="form__label">RESIDUAL VALUE</label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="form__group field">
                <input type="text" class="form__field" id="inp-permintaan-tgl-jatuh-tempo" placeholder="PERMINTAAN TANGGAL JATUH TEMPO" disabled>
                <label for="inp-" class="form__label">PERMINTAAN TANGGAL JATUH TEMPO</label>
            </div>
        </div>
        <div class="form-group">
            <div class="form__group field">
                <input type="text" class="form__field" id="inp-ltv-nett" placeholder="%LTV NETT" disabled>
                <label for="inp-" class="form__label">%LTV NETT</label>
            </div>
        </div>
        <div class="form-group">
            <div class="form__group field">
                <input type="text" class="form__field" id="inp-dp-nett" placeholder="%DP NETT" disabled>
                <label for="inp-" class="form__label">%DP NETT</label>
            </div>
        </div>

        <div id="hidden-bbg-subsidi-risk" hidden>
            <div class="form-group">
                <div class="form__group field">
                    <label class="radio-inline">
                        <input type="radio" name="" value="" id="radio-bbg" disabled>
                    </label>
                    <label class="form__label">BBG</label>
                </div>
                <div class="form__group field">
                    <label class="radio-inline">
                        <input type="radio" name="" value="" id="radio-subsidi-risk" disabled>
                    </label>
                    <label class="form__label">SUBSIDI RISK</label>
                </div>
                <div class="form__group field">
                    <label class="radio-inline">
                        <input type="radio" name="" value="" id="radio-tdk-berlaku-bbg-subsidi" disabled>
                    </label>
                    <label class="form__label">TIDAK BERLAKU BBG/SUBSIDI RISK</label>
                </div>
                <div class="form__group field">
                    <input type="text" class="form__field" id="inp-nilai-subsidi-risk" placeholder="NILAI SUBSIDI RISK" disabled>
                    <label for="inp-" class="form__label">NILAI SUBSIDI RISK</label>
                </div>
            </div>
        </div>

    </div>
</div>

<div id="div-table-balloon-payment" hidden>
    <div class="row">
        <div class="col-md-6">
            <div id="table-balloon-payment">
                <div class="use-bottom-border" style="margin-top: 10px;">
                    <h5>
                        <span>BALLOON PAYMENT</span>
                    </h5>
                </div>
                <div class="col-md-12">
                    <table id="tbl-balloon-payment" class="table table-bordered table-hover dt-responsive display center-td">
                        <thead>
                            <tr>
                                <th>Angsuran Ke-</th>
                                <th>Balloon Value</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <!-- dummy data table -->
                        <tbody>
                            <tr>
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

        <div class="col-md-6">

        </div>
    </div>
</div>

<div id="div-table-stepping" hidden>
    <div id="table-stepping">
        <div class="use-bottom-border" style="margin-top: 10px;">
            <h5>
                <span>STEPPING</span>
            </h5>
        </div>
        <div class="col-md-12">
            <table id="tbl-stepping" class="table table-bordered table-hover dt-responsive display center-td">
                <thead>
                    <tr>
                        <th>Start Inst</th>
                        <th>End Inst</th>
                        <th>Tenor</th>
                        <th>%Stepping</th>
                        <th>Nilai Stepping</th>
                        <th>Sisa Outstanding</th>
                        <th>Angsuran Stepping</th>
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
                    </tr>
                </tbody>
                <!-- dummy data table -->
            </table>
        </div>
    </div>
</div>

<div id="div-info-biaya">
    <div class="use-bottom-border">
        <h5>
            <span>Informasi Biaya</span>
        </h5>
    </div>
    <div class="row">
        <div class="col-md-6">
            <h5>Notaris</h5>
            <div class="form-group">
                <div class="form__group field">
                    <input type="text" class="form__field" id="inp-biaya-tunai-notaris" placeholder="BIAYA TUNAI" disabled>
                    <label for="inp-" class="form__label">BIAYA TUNAI</label>
                </div>
            </div>
            <div class="form-group">
                <div class="form__group field">
                    <input type="text" class="form__field" id="inp-biaya-diangsur-notaris" placeholder="BIAYA TUNAI" disabled>
                    <label for="inp-" class="form__label">BIAYA DIANGSUR</label>
                </div>
            </div>
            <div class="form-group">
                <div class="form__group field">
                    <input type="text" class="form__field" id="inp-ot-biaya-notaris" placeholder="BIAYA TUNAI" disabled>
                    <label for="inp-" class="form__label">TOTAL BIAYA</label>
                </div>
            </div>
            <hr>
        </div>
        <div class="col-md-6">
            <h5>Provisi</h5>
            <div class="form-group">
                <div class="form__group field">
                    <input type="text" class="form__field" id="inp-biaya-tunai-provisi" placeholder="BIAYA TUNAI" disabled>
                    <label for="inp-" class="form__label">BIAYA TUNAI</label>
                </div>
            </div>
            <div class="form-group">
                <div class="form__group field">
                    <input type="text" class="form__field" id="inp-biaya-diangsur-provisi" placeholder="BIAYA TUNAI" disabled>
                    <label for="inp-" class="form__label">BIAYA DIANGSUR</label>
                </div>
            </div>
            <div class="form-group">
                <div class="form__group field">
                    <input type="text" class="form__field" id="inp-tot-biaya-provisi" placeholder="BIAYA TUNAI" disabled>
                    <label for="inp-" class="form__label">TOTAL BIAYA</label>
                </div>
            </div>
            <hr>
        </div>
        <div class="col-md-6 add-margin-top">
            <h5>Admin</h5>
            <div class="form-group">
                <div class="form__group field">
                    <input type="text" class="form__field" id="inp-biaya-tunai-admin" placeholder="BIAYA TUNAI" disabled>
                    <label for="inp-" class="form__label">BIAYA TUNAI</label>
                </div>
            </div>
            <div class="form-group">
                <div class="form__group field">
                    <input type="text" class="form__field" id="inp-biaya-diangsur-admin" placeholder="BIAYA TUNAI" disabled>
                    <label for="inp-" class="form__label">BIAYA DIANGSUR</label>
                </div>
            </div>
            <div class="form-group">
                <div class="form__group field">
                    <input type="text" class="form__field" id="inp-tot-biaya-admin" placeholder="BIAYA TUNAI" disabled>
                    <label for="inp-" class="form__label">TOTAL BIAYA</label>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group inline">
                        <div class="form__group field">
                            <input type="text" class="form__field" id="inp-periode-asuransi" placeholder="PERIODE ASURANSI" disabled>
                            <label for="inp-" class="form__label">PERIODE ASURANSI</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form__group field">
                            <label class="checkbox-inline">
                                <input type="checkbox" name="checkProrate" value="" id="check-prorate" disabled> Prorate
                            </label>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-6 add-margin-top">
            <h5>Fiducia</h5>
            <div class="form-group">
                <div class="form__group field">
                    <input type="text" class="form__field" id="inp-biaya-tunai-fiducia" placeholder="BIAYA TUNAI" disabled>
                    <label for="inp-" class="form__label">BIAYA TUNAI</label>
                </div>
            </div>
            <div class="form-group">
                <div class="form__group field">
                    <input type="text" class="form__field" id="inp-biaya-diangsur-fiducia" placeholder="BIAYA TUNAI" disabled>
                    <label for="inp-" class="form__label">BIAYA DIANGSUR</label>
                </div>
            </div>
        </div>
    </div>

</div>

<div id="div-asuransi-kerugian">
    <div class="use-bottom-border">
        <h5>
            <span>Asuransi Kerugian</span>
        </h5>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <div class="form__group field">
                    <select class="form-control select2bs4" style="width: 100%;" id="slc-perusahaan-asuransi" disabled>
                        <option></option>
                    </select>
                    <label for="slc-" class="form__label">PERUSAHAAN ASURANSI <span class="mandatory"> *</span></label>
                </div>
            </div>
            <div class="form-group">
                <div class="form__group field">
                    <select class="form-control select2bs4" style="width: 100%;" id="slc-jenis-asuransi" disabled>
                        <option></option>
                    </select>
                    <label for="slc-" class="form__label">JENIS ASURANSI <span class="mandatory"> *</span></label>
                </div>
            </div>
            <div class="form-group">
                <div class="form__group field">
                    <select class="form-control select2bs4" style="width: 100%;" id="slc-wil-asuransi" disabled>
                        <option></option>
                    </select>
                    <label for="slc-" class="form__label">WILAYAH ASURANSI <span class="mandatory"> *</span></label>
                </div>
            </div>
            <div class="form-group">
                <div class="form__group field">
                    <input type="text" class="form__field" id="inp-biaya-tunai-asuransi" placeholder="BIAYA TUNAI ASURANSI" disabled>
                    <label for="inp-" class="form__label">BIAYA TUNAI ASURANSI</label>
                </div>
            </div>
            <div class="form-group">
                <div class="form__group field">
                    <input type="text" class="form__field" id="inp-biaya-diangsur-asuransi" placeholder="BIAYA DIANGSUR ASURANSI" disabled>
                    <label for="inp-" class="form__label">BIAYA DIANGSUR ASURANSI</label>
                </div>
            </div>
            <div class="form-group">
                <div class="form__group field">
                    <input type="text" class="form__field" id="inp-tot-biaya-asuransi" placeholder="BIAYA TOTAL ASURANSI" disabled>
                    <label for="inp-" class="form__label">BIAYA TOTAL ASURANSI</label>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <div class="form__group field">
                    <input type="text" class="form__field" id="inp-tenor-asuransi" placeholder="TENOR ASURANSI" disabled>
                    <label for="inp-" class="form__label">TENOR ASURANSI</label>
                </div>
            </div>
            <div class="form-group">
                <div class="form__group field">
                    <input type="text" class="form__field" id="inp-usia-kend-akhir-tenor" placeholder="USIA KENDARAAN s/d AKHIR TENOR (Thn)" disabled>
                    <label for="inp-" class="form__label">USIA KENDARAAN s/d AKHIR TENOR (Thn)</label>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form__group field">
                            <input type="text" class="form__field" id="inp-basic-nett-asuransi" placeholder="" disabled>
                            <label for="inp-" class="form__label">BASIC NETT INSURANCE</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form__group field">
                            <input type="text" class="form__field" id="inp-nominal-basic-nett-asuransi" placeholder="" disabled>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form__group field">
                            <input type="text" class="form__field" id="inp-basic-gross-asuransi" placeholder="" disabled>
                            <label for="inp-" class="form__label">BASIC GROSS INSURANCE</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form__group field">
                            <input type="text" class="form__field" id="inp-nominal-basic-gross-asuransi" placeholder="" disabled>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form__group field">
                            <input type="text" class="form__field" id="inp-gross-asuransi-default" placeholder="" disabled>
                            <label for="inp-" class="form__label">GROSS INSURANCE DEFAULT</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form__group field">
                            <input type="text" class="form__field" id="inp-nominal-gross-asuransi-default" placeholder="" disabled>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="div-perluasan-jaminan">
    <div class="use-bottom-border">
        <h5>
            <span>Perluasan Jaminan</span>
        </h5>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="check-srcc" value="" disabled>
                    <label class="form-check-label" for="">SRCC</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="check-ts" value="" disabled>
                    <label class="form-check-label" for="">TS</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="check-flh" value="" disabled>
                    <label class="form-check-label" for="">FLH</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="check-eqts" value="" disabled>
                    <label class="form-check-label" for="">EQTS</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="check-tjh" value="" disabled>
                    <label class="form-check-label" for="">TJH</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="check-pa-driver" value="" disabled>
                    <label class="form-check-label" for="">PA DRIVER</label>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="check-limit-liability" value="" disabled>
                    <label class="form-check-label col-sm-8">Limit Of Liability:</label>

                    <select class="form-control select2bs4 col-sm-4" style="width: 100%;" id="slc-liability" disabled>
                        <option></option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="div-asuransi-tambahan">
    <div class="use-bottom-border">
        <h5>
            <span>Asuransi Tambahan</span>
        </h5>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <div class="form__group field">
                    <select class="form-control select2bs4" style="width: 100%;" id="slc-jenis-asuransi-tambahan" disabled>
                        <option></option>
                    </select>
                    <label for="slc-" class="form__label">JENIS ASURANSI <span class="mandatory"> *</span></label>
                </div>
            </div>
            <div class="form-group">
                <div class="form__group field">
                    <select class="form-control select2bs4" style="width: 100%;" id="slc-perusahaan-asuransi-tambahan" disabled>
                        <option></option>
                    </select>
                    <label for="slc-" class="form__label">PERUSAHAAN ASURANSI <span class="mandatory"> *</span></label>
                </div>
            </div>
            <div class="form-group">
                <div class="form__group field">
                    <input type="text" class="form__field" id="inp-biaya-tunai-asuransi-tambahan" placeholder="BIAYA TUNAI ASURANSI" disabled>
                    <label for="inp-" class="form__label">BIAYA TUNAI ASURANSI</label>
                </div>
            </div>
            <div class="form-group">
                <div class="form__group field">
                    <input type="text" class="form__field" id="inp-biaya-diangsur-asuransi-tambahan" placeholder="BIAYA DIANGSUR ASURANSI" disabled>
                    <label for="inp-" class="form__label">BIAYA DIANGSUR ASURANSI</label>
                </div>
            </div>
            <div class="form-group">
                <div class="form__group field">
                    <input type="text" class="form__field" id="inp-tot-biaya-asuransi-tambahan" placeholder="BIAYA TOTAL ASURANSI" disabled>
                    <label for="inp-" class="form__label">BIAYA TOTAL ASURANSI</label>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form__group field">
                            <input type="text" class="form__field" id="inp-nett-asuransi-tambahan" placeholder="" disabled>
                            <label for="inp-" class="form__label">NETT INSURANCE</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form__group field">
                            <input type="text" class="form__field" id="inp-nominal-nett-asuransi-tambahan" placeholder="" disabled>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form__group field">
                            <input type="text" class="form__field" id="inp-gross-asuransi-tambahan" placeholder="" disabled>
                            <label for="inp-" class="form__label">GROSS INSURANCE</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form__group field">
                            <input type="text" class="form__field" id="inp-nominal-asuransi-tambahan" placeholder="" disabled>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="div-info-angsuran">
    <div class="use-bottom-border">
        <h5>
            <span>Informasi Angsuran</span>
        </h5>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <div class="form__group field">
                    <input type="text" class="form__field" id="inp-total-bunga" placeholder="TOTAL BUNGA" disabled>
                    <label for="inp-" class="form__label">TOTAL BUNGA</label>
                </div>
            </div>
            <div class="form-group">
                <div class="form__group field">
                    <input type="text" class="form__field" id="inp-angsuran-pertama" placeholder="ANGSURAN PERTAMA" disabled>
                    <label for="inp-" class="form__label">ANGSURAN PERTAMA</label>
                </div>
            </div>
            <div class="form-group">
                <div class="form__group field">
                    <input type="text" class="form__field" id="inp-angsuran-terakhir" placeholder="ANGSURAN TERAKHIR" disabled>
                    <label for="inp-" class="form__label">ANGSURAN TERAKHIR</label>
                </div>
            </div>
        </div>
    </div>
</div>