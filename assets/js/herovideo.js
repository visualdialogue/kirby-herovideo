document.addEventListener('DOMContentLoaded', function() {

    /*********************
    * Hero Video Ajax
    *********************/

    /**
    * Home page video
    * via ajax so page can be cached AND still use mobile detect plugin for responsive video
    * immediated invoked object literal, from https://2ality.com/2013/11/immediately-invoked.html
    **/
    ({
        url: 'herovideoajax.json',

        /**
         * run these after each ajax call and replace
         **/
        init: function() {
                
            // get html for video
            $.getJSON(this.url)
            .done(function(json) {
                // set html from json
                document.getElementById('hero-video-ajax-replacement').outerHTML = json;
    
            })
            .fail(function( jqxhr, textStatus, error ) {
                var err = textStatus + ", " + error;
                console.log( "herovideoajax.json request failed: " + err );
            });
        },
    }.init());
    // }); // dont run during testing



    /**
    * set hero height to height of remaining screen area, minus header
    * initially built for desktop but mobile helpful too for various mobile browser viewports and iOS annoying nav bar
    * immediated invoked object literal, from https://2ality.com/2013/11/immediately-invoked.html
    **/
    // ({
    //     heroSection: document.querySelector('.hero-section'),
    //     // heroVideo: document.querySelector('#hero-video'),
    //     // set hero video height to fill browser below header
    //     headerElement: document.querySelector('#header'),            

    //     init: function() {
    //         // not for mobile right now
    //         if(!site.isMobile) {
    //             var windowHeight = window.innerHeight;
    //             var headerHeight = this.headerElement.clientHeight;
    //             var availableHeroHeight = windowHeight - headerHeight;
    //             this.heroSection.style.minHeight = availableHeroHeight + 'px'; // set height for smaller screens, but max-height in css should prevent vertical orientation from breaking it
    //             // this.heroVideo.style.minHeight = availableHeroHeight + 'px'; // set height for smaller screens, but max-height in css should prevent vertical orientation from breaking it

    //             document.body.classList.add('hero-height-set'); // say you are done
    //         }
    //     }
    // }.init());

    


    // remove white line below video on some resolutions
    // will change bg color to black
    // listen for poster loaded, from https://stackoverflow.com/a/33800264/4504073 and https://stackoverflow.com/a/20046077/4504073
    // immediately invoked function expression for var scoping, from https://blog.mgechev.com/2012/08/29/self-invoking-functions-in-javascript-or-immediately-invoked-function-expression/


});