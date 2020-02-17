<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
</head>
<body>
    <h1>This is Homepage  </h1>
    <?php
    while($row =mysqli_fetch_array($data['posts'])){
        echo $row['title'];
        echo '<br>';
    }
    ?>
</body>
</html>