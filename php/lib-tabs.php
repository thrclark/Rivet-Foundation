<!--Copyright 2018 Indiana University Research and Technology Corporation -->
<?php 
$section = 'extras';
$componentName = 'Tabs';
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
        <h3>Tabs - default</h3>
        <div class="demo-container">
            <div class="demo-rendered p-4">
                <?php include('snippets/tabs-default.php') ?>
            </div>
            <div class="demo-code"> <small>HTML</small>
                <button class="btn btn-sm btn-primary" data-clipboard-target="#code1">Copy</button>
                <pre data-src="snippets/tabs-default.php" class="language-html" id="code1"></pre>
            </div>
            <div class="demo-code"> <small>JS</small>
                <button class="btn btn-sm btn-primary" data-clipboard-target="#code4">Copy</button>
                <pre data-src="snippets/tabs-default-js.php" class="language-js" id="code4"></pre>
            </div>
        </div>
        <h3>Tabs - fitted <span class="badge alert">Custom work needed</span></h3>
        <div class="demo-container">
            <div class="demo-rendered p-4">
                <?php include('snippets/tabs-fitted.php') ?>
            </div>
            <div class="demo-code"> <small>HTML</small>
                <button class="btn btn-sm btn-primary" data-clipboard-target="#code2">Copy</button>
                <pre data-src="snippets/tabs-fitted.php" class="language-html" id="code2"></pre>
            </div>
        </div>
        <h3>Tabs - vertical</h3>
        <div class="demo-container">
            <div class="demo-rendered p-4">
                <?php include('snippets/tabs-vertical.php') ?>
            </div>
            <div class="demo-code"> <small>HTML</small>
                <button class="btn btn-sm btn-primary" data-clipboard-target="#code3">Copy</button>
                <pre data-src="snippets/tabs-vertical.php" class="language-html" id="code3"></pre>
            </div>
        </div>
    </div>
</main>
<?php include('includes/footer.php') ?>
<?php include('includes/footerscripts.php') ?>
<?php include('snippets/tabs-default-js.php') ?>
<?php include('snippets/tabs-fitted-js.php') ?>
<?php include('snippets/tabs-vertical-js.php') ?>
</body>
</html>
