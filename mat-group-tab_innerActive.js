var x = 1;
    $(document).on('click', '.main_tab #mat-tab-label-0-1', function(){
      if(x == 1){
          $(".innerTab .mat-ink-bar").css({"visibility": "visible", "left": "0", "width":"160px", "background-color":"#00a98f", "font-size":"200%"});
      }else if(x == 2){
        return false;
      }
      x = 2;
    })