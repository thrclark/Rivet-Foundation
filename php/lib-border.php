<!--Copyright 2018 Indiana University Research and Technology Corporation -->
<?php 
$section = 'library';
$componentName = 'Border';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include ('includes/head-meta.php') ?>
<?php include('includes/styles.php') ?>
</head>
<body>
<?php include('includes/app-header.php') ?>
<main>
    <div class="grid-container" id="mainContent">
        <h1 class="mb-4"> <?php echo $componentName; ?></h1>
        <p class="mb-4">The Rivet equvalent for this component is available <a href="https://rivet.uits.iu.edu/components/utilities/border/" target="_blank">here</a> for comparison.</p>
        <p>Rivet-Bootstrap fully utilizes the Bootstrap border utilities without any modifications. For full documentation and code examples, please refer to the <a href="https://getbootstrap.com/docs/4.0/utilities/borders/	" target="_blank">Bootstrap border documentation</a>.</p>
    </div>
</main>
<?php include('includes/footer.php') ?>
<?php include('includes/footerscripts.php') ?>
</body>
</html>
