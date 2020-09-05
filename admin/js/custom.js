(function ($) {
     $(document).ready(function(){
          $(document).on('click','#add_user_btn', function(){
               $('#add_user_modal').modal('show');
               return false;
          });
     });
})(jQuery)