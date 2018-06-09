function copyToClipboard(element) {
  var $temp = $("<input>");
  $("body").append($temp);
  $temp.val($(element).text()).select();
  document.execCommand("copy");
  $temp.remove();
  $('.copyToClipboard').text('Copied');
  setTimeout(explode, 2500);
}

function explode(){
  $('.copyToClipboard').text('Copy');
}
