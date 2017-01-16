/**
 * Created by Ulth4ne on 16.01.2017.
 */

$.fn.extend({
    /**
     * Adding and removing the animation on its completion
     * @param animationName title animation
     */
    animateCss: function(animationName) {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        this.addClass('animated ' + animationName).one(animationEnd, function() {
            $(this).removeClass('animated ' + animationName);
        });
    }
});

// Example: $('#yourElement').animateCss('bounce');