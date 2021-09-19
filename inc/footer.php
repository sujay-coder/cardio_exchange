
<footer>
  <div class="wave">
    <svg width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" class="wave"><defs></defs><path id="feel-the-wave" d=""/></svg>

<svg width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" class="wave"><defs></defs><path id="feel-the-wave-two" d=""/></svg>
  </div>
   <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-6">
        <h4 class="heading">About Us</h4>
        <p>Etiam condimentum aliquam odio, ut consectetur enim. Nullam metus purus, pharetra quis Etiam condimentum aliquam odio, ut consectetur.</p>
        <ul class="address">
          <li><a href="tel:+4474 2251 5547"><i class="fa fa-phone" aria-hidden="true"></i> 4474 2251 5547</a></li>
          <li><a href="mailto:info@mail.com"><i class="fa fa-envelope" aria-hidden="true"></i> info@mail.com</a></li>
        </ul>
      </div>
      <div class="col-md-4 col-sm-6 all-links">
        <h4 class="heading">Explore</h4>
        <ul>
          <li><a href="javascript: ;">Home</a></li>
          <li><a href="javascript: ;">Technology</a></li>
          <li><a href="javascript: ;">About us</a></li>
          <li><a href="javascript: ;">Contacts</a></li>
          <li><a href="javascript: ;">Cardio bike</a></li>
          <li><a href="javascript: ;">Pages</a></li>
          <li><a href="javascript: ;">Terms & Condition</a></li>
          <li><a href="javascript: ;">Privacy policy</a></li>
        </ul>
      </div>
      <div class="col-md-4 col-sm-6">
        <h4 class="heading">Subscribe news letter</h4>
        <div class="subscribe">
          <form>
            <input type="email" placeholder="Your Email ID">
            <button type="submit" class="btn"></button>
          </form>
        </div>
        <h4 class="heading">Connect With Us</h4>
        <ul class="sicial-list">
          <li><a href="javascript: ;"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          <li><a href="javascript: ;"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          <li><a href="javascript: ;"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="copy-part text-center">
    <p>© 2021 Prosper In All Things, LLC. All rights reserved.</p>
  </div>
</footer>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/jquery.slimNav_sk78.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
<script src="https://rawgit.com/peacepostman/wavify/master/wavify.js"></script>
<script src="https://rawgit.com/peacepostman/wavify/master/jquery.wavify.js"></script>

<script type="text/javascript">
$(document).ready(function() {  
  $('#navigation nav').slimNav_sk78();
  $('#nav-icon0').click(function(){
            $(this).toggleClass('open');
        });
  
});
</script>
<!-- <script>
    $(document).ready(function(){
        // Show hide popover
        $(".track_dp").click(function(){
            $(this).find(".track_dp_menu").slideToggle("fast");
        });
    });
    $(document).on("click", function(event){
        var $trigger = $(".track_dp");
        if($trigger !== event.target && !$trigger.has(event.target).length){
            $(".track_dp_menu").slideUp("fast");
        }            
    });
