<div id="blog" class="clearfix">
    <div class="title">
        <h3>Blogs</h3>
    </div>
    <div class="catalog">
        <ul class="clearfix">
            <li class="current">All</li>
            <?php foreach($categories as $category){
                ?>
                <li data-id="<?php echo $category->cate_id?>"><?php echo $category->cate_name?></li>

                <?php
            }
            ?>

            <!--            <a href="javascript:;">All</a>-->
            <!--            阻止<a></a>默认行为-->

        </ul>
    </div>

    <div class="blog-container">
        <div class="blog-all">
            <a href="cv/get_blog_list">View all blogs</a>
        </div>

        <ul class="blog-list clearfix">
            <?php
            foreach($blogs as $blog) {
                ?>
                <li>
                    <!--    <div class="blogs-wrapper">-->
                    <!--    <p class="blog-info">chg</p>-->
                    <a href="cv/view_blog?blogId=<?php echo $blog->blog_id?>">
                        <div class="blogs">
                            <div class="blog-content" data-title="title1">
                                <img src="<?php echo $blog->blog_thumb;?>" alt="">
                                <div class="blog-mask">
                                    <div class="blog-mask-info">
<!--                                        <p><i class="iconfont">&#xe60f;</i></p>-->
                                        <p class="blog-info"><?php echo $blog->blog_title;?>This is the title</p>
                                        <p><?php echo $blog->cate_name;?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <!--    </div>-->
                </li>
                <?php
            }
            ?>
        </ul>
    </div>
</div>












