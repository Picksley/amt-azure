<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="/js/jquery-3.2.1.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/js/bootstrap.min.js"></script>
<script src="/js/wow.min.js"></script>
<script src="/js/group.js"></script>
<script src="/js/easyResponsiveTabs.js"></script>
<script src="/js/slider/js/jquery.easing-1.3.pack.js" type="text/javascript"></script>

<script src="/js/slider/js/google-code-prettify/prettify.js"></script>
<script src="/js/slider/js/google-code-prettify/lang-css.js"></script>

<script src="/js/custom.js" type="text/javascript"></script>

<script src="/js/slider/js/jquery.requestAnimationFrame.js"></script>

<script src="/js/slider/js/ilightbox/js/ilightbox.packed.js"></script>
<script src="/js/jquery.matchHeight.js" type="text/javascript"></script>
<script src="/src/slick/slick.min.js" type="text/javascript"></script>


<script type="text/javascript">

state2 = {"1":["Rome","Milan","Parma"],"2":["Paris","Lile","Nice"],"3":["Algiers","Jijel","Bejaia"],"4":["London","Manchester"]};


$(document).ready(function(){
  //this if you want that changing province this alert country value
    $("#vehicle_makes").on("change",function(e){

          $("#vehicle_models").children().remove();
          var city =state[$(this).val()];
          if(!city) return;
          $("#vehicle_models").append('<option value="">- Select -</option>')

          for(i=0; i< city.length;i++) {
            //console.log(city[i]);


            $("#vehicle_models").append('<option value="'+city[i]+'">'+city[i]+'</option>');

          }


    });




    var selectedMake;
    var selectedModel;
    var min_budget = 0;
    var max_budget = 99999;
    var selected

    // when changing country this alert country value itself
    $("#vehicle_makes").on("change",function(e){

        var selectedMake = $(this).val();
      //  alert(selectedMake);
        document.getElementById("searchResultHref").setAttribute("href","car-leasing/" + selectedMake);


    });
    $("#vehicle_models").on("change",function(e){
        var selectedModel = $(this).val();
        var selectedMake = $("#vehicle_makes").val();
    //    alert(selectedMake);
    //    alert(selectedModel);
        document.getElementById("searchResultHref").setAttribute("href","car-leasing/" + selectedMake + "/" + selectedModel);

    });

    $("#min_budget").on("change",function(e){
        var selectedModel = $("#vehicle_models").val();
        var selectedMake = $("#vehicle_makes").val();
        var min_budget =  $(this).val();

    //    alert(selectedMake);
    //    alert(selectedModel);
    //    alert(min_budget);
        document.getElementById("searchResultHref").setAttribute("href","car-leasing/" + selectedMake + "/" + selectedModel + "/" + min_budget + "/" + max_budget );

    });

    $("#max_budget").on("change",function(e){
        var selectedModel = $("#vehicle_models").val();
        var selectedMake = $("#vehicle_makes").val();
        var min_budget = $(this).val();
        var max_budget =$(this).val();
    //    alert(selectedMake);
      //  alert(selectedModel);
    //    alert(min_budget);
    //    alert(max_budget);
        document.getElementById("searchResultHref").setAttribute("href","car-leasing/" + selectedMake + "/" + selectedModel + "/" + min_budget + "/" + max_budget);

    });






    $('#showroom_filter').easyResponsiveTabs();
     // Slider for Testimonials Section
     $('.slick-slider-testimonials').slick({
       draggable:true,
       dots: true,
        centerMode: true,
        centerPadding: ($('.slick-slider-testimonials').find('>div').outerWidth() / 2) + 'px', // This gives the half effect for the next and previous slides
        slidesToShow: 1,
        width: 600,
        variableWidth: true,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              centerPadding: 1,
              slidesToShow:1,
              slidesToScroll: 1,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 600,
            settings: {
              centerPadding: 1,
              slidesToShow: 1,
              slidesToScroll: 1,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 480,
            settings: {
              centerPadding: 1,
              slidesToShow: 1,
              slidesToScroll: 1,
              infinite: true,
              dots: true
            }
          }
        ]


     });
      // Slider for Recently Viewed Vehicles
     $('.slick-slider-vehicles').slick({
          draggable:true,
       dots: false,
         infinite: true,
         speed: 300,
         centerMode:true,
         slidesToShow: 6,
         slidesToScroll: 3,
         responsive: [
           {
             breakpoint: 1024,
             settings: {
               slidesToShow: 3,
               slidesToScroll: 3,
               infinite: true,
               dots: true
             }
           },
           {
             breakpoint: 600,
             settings: {
               slidesToShow: 2,
               slidesToScroll: 2,
             }
           },
           {
             breakpoint: 480,
             settings: {
               slidesToShow: 1,
               slidesToScroll: 1,
             }
           }
         ],


     });
     // Slider for Special OFfers on the Special Offers page
     $('.slick-slider-vehicles-special-offers').slick({
          draggable:true,
       dots: true,
       arrows:true,
         infinite: true,
         speed: 300,
         slidesToShow: 3,
         slidesToScroll: 2,
         responsive: [
           {
             breakpoint: 1024,
             settings: {
               slidesToShow: 2,
               slidesToScroll: 2,
               infinite: true,
               dots: true
             }
           },
           {
             breakpoint: 600,
             settings: {
               slidesToShow: 2,
               slidesToScroll: 2,
               dots:false,
             }
           },
           {
             breakpoint: 480,
             settings: {
               slidesToShow: 1,
               slidesToScroll: 1,
               dots:false,
             }
           }
         ],


     });
     // Slider for Short Specials on other pages
     $('.special-offers-slick').slick({
          draggable:true,
       dots: true,
         infinite: true,
         speed: 300,
         autoplay: true,
         autoplaySpeed: 10000,
         slidesToShow: 3,
         slidesToScroll: 3,
         responsive: [
           {
             breakpoint: 1024,
             settings: {
                 autoplaySpeed: 10000,
               slidesToShow: 3,
               slidesToScroll: 3,
               infinite: true,
               dots: true
             }
           },
           {
             breakpoint: 600,
             settings: {
                 autoplaySpeed: 10000,
               slidesToShow: 2,
               slidesToScroll: 2,
             }
           },
           {
             breakpoint: 480,
             settings: {
                autoplaySpeed: 10000,
               slidesToShow: 1,
               slidesToScroll: 1,
             }
           }
         ],


     });

     // Car Carousel

     $('.slick-for').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: true,
      asNavFor: '.slick-nav'
    });
    $('.slick-nav').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      asNavFor: '.slick-for',
      dots: true,
      centerMode: true,
      focusOnSelect: true
    });

     // Company Stats Slider
     $('.slick-slider-company-stats').slick({
          draggable:true,
       dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
autoplaySpeed: 8000,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]


     });
   });






// This is a short script I stole from css-tricks to ease the scrolling for content and internal clicks

$(document).ready(function(){
  // Select all links with hashes
  $('a[href*="#"]')
    // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function(event) {
      // On-page links
      if (
        location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
        &&
        location.hostname == this.hostname
      ) {
        // Figure out element to scroll to
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        // Does a scroll target exist?
        if (target.length) {
          // Only prevent default if animation is actually gonna happen
          event.preventDefault();
          $('html, body').animate({
            scrollTop: target.offset().top
          }, 1000, function() {
            // Callback after animation
            // Must change focus!
            var $target = $(target);
            $target.focus();
            if ($target.is(":focus")) { // Checking if the target was focused
              return false;
            } else {
              $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
              $target.focus(); // Set focus again
            };
          });
        }
      }
    });

    jQuery.goup({trigger: 10,
	containerSize:40,
   bottomOffset: 50,
    locationOffset: 50,
    title: 'Back To Top',
   containerColor: '840b23',
      });
});

</script>
   <script>
   wow = new WOW(
   {
       mobile: false
   });
   wow.init();
   $(function() {
   	$('.benefit-item').matchHeight();
    $('.ofr_lease').matchHeight();
    $('.faq_col').matchHeight();
   });
   	</script>
