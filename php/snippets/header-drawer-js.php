<script>
    $(".rfd-drawer-button").click(function() {
        $(".rbt-drawer,.rfd-drawer-button").toggleClass("open");
        $("#maincontent").toggleClass("faded");
    });
    $("#maincontent").click(function() {
        $("#maincontent").removeClass("faded");
        $(".rbt-drawer,.rfd-drawer-button").removeClass("open");
    });
</script>