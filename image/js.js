/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function() {

    $("#banner").carouFredSel({
        direction: "left",
        //responsive: true,
        auto: {
            items: 5,
            duration: 7500,
            easing: "linear",
            timeoutDuration: 0,
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