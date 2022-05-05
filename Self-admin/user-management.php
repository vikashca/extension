<?php include 'header.php' ?>
<div id="accountPage"></div>
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
                  <h4>User Management</h4>
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
                    <li class="breadcrumb-item"><a href="#">User Management</a></li>
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
              <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-3">
                  <label class="d-flex text-nowrap">
                    <strong class="mt-1">From : </strong> 
                    <input type="text" class="ml-2 form-control mr-3 datepicker" id="start_date" autocomplete="off"/>
                    <i class="fa fa-calendar mt-2 fs-18"></i>
                  </label>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                  <label class="d-flex text-nowrap">
                    <strong class="mt-1">To : </strong>  
                    <input type="text" class="ml-2 form-control mr-3 datepicker" id="end_date" autocomplete="off"/>
                    <i class="fa fa-calendar mt-2 fs-18"></i>
                  </label>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-2">
                  <button class="btn btn-primary btn-md"><i class="fa fa-search"></i></button>
                </div>
              </div>
              <div class="dt-responsive table-responsive">
                <table id="account-list" class="table table-striped table-bordered nowrap m-0">
                  <thead>
                    <tr>
                      <th class="no-sort wpx-60">S.No</th>
                      <th>User's Name</th>
                      <th>Profile Image</th>
                      <th>Email ID</th>
                      <th>Contact Number</th>
                      <th>Address</th>
                      <th>Country</th>
                      <th>Gender</th>
                      <th>Date of Joining</th>
                      <th>Status</th>
                      <th>Total Purchase</th>
                      <th class="wpx-90 no-sort">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>01</td>
                      <td>Anshu</td>
                      <td><img src="assets/images/avatar-4.jpg" width="30px;" class="img-radius" alt="User-Profile-Image"></td>
                      <td>anshu@gmail.com</td>
                      <td>+91 9876540321</td>
                      <td>Delhi</td>
                      <td>India</td>
                      <td>Male</td>
                      <td>22/02/2020</td>
                      <td>Active</td>
                      <td>34</td>
                      <td>
                        <button data-toggle="modal" data-target="#block-modal" class="btn btn-sm btn-warning"><i class="ti-na"></i></button>
                        <button data-toggle="modal" data-target="#unblock-modal" class="btn btn-sm btn-success"><i class="ti-na"></i></button>
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
<!-- block modal -->
<div id="block-modal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm">
    <div class="modal-body text-center">
      <i class="text-warning fs-34 d-inline-block ti-link mb-4"></i>
      <h6>Are you sure you want to block this account?</h6>
      <hr />
      <div class="m-t-15">
        <button type="button" class="btn btn-sm btn-success mr-1" data-target="#block-sccess-modal" data-toggle="modal" data-dismiss="modal">Block</button>
        <button type="button" class="btn btn-sm btn-danger ml-1" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>
<!-- unblock modal -->
<div id="unblock-modal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm">
    <div class="modal-body text-center">
      <i class="text-success fs-34 d-inline-block ti-unlink mb-4"></i>
      <h6>Are you sure you want to unblock this account? </h6>
      <hr />
      <div class="m-t-15">
        <button type="button" class="btn btn-sm btn-success mr-1" data-target="#unblock-sccess-modal" data-toggle="modal" data-dismiss="modal">Unblock</button>
        <button type="button" class="btn btn-sm btn-danger ml-1" data-dismiss="modal">Cancel</button>
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
<div id="block-sccess-modal" class="modal fade">
  <div class="modal-dialog modal-sm" data-dismiss="modal">
    <div class="modal-body text-center">
      <i class="text-warning fs-34 d-inline-block icofont icofont-check-circled mb-4"></i>
      <h6>Block Successfully</h6>
    </div>
  </div>
</div>
<!-- success modal -->
<div id="unblock-sccess-modal" class="modal fade">
  <div class="modal-dialog modal-sm" data-dismiss="modal">
    <div class="modal-body text-center">
      <i class="text-success fs-34 d-inline-block icofont icofont-check-circled mb-4"></i>
      <h6>Unblock Successfully</h6>
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