$(document).ready( function() {

    async function getJobs(params = {}) {
        let options = {
            "method": "POST",
            "Access-Control-Allow-Headers": "*",
            "Access-Control-Allow-Origin": "*",
            "cache": "no-cache",
            "headers": {
                'Content-Type': 'application/json'
            },
            "body": JSON.stringify(params)
        }
        await fetch( "/getJobs.php", options )
            .then( (data) => data.json() )
            .then( (data) => {
                data.forEach( position => {
                    console.log( position.id, position.title )
                    if( $( "<ul class=\"datacruit-open-positions-list\">" ).length > 0 ) {
                        $( "<ul class=\"datacruit-open-positions-list\">" ).remove()
                    }

                    let html = `<ul class="datacruit-open-positions-list">`;

                    data.forEach(position => {
                        html += `
                            <li>
                                <a href="/position/?id=${position.id}" class="position">${position.title}</a>
                            </li>`;
                    });

                    html += `</ul>`;

                    // $("#open-positions-wrapper").html(html);
                } )
            } )
            .catch( function(error){ return error } )
    }

    async function appendJobs() {

    }

    getJobs()
    setInterval( function(){getJobs()}, 10000 );

})