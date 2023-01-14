<!DOCTYPE html>
<html>
<head>
    <?php 
        $menu = 'contact.php';
        include 'include.php';
    ?>
</head>
<body>

<?php include 'header.php';?>

<div class="container bg-dark py-2"></div>

<div class="container">
    <div class="row my-2">
        <div class="col-md-12 mb-2">
            <h1 class="text-center"><b>Contact</b></h1>
            <div class="row mb-2">
                <div class="col-md-6 p-4">
                    <div class="mapouter mx-auto"><div class="gmap_canvas" style="border-radius:15px"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=bekasi&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://fmovies-online.net">fmovies</a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><a href="https://www.embedgooglemap.net">google maps on web site</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></div>
                    <div class="row text-center mt-3">
                        <div class="col-md-4">
                            <div class="bg-dark radius-round p-3 d-inline-block mb-3">
                                <i class="fa-solid fa-phone text-white"></i>
                            </div><br>
                            <?php echo $company['phone_no'] ?? null ?>
                        </div>
                        <div class="col-md-4">
                            <div class="bg-dark radius-round p-3 d-inline-block mb-3">
                                <i class="fa-solid fa-fax text-white"></i>
                            </div><br>
                            <?php echo $company['fax_no'] ?? null ?>
                        </div>
                        <div class="col-md-4">
                            <div class="bg-dark radius-round p-3 d-inline-block mb-3">
                                <i class="fa-solid fa-envelope text-white"></i>
                            </div><br>
                            <?php echo $company['email'] ?? null ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-4">
                <form action="save_contact.php" method="post">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" required>

                    <label for="phone_no">Phone Number</label>
                    <input type="text" id="phone_no" name="phone_no" required>

                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" required>

                    <label for="detail">Detail</label>
                    <textarea id="detail" name="detail"  style="height:200px" required></textarea>

                    <input type="submit" value="Submit" class="btn btn-blue">
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php';?>

</body>
</html>