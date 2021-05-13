function menuslide(){
  var x = document.getElementById("menu");
  if (x.style.display === "none") {
    x.style.display = "block";
  }
  else {
        x.style.display = "none";
  }
 }


function Popup() {

  var x = document.getElementById("popup-1");
  var y = document.getElementById("menu");
    x.classList.toggle("active");
    y.style.display = "none";
}

function register()
      {
        var x=document.getElementById('login');
        var y=document.getElementById('register');
        var z=document.getElementById('btn');
        x.style.left='-400px';
        y.style.left='50px';
        z.style.left='110px';
      }
    function login()
      {
        var x=document.getElementById('login');
        var y=document.getElementById('register');
        var z=document.getElementById('btn');
        x.style.left='50px';
        y.style.left='450px';
        z.style.left='0px';
      }
