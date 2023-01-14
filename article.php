<!DOCTYPE html>
<html>
<head>
    <?php 
        $menu = 'article.php';
        include 'include.php';
    ?>
</head>
<body>

<?php include 'header.php';?>

<div class="container bg-dark py-2"></div>

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