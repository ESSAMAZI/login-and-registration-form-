<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Hello Welcome  Users : {{auth()->user()->name}}</h1>
    <br>
    <h1>Email :   {{auth()->user()->email}}</h1>
    <a href="/lyoutusers"> Lyout in</a>
</body>
</html>