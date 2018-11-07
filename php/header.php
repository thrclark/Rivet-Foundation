<!--Copyright 2018 Indiana University Research and Technology Corporation -->

<?php 
$section = '';
$page_title = '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include ('includes/head-meta.php') ?>
<?php include('includes/styles.php') ?>
<style></style>
</head>
<body>
<header class="rbt-app-header">
    <div class="grid-container fluid">
        <div class="grid-x "> 
            
            <!--App Logo Image-->
            <div class="cell auto rbt-brand-image-container"> <img src="../img/trident-large.png" alt="trident" class="rbt-brand-image"/> </div>
            
            <!--App Title-->
            <div class="cell large-auto rbt-brand-title-container"> <a href="#" class="rbt-brand-title">Application Title </a> </div>
            
            <!--App Navigation-->
            <div class="cell d-none d-lg-block rbt-site-nav">
                <ul class="nav justify-content-end">
                    <li class="nav-item"> <a class="nav-link active" href="#">Nav one</a> </li>
                    <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Nav two</a>
                        <div class="dropdown-menu"> <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a> </div>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="#">Nav three</a> </li>
                    <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Nav four</a>
                        <div class="dropdown-menu"> <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a> </div>
                    </li>
                </ul>
            </div>
            
            <!--App User Info-->
            <div class="cell auto d-none d-lg-block rbt-user-info"> <span class="avatar" aria-hidden="true">RS</span>
                <ul class="nav justify-content-end">
                    <li class="nav-item dropdown" > <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">rswanson</a>
                        <div class="dropdown-menu"> <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a> </div>
                    </li>
                </ul>
            </div>
            
            <!-- App Mobile Menu-->
            <div class="cell auto d-lg-none rbt-drawer-button"> <span class="rbt-icon-menu" aria-hidden="true"><span class="sr-only">Menu</span></span> </div>
        </div>
    </div>
</header>
<?php include('includes/footerscripts.php') ?>
</body>
</html>
