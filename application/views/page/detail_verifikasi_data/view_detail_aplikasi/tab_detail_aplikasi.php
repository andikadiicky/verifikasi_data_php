<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12" id="card-form">
            <div class="card">
                <div class="card-header">
                    <ul class="nav nav-tabs col-md-12" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="tab-customer" data-toggle="tab" href="#customer" role="tab" aria-controls="customer">Customer</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="tab-aplikasi" data-toggle="tab" href="#aplikasi" role="tab" aria-controls="aplikasi">Aplikasi</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="tab-survey" data-toggle="tab" href="#survey" role="tab" aria-controls="survey">Survey</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="tab-dokumen" data-toggle="tab" href="#dokumen" role="tab" aria-controls="survey">Dokumen</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card-header">
                <div class="tab-content">
                    <div class="tab-pane active" id="customer" role="tabpanel" aria-labelledby="customer">
                        <?php $this->load->view('/page/detail_verifikasi_data/view_detail_aplikasi/view_subtab_detail_aplikasi/subtab_customer'); ?>
                    </div>
                    <div class="tab-pane" id="aplikasi" role="tabpanel" aria-labelledby="aplikasi">
                        <?php $this->load->view('/page/detail_verifikasi_data/view_detail_aplikasi/view_subtab_detail_aplikasi/subtab_aplikasi'); ?>
                    </div>
                    <div class="tab-pane" id="survey" role="tabpanel" aria-labelledby="survey">
                        <h2>Survey is Under Development</h2>
                    </div>
                    <div class="tab-pane" id="dokumen" role="tabpanel" aria-labelledby="dokumen">
                        <h2>Dokumen is Under Development</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>