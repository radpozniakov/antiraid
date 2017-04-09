 $(function(){

      try{
        var owl = $('#test');
        $('#test').owlCarousel({
          loop:true,
          autoplay:true,
          autoplayTimeout:5000,
          responsiveClass:true,
          margin:0,
          autoplayHoverPause:true,
          responsive:{
            0:{
              items:1
            },
            521:{
              items:2
            },
            751:{
              items:3
            },
            1000:{
              items:4
            }
          }
        });
        $('.play').on('click',function(){
          owl.trigger('play.owl.autoplay',[5000])
        })
        $('.stop').on('click',function(){
          owl.trigger('stop.owl.autoplay')
        })
      }catch (e){
        console.log(e);
      }
    


        //////////////////////////////////////////////////////////////
   try{
     var owl_index = $('#index-carousel');
     $('#index-carousel').owlCarousel({
       loop:true,
       autoplay:true,
       dots:true,
       autoplayTimeout:6000,
       responsiveClass:true,
       margin:0,
        nav:true,
       smartSpeed:1000,
        // animateOut: 'flipOutY',
       autoplayHoverPause:true,
       responsive:{
         0:{
           items:1
         },
         600:{
           items:1
         },
         1000:{
           items:1
         }
       }
     });
     $('.play').on('click',function(){
       owl_index.trigger('play.owl_index.autoplay',[6000])
     })
     $('.stop').on('click',function(){
       owl_index.trigger('stop.owl_index.autoplay')
     })
     $('.navigation-prev').click(function(event) {
        $('.owl-prev').click();
         event.preventDefault;
     });
     $('.navigation-next').click(function(event) {
         $('.owl-next').click();
         event.preventDefault;
     });
   }catch (e){
        console.log(e);
   }





    });