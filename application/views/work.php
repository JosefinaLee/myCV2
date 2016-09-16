<div id="work" class="clearfix">
    <div class="title">
        <h3>My Work</h3>
    </div>
    <div class="catalog">
        <ul class="clearfix">
            <li class="current">All</li>
            <li>Elements</li>
            <li>Templates</li>
            <li>Trending</li>
<!--            <li><a href="">All</a></li>-->
<!--            <li><a href="">Elements</a></li>-->
<!--            <li><a href="">Templates</a></li>-->
<!--            <li><a href="">Trending</a></li>-->
        </ul>
    </div>

    <div class="work-container">

<?php
foreach($blogs as $blog) {
?>

    <div class="works-wrapper">

        <!--    <p class="work-info">chg</p>-->
        <div class="works">
            <div class="work-content" data-title="title1">
                <img src="<?php echo $blog->blog_img;?>" alt="">

                <div class="work-mask">
                    <p class="work-info"><?php echo $blog->blog_title;?>This is the title</p>
                </div>
            </div>

        </div>

    </div>
<?php
}
?>





    </div>
<!--sdtvntlkslrfnuvtnt-->



</div>