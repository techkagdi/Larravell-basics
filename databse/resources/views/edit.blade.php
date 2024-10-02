<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ url($user->email . '/edit') }}" method="post">

        @csrf
        @method('PUT')
   Email :  <input type="text" name="email" id="" value="{{$user->email}}">
   @error('email')
       <span>Plese enter a valid email</span>
   @enderror
    Password : <input type="text" name="password" id="" value="{{$user->password}}">
    @error('password')
    <span style="color: red;">Plese enter a valid Password</span>
@enderror

status : <input type="number" name="status" id="" value="{{$user->status}}">
    <input type="submit" value="submit">
    </form>
</body>
</html>