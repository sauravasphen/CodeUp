function menuslide(){
  var menu = document.getElementById("menu");
  if (menu.style.display === "none") {
    menu.style.display = "block";
  }
  else {
        menu.style.display = "none";
  }
 }


function Popup() {

  var x = document.getElementById("popup-1");
    x.classList.toggle("active");
}


function user()
      {
        var w=document.getElementById('user');
        var x=document.getElementById('company');
        var y=document.getElementById('admin');
        var z=document.getElementById('btn');
        w.style.left='32px';
        x.style.left='432px';
        y.style.left='832px';
        z.style.left='0px';
      }

function company()
      {
        var w=document.getElementById('user');
        var x=document.getElementById('company');
        var y=document.getElementById('admin');
        var z=document.getElementById('btn');
        w.style.left='-382px';
        x.style.left='32px';
        y.style.left='432px';
        z.style.left='105px';
      }

function admin()
      {
        var w=document.getElementById('user');
        var x=document.getElementById('company');
        var y=document.getElementById('admin');
        var z=document.getElementById('btn');
        w.style.left='-710px';
        x.style.left='-340px';
        y.style.left='35px';
        z.style.left='222px';
      }
