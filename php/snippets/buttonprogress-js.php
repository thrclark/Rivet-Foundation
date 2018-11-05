<script>
    $(document).ready(function() {
        $(function() {
            $("#ButtonProgressDemo").click(function() {
                $('.btn-progressable').addClass('rbt-btn-progress');
				$("#ButtonProgressDemo").prop('disabled', true);
                $(".btn-label").text("Saving...");
                setTimeout(function() {
                    $('.btn-progressable').removeClass('rbt-btn-progress');
					$("#ButtonProgressDemo").prop('disabled', false);
                    $(".btn-label").text("Click me");
                }, 4000)
            });
        });
    });
</script>


