<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12" id="card-form">
            <div class="card">
                <div class="card-header">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form__group field">
                                <input type="text" class="form__field" placeholder="OBLIGOR ID" id="inp-obligor-id" disabled/>
                                <label for="inp-obligor-id" class="form__label">OBLIGOR ID</label>
                            </div>
                        </div>
                        <div class="form__group field">
                            <select class="form-control select2bs4" style="width: 100%;" id="slc-tipe-nasabah-docrec" disabled>
                                <option></option>
                            </select>
                            <label for="slc-tipe-nasabah" class="form__label">TIPE NASABAH <span class="mandatory"> *</span></label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form__group field">
                                    <input type="text" class="form__field" placeholder="NO RECEIVE" id="inp-no-receive" disabled/>
                                    <label for="inp-no-receive" class="form__label">NO RECEIVE</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form__group field">
                                    <div class="input-group flex-nowrap">
                                    <input type="text" class="form__field" placeholder="TANGGAL" id="inp-tanggal-docrec" disabled/>
                                        <span class="input-group-text" style="border: unset; border-radius: unset; border-bottom: 2px solid #9b9b9b;"><i class="far fa-calendar-alt"></i></span>
                                    </div>
                                    <label for="inp-tanggal-docrec" class="form__label">TANGGAL</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form__group field">
                                    <div class="input-group flex-nowrap">
                                        <input id="inp-tgl-terima-doc-docrec" type="text" class="form__field datetimepicker-input tanggal inp-tanggal" data-toggle="datetimepicker" disabled>
                                        <span class="input-group-text" style="border: unset; border-radius: unset; border-bottom: 2px solid #9b9b9b;"><i class="far fa-calendar-alt"></i></span>
                                    </div>
                                    <label for="inp-tgl-terima-doc-docrec" class="form__label">TANGGAL PENERIMAAN DOKUMEN <span class="mandatory"> *</span></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form__group field">
                                    <select class="form-control select2bs4" style="width: 100%;" id="slc-penerimaan-doc-docrec" disabled>
                                        <option>ALL</option>
                                    </select>
                                    <label for="slc-penerimaan-doc" class="form__label">PENERIMAAN DOKUMEN DARI</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12" id="card-form">
                        <div class="use-bottom-border">
                            <h4>
                                <span>DOCUMENT LIST</span>
                            </h4>
                        </div>
                    </div>
                    <!-- TABLE -->
                    <table id="tbl-document-list" class="table table-bordered table-hover dt-responsive display center-td">
                        <thead>
                            <tr>
                                <th>Receive</th>
                                <th>Deskripsi Status</th>
                                <th>ID Dokumen</th>
                                <th>Deskripsi Dokumen</th>
                                <th>Dokumen</th>
                                <th>Tanggal Upload</th>
                                <th>Status</th>
                                <th>Action</th>
                                <th>Reason</th>
                            </tr>
                        </thead>
                        <!-- dummy data table -->
                        <tbody>
                            <td style="text-align:center;"><input type="checkbox" value="" id="defaultCheck1"></td>
                            <td>MANDATORY</td>
                            <td>14</td>
                            <td>GESEKAN NO RANGKA DAN MESIN</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><select class="form-control select2bs4" style="width: 100%;" id="slc-doc-list-action" disabled>
                                    <option selected disabled>APPROVE</option>
                                </select>
                            </td>
                            <td></td>
                        </tbody>
                        <!-- dummy data table -->
                    </table>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="all-record">
                        <label class="form-check-label">
                            All Record
                        </label>
                    </div>
                    <!-- END TABLE -->

                    <div class="add-margin-top" style="display: block;">
                        <button type="button" class="btn btn-primary" id="confirm-tab-docrec">Saya Sudah Membaca Tab Ini</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>