<ul class="nav nav-tabs col-md-12" role="tablist">
    <li class="nav-item" role="presentation">
        <a class="nav-link active" id="sub-aplikasi" data-toggle="tab" href="#subtab-aplikasi" role="tab" aria-controls="subtab-aplikasi">Aplikasi</a>
    </li>
    <li class="nav-item" role="presentation">
        <a class="nav-link" id="sub-objek-jaminan" data-toggle="tab" href="#subtab-objek-jaminan" role="tab" aria-controls="subtab-objek-jaminan">Objek Jaminan</a>
    </li>
    <li class="nav-item" role="presentation">
        <a class="nav-link" id="sub-collateral" data-toggle="tab" href="#subtab-collateral" role="tab" aria-controls="subtab-collateral">Collateral</a>
    </li>
    <li class="nav-item" role="presentation">
        <a class="nav-link" id="sub-penjamin" data-toggle="tab" href="#subtab-penjamin" role="tab" aria-controls="subtab-penjamin">Penjamin</a>
    </li>
</ul>
<div class="tab-content">
    <div class="tab-pane active" id="subtab-aplikasi" role="tabpanel" aria-labelledby="subtab-aplikasi">
        <?php $this->load->view('/page/detail_verifikasi_data/view_detail_aplikasi/view_subtab_detail_aplikasi/view_subtab_aplikasi/sub_aplikasi'); ?>
    </div>
    <div class="tab-pane" id="subtab-objek-jaminan" role="tabpanel" aria-labelledby="subtab-objek-jaminan">
        <?php $this->load->view('/page/detail_verifikasi_data/view_detail_aplikasi/view_subtab_detail_aplikasi/view_subtab_aplikasi/sub_obj_jaminan'); ?>
    </div>
    <div class="tab-pane" id="subtab-collateral" role="tabpanel" aria-labelledby="subtab-collateral">
        <?php $this->load->view('/page/detail_verifikasi_data/view_detail_aplikasi/view_subtab_detail_aplikasi/view_subtab_aplikasi/sub_collateral'); ?>
    </div>
    <div class="tab-pane" id="subtab-penjamin" role="tabpanel" aria-labelledby="subtab-penjamin">
        <?php $this->load->view('/page/detail_verifikasi_data/view_detail_aplikasi/view_subtab_detail_aplikasi/view_subtab_aplikasi/sub_penjamin'); ?>
    </div>
</div>