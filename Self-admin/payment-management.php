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
                  <h4>Payment Management</h4>
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
                    <li class="breadcrumb-item"><a href="#">Payment Management</a></li>
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
                          <th>User Name & Image</th>
                          <th>Order Date & Time</th>
                          <th>Transaction Id</th>
                          <th>Product Details</th>
                          <th>Store Name</th>
                          <th>Total Charges</th>
                          <th>Payment Status</th>
                          <th>Product Quantity</th>
                          <th>Delivery Status</th>
                          <th class="action-wd">Action</th>
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
                          <td>Lorem Ipsum <img src="assets/images/avatar-4.jpg" width="30px;" class="img-radius" alt="User-Profile-Image"></td>
                          <td>20/7/19, 11:00PM</td>
                          <td>#345ASD</td>
                          <td>Product Name</td>
                          <td>Lorem Ipsum</td>
                          <td class="text-danger">#400</td> 
                          <td class="text-success">Done</td>  
                          <td>3</td>
                          <td class="text-success">Delivered</td>       
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
                          <td>Lorem Ipsum <img src="assets/images/avatar-4.jpg" width="30px;" class="img-radius" alt="User-Profile-Image"></td>
                          <td>20/7/19, 11:00PM</td>
                          <td>#345ASD</td>
                          <td>Product Name</td>
                          <td>Lorem Ipsum</td>
                          <td class="text-danger">#400</td> 
                          <td class="text-success">Done</td>  
                          <td>3</td>
                          <td class="text-success">Delivered</td>      
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