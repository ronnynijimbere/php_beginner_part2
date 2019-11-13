<?php
    $loggedIn = false;

    $arr = [2,5,9,11,25,14];

    /*if($loggedIn){
        echo 'You are logged in';
    } else {
        echo 'Your are not logged in';
    }*/

    //echo($loggedIn) ? 'You are logged in' : 'Your are not logged in';

   // $isRegistered = ($loggedIn == true) ? true : false;
    //echo $isRegistered;

    //$age = 30;
   // $score = 25;

    //echo 'your score is: ' . ($score > 10 ? ($age > 10 ? 'Average': 'Exceptional'):($age > 10 ? 'Horrible': 'Average'));

?>

<div>
<?php if($loggedIn) { ?>
    <h1>Welcome User</h1>
<?php } else { ?> 
    <h1>Welcome Guest</h1>
<?php } ?> 
</div>

<div>
<?php if($loggedIn): ?>
    <h1>Welcome User</h1>
<?php else: ?>
    <h1>Welcome Guest</h1>
<?php endif; ?>
</div>

<div>
<?php foreach($arr as $val): ?>
    <?php echo $val; ?>
<?php endforeach; ?>
</div>

<div>
<?php for($i = 0; $i < 25; $i++): ?>
    <li><?php echo $i; ?></li>
<?php endfor; ?>
</div>