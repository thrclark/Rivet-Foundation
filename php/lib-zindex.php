<!--Copyright 2018 Indiana University Research and Technology Corporation -->
<?php 
$section = 'library';
$componentName = 'Z-index';
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
            <p class="mb-4">The Rivet equvalent for this component is available <a href="https://rivet.uits.iu.edu/components/utilities/z-index/" target="_blank">here</a> for comparison.</p>
          
            <div class="demo-container">
                <div class="demo-rendered p-4">
                    <?php include('snippets/zindex.php') ?>
                </div>
                <div class="demo-code"> <small>HTML</small>
                    <button class="btn btn-sm btn-primary" data-clipboard-target="#code1">Copy</button>
                    <pre data-src="snippets/zindex.php" class="language-html" id="code1"></pre>
                </div>
            </div>
            
        </div>
    
</main>
<?php include('includes/footer.php') ?>
<?php include('includes/footerscripts.php') ?>
</body>
</html>
