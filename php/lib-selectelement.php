<!--Copyright 2018 Indiana University Research and Technology Corporation -->
<?php 
$section = 'library';
$componentName = 'Select element';
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
    <div class="container" id="mainContent">
        <h1 class="mb-4"> <?php echo $componentName; ?></h1>
        <p class="mb-4">The Rivet equvalent for this component is available <a href="https://rivet.uits.iu.edu/components/forms/select-input/" target="_blank">here</a> for comparison.</p>
        <h2>Select - default </h2>
        <div class="demo-container">
            <div class="demo-rendered p-4">
                <?php include('snippets/select-default.php') ?>
            </div>
            <div class="demo-code"> <small>HTML</small>
                <button class="btn btn-sm btn-primary" data-clipboard-target="#code1">Copy</button>
                <pre data-src="snippets/select-default.php" class="language-html" id="code1"></pre>
            </div>
        </div>
        <h2>Select - validation <span class="badge alert">Custom work needed</span> </h2>
        <div class="demo-container">
            <div class="demo-rendered p-4">
                <?php include('snippets/select-validation.php') ?>
            </div>
            <div class="demo-code"> <small>HTML</small>
                <button class="btn btn-sm btn-primary" data-clipboard-target="#code2">Copy</button>
                <pre data-src="snippets/select-validation.php" class="language-html" id="code2"></pre>
            </div>
        </div>
    </div>
</main>
<?php include('includes/footer.php') ?>
<?php include('includes/footerscripts.php') ?>
</body>
</html>
