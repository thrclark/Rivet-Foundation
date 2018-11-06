<!--Copyright 2018 Indiana University Research and Technology Corporation -->
<?php 
$section = 'library';
$componentName = 'Tables';
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
        <p class="margin-bottom-3">The Rivet equvalent for this component is available <a href="https://rivet.uits.iu.edu/components/page-content/tables/" target="_blank">here</a> for comparison.</p>
        <h2>Default table</h2>
        <div class="demo-container">
            <div class="demo-rendered padding-3">
                <?php include('snippets/table-default.php') ?>
            </div>
            <div class="demo-code"> <small>HTML</small>
                <button class="button small primary" data-clipboard-target="#code1">Copy</button>
                <pre data-src="snippets/table-default.php" class="language-html" id="code1"></pre>
            </div>
        </div>
        <h2>Striped table</h2>
        <div class="demo-container">
            <div class="demo-rendered padding-3">
                <?php include('snippets/table-striped.php') ?>
            </div>
            <div class="demo-code"> <small>HTML</small>
                <button class="button small primary" data-clipboard-target="#code2">Copy</button>
                <pre data-src="snippets/table-striped.php" class="language-html" id="code2"></pre>
            </div>
        </div>
        <h2>Plain table <span class="badge alert">Custom work needed</span></h2>
        <div class="demo-container">
            <div class="demo-rendered padding-3">
                <?php include('snippets/table-plain.php') ?>
            </div>
            <div class="demo-code"> <small>HTML</small>
                <button class="button small primary" data-clipboard-target="#code3">Copy</button>
                <pre data-src="snippets/table-plain.php" class="language-html" id="code3"></pre>
            </div>
        </div>
        <h3> Compact table <span class="badge alert">Custom work needed</span></h3>
        <div class="demo-container">
            <div class="demo-rendered padding-3">
                <?php include('snippets/table-compact.php') ?>
            </div>
            <div class="demo-code"> <small>HTML</small>
                <button class="button small primary" data-clipboard-target="#code4">Copy</button>
                <pre data-src="snippets/table-compact.php" class="language-html" id="code4"></pre>
            </div>
        </div>
        <h3>Cells table variant <span class="badge alert">Custom work needed</span></h3>
        <div class="demo-container">
            <div class="demo-rendered padding-3">
                <?php include('snippets/table-grid.php') ?>
            </div>
            <div class="demo-code"> <small>HTML</small>
                <button class="button small primary" data-clipboard-target="#code5">Copy</button>
                <pre data-src="snippets/table-grid.php" class="language-html" id="code5"></pre>
            </div>
        </div>
    </div>
</main>
<?php include('includes/footer.php') ?>
<?php include('includes/footerscripts.php') ?>
</body>
</html>
