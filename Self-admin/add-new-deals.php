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
                  <h4>Add New Deals</h4>
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
                    <li class="breadcrumb-item"><a href="#">Add New Deals</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="page-body">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-block">
                  <div class="dt-plugin-buttons"></div>
                   <div class="row gutter-xs">
                      <div class="col-md-6">
                          <div class="form-group">
                            <label>Deal Name</label>
                            <input type="email" class="form-control" placeholder="Enter Deal Name">
                          </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Store</label>
                          <select class="form-control" id="sel1">
                            <option>Select Store</option>
                            <option>Lorem Ipsum</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Select Start Date</label>
                          <div class="input-group date" id="datetimepicker1" data-target-input="nearest">
                              <input type="text" class="form-control datetimepicker-input datetimepicker" data-target="#datetimepicker1" name="departure_date"/>
                              <span class="input-group-addon" data-target="#datetimepicker1" data-toggle="datetimepicker">
                                <span class="fa fa-calendar"></span>
                              </span>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Select End Date</label>
                          <div class="input-group date" id="datetimepicker2" data-target-input="nearest">
                              <input type="text" class="form-control datetimepicker-input datetimepicker" data-target="#datetimepicker2" name="departure_date"/>
                              <span class="input-group-addon" data-target="#datetimepicker2" data-toggle="datetimepicker">
                                <span class="fa fa-calendar"></span>
                              </span>
                          </div> 
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <select data-placeholder="Choose Product ..." name="tags[]" multiple class="chosen-select">
                              <option value="Engineering">Engineering</option>
                              <option value="Carpentry">Carpentry</option>
                              <option value="Plumbing">Plumbing</option>
                              <option value="Electical">Electrical</option>
                              <option value="Mechanical">Mechanical</option>
                              <option value="HVAC">HVAC</option>
                            </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group text-right">
                          <button class="btn btn-success">Add</button>
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
<script type="text/javascript">
  $(document).ready(function(){
    $(".chosen-select").chosen();
  });
</script>
  <script type="text/javascript">
   
  $(function () {
  $('.datetimepicker').datetimepicker();
});

</script>
<script type="text/javascript">

//     $(document).ready(function(){
//       $('#datetimepicker1').datetimepicker({
//     defaultDate: new Date(),
//     format: 'DD/MM/YYYY H:mm:ss',
//     sideBySide: true
// });
//     });

</script>