<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>



<!-- Compressed JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.5.0/dist/js/foundation.min.js" integrity="sha256-GZq6aeugpWo25iH//1eKmeK6FHCf+6KXTfoUpkCqPCA= sha384-vjxUQtbGw5FJMigaaFpXYyxoHHLb7LbvRywnMZOiPJeh5j9sl2rnmQ3iucuegRm8 sha512-h7tIMIX/opZXfWkcTDbkO+nT0LePyAAwDacfYhWtgGUidV+Kkh3eesW52fPSxKEsw3rgywKhQvghNLT4eDuUyw==" crossorigin="anonymous"></script>

 <script>
      $(document).foundation();
    </script>

<script src="../js/prism.js"></script>
<script src="../js/clipboard.min.js"></script>
<script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>
<script>
    $(".rbt-drawer-button").click(function() {
        $(".rbt-drawer,.rbt-drawer-button").toggleClass("open");
        $("#mainContent").toggleClass("faded");
    });
    $("#mainContent").click(function() {
        $("#mainContent").removeClass("faded");
        $(".rbt-drawer,.rbt-drawer-button").removeClass("open");
    });
</script>
<script>
    var clipboard = new ClipboardJS('.btn');
    clipboard.on('success', function(e) {
        console.log(e);
    });
    clipboard.on('error', function(e) {
        console.log(e);
    });
</script>
<script>
    $(document).ready(function() {
        $(function() {
            $(".demo-code .btn").click(function() {
                $(this).text("Copied!");
                setTimeout(function() {
                    $(".demo-code .btn").text("Copy");
                }, 4000)
            });
        });
    });
</script>