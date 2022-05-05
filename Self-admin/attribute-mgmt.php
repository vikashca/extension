<?php include 'header.php' ?>
<div id="attributePage"></div>
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
                  <h4>Attribute Management</h4>
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
                    <li class="breadcrumb-item"><a href="#">Attribute Management</a></li>
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
                           <a class="nav-item nav-link active" id="nav-color-tab" data-toggle="tab" href="#color" role="tab" aria-controls="nav-color" aria-selected="true">Color</a>
                           <a class="nav-item nav-link" id="nav-sizes-tab" data-toggle="tab" href="#sizes" role="tab" aria-controls="nav-sizes" aria-selected="false">Sizes</a>
                        </div>
                     </nav>
                     <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="color" role="tabpanel" aria-labelledby="nav-color-tab">
                          <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12 mb-10">
                              <div class="pull-right mb-10">
                                  <button type="button" data-target="#addcolor" data-toggle="modal" class="btn btn-primary btn-md">Add Color</button>
                              </div>
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-12 col-md-12">
                             <div class="dt-plugin-buttons"></div>
                              <div class="dt-responsive table-responsive">
                                <table id="account-list" class="table table-striped table-bordered nowrap m-0">
                                   <thead>
                                        <tr>
                                          <th>Color Id </th>
                                          <th>Color Name & Color Code</th>
                                          <th class="action-wd">Action</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td>#12</td>
                                          <td>Lorem Ipsum </td>               
                                          <td>
                                            <button data-toggle="modal" data-target="#editcolor" class="btn btn-sm btn-success"><i class="ti-pencil"></i></button>
                                            <button data-toggle="modal" data-target="#delete-modal" class="btn btn-sm btn-danger"><i class="ti-trash"></i></button>
                                          </td>                       
                                        </tr>
                                        <tr>
                                          <td>#13</td>
                                          <td>Lorem Ipsum </td>               
                                          <td>
                                            <button data-toggle="modal" data-target="#editcolor" class="btn btn-sm btn-success"><i class="ti-pencil"></i></button>
                                            <button data-toggle="modal" data-target="#delete-modal" class="btn btn-sm btn-danger"><i class="ti-trash"></i></button>
                                          </td>                       
                                        </tr>
                                      </tbody>
                                </table>
                              </div>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="sizes" role="tabpanel" aria-labelledby="nav-sizes-tab">
                          <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12 mb-10">
                              <div class="pull-right mb-10">
                                  <button type="button" data-target="#addsize" data-toggle="modal" class="btn btn-primary btn-md">Add Sizes</button>
                              </div>
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-12 col-md-12">
                             <div class="dt-plugin-buttons"></div>
                              <div class="dt-responsive table-responsive">
                                <table id="attribute-size" class="table table-striped table-bordered nowrap m-0">
                                   <thead>
                                        <tr>
                                          <th>Size Id</th>
                                          <th>Size</th>
                                          <th class="action-wd">Action</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td>#12</td>
                                          <td>Lorem Ipsum </td>               
                                          <td>
                                            <button data-toggle="modal" data-target="#editsize" class="btn btn-sm btn-success"><i class="ti-pencil"></i></button>
                                            <button data-toggle="modal" data-target="#delete-modal" class="btn btn-sm btn-danger"><i class="ti-trash"></i></button>
                                          </td>                       
                                        </tr>
                                        <tr>
                                          <td>#13</td>
                                          <td>Lorem Ipsum </td>               
                                          <td>
                                            <button data-toggle="modal" data-target="#editsize" class="btn btn-sm btn-success"><i class="ti-pencil"></i></button>
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
<!-- edit modal -->
<div id="editcolor" class="modal fade" role="dialog">
  <div class="modal-dialog modal-md">
    <div class="modal-header bg-primary">
      <h4 class="modal-title">Edit Color</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <div class="modal-body">
      <div class="row">
        <div class="col-md-12">
          <form [formGroup]="add" (ngSubmit)="onSubmit()">
            <div class="form-group">
              <label>Select Category</label>
              <select class="form-control" id="sel1">
                <option>Men</option>
                <option>Women</option>
              </select>
            </div>
            <div class="form-group">
              <label>Color Name</label>
              <input type="text" class="form-control" placeholder="Blue">
            </div>
            <div class="form-group">
              <label>Color Hex Code</label>
              <input type="text" class="form-control" placeholder="#fffdd">
            </div>
            <div class="form-group text-center">
              <button class="btn btn-success" data-target="#editcolor-sccess-modal" data-toggle="modal" data-dismiss="modal">Save</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- add color modal -->
