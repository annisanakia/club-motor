<?php 
    include 'database.php';
    $db = new database();
    $company = $db->getCompany();
    $defaultImage = 'assets/images/image.png';
?>
<title><?php echo $company['name'] ?? null ?></title>
<link rel="icon" type="image/x-icon" href="assets/images/favicon.png">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
<link rel="stylesheet" href="assets/css/grid.css">
<link rel="stylesheet" href="assets/css/config.css">
<link rel="stylesheet" href="assets/css/main.css">