/****************/
//tootip v 1.0
/****************/
(function ($) {

/// call here 
// tool_tip


  th_tooltip();
  function th_tooltip(){
    // fn start 
          let initTooltip = $("[th-tooltip]");
      if (initTooltip.length) {
        // keep tool tip in document
        let tooltipHtml = '<div class="tooltip-show-with-title">';
        tooltipHtml += '<span class="th-ttt"></span>';
        tooltipHtml +=
          '<svg class="pointer_" viewBox="0 0 1280 70" preserveAspectRatio="none">';
        tooltipHtml += '<polygon points="1280,70 0,70 640,0 "></polygon>';
        tooltipHtml += "</svg>";
        tooltipHtml += "</div>";
        setTimeout(() => {
          let keepToolTip = $(".tooltip-show-with-title");
          if (keepToolTip.length == 0) {
            $("body").append(tooltipHtml);
          }
        }, 1000);

        $(document).on(
          {
            mouseenter: function () {
              let element = $(this);
              let element_ = element[0].getBoundingClientRect();
              let tooltip_ = $(".tooltip-show-with-title");
              //text and content
              let title_ = element.attr("th-tooltip");
              tooltip_.find(".th-ttt").text(title_);
              // style and dimensions
              // calculate top
              let getScrollTop = $(window).scrollTop();
              let tooltip = tooltip_[0].getBoundingClientRect();
              let TopMargin = element_.top - (tooltip.height + 12);
              TopMargin = getScrollTop + TopMargin;
              // calculate left
              let getTTwidth = tooltip.width / 2;
              let elementWidth = element_.width / 2;
              let leftMargin = element_.left - (getTTwidth - elementWidth);
              tooltip_.addClass("active");
              tooltip_.css({ top: TopMargin, left: leftMargin });
            },
            mouseleave: function () {
              let element_ = $(this);
              let tooltip = $(".tooltip-show-with-title");
              tooltip.removeClass("active");
            },
          },
          "[th-tooltip]"
        ); 
      }
    // fn end 
  }
})(jQuery);
