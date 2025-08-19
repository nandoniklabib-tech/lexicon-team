

// LEFT RIGHT START 
  document.querySelectorAll('.split-container').forEach(container => {
    const divider = container.querySelector('.divider');
    const leftPanel = container.querySelector('.left-panel');
    const rightPanel = container.querySelector('.right-panel');

    let isDragging = false;

    // Mouse events
    divider.addEventListener('mousedown', e => {
      isDragging = true;
      document.body.style.cursor = 'col-resize';
      e.preventDefault();
    });

    document.addEventListener('mouseup', () => {
      isDragging = false;
      document.body.style.cursor = '';
    });

    document.addEventListener('mousemove', e => {
      if (!isDragging || window.innerWidth <= 768) return;
      resizePanels(e.clientX);
    });

    // Touch events
    divider.addEventListener('touchstart', e => {
      isDragging = true;
      e.preventDefault();
    });

    document.addEventListener('touchend', () => {
      isDragging = false;
    });

    document.addEventListener('touchmove', e => {
      if (!isDragging || window.innerWidth <= 768) return;
      const touch = e.touches[0];
      resizePanels(touch.clientX);
    });

    function resizePanels(clientX) {
      const containerOffsetLeft = container.offsetLeft;
      const pointerRelativeX = clientX - containerOffsetLeft;
      const containerWidth = container.offsetWidth;

      const leftWidth = (pointerRelativeX / containerWidth) * 100;
      const rightWidth = 100 - leftWidth;

      if (leftWidth >= 10 && rightWidth >= 10) {
        leftPanel.style.width = `${leftWidth}%`;
        rightPanel.style.width = `${rightWidth}%`;
      }
    }
  });
// LEFT RIGHT END   
  
  
  
  
  