<?php include 'header.php' ?>
<div id="categoryPage"></div>
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
                  <h4>Category Management</h4>
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
                    <li class="breadcrumb-item"><a href="#">Category Management</a></li>
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
                <div class="col-sm-12 col-md-12 col-lg-12 mb-10">
                  <div class="pull-right mb-10">
                      <button type="button" data-target="#addsub" data-toggle="modal" class="btn btn-primary btn-md">Add Sub-Category</button>
                      <button type="button" data-target="#new-category" data-toggle="modal" class="btn btn-primary btn-md">Add New Category</button>
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
                          <th>Category Name</th>
                          <th>Category Image</th>
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
                          <td>Lorem Ipsum </td>
                          <td><img src="assets/images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image" width="40px;"></td>                
                          <td>
                            <button data-toggle="modal" data-target="#edit" class="btn btn-sm btn-success"><i class="ti-pencil"></i></button>
                            <a href="view-category.php" class="btn btn-sm btn-info"><i class="ti-eye"></i></a>
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
                          <td>Lorem Ipsum </td>
                          <td><img src="assets/images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image" width="40px;"></td>                
                          <td>
                            <button data-toggle="modal" data-target="#edit" class="btn btn-sm btn-success"><i class="ti-pencil"></i></button>
                            <a href="view-category.php" class="btn btn-sm btn-info"><i class="ti-eye"></i></a>
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
<!-- edit modal -->
<div id="edit" class="modal fade" role="dialog">
   <div class="modal-dialog modal-md">
    <div class="modal-header bg-primary">
      <h4 class="modal-title">Edit Category</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <div class="modal-body">
      <div class="row">
        <div class="col-md-12">
          <form [formGroup]="add" (ngSubmit)="onSubmit()">
            <div class="form-group">
              <!-- <label>Category Name</label> -->
              <div class="single-img">
              <div class="img-box">
                <div class="img">
                  <img class="imagefile" src="assets/images/avatar-7.jpg"/>
                </div>
                <label class="fileInput">
                  Upload File
                  <input type="file" onChange="singleFiles(event)"/>
                </label>
              </div>
             </div>
             </div>
            <div class="form-group">
             <!--  <label>Category Name</label> -->
              <input type="text" class="form-control" placeholder="Edit Category Name">
            </div>
            <div class="form-group text-center">
              <button class="btn btn-success">Edit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- add sub-category modal -->
<div id="addsub" class="modal fade" role="dialog">
  <div class="modal-dialog modal-md">
    <div class="modal-header bg-primary">
      <h4 class="modal-title">Add Sub Category</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <div class="modal-body">
      <div class="row">
        <div class="col-md-12">
          <form [formGroup]="add" (ngSubmit)="onSubmit()">
            <div class="form-group">
              <div class="single-img">
              <div class="img-box">
                <div class="img">
                  <img class="imagefile" src="assets/images/avatar-7.jpg"/>
                </div>
                <label class="fileInput">
                  Upload File
                  <input type="file" onChange="singleFiles(event)"/>
                </label>
              </div>
             </div>
             </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Enter Sub-Category Name">
            </div>
            <div class="form-group">
              <select class="form-control" id="sel1">
                <option>Select Category</option>
                <option>InActive</option>
              </select>
            </div>
            <div class="form-group text-center">
              <button class="btn btn-success" data-target="#addsub-sccess-modal" data-toggle="modal" data-dismiss="modal">Add</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- add new category modal -->
<div id="new-category" class="modal fade" role="dialog">
   <div class="modal-dialog modal-md">
    <div class="modal-header bg-primary">
      <h4 class="modal-title">Add New Category</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <div class="modal-body">
      <div class="row">
        <div class="col-md-12">
          <form [formGroup]="add" (ngSubmit)="onSubmit()">
            <div class="form-group">
              <!-- <label>Category Name</label> -->
              <div class="single-img">
              <div class="img-box">
                <div class="img">
                  <img class="imagefile" src="assets/images/avatar-7.jpg"/>
                </div>
                <label class="fileInput">
                  Upload File
                  <input type="file" onChange="singleFiles(event)"/>
                </label>
              </div>
             </div>
             </div>
            <div class="form-group">
             <!--  <label>Category Name</label> -->
              <input type="text" class="form-control" placeholder="Add New Category Name">
            </div>
            <div class="form-group text-center">
              <button class="btn btn-success" data-target="#addnew-sccess-modal" data-toggle="modal" data-dismiss="modal">Add</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- View modal -->
<div id="view" class="modal fade" role="dialog">
   <div class="modal-dialog modal-md">
    <div class="modal-header bg-primary">
      <h4 class="modal-title">View Category</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <div class="modal-body">
                <div class="row gutter-xs">
                    <div class="col-sm-12 text-center">
                        <h5>Category Name</h5>
                        <img src="assets/img/user1.jpg" height="75" class="margin-bottom-15" />
                    </div>
                </div>
                <div class="row gutter-xs mt-20">
                    <div class="col-md-offset-2 col-md-8">
                        <div class="search-admin pd-20 border-4side">
                            <ul class="nav navbar-nav w-100 navbar-center mb-20">
                                <li>
                                    <input type="search" class="form-control search" placeholder="Search here...">
                                </li>
                            </ul>
                            <div class="search-list">
                                <ul>
                                    <li>
                                        <span><i class="fa fa-user"></i> Sub-Category Name</span>
                                        <span class="pull-right text-danger">
                                            <i class="fa fa-trash-o"></i>
                                            <i class="fa fa-pencil"></i>
                                        </span>
                                    </li>
                                    <li>
                                        <span><i class="fa fa-user"></i> Sub-Category Name</span>
                                        <span class="pull-right text-danger">
                                            <i class="fa fa-trash-o"></i>
                                            <i class="fa fa-pencil"></i>
                                        </span>
                                    </li>
                                    <li>
                                        <span><i class="fa fa-user"></i> Sub-Category Name</span>
                                        <span class="pull-right text-danger">
                                            <i class="fa fa-trash-o"></i>
                                            <i class="fa fa-pencil"></i>
                                        </span>
                                    </li>
                                    <li>
                                        <span><i class="fa fa-user"></i> Sub-Category Name</span>
                                        <span class="pull-right text-danger">
                                            <i class="fa fa-trash-o"></i>
                                            <i class="fa fa-pencil"></i>
                                        </span>
                                    </li>
                                    <li>
                                        <span><i class="fa fa-user"></i> Sub-Category Name</span>
                                        <span class="pull-right text-danger">
                                            <i class="fa fa-trash-o"></i>
                                            <i class="fa fa-pencil"></i>
                                        </span>
                                    </li>
                                </ul>
                            </div>
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
<div id="addsub-sccess-modal" class="modal fade">
  <div class="modal-dialog modal-sm" data-dismiss="modal">
    <div class="modal-body text-center">
      <i class="text-warning fs-34 d-inline-block icofont icofont-check-circled mb-4"></i>
      <h6>Sub Category Successfully</h6>
    </div>
  </div>
</div>
<!-- success modal -->
<div id="addnew-sccess-modal" class="modal fade">
  <div class="modal-dialog modal-sm" data-dismiss="modal">
    <div class="modal-body text-center">
      <i class="text-success fs-34 d-inline-block icofont icofont-check-circled mb-4"></i>
      <h6>New Category Successfully</h6>
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