<!--Copyright 2018 Indiana University Research and Technology Corporation -->
<?php 
$section = 'library';
$componentName = 'Spacing';
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
            <h1 class="margin-bottom-2"> <?php echo $componentName; ?></h1>
            <p class="margin-bottom-3">The Rivet equvalent for this component is available <a href="https://rivet.uits.iu.edu/components/layout/spacing/" target="_blank">here</a> for comparison.</p>
            <p>Rivet-Bootstrap fully utilizes the Bootstrap spacing utilities without any modifications. For full documentation and code examples, please refer to the <a href="https://getbootstrap.com/docs/4.0/utilities/spacing/" target="_blank">Bootstrap spacing documentation</a>.</p>
        </div>
    
</main>
<?php include('includes/footer.php') ?>
<?php include('includes/footerscripts.php') ?>
</body>
</html>
