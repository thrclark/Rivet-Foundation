<!--Copyright 2018 Indiana University Research and Technology Corporation -->
<?php 
$section = 'library';	
$componentName = 'Header';
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
        <h1 class="margin-bottom-3"> <?php echo $componentName; ?> <span class="badge alert">Custom work needed</span> </h1>
        <p class="margin-bottom-3">The Rivet equvalent for this component is available <a href="https://rivet.uits.iu.edu/components/navigation/header/" target="_blank">here</a> for comparison.</p>
        <h2>Base header</h2>
        <div class="demo-container">
            <div class="demo-rendered padding-3">
                <?php include('snippets/header-default.php') ?>
            </div>
            <div class="demo-code"> <small>HTML</small>
                <button class="button small primary" data-clipboard-target="#code1">Copy</button>
                <pre data-src="snippets/header-default.php" class="language-html" id="code1"></pre>
            </div>
        </div>
        <h2>Header with identity menu</h2>
        <div class="demo-container">
            <div class="demo-rendered padding-3">
                <?php include('snippets/header-identity.php') ?>
            </div>
            <div class="demo-code"> <small>HTML</small>
                <button class="button small primary" data-clipboard-target="#code2">Copy</button>
                <pre data-src="snippets/header-identity.php" class="language-html" id="code2"></pre>
            </div>
        </div>
        <h2>Header with nav &amp; drawer</h2>
        <div class="demo-container">
            <div class="demo-rendered padding-3"> View this demo <a href="lib-header-drawer.php" target="_blank">here</a>. To view the drawer functionality, resize your viewport to less than 992px. </div>
            <div class="demo-code"> <small>HTML</small>
                <button class="button small primary" data-clipboard-target="#code3">Copy</button>
                <pre data-src="snippets/header-mainnav.php" class="language-html" id="code3"></pre>
            </div>
            <div class="demo-code"> <small>JS</small>
                <button class="button small primary" data-clipboard-target="#code4">Copy</button>
                <pre data-src="snippets/header-drawer-js.php" class="language-html" id="code4"></pre>
            </div>
        </div>
        <h2>Header with light background</h2>
        <div class="demo-container" style="background-color:#FAFAFA">
            <div class="demo-rendered padding-3">
                <?php include('snippets/header-light.php') ?>
            </div>
            <div class="demo-code"> <small>HTML</small>
                <button class="button small primary" data-clipboard-target="#code5">Copy</button>
                <pre data-src="snippets/header-light.php" class="language-html" id="code5"></pre>
            </div>
        </div>
    </div>
</main>
<?php include('includes/footer.php') ?>
<?php include('includes/footerscripts.php') ?>
</body>
</html>
