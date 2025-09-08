<?php
include ('templates/header.php');
?>
  <div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row g-4">
              <!--begin::Col-->
              <div class="col-6">
                <div class="callout callout-info">
                  For detailed documentation of Form visit
                  <a
                    href="https://getbootstrap.com/docs/5.3/forms/overview/"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="callout-link"
                  >
                    Bootstrap Form
                  </a>
                </div>
              </div>
              <!--end::Col-->
              <!--begin::Col-->
               <div class="col-md-12">
                <!--begin::Quick Example-->
                <div class="card card-primary card-outline mb-4">
                  <!--begin::Header-->
                  <div class="card-header"><div class="card-title">Data Pembelian</div></div>
                  <!--end::Header-->
                  <!--begin::Form-->
                  <form>
                    <!--begin::Body-->
                    <div class="card-body">
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input
                          type="email"
                          class="form-control"
                          id="exampleInputEmail1"
                          aria-describedby="emailHelp"
                        />
                        <div id="emailHelp" class="form-text">
                          We'll never share your email with anyone else.
                        </div>
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" />
                      </div>
                      <div class="input-group mb-3">
                        <input type="file" class="form-control" id="inputGroupFile02" />
                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                      </div>
                      <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" />
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                      </div>
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <!--end::Footer-->
                  </form>
                  <!--end::Form-->
                </div>
                <!--end::Quick Example-->
</div>
                <div class="app-content">
                <!--begin::Container-->
                <div class="container-fluid">
                  <!--begin::Row-->
                  <div class="row">
                    <div class="col-md-12">
                      <div class="card mb-4">
                        <div class="card-header"><h3 class="card-title">Daftar Barang</h3></div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th style="width: 10px">No</th>
                                <th>
                                  Kode Barang
                                  <input 
                                  class="form-control"
                                  />
                                </th>
                                <th>
                                  Nama Barang
                                  <input 
                                  class="form-control"
                                  />
                                </th>
                                <th>
                                  Harga Satuan
                                  <input 
                                  class="form-control"
                                  />
                                </th>
                                <th>
                                  Jumlah Beli
                                  <input 
                                  class="form-control"
                                  />
                                </th>
                                <th>
                                  Harga Akhir
                                  <input 
                                  class="form-control"
                                  />
                                </th>
                            </thead>
                          </table>
                            <!--begin::Footer-->
                            <div class="card-footer">
                              <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                            <!--end::Footer-->
                        </div>
                        <!-- /.card-body -->
                      </div>
                      <!-- /.card -->
                    </div>
                    <!-- /.col -->
</div>
<?php
include ('templates/footer.php')
?>