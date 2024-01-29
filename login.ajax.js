$(document).ready(function() {

    $("#login_button").click(function() {

        var formData = $("#loginForm").serialize();

        $.ajax({
            type: "POST",
            url: $("#loginForm").attr("action"), 
            data: formData,
            success: function(response) {
                if ( response == 'valid') {
                    window.location.href = './dashboard.php';
                }
                else {

                    const error_section = document.getElementById('error_section');
                    error_section.innerHTML = 'invalid username or password';
                }
                console.log(response);         
            },
            error: function(error) {
                console.error("AJAX request failed: ", error);
            }
        });
    });
});