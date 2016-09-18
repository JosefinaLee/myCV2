require(["jquery", "nav"], function($){
    $(function(){
        $(".catalog li").on("click", function(){

            $(this).addClass("current").siblings().removeClass("current");

            var cateId = $(this).data("id");
            var $blogList = $(".blog-list");
            $.get("cv/get_blog", {
                cateId: cateId
            }, function(data){
                $blogList.empty();
                var html = "";
                for(var i=0; i<data.length; i++){
                    var blog = data[i];
                    html += `
                        <li>
                            <a href="cv/view_blog?blogId=`+ blog.blog_id + `">
                                <div class="blogs">
                                    <div class="blog-content" data-title="title1">
                                        <img src="`+ blog.blog_img +`" alt="">
                                        <div class="blog-mask">
                                            <p class="blog-info">`+ blog.blog_title + `This is the title</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                    `;
                }
                $blogList.html(html);




            }, "json");














        });
    });
});


