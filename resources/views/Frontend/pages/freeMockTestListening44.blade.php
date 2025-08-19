@extends('Frontend.app')

@section('content')
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

<form action="{{url('free-mock-test-listening-store')}}" method="post"> @csrf
<div class="container" id="myParagraph">
    <div class="row justify-content-center mb-3">
        <div class="col-md-6 mb-md-0 mb-4">
            <a href="{{url('free-mock-test')}}" class="btn btn-dark ps-1 pe-2 py-0"><i class="bi bi-arrow-left-short"></i> Back</a>
            <button type="submit" class="btn btn-success ms-3 px-2 py-0 fw-bold">FINISH 2</button>
        </div>
        <div class="col-md-6 text-end">
            <ul class="nav nav-pills mb-3 justify-content-md-end justify-content-center" id="pills-tab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link px-2 py-0 active" id="pills-one-tab" data-bs-toggle="pill" data-bs-target="#pills-one" type="button" role="tab" aria-controls="pills-one" aria-selected="true">Section 1</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link px-2 py-0" id="pills-two-tab" data-bs-toggle="pill" data-bs-target="#pills-two" type="button" role="tab" aria-controls="pills-two" aria-selected="false">Section 2</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link px-2 py-0" id="pills-three-tab" data-bs-toggle="pill" data-bs-target="#pills-three" type="button" role="tab" aria-controls="pills-three" aria-selected="false">Section 3</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link px-2 py-0" id="pills-four-tab" data-bs-toggle="pill" data-bs-target="#pills-four" type="button" role="tab" aria-controls="pills-four" aria-selected="false">Section 4</button>
              </li>
            </ul>
        </div>
    </div>
    
    
    <div class="row justify-content-center mb-3">
        <div class="col-md-12">

            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-one" role="tabpanel" aria-labelledby="pills-one-tab" tabindex="0">
                <div class="row justify-content-center mb-3">
                   
        <div class="col-md-12 mb-2">
            <h4 class="">SECTION 1</h4>
            <h5>Questions 1-5</h5>
            <p class="mb-0">Complete the sentences.</p>
            <p class="mb-0">Write <b>NO MORE THAN TWO WORDS</b> for each answer.</p>
        </div>
        <div class="col-md-12 mb-2">
            <p>Peter consumes far too much <input type="text" value="soft drink" disabled></p>
            <p>Peter and Mary's diet will be both sensible and 1 <input type="text" name="answer1"></p>
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
            <table class="table table-bordered" style="border:1px solid black">
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
              <div class="tab-pane fade" id="pills-two" role="tabpanel" aria-labelledby="pills-two-tab" tabindex="0">
                <div class="row justify-content-center mb-3">
                  
        <div class="col-md-12 mb-2">
            <h4 class="">SECTION 2</h4>
            <h5>Questions 17-20</h5>
            <p class="mb-0">Choose the correct letter, <b>A, B, or C</b>.</p>
            <p class="mb-0">NB You may use a letter more than once.</p>
        </div>
        <div class="col-md-12 mb-2">
            <p class="">
                <b>17</b> has her own children? 
                <select name="answer17">
                    <option value="" hidden></option>
                    <option value="A. Andrea">A. Andrea</option>
                    <option value="B. Bella">B. Bella</option>
                    <option value="C. Cathy">C. Cathy</option>
                </select>
            </p>
            <p class="">
                <b>18</b> often sleeps at the center? 
                <select name="answer18">
                    <option value="" hidden></option>
                    <option value="A. Andrea">A. Andrea</option>
                    <option value="B. Bella">B. Bella</option>
                    <option value="C. Cathy">C. Cathy</option>
                </select>
            </p>
            <p class="">
                <b>19</b> is good with shy children? 
                <select name="answer19">
                    <option value="" hidden></option>
                    <option value="A. Andrea">A. Andrea</option>
                    <option value="B. Bella">B. Bella</option>
                    <option value="C. Cathy">C. Cathy</option>
                </select>
            </p>
            <p class="">
                <b>20</b> is a good cook? 
                <select name="answer20">
                    <option value="" hidden></option>
                    <option value="A. Andrea">A. Andrea</option>
                    <option value="B. Bella">B. Bella</option>
                    <option value="C. Cathy">C. Cathy</option>
                </select>
            </p>
        </div>
                    
                </div>
              </div>
              <div class="tab-pane fade" id="pills-three" role="tabpanel" aria-labelledby="pills-three-tab" tabindex="0">
                <div class="row justify-content-center mb-3">
                   
        <div class="col-md-12 mb-2">
            <h4 class="">SECTION 3</h4>
            <h5>Questions 21-25</h5>
            <p class="mb-0">Complete the flowchart.</p>
            <p class="mb-0">Write <b>ONE WORD ONLY</b> for each answer.</p>
        </div>
        <div class="col-md-12 mb-2 text-center">
            <h4 class="">Foundation for Essay Writing</h4>
            <p class="">Decide on <b>21</b> <input type="text" name="answer21"> you like.</p>
            <p class=""><i class="bi bi-arrow-down"></i></p>
            <p class="">Focus on <b>22</b> <input type="text" name="answer22"> area of interest.</p>
            <p class=""><i class="bi bi-arrow-down"></i></p>
            <p class="">Write <b>23</b> <input type="text" name="answer23"> statement.</p>
            <p class=""><i class="bi bi-arrow-down"></i></p>
            <p class="">Create <b>24</b> <input type="text" name="answer24"></p>
            <p class=""><i class="bi bi-arrow-down"></i></p>
            <p class="">Ensure this <b>25</b> <input type="text" name="answer25"> clearly.</p>
        </div>
        <div class="col-md-12 mb-2">
            <h5>Questions 26-30</h5>
            <p class="mb-0">Complete the summary.</p>
            <p class="mb-0">Write <b>NO MORE THAN TWO WORDS OR A NUMBER</b> for each answer.</p>
        </div>
        <div class="col-md-12 mb-2">
            <p class="">There are several 26 <input type="text" name="answer26"> involved in producing a good essay. The writer must think independently and give 27 <input type="text" name="answer27"> examples as support, each one with a reference (which is a 28 <input type="text" name="answer28">). The formatting must follow the 29 <input type="text" name="answer29"> issued by the university, as well as the word count decided by the lecturer, although it can vary by 30 <input type="text" name="answer30"></p>
        </div>
                    
                </div>
              </div>
              <div class="tab-pane fade" id="pills-four" role="tabpanel" aria-labelledby="pills-four-tab" tabindex="0">
                <div class="row justify-content-center mb-3">
                    
        <div class="col-md-12 mb-2">
            <h4 class="">SECTION 4</h4>
            <h5>Questions 31-33</h5>
            <p class="mb-0">Choose the correct letter, <b>A, B, or C</b>.</p>
        </div>
        <div class="col-md-12 mb-2">
            <p><b>31</b> Geocentrism</p>
            <div class="ps-4">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="answer31" id="311" value="A. has a long history.">
                  <label class="form-check-label" for="311">
                    A. <span class="fw-normal">has a long history.</span>
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="answer31" id="312" value="B. is similar to heliocentrism.">
                  <label class="form-check-label" for="312">
                    B. <span class="fw-normal">is similar to heliocentrism.</span>
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="answer31" id="313" value="C. took some time to be deduced.">
                  <label class="form-check-label" for="313">
                    C. <span class="fw-normal">took some time to be deduced.</span>
                  </label>
                </div>
            </div>
        </div>
        <div class="col-md-12 mb-2">
            <p><b>32</b> Heliocentrism</p>
            <div class="ps-4">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="answer32" id="321" value="A. was realised only recently..">
                  <label class="form-check-label" for="321">
                    A. <span class="fw-normal">was realised only recently..</span>
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="answer32" id="322" value="B. was not generally accepted..">
                  <label class="form-check-label" for="322">
                    B. <span class="fw-normal">was not generally accepted..</span>
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="answer32" id="323" value="C. fitted the views of the church..">
                  <label class="form-check-label" for="323">
                    C. <span class="fw-normal">fitted the views of the church..</span>
                  </label>
                </div>
            </div>
        </div>
        <div class="col-md-12 mb-2">
            <p><b>33</b> The night sky</p>
            <div class="ps-4">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="answer33" id="331" value="A. is relatively simple..">
                  <label class="form-check-label" for="331">
                    A. <span class="fw-normal">is relatively simple..</span>
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="answer33" id="332" value="B. remains basically the same..">
                  <label class="form-check-label" for="332">
                    B. <span class="fw-normal">remains basically the same..</span>
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="answer33" id="333" value="C. was once used for navigation..">
                  <label class="form-check-label" for="333">
                    C. <span class="fw-normal">was once used for navigation..</span>
                  </label>
                </div>
            </div>
        </div>
        <div class="col-md-12 mb-2">
            <h5>Questions 34-40</h5>
            <p class="mb-0">Complete the notes.</p>
            <p class="mb-0">Write <b>ONE WORD OR A NUMBER</b> for each answer.</p>
        </div>
        <div class="col-md-12 mb-2">
            <div class="table-responsive">
            <table class="table table-bordered" style="border:1px solid black">
              <tbody>
                <tr>
                  <td class="fw-bold text-nowrap">Nicolaus Copernicus</td>
                  <td>started the Copernican 34 <input type="text" name="answer34"> his book published the year he was 35 <input type="text" name="answer35"> and then passed away This book generated little 36 <input type="text" name="answer36"></td>
                </tr>
                <tr>
                  <td class="fw-bold text-nowrap">Other scientists</td>
                  <td>Galileo was persecuted. 37 <input type="text" name="answer37"> was killed. even the sun believed to be in 38 <input type="text" name="answer38"></td>
                </tr>
                <tr>
                  <td class="fw-bold text-nowrap">Modern geocentrism</td>
                  <td>based on the 39 <input type="text" name="answer39"> Believers also support creationism. 40 <input type="text" name="answer40"> of Americans believe in this.</td>
                </tr>
              </tbody>
            </table>
            </div>
        </div>
                    
                </div>
              </div>
            </div>
        </div>
    </div>
    
    <div class="row justify-content-center mb-3">
        
        

        
        
        

        
        
        

        
        
        

        
        
        

        
        
        
        
        <div class="col-md-12 mb-2"></div>
    </div>
    <!--<div class="row justify-content-center">-->
    <!--    <div class="col-md-12 text-center">-->
    <!--        <button type="submit" class="btn btn-success px-5 fw-bold">FINISH</button>-->
    <!--    </div>-->
    <!--</div>-->
    
</div>
</form>

    <!-- Context menu for highlight, clear, and take note options -->
    <div id="contextMenu">
        <button onclick="highlightSelectedText()">Highlight</button>
        <button onclick="clearHighlight()">Clear</button>
        <button onclick="clearAllHighlights()">Clear All</button>
        <button onclick="takeNote()">Take Note</button>
    </div>


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

@endsection
