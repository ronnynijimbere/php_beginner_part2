<?php

    //Message vars
    $msg = '';
    $msgClass = '';

    //check for submit
    if(filter_has_var(INPUT_POST, 'submit')){
        //get form data
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        //check required field
        if(!empty($email) && !empty($name) && !empty($message)){
            //Passed
            //check email
            if(filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
                //failed
                $msg = 'Please use a valid email';
                $msgClass = 'alert-danger';
            } else {
                //t
                //recipient
                $toEmail = 'ronny.nijimbere86@gmail.com';
                $subject = 'Contact Request from' . $name;
                $body = '<h2>Contact Request</h2>
                        <h4>Name</h4><p>' . $name . '</p>
                        <h4>Email</h4><p>' . $email . '</p>
                        <h4>Message</h4><p>' . $message . '</p>
                        ';

                        //email headers
                        $headers = "MIME-Version: 1.0" . "\r\n";
                        $headers .= "Content-type:text/html;charset=UTF-8" . "
                        \r\n";

                        //additional headers
                        $headers .= "From: " . $name . "<" . $email . ">" . "\r\n";

                        if(mail($toEmail, $subject, $body, $headers)) {
                            //Email Sent
                            $msg = 'your email has been sent';
                            $msgClass = 'alert-success';
                        }else {
                            //failed
                            $msg = 'your email was not sent';
                            $msgClass = 'alert-danger';
                        }
            }

        }else {
            //failed
            $msg = 'Please fill in all fields';
            $msgClass = 'alert-danger';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/cosmo/bootstrap.min.css'>
    <title>Contact Us</title>
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">My Website</a>
            </div>
        </div>
    </nav>
    <div class="container">
        <?php if($msg !=''): ?>
            <div class="alert <?php echo $msgClass; ?>"><?php echo $msg;?></div>
        <?php endif;?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="form-group">
                <label>Name</label>
                <input class="form-control" type="text" name="name" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input class="form-control" type="text" name="email" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
            </div>
            <div class="form-group">
                <label>Message</label>
                <textarea class="form-control"  name="message"><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
            </div>
            <br>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>