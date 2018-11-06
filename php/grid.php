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
<style>
.mystuff {
	background: #CCCCCC;
	height: 4rem;
	margin-bottom: 1rem;
}
</style>
</head>
<body>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="grid-container">
    <h1>Bootstrap 4 Grid</h1>
    <div class="grid-x">
        <div class=" cell -lg-2">
            <div class="mystuff">hello!</div>
        </div>
        <div class="col">
            <div class="mystuff">hello!</div>
        </div>
    </div>
</div>
<?php include('includes/footerscripts.php') ?>
</body>
</html>
