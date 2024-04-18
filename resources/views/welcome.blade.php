<!DOCTYPE html>
<html lang="en">
<head>
  <title>External Api's</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center" style="height:250px;">
  <h1 style="color:red;">External Api's !!! </h1>
  <p style="color:green;">fetching from <a href="https://quizapi.io/">( Quizapi.io )</a> website!</p>
  <p style="color:blue;"><===================></p> 
</div>
  
<table class="table table-bordered">
    <thead>
      <tr>
        <th>S.No</th>
        <th>Question</th>
        <th>Option 1</th>
        <th>Option 2</th>
        <th>Option 3</th>
        <th>Answer</th>
      
      </tr>
    </thead>
    <tbody>
    @foreach ($questions as $question)
      <tr>
      <td>{{ $loop->iteration }}</td>
        <td>{{$question->question}}</td>
        <td>{{$question->answer_a}}</td>
        <td>{{$question->answer_b}}</td>
        <td>{{$question->answer_c}}</td>
        
        
      </tr>
      @endforeach
</tbody>

</body>
</html>
