/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function() {

    $("#banner").carouFredSel({
        direction: "left",
        //responsive: true,
        auto: {
            //items: 8,
            duration: 7800,
            //easing: "linear",
            timeoutDuration: 100,
            pauseOnHover: "immediate"
        }
    });

    /*$("#banner").carouFredSel({
     direction: "top",
     auto: {
     item: 1,
     duration: 4000,
     easing: "linear",
     timeoutDuration: 0,
     pauseOnHover: "immediate"
     }
     });
     
     $("#banner").carouFredSel({
     responsive: true,
     direction: "left",
     width: "100%",
     height: "variable",
     auto: {
     item: 1,
     duration: 6000,
     easing: "linear",
     timeoutDuration: 0,
     pauseOnHover: "immediate"
     }
     });*/

});