$(function() {
  $('.menugombkinti').click(function() {  
      $('#oldalsavbal').animate({ "left": "+=250" }, "fast" ); //százalékosan is megadható a mozgatás
  });
  $('#menugombbent').click(function() {  
      $('#oldalsavbal').animate({ "left": "-=250px" }, "fast" );
  });
});

