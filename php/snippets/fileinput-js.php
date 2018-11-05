<script>
    $(document).ready(function() {
        $('#my-file-input').change(function() {
            var filename = $('#my-file-input').val().split('\\').pop();
            $('#file-description').html(filename);
        });
        $('#my-file-input-2').change(function() {
            var filename = $('#my-file-input-2').val().split('\\').pop();
            $('#file-description-2').html(filename);
        });
    });
</script>