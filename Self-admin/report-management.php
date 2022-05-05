<?php include 'header.php' ?>
<div id="reportPage"></div>
<div class="pcoded-content">
  <div class="pcoded-inner-content">
    <div class="main-body">
      <div class="page-wrapper">
        <div class="page-header card">
          <div class="row align-items-end">
            <div class="col-sm-6 col-lg-6">
              <div class="page-header-title d-flex">
                <i class="ti-user bg-c-green"></i>
                <div class="d-inline">
                  <h4>Report Management</h4>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-6">
              <div class="page-header-breadcrumb">
                <div class="page-header-breadcrumb">
                  <ul class="breadcrumb-title">
                    <li class="breadcrumb-item">
                      <a href="dashboard.php">
                        <i class="icofont icofont-home"></i>
                      </a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Report Management</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="page-body">
          <div class="row gutter-sm height-box">
                  <div class="col-md-4 col-lg-4 full-height">
                      <div class="card">
                          <div class="card-body">
                              <div class="media">
                                  <div class="media-body">
                                      <label class="custom-control custom-control-primary custom-checkbox">
                                          <input class="custom-control-input" type="checkbox" checked="">
                                          <span class="custom-control-indicator"></span>
                                      </label>
                                      <p class="text-center">Total User registered on plateform</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-4 col-lg-4 full-height">
                      <div class="card">
                          <div class="card-body">
                              <div class="media">
                                  <div class="media-body">
                                      <label class="custom-control custom-control-primary custom-checkbox">
                                          <input class="custom-control-input" type="checkbox" checked="">
                                          <span class="custom-control-indicator"></span>
                                      </label>
                                      <p class="text-center">Total User registered on plateform</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-4 col-lg-4 full-height">
                      <div class="card">
                          <div class="card-body">
                              <div class="media">
                                  <div class="media-body">
                                      <label class="custom-control custom-control-primary custom-checkbox">
                                          <input class="custom-control-input" type="checkbox" checked="">
                                          <span class="custom-control-indicator"></span>
                                      </label>
                                      <p class="text-center">Total User registered on plateform</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-4 col-lg-4 full-height">
                      <div class="card">
                          <div class="card-body">
                              <div class="media">
                                  <div class="media-body">
                                      <label class="custom-control custom-control-primary custom-checkbox">
                                          <input class="custom-control-input" type="checkbox">
                                          <span class="custom-control-indicator"></span>
                                      </label>
                                      <p class="text-center">Total User registered on plateform</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-4 col-lg-4 full-height">
                      <div class="card">
                          <div class="card-body">
                              <div class="media">
                                  <div class="media-body">
                                      <label class="custom-control custom-control-primary custom-checkbox">
                                          <input class="custom-control-input" type="checkbox">
                                          <span class="custom-control-indicator"></span>
                                      </label>
                                      <p class="text-center">Total User registered on plateform</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-4 col-lg-4 full-height">
                      <div class="card">
                          <div class="card-body">
                              <div class="media">
                                  <div class="media-body">
                                      <label class="custom-control custom-control-primary custom-checkbox">
                                          <input class="custom-control-input" type="checkbox">
                                          <span class="custom-control-indicator"></span>
                                      </label>
                                      <p class="text-center">Total User registered on plateform</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-12">
                      <button class="btn btn-success margin-bottom-10 pull-right">
                          <i class="fa fa-file fs-35"></i> <span>Export to Excel</span>
                      </button>
                  </div>
              </div>
        </div>
      </div>
    </div>
  </div>
</div> 
<?php include'footer.php' ?>
<script type="text/javascript">
  $('#account-list').DataTable({
    columnDefs: [
      { targets: 'no-sort', orderable: false }
    ]
  });
</script>