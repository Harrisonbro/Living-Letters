WebFontConfig = {
    typekit: { id: 'agm8rag' },

    loading: function() {
        console.log( 'Loading Typekit fonts...' );
    },

    active: function() {
        jQuery(document).ready(function($) {
            console.log( 'Typekit fonts loaded.' );
            CATH.annotations();
        });
    },

    inactive: function() {
        jQuery(document).ready(function($) {
            console.error( 'Typekit fonts failed.' );
            CATH.annotations();
        });
    }
};

(function(d) {
    console.log( "Running webfont loader..." );
    var wf = d.createElement('script'), s = d.scripts[0];
    wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
    wf.async = true;
    s.parentNode.insertBefore(wf, s);
})(document);
