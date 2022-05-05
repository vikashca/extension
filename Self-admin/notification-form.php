<?php include 'header.php' ?>
<div id="paymentPage"></div>
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
                  <h4>Notification Management</h4>
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
                    <li class="breadcrumb-item"><a href="#">Notification Management</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="page-body">
          <div class="card">
            <div class="card-block">
              <div class="dt-plugin-buttons"></div>
              <div class="row gutter-xs">
                <div class="col-sm-12">
                    <div class="notification border-4side pd-20">
                          <div class="row">
                            <div class="col-md-8 m-auto">
                                <form class="pd-20">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Notification Title :</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Notification Description :</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <textarea class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12 text-center">
                                            <button type="button" data-dismiss="modal" data-toggle="modal" data-target="#notify-success" class="btn btn-primary btn-md margin-bottom-10">Send Notification</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                          </div>
                        <!-- <div class="row">
                            <div class="col-md-4">
                                <div class="search-admin pd-20 border-4side">
                                    <ul class="nav navbar-nav w-100">
                                        <li>
                                            <input type="search" class="form-control search" placeholder="Search here...">
                                        </li>
                                    </ul>
                                    <div class="search-list">
                                        <ul>
                                            <li>
                                                <span><i class="fa fa-user"></i> User Name</span>
                                                <span class="pull-right">
                                                    <input type="checkbox" name="n1" value="v1">
                                                </span>
                                            </li>
                                            <li>
                                                <span><i class="fa fa-user"></i> User Name</span>
                                                <span class="pull-right">
                                                    <input type="checkbox" name="n2" value="v2">
                                                </span>
                                            </li>
                                            <li>
                                                <span><i class="fa fa-user"></i> User Name</span>
                                                <span class="pull-right">
                                                    <input type="checkbox" name="n3" value="v3">
                                                </span>
                                            </li>
                                            <li>
                                                <span><i class="fa fa-user"></i> User Name</span>
                                                <span class="pull-right">
                                                    <input type="checkbox" name="n4" value="v4">
                                                </span>
                                            </li>
                                            <li>
                                                <span><i class="fa fa-user"></i> User Name</span>
                                                <span class="pull-right">
                                                    <input type="checkbox" name="n5" value="v5">
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="search-admin pd-20 border-4side">
                                    <ul class="nav navbar-nav w-100">
                                        <li>
                                            <input type="search" class="form-control search" placeholder="Search here...">
                                        </li>
                                    </ul>
                                    <div class="search-list">
                                        <ul>
                                            <li>
                                                <span><i class="fa fa-user"></i> Seller Name</span>
                                                <span class="pull-right">
                                                    <input type="checkbox" name="n1" value="v1">
                                                </span>
                                            </li>
                                            <li>
                                                <span><i class="fa fa-user"></i> Seller Name</span>
                                                <span class="pull-right">
                                                    <input type="checkbox" name="n2" value="v2">
                                                </span>
                                            </li>
                                            <li>
                                                <span><i class="fa fa-user"></i> Seller Name</span>
                                                <span class="pull-right">
                                                    <input type="checkbox" name="n3" value="v3">
                                                </span>
                                            </li>
                                            <li>
                                                <span><i class="fa fa-user"></i> Seller Name</span>
                                                <span class="pull-right">
                                                    <input type="checkbox" name="n4" value="v4">
                                                </span>
                                            </li>
                                            <li>
                                                <span><i class="fa fa-user"></i> Seller Name</span>
                                                <span class="pull-right">
                                                    <input type="checkbox" name="n5" value="v5">
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="search-admin pd-20 border-4side">
                                    <ul class="nav navbar-nav w-100">
                                        <li>
                                            <input type="search" class="form-control search" placeholder="Search here...">
                                        </li>
                                    </ul>
                                    <div class="search-list">
                                        <ul>
                                            <li>
                                                <span><i class="fa fa-user"></i> Delivery Name</span>
                                                <span class="pull-right">
                                                    <input type="checkbox" name="n1" value="v1">
                                                </span>
                                            </li>
                                            <li>
                                                <span><i class="fa fa-user"></i> Delivery Name</span>
                                                <span class="pull-right">
                                                    <input type="checkbox" name="n2" value="v2">
                                                </span>
                                            </li>
                                            <li>
                                                <span><i class="fa fa-user"></i> Delivery Name</span>
                                                <span class="pull-right">
                                                    <input type="checkbox" name="n3" value="v3">
                                                </span>
                                            </li>
                                            <li>
                                                <span><i class="fa fa-user"></i> Delivery Name</span>
                                                <span class="pull-right">
                                                    <input type="checkbox" name="n4" value="v4">
                                                </span>
                                            </li>
                                            <li>
                                                <span><i class="fa fa-user"></i> User Name</span>
                                                <span class="pull-right">
                                                    <input type="checkbox" name="n5" value="v5">
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
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
<!-- success modal -->
<div id="notify-success" class="modal fade">
  <div class="modal-dialog modal-sm" data-dismiss="modal">
    <div class="modal-body text-center">
      <i class="text-success fs-34 d-inline-block icofont icofont-check-circled mb-4"></i>
      <h6>Notification sent Successfully</h6>
    </div>
  </div>
</div>