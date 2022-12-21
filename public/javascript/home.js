function copyMail(element) {
  var range, selection;

  if (document.body.createTextRange) {
    range = document.body.createTextRange();
    range.moveToElementText(element);
    range.select();
  } else if (window.getSelection) {
    selection = window.getSelection();        
    range = document.createRange();
    range.selectNodeContents(element);
    selection.removeAllRanges();
    selection.addRange(range);
  }
  
  try {
      document.execCommand('copy');
      var success = document.getElementsByClassName('displayFalse');
      setTimeout(function(){
          $(success).addClass('displayTrue');
          setTimeout(function(){
              $(success).removeClass('displayTrue');
          }, 2000)
      },1);
  }
  catch (err) {
      alert('Impossible de récupérer le texte');
  }
}