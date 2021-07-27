<!DOCTYPE html>
<html>
<head>
    <title>Send mail</title>
</head>
<body>
<form action="TestMail" method="POST">
@csrf
<label for>Title :</label> <input type="text" name="title" placeholder="Enter your title" value="{{ $details['title'] }}"/><br>
<br>
<label for>Body :</label> <input type="text" name="body" placeholder="Enter your body" value="{{ $details['body'] }}"/><br>
<br>
<input type="submit" name="submit" value="submit"/>
</form>
</body>
</html>
