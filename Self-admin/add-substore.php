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
                  <h4>Add Sub Store</h4>
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
                    <li class="breadcrumb-item"><a href="#">Add Sub Store</a></li>
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
               <div class="row gutter-xs">
                <div class="col-md-4">
                      <div class="form-group">
                            <input type="email" class="form-control" placeholder="Enter Store Email Address">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Enter Store Password">
                        </div>
                    </div>
                    <div class="col-sm-8 text-left">
                        <div class="single-img storeupload">
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
                  </div>
                  <div class="row gutter-xs">
                    <div class="col-md-offset-2 col-md-8 m-auto">
                        <div class="table-border">
                            <form>
                                <div class="controls clearfix">
                                  <label class="filesupload">
                                    <input type="file" name="pictures" id="multiImageSelet" multiple="">
                                    <i class="fa fa-upload text-primary mr-2"></i> Upload Pictures
                                  </label>
                                  <ul class="pictures">

                                  </ul>
                                </div><!-- 
                                <div class="multi-img">
                                    <ul class="pictures"></ul>
                                </div> -->
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row gutter-xs mt-20">

                    <div class="col-md-4 full-height">
                        <div class="table-border height-250">
                            <h6 class="text-center">Add Store Details</h6>
                            <form>
                                <div class="form-group">
                                    <select class="form-control">
                                        <option value="default">Select Store Name</option>
                                        <option value="v1">Store 1</option>
                                        <option value="v2">Store 2</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter Sub-Store Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter Store Contact Number">
                                </div>
                                <div class="form-group">
                                    <select class="form-control">
                                        <option value="default">Select Store sub admin</option>
                                        <option value="v1">Store 1</option>
                                        <option value="v2">Store 2</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Enter Store Address"></textarea>
                                </div>
                                <div class="form-group">
                                    <select class="form-control">
                                        <option value="default">Select Store Country</option>
                                        <option value="v1">Store 1</option>
                                        <option value="v2">Store 2</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4 full-height">
                        <div class="table-border height-250">
                            <h6 class="text-center">Add Offer & Coupon Details</h6>
                            <form>
                              <div class="form-group">
                                <div class="single-img addstore">
                                  <div class="img-box">
                                    <div class="img">
                                      <img class="imagefile" src="assets/images/avatar-7.jpg"/>
                                    </div>
                                    <label class="fileInput">
                                      Upload Offer Image
                                      <input type="file" onChange="singleFiles(event)"/>
                                    </label>
                                  </div>
                                </div>
                              </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Offer Title">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Offer Discount %">
                                </div>
                                <div class="form-group">
                                    <select class="form-control">
                                        <option value="default">Select Region</option>
                                        <option value="v1">Benefit 1</option>
                                        <option value="v2">Benefit 2</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Valid Till">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Coupon Code">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4 full-height">
                        <div class="table-border height-250">
                            <h6 class="text-center">Add Products</h6>
                            <form>
                                <div class="form-group">
                                    <select class="form-control">
                                        <option value="default">Select Category</option>
                                        <option value="v1">Category 1</option>
                                        <option value="v2">Category 2</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control">
                                        <option value="default">Select Sub Category</option>
                                        <option value="v1">Category 1</option>
                                        <option value="v2">Category 2</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Select Product">
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-md-12 text-center mt-20">
                        <button data-dismiss="modal" class="btn btn-primary margin-bottom-10">Add</button>
                    </div>
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