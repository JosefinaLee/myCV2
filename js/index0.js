$(function(){

var $navList = $("#nav-list a");
// var $navList = $("#nav-list li");
var $contentList = $("#content > div");

$(window).scroll(function(){
// 左侧nav固定
	if($(window).scrollTop() >= $(window).height()){
		$("#nav").attr("style", "position: fixed");
	}else{
		$("#nav").attr("style", "position: absolute");
	}
// 左侧nav-list随页面滚动样式
	for(var i=0; i<$contentList.length; i++){
		$contentList[i].index = i;
		var contentAbsoluteTop = $contentList.eq(i).offset().top - $(window).scrollTop();
		var $navCurrent = $navList.eq($contentList[i].index);
		if( contentAbsoluteTop<= 0 && contentAbsoluteTop >= -$contentList.eq(i).height()){
			$navCurrent.removeClass('hover-type').addClass('nav-selected');
			$navCurrent.parent().siblings().children().removeClass('nav-selected').addClass('hover-type');
		}else{
			$navCurrent.removeClass('nav-selected').addClass('hover-type');
		}
	}
});
// 左侧nav-list单击页面跳转
for(var i=0; i<$navList.length; i++){
	$navList[i].index = i;
	// $contentList[i].index = i;

	$navList.eq(i).on('click', function(){

		$(this).removeClass('hover-type').addClass('nav-selected');
		$(this).parent().siblings().children().removeClass('nav-selected').addClass('hover-type');

		var contentTop = $contentList.eq(this.index).offset().top;
		$(window).scrollTop(contentTop);

		return false;

// animate函数： 未解决
// $(window).animate({
// 	scrollTop: contentTop
// }, 500);

	});
}

















});