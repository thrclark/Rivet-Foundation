<script>
    $(document).ready(function() {
        $("#counterDemo1").keyup(function() {
            var length = $(this).val().length;
            length = 20 - length;
            $('#charcounter1').text(length);
            if ($("#counterDemo1").val().length > 20) {
                $("#counterDemo1_badge").last().addClass("badge-danger");
            } else {
                $("#counterDemo1_badge").last().removeClass("badge-danger");
            }
        });
        $("#counterDemo2").keyup(function() {
            var length = $(this).val().length;
            length = 30 - length;
            $('#charcounter2').text(length);
            if ($("#counterDemo2").val().length > 30) {
                $("#counterDemo2_badge").last().addClass("badge-danger");
            } else {
                $("#counterDemo2_badge").last().removeClass("badge-danger");
            }
        });
    });
</script>