<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<form method="POST" action="/login/attempt">
    <label for="">Name</label>
    <input name="name" type="text">
    <br>
    <label for="">UserName</label>
    <input name="username" type="text">
    <br>
    <label for="">Email</label>
    <input name="email" type="email">
    <br>
    <label for="">Password</label>
    <input name="password" type="text">
    <br>
    <label for="">Password Confirm</label>
    <input name="passwordconfirm" type="text">
    <br>

    <button type="submit" name="submit"></button>
</form>

</body>
</html>