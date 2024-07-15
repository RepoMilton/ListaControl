$(document).ready(function(){
  $('#profile').click(function(){
    setTimeout(function(){
      var number=parseInt(localStorage.profile)+20;
   $('.info').css('height',number+'px');

    },1000);
 
  });
  $('li').click(function(){
    setTimeout(function(){
      $(".wrapper").removeClass("active");
    },500);
    
  });
  $('#logout,.fa-sign-out-alt').click(function(){
    window.location="../index.php";
  });
  
});