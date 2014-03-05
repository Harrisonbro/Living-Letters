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

  CATH.windowWidthInEms = function() {
    return $(window).width() / parseFloat($("body").css("font-size"));
  }

  CATH.responsiveVideo = function() {
    $('.video-container').fitVids();
  };

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
  };

  CATH.annotations = function() {
    var $annotations = $('.annotation')
      , $annotationCallouts = $('.annotation-callout')
      , annotationStyles = document.createElement('style');

    // Create style element for use later
    annotationStyles.type = 'text/css';
    if(annotationStyles.styleSheet) { annotationStyles.styleSheet.cssText = ""; }
    else { annotationStyles.appendChild(document.createTextNode("")); }
    document.getElementsByTagName("head")[0].appendChild(annotationStyles);
    
    // Positioning of callouts
    function calloutPositioning(annotationStyles) {
      var annotationStyleText = "";
      $.each($annotationCallouts, function(index, value){
        var $this = $(value)
          , $annotation = $($this.attr('data-annotation'))
          , yPos = $annotation.position().top;
        $this.css("top", yPos);
        // Get type class from annotation and apply to callout
        var classes = $annotation.attr('class').split(' ');
        $.each(classes, function(index, value){
          if( value.indexOf("annotation-type") != -1 ) {
            $this.addClass(value);
          }
        });
        // Add line to link callout to annotation
        $annotation.prepend('<i class="js-annotation-start">&#8202;</i>');
        var annotationXPos = $annotation.find('.js-annotation-start').position().left
          , calloutXPos = $this.position().left
          , diff = calloutXPos - annotationXPos;
        console.log($annotation.find('.js-annotation-start'));
        annotationStyleText += "
        #" + $this.attr('id') + ":before {
          width: " + diff + "px;
          left: -" + diff + "px;
        }
        ";
      });
      if(annotationStyles.styleSheet) { annotationStyles.styleSheet.cssText = annotationStyleText; }
      else { annotationStyles.appendChild(document.createTextNode(annotationStyleText)); }
    }
    calloutPositioning(annotationStyles);
    $(window).smartresize(function(){
      calloutPositioning(annotationStyles);
    });
    
    
    // Hover animations
    $annotations.hover(
      function() {
        var $this = $(this)
          , $callout = $($this.attr('data-callout'));
        $callout.addClass('hover');
      },
      function() {
        var $this = $(this)
          , $callout = $($this.attr('data-callout'));
        $callout.removeClass('hover');
      }
    );
    $annotationCallouts.hover(
      function() {
        var $this = $(this)
          , $annotation = $($this.attr('data-annotation'));
        $annotation.addClass('hover');
      },
      function() {
        var $this = $(this)
          , $annotation = $($this.attr('data-annotation'));
        $annotation.removeClass('hover');
      }
    );

    // Type selector
    $('.js-type-toggle').click(function(event){
      event.preventDefault();
      var $this = $(this)
        , type = $this.attr('data-toggle');
      if( $this.hasClass('active') ) {
        $this.removeClass('active');
        $('.annotation, .annotation-callout').removeClass('hidden');
      } else {
        $('.js-type-toggle').removeClass('active');
        $this.addClass('active');
        $('.annotation, .annotation-callout').removeClass('hidden');
        $('.annotation:not(.' + type + '), .annotation-callout:not(.' + type + ')').addClass('hidden');
      }
      calloutPositioning(annotationStyles); // reset callout positions
    });

  };

});
/**
 * [END] Functions
 */

jQuery(document).ready(function($) {

  CATH.responsiveVideo();
  CATH.modals();
  CATH.annotations();

});
/**
 * [END] Document ready
 */