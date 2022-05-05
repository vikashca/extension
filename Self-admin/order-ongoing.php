<?php include 'header.php' ?>
<div id="orderPage"></div>
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
                  <h4>Order Management</h4>
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
                    <li class="breadcrumb-item"><a href="#">Order Management</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="page-body">
          <div class="card">
            <div class="card-block">
               <!--tab-->
                  <div class="col-xs-12 ">
                     <div class="dt-plugin-buttons"></div>
                     <nav>
                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                           <a class="nav-item nav-link active" href="order-ongoing.php">Ongoing</a>
                           <a class="nav-item nav-link" href="order-past.php">Past</a>
                        </div>
                     </nav>
                      <div class="col-xs-12 col-sm-12 col-md-12 mt-4">
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
                                      <th>Order Id</th>
                                      <th>Product Details</th>
                                      <th>Total Charges</th>
                                      <th>Payment Status</th>
                                      <th>Product Quantity</th>
                                      <th>Store Name</th>
                                      <th>Order Status</th>
                                      <th class="action-wd">Action</th>
                                      <th>Send notification to Deliver</th>
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
                                      <td class="text-danger">#400</td> 
                                      <td class="text-success">Done</td>  
                                      <td>3</td>
                                      <td>Lorem Ipsum</td>
                                      <td>
                                        <select class="form-control" id="sel1">
                                          <option>Rejected</option>
                                          <option>Ongoing</option>
                                          <option>Cancelled</option>
                                          <option>Completed</option>
                                        </select>
                                      </td>          
                                      <td>
                                        <a href="view-order.php" class="btn btn-sm btn-info"><i class="ti-eye"></i></a>
                                        <button data-toggle="modal" data-target="#delete-modal" class="btn btn-sm btn-danger"><i class="ti-trash"></i></button>
                                      </td> 
                                      <td>
                                        <button data-toggle="modal" data-target="#assign-modal" class="btn btn-sm btn-primary">Assign Driver</button>
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
                                      <td class="text-danger">#400</td> 
                                      <td class="text-success">Done</td>  
                                      <td>3</td>
                                      <td>Lorem Ipsum</td>
                                      <td>
                                        <select class="form-control" id="sel1">
                                          <option>Rejected</option>
                                          <option>Ongoing</option>
                                          <option>Cancelled</option>
                                          <option>Completed</option>
                                        </select>
                                      </td>          
                                      <td>
                                        <a href="view-order.php" class="btn btn-sm btn-info"><i class="ti-eye"></i></a>
                                        <button data-toggle="modal" data-target="#delete-modal" class="btn btn-sm btn-danger"><i class="ti-trash"></i></button>
                                      </td>
                                      <td>
                                        <button data-toggle="modal" data-target="#assign-modal" class="btn btn-sm btn-primary">Assign Driver</button>
                                      </td>                        
                                    </tr>
                                  </tbody>
                            </table>
                          </div>
                      </div>
                  </div>
                  <!------tab-->
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
  $('#attribute-size').DataTable({
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
      <h6>Are you sure you want to delete this item?</h6>
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

<div class="modal fade" id="assign-modal">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <!-- <div class="modal-header">
        <h4 class="modal-title">Added Time Slot (15/02/2020 - 20/06/2020)</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div> -->
      <div class="modal-body">
        <ul class="speciality-list">
          <li> <i class="fa fa-user-md"></i> <span class="ml-2">Delivery Man 1 </span>&nbsp;&nbsp; <label class="container_check pull-right">
            <input type="checkbox">
            <span class="checkmark checkmark-tst"></span>
          </label></li>
          <li class="mt-2"> <i class="fa fa-user-md"></i> <span class="ml-2">Delivery Man 1 </span>&nbsp;&nbsp; <label class="container_check pull-right">
            <input type="checkbox">
            <span class="checkmark checkmark-tst"></span>
          </label></li>
          <li class="mt-2"> <i class="fa fa-user-md"></i> <span class="ml-2">Delivery Man 1 </span>&nbsp;&nbsp; <label class="container_check pull-right">
            <input type="checkbox">
            <span class="checkmark checkmark-tst"></span>
          </label></li>
          <li class="mt-2"> <i class="fa fa-user-md"></i> <span class="ml-2">Delivery Man 1 </span>&nbsp;&nbsp; <label class="container_check pull-right">
            <input type="checkbox">
            <span class="checkmark checkmark-tst"></span>
          </label></li>
          <li class="mt-2"> <i class="fa fa-user-md"></i> <span class="ml-2">Delivery Man 1 </span>&nbsp;&nbsp; <label class="container_check pull-right">
            <input type="checkbox">
            <span class="checkmark checkmark-tst"></span>
          </label></li>
          <li class="mt-2"> <i class="fa fa-user-md"></i> <span class="ml-2">Delivery Man 1 </span>&nbsp;&nbsp; <label class="container_check pull-right">
            <input type="checkbox">
            <span class="checkmark checkmark-tst"></span>
          </label></li>
          <li class="mt-2"> <i class="fa fa-user-md"></i> <span class="ml-2">Delivery Man 1 </span>&nbsp;&nbsp; <label class="container_check pull-right">
            <input type="checkbox">
            <span class="checkmark checkmark-tst"></span>
          </label></li>
          <li class="mt-2"> <i class="fa fa-user-md"></i> <span class="ml-2">Delivery Man 1 </span>&nbsp;&nbsp; <label class="container_check pull-right">
            <input type="checkbox">
            <span class="checkmark checkmark-tst"></span>
          </label></li>
        </ul>
            <div class="text-center mt-4">
              <button class="btn btn-primary btn-sm">Send Notification</button>
            </div> 
      </div>
    </div>
  </div>
</div>