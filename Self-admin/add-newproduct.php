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
                  <h4>Add New Product</h4>
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
                    <li class="breadcrumb-item"><a href="#">Add New Product</a></li>
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
                    <div class="col-md-4 m-auto">
                       <h6 class="">Select Product Category & Sub Category</h6>
                        <div class="form-group mt-2">
                            <select class="form-control">
                                <option value="default">Select Category</option>
                                <option value="v1">Category 1</option>
                                <option value="v2">Category 2</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control">
                                <option value="default">Select Sub-Category</option>
                                <option value="v1">Category 1</option>
                                <option value="v2">Category 2</option>
                            </select>
                        </div>
                    </div>
                  </div>
                <div class="row gutter-xs mt-20">
                    <div class="col-md-6 m-auto">
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
                        <div class="table-border">
                            <form>
                                <div class="controls clearfix">
                                  <label class="filesupload">
                                    <input type="file" name="pictures" id="multiImageSelet" multiple="">
                                    <i class="fa fa-upload text-primary mr-2"></i> Upload Pictures
                                  </label>
                                  <ul class="pictures">

                                  </ul>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6 full-height">
                        <div class="table-border height-250">
                            <h6 class="text-center">Add Product Details</h6>
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter Product Name">
                                </div>
                                <div class="form-group">
                                  <div class="row m-0">
                                    <input type="text" class="form-control col-sm-10" placeholder="Enter Product Price">
                                    <select class="form-control col-sm-2">
                                        <option value="default">Lo</option>
                                        <option value="v1">Lorem</option>
                                    </select>
                                  </div>
                                </div>
                                 <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter Unique Product Number">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Enter Product Description"></textarea>
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