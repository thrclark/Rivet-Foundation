<!--Copyright 2018 Indiana University Research and Technology Corporation -->
<?php 
$section = 'library';
$componentName = 'Modals';
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
        <p class="margin-bottom-3">The Rivet equvalent for this component is available <a href="https://rivet.uits.iu.edu/components/overlays/modals/" target="_blank">here</a> for comparison.</p>
        <h2>Modal <span class="badge alert">Custom work needed</span> </h2>
        <div class="demo-container">
            <div class="demo-rendered padding-3">
                <?php include('snippets/modal-default.php') ?>
            </div>
            <div class="demo-code"> <small>HTML</small>
                <button class="button small primary" data-clipboard-target="#code1">Copy</button>
                <pre data-src="snippets/modal-default.php" class="language-html" id="code1"></pre>
            </div>
        </div>
        <h2>Modal dialogue <span class="badge alert">Custom work needed</span> </h2>
        <div class="demo-container">
            <div class="demo-rendered padding-3">
                <?php include('snippets/modal-dialogue.php') ?>
            </div>
            <div class="demo-code"> <small>HTML</small>
                <button class="button small primary" data-clipboard-target="#code2">Copy</button>
                <pre data-src="snippets/modal-dialogue.php" class="language-html" id="code2"></pre>
            </div>
        </div>
    </div>
</main>
<?php include('includes/footer.php') ?>
<?php include('includes/footerscripts.php') ?>
</body>
</html>
