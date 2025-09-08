<?php
include ('templates/header.php');
?>
  <div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row g-4">
              <!--begin::Col-->
              <div class="col-12">
 <!--begin::Different Width-->
                <div class="card card-danger card-outline mb-4">
                  <!--begin::Header-->
                  <div class="card-header"><div class="card-title">tanggal</div></div>
                  <!--end::Header-->
                  <!--begin::Body-->
                  <div class="card-body">
                    <!--begin::Row-->
                    <div class="row">
                      <!--begin::Col-->
                      <div class="col-3">
                        <input type="text" class="form-control" placeholder="hari" />
                      </div>
                      <!--end::Col-->
                      <!--begin::Col-->
                      <div class="col-4">
                        <input type="text" class="form-control" placeholder="bulan" />
                      </div>
                      <!--end::Col-->
                      <!--begin::Col-->
                      <div class="col-5">
                        <input type="text" class="form-control" placeholder="tahun" />
                      </div>
                        <button type="submit" class="btn btn-primary mt-4">Oke</button>
                      <!--end::Col-->
                    </div>
                    <!--end::Row-->
                  </div>
                  <!--end::Body-->
                </div>
                <!--end::Different Width-->

                 <div class="col-md-6">
                <!--begin::Different Height-->
                <div class="card card-secondary card-outline mb-4">
                  <!--begin::Header-->
                  <div class="card-header"><div class="card-title">Komentar</div></div>
                  <!--end::Header-->
                  <!--begin::Body-->
                  <div class="card-body">
                    <input
                      class="form-control form-control-lg"
                      type="text"
                      placeholder="ketik..."
                      aria-label=".form-control-lg example"
                    />
                    <br />
                     <button type="submit" class="btn btn-primary mt-4">submit</button>
                  </div>
                  <!--end::Body-->
                </div>
                <!--end::Different Height-->
<?php
include ('templates/footer.php')
?>