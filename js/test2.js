$(document).ready( function() {

    $( ".customScroll" ).on( "click", function( e ) {
        e.preventDefault()
        window.location.replace( "https://" + window.location.hostname + "/" + $(this).attr("name") )
    } )

})