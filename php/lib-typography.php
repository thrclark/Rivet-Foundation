<!--Copyright 2018 Indiana University Research and Technology Corporation -->
<?php 
$section = 'library';
$componentName = 'Typography';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include ('includes/head-meta.php') ?>
<?php include('includes/styles.php') ?>
</head>
<?php include('includes/app-header.php') ?>
<main>
    <div class="grid-container" id="mainContent">
        <h1 class="margin-bottom-3"> <?php echo $componentName; ?></h1>
        <p class="margin-bottom-3">The Rivet equvalent for this component is available <a href="https://rivet.uits.iu.edu/components/layout/typography/" target="_blank">here</a> for comparison.</p>
        <table class="table">
            <caption class="sr-only">
            Rivet type scale
            </caption>
            <thead>
                <tr>
                    <th>Helper Class</th>
                    <th>rem</th>
                    <th>px</th>
                    <th>Actual size</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><code>.rbt-ts-12, .rbt-ts-xxs</code>
                   </td>
                    <td>.75rem</td>
                    <td>12px</td>
                    <td class="rbt-ts-12">Fulfilling the promise</td>
                </tr>
                <tr>
                    <td><code>.rbt-ts-14, .rbt-ts-xs</code></td>
                    <td>.875rem</td>
                    <td>14px</td>
                    <td class="rbt-ts-14">Fulfilling the promise</td>
                </tr>
                <tr>
                    <td><code>.rbt-ts-base, ts-16</code></td>
                    <td>1rem</td>
                    <td>16px</td>
                    <td class="rbt-ts-base">Fulfilling the promise</td>
                </tr>
                <tr>
                    <td><code>.rbt-ts-18</code></td>
                    <td>1.125rem</td>
                    <td>18px</td>
                    <td class="rbt-ts-18">Fulfilling the promise</td>
                </tr>
                <tr>
                    <td><code>.rbt-ts-20, .rbt-ts-sm</code></td>
                    <td>1.25rem</td>
                    <td>20px</td>
                    <td class="rbt-ts-20">Fulfilling the promise</td>
                </tr>
                <tr>
                    <td><code>.rbt-ts-23</code></td>
                    <td>1.4375rem</td>
                    <td>23px</td>
                    <td class="rbt-ts-23">Fulfilling the promise</td>
                </tr>
                <tr>
                    <td><code>.rbt-ts-26, .rbt-ts-md</code></td>
                    <td>1.625rem</td>
                    <td>26px</td>
                    <td class="rbt-ts-26">Fulfilling the promise</td>
                </tr>
                <tr>
                    <td><code>.rbt-ts-29</code></td>
                    <td>1.8125rem</td>
                    <td>29px</td>
                    <td class="rbt-ts-29">Fulfilling the promise</td>
                </tr>
                <tr>
                    <td><code>.rbt-ts-32, .rbt-ts-lg</code></td>
                    <td>2rem</td>
                    <td>32px</td>
                    <td class="rbt-ts-32">Fulfilling the promise</td>
                </tr>
                <tr>
                    <td><code>.rbt-ts-36</code></td>
                    <td>2.25rem</td>
                    <td>36px</td>
                    <td class="rbt-ts-36">Fulfilling the promise</td>
                </tr>
                <tr>
                    <td><code>.rbt-ts-41, .rbt-ts-xl</code></td>
                    <td>2.5625rem</td>
                    <td>41px</td>
                    <td class="rbt-ts-41">Fulfilling the promise</td>
                </tr>
                <tr>
                    <td><code>.rbt-ts-46</code></td>
                    <td>2.875rem</td>
                    <td>46px</td>
                    <td class="rbt-ts-46">Fulfilling the promise</td>
                </tr>
                <tr>
                    <td><code>.rbt-ts-52, .rbt-ts-xxl</code></td>
                    <td>3.25rem</td>
                    <td>52px</td>
                    <td class="rbt-ts-52">Fulfilling the promise</td>
                </tr>
            </tbody>
        </table>
        <h2>Type scale aliases</h2>
        <div class="demo-container">
            <div class="demo-rendered padding-3">
                <?php include('snippets/typography-aliases.php') ?>
            </div>
            <div class="demo-code"> <small>HTML</small>
                <button class="button small primary" data-clipboard-target="#code1">Copy</button>
                <pre data-src="snippets/typography-aliases.php" class="language-html" id="code1"></pre>
            </div>
        </div>
        <h2> Responsive type</h2>
        <div class="demo-container">
            <div class="demo-rendered padding-3">
                <?php include('snippets/typography-responsive.php') ?>
            </div>
            <div class="demo-code"> <small>HTML</small>
                <button class="button small primary" data-clipboard-target="#code2">Copy</button>
                <pre data-src="snippets/typography-responsive.php" class="language-html" id="code2"></pre>
            </div>
        </div>
    </div>
</main>
<?php include('includes/footer.php') ?>
<?php include('includes/footerscripts.php') ?>
</body></html>