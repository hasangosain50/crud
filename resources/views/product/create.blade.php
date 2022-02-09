<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
    
    <form action="{{route('product.store')}}" method="post">
        @csrf
        name:
        <input type="text" name="name" >
        @if($errors->has('name'))
    <div class="error">{{ $errors->first('name') }}</div>
@endif
        price:
        <input type="number" name="price"  >
        @if($errors->has('price'))
    <div class="error">{{ $errors->first('price') }}</div>
@endif

        <input type="submit" value="submit">


    </form>
</body>
</html>