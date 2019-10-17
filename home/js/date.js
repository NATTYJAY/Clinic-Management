$(document).ready(function(){
inputdate = $("#symptoms");
sendnow();
})


function dsti(){
  date_e = inputdate.val();
  uri = encodeURIComponent(date_e);
  eurl = "/home/date_range.php?pid="+uri;
  location.assign(eurl);
}
function sendnow(){
          
             $.fn.enterKey = function (fnc) {
                return this.each(function () {
                   $(this).keypress(function (ev) {
                  var keycode = (ev.keyCode ? ev.keyCode : ev.which);
                  if (keycode == '13') {
                  fnc.call(this, ev);
                  }
                })
              })
            }
        inputdate.enterKey(function (){
            dsti();
        });
        $("#checker").on('click', function(){
        	dsti();
        });
	}