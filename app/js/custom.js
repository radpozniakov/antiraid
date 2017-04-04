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



// ============== Masonry Grid for Singe Media ==============//
window.onload = function() {
  (function () {
    try{
      $('.album-list').masonry({
        itemSelector: '.album-item',
        gutter: 23
      });
    }catch(e){
      console.log(e);
    }
  })();
};