</script> -->
<script type="text/javascript">
$(document).ready(function() {

	 var owl = $('.slider');
    owl.owlCarousel({
    autoPlay: 3000, //Set AutoPlay to 3 seconds
    items:1,  
    nav:true,  
    dots:false,
    loop:true,
    autoplay:true,
    smartSpeed:1500,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    responsive:{
          0:{
              items:1,
              nav:true,
              dots:false,  
          },
          568:{
              items:1,
               nav:true,
              dots:false,  
          },
          700:{
              items:1,
               nav:true,
              dots:false,  
          },
          768:{
              items:1,
               nav:true,
              dots:false,  
          },
          1000:{
             items:1,
               nav:true,
              dots:false,  
          },
          
          1280:{
             items:1,
              nav:true,
              dots:false,  
          }
      }
    
    });

    var owl = $('.srv-box');
    owl.owlCarousel({
    autoPlay: 3000, //Set AutoPlay to 3 seconds
    items:3,  
    nav:true,  
    dots:false,
    loop:true,
    autoplay:true,
    smartSpeed:1500,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    navText: ['<span class="prev"><i class="fa fa-angle-left"></i></span>','<span class="next"><i class="fa fa-angle-right"></i></span>'],
    responsive:{
          0:{
              items:2,
              nav:true,
              dots:false,  
          },
          568:{
              items:2,
               nav:true,
              dots:false,  
          },
          700:{
              items:3,
               nav:true,
              dots:false,  
          },
          768:{
              items:3,
               nav:true,
              dots:false,  
          },
          1000:{
             items:3,
               nav:true,
              dots:false,  
          },
          
          1280:{
             items:3,
              nav:true,
              dots:false,  
          }
      }
    
    });

    var owl = $('.pro_slider');
    owl.owlCarousel({
    autoPlay: 3000, //Set AutoPlay to 3 seconds
    items:3,  
    nav:false,  
    dots:false,
    loop:true,
    autoplay:true,
    smartSpeed:1500,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    responsive:{
          0:{
              items:2,
              nav:false,
              dots:true,  
          },
          568:{
              items:2,
               nav:false,
               dots:true,  
          },
          700:{
              items:3,
               nav:false,
               dots:true,  
          },
          768:{
              items:3,
               nav:false,
               dots:true,  
          },
          1000:{
             items:3,
               nav:false,
               dots:true,  
          },
          
          1280:{
             items:3,
              nav:false,
               dots:true,  
          }
      }
    
    });
    var owl = $('.thumb-list-car');
    owl.owlCarousel({
    autoPlay: 3000, //Set AutoPlay to 3 seconds
    items:4,  
    nav:true,  
    dots:false,
    loop:true,
    autoplay:true,
    smartSpeed:1500,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    navText : ["<i class='fa fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
    responsive:{
          0:{
              items:3,
              nav:true,
              dots:false,  
          },
          568:{
              items:3,
               nav:true,
               dots:false,  
          },
          700:{
              items:4,
               nav:true,
               dots:false,  
          },
          768:{
              items:4,
               nav:true,
               dots:false,  
          },
          1000:{
             items:3,
               nav:true,
               dots:false,  
          },
          
          1280:{
             items:4,
              nav:true,
               dots:false,  
          }
      }
    
    });

    var owl = $('.pro_slider2');
    owl.owlCarousel({
    autoPlay: 3000, //Set AutoPlay to 3 seconds
    items:3,  
    nav:true,  
    dots:false,
    loop:true,
    autoplay:true,
    smartSpeed:1500,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    navText : ["<i class='fa fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
    responsive:{
          0:{
              items:2,
              nav:false,
              dots:true,  
          },
          568:{
              items:2,
               nav:false,
               dots:true,  
          },
          700:{
              items:3,
               nav:false,
               dots:true,  
          },
          768:{
              items:3,
               nav:false,
               dots:true,  
          },
          1000:{
             items:3,
               nav:false,
               dots:true,  
          },
          
          1280:{
             items:3,
              nav:true,
               dots:true,  
          }
      }
    
    });

  var owl = $('.client-box');
    owl.owlCarousel({
    autoPlay: 3000, //Set AutoPlay to 3 seconds
    items:1,  
    nav:false,
    dots:true,  
    loop:true,  
    smartSpeed:1500,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    responsive:{
          0:{
              items:1,
              nav:false,
              dots:true,  
          },
          568:{
              items:1,
               nav:false,
              dots:true,  
          },
          700:{
              items:1,
               nav:false,
              dots:true,  
          },
          768:{
              items:1,
               nav:false,
              dots:true,  
          },
          1000:{
             items:1,
              nav:false,
              dots:true,  
          },
          
          1280:{
             items:1,
              nav:false,
              dots:true,  
          }
      }
    });

    var owl = $('.brand-slide');
      owl.owlCarousel({
      autoPlay: 3000, //Set AutoPlay to 3 seconds
      items:4,  
      nav:false,
      dots:false, 
      loop:true,  
      smartSpeed:1500,
      autoplay:true,
      autoplayTimeout:3000,
      autoplayHoverPause:true,
        responsive:{
              0:{
                  items:3,
                  nav:false,
                  dots:false, 
              },
              568:{
                  items:3,
                   nav:false,
                  dots:true,  
              },
              700:{
                  items:3,
                   nav:false,
                  dots:true,  
              },
              768:{
                  items:4,
                   nav:false,
                  dots:true,  
              },
              1000:{
                 items:4,
                   nav:false,
            dots:false, 
              },
              
              1280:{
                 items:4,
                  nav:false,
            dots:false, 
              }
          }
      });


	 $('.nav-tabs li a').click(function(e){
	  e.preventDefault();
	  e.stopImmediatePropagation();
	  $(this).tab('show');
	});

	  $(function() {
	    //caches a jQuery object containing the header element
	    var header = $(".clearHeader");
	    $(window).scroll(function() {
	        var scroll = $(window).scrollTop();

	        if (scroll >= 100) {
	            header.removeClass('clearHeader').addClass("fixed-header");
	        } else {
	            header.removeClass("fixed-header").addClass('clearHeader');
	        }
	    });
	});

  //     $('.accordion').find('.accordion-toggle').click(function() {
  //   $(this).next().slideToggle('600');
  //   $(".accordion-content").not($(this).next()).slideUp('600');
  // });
  // $('.accordion-toggle').on('click', function() {
  //   $(this).toggleClass('active').siblings().removeClass('active');
  // });
		
});
</script>

<script type="text/javascript">
  $(document).ready(function() {  
    var wave1 = $('#feel-the-wave').wavify({
  height: 80,
  bones: 4,
  amplitude: 60,
  color: '#daeaee',
  speed: .15
});

var wave2 = $('#feel-the-wave-two').wavify({
  height: 80,
  bones: 3,
  amplitude: 60,
  color: 'rgba(218, 234, 238, .50)',
  speed: .25
});

var colors = ['rgba(255, 281, 75, .8)', '#dc75ff', '#9d9ade', '#6cd7ee', '#aceeae']

$("[data-pause]").on('click', function(){
  wave1.pause();
  wave2.pause();
  return false;
});

$("[data-play]").on('click', function(){
  wave1.play();
  wave2.play();
  return false;
});

$("[data-color]").on('click', function(){
  wave1.updateColor({
    color: colors[Math.floor(Math.random()*colors.length)],
    timing: 5
  });
  wave2.updateColor({
    color: colors[Math.floor(Math.random()*colors.length)],
    timing: 3
  });
  return false;
});

    });

</script>
<script>
   function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
  }

</script>

</body>
</html>