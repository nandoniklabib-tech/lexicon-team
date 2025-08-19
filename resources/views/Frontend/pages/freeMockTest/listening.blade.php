<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IELTS - Listening</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="./main.css">

    <style>
        .form-check-input:focus {
          border-color: #86b7fe;
          outline: 0;
          box-shadow: none;
        }
    </style>


    <style>
        .highlight {
            background-color: yellow; /* Highlight color */
        }

        /* Context menu styling */
        #contextMenu {
            position: absolute;
            background-color: white;
            border: 1px solid #ccc;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
            padding: 5px;
            display: none;
        }

        #contextMenu button {
            display: block;
            width: 100%;
            padding: 5px;
            text-align: left;
            border: none;
            background: none;
            cursor: pointer;
        }

        #contextMenu button:hover {
            background-color: #f0f0f0;
        }

        /* Notes section styling */
        #notesSection {
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            background-color: #f9f9f9;
        }

        #notesSection h3 {
            margin-top: 0;
        }

        .note {
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ddd;
            background-color: #fff;
        }

        .note .note-text {
            font-weight: bold;
            margin-bottom: 10px;
        }

        .note .comment-input {
            width: 100%;
            padding: 5px;
            margin-bottom: 5px;
            border: 1px solid #ccc;
        }

        .note .comment-button {
            padding: 5px 10px;
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }

        .note .comment-button:hover {
            background-color: #0056b3;
        }

        .note .comments {
            margin-top: 10px;
        }

        .note .comment {
            padding: 5px;
            border-bottom: 1px solid #eee;
            background-color: #ffffffb7;
        }
    </style>


  </head>
  <body class="">
      
          <!-- Context menu for highlight, clear, and take note options -->
    <div id="contextMenu">
        <button onclick="highlightSelectedText()">Highlight</button>
        <button onclick="clearHighlight()">Clear</button>
        <button onclick="clearAllHighlights()">Clear All</button>
        <button onclick="takeNote()">Take Note</button>
    </div>
    
