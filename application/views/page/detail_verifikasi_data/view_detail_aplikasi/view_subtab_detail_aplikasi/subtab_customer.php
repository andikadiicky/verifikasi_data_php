<div class="container-fluid">
    <div class="row">
        <div class="col-md-6" id="card-form">
            <div class="form-group">
                <div class="form__group field">
                    <input type="input" class="form__field" placeholder="OBLIGOR ID" id="inp-obligor-id" disabled value="1234567891027" />
                    <label for="inp-obligor-id" class="form__label">OBLIGOR ID</label>
                </div>
            </div>
            <div class="form-group">
                <div class="form__group field">
                    <select class="form-control select2bs4" style="width: 100%;" id="slc-tipe-nasabah">
                        <option value="PER">PER - PERSONAL</option>
                        <option value="COM">COM - COMPANY</option>
                    </select>
                    <label for="slc-tipe-nasabah" class="form__label">TIPE NASABAH <span class="mandatory"> *</span></label>
                </div>
            </div>
            <div class="form-group">
                <div class="form__group field">
                    <input type="input" class="form__field" placeholder="HASIL SCREENING" id="inp-hasil-screening" disabled />
                    <label for="inp-hasil-screening" class="form__label">HASIL SCREENING</label>
                </div>
            </div>
            <div class="form-group">
                <div class="form__group field">
                    <input type="input" class="form__field" placeholder="TANGGAL ORDER" id="inp-tgl-order" disabled />
                    <label for="inp-tgl-order" class="form__label">TANGGAL ORDER</label>
                </div>
            </div>
            <div class="form-group">
                <div class="form__group field">
                    <input type="input" class="form__field" placeholder="NO ORDER" id="inp-no-order" disabled />
                    <label for="inp-no-order" class="form__label">NO ORDER</label>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="subtab-cust-personal">
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
            <h2>Pekerjaan is Under Development</h2>
        </div>
        <div class="tab-pane" id="pendapatan" role="tabpanel" aria-labelledby="pendapatan">
            <h2>Pendapatan is Under Development</h2>
        </div>
    </div>
</div>

<div id="subtab-cust-company" style="display: none;">
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
            <h2>identitas-comp is Under Development</h2>
        </div>
        <div class="tab-pane" id="pendapatan-comp" role="tabpanel" aria-labelledby="pendapatan-comp">
            <h2>pendapatan-comp is Under Development</h2>
        </div>
        <div class="tab-pane" id="pic-comp" role="tabpanel" aria-labelledby="pic-comp">
            <h2>pic-comp is Under Development</h2>
        </div>
        <div class="tab-pane" id="pemegang-saham-comp" role="tabpanel" aria-labelledby="pemegang-saham-comp">
            <h2>pemegang-saham-comp is Under Development</h2>
        </div>
    </div>
</div>