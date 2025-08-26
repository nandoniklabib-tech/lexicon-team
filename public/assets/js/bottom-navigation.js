document.addEventListener("DOMContentLoaded", function () {
    // Toggle question numbers when clicking "Part"
    document.querySelectorAll(".part-toggle").forEach(btn => {
        btn.addEventListener("click", function () {
            const partId = this.dataset.part;
            document.querySelectorAll(".question-numbers").forEach(div => div.style.display = "none");
            document.getElementById("questions-part-" + partId).style.display = "flex";
        });
    });

    // Smooth scroll to question
    document.querySelectorAll(".question-link").forEach(link => {
        link.addEventListener("click", function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute("href"));
            if (target) {
                target.scrollIntoView({ behavior: "smooth", block: "start" });
            }
        });
    });

    // Example: mark filled questions as orange
    // Suppose filled question IDs are available from backend (you can loop & add a class).
    const filledQuestions = @json($filledQuestionIds ?? []); 
    filledQuestions.forEach(id => {
        const el = document.querySelector(`.question-link[data-question='${id}']`);
        if (el) {
            el.classList.add("filled");
        }
    });
});
