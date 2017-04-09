$(function() {


  // ==============  Parallax Single News ================ //
  (function () {
    try{
      var img = $('.parallax-news');
      var backgroundURL = img.data("bg");
      img.parallax({imageSrc: backgroundURL});
    }catch(e){
      console.log(e);
    }
  })();
  // ==============  Parallax Single News Item ================ //
});

$('.popup-with-form').magnificPopup({
  type: 'inline',
  preloader: false,
  focus: '#name',

  // When elemened is focused, some mobile browsers in some cases zoom in
  // It looks not nice, so we disable it:
  callbacks: {
    beforeOpen: function() {
      if($(window).width() < 700) {
        this.st.focus = false;
      } else {
        this.st.focus = '#name';
      }
    }
  }
});



// ============== Masonry Grid for Singe Media ==============//
window.onload = function() {
  (function () {
    try{
      $('.psgal').masonry({
        itemSelector: '.msnry_item',
        gutter: 23
      });
    }catch(e){
      console.log(e);
    }
  })();
};