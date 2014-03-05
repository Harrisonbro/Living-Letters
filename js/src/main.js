/**
 * Create site object if it doesn't already exist
 */
var CATH = CATH || {}; 

/**
 * Site config
 */
CATH.breakpoints = { // in Ems
  med: 37.5,
  lrg: 50
}

/**
 * Functions
 */
(function( $ ){

  CATH.fitvids = function() {
    alert('doing cath');
    $('.video-container').fitVids();
  }

})(jQuery);
/**
 * [END] Functions
 */

jQuery(document).ready(function($) {

  CATH.fitvids();

}); 
/**
 * [END] Document ready
 */