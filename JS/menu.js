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
        z.style.left='214px';
      }
