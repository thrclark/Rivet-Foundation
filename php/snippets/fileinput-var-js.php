<script>
    $(document).ready(function() {
        $('#my-file-input1').change(function() {
            var filename = $('#my-file-input1').val().split('\\').pop();
            $('#file-description1').html(filename);
        });
    });
</script>