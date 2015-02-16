(function($){

    // Slide paused
    $('#carousel-kossa').carousel({interval: false});

    // Swipe event
    $('#carousel-kossa').swipe( {
        //Generic swipe handler for all directions
        swipe:function(event, direction, distance, duration, fingerCount, fingerData) {
            _dir = (direction == 'left') ? 'next' : 'prev' ;
          $(this).carousel( _dir );  
        },
        //Default is 75px, set to 0 for demo so any distance triggers swipe
         threshold:0
      });



    // Click on play button
    $(".wrapper a.play").click(
        function(){

            var
                _this    = $(this),
                _wrapper = _this.parent(),
                iframe   = _wrapper.next('iframe')[0],
                player   = $f(iframe),
                status   = $('.status');

            // Hide the Wrapper
            _wrapper.fadeOut("slow", function(){
                _wrapper.remove();
            })

            // When the player is ready, add listeners for pause, finish, and playProgress
            player.addEvent('ready', function() {
                status.text('ready');
                
                player.addEvent('pause', onPause);
                player.addEvent('finish', onFinish);
                player.addEvent('playProgress', onPlayProgress);
            });

            player.api('play');

            $('#carousel-kossa').on('slide.bs.carousel', function(){
                player.api('pause');
            })


            function onPause(id) {
                status.text('paused');
            }

            function onFinish(id) {
                status.text('finished');
            }

            function onPlayProgress(data, id) {
                status.text(data.seconds + 's played');
            }


        }
    );

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

/*
|------------------------------------------------------------------------------------
| Fonctions
|------------------------------------------------------------------------------------
*/

})(jQuery);
