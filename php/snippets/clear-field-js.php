<script>
$(document).ready(function() {
    $('#clear_field').keydown(function() {
        tmpval = $(this).val();
        if (tmpval == '') {
            $("#cleartext1").css({
                "display": "none"
            });
        } else {
            $("#cleartext1").css({
                "display": "block"
            });
        }
    });
    $("#cleartext1").click(function() {
        $("#cleartext1").hide();
        $("#clear_field").val("");
        $("#clear_field").focus();
    });
});
</script>