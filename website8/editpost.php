

<?php   

require('config/config.php');   
require('config/db.php');

//check for submit
if(isset($_POST['submit'])){
    //get form data
    $update_id =  mysqli_real_escape_string($conn, $_POST['update_id']);
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $body = mysqli_real_escape_string($conn, $_POST['body']);
    $author = mysqli_real_escape_string($conn, $_POST['author']);

    $query = "UPDATE posts SET 
            title = '$title',
            author = '$author',
            body= '$body'
            WHERE id = {$update_id}"; 

    if(mysqli_query($conn, $query)){
        header('Location: ' . ROOT_URL . '');
    } else {
        echo 'ERROR: ' . mysqli_error($conn);
    }
}

 //get id
 $id = mysqli_real_escape_string($conn, $_GET['id']);

 //Create Query    
 $query = 'SELECT * FROM posts WHERE id = ' . $id;

 //get result
 $result = mysqli_query($conn, $query);

 // Fetch data
 $post = mysqli_fetch_assoc($result);
 

 //FREE RESULT FROM MEMORY
 mysqli_free_result($result);

 //close connection
 mysqli_close($conn);

?>

<?php include('inc/header.php');?>
<div class="container">
    <h1>Add Posts</h1>
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
        <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" value="<?php echo $post['title'];?>">
        </div>
        <div class="form-group">
            <label>Author</label>
            <input type="text" class="form-control"value="<?php echo $post['author'];?>">
        </div>
        <div class="form-group">
            <label>Body</label>
            <textarea name="body" class="form-control"><?php echo $post['body'];?></textarea>
        </div>
        <input type="hidden" name="update_id" value="<?php echo['id'];?>">
        <input type="submit" name="submit" value="Submit" class="btn btn-primary">   
    </form>
</div>        
<?php include('inc/footer.php');?>