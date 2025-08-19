      // Select all buttons
      const buttons = document.querySelectorAll('.btnActive');

      // Add event listeners to each button
      buttons.forEach(button => {
          button.addEventListener('click', function () {
              // Reset all buttons to default outline style
              buttons.forEach(btn => {
                  btn.classList.remove('btn-primary');          // Remove active style
                  btn.classList.add('btn-outline-primary');     // Add default style
              });
              // Set the clicked button as active
              this.classList.remove('btn-outline-primary');      // Remove default style
              this.classList.add('btn-primary');                 // Add active style
          });
      });