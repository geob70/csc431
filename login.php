<?php
    require_once 'connect.php';

    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

    if (empty($_POST['username'])) {
        echo 'Enter name';
    }



        //  $ar = array('name' => $name, 'password' => $password, 'email' => $Email, 'gender' => $Gender);

        $sql = $conn->prepare('SELECT id,name,password,email,gender FROM clients.accounts WHERE name = :name');
        $sql->execute(array(
            ':name' => $username
        ));

        $data = $sql->fetch(PDO::FETCH_ASSOC);

        if($data == false){
            $Msg = "Username $username invalid";
        }
        else{
            if($password == $data['password']){
                $_SESSION['username'] = $data['name'];
                $_SESSION['password'] = $data['password'];
                $_SESSION['email'] = $data['email'];  

                // echo "logged in successfully";

                header('Location:dashboard.html');
                exit;
            }
            else {
               echo  $Msg = "password not matched";
            }
        }
    }
?>