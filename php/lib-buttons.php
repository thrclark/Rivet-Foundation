<!--Copyright 2018 Indiana University Research and Technology Corporation -->
<?php 
$section = 'library';
$componentName = 'Buttons';
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
        <h1 class="margin-bottom-2"> <?php echo $componentName; ?></h1>
        <p class="margin-bottom-3">The Rivet equvalent for this component is available <a href="https://rivet.uits.iu.edu/components/forms/buttons/" target="_blank">here</a> for comparison.</p>
        <h2>Button examples</h2>
        <div class="demo-container">
            <div class="demo-rendered padding-2">
                <?php include('snippets/buttons-base.php') ?>
            </div>
            <div class="demo-code"> <small>HTML</small>
                <button class="button small primary" data-clipboard-target="#code1">Copy</button>
                <pre data-src="snippets/buttons-base.php" class="language-html" id="code1"></pre>
            </div>
        </div>
        <h2>Secondary variations</h2>
        <div class="demo-container">
            <div class="demo-rendered padding-2">
                <?php include('snippets/buttons-secondary.php') ?>
            </div>
            <div class="demo-code"> <small>HTML</small>
                <button class="button small primary" data-clipboard-target="#code2">Copy</button>
                <pre data-src="snippets/buttons-secondary.php" class="language-html" id="code2"></pre>
            </div>
        </div>
        <h2>Small buttons</h2>
        <div class="demo-container">
            <div class="demo-rendered padding-2">
                <?php include('snippets/buttons-small.php') ?>
            </div>
            <div class="demo-code"> <small>HTML</small>
                <button class="button small primary" data-clipboard-target="#code3">Copy</button>
                <pre data-src="snippets/buttons-small.php" class="language-html" id="code3"></pre>
            </div>
        </div>
        <h2>Full width buttons</h2>
        <div class="demo-container">
            <div class="demo-rendered padding-2">
                <?php include('snippets/buttons-fullwidth.php') ?>
            </div>
            <div class="demo-code"> <small>HTML</small>
                <button class="button small primary" data-clipboard-target="#code8">Copy</button>
                <pre data-src="snippets/buttons-fullwidth.php" class="language-html" id="code8"></pre>
            </div>
        </div>
        <h2>Using icons inside buttons</h2>
        <div class="demo-container">
            <div class="demo-rendered padding-2">
                <?php include('snippets/buttons-icons.php') ?>
            </div>
            <div class="demo-code"> <small>HTML</small>
                <button class="button small primary" data-clipboard-target="#code7">Copy</button>
                <pre data-src="snippets/buttons-icons.php" class="language-html" id="code7"></pre>
            </div>
        </div>
        <h2>Button groups </h2>
        <div class="demo-container">
            <div class="demo-rendered padding-2">
                <?php include('snippets/buttons-group.php') ?>
            </div>
            <div class="demo-code"> <small>HTML</small>
                <button class="button small primary" data-clipboard-target="#code4">Copy</button>
                <pre data-src="snippets/buttons-group.php" class="language-html" id="code4"></pre>
            </div>
        </div>
        <h2>Button groups - right </h2>
        <div class="demo-container">
            <div class="demo-rendered padding-2">
                <?php include('snippets/buttons-groupright.php') ?>
            </div>
            <div class="demo-code"> <small>HTML</small>
                <button class="button small primary" data-clipboard-target="#code5">Copy</button>
                <pre data-src="snippets/buttons-groupright.php" class="language-html" id="code5"></pre>
            </div>
        </div>
        <h2>Button anchors</h2>
        <div class="demo-container">
            <div class="demo-rendered padding-2">
                <?php include('snippets/buttons-anchors.php') ?>
            </div>
            <div class="demo-code"> <small>HTML</small>
                <button class="button small primary" data-clipboard-target="#code6">Copy</button>
                <pre data-src="snippets/buttons-anchors.php" class="language-html" id="code6"></pre>
            </div>
        </div>
    </div>
</main>
<?php include('includes/footer.php') ?>
<?php include('includes/footerscripts.php') ?>
</body>
</html>
