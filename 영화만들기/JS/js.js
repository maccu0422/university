let clip = document.querySelector(".col0")
clip.addEventListener("mouseover", function (e) {
  clip.play();
})
clip.addEventListener("mouseout", function (e) {
  clip.pause();
})
  function zoomIn(event) {
    event.target.style.transform = "scale(1.6)";
    event.target.style.zIndex = 1;
    event.target.style.transition = "all 0.5s";
  }

  function zoomOut(event) {
    event.target.style.transform = "scale(1)";
    event.target.style.zIndex = 0;
    event.target.style.transition = "all 0.5s";
  }
