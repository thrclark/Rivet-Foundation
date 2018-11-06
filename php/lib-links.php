<!--Copyright 2018 Indiana University Research and Technology Corporation -->
<?php 
$section = 'library';
$componentName = 'Links';
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
            <h1 class="margin-bottom-3"> <?php echo $componentName; ?></h1>
            <p class="margin-bottom-3">The Rivet equvalent for this component is available <a href="https://rivet.uits.iu.edu/components/page-content/links/" target="_blank">here</a> for comparison.</p>
            <div class="demo-container">
                <div class="demo-rendered padding-3">
                    <?php include('snippets/links.php') ?>
                </div>
                <div class="demo-code"> <small>HTML</small>
                    <button class="button small primary" data-clipboard-target="#code1">Copy</button>
                    <pre data-src="snippets/links.php" class="language-html" id="code1"></pre>
                </div>
            </div>
        </div>
    
</main>
<?php include('includes/footer.php') ?>
<?php include('includes/footerscripts.php') ?>
</body>
</html>
