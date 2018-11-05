// Keyboard navigation of tabs
<script type="text/javascript">
    $(document).ready(function() {
        $('#pills-tab button').keydown(function(e) {
            if (e.keyCode == 39) {
				$(this).parent().next().children('button').focus();
            }
            if (e.keyCode == 37) {
                $(this).parent().prev().children('button').focus();
            }
        });
    });
</script>