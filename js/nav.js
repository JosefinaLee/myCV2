define(["jquery"], function($){

    $(function(){

        var $nav = $("#nav");

        // nav固定
        $(window).scroll(function(){
            //console.log($('#nav').offset().top);
            //console.log($(window).scrollTop());
            //if($(window).scrollTop() >= $('#nav').offset().top){
            if($(window).scrollTop() >= $('#banner').height()){
                $nav.css({
                    "position":  "fixed",
                    "top": 0,
                    "box-shadow": "0 0 5px #999"
                    //,
                    //"background": "rgba(0, 0, 0, 0.05)"
                });
                $("#nav-placeholder").css("display", "block");

            }else{
                $nav.attr("style", "position: relative");
                $("#nav-placeholder").css("display", "none");
            }

        });


         //nav-menu onclick event
        $("#nav-menu").on("click", function(e){
            //console.log("111e");
            $("ul", $nav).toggle('1.5s', 'swing');
            e.preventDefault();
            return false;
        });

        //$(".menu", ).css("background", "red");







    });



});