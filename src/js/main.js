jQuery(document).ready(function($) {
  $('.close').click(function() {
    $('#detail_info').hide();
  });

  $('#show_details').click(function(e) {
    console.log(11);
    e.preventDefault();
    $('#detail_info').show();
  });

  $('ul.tabs li').click(function() {
    var tab_id = $(this).attr('data-tab');

    $('ul.tabs li').removeClass('active');
    $('.tab-content').removeClass('active');

    $(this).addClass('active');
    $('#' + tab_id).addClass('active');
  });

  $('#myCarousel').carousel({
    interval: 5000
  });
  //Handles the carousel thumbnails
  $('[id^=carousel-selector-]').click(function() {
    var id = this.id.substr(this.id.lastIndexOf('-') + 1);
    var id = parseInt(id);
    $('#myCarousel').carousel(id);

    $('.img-preview .thumbnail').removeClass('active');
    $(this).toggleClass('active');
  });

  $('.single-item').slick({
    dots: true
  });

  $('#myTab li a').click(function(e) {
    e.preventDefault();
    $(this).tab('show');
  });
});
