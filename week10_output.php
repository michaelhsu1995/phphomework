<?php 
    echo "<form action = 'week10_upload.php' method = 'post'>";
    $n = $_POST["count"]; 
    $count = implode($n);
    //echo $number;
    for ($i = 0; $i < $count; $i++) { 
        echo "<input type='file' name='upload'>"."<br/>"; 
    }
    echo "<input type='submit' name='submit'>";







