<?php
    session_start();
    $con= mysqli_connect('localhost:3306','root');
    if($con){
        //echo"Connection Successfully";
    }
    else{
        echo "No connection";
    }
    mysqli_select_db($con,'cari');
    $name=$_POST['name'];
    $email_id=$_POST['email_id'];
    $password=$_POST['password'];

    $querr="select * from userdata where name - '$name' && password - '$password' && email_id - '$email_id' ";
    $result = mysqli_query($con,$querr);
    $num = mysqli_num_rows($result);
    if($num==1){

        echo"Duplicate Data";

    }
    else
    {
        $querr = "insert into userdata(name, password, email_id) VALUES ('$name','$password', '$email_id')";
        mysqli_query($con,$querr);
    }
     header('location:index.html');
?> 