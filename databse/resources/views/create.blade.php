<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create</h1>
    <form action="{{url('/create')}}" method="post">
        @csrf
   Email :  <input type="text" name="email" id="" value="{{old('email')}}">
   @error('email')
       <span>Plese enter a valid email</span>
   @enderror
    Password : <input type="text" name="password" id="" value="{{old('password')}}">
    @error('password')
    <span style="color: red;">Plese enter a valid Password</span>
@enderror

status : <input type="number" name="status" id="" value="{{old('status')}}">
    <input type="submit" value="submit">
    </form>
</body>
</html>