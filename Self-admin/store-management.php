<?php include 'header.php' ?>
<div id="storePage"></div>
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
                  <h4>Stores Management</h4>
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
                    <li class="breadcrumb-item"><a href="#">Stores Management</a></li>
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
                <div class="col-sm-12 col-md-12 col-lg-12 mb-10">
                  <div class="pull-right mb-10">
                      <a href="add-substore.php" class="btn btn-primary btn-md">Add Sub Store</a>
                      <a href="add-newstore.php" class="btn btn-primary btn-md">Add New Store</a>
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
                      <th>Store Name</th>
                      <th>Store Image</th>
                      <th>Sub stores/Min stores</th>
                      <th>Contact Number</th>
                      <th>Address</th>
                      <th>Country</th>
                      <th>Allocated sub admin</th>
                      <th>Total Products</th>
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
                      <td>
                          Lorem Ipsum.
                          <a href="view-store.php"> <span class="btn btn-sm btn-info" data-target="#product-details" data-toggle="modal"><i class="fa fa-eye"></i></span></a>
                          <a href="edit-store.php"> <span class="btn btn-sm btn-success"><i class="fa fa-pencil"></i></span></a>
                          <span class="btn btn-sm btn-danger" data-target="#product-details" data-toggle="modal"><i class="fa fa-trash"></i></span>
                      </td>
                      <td>+91 9876540321</td>
                      <td>Lorem Ipsum has been the industry's standard dummy.</td>
                      <td>Lorem Ipsum</td>
                      <td>Lorem Ipsum <span><img src="assets/images/avatar-4.jpg" width="30px;" class="img-radius" alt="User-Profile-Image"></span></td>
                      <td>34</td>
                      <td>
                        <a href="view-store.php" class="btn btn-sm btn-info"><i class="ti-eye"></i></a>
                        <a href="edit-store.php" class="btn btn-sm btn-success"><i class="ti-pencil"></i></a>
                        <button type="button" data-target="#block-modal" data-toggle="modal" class="btn btn-sm btn-primary" title="Block"><i class="fa fa-toggle-on"></i></button>
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
                      <td>
                          Lorem Ipsum.
                          <span class="btn btn-sm btn-info" data-target="#product-details" data-toggle="modal"><i class="fa fa-eye"></i></span>
                          <a href="edit-store.php"> <span class="btn btn-sm btn-success"><i class="fa fa-pencil"></i></span></a>
                          <span class="btn btn-sm btn-danger" data-target="#product-details" data-toggle="modal"><i class="fa fa-trash"></i></span>
                      </td>
                      <td>+91 9876540321</td>
                      <td>Lorem Ipsum has been the industry's standard dummy.</td>
                      <td>Lorem Ipsum</td>
                      <td>Lorem Ipsum <span><img src="assets/images/avatar-4.jpg" width="30px;" class="img-radius" alt="User-Profile-Image"></span></td>
                      <td>34</td>
                      <td>
                        <button data-toggle="modal" data-target="#view" class="btn btn-sm btn-info"><i class="ti-eye"></i></button>
                        <a href="edit-store.php" class="btn btn-sm btn-success"><i class="ti-pencil"></i></a>
                        <button type="button" data-target="#block-modal" data-toggle="modal" class="btn btn-sm btn-primary" title="Block"><i class="fa fa-toggle-on"></i></button>
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