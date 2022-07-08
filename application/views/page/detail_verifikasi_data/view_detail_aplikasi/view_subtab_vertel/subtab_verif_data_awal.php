<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12" id="card-form">
            <div class="use-bottom-border" style="margin-top: 10px;">
                <h4>
                    <span>VERIFIKASI DATA AWAL</span>
                </h4>
            </div>

            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form__group field">
                                <input type="input" class="form__field" placeholder="NO VERIFIKASI AWAL" id="inp-vo-verif-awal" disabled />
                                <label for="inp-vo-verif-awal" class="form__label">NO VERIFIKASI AWAL</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form__group field">
                                <input type="input" class="form__field" placeholder="NO KONTRAK" id="inp-no-kontrak-verif" disabled />
                                <label for="inp-no-kontrak-verif" class="form__label">NO KONTRAK</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form__group field">
                                <input id="inp-tgl-verif-awal" type="input" class="form__field datetimepicker-input tanggal inp-tanggal" data-toggle="datetimepicker" disabled>
                                <label for="inp-tgl-verif-awal" class="form__label"><i class="far fa-calendar-alt"></i> TANGGAL <span class="mandatory"> *</span></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form__group field">
                                <input id="inp-no-telp-verif" type="input" class="form__field" placeholder="NO VERIFIKASI AWAL" disabled />
                                <label for="inp-no-telp-verif" class="form__label"><i class="fas fa-phone"></i> NO TELEPON <span class="mandatory"> *</span></label>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- TABLE -->
                <table id="tbl-verif-data-awal" class="table table-bordered table-hover dt-responsive display center-td">
                    <thead>
                        <tr>
                            <th>Pertanyaan Verifikasi Data Awal</th>
                            <th>Jawaban</th>
                            <th>Data Debitur</th>
                        </tr>
                    </thead>
                    <!-- dummy data table -->
                    <tbody>
                        <tr>
                            <td>Apakah Bapak/Ibu sudah menerima unit kendaraan (motor/mobil)?</td>
                            <td><select class="form-control select2bs4" style="width: 100%;" id="slc-sudah-terima-unit" disabled>
                                    <option>Dummy</option>
                                </select>
                            </td>
                            <td>ANTON</td>
                        </tr>
                        <tr>
                            <td>Siapakah nama lengkap Bapak/Ibu?</td>
                            <td><select class="form-control select2bs4" style="width: 100%;" id="slc-full-name" disabled>
                                    <option>Dummy</option>
                                </select>
                            </td>
                            <td>ANDI</td>
                        </tr>
                        <tr>
                            <td>Dimanakah tempat lahir dan tanggal lahir Bapak/Ibu?</td>
                            <td><select class="form-control select2bs4" style="width: 100%;" id="slc-tempat-lahir" disabled>
                                    <option>Dummy</option>
                                </select>
                            </td>
                            <td>JOKO</td>
                        </tr>
                        <tr>
                            <td>Siapakah nama gadis kandung Bapak/Ibu?</td>
                            <td><select class="form-control select2bs4" style="width: 100%;" id="slc-ibu-kandung" disabled>
                                    <option>Dummy</option>
                                </select>
                            </td>
                            <td>BUDI</td>
                        </tr>
                    </tbody>
                    <!-- dummy data table -->
                </table>
                <!-- END TABLE -->
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
            <button type="button" class="btn btn-primary" id="confirm-tab-verif-data-awal">Saya Sudah Membaca Tab Ini</button>
        </div>
    </div>
</div>