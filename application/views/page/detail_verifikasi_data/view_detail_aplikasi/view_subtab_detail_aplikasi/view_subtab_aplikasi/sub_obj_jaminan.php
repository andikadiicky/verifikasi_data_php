<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12" id="card-form">
            <div id="table-obj-jaminan-automotive">
                <div class="use-bottom-border" style="margin-top: 10px;">
                    <h4>
                        <span>OBJEK JAMINAN - AUTOMOTIVE</span>
                    </h4>
                </div>
                <div class="col-md-12">
                    <table id="tbl-obj-jaminan-automotive" class="table table-bordered table-hover dt-responsive display center-td">
                        <thead>
                            <tr>
                                <th>Object ID</th>
                                <th>Jenis Kendaraan</th>
                                <th>Model Kendaraan</th>
                                <th>Tahun Pembuatan</th>
                                <th>Harga Kendaraan</th>
                                <th>Harga IMP</th>
                                <th>Penyedia Unit</th>
                                <th>Jenis Supplier</th>
                                <th>Paket Rekening</th>
                                <th>Tujuan Penggunaan Unit</th>
                                <th>Merk Kendaraan</th>
                                <th>Status</th>
                                <th>Reason</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <!-- dummy data table -->
                        <tbody>
                            <tr>
                                <td>4431622</td>
                                <td>Motor Baru</td>
                                <td>NEW BEAT FI POP CW</td>
                                <td>2021</td>
                                <td>16,000,000,00</td>
                                <td>0.00</td>
                                <td>AGRATAMA MOTOR (MTR BARU)</td>
                                <td>DEALER/SHOWROOM</td>
                                <td>REKENING DEALER</td>
                                <td>PRIBADI</td>
                                <td>HONDA</td>
                                <td></td>
                                <td></td>
                                <td style="text-align: center"><a type='button' class='fas fa-pen fa-red' id="dtl-obj-jaminan"></a></td>
                            </tr>
                        </tbody>
                        <!-- dummy data table -->
                    </table>
                </div>
            </div>

            <div id="hidden-content-objek-jaminan" style="display: none;">
                <!-- Close Button -->
                <div class="form-inline responsive-form-inline" style="margin-top:10px; justify-content: flex-end">
                    <button type="button" class="btn btn-danger" aria-label="Close" id="close-detail-obj-jaminan">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="use-bottom-border">
                    <h4>
                        <span>DATA AUTOMOTIVE</span>
                    </h4>
                </div>
                <div>
                    <?php $this->load->view('/page/detail_verifikasi_data/view_detail_aplikasi/view_subtab_detail_aplikasi/view_subtab_aplikasi/detail_data_automotive'); ?>
                </div>

                <div class="use-bottom-border" style="margin-top: 10px;">
                    <h4 id="title-struktur-kredit">
                        <span>STRUKTUR KREDIT</span>
                    </h4>
                </div>
                <div>
                    <?php $this->load->view('/page/detail_verifikasi_data/view_detail_aplikasi/view_subtab_detail_aplikasi/view_subtab_aplikasi/detail_struktur_kredit'); ?>
                </div>

                <div class="use-bottom-border" style="margin-top: 10px;">
                    <h4>
                        <span>STRUKTUR KREDIT - REFUND</span>
                    </h4>
                </div>
                <div>
                    <?php $this->load->view('/page/detail_verifikasi_data/view_detail_aplikasi/view_subtab_detail_aplikasi/view_subtab_aplikasi/detail_refund'); ?>
                </div>
            </div>
        </div>
    </div>
    <button type="button" class="btn btn-danger btn-circle btn-lg btn-back-to-top">
        <i class="fas fa-arrow-up"></i>
    </button>
</div>