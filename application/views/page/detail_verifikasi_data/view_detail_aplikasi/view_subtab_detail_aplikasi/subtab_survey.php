<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12" id="card-form">
            <div id="survey-personal" hidden>
                <div class="use-bottom-border" style="margin-top: 10px;">
                    <h4>
                        <span>DATA KEPEMILIKAN</span>
                    </h4>
                </div>
                <div class="use-bottom-border">
                    <h5>
                        <span>Detail Rumah</span>
                    </h5>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form__group field">
                                <select class="form-control select2bs4" style="width: 100%;" id="slc-status-kepemilikan-rumah" disabled>
                                    <option></option>
                                </select>
                                <label for="slc-" class="form__label">STATUS KEPEMILIKAN RUMAH</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form__group field">
                                <select class="form-control select2bs4" style="width: 100%;" id="slc-hub-pemilik-rumah-dgn-nasabah" disabled>
                                    <option></option>
                                </select>
                                <label for="slc-" class="form__label">HUBUNGAN ATAS NAMA PEMILIK RUMAH DENGAN NASABAH</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form__group field">
                                <select class="form-control select2bs4" style="width: 100%;" id="slc-jenis-doc-kepemilikan-rumah" disabled>
                                    <option></option>
                                </select>
                                <label for="slc-" class="form__label">JENIS DOKUMEN BUKTI KEPEMILIKAN RUMAH</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form__group field">
                                <input type="text" class="form__field" id="inp-lama-tinggal-thn" placeholder="LAMA TINGGAL (Thn)" disabled>
                                <label for="inp-" class="form__label">LAMA TINGGAL (Thn)</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form__group field">
                                <input type="text" class="form__field" id="inp-lama-tinggal-bln" placeholder="LAMA TINGGAL (Bln)" disabled>
                                <label for="inp-" class="form__label">LAMA TINGGAL (Bln)</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="use-bottom-border">
                    <h5>
                        <span>Area Coverage</span>
                    </h5>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form__group field">
                                <select class="form-control select2bs4" style="width: 100%;" id="slc-survey-location" disabled>
                                    <option></option>
                                </select>
                                <label for="slc-" class="form__label">SURVEY LOCATION</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form__group field">
                                <input type="text" class="form__field" id="inp-jarak-rumah-cust-dgn-muf" placeholder="JARAK RUMAH CUSTOMER DENGAN MUF (KM)" disabled>
                                <label for="inp-" class="form__label">JARAK RUMAH CUSTOMER DENGAN MUF (KM)</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form__group field">
                                <input type="text" class="form__field" id="inp-jarak-kantor-dgn-muf" placeholder="JARAK KANTOR/USAHA CUSTOMER DENGAN MUF (KM)" disabled>
                                <label for="inp-" class="form__label">JARAK KANTOR/USAHA CUSTOMER DENGAN KANTOR MUF (KM)</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form__group field">
                                <input type="text" class="form__field" id="inp-jarak-kantor-pasangan-dgn-muf" placeholder="JARAK TEMPAT BEKERJA/USAHA PASANGAN KE MUF (KM)" disabled>
                                <label for="inp-" class="form__label">JARAK TEMPAT BEKERJA/USAHA PASANGAN KE MUF (KM)</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="survey-company" hidden>
                <div class="use-bottom-border" style="margin-top: 10px;">
                    <h4>
                        <span>DATA KEPEMILIKAN</span>
                    </h4>
                </div>
                <div class="use-bottom-border">
                    <h5>
                        <span>Area Coverage</span>
                    </h5>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form__group field">
                                <select class="form-control select2bs4" style="width: 100%;" id="slc-survey-location-company" disabled>
                                    <option></option>
                                </select>
                                <label for="slc-" class="form__label">SURVEY LOCATION</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form__group field">
                                <input type="text" class="form__field" id="inp-jarak-kantor-dgn-muf-company" placeholder="JARAK TEMPAT BEKERJA/USAHA PASANGAN KE MUF (KM)" disabled>
                                <label for="inp-" class="form__label">JARAK KANTOR BADAN USAHA KE MUF (KM)</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="hasil-survey" hidden>
                <div class="use-bottom-border" style="margin-top: 10px;">
                    <h4>
                        <span>HASIL SURVEY</span>
                    </h4>
                </div>
                <div class="use-bottom-border">
                    <h5>
                        <span>Lokasi Pemakaian Unit</span>
                    </h5>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form__group field">
                                <textarea class="form__field" id="inp-alamat-pemakaian-unit" disabled></textarea>
                                <label for="inp-" class="form__label">ALAMAT PEMAKAIAN UNIT</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form__group field">
                                <input type="text" class="form__field" id="inp-kodepos-pemakaian-unit" placeholder="KODE POS PEMAKAIAN UNIT" disabled>
                                <label for="inp-" class="form__label">KODE POS PEMAKAIAN UNIT</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form__group field">
                                <input type="text" class="form__field" id="inp-kel-pemakaian-unit" placeholder="KELURAHAN PEMAKAIAN UNIT" disabled>
                                <label for="inp-" class="form__label">KELURAHAN PEMAKAIAN UNIT</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form__group field">
                                <input type="text" class="form__field" id="inp-kec-pemakaian-unit" placeholder="KECAMATAN PEMAKAIAN UNIT" disabled>
                                <label for="inp-" class="form__label">KECAMATAN PEMAKAIAN UNIT</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form__group field">
                                <input type="text" class="form__field" id="inp-kabkot-pemakaian-unit" placeholder="KAB/KOTA PEMAKAIAN UNIT" disabled>
                                <label for="inp-" class="form__label">KAB/KOTA PEMAKAIAN UNIT</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form__group field">
                                <input type="text" class="form__field" id="inp-prov-pemakaian-unit" placeholder="PROVINSI PEMAKAIAN UNIT" disabled>
                                <label for="inp-" class="form__label">PROVINSI PEMAKAIAN UNIT</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form__group field">
                                <select class="form-control select2bs4" style="width: 100%;" id="slc-tempat-penyimpanan-kend" disabled>
                                    <option></option>
                                </select>
                                <label for="slc-" class="form__label">TEMPAT PENYIMPANAN KENDARAAN</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="add-margin-top" style="display: block;">
                    <button type="button" class="btn btn-primary" id="btn-confirm-tab-">Saya Sudah Membaca Tab Ini</button>
                </div>
            </div>
        </div>
    </div>
</div>