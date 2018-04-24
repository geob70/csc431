<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    require_once 'connect.php';
        if (isset($_POST['rent'])) {
            header('Location: rent.php');
        $con
         $sql = "SELECT img FROM clients.cars";    

         while ($data = $sql->fetch(PDO::FETCH_ASSOC)){
                    echo "<img scr='images/".$data['img']."'>";
    
        }

    }
    ?>

    <input type="button" >
</body>
</html>