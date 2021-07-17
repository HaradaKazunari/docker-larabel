const height= "5rem";
const windowWidth = window.innerWidth;
if(windowWidth < 680){
  height= "3rem";
}
no_scroll();
$(window).on('load', function(){
  $('header .outline').addClass('loaded');
  $('.anime_border').addClass('top');
  $('#home').delay(2000).queue(function(){
    $('.loaded').css({'height':height,});
    window.scrollTo(0,0);
    $('.border_bottom').addClass('line');
    $(this).css({ 'opacity':'1', });
    $('footer').css({ 'opacity':'1', });
    return_scroll();
  });
})
