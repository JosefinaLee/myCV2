<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="font/icon/iconfont.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/banner.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/blog.css">
    <link rel="stylesheet" href="css/blog_list.css">
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

<div id="blog-list">

    <div class="title">
        <h3>Blogs</h3>
    </div>

    <div class="catalog">
        <ul class="clearfix">
            <li class="<?php if(!$cate) echo "current"?>">All</li>
            <?php foreach($categories as $category){
                ?>
            <li class="<?php if($cate) echo "current"?>" data-id="<?php echo $category->cate_id?>"><?php echo $category->cate_name?></li>

                <?php
            }
            ?>
        </ul>
    </div>
<!--    <input type="hidden" id="cate_id">-->
    <div class="blog-list-wrapper clearfix">
        <ul class="blog-list-all">

            <?php foreach($blogs as $blog){
                ?>
                <li>
                    <div id="blog-list-container">
                        <img src="<?php echo $blog->blog_thumb;?>" alt="">
                        <div id="blog-list-info">
                            <a href="blog_list/get_blog_list?cate_id=<?php echo $blog->cate_id;?>" class="blog-cate"><?php echo $blog->cate_name;?></a>
<!--                            <a href="javascript:;" data-id="--><?php //echo $blog->cate_id;?><!--" class="blog-cate">--><?php //echo $blog->cate_name;?><!--</a>-->
                            <p class="blog-list-title"><h4><?php echo $blog->blog_title;?></h4></p>
                            <p class="blog-list-describe line"><?php echo $blog->blog_date;?>March 01, 2015 with 1 Commnets</p>
                            <p class="blog-list-abstract"><?php echo $blog->blog_content;?></p>
                            <a href="blog_detail/view_blog?blogId=<?php echo $blog->blog_id?>" class="blog-list-readmore">READ MORE</a>

                        </div>
                    </div>
                </li>

                <?php
            }?>






        </ul>
    </div>

    <div id="blog-list-load">
<!--        LOAD...-->
        <span id="blog-list-load-btn">Load more...</span>
    </div>

</div>

<?php //include "contact.php"?>
<?php include "footer.php"?>






<!--<div class="test">-->
<!--    I'm JOSEFINA Christopher Doe-->
<!--</div>-->

<script src="js/require.js" data-main="js/blog_list"></script>

</body>
</html>

















