$(document).ready(function(){
var images = ['storage/contents/01KRBTDCE6T05PZ6M4AEBVEFMM.jpg', 'storage/contents/welcome_2.jpg', 'storage/contents/welcome_3.jpg'];
var index = 0;

setInterval(function() {
  $('.smile').attr('src', images[index]);
  index = (index + 1) % images.length;
}, 3000);

});