<form action="{{url('free-mock-test-listening-store')}}" method="post"> @csrf
    <section class="" style="background-color: rgb(255, 221, 221); border-bottom: 1px solid black;">
      <div class="container-fluid">
        <div class="row align-items-center py-2">
          <div class="col-md-6">
            <span class="fw-bold">{{Auth::user()->name}}</span> <br>
            30 minuties remaining
            <i class="bi bi-volume-up ps-5"></i> Audio is playing
          </div>
          <div class="col-md-6">
            <div class="d-flex justify-content-end"> 
              <button type="submit" class="btn btn-outline-dark">Finish test</button>
              <i class="bi bi-wifi fs-3 ps-3"></i>
              <i class="bi bi-bell fs-3 ps-3"></i>
              <i class="bi bi-list fs-3 ps-3"></i>
              <i class="bi bi-pencil-square fs-3 ps-3"></i>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="" id="myParagraph">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="tab-content" id="pills-tabContent" style="height:75vh;">

              <div class="tab-pane fade show active" id="pills-p1" role="tabpanel" aria-labelledby="pills-p1-tab" tabindex="0">

                <div class="row mb-1">
                  <div class="col-12">
                    <a href="#s1" class="btn btn-outline-primary btnActive">1</a>
                    <a href="#s2" class="btn btn-outline-primary btnActive">2</a>
                    <a href="#s3" class="btn btn-outline-primary btnActive">3</a>
                    <a href="#s4" class="btn btn-outline-primary btnActive">4</a>
                    <a href="#s5" class="btn btn-outline-primary btnActive">5</a>
                    <a href="#s6" class="btn btn-outline-primary btnActive">6</a>
                    <a href="#s7" class="btn btn-outline-primary btnActive">7</a>
                    <a href="#s8" class="btn btn-outline-primary btnActive">8</a>
                    <a href="#s9" class="btn btn-outline-primary btnActive">9</a>
                    <a href="#s10" class="btn btn-outline-primary btnActive">10</a>
                  </div>
                </div>
                <div class="container" style="max-height: 400px; overflow: scroll;">

                  <div class="row">
                    <div class="col-12">
                      <div class="card bg-light p-3">
                      <h5>Questions 1-5</h5>
            <p class="mb-0">Complete the sentences.</p>
            <p class="mb-0">Write <b>NO MORE THAN TWO WORDS</b> for each answer.</p>
                      </div>
                    </div>                  
        <div class="col-md-12 mb-2">
            <p>Peter consumes far too much <input type="text" value="soft drink" disabled></p>
            <p id="s1">Peter and Mary's diet will be both sensible and 1 <input type="text" name="answer1"></p>
            <p>Every two months, they can eat 2 <input type="text" name="answer2"></p>
            <p>On Saturdays, they will go 3 <input type="text" name="answer3"></p>
            <p>This coming Saturday, they will go to 4 <input type="text" name="answer4"></p>
            <p>In every meal, there will be 5 <input type="text" name="answer5"></p>
        </div>
        <div class="col-md-12 mb-2">
            <h5>Questions 6-10</h5>
            <p class="mb-0">Choose the correct letter, <b>C, I, or B</b>.</p>
        </div>
        <div class="col-md-12 mb-2">
            <div class="table-responsive">
            <table id="s10" class="table table-bordered" style="border:1px solid black">
              <tbody>
                <tr>
                  <td class="fw-bold text-nowrap"></td>
                  <td class="fw-bold text-nowrap">Peter's opinion</td>
                  <td class="fw-bold text-nowrap">Mary's opinion</td>
                </tr>
                <tr>
                  <td class="fw-bold text-nowrap">Tuesdays</td>
                  <td class="">B</td>
                  <td class="">6 <input type="text" name="answer6"></td>
                </tr>
                <tr>
                  <td class="fw-bold text-nowrap">Thursdays</td>
                  <td class="">7 <input type="text" name="answer7"></td>
                  <td class="">8 <input type="text" name="answer8"></td>
                </tr>
                <tr>
                  <td class="fw-bold text-nowrap">Sundays</td>
                  <td class="">9 <input type="text" name="answer9"></td>
                  <td class="">10 <input type="text" name="answer10"></td>
                </tr>
              </tbody>
            </table>
            </div>
        </div>
        <div class="col-md-12 mb-2">
            <p class="mb-0"><b>C</b> Chocolate</p>
            <p class="mb-0"><b>I</b> Ice cream</p>
            <p class="mb-0"><b>B</b> Biscuits</p>
        </div>
                  </div>

                </div>


              </div>
              <div class="tab-pane fade" id="pills-p2" role="tabpanel" aria-labelledby="pills-p2-tab" tabindex="0">

                <div class="container">
                  <div class="row">
                    <div class="col-12">
                      <div class="card bg-light p-3">
                        <h3>Part 2</h3>
                        <span>Listen and answer questions 11 - 20.</span>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
              <div class="tab-pane fade" id="pills-p3" role="tabpanel" aria-labelledby="pills-p3-tab" tabindex="0">

                <div class="container">
                  <div class="row">
                    <div class="col-12">
                      <div class="card bg-light p-3">
                        <h3>Part 3</h3>
                        <span>Listen and answer questions 21 - 30.</span>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
              <div class="tab-pane fade" id="pills-p4" role="tabpanel" aria-labelledby="pills-p4-tab" tabindex="0">

                <div class="container">
                  <div class="row">
                    <div class="col-12">
                      <div class="card bg-light p-3">
                        <h3>Part 4</h3>
                        <span>Listen and answer questions 31 - 40.</span>
                      </div>
                    </div>
                  </div>
                </div>

              </div>

            </div>
            <ul class="nav nav-pills py-2 sticky-top bg-white" id="pills-tab" role="tablist">

              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-p1-tab" data-bs-toggle="pill" data-bs-target="#pills-p1" type="button" role="tab" aria-controls="pills-p1" aria-selected="true">Part 1 [1-10]</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-p2-tab" data-bs-toggle="pill" data-bs-target="#pills-p2" type="button" role="tab" aria-controls="pills-p2" aria-selected="false">Part 2 [11-20]</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-p3-tab" data-bs-toggle="pill" data-bs-target="#pills-p3" type="button" role="tab" aria-controls="pills-p3" aria-selected="false">Part 3 [21-30]</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-p4-tab" data-bs-toggle="pill" data-bs-target="#pills-p4" type="button" role="tab" aria-controls="pills-p4" aria-selected="false">Part 4 [31-40]</button>
              </li>
              
            </ul>
          </div>
        </div>
      </div>
    </section>
</form>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  
    <script>
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
  </script>
  
  
  
    <script>
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
    </script>

  
  </body>
</html>