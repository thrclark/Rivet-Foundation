 <a class="rbt-skip-link" href="#mainContent">Skip to content</a>
<header class=" rbt-app-header rbt-app-header--light fixed-top" style="display:nonne">
    <div class="container-fluid">
        <div class="row justify-content-between align-items-center">
            <div class="col-auto">
                <div class="row">
                    <div class="col-auto">
                        <div class="row align-items-center">
                            <div class="col-auto rbt-brand-image-container"> <img src="../img/trident-large.png" alt="trident" class="rbt-brand-image"> </div>
                            <div class="col col-lg-auto rbt-brand-title-container"> <a href="#" class="rbt-brand-title"><strong>Rivet-Bootstrap</strong></a> </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="d-none d-lg-block">
                <ul class="nav align-items-center mr-5">
                    <li class="nav-item"> <a class="nav-link  <?php if ($componentName == 'About') { echo 'active'; } ?>" href="index.php">About</a> </li>
                    <li class="nav-item dropdown menu-large">
                        <button class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Library</button>
                        <ul class="dropdown-menu rbt-navpanel">
                            <div class="row d-flex align-items-stretch">
                                <li class="col-md-3 dropdown-item">
                                    <h3 class="dropdown-header" >Page content</h3>
                                    <ul>
                                        <li <?php if ($componentName == 'Badges') { echo 'class="active"'; } ?>><a href="lib-badges.php">Badges</a></li>
                                        <li <?php if ($componentName == 'Links') { echo 'class="active"'; } ?>><a href="lib-links.php">Links</a></li>
                                        <li <?php if ($componentName == 'Lists') { echo 'class="active"'; } ?>><a href="lib-lists.php">Lists</a></li>
                                        <li <?php if ($componentName == 'Tables') { echo 'class="active"'; } ?>><a href="lib-tables.php">Tables</a></li>
                                        <li <?php if ($componentName == 'Tabs') { echo 'class="active"'; } ?>><a href="lib-tabs.php">Tabs</a> </li>
                                    </ul>
                                </li>
                                <li class="col-md-3 dropdown-item">
                                    <h3 class="dropdown-header" >Forms</h3>
                                    <ul>
                                        <li <?php if ($componentName == 'Buttons') { echo 'class="active"'; } ?>><a href="lib-buttons.php">Buttons</a></li>
                                        <li <?php if ($componentName == 'Segmented buttons') { echo 'class="active"'; } ?>><a href="lib-buttons-segmented.php">Segmented buttons</a></li>
                                        <li <?php if ($componentName == 'Checkboxes') { echo 'class="active"'; } ?>><a href="lib-checkboxes.php">Checkboxes</a></li>
                                        <li <?php if ($componentName == 'File input') { echo 'class="active"'; } ?>><a href="lib-fileinput.php">File input</a></li>
                                        <li <?php if ($componentName == 'Input groups') { echo 'class="active"'; } ?>><a href="lib-inputgroup.php">Input groups</a></li>
                                        <li <?php if ($componentName == 'Radio buttons') { echo 'class="active"'; } ?>><a href="lib-radiobuttons.php">Radio buttons</a></li>
                                        <li <?php if ($componentName == 'Select element') { echo 'class="active"'; } ?>><a href="lib-selectelement.php">Select element</a></li>
                                        <li <?php if ($componentName == 'Text inputs') { echo 'class="active"'; } ?>><a href="lib-textinputs.php">Text inputs</a></li>
                                    </ul>
                                </li>
                                <li class="col-md-3 dropdown-item">
                                    <h3 class="dropdown-header" >Layout</h3>
                                    <ul>
                                        <li <?php if ($componentName == 'Grid') { echo 'class="active"'; } ?>><a href="lib-grid.php">Grid</a></li>
                                        <li <?php if ($componentName == 'Panels') { echo 'class="active"'; } ?>><a href="lib-panel.php">Panels</a></li>
                                        <li <?php if ($componentName == 'Spacing') { echo 'class="active"'; } ?>><a href="lib-spacing.php">Spacing</a></li>
                                        <li <?php if ($componentName == 'Typography') { echo 'class="active"'; } ?>><a href="lib-typography.php">Typography</a></li>
                                    </ul>
                                    <h3 class="dropdown-header" >Navigation</h3>
                                    <ul>
                                        <li <?php if ($componentName == 'Breadcrumb') { echo 'class="active"'; } ?>><a href="lib-breadcrumbs.php">Breadcrumb</a></li>
                                        <li <?php if ($componentName == 'Dropdown') { echo 'class="active"'; } ?>><a href="lib-dropdown.php">Dropdown</a></li>
                                        <li <?php if ($componentName == 'Footer') { echo 'class="active"'; } ?>><a href="lib-footer.php">Footer</a></li>
                                        <li <?php if ($componentName == 'Header') { echo 'class="active"'; } ?>><a href="lib-header.php">Header</a></li>
                                        <li <?php if ($componentName == 'Pagination') { echo 'class="active"'; } ?>><a href="lib-pagination.php">Pagination</a></li>
                                    </ul>
                                </li>
                                <li class="col-md-3 dropdown-item">
                                    <h3 class="dropdown-header" >Overlays</h3>
                                    <ul>
                                        <li <?php if ($componentName == 'Alerts') { echo 'class="active"'; } ?>><a href="lib-alerts.php">Alerts</a></li>
                                        <li <?php if ($componentName == 'Modals') { echo 'class="active"'; } ?>><a href="lib-modals.php">Modals</a></li>
                                    </ul>
                                    <h3 class="dropdown-header" >Utilities</h3>
                                    <ul>
                                        <li <?php if ($componentName == 'Border') { echo 'class="active"'; } ?>><a href="lib-border.php">Border</a></li>
                                        <li <?php if ($componentName == 'Display') { echo 'class="active"'; } ?>><a href="lib-display.php">Display</a></li>
                                        <li <?php if ($componentName == 'Text') { echo 'class="active"'; } ?>><a href="lib-text.php">Text</a></li>
                                        <li <?php if ($componentName == 'Visibility') { echo 'class="active"'; } ?>><a href="lib-visibility.php">Visibility</a></li>
                                        <li <?php if ($componentName == 'Z-index') { echo 'class="active"'; } ?>><a href="lib-zindex.php">Z-index</a></li>
                                    </ul>
                                </li>
                            </div>
                        </ul>
                    </li>
                    <li class="nav-item dropdown menu-large" style="display:none">
                        <button class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Extras</button>
                        <ul class="dropdown-menu rbt-navpanel">
                            <div class="row d-flex align-items-stretch">
                                <li class="col-md-4 dropdown-item d-flex align-items-stretch">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="rbt-ts-26"> <span class="badge badge-secondary rbt-badge-transparent">Extras</span> </div>
                                            <p class="card-text"> The components found here are extensions and customizations to the base Rivet library.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-sm-4 dropdown-item">
                                    <h3 class="dropdown-header" >Rivet extensions</h3>
                                    <ul>
                                        <li <?php if ($componentName == 'Responsive table') { echo 'class="active"'; } ?>><a href="lib-extra-responsivetable.php">Responsive table</a> </li>
                                        <li <?php if ($componentName == 'Drawer underlay') { echo 'class="active"'; } ?>><a href="lib-extra-drawer-underlay.php">Drawer underlay</a> </li>
                                        <li <?php if ($componentName == 'Growl alerts') { echo 'class="active"'; } ?>><a href="lib-extra-growls.php">Growl alerts</a> </li>
                                        <li <?php if ($componentName == 'Icons') { echo 'class="active"'; } ?>><a href="lib-extra-icons.php">Icons</a> </li>
                                    </ul>
                                    <h3 class="dropdown-header" >Navigation</h3>
                                    <ul>
                                        <li <?php if ($componentName == 'Sidebar navigation') { echo 'class="active"'; } ?>><a href="lib-extra-sidebarnav.php">Sidebar navigation</a> </li>
                                        <li <?php if ($componentName == 'Menu panel') { echo 'class="active"'; } ?>><a href="lib-extra-menupanel.php">Menu panel</a> </li>
                                    </ul>
                                </li>
                                <li class="col-sm-4 dropdown-item">
                                    <h3 class="dropdown-header" >Widgets</h3>
                                    <ul>
                                        <li <?php if ($componentName == 'Image uploader') { echo 'class="active"'; } ?>><a href="lib-extra-imageupload.php">Image uploader</a> </li>
                                        <li <?php if ($componentName == 'Date picker') { echo 'class="active"'; } ?>><a href="lib-extra-datepicker.php">Date picker</a> </li>
                                        <li <?php if ($componentName == 'Icon selector') { echo 'class="active"'; } ?>><a href="lib-extra-iconselector.php">Icon selector</a> </li>
                                        <li <?php if ($componentName == 'Expression builder') { echo 'class="active"'; } ?>><a href="lib-extra-expressionbuilder.php">Expression builder</a> </li>
                                        <li <?php if ($componentName == 'Rich text editor') { echo 'class="active"'; } ?>><a href="lib-extra-richtext.php">Rich text editor</a> </li>
                                        <li <?php if ($componentName == 'Timeline') { echo 'class="active"'; } ?>><a href="lib-extra-timeline.php">Timeline</a> </li>
                                    </ul>
                                    <h3 class="dropdown-header" >Forms</h3>
                                    <ul>
                                        <li <?php if ($componentName == 'Clear field') { echo 'class="active"'; } ?>><a href="lib-extra-clearfield.php">Clear field</a> </li>
                                        <li <?php if ($componentName == 'Character count') { echo 'class="active"'; } ?>><a href="lib-extra-charactercount.php">Character count</a> </li>
                                        <li <?php if ($componentName == 'Button action progress') { echo 'class="active"'; } ?>><a href="lib-extra-buttonprogress.php">Button action progress</a> </li>
                                    </ul>
                                </li>
                            </div>
                        </ul>
                    </li>
                    <li class="nav-item"> <a class="nav-link " href="https://github.com/thrclark/hackweek-2017.11" target="_blank">Download</a> </li>
                </ul>
            </nav>
            <div class="col-auto d-lg-none rbt-drawer-button">
                <button class="btn btn-link"><span class="sr-only">Menu</span><span class="rbt-icon-menu" aria-hidden="true"></span> </button>
            </div>
        </div>
    </div>
