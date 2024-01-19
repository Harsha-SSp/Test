<?php
    $Name=$_POST['Name'];
    $Password=$_POST['password'];
    //databse connection
    $conn=new mysqli('localhost','root','','registration');
    if($conn->connect_error){
       die('Connection Failed :'.$conn->connect_error); 

    }else{
        $stmt= $conn->prepare("insert into register(Name,password) values(?,?)");
        $stmt->bind_param("ss", $Name, $Password);
        $stmt->execute();
        echo "registration Successfull...";
        $stmt->close();
        $conn->close();
    }
?>