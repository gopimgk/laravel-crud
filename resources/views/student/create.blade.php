<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <form action="{{url('student')}}" class="form-group" method='post'>
            {!!csrf_field()!!}
           name: <input type="text" class="form-control" name='name'>
           phone: <input type="text" class="form-control" name='phone'>
           email <input type="text" class="form-control" name='email'>
           age: <input type="text" class="form-control" name='age'>
           <input type="submit" class="btn btn-info" value="insert" id="">
        </form>
    </div>
    <style>
        .form-group{
            width:600px;
            background:gray;
            margin-left:25%;
            margin-top:10%;
            padding:5%;
            color:white;
        }
    </style>
</body>
</html>