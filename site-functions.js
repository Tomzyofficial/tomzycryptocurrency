//loader handler
setTimeout(function(){
    $(".loader_bg").fadeToggle();
}, 2500);

// navigation functions
$(document).ready(function(){
    $('#icon').click(function(){
        $('ul').toggleClass('show');
    })
});

//btc, eth, bch button handlers
$(document).ready(function(){
    $(".btn-btc").click(function(){
        $(".btn-btc").hide(500);
    })
    $(".btn-eth").click(function(){
        $(".btn-eth").hide(500);
    })
    $(".btn-bch").click(function(){
        $(".btn-bch").hide(500);
    });
});

// counter pluggin
jQuery(document).ready(function( $ ) {
    $('.counter').counterUp({
    delay: 10,
    time: 1000
});
});

// back to top functions
    // get the button
     var mybutton = document.getElementById("mybtn");

     //when the user scrolls down 300px of the page, show the button
     window.onscroll = function(){scrollFunction()};
     function scrollFunction(){
         if (document.body.scrollTop > 300 ||
         document.documentElement.scrollTop > 300 ){
             mybutton.style.display="block";
         } else {
             mybutton.style.display="none";
         }
     }

     //when the user clicks on the button, scrolls to the top of the page
     function topFunction(){
         document.body.scrollTop = 0;
         document.documentElement.scrollTop = 0;
     }
    
//faq 
$(document).ready(function(){
    $(".first").click(function(){
        $(".first-answer").slideToggle("slow");
        $(".second-answer").hide();
        $(".third-answer").hide();
        $(".fourth-answer").hide();
        $(".fifth-answer").hide();
    });
    $(".second").click(function(){
        $(".second-answer").slideToggle("slow");
        $(".first-answer").hide();
        $(".third-answer").hide();
        $(".fourth-answer").hide();
        $(".fifth-answer").hide();
    });
    $(".third").click(function(){
        $(".third-answer").slideToggle("slow");
        $(".first-answer").hide();
        $(".second-answer").hide();
        $(".fourth-answer").hide();
        $(".fifth-answer").hide();
    });
    $(".fourth").click(function(){
        $(".fourth-answer").slideToggle("slow");
        $(".first-answer").hide();
        $(".second-answer").hide();
        $(".third-answer").hide();
        $(".fifth-answer").hide();
    });
    $(".fifth").click(function(){
        $(".fifth-answer").slideToggle("slow");
        $(".first-answer").hide();
        $(".second-answer").hide();
        $(".third-answer").hide();
        $(".fourth-answer").hide();
    });
})

// footer year change
let date = new Date().getFullYear();
document.getElementById("footer-year").innerHTML = date;