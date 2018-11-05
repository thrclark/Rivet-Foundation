// Keyboard navigation of tabs
<script type="text/javascript">
    $(document).ready(function() {
        $('.rbt-tabs-vertical button').keydown(function(e) {
            if (e.keyCode == 39) {
				$(this).next('button').focus();
            }
            if (e.keyCode == 37) {
                $(this).prev('button').focus();
            }
        });
    });
</script>