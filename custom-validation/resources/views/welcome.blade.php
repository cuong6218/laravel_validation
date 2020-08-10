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
<div class="content">
    <div class="title m-b-md">
        Laravel custom Validation
    </div>
    <p style="color: green">{{(isset($success))? $success: ''}}</p>
    <div class="form-custom-validation">
        <form action="{{route('form.submit')}}" method="get">
            @csrf
            <label>Name: </label>
            <input type="text" id="name" name="name" placeholder="full name"/><br/>
            <label>Age: </label>
            <input type="text" id="age" name="age" placeholder="age"><br/>
            <button type="submit">Submit</button>
        </form>
    </div>
</div>
<div class="error-message">
    @if ($errors->any())
        @foreach($errors->all() as $nameError)
            <p style="color:red">{{$nameError}}</p>
        @endforeach
    @endif
</div>
</body>
</html>
