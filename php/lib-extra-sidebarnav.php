<!--Copyright 2018 Indiana University Research and Technology Corporation -->
<?php 
$section = 'extras';
$componentName = 'Sidebar navigation';
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
            <h2 class="mb-4"> <?php echo $componentName; ?> </h2>
            <h3>Default</h3>
            <div class="demo-container">
                <div class="demo-rendered p-4">
                    <?php include('snippets/sidebarnav.php') ?>
                </div>
                <div class="demo-code"> <small>HTML</small>
                    <button class="btn btn-sm btn-primary" data-clipboard-target="#code1">Copy</button>
                    <pre data-src="snippets/sidebarnav.php" class="language-html" id="code1"></pre>
                </div>
            </div>
            <h3>Headers</h3>
            <div class="demo-container">
                <div class="demo-rendered p-4">
                    <?php include('snippets/sidebarnav-headers.php') ?>
                </div>
                <div class="demo-code"> <small>HTML</small>
                    <button class="btn btn-sm btn-primary" data-clipboard-target="#code2">Copy</button>
                    <pre data-src="snippets/sidebarnav-headers.php" class="language-html" id="code2"></pre>
                </div>
            </div>
            <h3>Dividers</h3>
            <div class="demo-container">
                <div class="demo-rendered p-4">
                    <?php include('snippets/sidebarnav-dividers.php') ?>
                </div>
                <div class="demo-code"> <small>HTML</small>
                    <button class="btn btn-sm btn-primary" data-clipboard-target="#code3">Copy</button>
                    <pre data-src="snippets/sidebarnav-dividers.php" class="language-html" id="code3"></pre>
                </div>
            </div>
        </div>
    
</main>
<?php include('includes/footer.php') ?>
<?php include('includes/footerscripts.php') ?>
</body>
</html>
