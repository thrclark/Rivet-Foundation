<script>
    // Open/close search panel
    $("#findIcon").click(function() {
        $(".icon-search").show();
    });
    $("#cancelSearch,#iconSelection button ").click(function() {
        $(".icon-search").hide();
    });
    // Set icon name
    $("#iconSelection button").click(function() {
        $(".icon-name").replaceWith("<div class='cell icon-name'>" + $(this).text() + "</div>");
    });
    // Set icon class
    $("#iconSelection button i").click(function() {
        var iconClass = $(this).attr("class");
        $(".icon-display i").removeClass();
        $(".icon-display i").addClass(iconClass);
    });
    // Filtering function
    function selectIcon() {
        var input, filter, iconSelection, button, span, i;
        input = document.getElementById("selectIcon");
        filter = input.value.toUpperCase();
        iconSelection = document.getElementById("iconSelection");
        button = iconSelection.getElementsByTagName("button");
        for (i = 0; i < button.length; i++) {
            span = button[i].getElementsByTagName("span")[0];
            if (span.innerHTML.toUpperCase().indexOf(filter) > -1) {
                button[i].style.display = "";
            } else {
                button[i].style.display = "none";
            }
        }
    }
</script>