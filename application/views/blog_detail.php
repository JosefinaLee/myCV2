<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $blog_info -> blog_title;?></title>
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="font/icon/iconfont.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/banner.css">
    <link rel="stylesheet" href="css/blog_detail.css">

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

<?php //include "banner.php"?>
<?php include "nav.php";?>
<div id="blog-detail">
    <div class="blog-wrapper">
        <div class="blog-content">
            <h2 class="blog-title"><?php echo $blog_info -> blog_title;?>This is Blog title gfhgjh</h2>
            <ul class="blog-info clearfix">
                <li class="blog-date"><i class="iconfont ">&#xe630;</i><?php echo $blog_info -> blog_date;?></li>
                <li class="blog-category"><i class="iconfont">&#xe629;</i><?php echo $blog_info -> cate_name;?></li>
                <li class="blog-clicked"><i class="iconfont">&#xe60d;</i><?php echo $blog_info -> blog_clicked;?></li>
                <li class="blog-liked"><i class="iconfont">&#xe62e;</i><?php echo $blog_info -> blog_liked;?></li>
                <li class="blog-commented"><i class="iconfont">&#xe62d;</i><span><?php echo count($blog_info -> comments)?></span></li>
            </ul>
            <img src="<?php echo $blog_info -> blog_img;?>" alt="">
            <p class="blog-article">内容: <?php echo $blog_info -> blog_content;?></p>
        </div>

        <div id="comment-form">
            <h3>leave a comment</h3>

            <p><input type="hidden" id="blog-id" value="<?php echo $blog_info -> blog_id?>" class="text" placeholder="Name"></p>

            <p><textarea id="message" class="text" placeholder="Your Message" name="" id="" cols="30" rows="10"></textarea></p>
            <p><input type="text" id="username" class="text" placeholder="Name"></p>
            <p><input type="email" id="email" class="text" placeholder="Email"></p>
            <p><input type="tel" id="phone" class="text" placeholder="Phone"></p>

            <p><input type="button" id="send-btn" class="send-comment" value="Send"></p>

<!--            <p><a href="" class="send-comment">SEND</a></p>-->
        </div>

        <div id="blog-comments">
            <h3 class="blog-commented"><span><?php echo count($blog_info -> comments)?></span> Responses</h3>
            <ul class="comment-list ">

                <?php foreach($blog_info -> comments as $comment){
                    ?>

                    <li class="comment">
                        <ul class="comment-info clearfix">
                            <li class="comment-user"><i class="iconfont ">&#xe60a;</i><?php echo $comment -> comment_name;?></li>
                            <li class="comment-date"><i class="iconfont ">&#xe630;</i><?php echo $comment -> comment_time;?></li>
                        </ul>
                        <p class="comment-content"><?php echo $comment -> comment_content;?></p>
                    </li>

                <?php  }?>
            </ul>
        </div>

    </div>
</div>


<div class="test">
<!--    I'm JOSEFINA Christopher Doe-->
</div>

<script src="js/require.js" data-main="js/blog_detail"></script>

</body>
</html>

















