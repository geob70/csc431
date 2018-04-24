<?php
    require_once 'connect.php';

    if (isset($_POST['register'])){



        $Name = $_POST['username'];
        $Password = $_POST['password'];
        $Email = $_POST['email'];
        $Gender = $_POST['gender'];

        

        $ar = array('name' => $Name, 'password' => $Password, 'email' => $Email, 'gender' => $Gender);

        // print_r($ar);
        $sql = "INSERT INTO clients.accounts (name,password,email,gender) VALUES (:name,:password, :email, :gender)";
        $op = $conn->prepare($sql);
        $op->execute(array(

                ':name' => $Name, 
                ':password' => $Password, 
                ':email' => $Email,
                ':gender' => $Gender));
    }
            
?>  
