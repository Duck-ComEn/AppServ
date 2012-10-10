$(function(){ 
  $('.jonnotie').hover(function(){
    $(this).stop().animate({
      'opacity' : 0.5
      }, 200)
  }, function() {
    $(this).stop().animate({
      'opacity' : 1
      }, 200)
  })
});
$(function(){ 
  $('#network .dropdown').hover(function(){
    $(this).stop().animate({
      'opacity' : 0.5
      }, 200)
  }, function() {
    $(this).stop().animate({
      'opacity' : 1
      }, 200)
  })
});

$(function(){ 
  $('#network .dropdown').click(function(){
    $('#network .sites').fadeIn(200),
    $(this).fadeOut(200)
  })
});

$(function(){ 
  $('#network .first').click(function(){
    
    $('#network .sites').fadeOut(200),
    $('#network .dropdown').fadeIn(200)
    return false;
  })
});

$(function(){ 
  $('#network .sites a').hover(function(){
    $(this).stop().animate({
      'opacity' : 0.5
      }, 200)
  }, function() {
    $(this).stop().animate({
      'opacity' : 1
      }, 200)
  })
});

