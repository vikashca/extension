<?php include 'header.php' ?>
<div id="couponPage"></div>
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
                  <h4>Coupon Management</h4>
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
                    <li class="breadcrumb-item"><a href="#">Coupon Management</a></li>
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
                      <a href="add-coupon.php" class="btn btn-primary btn-md">Add Coupon</a>
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
                      <th>Coupon Id</th>
                      <th>Coupon Code</th>
                      <th>Coupon Discount</th>
                      <th>Country Name</th>
                      <th>Minimum Cart Value</th>
                      <th>Maximum Discount</th>
                      <th>No. of Uses</th>
                      <th>Description</th>
                      <th>Status</th>
                      <th>Start Date</th>
                      <th>End Date</th>
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
                      <td>#345</td>
                      <td>Lorem Ipsum</td>
                      <td>SAR 40 %</td>
                      <td>Afghanistan</td>
                      <td>SAR</td>
                      <td>SAR</td>
                      <td>100</td>
                      <td>Lorem Ipsum is simply dummy text.</td>
                      <td class="text-success">Active</td>
                      <td>10/11/2019</td>
                      <td>10/12/2019</td>
                      <td>
                       <a href="add-coupon.php" class="btn btn-sm btn-success"><i class="ti-pencil"></i></a> 
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
                      <td>#345</td>
                      <td>Lorem Ipsum</td>
                      <td>SAR 40 %</td>
                      <td>Afghanistan</td>
                      <td>SAR</td>
                      <td>SAR</td>
                      <td>100</td>
                      <td>Lorem Ipsum is simply dummy text.</td>
                      <td class="text-success">Active</td>
                      <td>10/11/2019</td>
                      <td>10/12/2019</td>
                      <td>
                        <a href="add-coupon.php" class="btn btn-sm btn-success"><i class="ti-pencil"></i></a> 
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