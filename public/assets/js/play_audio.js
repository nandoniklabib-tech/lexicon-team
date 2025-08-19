  const testAudio = document.getElementById("testAudio");

  document.getElementById("fullscreenBtn2").addEventListener("click", function (e) {
    e.preventDefault();
    testAudio.play();
  });