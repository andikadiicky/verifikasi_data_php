<?php $this->load->view('layout/header'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12" id="card-form">
            <div class="card">
                <div class="card-header header-card">
                    <h3>VERIFIKASI DATA</h3>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <div class="row" style="justify-content: flex-end; align-items:baseline;">
                        <div class="col-sm-2">
                            <select class="form-control select2bs4" style="width: 100%;" id="slc-cabang" disabled>
                                <option></option>
                            </select>
                        </div>
                        <div class="col-sm-2">
                            <input type="input" class="form__field" placeholder="" id="inp-" disabled/>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- load view tab verifikasi data -->
        <?php $this->load->view('layout/tab_verifikasi_data') ?>

    </div>
</div>

<?php $this->load->view('layout/footer'); ?>
<?php $this->load->view('layout/footer_end'); ?>