document.getElementById("button-up").addEventListener("click", scroolUp);

function scroolUp() {
  var currentScrool = document.documentElement.scrollTop;

  if (currentScrool > 0) {
    window.requestAnimationFrame(scroolUp);
    window.scrollTo(0, currentScrool - currentScrool / 15);
  }
}

buttonUp = document.getElementById("button-up");

window.onscroll = function () {
  var scroll = document.documentElement.scrollTop;

  if (scroll > 800) {
    buttonUp.style.transform = "scale(1)";
  } else if (scroll < 800) {
    buttonUp.style.transform = "scale(0)";
  }
};