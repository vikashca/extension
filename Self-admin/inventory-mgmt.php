<?php include 'header.php' ?>
<div id="inventoryPage"></div>
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
                  <h4>Inventory Management</h4>
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
                    <li class="breadcrumb-item"><a href="#">Inventory Management</a></li>
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
                <div class="col-sm-6 col-md-6 col-lg-2">
                  <select class="form-control" id="sel1">
                    <option>Daily</option>
                    <option>Weekly</option>
                    <option>Monthly</option>
                  </select>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                  <select class="form-control" id="sel1">
                    <option>Select Store</option>
                    <option>Lorem Ipsum</option>
                  </select>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-7 mb-10">
                  <div class="pull-right mb-10">
                      <a href="#" class="btn btn-primary btn-md">Stock Statistics Report</a>
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
                      <th>Product Name</th>
                      <th>Product Image</th>
                      <th>Product Price</th>
                      <th>Product Description & Benefit</th>
                      <th>Product Number</th>
                      <th>Total Product Sold</th>
                      <th>Product Availability</th>
                      <th>Stock Status</th>
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
                      <td>23409</td>
                      <td>
                        <button class="btn btn-sm btn-info" data-target="#viewContent" data-toggle="modal"><i class="fa fa-eye"></i></button>
                      </td>
                      <td>23809</td>
                      <td>33</td>
                      <td>67</td>
                      <td class="text-success">In Stock</td>
                      <td>
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
                      <td>23409</td>
                      <td>
                        <button class="btn btn-sm btn-info" data-target="#viewContent" data-toggle="modal"><i class="fa fa-eye"></i></button>
                      </td>
                      <td>23809</td>
                      <td>33</td>
                      <td>67</td>
                      <td class="text-success">In Stock</td>
                      <td>
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
<div id="viewContent" class="modal fade" role="dialog">
   <div class="modal-dialog modal-md">
    <div class="modal-header bg-primary">
      <h5 class="modal-title">View Description</h5>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <div class="modal-body">
      <div class="row">
        <div class="col-md-12">
          <div class="view-content">
            <p>
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            </p>
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