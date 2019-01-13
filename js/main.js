
// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

// this shows more text on aboutUs.php
function showMore() {
  if (document.getElementById("showHide").style.display == "none") {
    document.getElementById("showHide").style.display = "block"
  }
}
// this also trigger jquery method that switch between the show more/show less buttons

// this shows less text on aboutUs.php
function showless() {
  if (document.getElementById("showHide").style.display == "block") {
    document.getElementById("showHide").style.display = "none"
  }
}
// this also trigger jquery method that switch between the show more/show less buttons
