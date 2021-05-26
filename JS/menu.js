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
