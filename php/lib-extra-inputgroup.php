<!--Copyright 2018 Indiana University Research and Technology Corporation -->
<?php 
$section = 'extras';
$componentName = 'Input groups';
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
        <h2 class="margin-bottom-3"> <?php echo $componentName; ?> </h2>
        <div class="demo-container">
            <div class="demo-rendered padding-2">
                <?php include('snippets/inputgroup-extra.php') ?>
            </div>
            <div class="demo-code"> <small>HTML</small>
                <button class="button small primary" data-clipboard-target="#code1">Copy</button>
                <pre data-src="snippets/inputgroup-extra.php" class="language-html" id="code1"></pre>
            </div>
        </div>
    </div>
</main>
<?php include('includes/footer.php') ?>
<?php include('includes/footerscripts.php') ?>
</body>
</html>
