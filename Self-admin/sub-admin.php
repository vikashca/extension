<?php include 'header.php' ?>
<div id="subadminPage"></div>
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
                  <h4>Sub Admin Management</h4>
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
                    <li class="breadcrumb-item"><a href="#">Sub Admin</a></li>
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
              <div class="row mb-10">
                <div class="col-sm-6 col-md-3 col-lg-3">
                  <label class="d-flex text-nowrap">
                    <strong class="mt-1">From : </strong> 
                    <input type="text" class="ml-2 form-control mr-3 datepicker" id="start_date" autocomplete="off"/>
                    <i class="fa fa-calendar mt-2 fs-18"></i>
                  </label>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                  <label class="d-flex text-nowrap">
                    <strong class="mt-1">To : </strong>  
                    <input type="text" class="ml-2 form-control mr-3 datepicker" id="end_date" autocomplete="off"/>
                    <i class="fa fa-calendar mt-2 fs-18"></i>
                  </label>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-2">
                  <button class="btn btn-primary btn-md"><i class="fa fa-search"></i></button>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="pull-right mb-10">
                      <a href="add-subadmin.php" class="btn btn-primary btn-md">Add Sub-Admin</a>
                  </div>
                </div>
              </div>
              <div class="dt-responsive table-responsive">
                <table id="account-list" class="table table-striped table-bordered nowrap m-0">
                  <thead>
                    <tr>
                      <th>
                        <label class="container_check">
                          <input type="checkbox" id="selectUser">
                          <span class="checkmark checkmark-tst"></span>
                        </label>
                      </th>
                      <th>Admin Name</th>
                      <th>Admin Image</th>
                      <th>Email Address</th>
                      <th>Contact Number</th>
                      <th>Admin Id</th>
                      <th>Document</th>
                      <th>Store Name</th>
                      <th class="wpx-90 no-sort">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <label class="container_check">
                          <input type="checkbox">
                          <span class="checkmark checkmark-tst"></span>
                        </label>
                      </td>
                      <td>Lorem Ipsum</td>
                      <td><img src="assets/images/avatar-4.jpg" width="30px;" class="img-radius" alt="User-Profile-Image"></td>
                      <td>xyz@gmail.com</td>
                      <td>+91 9876540321</td>
                      <td>#SDF345</td>
                      <td><img src="assets/images/cover-image.png" width="30px;" class="img-radius" alt="User-Profile-Image"></td>
                      <td>Lorem Ipsum</td>
                      <td>
                        <button data-toggle="modal" data-target="#credential-modal" class="btn btn-sm btn-warning"><i class="ti-key"></i></button>
                        <button data-toggle="modal" data-target="#access-modal" class="btn btn-sm btn-success"><i class="ti-star"></i></button>
                        <button data-toggle="modal" data-target="#track-modal" class="btn btn-sm btn-info"><i class="ti-eye"></i></button>
                        <button data-toggle="modal" data-target="#delete-modal" class="btn btn-sm btn-danger"><i class="ti-trash"></i></button> 
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <label class="container_check">
                          <input type="checkbox">
                          <span class="checkmark checkmark-tst"></span>
                        </label>
                      </td>
                      <td>Lorem Ipsum</td>
                      <td><img src="assets/images/avatar-4.jpg" width="30px;" class="img-radius" alt="User-Profile-Image"></td>
                      <td>xyz@gmail.com</td>
                      <td>+91 9876540321</td>
                      <td>#SDF345</td>
                      <td><img src="assets/images/cover-image.png" width="30px;" class="img-radius" alt="User-Profile-Image"></td>
                      <td>Lorem Ipsum</td>
                      <td>
                        <button data-toggle="modal" data-target="#credential-modal" class="btn btn-sm btn-warning"><i class="ti-key"></i></button>
                        <button data-toggle="modal" data-target="#access-modal" class="btn btn-sm btn-success"><i class="ti-star"></i></button>
                        <button data-toggle="modal" data-target="#track-modal" class="btn btn-sm btn-info"><i class="ti-eye"></i></button>
                        <button data-toggle="modal" data-target="#delete-modal" class="btn btn-sm btn-danger"><i class="ti-trash"></i></button> 
                      </td>
                    </tr>
                  </tbody>
                </table>
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

