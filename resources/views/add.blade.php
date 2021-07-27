<html>
<head>
</head>
<body>
<center>
<h1>ADD REGISTERATION</h1>
<form action="add" method="POST">
@csrf
<span style="color:red">@error('username'){{$message}}@enderror</span><br>
<label for>UserName :</label> <input type="text" name="username" placeholder="Enter your username"/><br>
<br>
<span style="color:red">@error('firstname'){{$message}}@enderror</span><br>
<label for>FirstName :</label> <input type="text" name="firstname" placeholder="Enter your firstname"/><br>
<br>
<span style="color:red">@error('lastname'){{$message}}@enderror</span><br>
<label for>LastName :</label> <input type="text" name="lastname" placeholder="Enter your lastname"/><br>
<br>
<span style="color:red">@error('address'){{$message}}@enderror</span><br>
<label for>Address</label> <input type="text" name="address" placeholder="Enter your address"/><br>
<span style="color:red">@error('phone'){{$message}}@enderror</span><br>
<br><label for>Phone</label> <input type="tel" name="phone" placeholder="Enter your phone"/><br>
<br>
<span style="color:red">@error('email'){{$message}}@enderror</span><br>
<label for>Email :</label><input type="email" name="email" placeholder="Enter your email"/><br><br>
<span style="color:red">@error('password'){{$message}}@enderror</span><br>
<label for>Password :</label><input type="password" name="password" placeholder="Enter your password "/><br><br>
<span style="color:red">@error('confirmpassword'){{$message}}@enderror</span><br>
<label for>Confirm Password :</label><input type="password" name="confirm_password" placeholder="Enter your password again"/><br><br>
<span style="color:red">@error('city'){{$message}}@enderror</span><br>
<label for>City :</label><input type="text" name="city" placeholder="Enter your city"/><br><br>
<span style="color:red">@error('zipcode'){{$message}}@enderror</span><br>
<label for>State :</label><input type="text" name="state" placeholder="Enter your state"/><br><br>
<span style="color:red">@error('state'){{$message}}@enderror</span><br>
<label for>Zipcode :</label><input type="text" name="zipcode" placeholder="Enter your zipcode"/><br><br
<label for>Usertype :</label><input type="text" name="usertype" placeholder="Enter your usertype"/><br><br>
<input type="submit" name="submit" value="submit"/>
</form>
</center>
</body>
</html>