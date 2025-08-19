
  // Step 1: Select all elements that have an ID starting with "q"
  const questionElements = Array.from(document.querySelectorAll('[id^="q"]'));

  // Step 2: Ensure only the main containers (not labels or sub-elements)
  // We'll filter to include only block-level elements (optional)
  const uniqueQuestionIds = [];
  questionElements.forEach(el => {
    // Avoid duplicates by checking parent chain
    if (!uniqueQuestionIds.includes(el.id)) {
      uniqueQuestionIds.push(el.id);
    }
  });

  // Step 3: Initialize index
  let currentIndex = 0;
 
  function scrollToCurrent() {
    const el = document.getElementById(uniqueQuestionIds[currentIndex]);
    if (el) {
      el.scrollIntoView({ behavior: 'smooth', block: 'center' });

      // Optional: focus on input or first radio
      const input = el.querySelector('input[type="text"], input[type="radio"]');
      if (input) input.focus();
    }
  }

  // Step 4: Navigation buttons
  document.getElementById('upBtn').addEventListener('click', function (e) {
    e.preventDefault();
    if (currentIndex > 0) {
      currentIndex--;
      scrollToCurrent();
    }
  });

  document.getElementById('downBtn').addEventListener('click', function (e) {
    e.preventDefault();
    if (currentIndex < uniqueQuestionIds.length - 1) {
      currentIndex++;
      scrollToCurrent();
    }
  });

  // Optional: Scroll to first question on load
  // scrollToCurrent();
