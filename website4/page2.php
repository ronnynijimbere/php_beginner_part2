<?php
    session_start();

    $_SESSION['name'] = 'Trevor Reddy';

    $name = $_SESSION['name'];
    $email = $_SESSION['email'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Session Tutorial-page2</title>
</head>
<body>
    <h5>Hello <?php echo $name;?>, you have subscribed with the email 
     <?php echo $email; ?> </h5>
     <a href="page3.php">Go to page 3</a>
</body>
</html>