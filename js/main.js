(function($){

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
