<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Index PAge</h2>
    <a href="{{url('/create')}}">Create</a><br>
    <table>
<th>
        <td>Email id</td>
        <td>Password</td>
        <td>Status</td>
</th>
    @foreach ($users as $item)
        <tr>
            <td>{{$item->email}}</td>
            <td>{{$item->password}}</td>
            <td>{{$item->status}}</td>
        </tr>
    @endforeach
    </table>
</body>
</html>