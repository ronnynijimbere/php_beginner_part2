<?php 

    if(isset($_GET['name'])){
        //echo $_GET['name'];
        //print_r($_GET);
        $name = htmlentities($_GET['name']);
        //echo $name;
    }

    /*if(isset($_POST['name'])){
        //echo $_GET['name'];
        print_r($_POST);
        $name = htmlentities($_POST['name']);
        echo $name;
    }*/

    /*if(isset($_REQUEST['name'])){
        //echo $_GET['name'];
        //print_r($_REQUEST);
        $name = htmlentities($_REQUEST['name']);
        echo $name;
    }*/


    //echo $_SERVER['QUERY_STRING'];
    
?>    


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Talent Search</title>
 
    </head>
    <body>
        <form action="get_post.php" method="GET">
            <div>
                <label>Name</label><br>
                <input type="text" name="name">     
            </div>
            <div>
                <label>Email</label><br>
                <input type="text" name="email">
            </div>
            <input type="submit" value="Submit">
        
        </form>
        <ul>
            <li>
                <a href="get_post.php?name=Ronny">Ronny</a>
            </li>
            <li>
                <a href="get_post.php?name=Trev">Trev</a>
            </li>
        </ul>
        <h1><?php echo "{$name}'s Profile"; ?></h1>

    </body>
</html>