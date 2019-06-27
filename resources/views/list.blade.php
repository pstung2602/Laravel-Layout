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
<form action="">
    @csrf
    <tr>@foreach($task as $key => $value)
        <td>{{$key++}}</td>
        <td>{{$value['name']}}</td>
        <td>{{$value['email']}}</td>
    </tr>
      @endforeach
</form>

</body>
</html>