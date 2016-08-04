if (typeof jQuery === 'undefined'){
    throw new Error('Not found jQuery library');
}

/**
 * 创建isElements函数
 */
+ (function($){
    $.fn.isElement = function(){
        if ($(this).length >= 1){
            return true;
        }else{
            return false;
        }
    }
})(jQuery);

/**
 * 导航自动置顶脚本
 */

+ (function($){
    $(window).on('scroll', function(e){
        if ($(document).scrollTop() > 70){
            $(".navbar").addClass('float-active');
        }else{
            $(".navbar").removeClass('float-active');
        }
    });
})(jQuery);

/**
 * 上传控件
 */

+ (function($){
    if ($("[data-widget='upload']").isElement()){
        var uploadWiget = $("[data-widget='upload']");

        $(uploadWiget).find('[type="file"]').on('change', function(){
            console.log('upload file!!!');
        });
    }
})(jQuery);