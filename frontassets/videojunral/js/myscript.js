

jQuery(document).on('click','#plays', function(){

$('#myVideo').get(0).play()

         $('#plays').hide();
 $('#pause').show();
});
jQuery(document).on('click','#pause', function(){

$('#myVideo').get(0).pause();
  $('#pause').hide();
 $('#plays').show();
});



$(document).bind("contextmenu",function(ev){
    if(ev.target.nodeName=='VIDEO')
    {
        return false;
    }
});



jQuery(document).on('click','#myVideo', function(){

        if (vid.currentTime==0) {
  $('#plays').hide();
 $('#pause').show();
            this.play();
            this.controls = false; 
		
			
        }

	
});





document.getElementById('progress').addEventListener('click', function (e) {
 
     var max = $(this).width(); //Get width element
    var pos = e.pageX - $(this).offset().left; //Position cursor
    var dual = Math.round(pos / max * 100); // Round %


    if (dual > 100) {
      var dual = 100;
    }
time=Math.round(vid.duration);
times=time*dual/100;

document.getElementById('myVideo').currentTime=times;
      
});
var vid = document.getElementById("myVideo");


vid.ontimeupdate = function() {myFunction()};
var progres=document.getElementById("progress");
function myFunction() {

progress.value = vid.currentTime/vid.duration*100;
document.getElementById("pro").innerHTML = vid.currentTime;



}

  function end(){
    $('#pause').hide();
$('#plays').show();
    }

/* Get the element you want displayed in fullscreen */ 
var elem = document.getElementById("myVideo");

/* Function to open fullscreen mode */
function openFullscreen() {
 
  if (elem.requestFullscreen) {
    elem.requestFullscreen();
  } else if (elem.webkitRequestFullscreen) { /* Safari */
    elem.webkitRequestFullscreen();
  } else if (elem.msRequestFullscreen) { /* IE11 */
    elem.msRequestFullscreen();
  }
}