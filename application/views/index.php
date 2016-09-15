<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>首页INDEX</title>
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="css/banner.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/work.css">
    <!--- fonts --->
<!--    <link href='//fonts.googleapis.com/css?family=Overlock:400,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>-->
<!--    <link href='http://fonts.googleapis.com/css?family=Lato:100,300italic,400,700,900,300italic,700italic,900italic' rel='stylesheet' type='text/css'>-->
<!--    <link href='http://fonts.googleapis.com/css?family=Raleway:400,200,900,800,700,600,500,300,100' rel='stylesheet' type='text/css'>-->
<!--    <link href='//fonts.googleapis.com/css?family=Quicksand:400,700,300' rel='stylesheet' type='text/css'>-->
<!--    <link href='//fonts.googleapis.com/css?family=Cinzel:400,700,900' rel='stylesheet' type='text/css'>-->
<!--    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>-->
    <!--- fonts --->
    <!-- icon -->

    <!-- icon -->

    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);
        function hideURLbar(){
            window.scrollTo(0,1);
        }
    </script>

</head>
<body>
<script src="js/jquery-1.9.1.min.js"></script>
<script>

    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
        });
    });
</script>

<!-- Banner start -->
<?php include "banner.php"?>
<!-- Banner end -->

<!-- Nav start -->
<?php include "nav.php"?>
<!-- Nav end -->

<!-- Work start -->
<?php include "work.php"?>
<!-- Work end -->


<div class="test">
<!--    I'm JOSEFINA Christopher Doe-->
</div>



<!--<script src="js/index.js"></script>-->
<script src="js/require.js" data-main="js/index"></script>

</body>
</html>

















