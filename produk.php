<!DOCTYPE html>
<html>
<head>
    <?php 
        $menu = 'product.php';
        $idGet = strip_tags($_GET['product_category_id']);
        include 'include.php';
    ?>
</head>
<body>

<?php include 'header.php';?>

<div class="container bg-dark py-2"></div>

<div class="container">
    <div class="row my-2">
        <div class="col-md-12 text-center mb-2">
            <h1><b>Product</b></h1>
            <div class="row mb-2">
                <?php
                    foreach($db->getProductByMerk($idGet) as $row){
                ?>
                <div class="col-md-4 p-4">
                    <div class="panel-hover">
                        <img src="<?php echo $row['image'] ?? $defaultImage ?>" alt="Avatar" class="image">
                        <div class="overlay">
                            <div class="text"><?php echo $row['name'] ?? null ?><br><?php echo 'Rp. '.(number_format($row['price'],0) ?? null) ?></div>
                        </div>
                    </div>
                </div>
                <?php
                    }
                ?>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php';?>

</body>
</html>