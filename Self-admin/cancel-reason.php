<?php include 'header.php' ?>
<style type="text/css">
  .editable{
    display: none;
  }
  .custom-field{
    font-size: 14px;
    border-radius: 2px;
    border: 1px solid #cccccc;
    width: 100%;
    float: left;
    padding: .3rem .75rem;
    height: 36px;
  }
  .reason-field .btn{
    background: #1aa34e;
    padding: 2px 6px;
    color: #fff;
  }
</style>
<div id="cancelPage"></div>
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
                  <h4>Cancellation Reason</h4>
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
                    <li class="breadcrumb-item"><a href="#">Cancellation Reason</a></li>
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
                <form>
                  <div class="row gutter-xs">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Reason 1</label>
                          <div class="d-flex reason-field">
                            <input type="text" class="form-control editable" placeholder="Reason1">
                            <div class="custom-field">Lorem Ipsum</div>
                            <div>
                              <button type="button" class="ml-2 btn" onClick="editable()"><i class="fa fa-pencil"></i></button>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label>Reason 2</label>
                          <div class="d-flex reason-field">
                            <input type="text" class="form-control editable" placeholder="Reason2">
                            <div class="custom-field">Lorem Ipsum</div>
                            <div>
                              <button type="button" class="ml-2 btn" onClick="editable()"><i class="fa fa-pencil"></i></button>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label>Reason 3</label>
                          <div class="d-flex reason-field">
                            <input type="text" class="form-control editable" placeholder="Reason3">
                            <div class="custom-field">Lorem Ipsum</div>
                            <div>
                              <button type="button" class="ml-2 btn" onClick="editable()"><i class="fa fa-pencil"></i></button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Reason 4</label>
                          <div class="d-flex reason-field">
                            <input type="text" class="form-control editable" placeholder="Reason4">
                            <div class="custom-field">Lorem Ipsum</div>
                            <div>
                              <button type="button" class="ml-2 btn" onClick="editable()"><i class="fa fa-pencil"></i></button>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label>Reason 5</label>
                          <div class="d-flex reason-field">
                            <input type="text" class="form-control editable" placeholder="Reason5">
                            <div class="custom-field">Lorem Ipsum</div>
                            <div>
                              <button type="button" class="ml-2 btn" onClick="editable()"><i class="fa fa-pencil"></i></button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12 text-center mt-20">
                          <button data-dismiss="modal" class="btn btn-primary margin-bottom-10">Save</button>
                      </div>
                  </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> 
<?php include'footer.php' ?>
<script>
  function editable(){
    $('.editable').toggle();
    $('.custom-field').toggle();
  }
</script>