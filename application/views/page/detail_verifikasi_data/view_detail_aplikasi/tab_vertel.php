<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12" id="card-form">
            <div class="card">
                <div class="card-header">
                    <ul class="nav nav-tabs col-md-12" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="tab-verif-data-awal" data-toggle="tab" href="#verif-data-awal" role="tab" aria-controls="verif-data-awal">Verification Data Awal</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="tab-verif-telepon" data-toggle="tab" href="#verif-telepon" role="tab" aria-controls="verif-telepon">Verif Telepon</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="verif-data-awal" role="tabpanel" aria-labelledby="verif-data-awal">
                            <?php $this->load->view('/page/detail_verifikasi_data/view_detail_aplikasi/view_subtab_vertel/subtab_verif_data_awal'); ?>
                        </div>
                        <div class="tab-pane" id="verif-telepon" role="tabpanel" aria-labelledby="verif-telepon">
                            <?php $this->load->view('/page/detail_verifikasi_data/view_detail_aplikasi/view_subtab_vertel/subtab_verif_telepon'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>