<?php
if(isset($_POST['rent'])){
    header('Location: rentcar.html');
}


if(isset($_POST['search'])){
    try {
    require_once 'connect.php';
    require_once 'common.php';

    $conn = new PDO($dsn, $username, $password, $options);

    $sql = "SELECT * FROM clients.cars WHERE specs = :specs";

    $spec = $_POST['specs'];
    $stm = $conn->prepare($sql);
    $stm->bindParam('specs',$spec,PDO::PARAM_STR);
    $stm->execute();

    $result = $stm->fetchAll();
    } catch(PDOException $error){
        echo $sql . "<br>". $error->getMessage();
    }
    }
?>
<?php 
    if(isset($_POST['search'])){
        if($result && $stm->rowCount() > 0){ ?>
        
        <?php require_once 'header.php'; ?>

        <link rel="stylesheet" href="rent.css">
        <div class="body">
                <table>
                    <thead> 
                        <tr>
                        <th>Name</th>
                        <th>Specs</th>
                        <th>Image</th>
                        <th>Price</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($result as $row) : ?>

                        <tr>
                            <td><?php echo escape($row["name"]); ?></td>
                            <td><?php echo escape($row["specs"]); ?></td>
                            <td><img width="100" height="100" src="/csc405/carrental/<?php echo $row['img']?>"></td>
                            <td><?php echo '$'. escape($row["price"]) ; ?><br> <hr> <input type="button" class="rentnow" value="Rent Now"> </td>
                        </tr>
                            <?php endforeach; ?>
                    </tbody>
                </table>
            
        <?php } else { ?>
            <blockquote> No result found for <?php echo escape($_POST['specs']); ?>.</blockquote>
        <?php }
    } ?>
</div>