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
        @foreach ($cards as $card)
        <div class="row" >
            <div class ='{{$card->shortLink}}' style="margin-bottom: 10px; margin-top: 10px;">
            <span>{{$card->name}}</span>
            <a href="asd">
                <button type="button"  id ="login" class="btn  btn-primary">Edit</button>
            </a>    
            <a href="asd">
                <button type="button"  id ="login" class="btn  btn-danger">Delete</button>
            </a>
            </div>
            <div class ='{{$card->shortLink}}_Input' style = "display:none;"><input type="text" value="{{$card->name}}" size="{{strlen($card->name)}}"></div>
        </div>
        @endforeach
    </div>


    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>
</html>