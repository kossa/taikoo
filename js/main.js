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
      });



    // Click on play button
    $(".wrapper a.play").click(
        function(){

            var
                _this    = $(this),
                _wrapper = _this.parent(),
                _video   = _wrapper.next();


            // Hide the Wrapper
            _wrapper.fadeOut("slow", function(){
                _wrapper.remove();
            })

            // Play the fideo
            _video.get(0).play();

            $('#carousel-kossa').on('slide.bs.carousel', function(){
                _video.get(0).pause();

            })

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

    // Click on video
    $("video").click(
        function(){
            if (this.paused) {
                this.play();
            }else{
                this.pause();
            }
        }
    );

    // Residences page hover on links
    $("#floor-plans a").hover(function(){//  executer lors du sorvol
        var img = $(this).data('img');
        $('#floor-plans').css('background-image', 'url('+img+')')
    }, 
    function(){//  executer lors du sortie
        var img = $(this).data('imgorigin');
        $('#floor-plans').css('background-image', 'url('+img+')')
    });


    // Scoll to contact form
    $("#contact").click(
        function(){
          var
            _this = $(this),
            target = _this.attr('href').split("#")[1],
            target_top = $('#'+target);
            console.log(target);
        
          //$('html, body').animate({scrollTop:target_top}, "slow");
          $("html, body").animate({scrollTop: target_top.offset().top }, 
            {duration:1000});

          //$('html, body').scrollTo( target_top, 800, { easing:'easeOutCirc' } );


        return false;
        })

    // Open/Close Offers
    $("#open-offsers").click(
        function(){
            $("#offers").slideDown();
            return false;
        }
    );
    $("#close-offers").click(
        function(){
            $("#offers").slideUp();
            return false;
        }
    );


    // Carousel
    $('.your-class').slick({
        "dots": true,
    });

    // Contact form submit
    $("#contact-form").submit(function (){
        var data = $(this).serialize();

        $.ajax({
            url: 'mail.php',
            type: 'POST',
            dataType: 'json',
            data: data,
        })
        .done(function(data) {
            type = data.type;
            $('#email-'+type+'-model').modal();
        })
        .fail(function(data) {
            console.log(data);
        })
        .always(function() {
            console.log("complete");
        });


        return false;
    });


})(jQuery);
