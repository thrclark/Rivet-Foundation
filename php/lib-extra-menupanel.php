<!--Copyright 2018 Indiana University Research and Technology Corporation -->
<?php 
$section = 'extras';
$componentName = 'Menu panel';
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
            <h2 class="mb-4"> <?php echo $componentName; ?> </h2>
            <div class="demo-container">
                <div class="demo-rendered p-4"> <a href="lib-extra-menupanel-fp.php" class="btn btn-primary" target="_blank">View demo</a> </div>
                <div class="demo-code"> <small>HTML</small>
                    <button class="btn btn-sm btn-primary" data-clipboard-target="#code1">Copy</button>
                    <pre data-src="snippets/header-menupanel.php" class="language-html" id="code1"></pre>
                </div>
            </div>
        </div>
    
</main>
<?php include('includes/footer.php') ?>
<?php include('includes/footerscripts.php') ?>
<script><?php include('snippets/clear-field-js.php') ?></script> 
<script><?php include('snippets/clear-field-inputgroup-js.php') ?></script>
</body>
</html>
