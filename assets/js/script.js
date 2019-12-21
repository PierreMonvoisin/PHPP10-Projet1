$(function(){
  // RegEx
  // \u00C0-\u00FF = All accented characters (ASCII 192 -> 255)
  var regExSimpleText = /^([a-zA-Z \u00C0-\u00FF-']{1,100})$/g;
  var regExLongText = /[a-zA-Z0-9 \u00C0-\u00FF,;.#%&'"*+/=?!`()~-]{1,250}/g;
  // Accepted format : 19/08/1998 - 19-08-98
  var regExBirthday = /^((19|20)?[0-9]{2})[-/](0[1-9]|1[012])[-/](0[1-9]|[12][0-9]|3[01])$/g;
  // Accepted format : 91  Chemin Du Lavarin Sud, 14000 CAEN, (Basse-Normandie || France)[',' optional]
  var regExAdress = /^([0-9]+[a-zA-Z]*)\ ([a-zA-Z \u00C0-\u00FF]+)\,?\ ?([0-9]{5})*\ ([a-zA-Z-\u00C0-\u00FF]{1,45})\,?\ ?([a-zA-Z-\u00C0-\u00FF]{4,74})+$/g;
  // Accepted format : monvoisin.pierre@gmail.com
  var regExMail = /^([a-zA-Z0-9\u00C0-\u00FF.!#$%&'"*+/=?^_`{|}~-]{1,64})\@([a-zA-Z0-9-]{1,25})\.([a-zA-Z]{2,15})$/g;
  // Accepted format : 06.33.59.35.74 - (+33)0633593574
  var regExPhone = /^(\+?\(?\+?[0-9]{1,3}\)?)?[./ -]?([1-9]{1}){1}[./ -]?([0-9]{2})[./ -]?([0-9]{2})[./ -]?([0-9]{2})[./ -]?([0-9]{2})$/g;
  // Only accepted format : 1234567A
  var regExPoleEmploi = /^[0-9]{7}[A-Z]{1}$/g;
  // Accepted format : www.codecademy.com/user ['https://' optional]
  var regExCodecademie = /^(https:\/\/www.)?([cC]{1}odecademy.com)\/([a-zA-Z0-9]){1,50}$/g;
  // Test for regEx
  var simpleTextTest = ['lastname', 'firstname', 'country', 'nationality'];
  var longTextTest = ['superhero', 'hackStory'];
  // Creating all var
  var validitySimpleText, validityLongText, validityBirthday, validityAdress, validityEmail, validityPhone, validityPoleEmploi, validityCodecademy;
  validitySimpleText = validityLongText = validityBirthday = validityAdress = validityEmail = validityPhone = validityPoleEmploi = validityCodecademy = false;
  // Check for validity after each press in any input
  $(':input').blur(function(){
    var inputName = $(this).attr('id');
    var inputValue = $(this).val();
    var allValidty = false;
    if (simpleTextTest.indexOf(inputName) != -1){
      validitySimpleText = regExSimpleText.test(inputValue);
    } else {
      switch(inputName) {
        case 'birthday':
        validityBirthday = regExBirthday.test(inputValue);
        break;
        case 'adress':
        validityAdress = regExAdress.test(inputValue);
        break;
        case 'email':
        validityEmail = regExMail.test(inputValue);
        break;
        case 'phone':
        validityPhone = regExPhone.test(inputValue);
        break;
        case 'poleEmploi':
        validityPoleEmploi = regExPoleEmploi.test(inputValue);
        break;
        case 'codecademy':
        validityCodecademy = regExCodecademie.test(inputValue);
        console.log(validityCodecademy + ' ' + inputValue)
        break;
        default:
        if (longTextTest.indexOf(inputName) != -1){
          validityLongText = regExLongText.test(inputValue);
          if (validityLongText != true){
            validityLongText = regExLongText.test(inputValue);
          }
        }
      }
    }
  });
  var allValidty = false;
  $('#submitButton').click(function(){
    alert(validitySimpleText + ' ' + validityLongText + ' ' + validityBirthday + ' ' + validityAdress + ' ' + validityEmail + ' ' + validityPhone + ' ' + validityPoleEmploi + ' ' + validityCodecademy)
    if (validitySimpleText && validityLongText && validityBirthday && validityAdress && validityEmail && validityPhone && validityPoleEmploi && validityCodecademy){
      allValidty = true;
      console.log('All OK !');
    }
  })
  // Need automatic scroll bottom
  $(':input').blur(function(){
    // First slide to the second
    if (($('#lastname').val()).trim() != '' && ($('#firstname').val()).trim() != '' && ($('#firstname').val()).trim() != ''){
      $('#secondSlide').slideDown('slow');
      // Second slide to the third
      var elements = document.querySelectorAll("#secondSlide input"), check = [];
      for (var i = 0; i < elements.length; i++) {
        if ((elements[i].value).trim() != ''){
          check += ['true'];
        } else {
          check += ['false'];
        }
      }
      if (check.includes('false')){
        console.log('Error');
      } else {
        $('#thirdSlide').slideDown('slow');
      }
      // Third slide to the fourth
      elements = document.querySelectorAll("#thirdSlide input"), check = [];
      for (i = 0; i < elements.length; i++) {
        if ((elements[i].value).trim() != ''){
          check += ['true'];
        } else {
          check += ['false'];
        }
      }
      if (check.includes('false')){
        console.log('Error');
      } else {
        $('#fourthSlide').slideDown('slow');
      }
      // Fourth slide to the fifth
      elements = document.querySelectorAll("#fourthSlide input"), check = [];
      for (i = 0; i < elements.length; i++) {
        if ((elements[i].value).trim() != ''){
          check += ['true'];
        } else {
          check += ['false'];
        }
      }
      if (check.includes('false')){
        console.log('Error');
      } else {
        $('#fifthSlide').slideDown('slow');
      }
    }
    if ($('#fifthSlide').is(':visible')){
      // Fifth slide to final button
      elements = document.querySelectorAll("#fifthSlide input"), check = [];
      for (i = 0; i < elements.length; i++) {
        if ((elements[i].value).trim() != ''){
          check += ['true'];
        } else {
          check += ['false'];
        }
      }
      if (check.includes('false')){
        console.log('Error');
      } else {
        $('#submitButton').slideDown('slow');
      }
    }
  })
});
