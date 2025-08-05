<?php

   $conn = mysqli_connect('localhost','root','','travelmint');

if(isset($_POST['signup'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $checkEmail="SELECT * From users where email='$email'";
    $result=$conn->query($checkEmail);
    if($result->num_rows>0){
        echo "Email address already exist !";
    }
    else{
        $insertQuery="INSERT INTO users(name,email,password) 
        VALUES ('$name','$email','$password') ";
        if($conn->query($insertQuery)==TRUE){
            header("location:home.php");
        }
        else{
            echo "Error:".$conn->error;
        }
    }
}

if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql="SELECT * From users where email='$email' and password='$password'";
    $result=$conn->query($sql);
    if($result->num_rows>0){
        session_start();
        $rows=$result->fetch_assoc();
        $_SESSION['email']=$rows['email'];
        header("location:home.php");
        exit();
    }
    else{
        echo "Not found , Incorrect Email or Password";
    }
}

?>