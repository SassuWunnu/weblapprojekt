$(function() {
  $('#menugombkinti').click(function() {  
      $('#oldalsavbal').animate({ "left": "+=250" }, "slow" ); //százalékosan is megadható a mozgatás
  });
  $('#menugombbent').click(function() {  
      $('#oldalsavbal').animate({ "left": "-=250px" }, "slow" );
  });
});

