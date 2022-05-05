<?php include 'header.php' ?>
<div id="dealsPage"></div>
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
                  <h4>Deals Management</h4>
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
                    <li class="breadcrumb-item"><a href="#">Deals Management</a></li>
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
                      <a href="add-new-deals.php" class="btn btn-primary btn-md">Add New</a>
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
                      <th>Deals Remaining Time</th>
                      <th>Coupon Description</th>
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
                      <td class="text-danger">03h: 12m: 56s</td>
                      <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.  </td>
                      <td>Lorem Ipsum</td>
                      <td>
                        <button data-toggle="modal" data-target="#view-modal" class="btn btn-sm btn-info"><i class="ti-eye"></i></button>
                        <button data-toggle="modal" data-target="#edit-modal" class="btn btn-sm btn-success"><i class="ti-pencil"></i></button> 
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
                      <td class="text-danger">03h: 12m: 56s</td>
                      <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.  </td>
                      <td>Lorem Ipsum</td>
                      <td>
                        <button data-toggle="modal" data-target="#view-modal" class="btn btn-sm btn-info"><i class="ti-eye"></i></button>
                        <button data-toggle="modal" data-target="#edit-modal" class="btn btn-sm btn-success"><i class="ti-pencil"></i></button> 
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
<script type="text/javascript">
  
$(function() {
  var imagesPreview = function(input, placeToInsertImagePreview) {
    if (input.files) {
      // debugger;
      var filesAmount = input.files.length;
      for (i = 0; i < filesAmount; i++) {
        var reader = new FileReader();
        reader.onload = function(event) {
          //for image
          var html = $('<li><span class="close">&times;</span><span>'+input.files[0].name+'</span><img src='+ event.target.result +' style="width:100%;height:135px;"></li>');
          //for video
          // var html = $('<li><span class="close">&times;</span><video controls=""><source src='+ event.target.result +' type="video/mp4"></video></li>');

          $(html).appendTo(placeToInsertImagePreview);
          $('.close').click(function(){
            $(this).closest('li').remove();
          });
        }
        reader.readAsDataURL(input.files[i]);
      }
    }
  };

  $('#multiImageSelet').on('change', function() {
    imagesPreview(this, 'ul.pictures');
  });
});
</script>
<div id="add-modal" class="modal fade" role="dialog">
   <div class="modal-dialog modal-md">
    <div class="modal-header bg-primary">
      <h5 class="modal-title">Add New Deal</h5>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <div class="modal-body">
      <div class="row">
        <div class="col-md-12">
          <form>
            <div class="form-group">
              <p class="text-left">Deal Image</p>
              <div class="controls clearfix deals-multipleimg">
                <label class="filesupload">
                  <input type="file" name="pictures" id="multiImageSelet" multiple="">
                  <i class="fa fa-upload text-primary mr-2"></i> Upload Pictures
                </label>
                <ul class="pictures">

                </ul>
              </div>
             </div>
            <div class="form-group">
              <input type="email" class="form-control" placeholder="Enter Deal Name">
            </div>
            <div class="form-group">
              <select class="form-control" id="sel1">
                <option>Select Store</option>
                <option>Lorem Ipsum</option>
              </select>
            </div>
            <div class="form-group">
              <select class="form-control" id="sel1">
                <option>Select Product</option>
                <option>Lorem Ipsum</option>
              </select>
            </div>
            <div class="form-group">
              <select class="form-control" id="sel1">
                <option>Select Category</option>
                <option>Lorem Ipsum</option>
              </select>
            </div>
            <div class="form-group">
              <select class="form-control" id="sel1">
                <option>Select Sub Category</option>
                <option>Lorem Ipsum</option>
              </select>
            </div>
            <div class="form-group">
              <label>Select Start Date</label>
              <label class="d-flex text-nowrap"> 
                <input type="text" class="form-control mr-3 datepicker" id="start_date" autocomplete="off"/>
                <i class="fa fa-calendar mt-2 fs-18"></i>
              </label>
            </div>
            <div class="form-group">
              <label>Select End Date</label>
              <label class="d-flex text-nowrap">
                <input type="text" class="form-control mr-3 datepicker" id="end_date" autocomplete="off"/>
                <i class="fa fa-calendar mt-2 fs-18"></i>
              </label>
            </div>
            <div class="form-group text-center">
              <button class="btn btn-success">Add</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="edit-modal" class="modal fade" role="dialog">
   <div class="modal-dialog modal-md">
    <div class="modal-header bg-primary">
      <h5 class="modal-title">Edit Deals</h5>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <div class="modal-body">
      <div class="row">
        <div class="col-md-12">
          <form>
            <div class="form-group">
              <select class="form-control" id="sel1">
                <option>Select Product Category</option>
                <option>Lorem Ipsum</option>
              </select>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Enter Coupon Name">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Enter Coupon Discount">
            </div>
            <div class="form-group">
              <label class="d-flex text-nowrap"> 
                <input type="text" class="form-control mr-3 datepicker" id="start_date" autocomplete="off"/ placeholder="Select Start Date">
                <i class="fa fa-calendar mt-2 fs-18"></i>
              </label>
            </div>
            <div class="form-group">
              <label class="d-flex text-nowrap">
                <input type="text" class="form-control mr-3 datepicker" id="end_date" autocomplete="off"/ placeholder="Select End Date">
                <i class="fa fa-calendar mt-2 fs-18"></i>
              </label>
            </div>
            <div class="form-group">
              <div class="row m-0">
                <input type="text" class="form-control col-sm-10" placeholder="Enter Coupon Duration">
                <select class="form-control col-sm-2" id="sel1">
                  <option>Select Category</option>
                  <option>Lorem Ipsum</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Enter Coupon Code">
            </div>
            <div class="form-group">
              <textarea class="form-control" rows="2" id="comment"></textarea>
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
<div id="view-modal" class="modal fade" role="dialog">
   <div class="modal-dialog modal-md">
    <div class="modal-header bg-primary">
      <h5 class="modal-title">View Deals</h5>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <div class="modal-body">
      <div class="row">
        <div class="col-md-12">
          <div class="view-content">
            <h6>Coupon Remaining Time</h6>
            <p>
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
            </p>
            <h6><strong>Coupon Code :</strong> <span class="text-danger">HUS1DSA23#</span></h6>
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