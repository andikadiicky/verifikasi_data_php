<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12" id="card-form">
			<!-- Main Navbar -->
			<div class="card">
				<div class="card-header">
					<nav class="navbar navbar-expand-lg navbar-light bg-transparent col-md-12">
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#toggle-nav-tabs" style="margin-bottom: 5px;">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="toggle-nav-tabs">
							<ul class="nav nav-tabs col-md-6" id="nav-tab-utama" role="tablist">
								<li class="nav-item" role="presentation">
									<a class="nav-link active" id="tab-detail-aplikasi" data-toggle="tab" href="#detail-aplikasi" role="tab" aria-controls="detail-aplikasi">Detail Aplikasi</a>
								</li>
								<li class="nav-item" role="presentation">
									<a class="nav-link" id="tab-doc-received" data-toggle="tab" href="#doc-received" role="tab" aria-controls="doc-received">Doc Received</a>
								</li>
								<li class="nav-item" role="presentation">
									<a class="nav-link" id="tab-vertel" data-toggle="tab" href="#vertel" role="tab" aria-controls="vertel">Vertel</a>
								</li>
							</ul>
							<ul class="navbar-nav ml-auto">
								<li class="nav-item">
									<div class="form-inline responsive-form-inline" style="display: flex; justify-content: flex-end">
										<button class="btn btn-primary" id="btn-return-fde">Return to FDE</button>
										<button class="btn btn-primary" id="btn-return-ide" style="margin-left: 5px;">Return to IDE</button>
										<button class="btn btn-success" id="btn-konfirmasi-verifikasi" style="margin-left: 5px;">Konfirmasi</button>
									</div>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
			<!-- End Main Navbar -->

			<!-- Subtab Content -->
			<div class="tab-content" id="tab-content-verifikasi-data">
				<div class="tab-pane active" id="detail-aplikasi" role="tabpanel" aria-labelledby="detail-aplikasi-tab">
					<?php $this->load->view('/page/detail_verifikasi_data/view_detail_aplikasi/tab_detail_aplikasi'); ?>
				</div>
				<div class="tab-pane" id="doc-received" role="tabpanel" aria-labelledby="doc-received-tab">
					<?php $this->load->view('/page/detail_verifikasi_data/view_detail_aplikasi/tab_doc_received'); ?>
				</div>
				<div class="tab-pane" id="vertel" role="tabpanel" aria-labelledby="vertel-tab">
					<?php $this->load->view('/page/detail_verifikasi_data/view_detail_aplikasi/tab_vertel'); ?>
				</div>
			</div>
			<!-- End Subtab Content -->
		</div>
	</div>
</div>