<div id="addcolor" class="modal fade" role="dialog">
  <div class="modal-dialog modal-md">
    <div class="modal-header bg-primary">
      <h4 class="modal-title">Add Color</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <div class="modal-body">
      <div class="row">
        <div class="col-md-12">
          <form [formGroup]="add" (ngSubmit)="onSubmit()">
            <div class="form-group">
              <label>Select Category</label>
              <select class="form-control" id="sel1">
                <option>Men</option>
                <option>Women</option>
              </select>
            </div>
            <div class="form-group">
              <label>Color Name</label>
              <input type="text" class="form-control" placeholder="Blue">
            </div>
            <div class="form-group">
              <label>Color Hex Code</label>
              <input type="text" class="form-control" placeholder="#fffdd">
            </div>
            <div class="form-group text-center">
              <button class="btn btn-success" data-target="#addcolor-sccess-modal" data-toggle="modal" data-dismiss="modal">Save</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- add size modal -->
<div id="addsize" class="modal fade" role="dialog">
  <div class="modal-dialog modal-md">
    <div class="modal-header bg-primary">
      <h4 class="modal-title">Add Size</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <div class="modal-body">
      <div class="row">
        <div class="col-md-12">
          <form [formGroup]="add" (ngSubmit)="onSubmit()">
            <div class="form-group">
              <label>Select Category</label>
              <select class="form-control" id="sel1">
                <option>Men</option>
                <option>Women</option>
              </select>
            </div>
            <div class="form-group">
              <label>Color Name</label>
              <input type="text" class="form-control" placeholder="Blue">
            </div>
            <div class="form-group text-center">
              <button class="btn btn-success" data-target="#addsize-sccess-modal" data-toggle="modal" data-dismiss="modal">Save</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- add size modal -->
<div id="editsize" class="modal fade" role="dialog">
  <div class="modal-dialog modal-md">
    <div class="modal-header bg-primary">
      <h4 class="modal-title">Edit Size</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <div class="modal-body">
      <div class="row">
        <div class="col-md-12">
          <form [formGroup]="add" (ngSubmit)="onSubmit()">
            <div class="form-group">
              <label>Select Category</label>
              <select class="form-control" id="sel1">
                <option>Men</option>
                <option>Women</option>
              </select>
            </div>
            <div class="form-group">
              <label>Color Name</label>
              <input type="text" class="form-control" placeholder="Blue">
            </div>
            <div class="form-group text-center">
              <button class="btn btn-success" data-target="#editsize-sccess-modal" data-toggle="modal" data-dismiss="modal">Save</button>
            </div>
          </form>
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
<div id="addcolor-sccess-modal" class="modal fade">
  <div class="modal-dialog modal-sm" data-dismiss="modal">
    <div class="modal-body text-center">
      <i class="text-warning fs-34 d-inline-block icofont icofont-check-circled mb-4"></i>
      <h6>Add Color Successfully</h6>
    </div>
  </div>
</div>
<div id="editcolor-sccess-modal" class="modal fade">
  <div class="modal-dialog modal-sm" data-dismiss="modal">
    <div class="modal-body text-center">
      <i class="text-warning fs-34 d-inline-block icofont icofont-check-circled mb-4"></i>
      <h6>Edit Color Successfully</h6>
    </div>
  </div>
</div>
<!-- success modal -->
<div id="addsize-sccess-modal" class="modal fade">
  <div class="modal-dialog modal-sm" data-dismiss="modal">
    <div class="modal-body text-center">
      <i class="text-warning fs-34 d-inline-block icofont icofont-check-circled mb-4"></i>
      <h6>Add Size Successfully</h6>
    </div>
  </div>
</div>
<div id="editsize-sccess-modal" class="modal fade">
  <div class="modal-dialog modal-sm" data-dismiss="modal">
    <div class="modal-body text-center">
      <i class="text-warning fs-34 d-inline-block icofont icofont-check-circled mb-4"></i>
      <h6>Edit Size Successfully</h6>
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