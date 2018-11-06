<!--Copyright 2018 Indiana University Research and Technology Corporation -->
<?php 
$section = 'library';
$componentName = 'Text inputs';
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
            <p class="mb-4">The Rivet equvalent for this component is available <a href="https://rivet.uits.iu.edu/components/forms/text-input/" target="_blank">here</a> for comparison.</p>
            <h2>Text input example</h2>
            <div class="demo-container">
                <div class="demo-rendered p-4">
                    <?php include('snippets/text-input.php') ?>
                </div>
                <div class="demo-code"> <small>HTML</small>
                    <button class="btn btn-sm btn-primary" data-clipboard-target="#code1">Copy</button>
                    <pre data-src="snippets/text-input.php" class="language-html" id="code1"></pre>
                </div>
            </div>
            <h2>Text input - validation</h2>
            <div class="demo-container">
                <div class="demo-rendered p-4">
                    <?php include('snippets/text-input-validation.php') ?>
                </div>
                <div class="demo-code"> <small>HTML</small>
                    <button class="btn btn-sm btn-primary" data-clipboard-target="#code2">Copy</button>
                    <pre data-src="snippets/text-input-validation.php" class="language-html" id="code2"></pre>
                </div>
            </div>
            <h2>Textarea example</h2>
            <div class="demo-container">
                <div class="demo-rendered p-4">
                    <?php include('snippets/text-area.php') ?>
                </div>
                <div class="demo-code"> <small>HTML</small>
                    <button class="btn btn-sm btn-primary" data-clipboard-target="#code3">Copy</button>
                    <pre data-src="snippets/text-area.php" class="language-html" id="code3"></pre>
                </div>
            </div>
            <h2>Text area - validation</h2>
            <div class="demo-container">
                <div class="demo-rendered p-4">
                    <?php include('snippets/text-area-validation.php') ?>
                </div>
                <div class="demo-code"> <small>HTML</small>
                    <button class="btn btn-sm btn-primary" data-clipboard-target="#code4">Copy</button>
                    <pre data-src="snippets/text-area-validation.php" class="language-html" id="code4"></pre>
                </div>
            </div>
        </div>
    
</main>
<?php include('includes/footer.php') ?>
<?php include('includes/footerscripts.php') ?>
</body>
</html>
