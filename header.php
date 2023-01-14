

<div class="header container py-3">
    <table>
        <tr>
            <td class="text-center align-middle pe-2">
                <img src="<?php echo $company['logo'] ?? $defaultImage ?>" width="100px">
            </td>
            <td class="align-middle">
                <h1 class="mt-0 mb-1"><?php echo strtoupper($company['name'] ?? null) ?></h1>
                <?php echo strtoupper($company['subname'] ?? null) ?>
            </td>
        </tr>
    </table>
</div>
<nav class="topnav container py-2" id="myTopnav">
    <div class="topListNav">
        <a href="javascript:void(0);" style="font-size:25px;padding:5px" class="icon" onclick="menuTopBar()">&#9776;</a>
        <a class="link <?php echo $menu == 'index.php'? 'active' : '' ?>" href="index.php">Home</a>
        <div class="dropdown <?php echo $menu == 'product.php'? 'active' : '' ?>">
            <button class="dropbtn <?php echo $menu == 'product.php'? 'active' : '' ?>">Product 
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <?php
                    foreach($db->getProductMerk() as $row){
                        echo '<a href="produk.php?product_category_id='.($row['id'] ?? null).'" class="link '.(isset($idGet) && ($idGet == $row['id'])? 'active' : null).'">'.($row['name'] ?? null).'</a>';
                    }
                ?>
            </div>
        </div> 
        <a class="link <?php echo $menu == 'article.php'? 'active' : '' ?>" href="article.php">Article & Event</a>
        <a class="link <?php echo $menu == 'gallery.php'? 'active' : '' ?>" href="gallery.php">Gallery</a>
        <a class="link <?php echo $menu == 'contact.php'? 'active' : '' ?>" href="contact.php">Contact</a>
    </div> 
</nav>