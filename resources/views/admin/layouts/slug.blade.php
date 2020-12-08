
<script>
    $("#title").keyup(function(){
        var text = $(this).val();
        // This is test
        //this-is-test
        text = text.toLowerCase();
        var regExp = /\s+/g;
        text = text.replace(regExp,'-');
        $("#slug").val(text);
    });
</script>

