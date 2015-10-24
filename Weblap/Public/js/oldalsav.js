$(function() {
    $('#oldalsavgombkint').click(function() 
    {   
        if(!$(".oldalsavbal").hasClass("Moved"))
        {
            $('.oldalsavbal').animate({ "left": "+=250px" }, "fast" ).addClass("Moved"); 
        
                                                //százalékosan is megadható a mozgatás
        }
        else
        {
            $('.oldalsavbal').animate({ "left": "-=250px" }, "fast" ).removeClass("Moved"); 
        }
    });
 });
