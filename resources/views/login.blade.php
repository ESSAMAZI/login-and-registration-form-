<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
</head>
<body>
	<form method="POST" action="{{route('loginUser')}}">
		@csrf
		<!-- <label> Name :</label>
		<input type="text" name="name" placeholder="name">
		<br> -->
		<label> Email :</label>
		<input type="email" name="email" placeholder="email">
		<br>
		<label> password: </label>
		<input type="password" name="password" placeholder="password">
		<br>
		<input type="submit" name="submit" value="Login">

	</form>
</body>
</html>