<script>
$(document).ready(function() {
    $('#clear_field2').keydown(function() {
        tmpval = $(this).val();
        if (tmpval == '') {
            $("#cleartext2").css({
                "display": "none"
            });
        } else {
            $("#cleartext2").css({
                "display": "block"
            });
        }
    });
    $("#cleartext2").click(function() {
        $("#cleartext2").hide();
        $("#clear_field2").val("");
        $("#clear_field2").focus();
    });
});
</script>