</header>
<div class="rbt-drawer d-lg-none" style="display:none">
    <nav>
        <ul class="list-group mt-3">
            <li class="list-group-item"><a href="index.php">About</a> </li>
        </ul>
        <h3 class="rbt-ts-14 text-uppercase mt-4 mb-2">Library</h3>
        <ul class="list-group mt-3">
            <li class="list-group-item rbt-collapsable"><a href="#" class="collapsed"  data-toggle="collapse" data-target="#pageContent">Page content</a>
                <ul class="collapse" id="pageContent">
                    <li class="list-group-item"><a href="lib-badges.php">Badges</a></li>
                    <li class="list-group-item"><a href="lib-links.php">Links</a></li>
                    <li class="list-group-item"><a href="lib-lists.php">Lists</a></li>
                    <li class="list-group-item"><a href="lib-tables.php">Tables</a></li>
                    <li class="list-group-item"><a href="lib-tabs.php">Tabs</a> </li>
                </ul>
            </li>
            <li class="list-group-item rbt-collapsable"><a href="#" class="collapsed"  data-toggle="collapse" data-target="#forms">Forms</a>
                <ul class="collapse" id="forms">
                    <li class="list-group-item"><a href="lib-buttons.php">Buttons</a></li>
                    <li class="list-group-item"><a href="lib-buttons-segmented.php">Segmented buttons</a></li>
                    <li class="list-group-item"><a href="lib-checkboxes.php">Checkboxes</a></li>
                    <li class="list-group-item"><a href="lib-fileinput.php">File input</a></li>
                    <li class="list-group-item"><a href="lib-inputgroup.php">Input groups</a></li>
                    <li class="list-group-item"><a href="lib-radiobuttons.php">Radio buttons</a></li>
                    <li class="list-group-item"><a href="lib-selectelement.php">Select element</a></li>
                    <li class="list-group-item"><a href="lib-textinputs.php">Text inputs</a></li>
                </ul>
            </li>
            <li class="list-group-item rbt-collapsable"><a href="#" class="collapsed"  data-toggle="collapse" data-target="#layout">Layout</a>
                <ul class="collapse" id="layout">
                    <li class="list-group-item"><a href="lib-grid.php">Grid</a></li>
                    <li class="list-group-item"><a href="lib-panel.php">Panels</a></li>
                    <li class="list-group-item"><a href="lib-spacing.php">Spacing</a></li>
                    <li class="list-group-item"><a href="lib-typography.php">Typography</a></li>
                </ul>
            </li>
            <li class="list-group-item rbt-collapsable"><a href="#" class="collapsed"  data-toggle="collapse" data-target="#navigation">Navigation</a>
                <ul class="collapse" id="navigation">
                    <li class="list-group-item"><a href="lib-breadcrumbs.php">Breadcrumb</a></li>
                    <li class="list-group-item"><a href="lib-dropdown.php">Dropdown</a></li>
                    <li class="list-group-item"><a href="lib-footer.php">Footer</a></li>
                    <li class="list-group-item"><a href="lib-header.php">Header</a></li>
                    <li class="list-group-item"><a href="lib-pagination.php">Pagination</a></li>
                </ul>
            </li>
            <li class="list-group-item rbt-collapsable"><a href="#" class="collapsed"  data-toggle="collapse" data-target="#overlays">Overlays</a>
                <ul class="collapse" id="overlays">
                    <li class="list-group-item"><a href="lib-alerts.php">Alerts</a></li>
                    <li class="list-group-item"><a href="lib-modals.php">Modals</a></li>
                </ul>
            </li>
            <li class="list-group-item rbt-collapsable"><a href="#" class="collapsed"  data-toggle="collapse" data-target="#utilities">Utilities</a>
                <ul class="collapse" id="utilities">
                    <li class="list-group-item"><a href="lib-border.php">Border</a></li>
                    <li class="list-group-item"><a href="lib-display.php">Display</a></li>
                    <li class="list-group-item"><a href="lib-text.php">Text</a></li>
                    <li class="list-group-item"><a href="lib-visibility.php">Visibility</a></li>
                    <li class="list-group-item"><a href="lib-zindex.php">Z-index</a></li>
                </ul>
            </li>
        </ul>
        <h3 class="rbt-ts-14 text-uppercase mt-4 mb-2">Extras</h3>
        <ul class="list-group mt-3">
            <li class="list-group-item rbt-collapsable"> <a href="#" class="collapsed"  data-toggle="collapse" data-target="#rvbExtensions">Rivet extensions</a>
                <ul class="collapse" id="rvbExtensions">
                    <li class="list-group-item"><a href="lib-extra-responsivetable.php">Responsive table</a> </li>
                    <li class="list-group-item"><a href="lib-extra-drawer-underlay.php">Drawer underlay</a> </li>
                    <li class="list-group-item"><a href="lib-extra-growls.php">Growl alerts</a> </li>
                    <li class="list-group-item"><a href="lib-extra-icons.php">Icons</a> </li>
                </ul>
            </li>
            <li class="list-group-item rbt-collapsable"><a href="#" class="collapsed"  data-toggle="collapse" data-target="#exForms">Forms</a>
                <ul class="collapse" id="exForms">
                    <li class="list-group-item"><a href="lib-extra-clearfield.php">Clear field</a> </li>
                    <li class="list-group-item"><a href="lib-extra-charactercount.php">Character count</a> </li>
                    <li class="list-group-item"><a href="lib-extra-buttonprogress.php">Button action progress</a> </li>
                </ul>
            </li>
            <li class="list-group-item rbt-collapsable"><a href="#" class="collapsed"  data-toggle="collapse" data-target="#exWidgets">Widgets</a>
                <ul class="collapse" id="exWidgets">
                    <li class="list-group-item"><a href="lib-extra-imageupload.php">Image uploader</a> </li>
                    <li class="list-group-item"><a href="lib-extra-datepicker.php">Date picker</a> </li>
                    <li class="list-group-item"><a href="lib-extra-iconselector.php">Icon selector</a> </li>
                    <li class="list-group-item"><a href="lib-extra-expressionbuilder.php">Expression builder</a> </li>
                    <li class="list-group-item"><a href="lib-extra-richtext.php">Rich text editor</a> </li>
                    <li class="list-group-item"><a href="lib-extra-timeline.php">Timeline</a> </li>
                </ul>
            </li>
            <li class="list-group-item rbt-collapsable"><a href="#" class="collapsed"  data-toggle="collapse" data-target="#exNavigation">Navigation</a>
                <ul class="collapse" id="exNavigation">
                    <li class="list-group-item"><a href="lib-extra-sidebarnav.php">Sidebar navigation</a> </li>
                    <li class="list-group-item"><a href="lib-extra-menupanel.php">Menu panel </a> </li>
                </ul>
            </li>
        </ul>
        <ul class="list-group mt-3">
            <li class="list-group-item"><a href="https://github.com/thrclark/hackweek-2017.11" target="_blank">Download</a> </li>
        </ul>
    </nav>
</div>
