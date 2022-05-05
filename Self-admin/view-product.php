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
                  <h4>View Product</h4>
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
                    <li class="breadcrumb-item"><a href="#">View Product</a></li>
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
                    <div class="col-md-7">
                        <div class="">
                            <div class="table-responsive">
                                <table class="view-table">
                                    <tr>
                                        <td class="fw-600"><strong>Product Name</strong>:</td>
                                        <td>Lorem Ipsum</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-600"><strong>Product Number</strong>:</td>
                                        <td>Lorem Ipsum</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-600"><strong>Product Price</strong>:</td>
                                        <td>Lorem Ipsum</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-600"><strong>Product Benefits</strong>:</td>
                                        <td>Lorem Ipsum is simply dummy text of the printing and <br> typesetting industry.
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5 text-left">
                      <div class="services-slider">
                        <div class="row view-slider">
                        <div class="col-sm-3">
                        <div class="nav-container">
                          <div class="slider-nav">
                            <div>
                              <img src="assets/images/bg2.jpg">
                            </div>
                            <div>
                              <img src="assets/images/bg1.jpg">
                            </div>
                            <div>
                              <img src="assets/images/bg2.jpg">
                            </div>
                            <div>
                              <img src="assets/images/bg1.jpg">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-9">
                       <div class="main-container">
                          <div class="slider slider-main">
                            <div>
                              <img src="assets/images/bg2.jpg">
                            </div>
                            <div>
                              <img src="assets/images/bg1.jpg">
                            </div>
                            <div>
                              <img src="assets/images/bg2.jpg">
                            </div>
                            <div>
                              <img src="assets/images/bg1.jpg">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                         <!----slider-section--->
                        <!-- <div id="myCarousel" class="carousel slide product-slider" data-ride="carousel">
                            <div class="">
                                <div class="row">
                                    <div class="col-md-3">
                                        <ul class="nav nav-pills nav-justified view-product-tabs">
                                            <li data-target="#myCarousel" data-slide-to="0" class="active mb-10"><a href="#"><img src="assets/images/bg1.jpg"></a></li>
                                            <li data-target="#myCarousel" data-slide-to="1" class="mb-10"><a href="#"><img src="assets/images/bg2.jpg"></a></li>
                                            <li data-target="#myCarousel" data-slide-to="2" class="mb-10"><a href="#"><img src="assets/images/bg1.jpg"></a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="carousel-inner view-product-img">
                                            <div class="item active">
                                                <img src="assets/images/bg1.jpg">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!----slider-section--->
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
  $('.slider-main').slick({
  slidesToShow: 1,
  arrows: false,
  asNavFor: '.slider-nav',
  vertical: true,
  autoplay: true,
  verticalSwiping: true,
  centerMode: true
});

$('.slider-nav').slick({
  slidesToShow: 4,
  asNavFor: '.slider-main',
  vertical: true,
  focusOnSelect: true,
  autoplay: false,
  centerMode: true
});

$(window).on('resize orientationchange', function() {
  if ($(window).width() > 1200) {
    $('.slider-nav').slick('unslick');
    $('.slider-nav').slick({
      slidesToShow: 4,
      asNavFor: '.slider-main',
      vertical: true,
      focusOnSelect: true,
      autoplay: false,
      centerMode: true
    });
  }
});
</script>