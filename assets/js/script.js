$(function(){
  // RegEx
  // \u00C0-\u00FF = All accented characters (ASCII 192 -> 255)
  var regExName = /^[a-zA-Z \u00C0-\u00FF]{1,100}$/;
  // Not finished yet
  var regExMail = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@$/;
  // Need automatic scroll bottom
  $('body').keydown(function(){
    if ($('#secondSlide').is(':visible')){
      if ($('#thirdSlide').is(':visible')){
        if ($('#fourthSlide').is(':visible')){
          if ($('#fourthSlide').is(':visible')){
            $('#submitButton').show();
            $('#submitButton').addClass('d-block');
          } else {
            $('#fourthSlide').slideDown('slow');
          }
        } else {
          $('#fourthSlide').slideDown('slow');
        }
      } else {
        $('#thirdSlide').slideDown('slow');
      }
    } else {
      $('#secondSlide').slideDown('slow');
    }
  });
});
