<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <title>Trello Card Manager</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1> Trello Boards </h1>
            </div>
        </div>
        <hr>
        @foreach ($boards as $board)
        @if ($board->closed != 1)
        <div class="row">
            <div  id="{{$board->shortLink}}" class="col-md-12">
                <h2> {{$board->name}} </h2>
                <a href="{{$board->shortUrl}}"><p> {{$board->shortUrl}}</p></a>
                <p>Date Last Activity {{$board->dateLastActivity}}</p>
            </div>
        </div>
        @endif
        @endforeach
    </div>


    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>
</html>