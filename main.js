$(function(){
  $('.js-modal-open').on('click', function(){
    $('.js-modal').show();
    return false;
  });
  $('.js-modal-close').on('click', function(){
    $('.js-modal').hide();
    return false;
  });
});

$(function(){
  $('.js-modal-openForm').on('click', function(){
    $('.js-modalForm').show();
    return false;
  });
  $('.js-modal-closeForm').on('click', function(){
    $('.js-modalForm').hide();
    return false;
  });
});


$(function(){
$("#submit_button").click(function() { 
  $("#reviewform").submit(); 
});
});
