require(["jquery", "nav"], function($){
    $(function(){
        //$catelogUl = $(".catalog", $("#blog-list"));
        $(".catalog li", $("#blog-list")).on("click", function(){
            var cateId = $(this).data("id");
            var $blogUl = $(".blog-list-all", $("#blog-list"));
            console.log(cateId);
            $.get("cv/view_blog_list", {
                cateId: cateId
            }, function(data){
                console.log("fgdshk");
                $blogUl.empty();
                var html = "";
                for(var i=0; i<data.length; i++){
                    html += `<li>
                    <div id="blog-list-container">
                        <img src=`+ data.blog_thumb +` alt="">
                        <div id="blog-list-info">
                            <a href="" class="blog-cate">`+ data.cate_name +`</a>
                            <p class="blog-list-title"><h4>`+ data.blog_title +`</h4></p>
                            <p class="blog-list-describe line">`+ data.blog_date +`March 01, 2015 with 1 Commnets</p>
                            <p class="blog-list-abstract">`+ data.blog_content +`</p>
                            <a class="blog-list-readmore">READ MORE</a>

                        </div>
                    </div>
                </li>`;

                }

                $blogUl.append(html);
            }, "json");

        });



    });
});