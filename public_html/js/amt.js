/**
This is (so far) the amt.js file containing all of the stray scripts that were originally included in the <footer> of each file
**/


/** FROM THE ABOUT-US PAGE */
$(document).ready(function(){
    jQuery.goup({trigger: 10,
	containerSize:40,
   bottomOffset: 50,
    locationOffset: 50,
    title: 'Back To Top',
   containerColor: '840b23',
      });

	 // $('.panel-heading a').click(function() {
   // $('.panel-heading').removeClass('active');


    //if(!$(this).closest('.panel').find('.panel-collapse').hasClass('in'))
       // $(this).parents('.panel-heading').addClass('active');
 //});

	  $('#testimonial').utilCarousel({
					showItems : 1,
					breakPoints : [[1920, 1]],
					autoPlay : true,
					navigationText : ['<i class="fa fa-long-arrow-left"></i>', '<i class="fa fa-long-arrow-right"></i>'],
					navigation : true

				});
});


    /**
     * Get viewport/window size (width and height).
     *
     * @return {Object}
     */
    function getViewport() {
        var e = window,
            a = 'inner';
        if (!('innerWidth' in window)) {
            a = 'client';
            e = document.documentElement || document.body;
        }
        return {
            width: e[a + 'Width'],
            height: e[a + 'Height']
        }
    }

    jQuery(document).ready(function($) {
        var $win = $(window),
            isTouch = !!('ontouchstart' in window),
            clickEvent = isTouch ? 'tap' : 'click';

        (function(){
            /**
             * Calculate the slides width in percent based on the parent's width.
             *
             * @return {String}
             */
            function calculator(width){
                var percent = '60%';

                if (width <= 480) {
                    percent = '100%';
                }
                else if (width <= 767) {
                    percent = '55%';
                }

                return percent;
            };

            // Global slider's DOM elements
            var $example = $('#example'),
                $frame = $('.frame', $example),
               $details = $('div.details', $example),
               $title = $('#title', $details),
               $photographer = $('#photographer', $details),
                $description = $('#description', $details),
                lastIndex = -1;


    $(document).ready(function () {
    $('#horizontalTab').easyResponsiveTabs({
    type: 'default', //Types: default, vertical, accordion
    width: 'auto', //auto or any width like 600px
    fit: true,   // 100% fit in a container
    closed: 'accordion', // Start closed if in accordion view
    activate: function(event) { // Callback function if tab is switched
    var $tab = $(this);
    var $info = $('#tabInfo');
    var $name = $('span', $info);
    $name.text($tab.text());
    $info.show();
    }
    });
    });

    function getScrollbarWidth() {
      var outer = document.createElement("div");
      outer.style.visibility = "hidden";
      outer.style.width = "100px";
      document.body.appendChild(outer);

      var widthNoScroll = outer.offsetWidth;
      // force scrollbars
      outer.style.overflow = "scroll";

      // add innerdiv
      var inner = document.createElement("div");
      inner.style.width = "100%";
      outer.appendChild(inner);

      var widthWithScroll = inner.offsetWidth;

      // remove divs
      outer.parentNode.removeChild(outer);

      return widthNoScroll - widthWithScroll;
    }

    jQuery(document).ready(function($){
      var $win = $(window),
        isTouch = !!('ontouchstart' in window),
        clickEvent = isTouch ? 'tap' : 'click',
        scrollbarWidth = getScrollbarWidth();

      $('body').append('<style>html .ilightbox-noscroll { padding-right: ' + scrollbarWidth + 'px; } html .ilightbox-noscroll #navigation { padding-right: ' + (scrollbarWidth + 20) + 'px; }</style>');



      // Cycling By Slides Example
      (function(){
        var $carousel = $('#cycling_by_slides'),
        $frame = $('.frame', $carousel),
        $controls = $('div.controls', $carousel),
        $scrollbar = $('div.scrollbar', $carousel);
        $frame.mightySlider({
          speed: 300,
          easing: 'easeOutExpo',

          // Navigation options
          navigation: {
            navigationType: 'centered',
            activateOn: clickEvent
          },

          // Scrolling options
          scrolling: {
            scrollBy: 0,
            scrollSource: null

          },

          // Scrollbar options
          scrollBar: {
            scrollBarSource: $scrollbar
          },

          // Buttons options
          buttons: {
            prev: $('.prev', $controls),
            next: $('.next', $controls)
          },

          // Cycling options
          cycling: {
            cycleBy: 'slides',
            pauseTime: 1500,
            pauseOnHover: 1
          }
        });

        var API = $frame.data().mightySlider;

        // Method calling buttons
        $carousel.on(clickEvent, 'button[data-action]', function () {
          var action = $(this).data('action');

          switch (action) {
            case 'add':
              API.add('<li>' + API.slides.length + '</li>');
              break;
            case 'remove':
              API.remove(-1);
              break;
            default:
              API[action]();
          }
        });
      })();
      // End of Cycling By Slides Example



    });

    $(document).ready(function(){
        jQuery.goup({trigger: 10,
    	containerSize:40,
       bottomOffset: 50,
        locationOffset: 50,
        title: 'Back To Top',
       containerColor: '840b23',
          });

    	 // $('.panel-heading a').click(function() {
       // $('.panel-heading').removeClass('active');


        //if(!$(this).closest('.panel').find('.panel-collapse').hasClass('in'))
           // $(this).parents('.panel-heading').addClass('active');
     //});

    	  $('#testimonial').utilCarousel({
    					showItems : 1,
    					breakPoints : [[1920, 1]],
    					autoPlay : true,
    					navigationText : ['<i class="fa fa-long-arrow-left"></i>', '<i class="fa fa-long-arrow-right"></i>'],
    					navigation : true

    				});

    				$('#hm_specialofr').utilCarousel({
    					pagination : true,
    					navigationText : ['<i class="icon-left-open-big"></i>', '<i class=" icon-right-open-big"></i>'],
    					breakPoints : [[1920, 3], [1200, 3], [992, 2],  [767, 1], [480, 1],  ],
    					navigation : true,
    					rewind : false
    				});



    });