<!-- credential modal -->
<div id="credential-modal" class="modal fade" role="dialog">
   <div class="modal-dialog modal-md">
    <div class="modal-header bg-primary">
      <h5 class="modal-title">Credential</h5>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <div class="modal-body">
      <div class="row">
        <div class="col-md-12">
          <form [formGroup]="add" (ngSubmit)="onSubmit()">
            <div class="form-group">
              <p class="text-center">Sub Admin Name</p>
              <div class="single-img">
              <div class="img-box">
                <div class="img">
                  <img class="imagefile" src="assets/images/avatar-7.jpg"/>
                </div>
                </div>
             </div>
             </div>
            <div class="form-group">
              <input type="email" class="form-control" placeholder="Enter Email Id">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" placeholder="Enter Password">
            </div>
            <div class="form-group text-center">
              <button class="btn btn-success">Save</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- access modal -->
<div class="modal fade" id="access-modal">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h5 class="modal-title">Access</h5>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-6 text-left">
                        <label class="switch">
                            <input type="checkbox" checked>
                            <span class="slider round"></span>
                        </label>
                        <span class="fw-600"> Grant/Revoke Access</span>
                    </div>
                    <div class="col-sm-6 text-left">
                        <p>Sub-Admin Name</p>
                        <img src="assets/images/avatar-7.jpg" height="75" class="margin-bottom-15" />
                    </div>

                </div>
                <div class="row gutter-xs">
                    <div class="col-md-5">
                        <h6>Features :</h6>
                        <div class="table-responsive">
                            <table class="view-table">
                                <tr>
                                    <td class="fw-600">Dashboard</td>
                                    <td class="text-danger fw-600"><i class="fa fa-trash-o"></i></td>
                                </tr>
                                <tr>
                                    <td class="fw-600">User Mgt</td>
                                    <td class="text-danger fw-600"><i class="fa fa-trash-o"></i></td>
                                </tr>
                                <tr>
                                    <td class="fw-600">Payment Mgt</td>
                                    <td class="text-danger fw-600"><i class="fa fa-trash-o"></i></td>
                                </tr>
                                <tr>
                                    <td class="fw-600">Order Mgt</td>
                                    <td class="text-danger fw-600"><i class="fa fa-trash-o"></i></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <a href="#" class="text-primary pull-right"><i class="fa fa-plus"></i> Add Features</a>
                    </div>
                    <div class="col-md-12 text-center">
                        <button type="button" data-dismiss="modal" class="btn btn-primary margin-bottom-10">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- access modal -->
<div class="modal fade" id="track-modal">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                 <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h5 class="modal-title">Track</h5>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-5 text-left">
                        <span class="fw-600 text-danger pull-left"> Admin ID : #GUE54</span>
                    </div>
                    <div class="col-sm-7 text-left">
                        <p>Sub-Admin Name</p>
                        <img src="assets/images/avatar-7.jpg" height="75" class="margin-bottom-15" />
                    </div>
                </div>
                <div class="row mt-30">
                    <div class="col-md-6">
                        <div class="details-box">
                            <h6>Last Login Details :</h6>
                            <p>
                                Lorem Ipsum<br>
                                Lorem Ipsum<br>
                                Lorem Ipsum<br>
                                Lorem Ipsum
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="details-box">
                            <h6>Task Performed :</h6>
                            <p>
                                Lorem Ipsum<br>
                                Lorem Ipsum<br>
                                Lorem Ipsum<br>
                                Lorem Ipsum
                            </p>
                        </div>
                    </div>
                    <div class="col-md-12 text-center mt-20">
                        <button type="button" data-dismiss="modal" class="btn btn-primary btn-sm margin-bottom-10">Exit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- delete block -->
<div id="delete-modal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm">
    <div class="modal-body text-center">
      <i class="text-danger fs-34 d-inline-block ti-trash mb-4"></i>
      <h6>Are you sure you want to delete this account?</h6>
      <hr />
      <div class="m-t-15">
        <button type="button" class="btn btn-sm btn-success mr-1" data-target="#delete-sccess-modal" data-toggle="modal" data-dismiss="modal">Delete</button>
        <button type="button" class="btn btn-sm btn-danger ml-1" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>

<!-- success modal -->
<div id="delete-sccess-modal" class="modal fade">
  <div class="modal-dialog modal-sm" data-dismiss="modal">
    <div class="modal-body text-center">
      <i class="text-danger fs-34 d-inline-block icofont icofont-check-circled mb-4"></i>
      <h6>Delete Successfully</h6>
    </div>
  </div>
</div>