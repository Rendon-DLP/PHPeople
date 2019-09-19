<?php 
    include_once 'db.php';

    $first = $_POST['first'];
    $last = $_POST['last'];
    $email = $_POST['email'];
    $id = $_POST['1'];

    $sql = "INSERT INTO 
                people (people_first, people_last, people_email, people_id)
            VALUES 
                ('$first ', '$last', '$email', '$id');";

    mysqli_query($conn, $sql);

    header("Location: ../index.php?addPerson=success");

