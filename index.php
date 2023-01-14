<!DOCTYPE html>
<html>
<head>
    <?php 
        $menu = 'index.php';
        include 'include.php';
    ?>
</head>
<body>

<?php include 'header.php';?>

<div class="hero-image">
    <div class="hero-text">
        <h1 class="title"><?php echo ($company['name'] ?? null).' '.($company['country'] ?? null) ?></h1>
        <div class="subtitle"><?php echo ($company['subname'] ?? null).' '.($company['country'] ?? null) ?></div>
        <a href="contact.php" class="btn btn-blue mt-2">ORDER NOW!</a>
    </div>
</div>

<div class="container bg-softgrey py-2">
    <div class="row my-5">
        <div class="col-md-6 text-justify">
            <h1 class="text-blue"><b>About us</b></h1>
            <p>
                &nbsp;&nbsp;&nbsp;<?php echo $company['about'] ?? null ?>
                <br><br>
                Visi :
                <br><?php echo $company['visi'] ?? null ?>
                <br><br>
                Misi :
                <br><?php echo $company['misi'] ?? null ?>
            </p>
        </div>
        <div class="col-md-6">
            <img class="image-display m-1" src="assets/images/club-motor2.webp">
        </div>
    </div>
</div>

<div class="container">
    <div class="row my-5">
        <div class="col-md-12 text-center mb-4">
            <h1 class="mb-4"><b>Our Top Product</b></h1>
            <div class="row">
                <?php
                    foreach($db->getTopProduct() as $row){
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

<div class="container bg-dark">
    <div class="row my-2">
        <div class="col-md-12 text-center text-white mb-2">
            <h1><b>Our Client</b></h1>
            <div class="mx-auto mb-3" width="100%">
                <?php
                    foreach($db->getClient() as $row){
                        if($row['logo'] ?? null){
                            echo '<img src="'.$row['logo'].'" class="icon-client mx-2">';
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row my-2">
        <div class="col-md-12 text-center mb-2">
            <h1><b>Article & Event</b></h1>
            <div class="row mb-2">
                <?php
                    foreach($db->getAllArticle() as $row){
                ?>
                <div class="col-md-4 p-4">
                    <div class="card">
                        <img src="<?php echo $row['image'] ?? $defaultImage ?>" alt="Avatar" class="image">
                        <div class="card-body">
                            <h3 class="mb-1"><b><?php echo $row['title'] ?? null ?></b></h3>
                            <i><?php echo $row['date'] ?? null ?></i><br>
                            <p><?php echo $row['detail'] ?? null ?></p>
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