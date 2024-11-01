/*
 ** UltraCart - Wordpress Plugin
 ** http://www.ultracart.com/
 ** Copyright (c) 2016 BPS Info Solutions Inc.  All rights reserved.
 */
;
(function ($, window) {

    function ultrasliderLightboxShow(largeUrls, startingIndex) {
        // Sanity check
        if (!largeUrls || largeUrls.length == 0) return;

        console.log("ultrasliderLightboxShow", largeUrls, startingIndex);

        var currentIndex = startingIndex - 1;
        var imageUrl = largeUrls[currentIndex];

        console.log("imageUrl", imageUrl);

        var $body = jQuery("body");
        $body.addClass("ultraslider-lightbox-open");
        var $lightboxOverlay = jQuery('.ultraslider-lightbox');
        if ($lightboxOverlay.length === 0) {
            $lightboxOverlay = jQuery("<div class='ultraslider-lightbox' tabindex='1'></div>");
            $body.append($lightboxOverlay);

            $lightboxOverlay.on("click", function () {
                jQuery(this).hide();
                $body.removeClass("ultraslider-lightbox-open");
            });
            $lightboxOverlay.on("keyup", function (event) {
                event.stopPropagation();
                event.preventDefault();

                switch (event.keyCode) {
                    case 37: // left arrow
                        currentIndex--;
                        if (currentIndex < 0) currentIndex = largeUrls.length - 1;
                        imageUrl = largeUrls[currentIndex];
                        $img.attr('src', imageUrl);
                        break;
                    case 39: // right arrow
                        currentIndex++;
                        if (currentIndex >= largeUrls.length) currentIndex = 0;
                        imageUrl = largeUrls[currentIndex];
                        $img.attr('src', imageUrl);
                        break;
                    default: // escape or anything else
                        jQuery(this).hide();
                        $body.removeClass("ultraslider-lightbox-open");
                        break;
                }

            });
        }
        $lightboxOverlay.show();
        $lightboxOverlay.focus();
        $lightboxOverlay.empty();

        var $img = jQuery("<img style=''>");
        $img.attr('src', imageUrl);
        $lightboxOverlay.append($img);

        var $closeBtn = jQuery("<div class='ultraslider-lightbox-close-button'>&Cross;</div>");
        // var $closeBtn = jQuery("<div class='ultraslider-lightbox-close-button'><span class='oi' data-glyph='x'></span></div>");
        $lightboxOverlay.append($closeBtn);

        if (largeUrls.length > 1) {
            var $leftBtn = jQuery("<div class='ultraslider-lightbox-left-button'>&lang;</div>");
            // var $leftBtn = jQuery("<div class='ultraslider-lightbox-left-button'><span class='oi' data-glyph='chevron-left'></span></div>");
            $lightboxOverlay.append($leftBtn);
            $leftBtn.on("click", function(event){
                event.stopPropagation();
                event.preventDefault();

                currentIndex--;
                if (currentIndex < 0) currentIndex = largeUrls.length - 1;
                imageUrl = largeUrls[currentIndex];
                $img.attr('src', imageUrl);
            });

            var $rightBtn = jQuery("<div class='ultraslider-lightbox-right-button'>&rang;</div>");
            // var $rightBtn = jQuery("<div class='ultraslider-lightbox-right-button'><span class='oi' data-glyph='chevron-right'></span></div>");
            $lightboxOverlay.append($rightBtn);
            $rightBtn.on("click", function(event){
                event.stopPropagation();
                event.preventDefault();

                currentIndex++;
                if (currentIndex >= largeUrls.length) currentIndex = 0;
                imageUrl = largeUrls[currentIndex];
                $img.attr('src', imageUrl);
            });
        }
    }

    (function init() {
        $("ul.ultraslider-html").each(function (index, element) {

            var $element = jQuery(element);

            // Engage our custom lightbox
            $element.on("lightbox", function(event, info){
                ultrasliderLightboxShow(info.largeUrls, info.index + 1);
            });

            var $bullets = $element.closest(".widget-itemimagegallery").find(".ultraslider-paging-holder li");
            if ($bullets.length === 1) {
                $bullets.hide();
            }
        });
    })();

})(jQuery, window);