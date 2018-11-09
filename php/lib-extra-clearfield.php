<!--Copyright 2018 Indiana University Research and Technology Corporation -->
<?php 
$section = 'extras';
$componentName = 'Clear field';
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
           
            <h3>Default</h3>
            <div class="demo-container">
                <div class="demo-rendered padding-2">
                    <?php include('snippets/clear-field.php') ?>
                </div>
                <div class="demo-code"> <small>HTML</small>
                    <button class="button small primary" data-clipboard-target="#code1">Copy</button>
                    <pre data-src="snippets/clear-field.php" class="language-html" id="code1"></pre>
                </div>
                <div class="demo-code"> <small>JS</small>
                    <button class="button small primary" data-clipboard-target="#code2">Copy</button>
                    <pre data-src="snippets/clear-field-js.php" class="language-html" id="code2"></pre>
                </div>
            </div>
            <h3> Input group</h3>
            <div class="demo-container">
                <div class="demo-rendered padding-2">
                    <?php include('snippets/clear-field-inputgroup.php') ?>
                </div>
                <div class="demo-code"> <small>HTML</small>
                    <button class="button small primary" data-clipboard-target="#code3">Copy</button>
                    <pre data-src="snippets/clear-field-inputgroup.php" class="language-html" id="code3"></pre>
                </div>
                <div class="demo-code"> <small>JS</small>
                    <button class="button small primary" data-clipboard-target="#code4">Copy</button>
                    <pre data-src="snippets/clear-field-inputgroup-js.php" class="language-html" id="code4"></pre>
                </div>
            </div>
        </div>
    
</main>
<?php include('includes/footer.php') ?>
<?php include('includes/footerscripts.php') ?>
<?php include('snippets/clear-field-js.php') ?>
<?php include('snippets/clear-field-inputgroup-js.php') ?>
</body>
</html>
