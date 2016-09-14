define(["jquery"], function($){

    $(function(){

        var $nav = $("#nav");

        // nav固定
        $(window).scroll(function(){

            if($(window).scrollTop() >= $('#banner').height()){
                $nav.css({
                    "position":  "fixed",
                    "top": 0,
                    "box-shadow": "0 0 5px #999"
                    //,
                    //"background": "rgba(0, 0, 0, 0.05)"


            });

            }else{
                $nav.attr("style", "position: relative");
            }

        });


         //nav-menu onclick event
        $("#nav-menu").on("click", function(e){
            console.log("111");
            $("ul", $nav).toggle('1.5s', 'swing');
            e.preventDefault();
            return false;
        });

        //$(".menu", ).css("background", "red");







    });



});