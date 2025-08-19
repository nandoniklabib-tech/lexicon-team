  const fullscreenIcon = document.getElementById('fullscreenIcon');
  const fullscreenTriggers = [
    document.getElementById('fullscreenBtn'),
    document.getElementById('fullscreenBtn2')
  ];

  function toggleFullscreen() {
    if (!document.fullscreenElement) {
      document.documentElement.requestFullscreen().then(() => {
        fullscreenIcon.classList.remove('fa-maximize');
        fullscreenIcon.classList.add('fa-minimize');
      });
    } else {
      document.exitFullscreen().then(() => {
        fullscreenIcon.classList.remove('fa-minimize');
        fullscreenIcon.classList.add('fa-maximize');
      });
    }
  }

  fullscreenTriggers.forEach(btn => {
    btn.addEventListener('click', function(e) {
      e.preventDefault();
      toggleFullscreen();
    });
  });

  document.addEventListener('fullscreenchange', () => {
    if (!document.fullscreenElement) {
      fullscreenIcon.classList.remove('fa-minimize');
      fullscreenIcon.classList.add('fa-maximize');
    } else {
      fullscreenIcon.classList.remove('fa-maximize');
      fullscreenIcon.classList.add('fa-minimize');
    }
  });