(function($, window) {
  $(function() {
    // この中に処理を書きます
    $(document).ready(function(){
    $('.nav-link').hover(function(){
        $(this).stop(true)
        .fadeTo(500,0.5).css({'background':'#A0522D'});
        },
        function(){
            $(this).fadeTo(500,1.0).css({'background':'#A0522D'});
        });
    });
  });
})(jQuery, window);