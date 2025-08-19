
        let selectedText = null; // Store the selected text range

        // Function to highlight the selected text
        function highlightSelectedText() {
            if (!selectedText) {
                alert("Please select a word or phrase to highlight.");
                return;
            }

            // Create a span element to wrap the selected text
            const span = document.createElement("span");
            span.className = "highlight";
            selectedText.surroundContents(span); // Wrap the selected text in the span

            // Clear the selection
            window.getSelection().removeAllRanges();
            hideContextMenu();
        }

        // Function to show the context menu on right-click
        function showContextMenu(event) {
            const selection = window.getSelection();
            if (selection.toString().trim() !== "") {
                event.preventDefault(); // Prevent the default context menu
                selectedText = selection.getRangeAt(0); // Store the selected text range

                // Position the context menu at the mouse pointer
                const contextMenu = document.getElementById("contextMenu");
                contextMenu.style.display = "block";
                contextMenu.style.left = `${event.pageX}px`;
                contextMenu.style.top = `${event.pageY}px`;
            }
        }

        // Function to hide the context menu
        function hideContextMenu() {
            const contextMenu = document.getElementById("contextMenu");
            contextMenu.style.display = "none";
        }

        // Function to clear the clicked highlight
        function clearHighlight() {
            const selection = window.getSelection();
            if (selection.rangeCount > 0) {
                const range = selection.getRangeAt(0);
                const span = range.startContainer.parentElement;
                if (span.classList.contains("highlight")) {
                    const text = span.innerText;
                    span.replaceWith(text); // Replace the span with its text
                }
            }
            hideContextMenu();
        }

        // Function to clear all highlights
        function clearAllHighlights() {
            const highlightedSpans = document.querySelectorAll(".highlight");
            highlightedSpans.forEach(span => {
                const text = span.innerText;
                span.replaceWith(text); // Replace each span with its text
            });
            hideContextMenu();
        }

        // Function to take a note of the selected text
        function takeNote() {
            if (!selectedText) {
                alert("Please select a word or phrase to take a note.");
                return;
            }

            const selectedContent = selectedText.toString().trim();
            if (selectedContent === "") {
                alert("No text selected to take a note.");
                return;
            }

// Wrap selected text in green span
const span = document.createElement("span");
span.className = "note-highlight";
selectedText.surroundContents(span);

const highlightSpan = span;

            // Create a new note element
            const noteElement = document.createElement("div");
            noteElement.className = "note";

            // Add the selected text to the note
            const noteText = document.createElement("div");
            noteText.className = "note-text";
            noteText.textContent = selectedContent;
            noteElement.appendChild(noteText);

            // Add a comment input field
            const commentInput = document.createElement("input");
            commentInput.type = "text";
            commentInput.className = "comment-input";
            commentInput.placeholder = "Add a comment...";
            noteElement.appendChild(commentInput);

            // Add a button to submit the comment
            const commentButton = document.createElement("button");
            commentButton.className = "comment-button";
            commentButton.textContent = "Add Comment";
            commentButton.onclick = function () {
                addComment(noteElement, commentInput.value);
                commentInput.value = ""; // Clear the input field
            };
            noteElement.appendChild(commentButton);

const deleteButton = document.createElement("button");
deleteButton.className = "delete-button";
deleteButton.textContent = "Delete Note";
deleteButton.onclick = function () {
    // if (confirm("Are you sure you want to delete this note?")) {
        highlightSpan.replaceWith(highlightSpan.textContent);
        noteElement.remove();
    // }
};
noteElement.appendChild(deleteButton);

            // Add a comments container
            const commentsContainer = document.createElement("div");
            commentsContainer.className = "comments";
            noteElement.appendChild(commentsContainer);

            // Add the note to the notes list
            const notesList = document.getElementById("notesList");
            notesList.appendChild(noteElement);

            // Clear the selection and hide the context menu
            window.getSelection().removeAllRanges();
            hideContextMenu();
        }

        // Function to add a comment to a note
        function addComment(noteElement, commentText) {
            if (commentText.trim() === "") {
                alert("Please enter a comment.");
                return;
            }

            const commentsContainer = noteElement.querySelector(".comments");

            // Create a new comment element
            const commentElement = document.createElement("div");
            commentElement.className = "comment";
            commentElement.textContent = commentText;

            // Add the comment to the comments container
            commentsContainer.appendChild(commentElement);
        }

        // Event listeners
        document.addEventListener("contextmenu", showContextMenu); // Right-click
        document.addEventListener("click", hideContextMenu); // Hide menu on left-click
        document.getElementById("contextMenu").addEventListener("click", e => e.stopPropagation());
