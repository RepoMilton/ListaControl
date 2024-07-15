$(function() {
  // Sidebar toggle behavior

  $('#sidebarCollapse').on('click', function() {
      if($(window).width()<=600){
         if($('#sidebar, #content').hasClass('active')){
      $('#sidebar, #content').removeClass('active');
      $('#home').html('<i class="fas fa-home mr-3 text-primary fa-fw" target="myFrame"></i>');
    $('#profile').html('<i class="fas fa-user mr-3 text-primary fa-fw"></i>');
    $('#assignments').html('<i class="fas fa-book mr-3 text-primary fa-fw"></i>');
    $('#assistance').html('<i class="fas fa-address-card mr-3 text-primary fa-fw"></i>');
    $('#score').html('<i class="fas fa-list-ol mr-3 text-primary fa-fw"></i>');
    $('#contact').html('<i class="fas fa-address-book mr-3 text-primary fa-fw"></i>');
    $('#reports').html('<i class="fas fa-file-invoice mr-3 text-primary fa-fw"></i>');
    $('#settings').html('<i class="fas fa-user-cog mr-3 text-primary fa-fw"></i>');
    $('#areag').html('<i class="fa fa-area-chart mr-3 text-primary fa-fw"></i>');
    $('#barg').html('<i class="fa fa-bar-chart mr-3 text-primary fa-fw"></i>');
    $('#pieg').html('<i class="fa fa-pie-chart mr-3 text-primary fa-fw"></i>');
    $('#lineg').html('<i class="fa fa-line-chart mr-3 text-primary fa-fw"></i>');
    $('#logout').html('<i class="far fa-arrow-alt-circle-left mr-3 text-primary fa-fw"></i>');
    $('.media').html(`<img src="https://i0.pngocean.com/files/646/234/563/computer-icons-user-clip-art-sign-up-button.jpg" alt="..." width="65" class="mr-3 rounded-circle img-thumbnail shadow-sm">`);
    $('.media').css('margin-left','80%');
    $('.media').css('margin-top','10%');
    $('.text-gray').css('display','none');
    $('.vertical-nav').attr('style',`min-width: 80px !important;
  width: 30%;

  height: 100vh;
  position: fixed;
  top: 0;
  left: 0;
  box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.1);
  transition: all 0.4s;
  overflow-y: auto;
  overflow-x:hidden;`);
    //$('.vertical-nav').css('min-width','15%');
    $('.vertical-nav').css('width','15%');
    $('.page-content').css('min-width','85%');
    $('.page-content').css('width','85%');
    $('a').addClass('rightcontext');
    $('.page-content').css('margin-left','13%');
    $('#sidebarCollapse').addClass('rightcontext');
    $('#sidebarCollapse').css('display','block');
    

    }else{
      $('#sidebar, #content').addClass('active');
      $('#home').html('<i class="fas fa-home mr-3 text-primary fa-fw" target="myFrame"></i>Home');
    $('#profile').html('<i class="fas fa-user mr-3 text-primary fa-fw"></i>Profile');
    $('#assignments').html('<i class="fas fa-book mr-3 text-primary fa-fw"></i>Assignments');
    $('#assistance').html('<i class="fas fa-address-card mr-3 text-primary fa-fw"></i>Assistance');
    $('#score').html('<i class="fas fa-list-ol mr-3 text-primary fa-fw"></i>Score');
    $('#contact').html('<i class="fas fa-address-book mr-3 text-primary fa-fw"></i>Contact');
    $('#reports').html('<i class="fas fa-file-invoice mr-3 text-primary fa-fw"></i>Reports');
    $('#settings').html('<i class="fas fa-user-cog mr-3 text-primary fa-fw"></i>Settings');
    $('#areag').html('<i class="fa fa-area-chart mr-3 text-primary fa-fw"></i>Area Graphic');
    $('#barg').html('<i class="fa fa-bar-chart mr-3 text-primary fa-fw"></i>Bar Graphic');
    $('#pieg').html('<i class="fa fa-pie-chart mr-3 text-primary fa-fw"></i>Pie Graphic');
    $('#lineg').html('<i class="fa fa-line-chart mr-3 text-primary fa-fw"></i>Line Graphic');
    $('#logout').html('<i class="far fa-arrow-alt-circle-left mr-3 text-primary fa-fw"></i>Logout');
    $('.media').html(`<img src="https://i0.pngocean.com/files/646/234/563/computer-icons-user-clip-art-sign-up-button.jpg" alt="..." width="65" class="mr-3 rounded-circle img-thumbnail shadow-sm"><div class="media-body">
        <h4 class="m-0">Juan Sanchez</h4>
        <p class="font-weight-light text-muted mb-0">Docente</p>
      </div>`);
    $('.media').css('margin-left','0');
    $('.media').css('margin-top','0');
    $('.text-gray').css('display','block');
    $('a').removeClass('rightcontext');
    $('.vertical-nav').attr('style',`min-width: 160px !important;
  width: 30%;

  height: 100vh;
  position: fixed;
  top: 0;
  left: 0;
  box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.1);
  transition: all 0.4s;
  overflow-y: auto;
  overflow-x:hidden;`);
    //$('.vertical-nav').css('min-width','50%');
    $('.vertical-nav').css('width','50%');
    $('.page-content').css('min-width','50%');
    $('.page-content').css('width','50%');
    $('.page-content').css('margin-left','48%');
    $('#sidebarCollapse').removeClass('rightcontext');
   
    }

  }else{
    if($('#sidebar, #content').hasClass('active')){
      $('#sidebar, #content').removeClass('active');
      $('#home').html('<i class="fas fa-home mr-3 text-primary fa-fw" target="myFrame"></i>');
    $('#profile').html('<i class="fas fa-user mr-3 text-primary fa-fw"></i>');
    $('#assignments').html('<i class="fas fa-book mr-3 text-primary fa-fw"></i>');
    $('#assistance').html('<i class="fas fa-address-card mr-3 text-primary fa-fw"></i>');
    $('#score').html('<i class="fas fa-list-ol mr-3 text-primary fa-fw"></i>');
    $('#contact').html('<i class="fas fa-address-book mr-3 text-primary fa-fw"></i>');
    $('#reports').html('<i class="fas fa-file-invoice mr-3 text-primary fa-fw"></i>');
    $('#settings').html('<i class="fas fa-user-cog mr-3 text-primary fa-fw"></i>');
    $('#areag').html('<i class="fa fa-area-chart mr-3 text-primary fa-fw"></i>');
    $('#barg').html('<i class="fa fa-bar-chart mr-3 text-primary fa-fw"></i>');
    $('#pieg').html('<i class="fa fa-pie-chart mr-3 text-primary fa-fw"></i>');
    $('#lineg').html('<i class="fa fa-line-chart mr-3 text-primary fa-fw"></i>');
    $('#logout').html('<i class="far fa-arrow-alt-circle-left mr-3 text-primary fa-fw"></i>');
    $('.media').html(`<img src="https://i0.pngocean.com/files/646/234/563/computer-icons-user-clip-art-sign-up-button.jpg" alt="..." width="65" class="mr-3 rounded-circle img-thumbnail shadow-sm">`);
    $('.media').css('margin-left','80%');
    $('.media').css('margin-top','10%');
    $('.text-gray').css('display','none');
    $('.vertical-nav').css('min-width','10%');
    $('.vertical-nav').css('width','10%');
    $('.page-content').css('min-width','90%');
    $('.page-content').css('width','90%');
    
    $('a').addClass('rightcontext');
    $('#sidebarCollapse').addClass('rightcontext');
    $('#sidebarCollapse').css('display','block');
    $('.page-content').css('margin-left','8%');

    }else{
      $('#sidebar, #content').addClass('active');
      $('#home').html('<i class="fas fa-home mr-3 text-primary fa-fw" target="myFrame"></i>Home');
    $('#profile').html('<i class="fas fa-user mr-3 text-primary fa-fw"></i>Profile');
    $('#assignments').html('<i class="fas fa-book mr-3 text-primary fa-fw"></i>Assignments');
    $('#assistance').html('<i class="fas fa-address-card mr-3 text-primary fa-fw"></i>Assistance');
    $('#score').html('<i class="fas fa-list-ol mr-3 text-primary fa-fw"></i>Score');
    $('#contact').html('<i class="fas fa-address-book mr-3 text-primary fa-fw"></i>Contact');
    $('#reports').html('<i class="fas fa-file-invoice mr-3 text-primary fa-fw"></i>Reports');
    $('#settings').html('<i class="fas fa-user-cog mr-3 text-primary fa-fw"></i>Settings');
    $('#areag').html('<i class="fa fa-area-chart mr-3 text-primary fa-fw"></i>Area Graphic');
    $('#barg').html('<i class="fa fa-bar-chart mr-3 text-primary fa-fw"></i>Bar Graphic');
    $('#pieg').html('<i class="fa fa-pie-chart mr-3 text-primary fa-fw"></i>Pie Graphic');
    $('#lineg').html('<i class="fa fa-line-chart mr-3 text-primary fa-fw"></i>Line Graphic');
    $('#logout').html('<i class="far fa-arrow-alt-circle-left mr-3 text-primary fa-fw"></i>Logout');
    $('.media').html(`<img src="https://i0.pngocean.com/files/646/234/563/computer-icons-user-clip-art-sign-up-button.jpg" alt="..." width="65" class="mr-3 rounded-circle img-thumbnail shadow-sm"><div class="media-body">
        <h4 class="m-0">Juan Sanchez</h4>
        <p class="font-weight-light text-muted mb-0">Docente</p>
      </div>`);
    $('.media').css('margin-left','0');
    $('.media').css('margin-top','0');
    $('.text-gray').css('display','block');
    $('a').removeClass('rightcontext');
    $('.vertical-nav').css('min-width','30%');
    $('.vertical-nav').css('width','30%');
    $('.page-content').css('min-width','70%');
    $('.page-content').css('width','70%');
    $('.page-content').css('margin-left','28%');
    $('#sidebarCollapse').removeClass('rightcontext');
   
    }
  }
   
    
    
  });
  $(window).resize(function () 
       {
   
           clearTimeout(resizeTimer);
           //resizeTimer = setTimeout(Resized, 0);
       });
       function Resized(){
         if($(window).width()<=500){
 if($('#sidebar, #content').hasClass('active')){

      $('#home').html('<i class="fas fa-home mr-3 text-primary fa-fw" target="myFrame"></i>');
    $('#profile').html('<i class="fas fa-user mr-3 text-primary fa-fw"></i>');
    $('#assignments').html('<i class="fas fa-book mr-3 text-primary fa-fw"></i>');
    $('#assistance').html('<i class="fas fa-address-card mr-3 text-primary fa-fw"></i>');
    $('#score').html('<i class="fas fa-list-ol mr-3 text-primary fa-fw"></i>');
    $('#contact').html('<i class="fas fa-address-book mr-3 text-primary fa-fw"></i>');
    $('#reports').html('<i class="fas fa-file-invoice mr-3 text-primary fa-fw"></i>');
    $('#settings').html('<i class="fas fa-user-cog mr-3 text-primary fa-fw"></i>');
    $('#areag').html('<i class="fa fa-area-chart mr-3 text-primary fa-fw"></i>');
    $('#barg').html('<i class="fa fa-bar-chart mr-3 text-primary fa-fw"></i>');
    $('#pieg').html('<i class="fa fa-pie-chart mr-3 text-primary fa-fw"></i>');
    $('#lineg').html('<i class="fa fa-line-chart mr-3 text-primary fa-fw"></i>');
    $('.media').html(`<img src="https://i0.pngocean.com/files/646/234/563/computer-icons-user-clip-art-sign-up-button.jpg" alt="..." width="65" class="mr-3 rounded-circle img-thumbnail shadow-sm">`);
    $('.media').css('margin-left','80%');
    $('.media').css('margin-top','10%');
    $('.text-gray').css('display','none');
    $('.vertical-nav').css('min-width','5rem');
    $('.vertical-nav').css('width','5rem');
    $('a').addClass('rightcontext');
    $('#sidebarCollapse').addClass('rightcontext');
    $('#sidebarCollapse').css('display','block');
    }else{

      $('#home').html('<i class="fas fa-home mr-3 text-primary fa-fw" target="myFrame"></i>Home');
    $('#profile').html('<i class="fas fa-user mr-3 text-primary fa-fw"></i>Profile');
    $('#assignments').html('<i class="fas fa-book mr-3 text-primary fa-fw"></i>Assignments');
    $('#assistance').html('<i class="fas fa-address-card mr-3 text-primary fa-fw"></i>Assistance');
    $('#score').html('<i class="fas fa-list-ol mr-3 text-primary fa-fw"></i>Score');
    $('#contact').html('<i class="fas fa-address-book mr-3 text-primary fa-fw"></i>Contact');
    $('#reports').html('<i class="fas fa-file-invoice mr-3 text-primary fa-fw"></i>Reports');
    $('#settings').html('<i class="fas fa-user-cog mr-3 text-primary fa-fw"></i>Settings');
    $('#areag').html('<i class="fa fa-area-chart mr-3 text-primary fa-fw"></i>Area Graphic');
    $('#barg').html('<i class="fa fa-bar-chart mr-3 text-primary fa-fw"></i>Bar Graphic');
    $('#pieg').html('<i class="fa fa-pie-chart mr-3 text-primary fa-fw"></i>Pie Graphic');
    $('#lineg').html('<i class="fa fa-line-chart mr-3 text-primary fa-fw"></i>Line Graphic');
    $('.media').html(`<img src="https://i0.pngocean.com/files/646/234/563/computer-icons-user-clip-art-sign-up-button.jpg" alt="..." width="65" class="mr-3 rounded-circle img-thumbnail shadow-sm"><div class="media-body">
        <h4 class="m-0">Juan Sanchez</h4>
        <p class="font-weight-light text-muted mb-0">Docente</p>
      </div>`);
    $('.media').css('margin-left','0');
    $('.media').css('margin-top','0');
    $('.text-gray').css('display','block');
    $('a').removeClass('rightcontext');
    $('.vertical-nav').css('min-width','12rem');
    $('.vertical-nav').css('width','12rem');
    $('#sidebarCollapse').removeClass('rightcontext');
   
    }
     
}else{
  $('#sidebar, #content').addClass('active');
      $('#home').html('<i class="fas fa-home mr-3 text-primary fa-fw" target="myFrame"></i>Home');
    $('#profile').html('<i class="fas fa-user mr-3 text-primary fa-fw"></i>Profile');
    $('#assignments').html('<i class="fas fa-book mr-3 text-primary fa-fw"></i>Assignments');
    $('#assistance').html('<i class="fas fa-address-card mr-3 text-primary fa-fw"></i>Assistance');
    $('#score').html('<i class="fas fa-list-ol mr-3 text-primary fa-fw"></i>Score');
    $('#contact').html('<i class="fas fa-address-book mr-3 text-primary fa-fw"></i>Contact');
    $('#reports').html('<i class="fas fa-file-invoice mr-3 text-primary fa-fw"></i>Reports');
    $('#settings').html('<i class="fas fa-user-cog mr-3 text-primary fa-fw"></i>Settings');
    $('#areag').html('<i class="fa fa-area-chart mr-3 text-primary fa-fw"></i>Area Graphic');
    $('#barg').html('<i class="fa fa-bar-chart mr-3 text-primary fa-fw"></i>Bar Graphic');
    $('#pieg').html('<i class="fa fa-pie-chart mr-3 text-primary fa-fw"></i>Pie Graphic');
    $('#lineg').html('<i class="fa fa-line-chart mr-3 text-primary fa-fw"></i>Line Graphic');
    $('.media').html(`<img src="https://i0.pngocean.com/files/646/234/563/computer-icons-user-clip-art-sign-up-button.jpg" alt="..." width="65" class="mr-3 rounded-circle img-thumbnail shadow-sm"><div class="media-body">
        <h4 class="m-0">Juan Sanchez</h4>
        <p class="font-weight-light text-muted mb-0">Docente</p>
      </div>`);
    $('.media').css('margin-left','0');
    $('.media').css('margin-top','0');
    $('.text-gray').css('display','block');
    $('a').removeClass('rightcontext');
    $('.vertical-nav').css('min-width','12rem');
    $('.vertical-nav').css('width','12rem');
    $('#sidebarCollapse').removeClass('rightcontext');
}
       }
if($(window).width()<=500){

     $('#sidebar, #content').addClass('active');
      $('#home').html('<i class="fas fa-home mr-3 text-primary fa-fw" target="myFrame"></i>Home');
    $('#profile').html('<i class="fas fa-user mr-3 text-primary fa-fw"></i>Profile');
    $('#assignments').html('<i class="fas fa-book mr-3 text-primary fa-fw"></i>Assignments');
    $('#assistance').html('<i class="fas fa-address-card mr-3 text-primary fa-fw"></i>Assistance');
    $('#score').html('<i class="fas fa-list-ol mr-3 text-primary fa-fw"></i>Score');
    $('#contact').html('<i class="fas fa-address-book mr-3 text-primary fa-fw"></i>Contact');
    $('#reports').html('<i class="fas fa-file-invoice mr-3 text-primary fa-fw"></i>Reports');
    $('#settings').html('<i class="fas fa-user-cog mr-3 text-primary fa-fw"></i>Settings');
    $('#areag').html('<i class="fa fa-area-chart mr-3 text-primary fa-fw"></i>Area Graphic');
    $('#barg').html('<i class="fa fa-bar-chart mr-3 text-primary fa-fw"></i>Bar Graphic');
    $('#pieg').html('<i class="fa fa-pie-chart mr-3 text-primary fa-fw"></i>Pie Graphic');
    $('#lineg').html('<i class="fa fa-line-chart mr-3 text-primary fa-fw"></i>Line Graphic');
    $('#logout').html('<i class="far fa-arrow-alt-circle-left mr-3 text-primary fa-fw"></i>Logout');
    $('.media').html(`<img src="https://i0.pngocean.com/files/646/234/563/computer-icons-user-clip-art-sign-up-button.jpg" alt="..." width="65" class="mr-3 rounded-circle img-thumbnail shadow-sm"><div class="media-body">
        <h4 class="m-0">Juan Sanchez</h4>
        <p class="font-weight-light text-muted mb-0">Docente</p>
      </div>`);
    $('.media').css('margin-left','0');
    $('.media').css('margin-top','0');
    $('.text-gray').css('display','block');
    $('a').removeClass('rightcontext');
    $('.vertical-nav').attr('style',`min-width: 160px !important;
  width: 30%;

  height: 100vh;
  position: fixed;
  top: 0;
  left: 0;
  box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.1);
  transition: all 0.4s;
  overflow-y: auto;
  overflow-x:hidden;`);
    //$('.vertical-nav').css('min-width','50%');
    $('.vertical-nav').css('width','50%');
    $('.page-content').css('min-width','50%');
    $('.page-content').css('width','50%');
    $('.page-content').css('margin-left','48%');
    $('#sidebarCollapse').removeClass('rightcontext');
}

  
    var component;
  $('.nav-link').on('mouseenter',function(){
    $(this).addClass('bg-light');
    if(this!=component){
        $(this).on('mouseout',function(){
     $(this).removeClass('bg-light');
   });
    }
     
  });
  


  $('.nav-link').click(function(){
    $('.nav-link').removeClass('bg-light');
    $(this).addClass('bg-light');
   $(this).on('mouseout',function(){
     $(this).addClass('bg-light');
   });
   component=this;
  });
});