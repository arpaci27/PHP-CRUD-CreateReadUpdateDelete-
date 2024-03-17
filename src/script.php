<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script type="text/javascript">
    function submitData(action){
        var data = {
            action: action,
            id: $("#id").val(),
            name: $("#name").val(),
            email: $("#email").val(),
            gender: $("#gender").val()
        };
        $.ajax({
            type: "post",
            url: "function.php",
            data: data,
            success: function(response){
                alert(response);
            }
        });
    }
</script>