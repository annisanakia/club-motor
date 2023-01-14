function menuTopBar() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav container py-2") {
      x.className += " responsive";
    } else {
      x.className = "topnav container py-2";
    }
}