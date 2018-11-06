<!--Copyright 2018 Indiana University Research and Technology Corporation -->
<?php 
$section = 'library';
$componentName = 'Alerts';
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
        <h1 class="margin-bottom-3"> <?php echo $componentName; ?></h1>
        <p class="margin-bottom-3">The Rivet equvalent for this component is available <a href="https://rivet.uits.iu.edu/components/overlays/alerts/" target="_blank">here</a> for comparison.</p>
        <h2>Alerts - page level</h2>
        <div class="demo-container">
            <div class="demo-rendered padding-3">
                <?php include('snippets/alerts-pagelevel.php') ?>
            </div>
            <div class="demo-code"> <small>HTML</small>
                <button class="button small primary" data-clipboard-target="#code1">Copy</button>
                <pre data-src="snippets/alerts-pagelevel.php" class="language-html" id="code1"></pre>
            </div>
        </div>
        <h2>Alerts list</h2>
        <div class="demo-container">
            <div class="demo-rendered padding-3">
                <?php include('snippets/alerts-list.php') ?>
            </div>
            <div class="demo-code"> <small>HTML</small>
                <button class="button small primary" data-clipboard-target="#code2">Copy</button>
                <pre data-src="snippets/alerts-list.php" class="language-html" id="code2"></pre>
            </div>
        </div>
        <h2>Alerts - standalone inline</h2>
        <div class="demo-container">
            <div class="demo-rendered padding-3">
                <?php include('snippets/alerts-standalone.php') ?>
            </div>
            <div class="demo-code"> <small>HTML</small>
                <button class="button small primary" data-clipboard-target="#code3">Copy</button>
                <pre data-src="snippets/alerts-standalone.php" class="language-html" id="code3"></pre>
            </div>
        </div>
        <h2>Alerts - inline <span class="badge alert shadow">Custom work needed</span>
</h2>
        <div class="demo-container">
            <div class="demo-rendered padding-3">
                <?php include('snippets/alerts-inline.php') ?>
            </div>
            <div class="demo-code"> <small>HTML</small>
                <button class="button small primary" data-clipboard-target="#code4">Copy</button>
                <pre data-src="snippets/alerts-inline.php" class="language-html" id="code4"></pre>
            </div>
        </div>
    </div>
</main>
<?php include('includes/footer.php') ?>
<?php include('includes/footerscripts.php') ?>
</body>
</html>
