/*
 ** UltraCart - Wordpress Plugin
 ** http://www.ultracart.com/
 ** Copyright (c) 2016 BPS Info Solutions Inc.  All rights reserved.
 */
;
(function ($, window) {
  'use strict';

  var name = 'ultraslider',
    id = 0,
    defaults = {
      speed: 300,
      aggressivePreload: false
    };

  function Plugin(el, options) {
    // To avoid scope issues, use 'base' instead of 'this'
    // to reference this class from internal events and functions.
    var base = this;

    // Access to jQuery and DOM versions of element
    base.$el = $(el);
    base.el = el;
    base.id = id++;
    base.$window = $(window);
    base.$document = $(document);

    base.originalPosition = base.$el.css('position');
    if (!base.originalPosition) base.originalPosition = 'static';

    // Listen for destroyed, call teardown
    base.$el.bind('destroyed',
      $.proxy(base.teardown, base));

    base.init = function () {
      base.setOptions(options);

      base.$el.each(function () {
        var $this = $(this);

        // Take their UL/LI and wrap it with all the divs we need
        $this.wrap("<div class='ultraslider-thumbnail-list-container'></div>");
        base.$thumbnailListContainer = $this.parent();
        base.$thumbnailListContainer.wrap("<div class='ultraslider-thumbnail-container'></div>");
        base.$thumbnailList = base.$thumbnailListContainer.parent();

        base.$thumbnailList.wrap("<div class='ultraslider-thumbnail-wrapper'></div>");
        base.$thumbnailListWrap = base.$thumbnailList.parent();

        base.$thumbnailListWrap.prepend("<div class='ultraslider-thumbnail-list-left'></div>");
        base.$thumbnailListWrap.append("<div class='ultraslider-thumbnail-list-right'></div>");
        $("<div class='ultraslider-medium-holder'></div>").insertBefore(base.$thumbnailListWrap);
        $("<div class='ultraslider-paging-holder'></div>").insertAfter(base.$thumbnailListWrap);
        base.$thumbnailListLeft = base.$thumbnailListWrap.find(".ultraslider-thumbnail-list-left");
        base.$thumbnailListRight = base.$thumbnailListWrap.find(".ultraslider-thumbnail-list-right");

        base.$mediumHolder = base.$thumbnailListWrap.parent().find(".ultraslider-medium-holder");
        base.$pagingHolder = base.$thumbnailListWrap.parent().find(".ultraslider-paging-holder");

        // Give everything an index and create the paging bullets
        base.$pagingHolder.append("<ul></ul>");
        var $pagingList = base.$pagingHolder.find("ul");
        base.$thumbnailListContainer.find("ul li").each(function (index, element) {
          $(element).attr('data-ultraslider-index', index);

          $pagingList.append(jQuery("<li><span></span></li>").attr('data-ultraslider-index', index));
        });

        base.activeIndex = 0;
        base.imageCount = base.$thumbnailListContainer.find("ul li").length;

        // Grab the dimensions for the the thumbnail and medium off the data attributes with sane defaults
        var smallDimensions = $this.data('small-dimensions');
        if (!smallDimensions) {
          smallDimensions = "100x100";
        }
        var mediumDimensions = $this.data('medium-dimensions');
        if (!mediumDimensions) {
          mediumDimensions = "360x360";
        }

        base.smallDimensionsWidth = smallDimensions.split("x")[0];
        base.smallDimensionsHeight = smallDimensions.split("x")[1];
        base.mediumDimensionsWidth = mediumDimensions.split("x")[0];
        base.mediumDimensionsHeight = mediumDimensions.split("x")[1];

        base.$mediumHolder.css('max-width', base.mediumDimensionsWidth + 'px').css('height', base.mediumDimensionsHeight + 'px');

        base.$thumbnailListContainer.find("ul li").each(function (index, element) {
          $(element).css('width', base.smallDimensionsWidth + 'px');
          $(element).css('height', base.smallDimensionsHeight + 'px');
        });

        base.loadImage(base.activeIndex);

        // If they want to aggressively preload, then wait 2 seconds then run through all the images and trigger the preload
        if (base.options.aggressivePreload) {
          setTimeout(function(){
            for (var  i = 0; i < base.imageCount; i++) {
              base.preloadImage(i);
            }
          }, 2000);
        }

        // If there is only one image, then hide the unnecessary sections
        if (base.imageCount === 1) {
          base.$thumbnailListWrap.hide();
          base.$pagingHolder.hide();
        }

      });

      base.bind();
    };

    base.loadImageFinal = function (index) {

      base.$thumbnailListContainer.find("ul li").removeClass("ultraslider-active");
      base.$thumbnailListContainer.find("ul li[data-ultraslider-index='" + index + "']:not(.ultraslider-cloned)").addClass("ultraslider-active");
      base.$pagingHolder.find("ul li").removeClass("ultraslider-active");
      base.$pagingHolder.find("ul li[data-ultraslider-index='" + index + "']").addClass("ultraslider-active");

      // Remove all the cloned images
      var $ul = base.$thumbnailListContainer.find("ul");
      base.$thumbnailListContainer.find("ul li.ultraslider-cloned").remove();

      // How wide are things before adding any of the cloned images?
      var thumbnailListContainerWidth = 0;
      var thumnbailListContainerHeight = 0;
      base.$thumbnailListContainer.find("ul li").each(function (index, element) {
        var $element = $(element);
        thumbnailListContainerWidth += $element.outerWidth(true);
        thumnbailListContainerHeight = Math.max(thumnbailListContainerHeight, $element.outerHeight(true));
      });
      // Set the calculated height based upon the thumbnail list entries
      base.$thumbnailList.css('height', thumnbailListContainerHeight + 'px');

      base.$thumbnailListLeft.css('top', (thumnbailListContainerHeight / 2 - base.$thumbnailListLeft.outerHeight(true) / 2) + 'px');
      base.$thumbnailListRight.css('top', (thumnbailListContainerHeight / 2 - base.$thumbnailListRight.outerHeight(true) / 2) + 'px');

      if (thumbnailListContainerWidth <= base.$thumbnailList.width()) {
        base.$thumbnailListContainer.css('width', thumbnailListContainerWidth + 'px');
        base.$thumbnailList.addClass('ultraslider-noscrolling').removeClass('ultraslider-scrolling');
        base.$pagingHolder.hide();
      } else {
        base.$thumbnailListContainer.find("ul li:not(.ultraslider-cloned)").each(function (index, element) {
          var $clone = $(element).clone(true, true);
          $clone.addClass('ultraslider-cloned').removeClass('ultraslider-active');
          $ul.append($clone);
        });
        $(base.$thumbnailListContainer.find("ul li:not(.ultraslider-cloned)").get().reverse()).each(function (index, element) {
          var $clone = $(element).clone(true, true);
          $clone.addClass('ultraslider-cloned').removeClass('ultraslider-active');
          $ul.prepend($clone);
        });

        // Measure again after adding all the clones
        thumbnailListContainerWidth = 0;
        base.$thumbnailListContainer.find("ul li").each(function (index, element) {
          thumbnailListContainerWidth += $(element).outerWidth(true);
        });

        base.$thumbnailListContainer.css('width', thumbnailListContainerWidth + 'px');
        base.$thumbnailList.addClass('ultraslider-scrolling').removeClass('ultraslider-noscrolling');
        base.$pagingHolder.show();
      }

      var selectedImage = base.$thumbnailListContainer.find("ul li.ultraslider-active img");
      var selectedImageLi = selectedImage.parent();

      var offset = (base.$thumbnailList.width() / 2) - selectedImageLi.position().left - (selectedImageLi.outerWidth(true) / 2);
      base.$thumbnailListContainer.css("left", offset + 'px');

      // Get the src value
      var src = selectedImage.data('medium-src');
      if (!src) {
        src = selectedImage.attr("src");
      }

      // Get the alt text
      var alt = selectedImage.attr('alt');

      if (base.$mediumHolder.find("img").length === 0) {
        var $img = $("<img>");
        $img
            .attr('src', src)
            .attr('alt', alt || '');
        base.$mediumHolder.append($img);
      } else {
        base.$mediumHolder.find("img")
            .attr('src', src)
            .attr('alt', alt || '');
      }

      if (base.$mediumHolder.width() < base.mediumDimensionsWidth) {
        var scale = base.$mediumHolder.width() / base.mediumDimensionsWidth;
        var maxHeight = base.mediumDimensionsHeight * scale;

        base.$mediumHolder.find("img").css("max-height", maxHeight + 'px');
        base.$mediumHolder.css("height", 'initial');
      } else {
        base.$mediumHolder.find("img").css("max-height", '100%');
        base.$mediumHolder.css("height", base.mediumDimensionsHeight + 'px');
      }

      // Update the active index
      base.activeIndex = index;

      // Trigger preloads of the adjoining image
      base.preloadImage(index - 1);
      base.preloadImage(index + 1);
    };

    base.loadImage = function (index, $clickedImage) {
      if ($clickedImage && !base.$thumbnailList.hasClass('ultraslider-noscrolling')) {
        var $currentActive = base.$thumbnailListContainer.find("ul li.ultraslider-active");
        if ($currentActive.length === 0) {
          base.loadImageFinal(index);
          return;
        }
        var diff = $clickedImage.position().left - $currentActive.position().left;

        $currentActive.removeClass('ultraslider-active');
        $clickedImage.addClass('ultraslider-active');

        var newLeft = base.$thumbnailListContainer.position().left - diff;
        base.$thumbnailListContainer.stop().animate({
          left: newLeft + 'px'
        }, base.options.speed, function () {
          base.loadImageFinal(index);
        });
      } else {
        base.loadImageFinal(index);
      }
    };

    base.preloadImage = function (index) {
      if (index < 0) {
        index = base.imageCount - 1;
      }
      if (index >= base.imageCount) {
        index = 0;
      }

      var $img = base.$thumbnailListContainer.find("ul li[data-ultraslider-index='" + index + "'] img:not(.preload)");
      var $preloadImg = base.$thumbnailListContainer.find("ul li[data-ultraslider-index='" + index + "'] img.preload");

      var mediumSrc = $img.data('medium-src');
      if (!mediumSrc) {
        console.log("No data-medium-src on ", $img, " at index ", index);
        return;
      }

      if ($preloadImg.length === 0) {
        $preloadImg = $("<img class='preload'>");
        $preloadImg.attr('src', mediumSrc);
        $img.parent().append($preloadImg);
      }
    };

    base.destroy = function () {
      base.$el.unbind('destroyed', base.teardown);
      base.teardown();
    };

    base.teardown = function () {
      $.removeData(base.el, 'plugin_' + name);
      base.unbind();

      base.el = null;
      base.$el = null;
    };

    base.windowResize = function () {
      base.loadImageFinal(base.activeIndex);
    };

    base.bind = function () {
      base.$window.on('resize.' + name + base.id, base.windowResize);

      base.$thumbnailListLeft.on("click", base.previousImage);
      base.$thumbnailListRight.on("click", base.nextImage);

      base.$mediumHolder.on("click", function (event) {
        event.stopPropagation();
        event.preventDefault();

        var largeUrls = [];
        base.$thumbnailListContainer.find("ul li:not(.ultraslider-cloned) img:not(.preload)").each(function (index, element) {

          var $element = $(element);

          var src = $element.data('large-src');
          if (!src) {
            src = $element.data('medium-src');
          }
          if (!src) {
            src = $element.attr("src");
          }

          largeUrls.push(src);
        });

        // Trigger the event for the listen to handle
        base.$el.trigger("lightbox", {'largeUrls': largeUrls, 'index': base.activeIndex});
      });

      base.$pagingHolder.find("ul li").on("click", function (event) {
        event.stopPropagation();
        event.preventDefault();

        var index = jQuery(this).data('ultraslider-index');
        var thumbnail = base.$thumbnailListContainer.find("ul li[data-ultraslider-index='" + index + "']:not(.ultraslider-cloned)");
        if (thumbnail.length > 0) {
          thumbnail.click();
        } else {
          base.loadImage(index);
        }
      });

      base.$thumbnailList.on("touchstart mousedown", base.swipeStart);
      base.$thumbnailList.on("touchmove mousemove", base.swipeMove);
      base.$thumbnailList.on("touchend mouseup", base.swipeEnd);
      base.$thumbnailList.on("touchcancel mouseleave", base.swipeEnd);

      // Bind these AFTER the swipe related events so we can stop the click from processing on a mouseup if we were dragging
      base.$thumbnailList.find("ul li").on("click", function (event) {
        if (base.dragging) return;
        // Clicks are ignored for 200ms after a drag.
        if (base.ignoreClick) return;
        base.draggingStart = false;
        event.stopPropagation();
        event.preventDefault();
        base.loadImage(jQuery(this).data('ultraslider-index'), jQuery(this));
      });
    };

    base.coordinatesForMouseTouchEvent = function(event) {
      var touches;
      if (event.originalEvent !== undefined && event.originalEvent.touches !== undefined) {
        touches = event.originalEvent.touches[0];
      }

      return {
        'x': (touches !== undefined ? touches.pageX : event.clientX),
        'y': (touches !== undefined ? touches.pageY : event.clientY)
      };
    };

    base.swipeStart = function (event) {
      var coords = base.coordinatesForMouseTouchEvent(event);
      base.draggingStart = true;
      base.draggingStartX = coords.x;
      base.draggingStartLeft = base.$thumbnailListContainer.position().left;
    };

    base.swipeMove = function (event) {
      var coords = base.coordinatesForMouseTouchEvent(event);
      var diff = coords.x - base.draggingStartX;
      // Have we started dragging?
      if (base.draggingStart && !base.dragging && Math.abs(diff) >= 30) {
        base.dragging = true;
      }

      event.stopPropagation();
      event.preventDefault();

      // Ignore this unless we are dragging
      if (!base.dragging) return;

      base.$thumbnailListContainer.css('left', (base.draggingStartLeft + diff) + 'px');
    };

    base.swipeEnd = function (event) {
      // Ignore this unless we are dragging
      base.draggingStart = false;
      if (!base.dragging) return;
      event.stopPropagation();
      event.preventDefault();
      event.stopImmediatePropagation();
      base.dragging = false;
      base.ignoreClick = true;
      setTimeout(function(){
        base.ignoreClick = false;
      }, 200);

      var seekImageAtX = (-1 * base.$thumbnailListContainer.position().left) + (base.$thumbnailList.width() / 2);
      if (seekImageAtX < 10) {
        seekImageAtX = 10;
      }

      base.$thumbnailListContainer.find("ul li").each(function(index, element){
        var $element = $(element);

        var left = $element.position().left;
        var right = left + $element.outerWidth(true);
        if (left <= seekImageAtX && right >= seekImageAtX) {
          base.loadImageFinal($element.data('ultraslider-index'));
          return false;
        }
      });

    };

    base.previousImage = function (event) {
      event.stopPropagation();
      event.preventDefault();

      // If possible act like they clicked the next thumbnail to get animation
      var previousSlide = base.$thumbnailList.find("li.ultraslider-active").prev("li");
      if (previousSlide.length > 0) {
        previousSlide.click();
        return;
      }


      base.activeIndex--;
      if (base.activeIndex < 0) {
        base.activeIndex = base.imageCount - 1;
      }

      base.loadImage(base.activeIndex);
    };

    base.nextImage = function (event) {
      event.stopPropagation();
      event.preventDefault();

      // If possible act like they clicked the next thumbnail to get animation
      var nextSlide = base.$thumbnailList.find("li.ultraslider-active").next("li");
      if (nextSlide.length > 0) {
        nextSlide.click();
        return;
      }

      base.activeIndex++;
      if (base.activeIndex >= base.imageCount) {
        base.activeIndex = 0;
      }

      base.loadImage(base.activeIndex);
    };

    base.unbind = function () {
      // unbind window events by specifying handle so we don't remove too much
      base.$window.on('.' + name + base.id, base.windowResize);
    };

    base.setOptions = function (options) {
      base.options = $.extend({}, defaults, options);
    };

    //noinspection JSUnusedGlobalSymbols
    base.updateOptions = function (options) {
      base.setOptions(options);
      base.unbind();
      base.bind();
    };

    // Run initializer
    base.init();
  }

  // A plugin wrapper around the constructor,
  // preventing against multiple instantiations
  $.fn[name] = function (options) {
    return this.each(function () {
      var instance = $.data(this, 'plugin_' + name);
      if (instance) {
        if (options === 'destroy') {
          instance.destroy();
        } else if (typeof options === 'string') {
          instance[options].apply(instance);
        } else {
          instance.updateOptions(options);
        }
      } else if (options !== 'destroy') {
        $.data(this, 'plugin_' + name, new Plugin(this, options));
      }
    });
  };

})(jQuery, window);