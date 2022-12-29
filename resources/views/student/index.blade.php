<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <a href="{{url('/student/create')}}" class="btn btn-success">add</a>
        <table class="table">
            <thead >
                <tr>
                <th>id</th>
                <th>name</th>
                <th>phone</th>
                <th>email</th>
                <th>age</th>
                </tr>
            </thead>
            @foreach($student as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->phone}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->age}}</td>
                <td>
                    <a href="{{url('/student/'.$item->id)}}" class="btn btn-info">show</a>
                    <a href="{{url('/student/'.$item->id.'/edit')}}" class="btn btn-primary">edit</a>
                    <!-- <a href="{{url('/student'.'/'.$item->id)}}" class="btn btn-primary">delete</a> -->
                    <form action="{{url('/student'.'/'.$item->id)}}" method="post">
                        {{method_field('DELETE')}}
                        {{csrf_field()}}
                        <button type="submit" class="btn btn-danger">delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
            <tbody>

        </table>
    </div>
</body>
</html>