"use strict";

// plays the svg animation in the given object element
function playSvg(objEl) {
  if (objEl.contentDocument && objEl.contentDocument.defaultView.KeyshapeJS) {
    var ks = objEl.contentDocument.defaultView.KeyshapeJS;

    if (ks.globalState() != "running") {
      ks.globalPlay();
    }
  }
} // pauses the svg animation in the given object element


function pauseSvg(objEl) {
  if (objEl.contentDocument && objEl.contentDocument.defaultView.KeyshapeJS) {
    var ks = objEl.contentDocument.defaultView.KeyshapeJS;

    if (ks.globalState() != "idle" && ks.globalState() != "paused") {
      ks.globalPause();
    }
  }
} // checks if the element is visible, only completely visible elements return true


function isInView(objEl) {
  var margin = -200;
  var rect = objEl.getBoundingClientRect();
  return rect.top >= margin && rect.bottom <= window.innerHeight - margin;
} // starts playing animation if it is immediately visible


function playSvgIfInView(objEl) {
  if (isInView(objEl)) {
    objEl.contentDocument.defaultView.KeyshapeJS.globalPlay();
  }
}

window.addEventListener("scroll", function () {
  var els = document.querySelectorAll(".scroll-activated");

  for (var i = 0; i < els.length; i++) {
    var el = els[i];

    if (isInView(el)) {
      playSvg(el);
    } else {
      pauseSvg(el);
    }
  }
}, false);
/*-------Preloader--------*/

document.onreadystatechange = function () {
  if (document.readyState !== "complete") {
    document.querySelector("body").style.visibility = "hidden";
    document.querySelector("#loader").style.visibility = "visible";
  } else {
    document.querySelector("#loader").style.display = "none";
    document.querySelector("body").style.visibility = "visible";
  }
};