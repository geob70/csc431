<?php 
        require_once 'C://wamp64/www/csc405/carrental/connect.php';
        
    
    // Check if image file is a actual image or fake image
    if (isset($_POST["submit"]) & isset($_FILES["img"])) {

        $target_dir = "C://wamp64/www/csc405/carrental/images/";
        $imgfile = $_FILES["img"];
        // var_dump($imgfile);
        $target_file = $target_dir . basename($imgfile["name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

        $check = exif_imagetype($imgfile["tmp_name"]);
        var_dump($check);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }

        // Check file size
        if ($imgfile["size"] > 10000000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($imgfile["tmp_name"], $target_file)) {
                echo "The file " . basename($imgfile["name"]) . " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }

        $Name = $_POST['name'];
        $Specs = $_POST['specs'];
        $Price = $_POST['price'];

        $ar = array('name' => $Name, 'specs' => $Specs, 'price' => $Price);      

        $sql = "INSERT INTO clients.cars (name,specs,price,img) VALUES (:name,:specs,:price,:img)";
        $op = $conn->prepare($sql);
        $data = array(

        'name' => $Name,
        'img' => $target_file,
        'specs' => $Specs,
        'price' => $Price,
        
                );   
        if($op->execute($data)){
            echo "Car confirmed";
        }

    }
    
    
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Car</title>
</head>
<body>
    
    
    <form action="addcar.php" method="post" enctype="multipart/form-data">

        
        <input type="text" name="name" placeholder="Car name" required>

        <input type="text" name="specs" placeholder="Car specs" required>

        <input type="number" name="price" placeholder="Car price" required>

        Select car image to upload:
        <input type="file" name="img" required>
        <input type="submit" value="Save" name="submit">
    </form>


</body>
</html>