(function($){

    // Click on collpase menu in mobile
    $(".navbar-toggle").click(
        function(){
            $(this).toggleClass('open');
        }
    );

    // Show/Hide the form for mobile
    $("#show-form").click(
        function(){
            
            var _this = $(this);

            _this.fadeOut("slow", function(){
                _this.next().fadeIn("slow");
            })

            return false;
        }
    );

})(jQuery);
