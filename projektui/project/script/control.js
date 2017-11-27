//-------MODAL----
$(document).ready(function(){
   // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
   $('.modal').modal();
 });
//----MODAL----


$(document).ready(function(){
  $('.slider').slider();
});

//----TRANSITION  //----APPEAR_CONTENT!!!
$(document).ready(function(){
  var $b = $('button');
  var $p = $('.linkas');
  $b.click(function(){
    $(".bann").slideUp(500);
    var i = $b.index(this);
    $p.hide().eq(i).show()
  });
});
//---BUTTON_ARRAY

var links = $( "button" );
var arr = $.makeArray( links );
console.log(links);


//-----BUTTON-COLAPSE
  $(".button-collapse").sideNav();
/*
// CONROL SLIDER
$('.slider').slider('pause');
// Start slider
$('.slider').slider('start');
// Next slide
$('.slider').slider('next');
// Previous slide
$('.slider').slider('prev');
*/
