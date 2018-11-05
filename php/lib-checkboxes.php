<!--Copyright 2018 Indiana University Research and Technology Corporation -->
<?php 
$section = 'library';
$componentName = 'Checkboxes';
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
        <h1 class="mb-4"> <?php echo $componentName; ?></h1>
        <p class="mb-4">The Rivet equvalent for this component is available <a href="https://rivet.uits.iu.edu/components/forms/checkboxes/" target="_blank">here</a> for comparison.</p>
        <h2>Checkboxes - inline</h2>
        <div class="demo-container">
            <div class="demo-rendered p-4">
                <?php include('snippets/checkbox-inline.php') ?>
            </div>
            <div class="demo-code"> <small>HTML</small>
                <button class="btn btn-sm btn-primary" data-clipboard-target="#code1">Copy</button>
                <pre data-src="snippets/checkbox-inline.php" class="language-html" id="code1"></pre>
            </div>
        </div>
        <h2>Checkboxes - stacked</h2>
        <div class="demo-container">
            <div class="demo-rendered p-4">
                <?php include('snippets/checkbox-stacked.php') ?>
            </div>
            <div class="demo-code"> <small>HTML</small>
                <button class="btn btn-sm btn-primary" data-clipboard-target="#code2">Copy</button>
                <pre data-src="snippets/checkbox-stacked.php" class="language-html" id="code2"></pre>
            </div>
        </div>
        <h2>Checkboxes - indeterminate</h2>
        <div class="demo-container">
            <div class="demo-rendered p-4">
                <?php include('snippets/checkbox-indeterminate.php') ?>
            </div>
            <div class="demo-code"> <small>HTML</small>
                <button class="btn btn-sm btn-primary" data-clipboard-target="#code3">Copy</button>
                <pre data-src="snippets/checkbox-indeterminate.php" class="language-html" id="code3"></pre>
            </div>
            <div class="demo-code"> <small>JS</small>
                <button class="btn btn-sm btn-primary" data-clipboard-target="#code4">Copy</button>
                <pre data-src="snippets/checkbox-indeterminate-js.php" class="language-html" id="code4"></pre>
            </div>
        </div>
        
        
        
        
        
         <h2>Checkboxes - alternate markup</h2>
        <div class="demo-container">
            <div class="demo-rendered p-4">
                <?php include('snippets/checkbox-alternate.php') ?>
            </div>
            <div class="demo-code"> <small>HTML</small>
                <button class="btn btn-sm btn-primary" data-clipboard-target="#code4">Copy</button>
                <pre data-src="snippets/checkbox-alternate.php" class="language-html" id="code4"></pre>
            </div>
           
        </div>
        
        
        
        
    </div>
</main>
<?php include('includes/footer.php') ?>
<?php include('includes/footerscripts.php') ?>
<?php include('snippets/checkbox-indeterminate-js.php') ?>
</body>
</html>
