var main = function() {
	//  $('a.gallery').colorbox();
  $('#AboutBtn').click(function() {
    $("#about").animate({
      left: "0px"
    }, 2);
  });
  $('#GalleryBtn').click(function() {
    $("#gallery").animate({
      right: "10000px"
    }, 2);
  });
};
$(document).ready(main);