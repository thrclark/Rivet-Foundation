<!--Copyright 2018 Indiana University Research and Technology Corporation -->
<?php 
$section = 'extras';
$componentName = 'Image uploader';
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
            <h3> Populated state</h3>
            <div class="demo-container">
                <div class="demo-rendered p-4">
                    <?php include('snippets/imageupload.php') ?>
                </div>
                <div class="demo-code"> <small>HTML</small>
                    <button class="btn btn-sm btn-primary" data-clipboard-target="#code1">Copy</button>
                    <pre data-src="snippets/imageupload.php" class="language-html" id="code1"></pre>
                </div>
            </div>
            <h3> Populated state - checkerboard</h3>
            <p> Note - the checkerboard background styling is useful in instances where transparent images may be uploaded, allowing the transparant regions to be more easily visible.</p>
            <div class="demo-container">
                <div class="demo-rendered p-4">
                    <?php include('snippets/imageupload-checkerboard.php') ?>
                </div>
                <div class="demo-code"> <small>HTML</small>
                    <button class="btn btn-sm btn-primary" data-clipboard-target="#code2">Copy</button>
                    <pre data-src="snippets/imageupload-checkerboard.php" class="language-html" id="code2"></pre>
                </div>
            </div>
            <h3> Empty state</h3>
            <div class="demo-container">
                <div class="demo-rendered p-4">
                    <?php include('snippets/imageupload-empty.php') ?>
                </div>
                <div class="demo-code"> <small>HTML</small>
                    <button class="btn btn-sm btn-primary" data-clipboard-target="#code3">Copy</button>
                    <pre data-src="snippets/imageupload-empty.php" class="language-html" id="code3"></pre>
                </div>
            </div>
            <h3> Image upload messaging</h3>
            <div class="demo-container">
                <div class="demo-rendered p-4">
                    <?php include('snippets/imageupload-spinner.php') ?>
                </div>
                <div class="demo-code"> <small>HTML</small>
                    <button class="btn btn-sm btn-primary" data-clipboard-target="#code4">Copy</button>
                    <pre data-src="snippets/imageupload-spinner.php" class="language-html" id="code4"></pre>
                </div>
                <div class="demo-code"> <small>JS</small>
                    <button class="btn btn-sm btn-primary" data-clipboard-target="#code5">Copy</button>
                    <pre data-src="snippets/imageupload-spinner-js.php" class="language-html" id="code5"></pre>
                </div>
            </div>
        </div>

</main>
<?php include('includes/footer.php') ?>
<?php include('includes/footerscripts.php') ?>
<?php include('snippets/imageupload-spinner-js.php') ?>
</body>
</html>
