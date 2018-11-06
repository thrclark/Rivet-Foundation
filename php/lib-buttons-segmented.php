<!--Copyright 2018 Indiana University Research and Technology Corporation -->
<?php 
$section = 'library';
$componentName = 'Segmented buttons';
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
        <p class="mb-4">The Rivet equvalent for this component is available <a href="https://rivet.uits.iu.edu/components/forms/buttons-segmented/" target="_blank">here</a> for comparison.</p>
        <h2>Segmented button examples</h2>
        <div class="demo-container">
            <div class="demo-rendered p-4">
                <?php include('snippets/buttons-segmented.php') ?>
            </div>
            <div class="demo-code"> <small>HTML</small>
                <button class="btn btn-sm btn-primary" data-clipboard-target="#code1">Copy</button>
                <pre data-src="snippets/buttons-segmented.php" class="language-html" id="code1"></pre>
            </div>
        </div>
        <h2>Segmented button - secondary</h2>
        <div class="demo-container">
            <div class="demo-rendered p-4">
                <?php include('snippets/buttons-segmented-secondary.php') ?>
            </div>
            <div class="demo-code"> <small>HTML</small>
                <button class="btn btn-sm btn-primary" data-clipboard-target="#code2">Copy</button>
                <pre data-src="snippets/buttons-segmented-secondary.php" class="language-html" id="code2"></pre>
            </div>
        </div>
        <h2>Segmented button - fitted</h2>
        <div class="demo-container">
            <div class="demo-rendered p-4">
                <?php include('snippets/buttons-segmented-fitted.php') ?>
            </div>
            <div class="demo-code"> <small>HTML</small>
                <button class="btn btn-sm btn-primary" data-clipboard-target="#code3">Copy</button>
                <pre data-src="snippets/buttons-segmented-fitted.php" class="language-html" id="code3"></pre>
            </div>
        </div>
        <h2> Using segmented buttons with dropdowns <span class="badge alert">Custom work needed</span> </h2>
        <div class="demo-container">
            <div class="demo-rendered p-4">
                <?php include('snippets/buttons-segmented-split.php') ?>
            </div>
            <div class="demo-code"> <small>HTML</small>
                <button class="btn btn-sm btn-primary" data-clipboard-target="#code4">Copy</button>
                <pre data-src="snippets/buttons-segmented-split.php" class="language-html" id="code4"></pre>
            </div>
        </div>
    </div>
</main>
<?php include('includes/footer.php') ?>
<?php include('includes/footerscripts.php') ?>
</body>
</html>
