$(document).ready( function() {

    let itemsPerPage = 2;

    async function getJobs(itemsToShow) {
        let id;

        let options = {
            "method": "POST",
            "Access-Control-Allow-Headers": "*",
            "Access-Control-Allow-Origin": "*",
            "cache": "no-cache",
            "headers": {
                "Content-type": "application/x-www-form-urlencoded; charset=UTF-8"
            },

        }
        await fetch( "getJobs.php", options )
            .then( (data) => data.json() )
            .then( (data) => {
                console.log(data)
                data.forEach( position => {

                    if ($("<ul class=\"datacruit-open-positions-list\">").length > 0) {
                        $("<ul class=\"datacruit-open-positions-list\">").remove()
                    }

                    let html = `<ul class="datacruit-open-positions-list">`;

                    id = 0;

                    data.forEach(position => {

                        html += `
                        <li id="${id++}" class="${(id > itemsToShow ? "to-hide hidden" : null)}">
                            <a href="/position/?id=${position.id}" class="position">${position.title}</a>
                        </li>`;

                    });

                    html += `</ul>`;

                    $("#open-positions-wrapper").html(html);
                } )
                if( id > itemsPerPage )
                    $(".showAll").removeClass("hidden")
            } )
            .catch( function(error){ return error } )
    }

    getJobs(itemsPerPage)

    let jobInterval = setInterval( function(){getJobs(itemsPerPage)}, 3000 );

    $("#open-positions-wrapper").after("<div class='row col hrefs mt-5 mb-5 '><a href='' class='showAll hidden mx-auto col-6 px-3 py-1 border-red row'><p class='m-auto text-uppercase'>See more</p></a></div>")

    $( ".showAll" ).on("click", function(e) {
        e.preventDefault()

        if( jobInterval === null ) {
            jobInterval = setInterval( function(){getJobs(itemsPerPage)}, 3000 );
        } else {
            clearInterval(jobInterval)
            jobInterval = null
        }

        Object.values($("#open-positions-wrapper .to-hide")).forEach(li=>$(li).toggleClass("hidden"))
    })

})