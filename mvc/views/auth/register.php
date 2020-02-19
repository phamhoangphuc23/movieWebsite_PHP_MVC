<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
    <form method="POST" action="/register/create">
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
        <input name="passwordConfirm" type="text">
        <br>
        <button type="submit" name="submit"></button>
    </form>

    <?php
        if (isset($data['errors'])) {
            foreach ( $data['errors'] as $error) {
                echo $error;
            }
        }
    ?>
</body>
</html>