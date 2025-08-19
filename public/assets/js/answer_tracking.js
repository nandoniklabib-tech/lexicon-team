
document.addEventListener("DOMContentLoaded", function () {
      // Find all radio buttons
      const allRadios = document.querySelectorAll('input[type="radio"]');

      // On change event for any radio
      allRadios.forEach(radio => {
          radio.addEventListener('change', function () {
              const name = this.name; // e.g., "answer1"

              // Find the related nav button
              const navButton = document.querySelector(`.question-nav[data-question="${name}"]`);

              if (navButton) {
                  // Change button style to indicate answered
                  navButton.classList.remove('btn-outline-sidebtn');
                  navButton.classList.add('btn-sidebtn');
              }
          });
      });
});

document.addEventListener("DOMContentLoaded", function () {
      // === Handle radio inputs ===
      const allRadios = document.querySelectorAll('input[type="radio"]');
      allRadios.forEach(radio => {
          radio.addEventListener('change', function () {
              const name = this.name;
              const navButton = document.querySelector(`.question-nav[data-question="${name}"]`);
              if (navButton) {
                  navButton.classList.remove('btn-outline-sidebtn');
                  navButton.classList.add('btn-sidebtn');
              }
          });
      });

      // === Handle text inputs ===
      const allTextInputs = document.querySelectorAll('input[type="text"][data-track]');
      allTextInputs.forEach(input => {
          input.addEventListener('input', function () {
              const q = this.dataset.track;
              const navButton = document.querySelector(`.question-nav[data-question="${q}"]`);
              if (navButton) {
                  if (this.value.trim() !== '') {
                      navButton.classList.remove('btn-outline-sidebtn');
                      navButton.classList.add('btn-sidebtn');
                  } else {
                      navButton.classList.remove('btn-sidebtn');
                      navButton.classList.add('btn-outline-sidebtn');
                  }
              }
          });
      });
});

document.addEventListener("DOMContentLoaded", function () {
    // === Handle select inputs ===
    const allSelects = document.querySelectorAll('select[data-track]');
    allSelects.forEach(select => {
        select.addEventListener('change', function () {
            const q = this.dataset.track;
            const navButton = document.querySelector(`.question-nav[data-question="${q}"]`);
            if (navButton) {
                if (this.value.trim() !== '') {
                    navButton.classList.remove('btn-outline-sidebtn');
                    navButton.classList.add('btn-sidebtn');
                } else {
                    navButton.classList.remove('btn-sidebtn');
                    navButton.classList.add('btn-outline-sidebtn');
                }
            }
        });
    });
});

document.addEventListener("DOMContentLoaded", function () {
    // === Handle textarea inputs ===
    const allTextAreas = document.querySelectorAll('textarea[data-track]');
    allTextAreas.forEach(textarea => {
        textarea.addEventListener('input', function () {
            const q = this.dataset.track;
            const navButton = document.querySelector(`.question-nav[data-question="${q}"]`);
            if (navButton) {
                if (this.value.trim() !== '') {
                    navButton.classList.remove('btn-outline-sidebtn');
                    navButton.classList.add('btn-sidebtn');
                } else {
                    navButton.classList.remove('btn-sidebtn');
                    navButton.classList.add('btn-outline-sidebtn');
                }
            }
        });
    });
});
