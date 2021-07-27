<html>
<head>
</head>
<body>
<center>
<h1>LOGIN</h1>
<form action="login" method="POST">
@csrf
<span style="color:red">@error('username'){{$message}}@enderror</span><br>
<label for>UserName :</label> <input type="text" name="username" placeholder="Enter your username"/><br>
<br>
<span style="color:red">@error('password'){{$message}}@enderror</span><br>
<label for>Password :</label><input type="password" name="password" placeholder="Enter your password "/><br><br>
<span style="color:red">@error('password'){{$message}}@enderror</span><br>
<label for>Usertype :</label><input type="usertype" name="usertype" placeholder="Enter your usertype "/><br><br>
<input type="submit" name="submit" value="submit"/>
<a href="register">Register</a>
</form>
</center>
</body>
</html>