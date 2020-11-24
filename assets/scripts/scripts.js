jQuery.noConflict();

jQuery(document).ready( function( $ ) {
    
    jQuery('input[name=data]').on('click focus', function() {
        jQuery(this).attr('type', 'date');
    })    
    
    jQuery(function () {
        jQuery('[data-toggle="tooltip"]').tooltip()
    })
})