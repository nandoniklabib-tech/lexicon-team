
  let totalSeconds = (30 * 60) + 0;
  const countdownElement = document.getElementById('countdown');
  const startBtn = document.getElementById('fullscreenBtn2');
  let timerStarted = false;
  let timer;

  function updateCountdown() {
    const minutes = Math.floor(totalSeconds / 60);
    const seconds = totalSeconds % 60;

    const formattedTime = `${String(minutes).padStart(2, '0')} : ${String(seconds).padStart(2, '0')}`;
    countdownElement.textContent = formattedTime;

    if (totalSeconds > 0) {
      totalSeconds--;
    } else {
      clearInterval(timer);
      countdownElement.textContent = "Time's up!";
    }
  }

  startBtn.addEventListener('click', function(e) {
    e.preventDefault();

    if (!timerStarted) {
      timerStarted = true;
      updateCountdown(); // Call immediately
      timer = setInterval(updateCountdown, 1000);
    }
  });

