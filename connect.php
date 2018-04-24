<?php    

    session_start();

        $hostname = 'localhost';
        $username = 'root';
        $password = '';
        $database = 'clients';

        #connect to database

        try {
            $conn = new PDO("mysql:host=$hostname;db=$database", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $ex) {
            echo "sorry something went wrong";
            File_put_contents("PDOErrors.txt", $ex->getMessage(), FILE_APPEND);
        }


?>