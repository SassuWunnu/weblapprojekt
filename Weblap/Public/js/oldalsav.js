$(function() {
    $('#oldalsavgombkint').click(function() 
    {   
        if(!$(".oldalsavbal").hasClass("Moved"))
        {
            $('.oldalsavbal').animate({ "top": "+=350px" }, "fast" ).addClass("Moved"); 
        
                                                //százalékosan is megadható a mozgatás
        }
        else
        {
            $('.oldalsavbal').animate({ "top": "-=350px" }, "fast" ).removeClass("Moved"); 
        }
    });
 });
