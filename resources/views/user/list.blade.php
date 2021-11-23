<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table border="1px">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Age</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $key => $user)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$user["name"]}}</td>
            <td>{{$user["age"]}}</td>
            <td><a href="{{route('user.show',$key)}}">Detail</a></td>
            <td><a href="{{route('user.destroy',$key)}}">Delete</a></td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
