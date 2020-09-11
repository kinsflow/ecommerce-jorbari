$(document).ready(function() {
    hWidth = $('#anim-heading').css('width')
    wWidth = window.innerWidth
    var elem = document.getElementById("anim-heading");    
  var pos = 0;
    elem.style.left = pos  + "px"; 
  var id = setInterval(frame, 15);
  function frame() {
      
    if(wWidth < 500){
       if (pos == (wWidth-260)) {
          pos = -10
        } else {
          pos++; 
          elem.style.left = pos + "px"; 
        }  
    }else{
       if (pos == (wWidth-500)) {
          pos = 0
        } else {
          pos++; 
          elem.style.left = pos + "px"; 
        } 
    }
      
    
  }
});

function myMove() {
  
}