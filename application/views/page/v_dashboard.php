<?php $this->load->view('layout/header'); ?>

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12" id="card-form">
      <!-- title page -->
      <div class="card">
        <div class="card-header header-card">
          <h3>VERIFIKASI DATA</h3>
        </div>
      </div>
      <!-- end title page -->

      <div class="card">
        <div class="card-header">
          <div class="col-lg-12">
            <div class="use-bottom-border">
              <h4>
                <span>FILTER</span>
              </h4>
            </div>
          </div>
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <div class="form__group field">
                    <input type="input" class="form__field" placeholder="KODE CABANG" id="inp-kode-cabang" disabled/>
                    <label for="inp-kode-cabang" class="form__label">KODE CABANG</label>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form__group field">
                    <label for="" class="form__label">SEARCH BY</label>
                    <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" id="search-by-dealer" name="radioSearchBy" class="custom-control-input">
                      <label class="custom-control-label" for="search-by-dealer">Dealer</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" id="search-by-no-kontrak" name="radioSearchBy" class="custom-control-input">
                      <label class="custom-control-label" for="search-by-no-kontrak">No Kontrak</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" id="search-by-no-receive" name="radioSearchBy" class="custom-control-input">
                      <label class="custom-control-label" for="search-by-no-receive">No Receive</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" id="search-by-sumber-dok" name="radioSearchBy" class="custom-control-input">
                      <label class="custom-control-label" for="search-by-sumber-dok">Sumber Dokumen</label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form__group field">
                    <input type="input" class="form__field" placeholder="KODE DEALER" id="inp-kode-dealer" disabled/>
                    <label for="inp-kode-dealer" class="form__label">KODE DEALER</label>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form__group field">
                    <input type="input" class="form__field" placeholder="NO KONTRAK" id="inp-no-kontrak" disabled/>
                    <label for="inp-no-kontrak" class="form__label">NO KONTRAK</label>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form__group field">
                    <input type="input" class="form__field" placeholder="NO RECEIVE" id="inp-no-receive" disabled/>
                    <label for="inp-no-receive" class="form__label">NO RECEIVE</label>
                  </div>
                </div>
                <div class="form-group">
                  <button class="btn btn-success" id="btn-new-verifikasi" disabled>New</button>
                  <button class="btn btn-primary" id="btn-search-verifikasi">Search</button>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <div class="form__group field">
                    <input type="input" class="form__field" placeholder="TANGGAL" id="inp-tanggal" disabled/>
                    <label for="inp-tanggal" class="form__label">TANGGAL</label>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form__group field">
                    <input id="inp-tgl-terima-doc" type="input" class="form__field datetimepicker-input tanggal inp-tanggal" data-toggle="datetimepicker">
                    <label for="inp-tgl-terima-doc" class="form__label"><i class="far fa-calendar-alt"></i> TANGGAL PENERIMAAN DOKUMEN <span class="mandatory"> *</span></label>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form__group field">
                    <select class="form-control select2bs4" style="width: 100%;" id="slc-penerimaan-doc" disabled>
                      <option>ALL</option>
                      <option>ACQ</option>
                    </select>
                    <label for="slc-penerimaan-doc" class="form__label">PENERIMAAN DOKUMEN DARI</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- contract list table -->
      <div class="card">
        <div class="card-header">
          <div class="col-lg-12">
            <div class="use-bottom-border" style="margin-bottom: 10px;">
              <h4>
                <span>CONTRACT LIST</span>
              </h4>
            </div>
          </div>

          <div class="col-md-12">
            <table id="tbl-contract-list" class="table table-bordered table-hover dt-responsive display center-td">
              <thead>
                <tr>
                  <th>Nomor Kontrak</th>
                  <th>Nama</th>
                  <th>Tanggal Penerimaan</th>
                  <th>Tgl. Document Receive</th>
                  <th>Sumber Dokumen</th>
                  <th>Nama Dealer</th>
                  <th>Detail</th>
                </tr>
              </thead>
              <!-- dummy data table -->
              <tbody>
                <tr>
                  <td>020318001654</td>
                  <td>DUMMY PERSONAL</td>
                  <td>2022-03-31 15:30:00</td>
                  <td>20-Dec-2021</td>
                  <td>ACQ</td>
                  <td>PT DEALER BARU CIKARANG</td>
                  <td style="text-align: center"><a type='button' class='fas fa-pen fa-red' id="dtl-verifikasi-data"></a></td>
                </tr>
              </tbody>
              <!-- dummy data table -->
            </table>
          </div>
        </div>
      </div>
      <!-- end contract list table -->
    </div>
  </div>
</div>

<?php $this->load->view('layout/footer'); ?>
<?php $this->load->view('layout/footer_end'); ?>