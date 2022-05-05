<?php include 'header.php' ?>
<div id="profilePage"></div>
<div class="pcoded-content">
  <div class="pcoded-inner-content">
    <div class="main-body user-profile">
      <div class="page-wrapper">
        <div class="page-header card">
          <div class="row align-items-end">
            <div class="col-sm-6 col-lg-6">
              <div class="page-header-title d-flex">
                <i class="ti-user bg-danger"></i>
                <div class="d-inline">
                  <h4>Edit Profile</h4>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-6">
              <div class="page-header-breadcrumb">
                <ul class="breadcrumb-title">
                  <li class="breadcrumb-item">
                    <a href="dashboard.php">
                      <i class="icofont icofont-home"></i>
                    </a>
                  </li>
                  <li class="breadcrumb-item"><a href="profile.php">Profile</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="page-body">
          <div class="row">
            <div class="col-lg-12">
              <div class="card">                    
                <div class="card-block">
                  <div class="card-header p-0 mb-3">
                    <h5 class="card-header-text">Edit Profile</h5>
                  </div>
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="general-info">
                        <div class="row">
                          <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="icofont icofont-user"></i></span>
                              <input type="text" class="form-control" placeholder="Full Name" />
                            </div>
                          </div>
                          <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="icofont icofont-envelope"></i></span>
                              <input type="email" class="form-control" placeholder="Email Id" />
                            </div>
                          </div>                                
                          <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="icofont icofont-mobile-phone"></i></span>
                              <input type="text" class="form-control" placeholder="Mobile Number" />
                            </div>
                          </div>
                          <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="icofont icofont-location-pin"></i></span>
                              <input type="text" class="form-control" placeholder="Region" />
                            </div>
                          </div>
                          <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="icofont icofont-image"></i></span>
                              <label class="form-control file">
                                <span>Choose Image</span>
                                <input type="file" class="form-control" id="chooseImage"/>
                                <img src="assets/images/user-profile/user-img.jpg" alt="user-img" id="imageFile"/>
                              </label>
                            </div>
                          </div>                               
                          <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="icofont icofont-address-book"></i></span>
                              <input type="text" class="form-control" placeholder="Address"/>
                            </div>
                          </div>
                          <div class="col-sm-12 col-md-12 col-lg-12 text-center mt-2">
                            <button data-toggle="modal" data-target="#profile-success-modal" type="button" class="btn btn-primary btn-md m-r-10">Save</button>
                            <a href="profile.php" class="btn btn-danger btn-md">Cancel</a>
                          </div>
                        </div>                              
                      </div>
                    </div>
                  </div>
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

<!-- success modal -->
<div id="success-modal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm" data-dismiss="modal">
    <div class="modal-body text-center">
      <i class="text-success fs-34 d-inline-block icofont icofont-check-circled mb-4"></i>
      <h6>Saved Successfully</h6>
    </div>
  </div>
</div>         