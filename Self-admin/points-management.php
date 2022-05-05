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
                  <h4>Points Management</h4>
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
                  <li class="breadcrumb-item"><a href="points-management.php">Points Management</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="page-body">
          <div class="row">
            <div class="col-lg-7">
              <div class="card">                    
                <div class="card-block">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="general-info">
                        <div class="row">
                          <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Enter Point">
                            </div>
                          </div>
                          <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Enter its Value">
                            </div>
                          </div>                               
                          <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                              <textarea class="form-control" rows="3" id="comment"></textarea>
                            </div>
                          </div>
                          <div class="col-sm-12 col-md-12 col-lg-12 text-center mt-2">
                            <button data-toggle="modal" data-target="" type="button" class="btn btn-primary btn-md m-r-10">Save</button>
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

       