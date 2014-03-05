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
jQuery(document).ready(function($) {

  CATH.responsiveVideo = function() {
    $('.video-container').fitVids();
  }

  CATH.modals = function() {
    $('.js-modal-toggle').click(function(event){
      event.preventDefault();
      $this = $(this);
      var selector = $this.attr('data-modal');
      console.log( selector );
      $(selector).modal({
        showClose: false
      });
    });
  }

});
/**
 * [END] Functions
 */

jQuery(document).ready(function($) {

  CATH.responsiveVideo();
  CATH.modals();

});
/**
 * [END] Document ready
 */