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
                  <h4>Add Coupon</h4>
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
                  <li class="breadcrumb-item"><a href="points-management.php">Add Coupon</a></li>
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
                  <form>
                  <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group row">
                            <label class="control-label col-sm-3">Start Date</label>
                            <div class="col-sm-9 col-md-9">
                            <input type="text" class="form-control mr-3 datepicker" id="start_date" autocomplete="off"/ placeholder="Select Start Date">
                            <div class="calender-iconcoupon">
                              <i class="fa fa-calendar mt-2 fs-18"></i>
                            </div>
                          </div>
                        </div> 
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group row">
                            <label class="control-label col-sm-3">End Date</label>
                            <div class="col-sm-9 col-md-9">
                            <input type="text" class="form-control mr-3 datepicker" id="end_date" autocomplete="off"/ placeholder="Select End Date">
                            <div class="calender-iconcoupon">
                              <i class="fa fa-calendar mt-2 fs-18"></i>
                            </div>
                          </div>
                        </div> 
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group row">
                           <label class="control-label col-sm-3" for="fname">Promo Code</label>
                           <div class="col-sm-9 col-md-9">
                            <select name="status" class="form-control" required="">
                              <option value="1">Active</option> 
                              <option value="0">Inactive</option> 
                            </select>
                           </div>
                        </div>  
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group row">
                          <div class="col-md-4">
                            <label class="control-label">Amount Type</label><br>
                            <label class="custom-control custom-control-primary custom-radio">
                              <input class="custom-control-input disc_type" type="radio" required="" name="amount_type" value="1">
                              <span class="custom-control-indicator"></span>
                              <span class="custom-control-label">%</span>
                            </label>
                            <label class="custom-control custom-control-primary custom-radio">
                              <input class="custom-control-input disc_type" type="radio" name="amount_type" value="2" required="" checked="checked">
                              <span class="custom-control-indicator"></span>
                              <span class="custom-control-label"><i class="fa fa-inr"></i></span>
                            </label>
                          </div>
                          <div class="col-md-4">
                            <label class="control-label">Discount in Value</label>
                            <input id="password-1" class="form-control" min="1" required="" type="number" name="discount_value">
                          </div>
                          <div class="col-md-4">
                            <label class="control-label">Discount (for %)</label>
                            <input class="form-control" type="number" min="1" id="max_amount" name="discount_percentage" required="" disabled="">
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group row">
                           <label class="control-label col-sm-3" for="fname">Description</label>
                           <div class="col-sm-9 col-md-9">
                            <textarea class="form-control" rows="3" id="comment"></textarea>
                           </div>
                        </div>  
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group row">
                          <div class="col-md-4">
                            <label class="control-label">Min cart Value</label>
                            <input id="password-1" class="form-control" min="1" type="number" name="minimum_cartValue" required="">
                          </div>
                          <div class="col-md-4">
                            <label class="control-label">Max Discount</label>
                            <input class="form-control" type="number" required="" min="1" id="max_amount" name="maximum_discount">
                          </div>
                          <div class="col-md-4">
                            <label class="control-label">No. of Uses Per User</label>
                            <input class="form-control" type="number" min="1" max="5" id="no_ofUses" name="noOfUses" required="">
                          </div>                                            
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group row">
                           <label class="control-label col-sm-3" for="fname">Coupon Code</label>
                           <div class="col-sm-9 col-md-9">
                            <input type="text" name="" class="form-control">
                           </div>
                        </div>  
                      </div>
                    <div class="col-lg-6 text-right mt-2">
                      <button data-toggle="modal" data-target="" type="button" class="btn btn-primary btn-md m-r-10">Submit</button>
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
  </div>
</div>
<?php include'footer.php' ?>
<script type="text/javascript">
  $(document).ready(function(){
   $('.disc_type').click(function(){
    if ($(this).is(':checked'))
    {
      if ($(this).val()==1){
        $('#max_amount').prop("disabled",false);
        $('#password-1').prop('disabled',true);
        $('#password-1').val('');
        console.log('f') 
      }else{
        $('#password-1').prop('disabled',false);
        $('#max_amount').prop("disabled",true);
        $('#max_amount').val('')
        console.log('t')
      }
    }
  });
 });
</script>
       