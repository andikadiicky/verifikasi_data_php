<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12" id="card-form">
            <div class="use-bottom-border" style="margin-top: 10px;">
                <h4>
                    <span>VERIFIKASI TELEPON</span>
                </h4>
            </div>

            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form__group field">
                                <input type="input" class="form__field" placeholder="NO VERIFIKASI AWAL" id="inp-vo-verif-awal-vertel" disabled />
                                <label for="inp-vo-verif-awal-vertel" class="form__label">NO VERIFIKASI AWAL</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form__group field">
                                <input type="input" class="form__field" placeholder="NO GEN VERTEL" id="inp-no-gen-vertel" disabled />
                                <label for="inp-no-gen-vertel" class="form__label">NO GEN VERTEL</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form__group field">
                                <input id="inp-tgl-vertel" type="input" class="form__field datetimepicker-input tanggal inp-tanggal" data-toggle="datetimepicker" disabled>
                                <label for="inp-tgl-vertel" class="form__label"><i class="far fa-calendar-alt"></i> TANGGAL <span class="mandatory"> *</span></label>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- TABLE -->
                <table id="tbl-verifikasi-telepon" class="table table-bordered table-hover dt-responsive display center-td">
                    <thead>
                        <tr>
                            <th>Pertanyaan Vertel</th>
                            <th>Standard Percakapan</th>
                            <th>Jawaban</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <!-- dummy data table -->
                    <tbody>
                        <tr>
                            <td>Merk & Model Unit</td>
                            <td>Dapat diinformasikan merk dan model unit yang Bapak/Ibu ajukan</td>
                            <td>
                                <select class="form-control select2bs4" style="width: 100%;" id="slc-merk-model" disabled>
                                    <option selected>Ya</option>
                                </select>
                            </td>
                            <td>
                                <div class="form-group">
                                    <div class="form__group field">
                                        <input type="input" class="form__field" placeholder="OBJECT CODE" id="" disabled value="MOBIL BARU" />
                                        <label for="" class="form__label">OBJECT CODE</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form__group field">
                                        <input type="input" class="form__field" placeholder="OBJECT BRAND" id="" disabled value="MITSUBISHI" />
                                        <label for="" class="form__label">OBJECT BRAND</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form__group field">
                                        <input type="input" class="form__field" placeholder="OBJECT TYPE" id="" disabled value="MINIBUS" />
                                        <label for="" class="form__label">OBJECT TYPE</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form__group field">
                                        <input type="input" class="form__field" placeholder="OBJECT MODEL" id="" disabled value="XPANDER ULTIMATE CVT" />
                                        <label for="" class="form__label">OBJECT MODEL</label>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Tenor</td>
                            <td>Berapa lama jangka waktu (tenor) pembiayaan yang diajukan Bapak/Ibu?</td>
                            <td><select class="form-control select2bs4" style="width: 100%;" id="slc-tenor" disabled>
                                    <option selected>Ya</option>
                                </select>
                            </td>
                            <td>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <div class="form__group field">
                                            <input type="input" class="form__field" placeholder="" id="" disabled value="12" />
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Angsuran</td>
                            <td>Berapa besar angsuran per bulan yang diajukan?</td>
                            <td><select class="form-control select2bs4" style="width: 100%;" id="slc-angsuran" disabled>
                                    <option selected>Ya</option>
                                </select>
                            </td>
                            <td>
                                <div class="form__group field">
                                    <input type="input" class="form__field" placeholder="" id="" disabled value="Rp. 7,500,000.00" />
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Tanggal Terima Unit</td>
                            <td>Kapan Bapak/Ibu menerima motor/mobil?</td>
                            <td></td>
                            <td>
                                <div class="form-group">
                                    <div class="form__group field">
                                        <input id="" type="input" class="form__field datetimepicker-input tanggal inp-tanggal" data-toggle="datetimepicker" value="13-NOV-2020" disabled>
                                        <label for="" class="form__label"><i class="far fa-calendar-alt"></i></label>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Penerima Unit</td>
                            <td>Pada saat motor/mobil dikirim, siapa penerima motor/mobil?</td>
                            <td></td>
                            <td>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <select class="form-control select2bs4" style="width: 100%;" id="slc-row-penerima-unit" disabled>
                                                <option>08 - LAIN-LAIN</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-12" style="margin-top: 5px;">
                                        <div class="form__group field">
                                            <input type="input" class="form__field" placeholder="" id="" disabled value="ISRAIL" disabled />
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                    <!-- dummy data table -->
                </table>
                <!-- END TABLE -->
                <p>*Untuk debitur dengan tipe bayar non-kasir, BP wajib menginformasikan ke debitur pada saat verifikasi telepon untuk melakukan pengambilan dokuman pembiayaan di cabang</p>
            </div>

            <div class="col-md-12" style="margin-top: 10px;">
                <div class="row">
                    <div class="col align-self-start">
                        <button type="button" class="btn btn-light" disabled>Print Form OTS</button>
                        <button type="button" class="btn btn-primary" disabled>Update</button>
                    </div>
                    <div class="col d-flex justify-content-end">
                        <button type="button" class="btn btn-primary" disabled>Confirm</button>
                        <button type="button" class="btn btn-danger" style="margin-left: 5px;" disabled>Reset</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="add-margin-top" style="display: block;">
            <button type="button" class="btn btn-primary" id="confirm-tab-verif-telepon">Saya Sudah Membaca Tab Ini</button>
        </div>
    </div>
</div>