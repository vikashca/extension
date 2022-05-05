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
                  <h4>Profile</h4>
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
              <div class="cover-profile">
                <div class="profile-bg-img">
                  <img class="profile-bg-img img-fluid" src="assets/images/user-profile/bg-img1.jpg" alt="bg-img" />
                  <div class="card-block user-info">
                    <div class="row">
                      <div class="col-md-12 col-lg-2 col-xl-2">
                        <a href="profile.php"class="profile-image">
                          <img class="user-img img-radius" src="assets/images/user-profile/user-img.jpg" alt="user-img" id="imageFile"/>
                        </a>
                      </div>
                      <div class="col-md-12 col-lg-3 col-xl-4">
                        <div class="user-title">
                          <h2>Admin Name</h2>
                        </div>
                      </div>
                      <div class="col-md-12 col-lg-7 col-xl-6">
                        <div class="cover-btn">
                          <button type="button" class="btn btn-primary" data-target="#change-password" data-toggle="modal"><i class="icofont icofont-lock"></i> Change Password</button>
                          <a href="edit-profile.php" class="btn btn-success"><i class="icofont icofont-edit"></i> Edit Profile</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="card">                    
                <div class="card-block">
                  <div class="row">
                    <div class="col-lg-12 col-xl-6">
                      <div class="table-responsive">
                        <table class="table m-0">
                          <tbody>
                            <tr>
                              <th scope="row">Admin Name</th>
                              <td>Josephine Villa</td>
                            </tr>
                            <tr>
                              <th scope="row">Email</th>
                              <td>demo@gmail.com</td>
                            </tr>
                            <tr>
                              <th scope="row">Mobile Number</th>
                              <td>(0123) - 4567891</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="col-lg-12 col-xl-6">
                      <div class="table-responsive">
                        <table class="table">
                          <tbody>
                            <tr>
                              <th scope="row">Region</th>
                              <td>New York, USA</td>
                            </tr>
                            <tr>
                              <th scope="row">Address</th>
                              <td>C-52, Sector 63, Noida</td>
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
      </div>
    </div>
  </div>
</div>
<?php include'footer.php' ?>
<!-- success modal -->
<div id="change-password" class="modal fade">
  <div class="modal-dialog modal-md">
    <div class="modal-body">
      <div class="modal-header p-0 mb-3">
        <h5 class="modal-title text-primary">Change Password</h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <form action="#" class="general-info">
        <div class="input-group">
          <span class="input-group-addon"><i class="icofont icofont-lock"></i></span>
          <input type="password" class="form-control" value="" placeholder="Old Password" />
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icofont icofont-lock"></i></span>
          <input type="password" class="form-control" value="" placeholder="New Password" />
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icofont icofont-lock"></i></span>
          <input type="password" class="form-control" value="" placeholder="Confirm Password" />
        </div>
        <div class="text-center mt-2">
          <button data-toggle="modal" data-target="#success-modal" type="button" class="btn btn-sm btn-primary m-r-20 edit-cancel">Save</button>
          <button type="button" class="btn btn-sm btn-default waves-effect edit-cancel" data-dismiss="modal">Cancel</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- success modal -->
<div id="success-modal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm" data-dismiss="modal">
    <div class="modal-body text-center">
      <i class="text-success fs-34 d-inline-block icofont icofont-check-circled mb-4"></i>
      <h6>Saved Successfully</h6>
    </div>
  </div>
</div>           
<script type="text/javascript">
  $('.edit-info, .change-pass').hide();
  $('#edit-btn').on('click',function(){ 
    $('.view-info').hide();
    $('.edit-info').show(); 
    $('.change-pass').hide();
    $('#change-pass-btn').show();
    $(this).hide();  
  });
  $('.edit-info .edit-cancel').click(function(){
    $('.view-info').show();
    $('.edit-info').hide();
    $('#edit-btn').show();
  });
  $('#change-pass-btn').click(function(){
    $('.view-info').hide();
    $('.edit-info').hide();
    $('.change-pass').show(); 
    $('#edit-btn').show(); 
    $(this).hide();
  });
  $('.change-pass .edit-cancel').click(function(){
    $('.view-info').show();
    $('.change-pass').hide();
    $('#change-pass-btn').show();
  });
</script>