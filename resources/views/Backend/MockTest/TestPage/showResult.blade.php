<table class="table table-bordered">
    <thead>
        <tr>
            <th>Q No</th>
            <th>Question</th>
            <th>User Answer</th>
            <th>Correct Answer</th>
            <th>Result</th>
        </tr>
    </thead>
    <tbody>
        @foreach($results as $res)
        <tr>
            <td>{{ $res['question_no'] }}</td>
            <td>{{ $res['question'] }}</td>
            <td>{{ $res['user_answer'] }}</td>
            <td>{{ $res['correct_answer'] }}</td>
            <td>{{ $res['score'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

<p>Total Score: {{ $totalScore }} / {{ $totalQuestions }}</p>
