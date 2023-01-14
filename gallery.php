<!DOCTYPE html>
<html>
<head>
    <?php 
        $menu = 'gallery.php';
        include 'include.php';
    ?>
</head>
<body>

<?php include 'header.php';?>

<div class="container bg-dark py-2"></div>

<div class="container">
    <div class="row my-2">
        <div class="col-md-12 text-center mb-2">
            <h1><b>Gallery</b></h1>
            <div class="row mb-2">
                <?php
                    foreach($db->getGallery() as $row){
                ?>
                <div class="col-md-4 p-4">
                    <img src="<?php echo $row['image'] ?? $defaultImage ?>" alt="Avatar" class="image-gallery">
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