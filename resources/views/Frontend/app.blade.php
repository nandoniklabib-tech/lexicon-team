<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="{{asset('images/settings/'.$setting->favicon)}}" type="image/x-icon">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<!--toastr css-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style> .toast.toast-success, .toast.toast-error{ opacity: 1 !important; } </style>


<style>
    label{ font-weight:500; }
    
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
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm sticky-top">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
  
                        <!-- Authentication Links -->
                                <li class="nav-item">
                                    <a class="nav-link {{'/'==request()->path()?'active':''}}" href="{{ url('/') }}">{{ __('Home') }}</a>
                                </li>
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link {{'login'==request()->path()?'active':''}}" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <!--<li class="nav-item">-->
                                <!--    <a class="nav-link {{'register'==request()->path()?'active':''}}" href="{{ route('register') }}">{{ __('Register') }}</a>-->
                                <!--</li>-->
                            @endif
                        @else
                        
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('dashboard') }}">{{ __('Dashboard') }}</a>
                            </li>                    
                        
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4" id="myParagraph">
            @yield('content')
        </main>
    </div>
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    
<!--ajax js-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!--toastr js-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    @if(Session::has('success'))
        toastr.options={ "closeButton":true, "progressBar":true, }
        toastr.success("{{ session('success')}}")
    @endif
    @if(Session::has('warning'))
        toastr.options={ "closeButton":true, "progressBar":true, }
        toastr.warning("{{ session('warning')}}")
    @endif
    @if(Session::has('error'))
        toastr.options={ "closeButton":true, "progressBar":true, }
        toastr.error("{{ session('error')}}")
    @endif
</script>



    <!-- Context menu for highlight, clear, and take note options -->
    <div id="contextMenu">
        <button onclick="highlightSelectedText()">Highlight</button>
        <button onclick="clearHighlight()">Clear</button>
        <button onclick="clearAllHighlights()">Clear All</button>
        <button onclick="takeNote()">Take Note</button>
    </div>

    <!-- Notes section -->
    <!--<div id="notesSection">-->
    <!--    <h3>Notes</h3>-->
    <!--    <div id="notesList"></div>-->
    <!--</div>-->

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