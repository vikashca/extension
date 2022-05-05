<?php include 'header.php' ?>
<style type="text/css">
  .services-slider {
  display: flex;
  max-width: 600px;
}
.slick-list{
  padding: 0 0px !important;
}
.nav-container .slick-current img {
  box-shadow: 0 0 4px 2px rgba(108, 232, 220, 0.9);
}

slider-main {
  width: 100%;
}

.main-container {
  width: 100%;
}

.nav-container img {
  max-height: 135px;
}

.nav-container .slick-slide {
  max-height: 135px;
  margin-bottom: 18px;
}
.view-slider{
  width: 100%;
}
.slider{
  background-color: unset;
}
.main-container .slider img{
  height: 200px;
}
</style>
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
                  <h4>View Order</h4>
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
                    <li class="breadcrumb-item"><a href="#">View Order</a></li>
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
                    <div class="col-sm-6">
                     <h5>Order ID : <strong style="color: #e74c3c">#ORD20200916121</strong></h5>
                    </div>
                    <div class="col-sm-6">
                      <h5 class="text-right">Total Amount: <strong>$234</strong></h5>
                    </div> 
                    <div class="col-md-6 mt-3">
                      <h4 class="text-dark fw-600 fs-18">Clients Details</h4>
                       <p>Name : Lorem Ipsum<br>
                        Address : Lorem ipsum, or lipsum as it is sometimes known, is dummy <br>
                        Contact Number : Lorem Ipsum<br>
                      </p>
                    </div>
                    <div class="col-md-6 mt-3">
                      <h4 class="text-dark fw-600 fs-18">Store Details</h4>
                       <p>Name : Lorem Ipsum<br>
                        Drver Name : Lorem Ipsum<br>
                        Driver Contact Number : Lorem Ipsum</p>
                    </div>
                </div>
                <div class="row gutter-xs view-ordertwo">
                    <div class="col-sm-3">
                      <img src="assets/images/bg2.jpg" style="width: 100%;">
                    </div>
                    <div class="col-sm-7">
                      <a style="color: #2c3e50" href="#">
                          <h4>NUUN - KSA Green Edition with two straps</h4>
                       </a>
                       <p>Stylish waterproof watch from (Nuun) New and patriotic design with KSA logo. It comes with two straps green and black colors and you can replace them easily,</p>
                       <h4>Sold By : Sanjaya Nishad</h4>
                       <ul class="list-inline">
                          <li>Qty : <strong>1</strong></li>
                       </ul>
                    </div> 
                    <div class="col-md-2">
                       <h6 class="text-danger"><del>SAR 1320</del></h6>
                       <h5>SAR 1320</h5>
                    </div>
                    <div class="col-md-9 offset-md-3" style="border-top: 1px solid #dcdcdc;">          
                       <h4 class="pt-2" style="float: left;"><span class="text-success">Pending</span><br><small>Order on  16 Sep 2020 12:10:10 PM</small></h4>    
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
 