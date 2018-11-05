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
.rbt-footer {
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
    <div class="container" style="margin-bottom:100px" id="mainContent">
        <h1 class="mb-0">Rivet-Bootstrap</h1>
        <div class="badge badge-secondary rbt-badge-transparent mb-4">Version 1.1.0-3</div>
        <p> Rivet-Bootstrap is a visual design theme intended to meet the  design specifications as outlined in the <a href="https://uitsdsgn.webtest.iu.edu/uitsds/index.html" target="_blank">Rivet</a> design system currently maintained by the User Experience Office (UXO) at UITS, Indiana University. The premis of this project is to utilize a community-sourced UI framework as the foundation for a design system, and to customize and extend the theme to address the visual design requirements of Rivet (UXO). </p>
        <p>The underlying framework for Rivet-Bootstrap is <a href="https://getbootstrap.com/" target="_blank">Bootstrap</a> (v4.0.0). The theme has been set up in a way that the Bootstrap source is used without modifications (and thus, easily upgradeable from the open source community). The Rivet-Bootstrap theme is then applied on top of Bootstrap, allowing for easy style customization without modifying the Bootstrap core framework. This  not only allows for detailed theming of the Bootstrap base, but it also facilitates the creation of custom components not found in the Bootstrap or Rivet base libraries. </p>
        Rivet-Bootstrap is  available on <a href="https://github.com/iu-uits-es/rivet-bootstrap" target="_blank">Github</a>.
        <h2 class="h5 mt-5">A note about javascript</h2>
        <p> Because of the varied nature of javascript frameworks and implementations, Rivet-Bootstrap does not attempt to address a single javascript solution for your project. The javascript used in Rivet-Bootstrap is sourced from Bootstrap 4 (along with some light jQuery), and may be easily stripped out to be replaced with a javascript integration of your choosing.</p>
    </div>
</main>
<footer class="rbt-footer mt-5">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-auto mr-auto"><img src="../img/trident-small.png" width="44" height="56" alt="">
                <p><a href="https://www.iu.edu/copyright/index.html">Copyright</a> © 2018 The Trustees of <a href="https://www.iu.edu/">Indiana University</a></p>
            </div>
            <div class="col-auto">
                <ul class="rbt-footer-aux-links">
                    <li class="rbt-footer-aux-item"> <a href="#0">Privacy Policy</a> </li>
                    <li class="rbt-footer-aux-item"> <a href="https://accessibility.iu.edu/">Accessibility help</a> </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<?php include('includes/footerscripts.php') ?>
</body>
</html>
