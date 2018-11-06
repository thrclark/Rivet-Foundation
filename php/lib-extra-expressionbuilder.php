<!--Copyright 2018 Indiana University Research and Technology Corporation -->
<?php 
$section = 'extras';
$componentName = 'Expression builder';
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
        
        <h3>Create expression</h3>
        
        <div class="demo-container">
            <div class="demo-rendered p-4">
                <?php include('snippets/expressionbuilder.php') ?>
            </div>
            <div class="demo-code"> <small>HTML</small>
                <button class="btn btn-sm btn-primary" data-clipboard-target="#code1">Copy</button>
                <pre data-src="snippets/expressionbuilder.php" class="language-html" id="code1"></pre>
            </div>
            <div class="demo-code"> <small>JS</small>
                <button class="btn btn-sm btn-primary" data-clipboard-target="#code2">Copy</button>
                <pre data-src="snippets/expressionbuilder-js.php" class="language-html" id="code2"></pre>
            </div>
        </div>
        
        
        <h3>Read-only expression</h3>
        
          <div class="demo-container">
            <div class="demo-rendered p-4">
                <?php include('snippets/expressionbuilder-readonly.php') ?>
            </div>
            <div class="demo-code"> <small>HTML</small>
                <button class="btn btn-sm btn-primary" data-clipboard-target="#code3">Copy</button>
                <pre data-src="snippets/expressionbuilder-readonly.php" class="language-html" id="code3"></pre>
            </div>
           
        </div>
        
        
        
    </div>
</main>
<?php include('includes/footer.php') ?>
<?php include('includes/footerscripts.php') ?>
<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script> 
<script src='../js/query-builder.standalone.js'></script> 
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
<?php include('snippets/expressionbuilder-js.php') ?>
</body>
</html>
