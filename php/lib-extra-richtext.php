<!--Copyright 2018 Indiana University Research and Technology Corporation -->
<?php 
$section = 'extras';
$componentName = 'Rich text editor';
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
        <p> Based on the <a href="https://github.com/sparksuite/simplemde-markdown-editor" target="_blank">simplemde</a> rich text editor plugin. Relies on Font Awesome v4.7 icon fonts.</p>
        <div class="demo-container">
            <div class="demo-rendered padding-3">
                <?php include('snippets/richtext.php') ?>
            </div>
            <div class="demo-code"> <small>HTML</small>
                <button class="button small primary" data-clipboard-target="#code1">Copy</button>
                <pre data-src="snippets/richtext.php" class="language-html" id="code1"></pre>
            </div>
            <div class="demo-code"> <small>JS</small>
                <button class="button small primary" data-clipboard-target="#code2">Copy</button>
                <pre data-src="snippets/richtext-js.php" class="language-html" id="code2"></pre>
            </div>
        </div>
    </div>
</main>
<?php include('includes/footer.php') ?>
<?php include('includes/footerscripts.php') ?>
<?php include('snippets/richtext-js.php') ?>
</body>
</html>
