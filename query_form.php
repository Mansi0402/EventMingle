<?php

    $connection = mysqli_connect('localhost','root','','book_db');

    if(isset($_POST['send'])){
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $queries = $_POST['query'];
        $request = "insert into feedback_form(name,phone,queries) values('$name','$phone','$queries')";

        mysqli_query($connection , $request);

        header('location:about.php');
    }
    else{
        echo 'Something went wrong, Try Agian!';
    }


?>