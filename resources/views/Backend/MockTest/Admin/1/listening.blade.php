<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LEXICON - IELTS - Listening</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>


<body>
    <form action="" method="" class="afterSubmitForm">
        @csrf
        <!-- TOP BAR -->
        <section class="p-2 bg-light border-bottom">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <strong>{{ session('mocktest.name') }}</strong> |
                    <span id="countdown">30:00</span> remaining
                </div>
                <div class="d-flex gap-2">
                    {{-- <a href="{{ route('admin.reading.show', $mockTest->id) }}" class="btn btn-sm btn-primary">
                        Go to Reading
                    </a> --}}
                    <a href="" class="btn btn-sm btn-primary">
                        Go to Reading
                    </a>
                    <button type="submit" class="btn btn-sm btn-dark afterSubmitBtn">Finish Test</button>
                </div>
            </div>
        </section>


        <!-- QUESTION SECTIONS -->
        <section class="p-3" style="height:80vh; overflow-y:auto;">
            <div class="tab-content" id="pills-tabContent">

                {{-- Dynamically generate tabs for each questionGroup --}}
                @php $firstGroup = true; @endphp
                @foreach ($mockTest->sections as $section)
                    @if ($section->name === 'Listening')
                        @foreach ($section->questionGroups as $index => $group)
                            <div class="tab-pane fade {{ $firstGroup ? 'show active' : '' }}"
                                id="part{{ $index + 1 }}" role="tabpanel">
                                <h3 class="mb-4">Part {{ $index + 1 }}</h3>

                                <div class="card mb-4">
                                    <div class="card-header">
                                        <strong>{{ $group->title }}</strong>
                                    </div>
                                    <div class="card-body">

                                        {{-- TABLE rendering (row/col meta_data type="table") --}}
                                        @php
                                            $rows = [];
                                            foreach ($group->questions as $q) {
                                                if (isset($q->meta_data['row'], $q->meta_data['col'])) {
                                                    $rows[$q->meta_data['row']][$q->meta_data['col']] = $q;
                                                }
                                            }
                                            ksort($rows);
                                        @endphp

                                        @if (!empty($rows))
                                            <table class="table table-bordered text-left align-middle">
                                                @foreach ($rows as $row)
                                                    <tr>
                                                        @for ($col = 1; $col <= max(array_keys($row)); $col++)
                                                            <td>
                                                                @if (isset($row[$col]))
                                                                    @php $question = $row[$col]; @endphp

                                                                    {{-- static inside table --}}
                                                                    @if ($question->type === 'others')
                                                                        {{ $question->text }}

                                                                        {{-- fill in blank inside table --}}
                                                                    @elseif ($question->type === 'fill_blank')
                                                                        <input type="text" class="form-control"
                                                                            name="question_{{ $question->id }}"
                                                                            placeholder="Answer">
                                                                    @elseif ($question->type === 'mcq')
                                                                        @foreach ($question->options as $option)
                                                                            <div>
                                                                                <input type="radio"
                                                                                    name="question_{{ $question->id }}"
                                                                                    value="{{ $option->id }}">
                                                                                {{ $option->text }}
                                                                            </div>
                                                                        @endforeach
                                                                    @endif
                                                                @endif
                                                            </td>
                                                        @endfor
                                                    </tr>
                                                @endforeach
                                            </table>
                                        @endif

                                        {{-- Render all other question types --}}
                                        @foreach ($group->questions as $question)
                                            <div class="mb-3">

                                                {{-- MCQ --}}
                                                @if ($question->type === 'mcq')
                                                    <p class="fw-bold">
                                                        Q{{ $question->question_no }} :
                                                        {{ $question->text }}
                                                    </p>
                                                    @if (!empty($question->meta_data['image']))
                                                        <div class="text-left mb-3">
                                                            <img src="{{ $question->meta_data['image'] }}"
                                                                alt="Question Image" class="img-fluid"
                                                                style="max-height: 300px;">
                                                        </div>
                                                    @endif
                                                    @foreach ($question->options as $option)
                                                        <div>
                                                            <input type="radio" name="question_{{ $question->id }}"
                                                                value="{{ $option->id }}">
                                                            {{ $option->text }}
                                                        </div>
                                                    @endforeach

                                                    {{-- Fill in The Blanks --}}
                                                @elseif ($question->type === 'fill_blank' && empty($question->meta_data['row']))
                                                    <p class="">
                                                        Q{{ $question->question_no }} :
                                                        {!! $question->text !!}
                                                    </p>
                                                    <input type="hidden" class="form-control w-50"
                                                        name="question_{{ $question->id }}" placeholder="Answer here">

                                                    {{-- Multi Select --}}
                                                @elseif ($question->type === 'multi_select')
                                                    <select name="question_{{ $question->id }}[]"
                                                        class="form-select w-50" multiple>
                                                        @foreach ($question->options as $option)
                                                            <option value="{{ $option->id }}">
                                                                {{ $option->text }}</option>
                                                        @endforeach
                                                    </select>

                                                    {{-- Select --}}
                                                @elseif ($question->type === 'select')
                                                    <select name="question_{{ $question->id }}"
                                                        class="form-select w-50">
                                                        <option value="">-- Choose --</option>
                                                        @foreach ($question->options as $option)
                                                            <option value="{{ $option->id }}">
                                                                {{ $option->text }}</option>
                                                        @endforeach
                                                    </select>

                                                    {{-- CheckBox --}}
                                                @elseif ($question->type === 'checkbox')
                                                    @foreach ($question->options as $option)
                                                        <div>
                                                            <input type="checkbox"
                                                                name="question_{{ $question->id }}[]"
                                                                value="{{ $option->id }}">
                                                            {{ $option->text }}
                                                        </div>
                                                    @endforeach

                                                    {{-- True false --}}
                                                @elseif ($question->type === 'true_false')
                                                    <div class="d-flex gap-3">
                                                        @foreach ($question->meta_data['options'] ?? [] as $option)
                                                            <label>
                                                                <input type="radio"
                                                                    name="question_{{ $question->id }}"
                                                                    value="{{ $option }}">
                                                                {{ $option }}
                                                            </label>
                                                        @endforeach
                                                    </div>


                                                    {{-- static Text --}}
                                                @elseif ($question->type === 'static')
                                                    {!! $question->text !!}
                                                    @if (!empty($question->meta_data['image']))
                                                        <div class="text-left my-3">
                                                            <img src="{{ $question->meta_data['image'] }}"
                                                                alt="Diagram" class="img-fluid"
                                                                style="max-height: 300px;">
                                                        </div>
                                                    @endif
                                                @endif
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            @php $firstGroup = false; @endphp
                        @endforeach
                    @endif
                @endforeach
            </div>
        </section>


        <!-- BOTTOM NAV (dynamic tabs) -->
        <section class="p-2 bg-light border-top">
            <ul class="nav nav-pills justify-content-around" id="pills-tab" role="tablist">
                @php $firstTab = true; @endphp
                @foreach ($mockTest->sections as $section)
                    @if ($section->name === 'Listening')
                        @foreach ($section->questionGroups as $index => $group)
                            <li class="nav-item">
                                <button type="button" class="nav-link {{ $firstTab ? 'active' : '' }}"
                                    data-bs-toggle="pill" data-bs-target="#part{{ $index + 1 }}">
                                    Part {{ $index + 1 }}
                                </button>
                            </li>
                            @php $firstTab = false; @endphp
                        @endforeach
                    @endif
                @endforeach
            </ul>
        </section>

    </form>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Simple Countdown Timer
        let totalSeconds = 30 * 60;
        const countdown = document.getElementById("countdown");
        setInterval(() => {
            if (totalSeconds > 0) {
                totalSeconds--;
                let min = String(Math.floor(totalSeconds / 60)).padStart(2, '0');
                let sec = String(totalSeconds % 60).padStart(2, '0');
                countdown.textContent = `${min}:${sec}`;
            } else {
                countdown.textContent = "Time's up!";
            }
        }, 1000);
    </script>

</body>

</html>
