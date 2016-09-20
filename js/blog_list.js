require(["jquery", "nav"], function($){
    $(function(){
        var offset = 0;
        var curr_cate = 0;
        var $blogUl = $(".blog-list-all", $("#blog-list"));
        var $cateLi = $(".catalog li", $("#blog-list"));

        function Category_switch(cateId){

            $cateLi.eq(cateId).addClass("current").siblings().removeClass("current");
            //var cateId = $(this).data("id");
            offset = 0;
            curr_cate = cateId;
            $.get("blog_list/view_blog_list", {
                cateId: cateId
            }, function(data){
                $blogUl.empty();
                var html = "";
                for(var i=0; i<data.length; i++){
                    var blog = data[i];
                    html += `<li>
                    <div id="blog-list-container">
                        <img src=`+ blog.blog_thumb +` alt="">
                        <div id="blog-list-info">
                            <a href="javascript:;" data-id="` + blog.cate_id + `"  class="blog-cate">`+ blog.cate_name +`</a>
                            <p class="blog-list-title"><h4>`+ blog.blog_title +`</h4></p>
                            <p class="blog-list-describe line">`+ blog.blog_date +`March 01, 2015 with 1 Commnets</p>
                            <p class="blog-list-abstract">`+ blog.blog_content +`</p>
                            <a href="blog_detail/view_blog?blogId=` + blog.blog_id + `" class="blog-list-readmore">READ MORE</a>

                        </div>
                    </div>
                </li>`;

                }

                $blogUl.append(html);
            }, "json");
        }

        $cateLi.on("click", function(){
            Category_switch($(this).data("id"));


            //$(this).addClass("current").siblings().removeClass("current");
            //var cateId = $(this).data("id");
            //offset = 0;
            //curr_cate = cateId;
            ////$("#cate_id").val(cateId);
            //$.get("blog_list/view_blog_list", {
            //    cateId: cateId
            //}, function(data){
            //    $blogUl.empty();
            //    var html = "";
            //    for(var i=0; i<data.length; i++){
            //        var blog = data[i];
            //        html += `<li>
            //        <div id="blog-list-container">
            //            <img src=`+ blog.blog_thumb +` alt="">
            //            <div id="blog-list-info">
            //                <a href="" class="blog-cate">`+ blog.cate_name +`</a>
            //                <p class="blog-list-title"><h4>`+ blog.blog_title +`</h4></p>
            //                <p class="blog-list-describe line">`+ blog.blog_date +`March 01, 2015 with 1 Commnets</p>
            //                <p class="blog-list-abstract">`+ blog.blog_content +`</p>
            //                <a class="blog-list-readmore">READ MORE</a>
            //
            //            </div>
            //        </div>
            //    </li>`;
            //
            //    }
            //
            //    $blogUl.append(html);
            //}, "json");

        });

        $("#blog-list-info").on("click", $(".blog-cate"), function(e){
            var cateId = $(e.target).data("id");
            console.log(cateId);
            Category_switch(cateId);
            //Category_switch($(this).data("id"));
        });

        $("#blog-list-load-btn").on("click", function(){
            offset++;
            //var cate_id = $("#cate_id").val();
            console.log(offset);
            console.log(curr_cate);
            //console.log(cate_id);
            $.get("blog_list/get_blog_more", {
                cate_id: curr_cate,
                offset: offset*6
            }, function(data){
                var html = "";
                for(var i=0; i<data.length; i++){
                    var blog = data[i];
                    html += `<li>
                    <div id="blog-list-container">
                        <img src=`+ blog.blog_thumb +` alt="">
                        <div id="blog-list-info">
                            //<a href="" class="blog-cate">`+ blog.cate_name +`</a>
                            //<p class="blog-list-title"><h4>`+ blog.blog_title +`</h4></p>
                            //<p class="blog-list-describe line">`+ blog.blog_date +`March 01, 2015 with 1 Commnets</p>
                            //<p class="blog-list-abstract">`+ blog.blog_content +`</p>
                            //<a href="blog_detail/view_blog?blogId=`+ blog.blog_id +`" class="blog-list-readmore">READ MORE</a>
                            <a href="javascript:;" data-id="` + blog.cate_id + `"  class="blog-cate">`+ blog.cate_name +`</a>
                            <p class="blog-list-title"><h4>`+ blog.blog_title +`</h4></p>
                            <p class="blog-list-describe line">`+ blog.blog_date +`March 01, 2015 with 1 Commnets</p>
                            <p class="blog-list-abstract">`+ blog.blog_content +`</p>
                            <a href="blog_detail/view_blog?blogId=` + blog.blog_id + `" class="blog-list-readmore">READ MORE</a>

                        </div>
                    </div>
                </li>`;

                }

                $blogUl.append(html);

            }, "json");
        });



    });
});