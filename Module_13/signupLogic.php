<?php


    include_once('config.php'); 



    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $repeatpassword = $_POST['repeatpassword'];


        
        $sql = "insert into users (name, email, password, repeatpassword) values (:name, :email, :password, :repeatpassword)";
        $sqlQuery = $conn->prepare($sql);
    
        $sqlQuery->bindParam(':name', $name); 
        $sqlQuery->bindParam(':email', $email); 
        $sqlQuery->bindParam(':password', $password);
        $sqlQuery->bindParam(':repeatpassword', $repeatpassword);


        $sqlQuery->execute();


        echo "Data saved successfully ...";
    }
?>
