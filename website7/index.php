<?php
    $path = '/dir1/myfile.php';
    $file = 'file1.txt';

    //Return File name
    //echo basename($path);

    //return file name without extension
    //echo basename($path, '.php');

    //return dir name from path
    //echo dirname($path);


    //file exist
    //echo file_exists($file);

    //Get absolute path
    //echo realpath($file);

    //check to see if fiel

    //echo is_file($file);

    //check if we write to file
    //echo is_writable($file);

    //is readable
    //echo is_readable($file);

    //get file size
    //echo filesize($file);

    //create a directory / folder
    //mkdir('testing');

    //Removes dir if empty
    //rmdir('testing');

    //copy file
    //echo copy('file1.txt', 'file2.txt');


    //rename file
    //rename('file2.txt', 'newfile.txt');

    //delete file
    //unlink('newfile.txt');

    //write from file to string
    //echo file_get_contents($file);

    //write string to file
    //echo file_put_contents($file, 'Ronny is the best');

    //$current = file_get_contents($file);

   // $current .= ' Ronny is The Best';

    //file_put_contents($file, $current);

    //open file to read
    //$handle = fopen($file, 'r');
    //$data = fread($handle, filesize($file));
    //echo $data;
    //fclose($handle);

    //open file for writing
    $handle = fopen('file2.txt', 'w');
    $txt = "bobby reed\n";
    fwrite($handle, $txt);
    $txt = "kenny  sucks\n";
    fwrite($handle, $txt);
    fclose($handle);

?>