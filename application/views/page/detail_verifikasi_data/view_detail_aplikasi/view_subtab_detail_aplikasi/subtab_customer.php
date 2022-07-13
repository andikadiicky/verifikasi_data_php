<div class="container-fluid">
    <div class="row">
        <div class="col-md-6" id="card-form">
            <div class="card" style="margin-top: 10px;">
                <div class="card-header">
                    <div class="form-group">
                        <div class="form__group field">
                            <input type="text" class="form__field" placeholder="OBLIGOR ID" id="inp-obligor-id" disabled/>
                            <label for="inp-obligor-id" class="form__label">OBLIGOR ID</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form__group field">
                            <select class="form-control select2bs4" style="width: 100%;" id="slc-tipe-nasabah">
                                <option></option>
                            </select>
                            <label for="slc-tipe-nasabah" class="form__label">TIPE NASABAH <span class="mandatory"> *</span></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form__group field">
                            <input type="text" class="form__field" placeholder="HASIL SCREENING" id="inp-hasil-screening" disabled/>
                            <label for="inp-hasil-screening" class="form__label">HASIL SCREENING</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form__group field">
                            <div class="input-group flex-nowrap">
                                <input id="inp-tgl-order" type="text" class="form__field datetimepicker-input tanggal inp-tanggal" data-toggle="datetimepicker" disabled>
                                <span class="input-group-text" style="border: unset; border-radius: unset; border-bottom: 2px solid #9b9b9b;"><i class="far fa-calendar-alt"></i></span>
                            </div>
                            <label for="inp-tgl-order" class="form__label">TANGGAL ORDER</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form__group field">
                            <input type="text" class="form__field" placeholder="NO ORDER" id="inp-no-order" disabled/>
                            <label for="inp-no-order" class="form__label">NO ORDER</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>

<div id="subtab-cust-personal" style="display: none; margin-top:5px">
    <ul class="nav nav-tabs col-md-12" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="tab-identitas" data-toggle="tab" href="#identitas" role="tab" aria-controls="identitas">Identitas</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="tab-pekerjaan" data-toggle="tab" href="#pekerjaan" role="tab" aria-controls="pekerjaan">Pekerjaan</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="tab-pendapatan" data-toggle="tab" href="#pendapatan" role="tab" aria-controls="pendapatan">Pendapatan</a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="identitas" role="tabpanel" aria-labelledby="identitas">
            <?php $this->load->view('/page/detail_verifikasi_data/view_detail_aplikasi/view_subtab_detail_aplikasi/view_subtab_customer/personal/subtab_identitas_personal'); ?>
        </div>
        <div class="tab-pane" id="pekerjaan" role="tabpanel" aria-labelledby="pekerjaan">
            <?php $this->load->view('/page/detail_verifikasi_data/view_detail_aplikasi/view_subtab_detail_aplikasi/view_subtab_customer/personal/subtab_pekerjaan_personal'); ?>
        </div>
        <div class="tab-pane" id="pendapatan" role="tabpanel" aria-labelledby="pendapatan">
            <?php $this->load->view('/page/detail_verifikasi_data/view_detail_aplikasi/view_subtab_detail_aplikasi/view_subtab_customer/personal/subtab_pendapatan_personal'); ?>
        </div>
    </div>
</div>

<div id="subtab-cust-company" style="display: none; margin-top:5px">
    <ul class="nav nav-tabs col-md-12" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="tab-identitas-comp" data-toggle="tab" href="#identitas-comp" role="tab" aria-controls="identitas-comp">Identitas</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="tab-pendapatan-comp" data-toggle="tab" href="#pendapatan-comp" role="tab" aria-controls="pendapatan-comp">Pendapatan</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="tab-pic-comp" data-toggle="tab" href="#pic-comp" role="tab" aria-controls="pic-comp">PIC Management</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="tab-pemegang-saham-comp" data-toggle="tab" href="#pemegang-saham-comp" role="tab" aria-controls="pemegang-saham-comp">Pemegang Saham</a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="identitas-comp" role="tabpanel" aria-labelledby="identitas-comp">
            <?php $this->load->view('/page/detail_verifikasi_data/view_detail_aplikasi/view_subtab_detail_aplikasi/view_subtab_customer/company/subtab_identitas_company'); ?>
        </div>
        <div class="tab-pane" id="pendapatan-comp" role="tabpanel" aria-labelledby="pendapatan-comp">
            <?php $this->load->view('/page/detail_verifikasi_data/view_detail_aplikasi/view_subtab_detail_aplikasi/view_subtab_customer/company/subtab_pendapatan_company'); ?>
        </div>
        <div class="tab-pane" id="pic-comp" role="tabpanel" aria-labelledby="pic-comp">
            <?php $this->load->view('/page/detail_verifikasi_data/view_detail_aplikasi/view_subtab_detail_aplikasi/view_subtab_customer/company/subtab_pic_management_company'); ?>
        </div>
        <div class="tab-pane" id="pemegang-saham-comp" role="tabpanel" aria-labelledby="pemegang-saham-comp">
            <?php $this->load->view('/page/detail_verifikasi_data/view_detail_aplikasi/view_subtab_detail_aplikasi/view_subtab_customer/company/subtab_pemegang_saham_company'); ?>
        </div>
    </div>
</div>