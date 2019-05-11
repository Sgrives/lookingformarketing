(function($){
    $('#sidenav').DynamicScrollspy({
        affix: false, //affix by default, doesn't work on Bootstrap 4
        tH: 2, //lowest-level header to be included (H2)
        bH: 2, //highest-level header to be included (H6)
        exclude: false, //exclude from the tree/outline any H tags matching this jquery selector
        genIDs: true, //generate random IDs for headers?
        offset: 100, //offset from viewport top for scrollspy
        ulClassNames: 'flex-column', //add this class to top-most UL
        activeClass: '', //active class (besides .active) to add to LI
        testing: false //if testing, append heading tagName and ID to each heading
    });
}(jQuery));

var bricklayer = new Bricklayer(document.querySelector('.bricklayer'));