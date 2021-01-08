(function($) {

    function initCookies() {
        if( ! $.cookie( "visit" ) ) {
            $( "body" ).append( "<div class='cookies-box'>By using this website you agree with using cookies and <a href='/cookies-and-gdpr.php' class='gdpr'> GDPR </a> terms. <a class='cookies-box-btn' data-cookies='accept'>Confirm</a></div>" )
        }
    }

    function acceptCookies( ip ) {
        let data = {
            ip: ip,
            accepted: 1
        }

        $.ajax( {
            type:"POST",
            url:"/scripts/cookie-script.php",
            data: "ip="+ip+"&accepted=1",
            success: function( response ) {
                $.cookie( "visit", "1", { expires: 14, path: "/" } )
                // $( ".cookies-box" ).fadeOut()

                $( ".cookies-box" ).hide(400)
                if( $( "#cookiesState" ).length ) {
                    $("#cookiesState").text( "Accepted." )
                }
                // console.log( response )
            },
            error: function( error, s, r ) {
                // console.log( s + ", " + r )
            }
        } )
    }

    initCookies()

    if( $( ".cookies-box" ).length ) {

        $( ".cookies-box-btn" ).click( (event) => {
            let ipClient = $( "meta[name=ip]" ).attr( "content" )
            // console.log( ipClient )

            event.preventDefault()
            acceptCookies( ipClient )
        } )

    }

    if( $.cookie( "visit" ) ) {
        if( $( "#cookiesState" ).length ) {
            $("#cookiesState").text( "Accepted." )
            $( "#deleteCookies").text(" - Click here to remove cookies.")
        }
    } else {
        if( $( "#cookiesState" ).length ) {
            $("#cookiesState").text("Not accepted yet.")
            $( "#removeCookies").text("")
        }
    }

    $( "#deleteCookies" ).on( "click", function( e ) {
        e.preventDefault()

        $.removeCookie( "visit" )
        $("#cookiesState").text("Not accepted yet.")
        initCookies()
    } )

})(jQuery)