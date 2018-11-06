<!--Copyright 2018 Indiana University Research and Technology Corporation -->
<?php 
$section = 'extras';
$componentName = 'Icons';
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
        <p> Note - the icons found here are taken from the <a href="https://github.iu.edu/UITS/rivet-icons" target="_blank">Experimental Rivet Icon set</a>, and will likely change over time. Other icon sets (i.e FontAwesome, Icomoon, etc.) may be manually added to your projects as needed.</p>
        <div class="demo-container">
            <div class="demo-rendered padding-3">
                <?php include('snippets/icons.php') ?>
            </div>
            <div class="demo-code"> <small>HTML</small>
                <button class="button small primary" data-clipboard-target="#code1">Copy</button>
                <pre data-src="snippets/icons.php" class="language-html" id="code1"></pre>
            </div>
        </div>
    </div>
</main>
<?php include('includes/footer.php') ?>
<?php include('includes/footerscripts.php') ?>
</body>
</html>
