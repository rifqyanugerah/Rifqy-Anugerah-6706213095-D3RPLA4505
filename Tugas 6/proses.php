<?php

if (isset($_POST)) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $url =  $_POST['url'];
    $comment = $_POST['comment'];
    $gender = $_POST['gender'] ?? null;
} else {
    die("Sorry, you cannot access this page!");
}
if (!empty($name)) {
    if (!preg_match("/^[a-zA-Z \-\.\']*$/", $name)) {
        echo "Your input name is Incorrect! Only letters white space, dot (.), and dash (-) are allowed <br>";
    } else {
        $name = test_input($name);
        echo 'thanks, <b>' . $name . '</b><br>';
    }
} else {
    echo 'Name is required <br>';
}
if (!empty($email)) {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format! <br>";
    } else {
        $email = test_input($email);
        echo 'Your email is: ' . $email . '<br>';
    }
} else {
    echo 'Email is required <br>';
}
if (!empty($website)) {
    if (preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
        echo "Invalid URL";
    } else {
        $website = test_input($website);
        echo 'Your website is: ' . $website . '<br>';
    }
} else {
    echo 'Your website is: none <br>';
}
if (!empty($comment)) {
    $comment = test_input($comment);
    echo 'Your comment is: ' . $comment . '<br>';
} else {
    echo 'Your comment is: none <br>';
}
if (!empty($gender)) {
    echo 'You are:' . $gender . '<br>';
} else {
    echo 'Gender is required <br>';
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    return $data;
}