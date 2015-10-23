$(function() {
  $('.oldalsavgombkint').click(function() {  
      $('#oldalsavbal').animate({ "left": "+=250" }, "fast" ); //százalékosan is megadható a mozgatás
  });
  $('#oldalsavgombbent').click(function() {  
      $('#oldalsavbal').animate({ "left": "-=250px" }, "fast" );
  });
});

