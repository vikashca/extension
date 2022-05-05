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
                  <h4>Add Sub Admin</h4>
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
                    <li class="breadcrumb-item"><a href="#">Add Sub Admin</a></li>
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
                    <div class="col-sm-9 text-left">
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
                    <div class="col-md-6">
                        <form>
                            <div class="form-group">
                                <input type="text" placeholder="Enter Sub-Admin Name" class="form-control">
                            </div>
                            <div class="form-group">
                              <select class="form-control" id="sel1">
                                <option>Select Store</option>
                                <option>Lorem Ipsum</option>
                              </select>
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Enter Sub-Admin Contact No." class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="email" placeholder="Enter Sub-Admin Email ID" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Enter Sub-Admin ID" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="password" placeholder="Enter Sub-Admin Password" class="form-control">
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-4 text-center">
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
                    <div class="col-md-5">
                        <h6>Features :</h6>
                        <div class="table-responsive">
                            <table class="view-table">
                                <tr>
                                    <td class="fw-600">Dashboard</td>
                                    <td class="text-danger fw-600"><i class="fa fa-trash-o"></i></td>
                                </tr>
                                <tr>
                                    <td class="fw-600">User Mgt</td>
                                    <td class="text-danger fw-600"><i class="fa fa-trash-o"></i></td>
                                </tr>
                                <tr>
                                    <td class="fw-600">Payment Mgt</td>
                                    <td class="text-danger fw-600"><i class="fa fa-trash-o"></i></td>
                                </tr>
                                <tr>
                                    <td class="fw-600">Order Mgt</td>
                                    <td class="text-danger fw-600"><i class="fa fa-trash-o"></i></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <h6>Add Features :</h6>
                        <div class="form-group">
                         <!--  <div id="output"></div> -->
                            <select data-placeholder="Choose tags ..." name="tags[]" multiple class="chosen-select">
                              <option value="Engineering">Engineering</option>
                              <option value="Carpentry">Carpentry</option>
                              <option value="Plumbing">Plumbing</option>
                              <option value="Electical">Electrical</option>
                              <option value="Mechanical">Mechanical</option>
                              <option value="HVAC">HVAC</option>
                            </select>
                        </div>
                        <!-- <select class="js-select2" multiple="multiple">
                          <option value="O1" data-badge="">Option1</option>
                          <option value="O2" data-badge="">Option2</option>
                          <option value="O3" data-badge="">Option3</option>
                          <option value="O4" data-badge="">Option4</option>
                          <option value="O5" data-badge="">Option5</option>
                          <option value="O6" data-badge="">Option6</option>
                        </select> -->
                    </div>
                    <div class="col-md-12 text-center mt-30">
                        <button type="button" data-dismiss="modal" class="btn btn-primary margin-bottom-10">Add</button>
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
  $(document).ready(function(){
    $(".chosen-select").chosen();
  });
</script>