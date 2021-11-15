<?php
session_start();
error_reporting (E_ALL ^ E_NOTICE ^ E_WARNING);
include('connection/connection.php');
?>
 
<?php include('includes/header.php')?>
 
 <body>
    
    <div class="container">
        <?php if (empty($_POST['search'])) {
            $query = "SELECT * FROM products";
            $result = $connection->query($query);
            while($row = $result->fetch_assoc()){
                ?>
            <div class="card">
                <img src="images/<?php echo $row['img']?>" alt="">
                <h3><?php echo $row['tittle']?></h3>
                <h4>Marca: <?php echo $row['brand'];?></h4>
                <p><?php echo $row['description'];?></p>
                <p><?php echo $row['color'];?></p>
                <p>Estampa: <?php echo $row['print'];?></p>
                <a href="">Comprar</a>
            </div>
            
        <?php
            }
        }else {
            $search = $_POST['search'];
            $result_search = "SELECT * FROM products WHERE brand LIKE '%$search%'";
            $result = mysqli_query($connection, $result_search);
            while($row = $result->fetch_assoc()){
                ?>
            <div class="card">
                <img src="images/<?php echo $row['img']?>" alt="">
                <h3><?php echo $row['tittle']?></h3>
                <h4>Marca: <?php echo $row['brand'];?></h4>
                <p><?php echo $row['description'];?></p>
                <p><?php echo $row['color'];?></p>
                <p>Estampa: <?php echo $row['print'];?></p>
                <a href="">Comprar</a>
            </div>
        <?php
        }
    }
        ?>
    </div>
    
 </body>

 <?php include('includes/footer.php')?>