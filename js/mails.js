(function($) {

    $( "#mailSend" ).click( (event) => {
        event.preventDefault()

        if( $("#mailMail").val().trim() != "" &&
            $("#mailSubject").val().trim() != "" &&
            $("#mailName").val().trim() != "" &&
            $("#mailMessage").val().trim() != "") {

            $.ajax({
                type: "POST",
                url: "./scripts/contact-script.php",
                data: "mail=" + $("#mailMail").val() + "&subject=" + $("#mailSubject").val() + "&name=" + $("#mailName").val() + "&message=" + $("#mailMessage").val(),
                success: function (response) {
                    console.log("ODOSLANE !");
                    console.log(response);

                    $("#mailMail").val("")
                    $("#mailSubject").val("")
                    $("#mailName").val("")
                    $("#mailMessage").val("")

                    // setTimeout(function(){
                    //     location.reload();
                    // }, 4000)
                },
                error: function (err, r, s) {
                    console.error(r + ", " + s)
                }
            }).fail(function (err) {
                console.log(err.responseText);
            });

        }

    } )

})(jQuery)