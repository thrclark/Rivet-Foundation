<!--Copyright 2018 Indiana University Research and Technology Corporation -->
<?php 
$section = '';
$page_title = '';
$componentName = 'About';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include ('includes/head-meta.php') ?>
<?php include('includes/styles.php') ?>
<style>
.nowrap {
	white-space: nowrap
}
.rfd-footer {
	background-color: #fafafa;
	border-top: 1px solid #eeeeee;
	width: 100%;
	position: fixed;
	bottom: 0px;
}
</style>
</head>
<body>
<?php include('includes/app-header.php') ?>
<main>
    <div class="grid-container" style="margin-bottom:100px" id="mainContent">
        <h1 class="margin-bottom-0">Rivet-Foundation</h1>
        <div class="badge hollow secondary rbt-badge-transparent margin-bottom-3">Version Alpha</div>
        <p> Rivet-Foundation is a visual design theme intended to meet the  design specifications as outlined in the <a href="https://uitsdsgn.webtest.iu.edu/uitsds/index.html" target="_blank">Rivet</a> design system currently maintained by the User Experience Office (UXO) at UITS, Indiana University. The premis of this project is to utilize a community-sourced UI framework as the basis for a design system, and to customize and extend the theme to address the visual design requirements of Rivet (UXO). </p>
        <p>The underlying framework for Rivet-Foundation is <a href="https://foundation.zurb.com/sites/docs/" target="_blank">Foundation</a> (v6.5.0). The theme has been set up in a way that the Foundation source is used without modifications (and thus, easily upgradeable from the open source community). The Rivet-Foundation theme is then applied on top of Foundation, allowing for easy style customization without modifying the Foundation core framework. This  not only allows for detailed theming of the Foundation base, but it also facilitates the creation of custom components not found in the Foundation or Rivet base libraries. </p>
        Rivet-Foundation is  available on <a href="https://github.com/thrclark/Rivet-Foundation" target="_blank">Github</a>.
        <h2 class="h5 margin-top-3">A note about javascript</h2>
        <p> Because of the varied nature of javascript frameworks and implementations, Rivet-Foundation does not attempt to address a single javascript solution for your project. The javascript used in Rivet-Foundation is sourced from Foundation (along with some light jQuery), and may be easily stripped out to be replaced with a javascript integration of your choosing.</p>
    </div>
</main>
<footer class="rfd-footer">
    <div class="grid-container fluid">
        <div class="grid-x no-gutters align-middle">
            <div class="cell shrink"><img src="../img/trident-small.png" width="44" height="56" alt=""/></div>
            <div class="cell auto">
                <p><a href="https://www.iu.edu/copyright/index.html">Copyright</a> © 2018 The Trustees of <a href="https://www.iu.edu/">Indiana University</a></p>
            </div>
            <div class="cell shrink">
                <ul class="menu rfd-footer-aux-links">
                    <li class="rfd-footer-aux-item"> <a href="#0">Privacy Policy</a> </li>
                    <li class="rfd-footer-aux-item"> <a href="https://accessibility.iu.edu/">Accessibility help</a> </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<?php include('includes/footerscripts.php') ?>
</body>
</html>
