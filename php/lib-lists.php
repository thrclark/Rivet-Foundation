<!--Copyright 2018 Indiana University Research and Technology Corporation -->
<?php 
$section = 'library';
$componentName = 'Lists';
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
            <p class="mb-4">The Rivet equvalent for this component is available <a href="https://rivet.uits.iu.edu/components/page-content/lists/" target="_blank">here</a> for comparison.</p>
            <h2>Unordered list</h2>
            <div class="demo-container">
                <div class="demo-rendered p-4">
                    <?php include('snippets/lists-unordered.php') ?>
                </div>
                <div class="demo-code"> <small>HTML</small>
                    <button class="btn btn-sm btn-primary" data-clipboard-target="#code1">Copy</button>
                    <pre data-src="snippets/lists-unordered.php" class="language-html" id="code1"></pre>
                </div>
            </div>
            <h2>Ordered list</h2>
            <div class="demo-container">
                <div class="demo-rendered p-4">
                    <?php include('snippets/lists-ordered.php') ?>
                </div>
                <div class="demo-code"> <small>HTML</small>
                    <button class="btn btn-sm btn-primary" data-clipboard-target="#code2">Copy</button>
                    <pre data-src="snippets/lists-ordered.php" class="language-html" id="code2"></pre>
                </div>
            </div>
            <h2>Plain list</h2>
            <div class="demo-container">
                <div class="demo-rendered p-4">
                    <?php include('snippets/lists-plain.php') ?>
                </div>
                <div class="demo-code"> <small>HTML</small>
                    <button class="btn btn-sm btn-primary" data-clipboard-target="#code3">Copy</button>
                    <pre data-src="snippets/lists-plain.php" class="language-html" id="code3"></pre>
                </div>
            </div>
           
           
           
           
              
           
            <h2>Inline list</h2>
            <div class="demo-container">
                <div class="demo-rendered p-4">
                    <?php include('snippets/lists-inline.php') ?>
                </div>
                <div class="demo-code"> <small>HTML</small>
                    <button class="btn btn-sm btn-primary" data-clipboard-target="#code6">Copy</button>
                    <pre data-src="snippets/lists-inline.php" class="language-html" id="code6"></pre>
                </div>
            </div>
           
           
           
           
           
           
           
           
            <h2>Definition list</h2>
            <div class="demo-container">
                <div class="demo-rendered p-4">
                    <?php include('snippets/lists-definition.php') ?>
                </div>
                <div class="demo-code"> <small>HTML</small>
                    <button class="btn btn-sm btn-primary" data-clipboard-target="#code4">Copy</button>
                    <pre data-src="snippets/lists-definition.php" class="language-html" id="code4"></pre>
                </div>
            </div>
            <h2>Definition list - columns</h2>
            <div class="demo-container">
                <div class="demo-rendered p-4">
                    <?php include('snippets/lists-definition-column.php') ?>
                </div>
                <div class="demo-code"> <small>HTML</small>
                    <button class="btn btn-sm btn-primary" data-clipboard-target="#code5">Copy</button>
                    <pre data-src="snippets/lists-definition-column.php" class="language-html" id="code5"></pre>
                </div>
            </div>
        </div>
    
</main>
<?php include('includes/footer.php') ?>
<?php include('includes/footerscripts.php') ?>
</body>
</html>
