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
{{session('success')}}

<div>
    You can view your datas <button class="btn btn-primary"><a href="{{route('front.users')}}">View</a></button>
</div>
</body>
</html>
