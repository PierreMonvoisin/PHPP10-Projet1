$(function(){
  // RegEx
  // \u00C0-\u00FF = All accented characters (ASCII 192 -> 255)
  var regExName = /^([a-zA-Z \u00C0-\u00FF]{1,100})$/;
  var regExBirthday = /^(0[1-9]|[12][0-9]|3[01])[-/](0[1-9]|1[012])[-/](19|20)?[0-9]{2}$/;
  var regExAdress = /^([0-9]+[a-zA-Z]*)\ ([a-zA-Z \u00C0-\u00FF]+)\,?\ ?([0-9]{5})*\ ([a-zA-Z-\u00C0-\u00FF]{1,45})\,?\ ?([a-zA-Z-\u00C0-\u00FF]{4,74})+$/;
  var regExMail = /^[a-zA-Z0-9\u00C0-\u00FF.!#$%&'"*+/=?^_`{|}~-]{1,64}@[a-zA-Z0-9-]{1,25}\.[a-zA-Z]{2,15}$/;
  // Need automatic scroll bottom
  $('body').keydown(function(){
    if ($('#secondSlide').is(':visible')){
      if ($('#thirdSlide').is(':visible')){
        if ($('#fourthSlide').is(':visible')){
          if ($('#fifthSlide').is(':visible')){
            $('#submitButton').show();
            $('#submitButton').addClass('d-block');
          } else {
            $('#fifthSlide').slideDown('slow');
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
