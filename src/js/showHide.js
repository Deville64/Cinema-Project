'use strict'

function showHide(id) {
  var show = document.getElementById(id);
  var hide = document.getElementsByClassName("hide");

  if (document.getElementById(id)) {
    for (var i = 0; i < hide.length; i++) {
      hide[i].style.display = "none";
    }

    show.style.display = "inline-block";
  }
  return false;
}